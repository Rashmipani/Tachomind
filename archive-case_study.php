<?php
/**
 * Archive Case Study Template
 * File name: archive-case_study.php
 *
 * Updated for ACF archive metric fields:
 * - archive_metric_1_value
 * - archive_metric_1_label
 * - archive_metric_2_value
 * - archive_metric_2_label
 */

get_header();

if (!function_exists('tmcs_clean_metric_value')) {
    function tmcs_clean_metric_value($value) {
        if (is_array($value) || is_object($value)) {
            return '';
        }

        return trim((string) $value);
    }
}

if (!function_exists('tmcs_get_archive_metric')) {
    function tmcs_get_archive_metric($post_id, $field_name) {
        $value = '';

        /*
         * 1. ACF top-level field.
         * Your new fields are top-level, not inside case_studies.
         */
        if (function_exists('get_field')) {
            $value = get_field($field_name, $post_id);
        }

        /*
         * 2. Direct post meta fallback.
         */
        if ($value === '' || $value === null || $value === false) {
            $value = get_post_meta($post_id, $field_name, true);
        }

        /*
         * 3. Fallback if field was accidentally saved inside case_studies group.
         */
        if (($value === '' || $value === null || $value === false) && function_exists('get_field')) {
            $case_studies = get_field('case_studies', $post_id);

            if (is_array($case_studies) && isset($case_studies[$field_name])) {
                $value = $case_studies[$field_name];
            }
        }

        /*
         * 4. Hero section fallback.
         * This helps if old posts only have hero values saved.
         */
        if (($value === '' || $value === null || $value === false) && function_exists('get_field')) {
            $case_studies = get_field('case_studies', $post_id);

            if (is_array($case_studies) && !empty($case_studies['hero_section']) && is_array($case_studies['hero_section'])) {
                $hero = $case_studies['hero_section'];

                if ($field_name === 'archive_metric_1_value' && !empty($hero['organic_traffic'])) {
                    $value = $hero['organic_traffic'];
                }

                if ($field_name === 'archive_metric_2_value' && !empty($hero['visibility_score'])) {
                    $value = $hero['visibility_score'];
                }
            }
        }

        return tmcs_clean_metric_value($value);
    }
}

/**
 * Current page number.
 * Uses custom case_page query param to avoid WordPress sending /page/2/ to blog archive.
 */
$paged = isset($_GET['case_page'])
    ? max(1, absint($_GET['case_page']))
    : max(
        1,
        get_query_var('paged') ? absint(get_query_var('paged')) : absint(get_query_var('page'))
    );

/**
 * Selected category from URL.
 */
$selected_category = 'all';

if (isset($_GET['case_category']) && $_GET['case_category'] !== '') {
    $selected_category = sanitize_title(wp_unslash($_GET['case_category']));
} elseif (isset($_GET['case_cat']) && $_GET['case_cat'] !== '') {
    $selected_category = sanitize_title(wp_unslash($_GET['case_cat']));
}

/**
 * Archive link.
 */
$archive_link = get_post_type_archive_link('case_study');

if (!$archive_link) {
    $archive_link = home_url('/case-studies/');
}

$archive_link = remove_query_arg(
    array('case_page', 'paged', 'case_category', 'case_cat'),
    $archive_link
);

/**
 * Get case study categories.
 */
$case_terms = get_terms(array(
    'taxonomy'   => 'case_study_category',
    'hide_empty' => false,
    'orderby'    => 'name',
    'order'      => 'ASC',
));

/**
 * Selected category label.
 */
$selected_case_label = 'All';

if ($selected_category !== 'all' && !empty($case_terms) && !is_wp_error($case_terms)) {
    foreach ($case_terms as $case_term) {
        if ($case_term->slug === $selected_category) {
            $selected_case_label = $case_term->name;
            break;
        }
    }

    if ($selected_case_label === 'All') {
        $selected_case_label = ucwords(str_replace(array('-', '_'), ' ', $selected_category));
    }
}

/**
 * Case study query.
 */
