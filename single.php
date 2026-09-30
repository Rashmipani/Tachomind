<?php
/**
 * Single Blog Template
 */

defined('ABSPATH') || exit;

get_header();
?>

<script>
(function () {
    if (window.location.hash) {
        history.replaceState(null, '', window.location.pathname + window.location.search);
    }

    if ('scrollRestoration' in history) {
        history.scrollRestoration = 'manual';
    }
})();
</script>

<?php

if (!function_exists('tachomind_reading_time')) {
    function tachomind_reading_time($post_id) {
        $content = get_post_field('post_content', $post_id);
        $word_count = str_word_count(wp_strip_all_tags($content));
        $minutes = ceil($word_count / 200);

        return max(1, $minutes) . ' min read';
    }
}

if (!function_exists('tachomind_get_first_image_from_content')) {
    function tachomind_get_first_image_from_content($content) {
        if (preg_match('/<img[^>]+(?:src|data-src|data-lazy-src)=["\']([^"\']+)["\']/i', $content, $match)) {
            return esc_url_raw(html_entity_decode($match[1]));
        }

        return '';
    }
}

if (!function_exists('tachomind_get_blog_image')) {
    function tachomind_get_blog_image($post_id, $raw_content) {
        $image_url = '';

        $thumbnail_id = get_post_thumbnail_id($post_id);

        if ($thumbnail_id) {
            /*
             * Use original attachment URL to avoid width/height metadata warning
             * when image sizes were not generated properly.
             */
            $image_url = wp_get_attachment_url($thumbnail_id);
        }

        if (!$image_url) {
            $image_url = tachomind_get_first_image_from_content($raw_content);
        }

        if (!$image_url) {
            $image_url = get_template_directory_uri() . '/assets/img/blog-placeholder.jpg';
        }

        return $image_url;
    }
}

if (!function_exists('tachomind_add_class_to_first_paragraph')) {
    function tachomind_add_class_to_first_paragraph($html, $class_name) {
        if (empty($html)) {
            return $html;
        }

        return preg_replace_callback('/<p\b([^>]*)>/i', function ($matches) use ($class_name) {
            $attrs = $matches[1];

            if (preg_match('/class=["\']([^"\']*)["\']/i', $attrs, $class_match)) {
                $old_class = $class_match[1];

                if (strpos($old_class, $class_name) === false) {
                    $new_class = trim($old_class . ' ' . $class_name);
                    $attrs = preg_replace(
                        '/class=["\'][^"\']*["\']/i',
                        'class="' . esc_attr($new_class) . '"',
                        $attrs,
                        1
                    );
                }

                return '<p' . $attrs . '>';
            }

            return '<p class="' . esc_attr($class_name) . '"' . $attrs . '>';
        }, $html, 1);
    }
}

if (!function_exists('tachomind_build_blog_content')) {
    function tachomind_build_blog_content($content) {
        /*
         * Important:
         * Do not remove the first image.
         * WordPress image blocks are usually wrapped in <figure>,
         * and removing or rebuilding content incorrectly hides them.
         */

        $toc = array();
        $used_ids = array();

        preg_match_all('/<h2\b[^>]*>.*?<\/h2>/is', $content, $heading_matches, PREG_OFFSET_CAPTURE);

        if (empty($heading_matches[0])) {
            return array(
                'toc'  => array(),
                'html' => tachomind_add_class_to_first_paragraph($content, 'blog-post-intro'),
            );
        }

        $first_heading_pos = $heading_matches[0][0][1];

        /*
         * Keep everything before the first H2.
         * This preserves images, figures, galleries, embeds, lists, and paragraphs.
         */
        $intro_html = substr($content, 0, $first_heading_pos);
        $intro_html = tachomind_add_class_to_first_paragraph($intro_html, 'blog-post-intro');

        $section_source = substr($content, $first_heading_pos);

        $parts = preg_split(
            '/(<h2\b[^>]*>.*?<\/h2>)/is',
            $section_source,
            -1,
            PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY
        );

        $sections_html = '';
        $current_heading = '';
        $current_id = '';
        $current_body = '';

        foreach ($parts as $part) {
            if (preg_match('/<h2\b[^>]*>(.*?)<\/h2>/is', $part, $h2_match)) {
                if ($current_heading) {
                    $sections_html .= '<section class="blog-post-section" id="' . esc_attr($current_id) . '">';
                    $sections_html .= '<h2>' . esc_html($current_heading) . '</h2>';
                    $sections_html .= $current_body;
                    $sections_html .= '</section>';
                }

                $current_heading = wp_strip_all_tags($h2_match[1]);
                $base_id = sanitize_title($current_heading);

                if (!$base_id) {
                    $base_id = 'section';
                }

                $current_id = $base_id;
                $count = 2;

                while (in_array($current_id, $used_ids, true)) {
                    $current_id = $base_id . '-' . $count;
                    $count++;
                }

                $used_ids[] = $current_id;

                $toc[] = array(
                    'id'    => $current_id,
                    'title' => $current_heading,
                );

                $current_body = '';
            } else {
                /*
                 * Keep all original WordPress content inside each section.
                 * This keeps wp-admin inserted images visible.
                 */
                $current_body .= $part;
            }
        }

        if ($current_heading) {
            $sections_html .= '<section class="blog-post-section" id="' . esc_attr($current_id) . '">';
            $sections_html .= '<h2>' . esc_html($current_heading) . '</h2>';
            $sections_html .= $current_body;
            $sections_html .= '</section>';
        }

        return array(
            'toc'  => $toc,
            'html' => $intro_html . $sections_html,
        );
    }
}

