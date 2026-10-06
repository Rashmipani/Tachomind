<?php
get_header();

if (have_posts()) :
    while (have_posts()) :
        the_post();

        $fields        = tachomind_get_case_fields(get_the_ID());
        $case_category = tachomind_get_case_category_name(get_the_ID());
        $case_image    = tachomind_get_case_image_url(get_the_ID(), 'large');
        $archive_url   = get_post_type_archive_link('case_study');

        $case_excerpt  = !empty($fields['case_except_']) ? $fields['case_except_'] : get_the_excerpt();

        $metric_value_1 = !empty($fields['metric_value_1']) ? $fields['metric_value_1'] : '';
        $metric_label_1 = !empty($fields['metric_label_1_']) ? $fields['metric_label_1_'] : '';

        $metric_value_2 = !empty($fields['metric_value_2']) ? $fields['metric_value_2'] : '';
        $metric_label_2 = !empty($fields['metric_lable_2']) ? $fields['metric_lable_2'] : '';

        $case_content = !empty($fields['case_study_content']) ? $fields['case_study_content'] : '';

        $challenge = !empty($fields['the_challenge']) && is_array($fields['the_challenge'])
            ? $fields['the_challenge']
            : array();

        $challenge_title = !empty($challenge['challenge_title']) ? $challenge['challenge_title'] : '';
        $challenge_desc  = !empty($challenge['challenge_description']) ? $challenge['challenge_description'] : '';

        $strategy = !empty($fields['our_statergy']) && is_array($fields['our_statergy'])
            ? $fields['our_statergy']
            : array();

        $strategy_title = !empty($strategy['statergy_title']) ? $strategy['statergy_title'] : '';
        $strategy_desc  = !empty($strategy['statergy_description']) ? $strategy['statergy_description'] : '';

        $strategy_details = !empty($strategy['statergy_details']) && is_array($strategy['statergy_details'])
            ? $strategy['statergy_details']
            : array();
?>

<main>
    <section class="case-detail-hero">
        <div class="case-detail-hero-inner">
            <div class="case-detail-copy">
                <div class="case-breadcrumb">
                    <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
                    <span>/</span>
                    <a href="<?php echo esc_url($archive_url); ?>">Case Studies</a>
                    <span>/</span>
                    <span><?php the_title(); ?></span>
                </div>

                <?php if (!empty($fields['case_industry'])) : ?>
    <div class="case-detail-badge">
        <?php echo esc_html($fields['case_industry']); ?>
    </div>