$case_query_args = array(
    'post_type'           => 'case_study',
    'post_status'         => 'publish',
    'posts_per_page'      => 12,
    'paged'               => $paged,
    'ignore_sticky_posts' => true,
    'orderby'             => array(
        'menu_order' => 'ASC',
        'date'       => 'DESC',
    ),
);

if ($selected_category !== 'all') {
    $case_query_args['tax_query'] = array(
        array(
            'taxonomy' => 'case_study_category',
            'field'    => 'slug',
            'terms'    => $selected_category,
        ),
    );
}

$case_query = new WP_Query($case_query_args);
?>

<style>
/* ============================================================
   TACHOMIND CASE STUDY ARCHIVE
   Card design with archive metric ACF fields
   ============================================================ */

.tmcs-case-study-list {
    background: #f8fafc !important;
    padding-top: 80px !important;
    padding-bottom: 90px !important;
}

.tmcs-container {
    width: min(1180px, calc(100% - 40px)) !important;
    max-width: 1180px !important;
    margin-left: auto !important;
    margin-right: auto !important;
}

/* Header */
.tmcs-header {
    text-align: center !important;
    max-width: 820px !important;
    margin-left: auto !important;
    margin-right: auto !important;
}

.tmcs-header .section-subtext {
    max-width: 760px !important;
    margin-left: auto !important;
    margin-right: auto !important;
    text-align: center !important;
}

/* Filter */
.tmcs-toolbar {
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    flex-wrap: wrap !important;
    gap: 12px !important;
    width: 100% !important;
    margin: 34px auto 42px !important;
    text-align: center !important;
}

.tmcs-tab {
    display: inline-flex !important;
    align-items: center !important;
    justify-content: center !important;
    padding: 10px 20px !important;
    border-radius: 999px !important;
    background: #ffffff !important;
    color: #334155 !important;
    border: 1px solid #e2e8f0 !important;
    font-size: 15px !important;
    font-weight: 700 !important;
    text-decoration: none !important;
    line-height: 1 !important;
    box-shadow: 0 8px 22px rgba(15, 23, 42, 0.04) !important;
    transition: all 0.22s ease !important;
}

.tmcs-tab:hover,
.tmcs-tab.active {
    background: #2563eb !important;
    color: #ffffff !important;
    border-color: #2563eb !important;
    box-shadow: 0 14px 30px rgba(37, 99, 235, 0.22) !important;
    transform: translateY(-1px) !important;
}

/* Grid */
.tmcs-grid {
    width: 100% !important;
    max-width: 1180px !important;
    margin-left: auto !important;
    margin-right: auto !important;
    display: grid !important;
    grid-template-columns: repeat(3, minmax(0, 374px)) !important;
    gap: 28px !important;
    justify-content: center !important;
    justify-items: stretch !important;
    align-items: stretch !important;
}

.tmcs-grid.tmcs-grid-count-1 {
    grid-template-columns: minmax(0, 374px) !important;
}

.tmcs-grid.tmcs-grid-count-2 {
    grid-template-columns: repeat(2, minmax(0, 374px)) !important;
}

/* Card */
.tmcs-card {
    width: 100% !important;
    max-width: 374px !important;
    min-height: 100% !important;
    margin: 0 !important;
    display: flex !important;
    flex-direction: column !important;
    overflow: hidden !important;
    border-radius: 18px !important;
    background: #ffffff !important;
    border: 1px solid #edf2f7 !important;
    box-shadow: 0 18px 42px rgba(15, 23, 42, 0.08) !important;
    transition: transform 0.25s ease, box-shadow 0.25s ease !important;
}

.tmcs-card:hover {
    transform: translateY(-5px) !important;
    box-shadow: 0 26px 58px rgba(15, 23, 42, 0.13) !important;
}

/* Image */
.tmcs-card .case-list-image {
    position: relative !important;
    width: 100% !important;
    height: 220px !important;
    min-height: 220px !important;
    overflow: hidden !important;
    background: #e5e7eb !important;
    border-radius: 18px 18px 0 0 !important;
}