while (have_posts()) :
    the_post();

    $post_id = get_the_ID();

    $categories = get_the_category($post_id);
    $primary_category = !empty($categories) ? $categories[0]->name : 'TachoMind Blog';

    $raw_content = apply_filters('the_content', get_the_content());
    $article_data = tachomind_build_blog_content($raw_content);

    $featured_image = tachomind_get_blog_image($post_id, $raw_content);

    $excerpt = has_excerpt($post_id)
        ? get_the_excerpt($post_id)
        : wp_trim_words(wp_strip_all_tags(get_the_content()), 28, '...');

    $reading_time = tachomind_reading_time($post_id);
?>

<style id="tachomind-single-blog-polish">
    .blog-post-hero {
        position: relative;
        padding: 150px 0 90px;
        background:
            radial-gradient(circle at 15% 20%, rgba(37, 99, 235, 0.10), transparent 32%),
            linear-gradient(180deg, #f1f7ff 0%, #ffffff 100%);
        overflow: hidden;
    }

    .blog-post-hero-inner {
        width: min(1180px, calc(100% - 40px));
        margin: 0 auto;
    }

    .blog-post-breadcrumb {
        display: flex;
        align-items: center;
        gap: 12px;
        flex-wrap: wrap;
        margin-bottom: 38px;
        color: #94a3b8;
        font-size: 14px;
        font-weight: 600;
    }

    .blog-post-breadcrumb a {
        color: #2563eb;
        text-decoration: none;
    }

    .blog-post-hero-grid {
        display: grid;
        grid-template-columns: minmax(0, 1fr) minmax(360px, 480px);
        gap: 60px;
        align-items: center;
    }

    .blog-post-kicker {
        display: inline-flex;
        align-items: center;
        padding: 8px 18px;
        border: 1px solid #bfdbfe;
        border-radius: 999px;
        background: rgba(255, 255, 255, 0.78);
        color: #2563eb;
        font-size: 13px;
        font-weight: 800;
        margin-bottom: 24px;
    }

    .blog-post-hero h1 {
        margin: 0;
        color: #0f172a;
        font-size: clamp(42px, 6vw, 72px);
        line-height: 1.03;
        letter-spacing: -0.045em;
        font-weight: 900;
    }

    .blog-post-dek {
        margin: 24px 0 0;
        max-width: 680px;
        color: #64748b;
        font-size: 18px;
        line-height: 1.75;
    }

    .blog-post-meta {
        display: flex;
        gap: 12px;
        flex-wrap: wrap;
        margin-top: 28px;
    }

    .blog-post-meta span {
        display: inline-flex;
        align-items: center;
        min-height: 36px;
        padding: 0 14px;
        border-radius: 999px;
        background: #ffffff;
        border: 1px solid #dbeafe;
        color: #475569;
        font-size: 13px;
        font-weight: 700;
    }

    .blog-post-media {
        margin: 0;
        position: relative;
    }

    .blog-post-media img {
        display: block;
        width: 100%;
        max-width: 100%;
        aspect-ratio: 16 / 10;
        object-fit: cover;
        border-radius: 22px;
        box-shadow: 0 24px 60px rgba(15, 23, 42, 0.18);
        background: #e2e8f0;
    }

    .blog-post-media-caption {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 10px;
        margin-top: 14px;
    }

    .blog-post-media-caption div {
        padding: 14px 12px;
        border-radius: 14px;
        background: #ffffff;
        border: 1px solid #e2e8f0;
        box-shadow: 0 12px 26px rgba(15, 23, 42, 0.06);
    }

    .blog-post-media-caption strong,
    .blog-post-media-caption span {
        display: block;
    }

    .blog-post-media-caption strong {
        color: #0f172a;
        font-size: 13px;
        line-height: 1.3;
        margin-bottom: 4px;
    }

    .blog-post-media-caption span {
        color: #64748b;
        font-size: 11px;
        line-height: 1.3;
    }

    .blog-post-body {
        background: #f8fbff;
        padding: 82px 0;
    }

    .blog-post-layout {
        width: min(1180px, calc(100% - 40px));
        margin: 0 auto;
        display: grid;
        grid-template-columns: 280px minmax(0, 1fr);
        gap: 54px;
        align-items: start;
    }

    .blog-post-sidebar {
        position: sticky;
        top: 110px;
        display: grid;
        gap: 22px;
    }

    .blog-post-toc,
    .blog-post-side-card {
        background: #ffffff;
        border: 1px solid #e5edf7;
        border-radius: 18px;
        box-shadow: 0 14px 34px rgba(15, 23, 42, 0.055);
    }

    .blog-post-toc {
        padding: 22px 24px;
    }

    .blog-post-toc h2 {
        margin: 0 0 14px;
        padding-bottom: 14px;
        border-bottom: 1px solid #e8eef7;
        color: #0f172a;
        font-size: 16px;
        line-height: 1.3;
        font-weight: 800;
    }

    .blog-post-toc a {
        display: block;
        padding: 12px 0;
        color: #64748b;
        font-size: 13px;
        line-height: 1.55;
        font-weight: 600;
        text-decoration: none;
        border-bottom: 1px solid #eef2f7;
        transition: color 0.2s ease, padding-left 0.2s ease;
    }

    .blog-post-toc a:last-child {
        border-bottom: 0;
    }

    .blog-post-toc a:hover {
        color: #2563eb;
        padding-left: 6px;
    }

    .blog-post-side-card {
        padding: 24px;
    }

    .blog-post-side-card h2 {
        margin: 0 0 12px;
        color: #0f172a;
        font-size: 18px;
        line-height: 1.35;
        font-weight: 800;
    }

    .blog-post-side-card p {
        margin: 0 0 20px;
        color: #64748b;
        font-size: 14px;
        line-height: 1.75;
    }

    .blog-post-side-card .btn-primary {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        min-height: 48px;
        border-radius: 10px;
        background: #2563eb;
        color: #ffffff;
        font-size: 14px;
        font-weight: 800;
        text-decoration: none;
        box-shadow: 0 10px 22px rgba(37, 99, 235, 0.22);
    }

    .blog-post-article {
        width: 100%;
        max-width: 840px;
        background: #ffffff;
        border: 1px solid #e5edf7;
        border-radius: 28px;
        padding: 54px 58px;
        box-shadow: 0 20px 55px rgba(15, 23, 42, 0.07);
        color: #334155;
        overflow: hidden;
    }

    .blog-post-article > *:first-child,
    .blog-post-section > *:first-child {
        margin-top: 0 !important;
    }

    .blog-post-article p {
        margin: 0 0 22px;
        color: #475569;
        font-size: 17px;
        line-height: 1.88;
        font-weight: 400;
    }

    .blog-post-article strong,
    .blog-post-article b {
        color: #1e293b;
        font-weight: 800;
    }

    .blog-post-article h2 {
        margin: 54px 0 20px;
        color: #0f172a;
        font-size: clamp(26px, 3vw, 34px);
        line-height: 1.22;
        font-weight: 850;
        letter-spacing: -0.02em;
    }

    .blog-post-article h3 {
        margin: 34px 0 12px;
        color: #1e293b;
        font-size: 22px;
        line-height: 1.35;
        font-weight: 800;
    }

    .blog-post-article h4 {
        margin: 26px 0 10px;
        color: #1e293b;
        font-size: 18px;
        line-height: 1.4;
        font-weight: 800;
    }

    .blog-post-section {
        scroll-margin-top: 120px;
        margin-bottom: 48px;
        padding-bottom: 38px;
        border-bottom: 1px solid #e8eef7;
    }

    .blog-post-section:last-child {
        margin-bottom: 0;
        padding-bottom: 0;
        border-bottom: 0;
    }

    .blog-post-intro {
        margin-bottom: 28px !important;
        padding: 24px 28px;
        background: #f8fbff;
        border: 1px solid #dcecff;
        border-left: 5px solid #2563eb;
        border-radius: 18px;
        color: #334155 !important;
        font-size: 19px !important;
        line-height: 1.8 !important;
    }

    .blog-post-article ul,
    .blog-post-article ol {
        margin: 18px 0 28px;
        padding-left: 24px;
        color: #475569;
    }

    .blog-post-article li {
        margin: 0 0 12px;
        padding-left: 4px;
        color: #475569;
        font-size: 17px;
        line-height: 1.75;
    }

    .blog-post-article li::marker {
        color: #2563eb;
        font-weight: 800;
    }

    .blog-post-article a {
        color: #2563eb;
        font-weight: 700;
        text-decoration-thickness: 1px;
        text-underline-offset: 3px;
    }

    .blog-post-article img,
    .blog-post-article figure img,
    .blog-post-article .wp-block-image img {
        display: block !important;
        max-width: 100% !important;
        height: auto !important;
        margin-left: auto;
        margin-right: auto;
        border-radius: 20px;
    }

    .blog-post-article figure,
    .blog-post-article .wp-block-image {
        display: block !important;
        margin: 34px auto;
        max-width: 100%;
    }

    .blog-post-article figcaption,
    .blog-post-article .wp-element-caption {
        margin-top: 10px;
        color: #64748b;
        font-size: 14px;
        line-height: 1.6;
        text-align: center;
    }

    .blog-post-article blockquote {
        margin: 34px 0;
        padding: 24px 28px;
        background: #f8fafc;
        border-left: 5px solid #2563eb;
        border-radius: 16px;
        color: #334155;
    }

    .blog-post-article blockquote p {
        margin: 0;
        font-size: 18px;
        line-height: 1.75;
        color: #334155;
    }

    .blog-post-article table {
        width: 100%;
        border-collapse: collapse;
        margin: 30px 0;
        overflow: hidden;
        border-radius: 14px;
        font-size: 15px;
    }

    .blog-post-article th,
    .blog-post-article td {
        padding: 14px 16px;
        border: 1px solid #e2e8f0;
        text-align: left;
        vertical-align: top;
    }

    .blog-post-article th {
        background: #f1f5f9;
        color: #0f172a;
        font-weight: 800;
    }

    .blog-post-related {
        padding: 82px 20px;
        background: #ffffff;
    }

    .blog-post-related .section-header {
        max-width: 760px;
        margin: 0 auto 34px;
        text-align: center;
    }

    .blog-post-related .section-badge {
        display: inline-flex;
        padding: 8px 16px;
        border-radius: 999px;
        background: #eff6ff;
        color: #2563eb;
        font-size: 13px;
        font-weight: 800;
        margin-bottom: 16px;
    }

    .blog-post-related .section-header h2 {
        margin: 0;
        color: #0f172a;
        font-size: clamp(30px, 4vw, 46px);
        line-height: 1.1;
        font-weight: 900;
        letter-spacing: -0.03em;
    }

    .blog-post-related-grid {
        width: min(1180px, 100%);
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 22px;
    }

    .blog-post-related-card {
        display: block;
        padding: 28px;
        border-radius: 20px;
        background: #f8fbff;
        border: 1px solid #e5edf7;
        text-decoration: none;
        box-shadow: 0 14px 34px rgba(15, 23, 42, 0.055);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .blog-post-related-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 18px 42px rgba(15, 23, 42, 0.09);
    }

    .blog-post-related-card span {
        display: block;
        color: #2563eb;
        font-size: 13px;
        font-weight: 800;
        margin-bottom: 12px;
    }

    .blog-post-related-card strong {
        display: block;
        color: #0f172a;
        font-size: 19px;
        line-height: 1.45;
        margin-bottom: 18px;
    }

    .blog-post-related-card em {
        color: #2563eb;
        font-style: normal;
        font-weight: 800;
        font-size: 14px;
    }

    .seo-cta {
        position: relative;
        padding: 80px 20px;
        background: #f8fbff;
        overflow: hidden;
    }

    .seo-cta-inner {
        position: relative;
        z-index: 2;
        width: min(960px, 100%);
        margin: 0 auto;
        padding: 56px 34px;
        border-radius: 28px;
        background: #ffffff;
        border: 1px solid #e5edf7;
        text-align: center;
        box-shadow: 0 24px 60px rgba(15, 23, 42, 0.08);
    }

    .seo-cta-icon {
        width: 58px;
        height: 58px;
        margin: 0 auto 20px;
        display: grid;
        place-items: center;
        border-radius: 18px;
        background: #eff6ff;
    }

    .seo-cta-h2 {
        margin: 0;
        color: #0f172a;
        font-size: clamp(30px, 4vw, 48px);
        line-height: 1.12;
        font-weight: 900;
        letter-spacing: -0.03em;
    }

    .seo-cta-grad {
        color: #2563eb;
    }

    .seo-cta-sub1 {
        margin: 18px auto 0;
        max-width: 620px;
        color: #64748b;
        font-size: 17px;
        line-height: 1.7;
    }

    .seo-cta-btns {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 14px;
        flex-wrap: wrap;
        margin-top: 28px;
    }

    .seo-cta-primary,
    .seo-cta-phone {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-height: 48px;
        padding: 0 22px;
        border-radius: 12px;
        font-weight: 800;
        text-decoration: none;
    }

    .seo-cta-primary {
        background: #2563eb;
        color: #ffffff;
        box-shadow: 0 10px 22px rgba(37, 99, 235, 0.22);
    }

    .seo-cta-phone {
        background: #eff6ff;
        color: #2563eb;
    }

    @media (max-width: 1100px) {
        .blog-post-hero-grid {
            grid-template-columns: 1fr;
            gap: 38px;
        }

        .blog-post-layout {
            grid-template-columns: 250px minmax(0, 1fr);
            gap: 34px;
        }

        .blog-post-article {
            padding: 44px 38px;
        }
    }

    @media (max-width: 900px) {
        .blog-post-hero {
            padding: 120px 0 60px;
        }

        .blog-post-hero-inner,
        .blog-post-layout {
            width: min(100% - 28px, 760px);
        }

        .blog-post-body {
            padding: 56px 0;
        }

        .blog-post-layout {
            grid-template-columns: 1fr;
            gap: 28px;
        }

        .blog-post-sidebar {
            position: static;
        }

        .blog-post-toc {
            display: none;
        }

        .blog-post-article {
            max-width: 100%;
            padding: 34px 24px;
            border-radius: 22px;
        }

        .blog-post-article p,
        .blog-post-article li {
            font-size: 16px;
            line-height: 1.78;
        }

        .blog-post-related-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 520px) {
        .blog-post-hero-inner,
        .blog-post-layout {
            width: min(100% - 22px, 100%);
        }

        .blog-post-hero h1 {
            font-size: 40px;
        }

        .blog-post-media-caption {
            grid-template-columns: 1fr;
        }

        .blog-post-article {
            padding: 28px 18px;
            border-radius: 18px;
        }

        .blog-post-intro {
            padding: 20px;
        }
    }
</style>

<main>
    <section class="blog-post-hero">
        <div class="blog-post-hero-inner">
            <div class="blog-post-breadcrumb">
                <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
                <span>/</span>
                <a href="<?php echo esc_url(home_url('/blog/')); ?>">Blog</a>
                <span>/</span>
                <span><?php echo esc_html(get_the_title()); ?></span>
            </div>

            <div class="blog-post-hero-grid">
                <div>
                    <div class="blog-post-kicker"><?php echo esc_html($primary_category); ?></div>

                    <h1><?php the_title(); ?></h1>

                    <p class="blog-post-dek"><?php echo esc_html($excerpt); ?></p>

                    <div class="blog-post-meta">
                        <span><?php echo esc_html(get_bloginfo('name')); ?> Blog</span>
                        <span><?php echo esc_html($reading_time); ?></span>
                        <span><?php echo esc_html($primary_category); ?></span>
                    </div>
                </div>

                <aside class="blog-post-media" aria-label="<?php echo esc_attr(get_the_title()); ?> article visual">
                    <?php if (!empty($featured_image)) : ?>
                        <img src="<?php echo esc_url($featured_image); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                    <?php endif; ?>

                    <div class="blog-post-media-caption">
                        <div>
                            <strong><?php echo esc_html($primary_category); ?></strong>
                            <span>Article category</span>
                        </div>

                        <div>
                            <strong><?php echo esc_html($reading_time); ?></strong>
                            <span>Estimated reading time</span>
                        </div>

                        <div>
                            <strong><?php echo esc_html(get_the_date('M d, Y')); ?></strong>
                            <span>Published date</span>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <section class="blog-post-body">
        <div class="blog-post-layout">
            <aside class="blog-post-sidebar">
                <nav class="blog-post-toc" aria-label="Article sections">
                    <h2>In This Article</h2>

                    <?php if (!empty($article_data['toc'])) : ?>
                        <?php foreach ($article_data['toc'] as $toc_item) : ?>
                            <a href="<?php echo esc_url(get_permalink($post_id)); ?>" data-scroll-target="<?php echo esc_attr($toc_item['id']); ?>">
                                <?php echo esc_html($toc_item['title']); ?>
                            </a>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <a href="<?php echo esc_url(get_permalink($post_id)); ?>" data-scroll-target="article-content">
                            <?php echo esc_html(get_the_title()); ?>
                        </a>
                    <?php endif; ?>
                </nav>

                <div class="blog-post-side-card">
                    <h2>Need a sharper digital presence?</h2>
                    <p>TachoMind helps businesses turn strategy, content and marketing systems into measurable growth.</p>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-primary">Talk To An Expert</a>
                </div>
            </aside>

            <article class="blog-post-article" id="article-content">
                <?php
                /*
                 * This displays the full WordPress editor content,
                 * including images, figures, galleries, lists, and embeds.
                 */
                echo $article_data['html'];
                ?>
            </article>
        </div>
    </section>

    <section class="blog-post-related">
        <div class="section-header">
            <div class="section-badge">More From TachoMind</div>
            <h2>Keep reading <span style="color:#2563eb">business growth insights</span></h2>
        </div>

        <div class="blog-post-related-grid">
            <?php
            $related_args = array(
                'post_type'           => 'post',
                'posts_per_page'      => 3,
                'post__not_in'        => array($post_id),
                'ignore_sticky_posts' => true,
            );

            if (!empty($categories)) {
                $related_args['category__in'] = wp_list_pluck($categories, 'term_id');
            }

            $related_posts = new WP_Query($related_args);

            if ($related_posts->have_posts()) :
                while ($related_posts->have_posts()) :
                    $related_posts->the_post();

                    $related_categories = get_the_category();
                    $related_category_name = !empty($related_categories) ? $related_categories[0]->name : 'Blog';
                    ?>
                    <a href="<?php the_permalink(); ?>" class="blog-post-related-card">
                        <span><?php echo esc_html($related_category_name); ?></span>
                        <strong><?php the_title(); ?></strong>
                        <em>Read More &rarr;</em>
                    </a>
                    <?php
                endwhile;

                wp_reset_postdata();
            else :
                ?>
                <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="blog-post-related-card">
                    <span>Blog</span>
                    <strong>Explore all TachoMind resources and guides</strong>
                    <em>View Blog &rarr;</em>
                </a>

                <a href="<?php echo esc_url(home_url('/digital-marketing/')); ?>" class="blog-post-related-card">
                    <span>Digital Marketing</span>
                    <strong>Build a measurable growth strategy</strong>
                    <em>View Service &rarr;</em>
                </a>

                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="blog-post-related-card">
                    <span>Free Audit</span>
                    <strong>Ready to speak with a marketing expert?</strong>
                    <em>Contact Us &rarr;</em>
                </a>
            <?php endif; ?>
        </div>
    </section>

    <section class="seo-cta">
        <div class="seo-cta-inner">
            <div class="seo-cta-icon">
                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="22" y1="12" x2="18" y2="12"></line>
                    <line x1="6" y1="12" x2="2" y2="12"></line>
                    <line x1="12" y1="2" x2="12" y2="6"></line>
                    <line x1="12" y1="18" x2="12" y2="22"></line>
                </svg>
            </div>

            <h2 class="seo-cta-h2">
                You have a vision. <span class="seo-cta-grad">We have a team to get you there.</span>
            </h2>

            <p class="seo-cta-sub1">Ready to speak with a marketing expert? Give us a ring.</p>

            <div class="seo-cta-btns">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="seo-cta-primary">Talk To An Expert &rarr;</a>
                <a href="tel:+918917643345" class="seo-cta-phone">+91-8917643345</a>
            </div>
        </div>
    </section>
</main>

<script>
document.addEventListener('DOMContentLoaded', function () {
    if (window.location.hash) {
        history.replaceState(null, '', window.location.pathname + window.location.search);
    }

    document.querySelectorAll('.blog-post-toc a[data-scroll-target]').forEach(function (link) {
        link.addEventListener('click', function (event) {
            event.preventDefault();

            var targetId = link.getAttribute('data-scroll-target');
            var target = document.getElementById(targetId);

            if (!target) return;

            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });

            history.replaceState(null, '', window.location.pathname + window.location.search);
        });
    });
});
</script>

<?php
endwhile;

get_footer();
?>