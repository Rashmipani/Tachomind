<?php
add_filter('show_admin_bar', '__return_false');

require_once get_template_directory() . '/includes/enques.php';

add_filter('intermediate_image_sizes_advanced', 'tachomind_remove_default_images');
// Remove default image sizes here. 
function tachomind_remove_default_images($sizes)
{
    unset($sizes['1536x1536']);
    unset($sizes['2048x2048']);
    unset($sizes['medium_large']);
    return $sizes;
}

// Add all the theme support here
function tachomind_setup()
{
    // Post-thumbnail support
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');

    //custom Image sizes
    // add_image_size('banner', 1920, 600, true);
    add_image_size('medium', 600, 500, true);
}
add_action('after_setup_theme', 'tachomind_setup');

// Add Menu Support to the Theme
function tachomind_menus()
{
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'tachomind'),
        'social-menu' => __('Social Menu', 'tachomind'),
        'footer-quick-links' => __('Footer Quick Links', 'tachomind')
    ));
}
add_action('init', 'tachomind_menus');

function trim_contents($text, $limit)
{
    $lenght =  strlen($text);
    if ($lenght > $limit) {
        $text =  substr($text, 0, $limit) . ' [...]';
    }
    return $text;
}


// Allow WebP upload
add_filter('mime_types', function ($mimes) {
    $mimes['webp'] = 'image/webp';
    return $mimes;
});

// Treat WebP as valid image
add_filter('file_is_displayable_image', function ($result, $path) {
    $info = @getimagesize($path);
    if ($info && isset($info[2]) && $info[2] === IMAGETYPE_WEBP) {
        return true;
    }
    return $result;
}, 10, 2);

// 🚀 IMPORTANT: Disable thumbnail generation ONLY for WebP
add_filter('wp_generate_attachment_metadata', function ($metadata, $attachment_id) {
    $file = get_attached_file($attachment_id);

    if ($file && strtolower(pathinfo($file, PATHINFO_EXTENSION)) === 'webp') {
        // Skip generating sizes
        return [
            'file' => basename($file),
            'sizes' => [],
            'image_meta' => []
        ];
    }

    return $metadata;
}, 10, 2);


remove_action('shutdown', 'wp_ob_end_flush_all', 1);



/* ============================================================
   Case Studies CPT + Category Taxonomy
   ============================================================ */

function tachomind_register_case_studies_cpt() {

    $labels = array(
        'name'               => 'Case Studies',
        'singular_name'      => 'Case Study',
        'menu_name'          => 'Case Studies',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Case Study',
        'edit_item'          => 'Edit Case Study',
        'new_item'           => 'New Case Study',
        'view_item'          => 'View Case Study',
        'all_items'          => 'All Case Studies',
        'search_items'       => 'Search Case Studies',
        'not_found'          => 'No case studies found.',
        'not_found_in_trash' => 'No case studies found in Trash.',
    );

    register_post_type('case_study', array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_rest'       => true,
        'has_archive'        => 'case-studies-list',
        'rewrite'            => array(
            'slug'       => 'case-studies-list',
            'with_front' => false,
        ),
        'menu_icon'          => 'dashicons-portfolio',
        'supports'           => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions',
            'page-attributes',
        ),
    ));

    register_taxonomy('case_study_category', array('case_study'), array(
        'labels' => array(
            'name'          => 'Case Study Categories',
            'singular_name' => 'Case Study Category',
            'menu_name'     => 'Categories',
            'add_new_item'  => 'Add New Category',
            'edit_item'     => 'Edit Category',
        ),
        'public'            => true,
        'hierarchical'      => true,
        'show_admin_column' => true,
        'show_in_rest'      => true,
        'rewrite'           => array(
            'slug'       => 'case-study-category',
            'with_front' => false,
        ),
    ));
}
add_action('init', 'tachomind_register_case_studies_cpt');


/* ============================================================
   Small Helper Functions
   ============================================================ */

function tachomind_get_case_fields($post_id = null) {
    $post_id = $post_id ?: get_the_ID();

    if (!function_exists('get_field')) {
        return array();
    }

    $fields = get_field('case_studies_fields', $post_id);

    return is_array($fields) ? $fields : array();
}

function tachomind_get_case_categories($post_id = null) {
    $post_id = $post_id ?: get_the_ID();

    $terms = get_the_terms($post_id, 'case_study_category');

    if (empty($terms) || is_wp_error($terms)) {
        return array();
    }

    return $terms;
}

function tachomind_get_case_category_name($post_id = null) {
    $terms = tachomind_get_case_categories($post_id);

    if (empty($terms)) {
        return 'Case Study';
    }

    return $terms[0]->name;
}

function tachomind_get_case_category_slugs($post_id = null) {
    $terms = tachomind_get_case_categories($post_id);

    if (empty($terms)) {
        return 'uncategorized';
    }

    $slugs = wp_list_pluck($terms, 'slug');

    return implode(' ', array_map('sanitize_html_class', $slugs));
}

function tachomind_get_case_image_url($post_id = null, $size = 'large') {
    $post_id = $post_id ?: get_the_ID();

    if (has_post_thumbnail($post_id)) {
        return get_the_post_thumbnail_url($post_id, $size);
    }

    return get_template_directory_uri() . '/assets/images/case-study-placeholder.jpg';
}