.tmcs-card .case-list-image img {
    width: 100% !important;
    height: 220px !important;
    display: block !important;
    object-fit: cover !important;
    object-position: center !important;
}

.tmcs-card .case-list-image::after {
    content: "" !important;
    position: absolute !important;
    inset: 0 !important;
    background: rgba(15, 23, 42, 0.18) !important;
    pointer-events: none !important;
}

.tmcs-card .case-list-chip {
    position: absolute !important;
    top: 16px !important;
    left: 16px !important;
    z-index: 2 !important;
    display: inline-flex !important;
    align-items: center !important;
    justify-content: center !important;
    max-width: calc(100% - 32px) !important;
    padding: 8px 16px !important;
    border-radius: 999px !important;
    background: #2563eb !important;
    color: #ffffff !important;
    font-size: 12px !important;
    font-weight: 800 !important;
    line-height: 1 !important;
    white-space: nowrap !important;
    box-shadow: 0 10px 22px rgba(37, 99, 235, 0.28) !important;
}

/* Body */
.tmcs-card .case-list-body {
    flex: 1 !important;
    display: flex !important;
    flex-direction: column !important;
    padding: 26px 24px 24px !important;
    background: #ffffff !important;
}

.tmcs-card .case-list-kicker {
    margin: 0 0 10px !important;
    color: #64748b !important;
    font-size: 13px !important;
    font-weight: 600 !important;
    line-height: 1.4 !important;
}

.tmcs-card .case-list-body h2 {
    margin: 0 !important;
    color: #172033 !important;
    font-size: 18px !important;
    font-weight: 900 !important;
    line-height: 1.35 !important;
    letter-spacing: -0.015em !important;
}

/* Hide excerpt to match screenshot */
.tmcs-card .case-list-body > p {
    display: none !important;
}

/* Metrics */
.tmcs-card .case-list-metrics {
    display: grid !important;
    grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
    gap: 0 !important;
    width: 100% !important;
    margin: 26px 0 20px !important;
    border: 1px solid #e7edf5 !important;
    border-radius: 16px !important;
    overflow: hidden !important;
    background: #ffffff !important;
    box-shadow: 0 10px 24px rgba(15, 23, 42, 0.04) !important;
}

.tmcs-card .case-list-metrics.metric-count-1 {
    grid-template-columns: 1fr !important;
}

.tmcs-card .case-list-metric {
    min-height: 108px !important;
    padding: 20px 16px !important;
    display: flex !important;
    flex-direction: column !important;
    justify-content: center !important;
    background: #ffffff !important;
}

.tmcs-card .case-list-metric + .case-list-metric {
    border-left: 1px solid #e7edf5 !important;
}

.tmcs-card .case-list-metric strong {
    display: block !important;
    margin: 0 0 10px !important;
    color: #2563eb !important;
    font-size: 25px !important;
    font-weight: 900 !important;
    line-height: 1 !important;
    letter-spacing: -0.02em !important;
}

.tmcs-card .case-list-metric span {
    display: block !important;
    color: #7b8798 !important;
    font-size: 13px !important;
    font-weight: 600 !important;
    line-height: 1.55 !important;
}

/* Link */
.tmcs-card .case-study-link {
    margin-top: auto !important;
    display: inline-flex !important;
    align-items: center !important;
    width: fit-content !important;
    color: #2563eb !important;
    font-size: 15px !important;
    font-weight: 800 !important;
    line-height: 1.2 !important;
    text-decoration: none !important;
    transition: color 0.2s ease, transform 0.2s ease !important;
}

.tmcs-card .case-study-link:hover {
    color: #1d4ed8 !important;
    transform: translateX(3px) !important;
}

/* Empty */
.tmcs-grid-empty {
    display: grid !important;
    grid-template-columns: minmax(0, 760px) !important;
    justify-content: center !important;
    align-items: center !important;
}

.tmcs-empty-wrap {
    width: 100% !important;
    max-width: 760px !important;
    margin: 0 auto !important;
    padding: 0 !important;
    display: block !important;
    text-align: center !important;
}