<?php endif; ?>

                <h1><?php the_title(); ?></h1>

                <?php if (!empty($case_excerpt)) : ?>
                    <p><?php echo esc_html($case_excerpt); ?></p>
                <?php endif; ?>

                <div class="case-detail-actions">
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-primary">Build A Better PPC Plan</a>
                    <a href="<?php echo esc_url($archive_url); ?>" class="btn-secondary">Back To Case Studies</a>
                </div>
            </div>

            <aside class="case-detail-media" aria-label="<?php echo esc_attr(get_the_title()); ?> results">
                <img src="<?php echo esc_url($case_image); ?>" alt="<?php echo esc_attr(get_the_title()); ?> case study visual" />

                <?php if (!empty($metric_value_1) || !empty($metric_value_2)) : ?>
                    <div class="case-detail-result-bar">
                        <?php if (!empty($metric_value_1) || !empty($metric_label_1)) : ?>
                            <div class="case-detail-result">
                                <strong><?php echo esc_html($metric_value_1); ?></strong>
                                <span><?php echo esc_html($metric_label_1); ?></span>
                            </div>
                        <?php endif; ?>

                        <?php if (!empty($metric_value_2) || !empty($metric_label_2)) : ?>
                            <div class="case-detail-result">
                                <strong><?php echo esc_html($metric_value_2); ?></strong>
                                <span><?php echo esc_html($metric_label_2); ?></span>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </aside>
        </div>
    </section>



    <?php if (!empty($challenge_title) || !empty($challenge_desc)) : ?>
        <section class="case-detail-section">
            <div class="case-detail-grid">
                <div class="case-detail-heading">
                    <span class="case-detail-kicker">The Challenge</span>

                    <?php if (!empty($challenge_title)) : ?>
                        <h2><?php echo esc_html($challenge_title); ?></h2>
                    <?php endif; ?>
                </div>

                <?php if (!empty($challenge_desc)) : ?>
                    <div class="case-detail-content">
                        <?php echo wp_kses_post(wpautop($challenge_desc)); ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    <?php endif; ?>

    <?php if (!empty($strategy_title) || !empty($strategy_desc) || !empty($strategy_details)) : ?>
        <section class="case-detail-section alt">
            <div class="case-detail-grid">
                <div class="case-detail-heading">
                    <span class="case-detail-kicker">Our Strategy</span>

                    <?php if (!empty($strategy_title)) : ?>
                        <h2><?php echo esc_html($strategy_title); ?></h2>
                    <?php endif; ?>

                    <?php if (!empty($strategy_desc)) : ?>
                        <div class="case-detail-content">
                            <?php echo wp_kses_post(wpautop($strategy_desc)); ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="case-step-list">
                    <?php
                    $step_number = 1;

                    for ($i = 1; $i <= 4; $i++) :
                        $step_key = 'statergy_' . $i;

                        if (empty($strategy_details[$step_key]) || !is_array($strategy_details[$step_key])) {
                            continue;
                        }

                        $step_title = !empty($strategy_details[$step_key]['title']) ? $strategy_details[$step_key]['title'] : '';
                        $step_desc  = !empty($strategy_details[$step_key]['description']) ? $strategy_details[$step_key]['description'] : '';

                        if (empty($step_title) && empty($step_desc)) {
                            continue;
                        }
                    ?>

                        <div class="case-step">
                            <div class="case-step-number">
                                <?php echo esc_html(sprintf('%02d', $step_number)); ?>
                            </div>

                            <div>
                                <?php if (!empty($step_title)) : ?>
                                    <h3><?php echo esc_html($step_title); ?></h3>
                                <?php endif; ?>

                                <?php if (!empty($step_desc)) : ?>
                                    <p><?php echo esc_html($step_desc); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>

                    <?php
                        $step_number++;
                    endfor;
                    ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <section class="case-detail-section">
        <div class="container">
            <div class="section-header">
                <div class="section-badge">More Case Studies</div>
                <h2>Keep exploring <span style="color:#2563eb">client results</span></h2>
            </div>

            <div class="case-next-grid">
                <?php
                $related_args = array(
                    'post_type'      => 'case_study',
                    'post_status'    => 'publish',
                    'posts_per_page' => 2,
                    'post__not_in'   => array(get_the_ID()),
                    'orderby'        => 'date',
                    'order'          => 'DESC',
                );

                $current_terms = tachomind_get_case_categories(get_the_ID());

                if (!empty($current_terms)) {
                    $related_args['tax_query'] = array(
                        array(
                            'taxonomy' => 'case_study_category',
                            'field'    => 'term_id',
                            'terms'    => wp_list_pluck($current_terms, 'term_id'),
                        ),
                    );
                }

                $related_query = new WP_Query($related_args);

                if ($related_query->have_posts()) :
                    while ($related_query->have_posts()) :
                        $related_query->the_post();
                ?>

                        <div class="case-next-card">
                            <span><?php echo esc_html(tachomind_get_case_category_name(get_the_ID())); ?></span>
                            <strong><?php the_title(); ?></strong>
                            <a href="<?php the_permalink(); ?>">Read Case Study &rarr;</a>
                        </div>

                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>

                <div class="case-next-card">
                    <span>Contact</span>
                    <strong>Ready to speak with a marketing expert?</strong>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>">Get Free Audit &rarr;</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
    endwhile;
endif;

get_footer();
?>