function tm_register_job_openings_cpt() {

    $labels = array(
        'name'               => 'Job Openings',
        'singular_name'      => 'Job Opening',
        'menu_name'          => 'Job Openings',
        'add_new'            => 'Add New Job',
        'add_new_item'       => 'Add New Job Opening',
        'edit_item'          => 'Edit Job Opening',
        'new_item'           => 'New Job Opening',
        'view_item'          => 'View Job Opening',
        'search_items'       => 'Search Job Openings',
        'not_found'          => 'No job openings found',
        'not_found_in_trash' => 'No job openings found in Trash',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array(
            'slug' => 'careers'
        ),
        'capability_type'     => 'post',
        'has_archive'         => true,
        'hierarchical'        => false,
        'menu_position'       => 20,
        'menu_icon'           => 'dashicons-businessperson',
        'supports'            => array(
            'title',
            'editor',
            'thumbnail',
            'excerpt',
            'revisions'
        ),
    );

    register_post_type('job_opening', $args);
}

add_action('init', 'tm_register_job_openings_cpt');


/**
 * Prevent Everest Forms Inputmask JS from loading
 * on pages that don't contain an Everest Form.
 */
add_action('wp_enqueue_scripts', function () {

    if (is_admin()) {
        return;
    }

    global $post;

    $has_everest_form = false;

    if ($post instanceof WP_Post) {

        // Everest Forms shortcode
        if (has_shortcode($post->post_content, 'everest_form')) {
            $has_everest_form = true;
        }

        // Everest Forms Gutenberg block
        if (
            function_exists('has_block') &&
            (
                has_block('everest-forms/form-selector', $post) ||
                strpos($post->post_content, 'everest-forms') !== false
            )
        ) {
            $has_everest_form = true;
        }
    }

    // Keep scripts when an Everest Form exists.
    if ($has_everest_form) {
        return;
    }

    /*
     * Find Everest Forms Inputmask automatically.
     * This avoids relying on a specific script handle.
     */
    global $wp_scripts;

    if (!isset($wp_scripts->registered)) {
        return;
    }

    foreach ($wp_scripts->registered as $handle => $script) {

        if (empty($script->src)) {
            continue;
        }

        if (
            strpos($script->src, '/everest-forms/') !== false &&
            strpos($script->src, 'inputmask') !== false
        ) {
            wp_dequeue_script($handle);
        }
    }

}, 999);



// function tachomind_register_case_studies_cpt() {

//     $labels = array(
//         'name'               => 'Case Studies',
//         'singular_name'      => 'Case Study',
//         'menu_name'          => 'Case Studies',
//         'add_new'            => 'Add New',
//         'add_new_item'       => 'Add New Case Study',
//         'edit_item'          => 'Edit Case Study',
//         'new_item'           => 'New Case Study',
//         'view_item'          => 'View Case Study',
//         'all_items'          => 'All Case Studies',
//         'search_items'       => 'Search Case Studies',
//         'not_found'          => 'No case studies found.',
//         'not_found_in_trash' => 'No case studies found in Trash.',
//     );

//     $args = array(
//         'labels'             => $labels,
//         'public'             => true,
//         'publicly_queryable' => true,
//         'show_ui'            => true,
//         'show_in_menu'       => true,
//         'query_var'          => true,

//         'rewrite'            => array(
//             'slug'       => 'case-studies',
//             'with_front' => false,
//         ),

//         'has_archive'        => 'case-studies',

//         'capability_type'    => 'post',
//         'hierarchical'       => false,
//         'menu_position'      => 6,
//         'menu_icon'          => 'dashicons-portfolio',

//         'supports'           => array(
//             'title',
//             'editor',
//             'excerpt',
//             'thumbnail',
//             'author',
//             'revisions',
//         ),

//         'show_in_rest'       => true,
//     );

//     register_post_type( 'case_study', $args );
// }
// add_action( 'init', 'tachomind_register_case_studies_cpt' );


// function tachomind_register_case_study_categories() {

//     $labels = array(
//         'name'              => 'Case Study Categories',
//         'singular_name'     => 'Case Study Category',
//         'search_items'      => 'Search Case Study Categories',
//         'all_items'         => 'All Case Study Categories',
//         'parent_item'       => 'Parent Case Study Category',
//         'parent_item_colon' => 'Parent Case Study Category:',
//         'edit_item'         => 'Edit Case Study Category',
//         'update_item'       => 'Update Case Study Category',
//         'add_new_item'      => 'Add New Case Study Category',
//         'new_item_name'     => 'New Case Study Category Name',
//         'menu_name'         => 'Categories',
//     );

//     $args = array(
//         'hierarchical'      => true,
//         'labels'            => $labels,
//         'show_ui'           => true,
//         'show_admin_column' => true,
//         'query_var'         => true,

//         'rewrite'           => array(
//             'slug'       => 'case-study-category',
//             'with_front' => false,
//         ),

//         'show_in_rest'      => true,
//     );

//     register_taxonomy( 'case_study_category', array( 'case_study' ), $args );
// }
// add_action( 'init', 'tachomind_register_case_study_categories' );





// /* ============================================================
//   Force Case Study Templates
//   ============================================================ */

// add_filter('template_include', function ($template) {

//     if (is_singular('case_study')) {
//         $case_single_template = locate_template('single-case_study.php');

//         if (!empty($case_single_template)) {
//             return $case_single_template;
//         }
//     }

//     if (is_post_type_archive('case_study')) {
//         $case_archive_template = locate_template('archive-case_study.php');

//         if (!empty($case_archive_template)) {
//             return $case_archive_template;
//         }
//     }

//     return $template;

// }, 99);