.tmcs-empty-card {
    position: relative !important;
    overflow: hidden !important;
    width: 100% !important;
    padding: 42px 30px !important;
    border-radius: 28px !important;
    border: 1px solid rgba(37, 99, 235, 0.16) !important;
    background:
        radial-gradient(circle at 16% 12%, rgba(37, 99, 235, 0.12), transparent 34%),
        radial-gradient(circle at 88% 80%, rgba(14, 165, 233, 0.10), transparent 34%),
        linear-gradient(180deg, #ffffff 0%, #f7faff 100%) !important;
    box-shadow: 0 24px 70px rgba(15, 23, 42, 0.10) !important;
    box-sizing: border-box !important;
}

.tmcs-empty-card::before {
    content: "" !important;
    position: absolute !important;
    inset: 18px !important;
    border-radius: 22px !important;
    border: 1px dashed rgba(37, 99, 235, 0.18) !important;
    pointer-events: none !important;
}

.tmcs-empty-card > * {
    position: relative !important;
    z-index: 2 !important;
}

.tmcs-empty-icon {
    width: 62px !important;
    height: 62px !important;
    margin: 0 auto 18px !important;
    display: grid !important;
    place-items: center !important;
    border-radius: 20px !important;
    color: #2563eb !important;
    background: rgba(37, 99, 235, 0.10) !important;
    box-shadow: inset 0 0 0 1px rgba(37, 99, 235, 0.14) !important;
}

.tmcs-empty-icon svg {
    width: 30px !important;
    height: 30px !important;
    display: block !important;
}

.tmcs-empty-eyebrow {
    margin: 0 0 8px !important;
    color: #2563eb !important;
    font-size: 11px !important;
    font-weight: 800 !important;
    letter-spacing: 0.16em !important;
    text-transform: uppercase !important;
    line-height: 1.3 !important;
}

.tmcs-empty-card h2 {
    margin: 0 !important;
    color: #0f172a !important;
    font-size: clamp(24px, 3vw, 34px) !important;
    font-weight: 900 !important;
    line-height: 1.14 !important;
    letter-spacing: -0.035em !important;
}

.tmcs-empty-card p {
    max-width: 500px !important;
    margin: 12px auto 0 !important;
    padding: 0 !important;
    color: #64748b !important;
    font-size: 15px !important;
    font-weight: 400 !important;
    line-height: 1.65 !important;
}

/* Pagination */
.tmcs-pagination,
.case-studies-pagination {
    width: 100% !important;
    display: flex !important;
    justify-content: center !important;
    align-items: center !important;
    margin-top: 48px !important;
}

.tmcs-pagination ul,
.case-studies-pagination ul {
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    flex-wrap: wrap !important;
    gap: 10px !important;
    margin: 0 !important;
    padding: 0 !important;
    list-style: none !important;
}

.tmcs-pagination li,
.case-studies-pagination li {
    margin: 0 !important;
    padding: 0 !important;
    list-style: none !important;
}

.tmcs-pagination .page-numbers,
.case-studies-pagination .page-numbers {
    min-width: 44px !important;
    height: 44px !important;
    padding: 0 15px !important;
    display: inline-flex !important;
    align-items: center !important;
    justify-content: center !important;
    border-radius: 999px !important;
    background: #ffffff !important;
    border: 1px solid #e2e8f0 !important;
    color: #334155 !important;
    font-size: 15px !important;
    font-weight: 700 !important;
    line-height: 1 !important;
    text-decoration: none !important;
    box-shadow: 0 8px 22px rgba(15, 23, 42, 0.05) !important;
    transition: all 0.22s ease !important;
}

.tmcs-pagination a.page-numbers:hover,
.case-studies-pagination a.page-numbers:hover {
    background: #eff6ff !important;
    border-color: #2563eb !important;
    color: #2563eb !important;
    transform: translateY(-2px) !important;
    box-shadow: 0 14px 30px rgba(37, 99, 235, 0.14) !important;
}

.tmcs-pagination .page-numbers.current,
.case-studies-pagination .page-numbers.current {
    background: linear-gradient(135deg, #2563eb, #1d4ed8) !important;
    border-color: #2563eb !important;
    color: #ffffff !important;
    box-shadow: 0 14px 30px rgba(37, 99, 235, 0.25) !important;
}

.tmcs-pagination .next.page-numbers,
.case-studies-pagination .next.page-numbers,
.tmcs-pagination .prev.page-numbers,
.case-studies-pagination .prev.page-numbers {
    min-width: auto !important;
    padding: 0 20px !important;
}

/* Tablet */
@media (max-width: 1023px) {
    .tmcs-grid,
    .tmcs-grid.tmcs-grid-count-2 {
        grid-template-columns: repeat(2, minmax(0, 374px)) !important;
        gap: 24px !important;
    }

    .tmcs-grid.tmcs-grid-count-1 {
        grid-template-columns: minmax(0, 374px) !important;
    }
}

/* Mobile */
@media (max-width: 767px) {
    .tmcs-case-study-list {
        padding-top: 60px !important;
        padding-bottom: 70px !important;
    }

    .tmcs-container {
        width: min(100% - 28px, 1180px) !important;
    }

    .tmcs-toolbar {
        gap: 10px !important;
        margin: 28px auto 34px !important;
    }

    .tmcs-tab {
        padding: 9px 16px !important;
        font-size: 14px !important;
    }

    .tmcs-grid,
    .tmcs-grid.tmcs-grid-count-1,
    .tmcs-grid.tmcs-grid-count-2 {
        grid-template-columns: 1fr !important;
        gap: 22px !important;
    }

    .tmcs-card {
        max-width: 100% !important;
    }

    .tmcs-card .case-list-image,
    .tmcs-card .case-list-image img {
        height: 210px !important;
        min-height: 210px !important;
    }

    .tmcs-card .case-list-body {
        padding: 24px 22px 24px !important;
    }

    .tmcs-card .case-list-body h2 {
        font-size: 17px !important;
    }

    .tmcs-card .case-list-metric {
        min-height: 102px !important;
        padding: 18px 14px !important;
    }

    .tmcs-card .case-list-metric strong {
        font-size: 24px !important;
    }

    .tmcs-card .case-list-metric span {
        font-size: 12.5px !important;
    }

    .tmcs-grid-empty {
        grid-template-columns: 1fr !important;
    }

    .tmcs-empty-card {
        padding: 34px 20px !important;
        border-radius: 22px !important;
    }

    .tmcs-empty-card::before {
        inset: 12px !important;
        border-radius: 18px !important;
    }

    .tmcs-empty-icon {
        width: 56px !important;
        height: 56px !important;
        border-radius: 18px !important;
    }

    .tmcs-empty-card h2 {
        font-size: 24px !important;
    }

    .tmcs-empty-card p {
        font-size: 14px !important;
    }

    .tmcs-pagination,
    .case-studies-pagination {
        margin-top: 36px !important;
    }

    .tmcs-pagination ul,
    .case-studies-pagination ul {
        gap: 8px !important;
    }

    .tmcs-pagination .page-numbers,
    .case-studies-pagination .page-numbers {
        min-width: 40px !important;
        height: 40px !important;
        padding: 0 13px !important;
        font-size: 14px !important;
    }

    .tmcs-pagination .next.page-numbers,
    .case-studies-pagination .next.page-numbers,
    .tmcs-pagination .prev.page-numbers,
    .case-studies-pagination .prev.page-numbers {
        padding: 0 16px !important;
    }
}

@media (max-width: 390px) {
    .tmcs-card .case-list-body {
        padding: 22px 18px 22px !important;
    }

    .tmcs-card .case-list-metrics {
        margin-top: 22px !important;
    }

    .tmcs-card .case-list-metric {
        padding: 16px 12px !important;
    }

    .tmcs-card .case-list-metric strong {
        font-size: 22px !important;
    }

    .tmcs-card .case-list-metric span {
        font-size: 12px !important;
    }
}



/* Case study card featured image - bigger height */
.case-list-card .case-list-image,
.tmcs-card .case-list-image {
    position: relative !important;
    width: 100% !important;
    height: 300px !important;
    min-height: 300px !important;
    overflow: hidden !important;
    background: #f8fafc !important;
    border-radius: 18px 18px 0 0 !important;
}

.case-list-card .case-list-image img,
.tmcs-card .case-list-image img {
    width: 100% !important;
    height: 100% !important;
    display: block !important;
    object-fit: cover !important;
    object-position: center center !important;
}

/* Remove dark overlay */
.case-list-card .case-list-image::after,
.tmcs-card .case-list-image::after {
    display: none !important;
}
</style>

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
                    <p>See how TachoMind used SEO, PPC, content, conversion tracking and campaign restructuring to help clients improve visibility, traffic and qualified lead flow.</p>

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

    <section class="section case-study-list tmcs-case-study-list" id="case-study-list">
        <div class="container tmcs-container">
            <div class="section-header tmcs-header">
                <div class="section-badge">Selected Work</div>
                <h2>Case studies by <span style="color:#2563eb">service focus</span></h2>
                <p class="section-subtext">Each study uses the source content from the TachoMind case-study archive and turns it into a focused, readable story.</p>
            </div>

            <div class="case-list-toolbar tmcs-toolbar" aria-label="Filter case studies">
                <a
                    href="<?php echo esc_url(remove_query_arg(array('case_category', 'case_cat', 'case_page', 'paged'), $archive_link)); ?>#case-study-list"
                    class="case-list-tab tmcs-tab <?php echo 'all' === $selected_category ? 'active' : ''; ?>"
                    data-case-filter="all"
                >
                    All
                </a>

                <?php if (!empty($case_terms) && !is_wp_error($case_terms)) : ?>
                    <?php foreach ($case_terms as $term) : ?>
                        <a
                            href="<?php echo esc_url(add_query_arg('case_category', $term->slug, remove_query_arg(array('case_page', 'paged', 'case_cat'), $archive_link))); ?>#case-study-list"
                            class="case-list-tab tmcs-tab <?php echo $selected_category === $term->slug ? 'active' : ''; ?>"
                            data-case-filter="<?php echo esc_attr($term->name); ?>"
                        >
                            <?php echo esc_html($term->name); ?>
                        </a>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>

            <?php if ($case_query->have_posts()) : ?>

                <div class="case-list-grid tmcs-grid tmcs-grid-count-<?php echo esc_attr($case_query->post_count); ?>">
                    <?php
                    while ($case_query->have_posts()) :
                        $case_query->the_post();

                        $case_id = get_the_ID();

                        $thumbnail_url = get_the_post_thumbnail_url($case_id, 'full');

                        if (!$thumbnail_url) {
                            $thumbnail_url = 'https://via.placeholder.com/800x500?text=Case+Study';
                        }

                        $terms = get_the_terms($case_id, 'case_study_category');
                        $category_name = !empty($terms) && !is_wp_error($terms) ? $terms[0]->name : 'Case Study';

                        $case_excerpt = has_excerpt($case_id)
                            ? get_the_excerpt($case_id)
                            : wp_trim_words(wp_strip_all_tags(get_the_content()), 24, '...');

                        /*
                         * New top-level ACF metric fields.
                         */
                        $metric_1_value = tmcs_get_archive_metric($case_id, 'archive_metric_1_value');
                        $metric_1_label = tmcs_get_archive_metric($case_id, 'archive_metric_1_label');
                        $metric_2_value = tmcs_get_archive_metric($case_id, 'archive_metric_2_value');
                        $metric_2_label = tmcs_get_archive_metric($case_id, 'archive_metric_2_label');

                        /*
                         * Label fallback.
                         * If value is filled but label is empty, card still shows.
                         */
                        if ($metric_1_value !== '' && $metric_1_label === '') {
                            $metric_1_label = 'Website traffic increase';
                        }

                        if ($metric_2_value !== '' && $metric_2_label === '') {
                            $metric_2_label = 'Lead generation growth';
                        }

                        $has_metric_1 = $metric_1_value !== '';
                        $has_metric_2 = $metric_2_value !== '';

                        $metric_count = 0;

                        if ($has_metric_1) {
                            $metric_count++;
                        }

                        if ($has_metric_2) {
                            $metric_count++;
                        }
                        ?>

                        <article class="case-list-card tmcs-card" data-case-category="<?php echo esc_attr($category_name); ?>">
                            <div class="case-list-image">
                                <img
                                    src="<?php echo esc_url($thumbnail_url); ?>"
                                    alt="<?php echo esc_attr(get_the_title($case_id)); ?>"
                                    loading="lazy"
                                />
                                <span class="case-list-chip"><?php echo esc_html($category_name); ?></span>
                            </div>

                            <div class="case-list-body">
                                <div class="case-list-kicker"><?php echo esc_html($category_name); ?></div>

                                <h2><?php echo esc_html(get_the_title($case_id)); ?></h2>

                                <p><?php echo esc_html($case_excerpt); ?></p>

                                <?php if ($has_metric_1 || $has_metric_2) : ?>
                                    <div class="case-list-metrics metric-count-<?php echo esc_attr($metric_count); ?>">
                                        <?php if ($has_metric_1) : ?>
                                            <div class="case-list-metric">
                                                <strong><?php echo esc_html($metric_1_value); ?></strong>
                                                <span><?php echo esc_html($metric_1_label); ?></span>
                                            </div>
                                        <?php endif; ?>

                                        <?php if ($has_metric_2) : ?>
                                            <div class="case-list-metric">
                                                <strong><?php echo esc_html($metric_2_value); ?></strong>
                                                <span><?php echo esc_html($metric_2_label); ?></span>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>

                                <a href="<?php echo esc_url(get_permalink($case_id)); ?>" class="case-study-link">View Full Case Study &rarr;</a>
                            </div>
                        </article>

                    <?php endwhile; ?>
                </div>

                <?php
                $pagination_args = array(
                    'base'         => esc_url_raw(add_query_arg('case_page', '%#%', $archive_link)),
                    'format'       => '',
                    'total'        => $case_query->max_num_pages,
                    'current'      => $paged,
                    'prev_text'    => '&laquo; Prev',
                    'next_text'    => 'Next &raquo;',
                    'type'         => 'list',
                    'add_fragment' => '#case-study-list',
                );

                if ($selected_category !== 'all') {
                    $pagination_args['add_args'] = array(
                        'case_category' => $selected_category,
                    );
                }

                $pagination = paginate_links($pagination_args);

                if ($pagination) :
                    ?>
                    <div class="case-studies-pagination tmcs-pagination">
                        <?php echo wp_kses_post($pagination); ?>
                    </div>
                <?php endif; ?>

                <?php wp_reset_postdata(); ?>

            <?php else : ?>

                <div class="case-list-grid tmcs-grid tmcs-grid-empty">
                    <div class="tmcs-empty-wrap" role="status" aria-live="polite">
                        <div class="tmcs-empty-card">
                            <div class="tmcs-empty-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" />
                                    <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" />
                                    <path d="M9 7h7" />
                                    <path d="M9 11h5" />
                                </svg>
                            </div>

                            <p class="tmcs-empty-eyebrow">More stories coming soon</p>

                            <h2>
                                <?php
                                echo $selected_category !== 'all'
                                    ? esc_html('No ' . $selected_case_label . ' case studies found yet')
                                    : esc_html('No case studies found yet');
                                ?>
                            </h2>

                            <p>
                                <?php if ($selected_category !== 'all') : ?>
                                    We do not have a published case study under this service focus yet. Please check another category or come back soon.
                                <?php else : ?>
                                    We are preparing new client growth stories. Please check back soon.
                                <?php endif; ?>
                            </p>
                        </div>
                    </div>
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
                    <h2 class="cta-headline">You have a vision. We have a team to get you there.</h2>
                    <p class="cta-subtext">Ready to speak with a marketing expert? Give us a ring or request a free audit and we will help you identify the next high-impact move.</p>

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
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="form-submit" style="display:flex;justify-content:center;text-decoration:none;">Get Free Audit</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>
