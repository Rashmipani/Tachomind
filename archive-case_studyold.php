<?php
get_header();

$selected_case_cat = isset($_GET['case_cat']) ? sanitize_title(wp_unslash($_GET['case_cat'])) : 'all';

$paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;

if ($paged < 1) {
    $paged = 1;
}

$archive_link = get_post_type_archive_link('case_study');

if (!$archive_link) {
    $archive_link = home_url('/case-studies/');
}

$case_terms = get_terms(array(
    'taxonomy'   => 'case_study_category',
    'hide_empty' => true,
));

$query_args = array(
    'post_type'           => 'case_study',
    'post_status'         => 'publish',
    'posts_per_page'      => 9,
    'paged'               => $paged,
    'ignore_sticky_posts' => true,
);

if ('all' !== $selected_case_cat) {
    $query_args['tax_query'] = array(
        array(
            'taxonomy' => 'case_study_category',
            'field'    => 'slug',
            'terms'    => $selected_case_cat,
        ),
    );
}

$case_query = new WP_Query($query_args);
?>

<main>
    <section class="case-page-hero">
        <div class="case-page-hero-inner">
            <div class="case-breadcrumb">
                <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
                <span>/</span>
                <span>Case Studies</span>
            </div>

            <div class="case-page-hero-grid">
                <div class="case-page-copy">
                    <div class="case-page-badge">Case Studies</div>

                    <h1>Real growth stories from campaigns built to perform.</h1>

                    <p>
                        See how TachoMind used SEO, PPC, content, conversion tracking and campaign restructuring to help clients improve visibility, traffic and qualified lead flow.
                    </p>

                    <div class="case-page-actions">
                        <a href="#case-study-list" class="btn-primary">View Case Studies</a>
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-secondary">Talk To An Expert</a>
                    </div>
                </div>

                <aside class="case-proof-panel" aria-label="TachoMind case study highlights">
                    <div class="case-proof-img"></div>

                    <div class="case-proof-stats">
                        <div class="case-proof-stat">
                            <strong>140%</strong>
                            <span>Organic traffic growth from focused campaign execution</span>
                        </div>

                        <div class="case-proof-stat">
                            <strong>75%</strong>
                            <span>Traffic increase from stronger digital visibility</span>
                        </div>

                        <div class="case-proof-stat">
                            <strong>80%</strong>
                            <span>Authority improvement through technical and content work</span>
                        </div>

                        <div class="case-proof-stat">
                            <strong>60%</strong>
                            <span>Lead generation growth from smarter campaign structure</span>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <section class="section case-study-list" id="case-study-list">
        <div class="container">
            <div class="section-header">
                <div class="section-badge">Selected Work</div>

                <h2>
                    Case studies by <span style="color:#2563eb">service focus</span>
                </h2>

                <p class="section-subtext">
                    Each study uses the source content from the TachoMind case-study archive and turns it into a focused, readable story.
                </p>
            </div>

            <div class="case-list-toolbar" aria-label="Filter case studies">
                <a
                    href="<?php echo esc_url($archive_link); ?>#case-study-list"
                    class="case-list-tab <?php echo 'all' === $selected_case_cat ? 'active' : ''; ?>"
                    data-case-filter="all"
                >
                    All
                </a>

                <?php if (!empty($case_terms) && !is_wp_error($case_terms)) : ?>
                    <?php foreach ($case_terms as $term) : ?>
                        <a
                            href="<?php echo esc_url(add_query_arg('case_cat', $term->slug, $archive_link)); ?>#case-study-list"
                            class="case-list-tab <?php echo $selected_case_cat === $term->slug ? 'active' : ''; ?>"
                            data-case-filter="<?php echo esc_attr($term->name); ?>"
                        >
                            <?php echo esc_html($term->name); ?>
                        </a>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>

            <?php if ($case_query->have_posts()) : ?>

                <div class="case-list-grid">
                    <?php
                    while ($case_query->have_posts()) :
                        $case_query->the_post();

                        $case_id = get_the_ID();

                        $cs_custom_fields = function_exists('get_field') ? get_field('case_studies_fields', $case_id) : array();

                        if (!is_array($cs_custom_fields)) {
                            $cs_custom_fields = array();
                        }

                        $terms = get_the_terms($case_id, 'case_study_category');

                        $category_name = !empty($terms) && !is_wp_error($terms)
                            ? $terms[0]->name
                            : 'Case Study';

                        $thumbnail_url = get_the_post_thumbnail_url($case_id, 'large');

                        if (!$thumbnail_url) {
                            $thumbnail_url = 'https://via.placeholder.com/800x500?text=Case+Study';
                        }

                        $case_industry = !empty($cs_custom_fields['case_industry'])
                            ? $cs_custom_fields['case_industry']
                            : $category_name;

                        $case_excerpt = !empty($cs_custom_fields['case_except_'])
                            ? $cs_custom_fields['case_except_']
                            : (
                                has_excerpt($case_id)
                                    ? get_the_excerpt($case_id)
                                    : wp_trim_words(wp_strip_all_tags(get_the_content()), 24, '...')
                            );

                        $metric_value_1 = !empty($cs_custom_fields['metric_value_1'])
                            ? $cs_custom_fields['metric_value_1']
                            : '';

                        $metric_label_1 = !empty($cs_custom_fields['metric_label_1_'])
                            ? $cs_custom_fields['metric_label_1_']
                            : '';

                        $metric_value_2 = !empty($cs_custom_fields['metric_value_2'])
                            ? $cs_custom_fields['metric_value_2']
                            : '';

                        $metric_label_2 = !empty($cs_custom_fields['metric_lable_2'])
                            ? $cs_custom_fields['metric_lable_2']
                            : '';
                        ?>

                        <article class="case-list-card" data-case-category="<?php echo esc_attr($category_name); ?>">
                            <div class="case-list-image">
                                <img
                                    src="<?php echo esc_url($thumbnail_url); ?>"
                                    alt="<?php echo esc_attr(get_the_title($case_id)); ?>"
                                    loading="lazy"
                                />

                                <span class="case-list-chip">
                                    <?php echo esc_html($category_name); ?>
                                </span>
                            </div>

                            <div class="case-list-body">
                                <div class="case-list-kicker">
                                    <?php echo esc_html($case_industry); ?>
                                </div>

                                <h2><?php echo esc_html(get_the_title($case_id)); ?></h2>

                                <p><?php echo esc_html($case_excerpt); ?></p>

                                <?php if (($metric_value_1 && $metric_label_1) || ($metric_value_2 && $metric_label_2)) : ?>
                                    <div class="case-list-metrics">
                                        <?php if ($metric_value_1 && $metric_label_1) : ?>
                                            <div class="case-list-metric">
                                                <strong><?php echo esc_html($metric_value_1); ?></strong>
                                                <span><?php echo esc_html($metric_label_1); ?></span>
                                            </div>
                                        <?php endif; ?>

                                        <?php if ($metric_value_2 && $metric_label_2) : ?>
                                            <div class="case-list-metric">
                                                <strong><?php echo esc_html($metric_value_2); ?></strong>
                                                <span><?php echo esc_html($metric_label_2); ?></span>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>

                                <a href="<?php echo esc_url(get_permalink($case_id)); ?>" class="case-study-link">
                                    View Full Case Study &rarr;
                                </a>
                            </div>
                        </article>

                    <?php endwhile; ?>
                </div>

                <?php
                $pagination_args = array(
                    'total'     => $case_query->max_num_pages,
                    'current'   => $paged,
                    'prev_text' => '&laquo; Prev',
                    'next_text' => 'Next &raquo;',
                    'type'      => 'list',
                );

                if ('all' !== $selected_case_cat) {
                    $pagination_args['add_args'] = array(
                        'case_cat' => $selected_case_cat,
                    );
                }

                $pagination = paginate_links($pagination_args);

                if ($pagination) :
                    ?>
                    <div class="case-studies-pagination">
                        <?php echo $pagination; ?>
                    </div>
                <?php endif; ?>

                <?php wp_reset_postdata(); ?>

            <?php else : ?>

                <div class="case-studies-empty">
                    <h2>No case studies found</h2>
                    <p>Please add and publish at least one Case Study from the WordPress dashboard.</p>
                </div>

            <?php endif; ?>
        </div>
    </section>

    <section class="cta-section">
        <div class="cta-dot-grid"></div>
        <div class="cta-glow"></div>

        <div class="cta-inner">
            <div class="cta-grid">
                <div class="cta-left">
                    <div class="cta-badge">Ready to grow?</div>

                    <h2 class="cta-headline">
                        You have a vision. We have a team to get you there.
                    </h2>

                    <p class="cta-subtext">
                        Ready to speak with a marketing expert? Give us a ring or request a free audit and we will help you identify the next high-impact move.
                    </p>

                    <div class="cta-contacts">
                        <div class="cta-contact-item">
                            <div class="cta-icon-box">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1.11h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.72a16 16 0 0 0 6 6l.94-.94a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z" />
                                </svg>
                            </div>

                            <div>
                                <div class="cta-contact-label">USA</div>
                                <a href="tel:+15183036708" class="cta-contact-value">+1-518-303-6708</a>
                            </div>
                        </div>

                        <div class="cta-contact-item">
                            <div class="cta-icon-box">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1.11h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.72a16 16 0 0 0 6 6l.94-.94a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z" />
                                </svg>
                            </div>

                            <div>
                                <div class="cta-contact-label">India</div>
                                <a href="tel:+918114880778" class="cta-contact-value">+91-811-488-0778</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cta-form-wrap">
                    <h3 class="cta-form-title">Start with a free audit</h3>

                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="form-submit" style="display:flex;justify-content:center;text-decoration:none;">
                        Get Free Audit
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>