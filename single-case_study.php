<style>
    .testimonial-section {
  background:
    radial-gradient(circle at 8% 18%, rgba(66, 100, 237, 0.13), transparent 32%),
    radial-gradient(circle at 92% 80%, rgba(15, 23, 42, 0.08), transparent 30%),
    linear-gradient(180deg, #ffffff 0%, #f6f8ff 100%);
  overflow: hidden;
}

.testimonial-card {
  position: relative;
  display: grid;
  grid-template-columns: 0.88fr 1.12fr;
  gap: 24px;
  align-items: stretch;
  padding: 24px;
  border-radius: 38px;
  border: 1px solid rgba(15, 23, 42, 0.10);
  background: rgba(255, 255, 255, 0.78);
  box-shadow: var(--shadow-soft);
  backdrop-filter: blur(18px);
  overflow: hidden;
}

.testimonial-card::before {
  content: "";
  position: absolute;
  width: 280px;
  height: 280px;
  right: -120px;
  top: -120px;
  border-radius: 50%;
  background: rgba(66, 100, 237, 0.12);
  pointer-events: none;
}

.testimonial-aside {
  position: relative;
  z-index: 2;
  min-height: 420px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  padding: 34px;
  border-radius: 30px;
  color: #fff;
  background:
    radial-gradient(circle at 20% 18%, rgba(255, 255, 255, 0.18), transparent 32%),
    linear-gradient(135deg, var(--navy), #17356c 68%, var(--blue));
  overflow: hidden;
}

.testimonial-aside::after {
  content: "";
  position: absolute;
  width: 220px;
  height: 220px;
  right: -90px;
  bottom: -90px;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.10);
}

.testimonial-aside .section-kicker {
  color: #fff;
}

.testimonial-aside .section-kicker::before {
  background: #fff;
}

.testimonial-aside h2 {
  position: relative;
  z-index: 2;
  margin: 0;
  color: #fff;
  font-size: clamp(34px, 4.4vw, 58px);
  line-height: 0.98;
  letter-spacing: -0.055em;
}

.testimonial-aside p {
  position: relative;
  z-index: 2;
  margin: 22px 0 0;
  max-width: 420px;
  color: rgba(255, 255, 255, 0.76);
  font-size: 17px;
  line-height: 1.72;
}

.testimonial-mini-metrics {
  position: relative;
  z-index: 2;
  display: grid;
  grid-template-columns: repeat(2, minmax(0, 1fr));
  gap: 12px;
  margin-top: 34px;
}

.testimonial-mini-metrics span {
  min-height: 96px;
  display: flex;
  flex-direction: column;
  justify-content: flex-end;
  padding: 16px;
  border-radius: 20px;
  background: rgba(255, 255, 255, 0.12);
}

.testimonial-mini-metrics strong {
  display: block;
  color: #fff;
  font-size: 30px;
  line-height: 1;
  letter-spacing: -0.04em;
}

.testimonial-mini-metrics small {
  display: block;
  margin-top: 8px;
  color: rgba(255, 255, 255, 0.72);
  font-weight: 850;
}

.testimonial-quote-card {
  position: relative;
  z-index: 2;
  min-height: 420px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  padding: clamp(30px, 4vw, 52px);
  border-radius: 30px;
  background:
    linear-gradient(180deg, #ffffff, #f9fbff);
  border: 1px solid rgba(15, 23, 42, 0.10);
  box-shadow: 0 14px 38px rgba(15, 23, 42, 0.07);
}

.testimonial-quote-mark {
  width: 68px;
  height: 68px;
  display: grid;
  place-items: center;
  border-radius: 24px;
  color: #fff;
  background: var(--blue);
  font-size: 58px;
  font-weight: 950;
  line-height: 1;
  box-shadow: 0 18px 42px rgba(66, 100, 237, 0.24);
}

.testimonial-stars {
  display: flex;
  gap: 5px;
  margin: 26px 0 18px;
  color: var(--amber);
  font-size: 18px;
}

.testimonial-quote-card blockquote {
  margin: 0;
  color: var(--navy);
  font-size: clamp(20px, 16px, 38px)!important;
  line-height: 1.34;
  letter-spacing: -0.04em;
  font-weight: 400!important;
}

.testimonial-quote-card blockquote p {
  margin: 0;
}

.testimonial-client-row {
  display: flex;
  align-items: center;
  gap: 16px;
  margin-top: 36px;
  padding-top: 24px;
  border-top: 1px solid rgba(15, 23, 42, 0.10);
}

.testimonial-avatar {
  flex: 0 0 auto;
  width: 62px;
  height: 62px;
  display: grid;
  place-items: center;
  border-radius: 22px;
  color: #fff;
  background: var(--navy);
  font-size: 24px;
  font-weight: 950;
}

.testimonial-client-row strong {
  display: block;
  color: var(--navy);
  font-size: 19px;
  line-height: 1.2;
}

.testimonial-client-row span {
  display: block;
  margin-top: 5px;
  color: var(--muted);
  font-weight: 800;
  line-height: 1.35;
}

@media (max-width: 1024px) {
  .testimonial-card {
    grid-template-columns: 1fr;
  }

  .testimonial-aside,
  .testimonial-quote-card {
    min-height: auto;
  }
}

@media (max-width: 720px) {
  .testimonial-card {
    padding: 16px;
    border-radius: 28px;
  }

  .testimonial-aside,
  .testimonial-quote-card {
    padding: 26px;
    border-radius: 24px;
  }

  .testimonial-mini-metrics {
    grid-template-columns: 1fr;
  }

  .testimonial-client-row {
    align-items: flex-start;
  }
}




/* ============================================================
   FIX: Before / After comparison text overlap
   For slider-style before/after section
   ============================================================ */

/* Keep the comparison card structure intact */
/*.before-after-section,*/
/*.before-after-section * {*/
/*    box-sizing: border-box;*/
/*}*/

/* Main comparison wrapper */
/*.before-after-section .comparison-card,*/
/*.before-after-section .before-after-card,*/
/*.before-after-section .ba-card,*/
/*.before-after-section .compare-card {*/
/*    position: relative !important;*/
/*    overflow: hidden !important;*/
/*}*/

/* Do NOT force grid here. This section is a slider layout. */
/*.before-after-section .ba-grid,*/
/*.before-after-section .before-after-grid,*/
/*.before-after-section .ba-compare-grid {*/
/*    display: block !important;*/
/*}*/

/* Left side content safe spacing */
/*.before-after-section .before-panel,*/
/*.before-after-section .before-optimization,*/
/*.before-after-section .ba-before {*/
/*    width: 50% !important;*/
/*    max-width: 50% !important;*/
/*    padding: 70px 95px 70px 80px !important;*/
/*    overflow: hidden !important;*/
/*    position: relative !important;*/
/*    z-index: 2 !important;*/
/*}*/

/* Right side content safe spacing */
/*.before-after-section .after-panel,*/
/*.before-after-section .after-optimization,*/
/*.before-after-section .ba-after {*/
/*    width: 50% !important;*/
/*    max-width: 50% !important;*/
/*    margin-left: auto !important;*/
/*    padding: 70px 80px 70px 95px !important;*/
/*    overflow: hidden !important;*/
/*    position: relative !important;*/
/*    z-index: 2 !important;*/
/*}*/

/* Reduce large heading size so it does not cross the center */
/*.before-after-section .before-panel h2,*/
/*.before-after-section .before-optimization h2,*/
/*.before-after-section .ba-before h2,*/
/*.before-after-section .after-panel h2,*/
/*.before-after-section .after-optimization h2,*/
/*.before-after-section .ba-after h2 {*/
/*    font-size: clamp(36px, 3.2vw, 54px) !important;*/
/*    line-height: 1.02 !important;*/
/*    max-width: 100% !important;*/
/*    margin-bottom: 26px !important;*/
/*    word-break: normal !important;*/
/*    overflow-wrap: normal !important;*/
/*}*/

/* Keep list readable */
/*.before-after-section .before-panel li,*/
/*.before-after-section .before-optimization li,*/
/*.before-after-section .ba-before li,*/
/*.before-after-section .after-panel li,*/
/*.before-after-section .after-optimization li,*/
/*.before-after-section .ba-after li {*/
/*    font-size: 17px !important;*/
/*    line-height: 1.55 !important;*/
/*    max-width: 100% !important;*/
/*}*/

/* Slider handle should stay centered, but smaller */
/*.before-after-section .ba-handle,*/
/*.before-after-section .before-after-handle,*/
/*.before-after-section .comparison-handle,*/
/*.before-after-section .slider-handle {*/
/*    width: 54px !important;*/
/*    height: 54px !important;*/
/*    z-index: 30 !important;*/
/*}*/

/* Make the vertical divider stay above background but not affect text */
/*.before-after-section .ba-divider,*/
/*.before-after-section .comparison-divider,*/
/*.before-after-section .before-after-divider {*/
/*    z-index: 25 !important;*/
/*    pointer-events: none !important;*/
/*}*/

/* Mobile/tablet: stack or simplify */
/*@media (max-width: 900px) {*/
/*    .before-after-section .before-panel,*/
/*    .before-after-section .before-optimization,*/
/*    .before-after-section .ba-before,*/
/*    .before-after-section .after-panel,*/
/*    .before-after-section .after-optimization,*/
/*    .before-after-section .ba-after {*/
/*        width: 100% !important;*/
/*        max-width: 100% !important;*/
/*        margin-left: 0 !important;*/
/*        padding: 40px 28px !important;*/
/*    }*/

/*    .before-after-section .before-panel h2,*/
/*    .before-after-section .before-optimization h2,*/
/*    .before-after-section .ba-before h2,*/
/*    .before-after-section .after-panel h2,*/
/*    .before-after-section .after-optimization h2,*/
/*    .before-after-section .ba-after h2 {*/
/*        font-size: 34px !important;*/
/*        line-height: 1.08 !important;*/
/*    }*/

/*    .before-after-section .ba-handle,*/
/*    .before-after-section .before-after-handle,*/
/*    .before-after-section .comparison-handle,*/
/*    .before-after-section .slider-handle,*/
/*    .before-after-section .ba-divider,*/
/*    .before-after-section .comparison-divider,*/
/*    .before-after-section .before-after-divider {*/
/*        display: none !important;*/
/*    }*/
/*}*/


/* Slightly move Before/After heading upward and prevent overlap */
/*.before-after-section .before-panel h2,*/
/*.before-after-section .before-optimization h2,*/
/*.before-after-section .ba-before h2,*/
/*.before-after-section .after-panel h2,*/
/*.before-after-section .after-optimization h2,*/
/*.before-after-section .ba-after h2 {*/
/*    transform: translateY(-22px) !important;*/
/*    margin-bottom: 8px !important;*/
/*    font-size: clamp(34px, 3vw, 50px) !important;*/
/*    line-height: 0.95 !important;*/
/*}*/

/* Move bullet list slightly down for breathing space */
/*.before-after-section .before-panel ul,*/
/*.before-after-section .before-optimization ul,*/
/*.before-after-section .ba-before ul,*/
/*.before-after-section .after-panel ul,*/
/*.before-after-section .after-optimization ul,*/
/*.before-after-section .ba-after ul {*/
/*    margin-top: 8px !important;*/
/*}*/


/* Final fix: stop Before/After heading covering bullet text */
/*.before-after-section .before-panel h2,*/
/*.before-after-section .before-optimization h2,*/
/*.before-after-section .ba-before h2,*/
/*.before-after-section .after-panel h2,*/
/*.before-after-section .after-optimization h2,*/
/*.before-after-section .ba-after h2 {*/
/*    font-size: 42px !important;*/
/*    line-height: 1.05 !important;*/
/*    margin: 0 0 70px !important;*/
/*    max-width: 300px !important;*/
/*    transform: none !important;*/
/*    position: relative !important;*/
/*    z-index: 1 !important;*/
/*}*/

/* Push the bullet list down below heading */
/*.before-after-section .before-panel ul,*/
/*.before-after-section .before-optimization ul,*/
/*.before-after-section .ba-before ul,*/
/*.before-after-section .after-panel ul,*/
/*.before-after-section .after-optimization ul,*/
/*.before-after-section .ba-after ul {*/
/*    margin-top: 0 !important;*/
/*    padding-top: 0 !important;*/
/*    position: relative !important;*/
/*    z-index: 5 !important;*/
/*}*/

/* Give each list item proper spacing */
/*.before-after-section .before-panel li,*/
/*.before-after-section .before-optimization li,*/
/*.before-after-section .ba-before li,*/
/*.before-after-section .after-panel li,*/
/*.before-after-section .after-optimization li,*/
/*.before-after-section .ba-after li {*/
/*    font-size: 17px !important;*/
/*    line-height: 1.55 !important;*/
/*    margin-bottom: 14px !important;*/
/*}*/
</style>
<?php
/**
 * Dynamic Single Case Study Template - exact ZIP design + ACF dynamic fields.
 * Version: fixed-metrics-2026-06-17
 * Rename this file to single-case_study.php and place it in your active theme.
 * ACF parent group: case_studies
 */

get_header();

$cs = function_exists('get_field') ? get_field('case_studies') : array();
$cs = is_array($cs) ? $cs : array();

if (!function_exists('tm_cs_get')) {
    function tm_cs_get($array, $key, $default = '') {
        return (is_array($array) && array_key_exists($key, $array) && $array[$key] !== '' && $array[$key] !== null) ? $array[$key] : $default;
    }
}

if (!function_exists('tm_cs_is_empty')) {
    function tm_cs_is_empty($value) {
        if ($value === null || $value === false) {
            return true;
        }
        if (is_string($value)) {
            return trim($value) === '';
        }
        if (is_numeric($value)) {
            return false;
        }
        if (is_array($value)) {
            foreach ($value as $child) {
                if (!tm_cs_is_empty($child)) {
                    return false;
                }
            }
            return true;
        }
        return empty($value);
    }
}

if (!function_exists('tm_cs_text')) {
    function tm_cs_text($value) {
        return esc_html((string) $value);
    }
}

if (!function_exists('tm_cs_rich')) {
    function tm_cs_rich($value) {
        $value = trim((string) $value);
        return $value !== '' ? wp_kses_post(wpautop($value)) : '';
    }
}

if (!function_exists('tm_cs_lines')) {
    function tm_cs_lines($text) {
        $text = trim((string) $text);
        if ($text === '') {
            return array();
        }

        $lines = preg_split('/\r\n|\r|\n/', $text);
        $lines = array_map('trim', $lines);
        $lines = array_filter($lines, function($line) { return $line !== ''; });

        if (count($lines) === 1 && strpos($text, ',') !== false) {
            $lines = array_map('trim', explode(',', $text));
            $lines = array_filter($lines, function($line) { return $line !== ''; });
        }

        return array_values($lines);
    }
}

if (!function_exists('tm_cs_media_url')) {
    function tm_cs_media_url($image, $size = 'full') {
        if (empty($image)) {
            return '';
        }

        if (is_numeric($image)) {
            $url = wp_get_attachment_image_url((int) $image, $size);
            return $url ? $url : '';
        }

        if (is_array($image)) {
            if (!empty($image['ID'])) {
                $url = wp_get_attachment_image_url((int) $image['ID'], $size);
                return $url ? $url : '';
            }
            if (!empty($image['id'])) {
                $url = wp_get_attachment_image_url((int) $image['id'], $size);
                return $url ? $url : '';
            }
            if (!empty($image['url'])) {
                return $image['url'];
            }
        }

        if (is_string($image)) {
            return $image;
        }

        return '';
    }
}

if (!function_exists('tm_cs_percent_number')) {
    function tm_cs_percent_number($value, $fallback = 75) {
        preg_match('/\d+/', (string) $value, $matches);
        if (!empty($matches[0])) {
            $number = (int) $matches[0];
            return max(0, min(100, $number));
        }
        return $fallback;
    }
}

if (!function_exists('tm_cs_metric_count')) {
    function tm_cs_metric_count($value) {
        preg_match('/\d+/', (string) $value, $matches);
        return !empty($matches[0]) ? (int) $matches[0] : 0;
    }
}

if (!function_exists('tm_cs_metric_suffix')) {
    function tm_cs_metric_suffix($value) {
        $value = (string) $value;
        if (strpos($value, '%') !== false) {
            return '%';
        }
        if (stripos($value, 'x') !== false) {
            return 'x';
        }
        return '';
    }
}

if (!function_exists('tm_cs_hero_title')) {
    function tm_cs_hero_title($title, $brand) {
        $title = trim((string) $title);
        $brand = trim((string) $brand);

        if ($title === '') {
            $title = get_the_title();
        }

        if ($brand !== '' && stripos($title, $brand) === 0) {
            $rest = trim(substr($title, strlen($brand)));
            echo '<span>' . esc_html($brand) . '</span>';
            if ($rest !== '') {
                echo ' ' . esc_html($rest);
            }
            return;
        }

        echo esc_html($title);
    }
}

if (!function_exists('tm_cs_rank_and_keyword')) {
    function tm_cs_rank_and_keyword($keyword, $index) {
        $keyword = trim((string) $keyword);

        // Always show ranking badges in sequence: #1, #2, #3, #4, #5.
        // If the ACF keyword title already starts with a number, remove it from the keyword text only.
        $rank = '#' . (int) $index;

        if (preg_match('/^\s*(#?\d+)\s*[-–—:]?\s+(.+)$/', $keyword, $matches)) {
            $keyword = trim($matches[2]);
        }

        return array($rank, $keyword);
    }
}

$hero         = tm_cs_get($cs, 'hero_section', array());
$story        = tm_cs_get($cs, 'the_story', array());
$before_after = tm_cs_get($cs, 'before__after', array());
$objectives   = tm_cs_get($cs, 'objectives', array());
$blueprint    = tm_cs_get($cs, 'blueprint_section', array());
$ranking      = tm_cs_get($cs, 'ranking_factor', array());
$proof        = tm_cs_get($cs, 'evidence-led_reporting_view', array());
$organic      = tm_cs_get($cs, 'organic_traffic', array());
$beyond       = tm_cs_get($cs, 'beyond_metrics', array());
$success      = tm_cs_get($cs, 'key_success_factor', array());
$snapshot     = tm_cs_get($cs, 'snapshot', array());

$testimonial = tm_cs_get($cs, 'testimonial', array());

$testimonial_name     = tm_cs_get($testimonial, 'client_name');
$testimonial_position = tm_cs_get($testimonial, 'client_position');
$testimonial_review   = tm_cs_get($testimonial, 'review_content_');

$testimonial_avatar_source = trim((string) ($testimonial_name ?: $brand_name));
$testimonial_avatar = $testimonial_avatar_source !== '' ? strtoupper(substr($testimonial_avatar_source, 0, 1)) : 'T';

$has_testimonial = !tm_cs_is_empty($testimonial_review);

$brand_name = tm_cs_get($hero, 'brand_name', get_the_title());
$hero_eyebrow = tm_cs_get($hero, 'hero_bread_crumb', 'Tachomind Case Study');
$score_number = tm_cs_percent_number(tm_cs_get($hero, 'visibility_score'), 75);
$core_keywords = tm_cs_lines(tm_cs_get($hero, 'core_keywords'));

$story_steps = tm_cs_get($story, 'stories_steps', array());
$story_cards = array();
for ($i = 1; $i <= 4; $i++) {
    $item = tm_cs_get($story_steps, 'stories_' . $i, array());
    if (!tm_cs_is_empty($item)) {
        $story_cards[$i] = $item;
    }
}
$has_story = !tm_cs_is_empty(tm_cs_get($story, 'story_title')) || !tm_cs_is_empty(tm_cs_get($story, 'story_description')) || !empty($story_cards);

$before_lines = tm_cs_lines(tm_cs_get($before_after, 'before_optimisation_content'));
$after_lines = tm_cs_lines(tm_cs_get($before_after, 'after_optimisation_content'));
$has_compare = !tm_cs_is_empty(tm_cs_get($before_after, 'title_')) || !tm_cs_is_empty(tm_cs_get($before_after, 'description')) || !empty($before_lines) || !empty($after_lines);

$objective_wrap = tm_cs_get($objectives, 'objectives_section', array());
$objective_items = array();
for ($i = 1; $i <= 3; $i++) {
    $item = tm_cs_get($objective_wrap, 'objective_section_' . $i, array());
    if (!tm_cs_is_empty(tm_cs_get($item, 'objective_subheading')) || !tm_cs_is_empty(tm_cs_get($item, 'objective_description_'))) {
        $objective_items[] = $item;
    }
}
$extra_obj = tm_cs_get($objectives, 'objectives_section_2', array());
if (!tm_cs_is_empty(tm_cs_get($extra_obj, 'objective_subheading')) || !tm_cs_is_empty(tm_cs_get($extra_obj, 'objective_description'))) {
    $objective_items[] = array(
        'objective_subheading' => tm_cs_get($extra_obj, 'objective_subheading'),
        'objective_description_' => tm_cs_get($extra_obj, 'objective_description'),
    );
}
$has_objectives = !tm_cs_is_empty(tm_cs_get($objectives, 'objective_title')) || !empty($objective_items);

$tabs = tm_cs_get($blueprint, 'blueprint_tabs', array());
$strategy_steps = array();
for ($i = 1; $i <= 6; $i++) {
    $tab = tm_cs_get($tabs, 'blueprint_tab_' . $i, array());
    if (tm_cs_is_empty($tab)) {
        continue;
    }
    $items = array();
    foreach (array('content_1', 'content_2', 'content_3') as $field) {
        if (!tm_cs_is_empty(tm_cs_get($tab, $field))) {
            $items[] = (string) tm_cs_get($tab, $field);
        }
    }
    if (!tm_cs_is_empty(tm_cs_get($tab, 'tab_title')) || !tm_cs_is_empty(tm_cs_get($tab, 'tab_heading')) || !tm_cs_is_empty(tm_cs_get($tab, 'tab_content')) || !empty($items)) {
        $strategy_steps[] = array(
            'tab'   => (string) tm_cs_get($tab, 'tab_title', 'Step ' . count($strategy_steps) + 1),
            'title' => (string) tm_cs_get($tab, 'tab_heading'),
            'text'  => trim(wp_strip_all_tags((string) tm_cs_get($tab, 'tab_content'))),
            'items' => $items,
        );
    }
}
$has_blueprint = !tm_cs_is_empty(tm_cs_get($blueprint, 'blueprint_title')) || !tm_cs_is_empty(tm_cs_get($blueprint, 'bluprint_description')) || !empty($strategy_steps);

$ranking_wrap = tm_cs_get($ranking, 'ranking_factors', array());
$ranking_items = array();
for ($i = 1; $i <= 5; $i++) {
    $item = tm_cs_get($ranking_wrap, 'ranking_factors_' . $i, array());
    if (!tm_cs_is_empty(tm_cs_get($item, 'ranking_factors_title')) || !tm_cs_is_empty(tm_cs_get($item, 'ranking_factors_content'))) {
        list($rank, $keyword) = tm_cs_rank_and_keyword(tm_cs_get($item, 'ranking_factors_title'), $i);
        $ranking_items[] = array(
            'rank' => $rank,
            'keyword' => $keyword,
            'content' => (string) tm_cs_get($item, 'ranking_factors_content'),
        );
    }
}

$proof_views = array(
    1 => array('field' => 'ranking_report', 'label' => 'Ranking Report'),
    2 => array('field' => 'analytics_overview', 'label' => 'Analytics Overview'),
    3 => array('field' => 'search_console', 'label' => 'Search Console'),
);
$shots = array();
foreach ($proof_views as $i => $meta) {
    $view = tm_cs_get($proof, 'view_' . $i, array());
    $src = tm_cs_media_url(tm_cs_get($view, $meta['field']));
    if ($src !== '') {
        $shots[] = array(
            'src' => $src,
            'caption' => trim(wp_strip_all_tags((string) tm_cs_get($view, 'content'))),
            'label' => $meta['label'],
        );
    }
}
$has_ranking = !tm_cs_is_empty(tm_cs_get($ranking, 'ranking_factor_title')) || !tm_cs_is_empty(tm_cs_get($ranking, 'ranking_factor_description')) || !empty($ranking_items);
$has_gallery = !empty($shots);
$has_proof = $has_ranking || $has_gallery;

$metric_items = array();
for ($i = 1; $i <= 4; $i++) {
    $item = tm_cs_get($organic, 'organic_traffic_' . $i, array());
    if (!tm_cs_is_empty(tm_cs_get($item, 'title_')) || !tm_cs_is_empty(tm_cs_get($item, 'heading')) || !tm_cs_is_empty(tm_cs_get($item, 'content'))) {
        $metric_items[] = $item;
    }
}

// The original ZIP design uses the large blue tile for Organic Traffic
// and the four ACF organic_traffic_1..4 groups as the white cards on the right.
$hero_metric_value = trim((string) tm_cs_get($hero, 'organic_traffic'));
$has_hero_metric = !tm_cs_is_empty($hero_metric_value);
$has_metrics = $has_hero_metric || !empty($metric_items);

$impact_items = array();
for ($i = 1; $i <= 3; $i++) {
    $item = tm_cs_get($beyond, 'beyond_metrics_' . $i, array());
    if (!tm_cs_is_empty(tm_cs_get($item, 'beyond_metrics_title')) || !tm_cs_is_empty(tm_cs_get($item, 'beyond_metrics_description'))) {
        $impact_items[] = $item;
    }
}
$has_impact = !empty($impact_items);

$success_items = array();
$success_wrap = tm_cs_get($success, 'success_factors', array());
for ($i = 1; $i <= 4; $i++) {
    $item = tm_cs_get($success_wrap, 'success_factor_' . $i, array());
    if (!tm_cs_is_empty(tm_cs_get($item, 'success_factor_heading')) || !tm_cs_is_empty(tm_cs_get($item, 'success_factor_content'))) {
        $success_items[] = $item;
    }
}
$has_factors = !empty($success_items);

$snapshot_group = tm_cs_get($snapshot, 'snapshot_group', array());
$snapshot_rows = array(
    'Industry' => tm_cs_get($snapshot_group, 'industry'),
    'Problem'  => tm_cs_get($snapshot_group, 'problem'),
    'Solution' => tm_cs_get($snapshot_group, 'solution'),
    'Timeline' => tm_cs_get($snapshot_group, 'timeline'),
    'Result'   => tm_cs_get($snapshot_group, 'result'),
);
$snapshot_rows = array_filter($snapshot_rows, function($value) { return !tm_cs_is_empty($value); });
$has_snapshot = !tm_cs_is_empty(tm_cs_get($snapshot, 'heading')) || !tm_cs_is_empty(tm_cs_get($snapshot, 'description')) || !empty($snapshot_rows);

$nav_items = array(
    array('id' => 'top', 'label' => 'Hero', 'show' => true),
    array('id' => 'story', 'label' => 'Story', 'show' => $has_story),
    array('id' => 'compare', 'label' => 'Before/After', 'show' => $has_compare),
    array('id' => 'strategy', 'label' => 'Blueprint', 'show' => $has_blueprint),
    array('id' => 'proof', 'label' => 'Proof', 'show' => $has_proof),
    array('id' => 'impact', 'label' => 'Impact', 'show' => $has_impact),
);
$nav_items = array_values(array_filter($nav_items, function($item) { return !empty($item['show']); }));
?>

<style>
:root {
  --navy: #0f172a;
  --navy-2: #111c34;
  --blue: #4264ed;
  --blue-dark: #2846c9;
  --white: #ffffff;
  --ink: #14213d;
  --text: #334155;
  --muted: #667085;
  --line: rgba(15, 23, 42, 0.12);
  --soft: #f5f8ff;
  --soft-2: #edf3ff;
  --green: #17a34a;
  --amber: #f59e0b;
  --shadow: 0 28px 90px rgba(15, 23, 42, 0.14);
  --shadow-soft: 0 16px 48px rgba(15, 23, 42, 0.10);
  --radius-xl: 34px;
  --radius-lg: 24px;
  --radius-md: 16px;
  --shell: 1180px;
  --rail-safe-space: 210px;
  --content-edge-gap: 44px;
}


* {
  box-sizing: border-box;
}

html {
  scroll-behavior: smooth;
}

body {
  margin: 0;
  font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
  background: var(--white);
  color: var(--text);
  overflow-x: hidden;
}

body.menu-open {
  overflow: hidden;
}

img {
  max-width: 100%;
  display: block;
}

a {
  color: inherit;
  text-decoration: none;
}

button,
input {
  font: inherit;
}

.section {
  position: relative;
  padding: 112px 0;
}

.section-shell {
  width: min(var(--shell), calc(100% - 44px));
  margin: 0 auto;
}

.section-shell.compact {
  width: min(1080px, calc(100% - 44px));
}

/*
 * Desktop body/content width fix:
 * The chapter sidebar expands up to 150px on hover. On medium desktop screens,
 * centered content can start too close to the left edge. This gutter keeps the
 * main body sections clear of the sidebar without changing the banner/hero.
 */
@media (min-width: 1241px) {
  .case-study-main .section-shell {
    --case-study-left-gutter: max(var(--rail-safe-space), calc((100vw - var(--shell)) / 2));
    width: min(var(--shell), calc(100vw - var(--case-study-left-gutter) - var(--content-edge-gap)));
    margin-left: var(--case-study-left-gutter);
    margin-right: auto;
  }

  .case-study-main .section-shell.compact {
    width: min(1080px, calc(100vw - var(--case-study-left-gutter) - var(--content-edge-gap)));
  }
}

.scroll-meter {
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 5px;
  z-index: 9999;
  pointer-events: none;
}

.scroll-meter span {
  display: block;
  width: 0;
  height: 100%;
  background: linear-gradient(90deg, var(--blue), #7c91ff);
  box-shadow: 0 0 20px rgba(66, 100, 237, 0.46);
}

.chapter-rail {
  position: fixed;
  left: 24px;
  top: 50%;
  transform: translateY(-50%);
  z-index: 900;
  display: grid;
  gap: 10px;
  padding: 12px;
  border: 1px solid rgba(15, 23, 42, 0.10);
  border-radius: 22px;
  background: rgba(255, 255, 255, 0.78);
  backdrop-filter: blur(18px);
  box-shadow: 0 18px 50px rgba(15, 23, 42, 0.10);

  /* Hide by default. JS shows it only after the banner and stops it before CTA/footer. */
  opacity: 0;
  visibility: hidden;
  pointer-events: none;
  transition: opacity 0.22s ease, visibility 0.22s ease;
}

.chapter-rail.is-visible {
  opacity: 1;
  visibility: visible;
  pointer-events: auto;
}

.chapter-rail a {
  display: grid;
  grid-template-columns: 32px 0fr;
  align-items: center;
  gap: 10px;
  min-height: 38px;
  width: 44px;
  overflow: hidden;
  border-radius: 16px;
  color: #64748b;
  font-size: 13px;
  font-weight: 800;
  transition: width 0.25s ease, color 0.25s ease, background 0.25s ease, grid-template-columns 0.25s ease;
}

.chapter-rail a span {
  width: 32px;
  height: 32px;
  display: grid;
  place-items: center;
  border-radius: 12px;
  color: var(--navy);
  background: #f1f5ff;
  font-size: 11px;
}

.chapter-rail a:hover,
.chapter-rail a.active {
  width: 150px;
  grid-template-columns: 32px 1fr;
  padding-right: 12px;
  color: var(--blue);
  background: rgba(66, 100, 237, 0.08);
}

.chapter-rail a.active span {
  color: #fff;
  background: var(--blue);
}

.mobile-menu-btn {
  position: fixed;
  top: 18px;
  right: 18px;
  z-index: 1001;
  width: 48px;
  height: 48px;
  display: none;
  border: 0;
  border-radius: 50%;
  background: var(--navy);
  box-shadow: var(--shadow-soft);
  cursor: pointer;
}

.mobile-menu-btn span {
  display: block;
  width: 20px;
  height: 2px;
  margin: 4px auto;
  border-radius: 99px;
  background: #fff;
  transition: 0.25s ease;
}

.menu-open .mobile-menu-btn span:nth-child(1) {
  transform: translateY(6px) rotate(45deg);
}

.menu-open .mobile-menu-btn span:nth-child(2) {
  opacity: 0;
}

.menu-open .mobile-menu-btn span:nth-child(3) {
  transform: translateY(-6px) rotate(-45deg);
}

.mobile-drawer {
  position: fixed;
  top: 76px;
  right: 18px;
  z-index: 1000;
  width: min(320px, calc(100% - 36px));
  display: none;
  padding: 12px;
  border-radius: 24px;
  background: rgba(255, 255, 255, 0.96);
  border: 1px solid var(--line);
  box-shadow: var(--shadow);
  backdrop-filter: blur(20px);
}

.mobile-drawer a {
  display: block;
  padding: 14px 16px;
  border-radius: 16px;
  font-weight: 800;
  color: var(--navy);
}

.mobile-drawer a:hover {
  background: rgba(66, 100, 237, 0.08);
  color: var(--blue);
}

.menu-open .mobile-drawer {
  display: block;
}

.editorial-hero {
  min-height: 100vh;
  position: relative;
  display: grid;
  align-items: center;
  overflow: hidden;
  padding: 56px 0 0;
  background:
    radial-gradient(circle at 78% 16%, rgba(66, 100, 237, 0.17), transparent 28%),
    linear-gradient(135deg, #ffffff 0%, #f4f7ff 58%, #eef4ff 100%);
}

.hero-pattern {
  position: absolute;
  inset: 0;
  background-image:
    linear-gradient(rgba(15, 23, 42, 0.05) 1px, transparent 1px),
    linear-gradient(90deg, rgba(15, 23, 42, 0.05) 1px, transparent 1px);
  background-size: 46px 46px;
  mask-image: linear-gradient(90deg, rgba(0, 0, 0, 0.5), transparent 76%);
}

.shape {
  position: absolute;
  pointer-events: none;
  filter: blur(2px);
}

.shape-one {
  width: 420px;
  height: 420px;
  right: -140px;
  top: 110px;
  border-radius: 90px;
  transform: rotate(22deg);
  background: linear-gradient(135deg, rgba(66, 100, 237, 0.18), rgba(15, 23, 42, 0.06));
}

.shape-two {
  width: 280px;
  height: 280px;
  left: 10%;
  bottom: 8%;
  border-radius: 50%;
  background: rgba(66, 100, 237, 0.10);
}

.hero-shell {
  position: relative;
  z-index: 2;
  width: min(1220px, calc(100% - 44px));
  margin: 0 auto;
  display: grid;
  grid-template-columns: 1.02fr 0.98fr;
  grid-template-areas:
    "brand stage"
    "copy stage";
  align-items: center;
  gap: 28px 60px;
  padding: 48px 0 120px;
}

.brand-lockup {
  grid-area: brand;
  display: inline-flex;
  align-items: center;
  gap: 12px;
  width: max-content;
  padding: 9px 14px 9px 9px;
  border: 1px solid var(--line);
  border-radius: 999px;
  background: rgba(255, 255, 255, 0.72);
  box-shadow: 0 14px 42px rgba(15, 23, 42, 0.08);
  backdrop-filter: blur(18px);
  color: var(--navy);
  font-weight: 900;
}

.brand-logo {
  width: 36px;
  height: 36px;
  border-radius: 13px;
  display: grid;
  place-items: center;
  color: #fff;
  background: var(--blue);
}

.hero-copy {
  grid-area: copy;
  max-width: 650px;
}

.eyebrow,
.section-kicker {
  margin: 0 0 18px;
  display: inline-flex;
  align-items: center;
  gap: 10px;
  color: var(--blue);
  font-size: 13px;
  font-weight: 950;
  letter-spacing: 0.12em;
  text-transform: uppercase;
}

.eyebrow::before,
.section-kicker::before {
  content: "";
  width: 34px;
  height: 2px;
  border-radius: 999px;
  background: var(--blue);
}

.hero-copy h1,
.split-heading h2,
.compare-copy h2,
.objective-title h2,
.gallery-header h2,
.impact-sticky h2,
.snapshot-left h2,
.cta-card h2 {
  margin: 0;
  color: var(--navy);
  letter-spacing: -0.055em;
  line-height: 0.96;
}

.hero-copy h1 {
  font-size: clamp(44px, 5.8vw, 82px);
}

.hero-copy h1 span {
  display: block;
  color: var(--blue);
}

.hero-text {
  margin: 28px 0 0;
  max-width: 620px;
  font-size: 19px;
  line-height: 1.78;
  color: #43536b;
}

.hero-actions {
  display: flex;
  align-items: center;
  gap: 14px;
  flex-wrap: wrap;
  margin-top: 34px;
}

.btn {
  position: relative;
  min-height: 54px;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  padding: 0 24px;
  border-radius: 999px;
  font-size: 15px;
  font-weight: 950;
  transition: transform 0.24s ease, box-shadow 0.24s ease, background 0.24s ease;
  overflow: hidden;
}

.btn::after {
  content: "";
  position: absolute;
  inset: 0;
  background: linear-gradient(120deg, transparent, rgba(255, 255, 255, 0.35), transparent);
  transform: translateX(-120%);
  transition: transform 0.5s ease;
}

.btn:hover {
  transform: translateY(-3px);
}

.btn:hover::after {
  transform: translateX(120%);
}

.btn.primary {
  color: #fff;
  background: linear-gradient(135deg, var(--blue), var(--blue-dark));
  box-shadow: 0 18px 42px rgba(66, 100, 237, 0.28);
}

.btn.secondary {
  color: var(--navy);
  background: #fff;
  border: 1px solid var(--line);
  box-shadow: 0 14px 36px rgba(15, 23, 42, 0.08);
}

.hero-stage {
  grid-area: stage;
  min-height: 560px;
  position: relative;
  perspective: 900px;
}

.diagonal-card {
  position: absolute;
  inset: 58px 68px 70px 28px;
  padding: 34px;
  border-radius: 38px;
  color: #fff;
  background:
    radial-gradient(circle at 18% 12%, rgba(255, 255, 255, 0.18), transparent 34%),
    linear-gradient(145deg, var(--navy), #18305d 48%, var(--blue));
  box-shadow: 0 44px 120px rgba(15, 23, 42, 0.27);
  transform: rotate(-4deg) rotateY(-8deg);
  overflow: hidden;
}

.diagonal-card::before {
  content: "";
  position: absolute;
  inset: 18px;
  border: 1px solid rgba(255, 255, 255, 0.13);
  border-radius: 28px;
}

.diagonal-card::after {
  content: "";
  position: absolute;
  width: 260px;
  height: 260px;
  right: -100px;
  bottom: -90px;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.10);
}

.card-head {
  position: relative;
  z-index: 2;
  display: flex;
  align-items: flex-start;
  justify-content: space-between;
  gap: 18px;
}

.card-head span {
  opacity: 0.72;
  font-weight: 700;
}

.card-head strong {
  padding: 9px 12px;
  border-radius: 999px;
  background: rgba(255, 255, 255, 0.14);
  font-size: 13px;
}

.radial-score {
  position: relative;
  z-index: 2;
  min-height: 280px;
  display: grid;
  place-items: center;
  margin-top: 26px;
}

.radial-score svg {
  position: absolute;
  width: 230px;
  height: 230px;
  transform: rotate(-90deg);
}

.radial-score circle {
  fill: none;
  stroke: rgba(255, 255, 255, 0.15);
  stroke-width: 13;
}

.radial-score .progress-ring {
  stroke: #ffffff;
  stroke-linecap: round;
  stroke-dasharray: 415;
  stroke-dashoffset: 415;
  transition: stroke-dashoffset 1.4s ease;
}

.radial-score div {
  text-align: center;
}

.radial-score strong {
  display: block;
  font-size: 68px;
  letter-spacing: -0.06em;
  line-height: 0.9;
}

.radial-score span {
  display: block;
  margin-top: 12px;
  color: rgba(255, 255, 255, 0.75);
  font-weight: 800;
}

.mini-line {
  position: relative;
  z-index: 2;
  display: flex;
  align-items: flex-end;
  gap: 10px;
  height: 90px;
  padding: 16px;
  border-radius: 22px;
  background: rgba(255, 255, 255, 0.10);
}

.mini-line span {
  flex: 1;
  border-radius: 999px 999px 6px 6px;
  background: rgba(255, 255, 255, 0.72);
  animation: barRise 1.8s ease both;
}

.mini-line span:nth-child(1) { height: 22%; }
.mini-line span:nth-child(2) { height: 34%; animation-delay: 0.05s; }
.mini-line span:nth-child(3) { height: 28%; animation-delay: 0.1s; }
.mini-line span:nth-child(4) { height: 42%; animation-delay: 0.15s; }
.mini-line span:nth-child(5) { height: 48%; animation-delay: 0.2s; }
.mini-line span:nth-child(6) { height: 55%; animation-delay: 0.25s; }
.mini-line span:nth-child(7) { height: 62%; animation-delay: 0.3s; }
.mini-line span:nth-child(8) { height: 72%; animation-delay: 0.35s; }
.mini-line span:nth-child(9) { height: 82%; animation-delay: 0.4s; }

@keyframes barRise {
  from { transform: scaleY(0); transform-origin: bottom; }
  to { transform: scaleY(1); transform-origin: bottom; }
}

.floating-ticket {
  position: absolute;
  z-index: 5;
  min-width: 170px;
  padding: 18px 20px;
  border: 1px solid rgba(255, 255, 255, 0.84);
  border-radius: 22px;
  background: rgba(255, 255, 255, 0.84);
  box-shadow: var(--shadow-soft);
  backdrop-filter: blur(18px);
  animation: floatCard 4.4s ease-in-out infinite;
}

.floating-ticket small {
  display: block;
  color: var(--muted);
  font-weight: 850;
}

.floating-ticket strong {
  display: block;
  margin-top: 5px;
  color: var(--navy);
  font-size: 30px;
  line-height: 1;
  letter-spacing: -0.04em;
}

.ticket-one { top: 36px; left: 0; }
.ticket-two { right: 0; top: 170px; animation-delay: 0.9s; }
.ticket-three { left: 54px; bottom: 12px; animation-delay: 1.5s; }

@keyframes floatCard {
  0%, 100% { transform: translateY(0) rotate(0deg); }
  50% { transform: translateY(-14px) rotate(1deg); }
}

.keyword-marquee {
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 4;
  overflow: hidden;
  border-top: 1px solid rgba(15, 23, 42, 0.10);
  border-bottom: 1px solid rgba(15, 23, 42, 0.10);
  background: rgba(255, 255, 255, 0.78);
  backdrop-filter: blur(16px);
}

.marquee-track {
  display: flex;
  width: max-content;
  animation: marquee 34s linear infinite;
}

.marquee-track span {
  padding: 18px 34px;
  color: var(--navy);
  font-weight: 950;
  white-space: nowrap;
}

.marquee-track span:nth-child(odd) {
  color: var(--blue);
}

@keyframes marquee {
  to { transform: translateX(-50%); }
}

.split-heading {
  display: grid;
  grid-template-columns: minmax(0, 0.95fr) minmax(320px, 0.85fr);
  gap: 58px;
  align-items: end;
  margin-bottom: 46px;
}

.split-heading h2,
.compare-copy h2,
.objective-title h2,
.gallery-header h2,
.impact-sticky h2,
.snapshot-left h2,
.cta-card h2 {
  font-size: clamp(38px, 5vw, 68px);
}

.split-heading p,
.compare-copy p,
.snapshot-left p,
.cta-card p {
  margin: 0;
  color: var(--muted);
  font-size: 18px;
  line-height: 1.75;
}

.story-section {
  background: #fff;
}

.story-reel {
  display: grid;
  grid-template-columns: repeat(4, minmax(250px, 1fr));
  gap: 18px;
  overflow-x: auto;
  scroll-snap-type: x mandatory;
  padding: 2px 2px 18px;
}

.story-reel::-webkit-scrollbar {
  height: 8px;
}

.story-reel::-webkit-scrollbar-thumb {
  background: rgba(66, 100, 237, 0.24);
  border-radius: 999px;
}

.reel-card {
  min-height: 330px;
  position: relative;
  scroll-snap-align: start;
  padding: 28px;
  border: 1px solid var(--line);
  border-radius: 28px;
  background:
    linear-gradient(180deg, #fff, #f8faff);
  box-shadow: 0 12px 32px rgba(15, 23, 42, 0.06);
  overflow: hidden;
  transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
}

.reel-card::after {
  content: "";
  position: absolute;
  width: 180px;
  height: 180px;
  right: -84px;
  top: -84px;
  border-radius: 50%;
  background: rgba(66, 100, 237, 0.08);
}

.reel-card:hover {
  transform: translateY(-8px);
  border-color: rgba(66, 100, 237, 0.28);
  box-shadow: var(--shadow-soft);
}

.reel-number {
  display: inline-grid;
  place-items: center;
  width: 52px;
  height: 52px;
  border-radius: 18px;
  color: #fff;
  background: var(--navy);
  font-weight: 950;
}

.reel-card h3 {
  margin: 70px 0 14px;
  color: var(--navy);
  font-size: 25px;
  letter-spacing: -0.03em;
}

.reel-card p {
  margin: 0;
  color: #5d6b82;
  line-height: 1.75;
}

.comparison-section {
  background:
    radial-gradient(circle at 10% 20%, rgba(66, 100, 237, 0.12), transparent 30%),
    linear-gradient(180deg, var(--soft), #ffffff);
}

.compare-layout {
  display: grid;
  grid-template-columns: 0.82fr 1.18fr;
  gap: 50px;
  align-items: center;
}

.compare-bullets {
  display: grid;
  gap: 12px;
  margin-top: 28px;
}

.compare-bullets span {
  display: flex;
  align-items: center;
  gap: 12px;
  color: var(--navy);
  font-weight: 850;
}

.compare-bullets span::before {
  content: "";
  width: 9px;
  height: 9px;
  border-radius: 50%;
  background: var(--blue);
  box-shadow: 0 0 0 8px rgba(66, 100, 237, 0.10);
}

/* Before/After slider title alignment fix: before title stays on left, after title stays on right, and the shared word is split by the slider */
.before-after {
  --split: 48%;
  min-height: 560px;
  position: relative;
  border-radius: 34px;
  overflow: hidden;
  border: 1px solid rgba(15, 23, 42, 0.10);
  box-shadow: var(--shadow);
  background: var(--navy);
  user-select: none;
}

.ba-panel {
  position: absolute;
  inset: 0;
  overflow: hidden;
  padding: 42px;
}

.ba-after {
  z-index: 1;
  color: #fff;
  background:
    linear-gradient(135deg, rgba(66, 100, 237, 0.86), rgba(15, 23, 42, 0.95)),
    repeating-linear-gradient(90deg, transparent 0 44px, rgba(255, 255, 255, 0.06) 44px 45px);
}

.ba-before {
  z-index: 2;
  width: 100%;
  color: var(--navy);
  background:
    linear-gradient(135deg, #ffffff 0%, #f5f7ff 100%),
    repeating-linear-gradient(90deg, transparent 0 44px, rgba(15, 23, 42, 0.05) 44px 45px);
  clip-path: inset(0 calc(100% - var(--split)) 0 0);
}

.ba-title {
  position: absolute;
  top: clamp(119px, 19%, 320px)!important;
  left: clamp(34px, 7vw, 76px);
  right: clamp(34px, 7vw, 76px);
  margin: 0;
  font-size: clamp(34px, 5.4vw, 58px);
  font-weight: 900;
  line-height: 0.95;
  letter-spacing: -0.06em;
  z-index: 3;
}

.ba-state-word,
.ba-fixed-word {
  display: block;
  white-space: nowrap;
}

.ba-title-before .ba-state-word {
  text-align: left;
}

.ba-title-after .ba-state-word,
.ba-title-before .ba-fixed-word,
.ba-title-after .ba-fixed-word {
  text-align: right;
}

.ba-list {
  position: absolute;
  bottom: clamp(34px, 7vw, 58px);
  margin: 0;
  padding: 0;
  display: grid;
  gap: 13px;
  list-style: none;
}

.ba-before .ba-list {
  left: clamp(34px, 7vw, 76px);
  text-align: left;
}

.ba-after .ba-list {
  right: clamp(34px, 7vw, 76px);
  text-align: right;
}

.ba-list li {
  position: relative;
  display: block;
  font-weight: 850;
}

.ba-before .ba-list li {
  padding-left: 28px;
}

.ba-after .ba-list li {
  padding-right: 28px;
}

.ba-before .ba-list li::before,
.ba-after .ba-list li::after {
  content: "";
  position: absolute;
  top: 0.6em;
  width: 10px;
  height: 10px;
  border-radius: 50%;
  background: currentColor;
  opacity: 0.45;
}

.ba-before .ba-list li::before {
  left: 0;
}

.ba-after .ba-list li::before {
  content: none;
}

.ba-after .ba-list li::after {
  right: 0;
}

.ba-range {
  position: absolute;
  inset: 0;
  z-index: 4;
  width: 100%;
  height: 100%;
  opacity: 0;
  cursor: ew-resize;
}

.ba-handle {
  position: absolute;
  z-index: 3;
  left: var(--split);
  top: 0;
  bottom: 0;
  width: 2px;
  background: #fff;
  box-shadow: 0 0 0 1px rgba(15, 23, 42, 0.08), 0 0 26px rgba(255, 255, 255, 0.70);
  transform: translateX(-1px);
}

.ba-handle span {
  position: absolute;
  left: 50%;
  top: 50%;
  width: 58px;
  height: 58px;
  transform: translate(-50%, -50%);
  border-radius: 50%;
  background: #fff;
  box-shadow: 0 18px 48px rgba(15, 23, 42, 0.24);
}

.ba-handle span::before,
.ba-handle span::after {
  content: "";
  position: absolute;
  top: 50%;
  width: 10px;
  height: 10px;
  border-top: 3px solid var(--blue);
  border-left: 3px solid var(--blue);
}

.ba-handle span::before {
  left: 18px;
  transform: translateY(-50%) rotate(-45deg);
}

.ba-handle span::after {
  right: 18px;
  transform: translateY(-50%) rotate(135deg);
}

.objectives-section {
  background: #fff;
}

.objective-board {
  display: grid;
  grid-template-columns: 0.85fr 1.15fr;
  gap: 36px;
  align-items: stretch;
  padding: 24px;
  border-radius: 38px;
  color: #fff;
  background:
    radial-gradient(circle at 14% 18%, rgba(66, 100, 237, 0.44), transparent 30%),
    linear-gradient(135deg, var(--navy), #172b53);
  box-shadow: var(--shadow);
  overflow: hidden;
}

.objective-title {
  padding: 30px;
  border-radius: 28px;
  background: rgba(255, 255, 255, 0.08);
  border: 1px solid rgba(255, 255, 255, 0.12);
}

.objective-title h2 {
  color: #fff;
}

.objective-grid {
  display: grid;
  gap: 16px;
}

.objective-grid article {
  padding: 26px;
  border-radius: 26px;
  background: rgba(255, 255, 255, 0.94);
  color: var(--navy);
}

.objective-grid article span {
  display: inline-grid;
  place-items: center;
  width: 38px;
  height: 38px;
  border-radius: 14px;
  color: #fff;
  background: var(--blue);
  font-weight: 950;
}

.objective-grid h3 {
  margin: 18px 0 10px;
  font-size: 23px;
  letter-spacing: -0.03em;
}

.objective-grid p {
  margin: 0;
  color: #5b6680;
  line-height: 1.7;
}

.blueprint-section {
  background:
    linear-gradient(180deg, #f6f8ff, #ffffff 70%);
}

.blueprint {
  display: grid;
  grid-template-columns: 320px minmax(0, 1fr);
  gap: 22px;
  padding: 22px;
  border-radius: 38px;
  border: 1px solid rgba(15, 23, 42, 0.10);
  background: rgba(255, 255, 255, 0.76);
  box-shadow: var(--shadow-soft);
  backdrop-filter: blur(18px);
}

.blueprint-tabs {
  display: grid;
  gap: 10px;
}

.blueprint-tabs button {
  min-height: 58px;
  text-align: left;
  border: 0;
  border-radius: 18px;
  padding: 0 18px;
  color: var(--navy);
  background: #f2f5ff;
  font-weight: 950;
  cursor: pointer;
  transition: transform 0.2s ease, background 0.2s ease, color 0.2s ease;
}

.blueprint-tabs button:hover {
  transform: translateX(4px);
}

.blueprint-tabs button.active {
  color: #fff;
  background: var(--blue);
  box-shadow: 0 18px 36px rgba(66, 100, 237, 0.22);
}

.blueprint-display {
  min-height: 520px;
  position: relative;
  overflow: hidden;
  display: grid;
  align-items: center;
  border-radius: 28px;
  padding: 48px;
  color: #fff;
  background:
    radial-gradient(circle at 72% 20%, rgba(255, 255, 255, 0.18), transparent 28%),
    linear-gradient(135deg, var(--navy), #17356c 65%, var(--blue));
}

.blueprint-orb {
  position: absolute;
  right: -160px;
  top: 50%;
  width: 520px;
  height: 520px;
  transform: translateY(-50%);
  border-radius: 50%;
  border: 1px solid rgba(255, 255, 255, 0.14);
}

.blueprint-orb span {
  position: absolute;
  inset: 56px;
  border-radius: 50%;
  border: 1px solid rgba(255, 255, 255, 0.14);
}

.blueprint-orb span:nth-child(2) { inset: 120px; }
.blueprint-orb span:nth-child(3) { inset: 184px; background: rgba(255,255,255,0.08); }

.blueprint-content {
  position: relative;
  z-index: 2;
  max-width: 620px;
}

.step-count {
  margin: 0 0 18px;
  color: rgba(255, 255, 255, 0.74);
  font-size: 13px;
  font-weight: 950;
  letter-spacing: 0.14em;
  text-transform: uppercase;
}

.blueprint-content h3 {
  margin: 0;
  font-size: clamp(34px, 5vw, 64px);
  line-height: 0.96;
  letter-spacing: -0.055em;
}

.blueprint-content p {
  margin: 22px 0 0;
  color: rgba(255, 255, 255, 0.78);
  font-size: 18px;
  line-height: 1.75;
}

.blueprint-content ul {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 12px;
  margin: 30px 0 0;
  padding: 0;
  list-style: none;
}

.blueprint-content li {
  min-height: 88px;
  display: flex;
  align-items: flex-end;
  padding: 16px;
  border-radius: 18px;
  background: rgba(255, 255, 255, 0.12);
  color: #fff;
  font-weight: 850;
}

.proof-section {
  background: #fff;
}

.proof-grid {
  display: grid;
  grid-template-columns: 0.68fr 1.32fr;
  gap: 38px;
  align-items: start;
  margin-bottom: 76px;
}

.proof-copy {
  position: sticky;
  top: 40px;
}

.proof-copy h2 {
  margin: 0;
  color: var(--navy);
  font-size: clamp(36px, 4.2vw, 58px);
  line-height: 1;
  letter-spacing: -0.05em;
}

.proof-copy p {
  margin: 22px 0 0;
  color: var(--muted);
  font-size: 17px;
  line-height: 1.72;
}

.keyword-wall {
  display: grid;
  grid-template-columns: repeat(2, minmax(0, 1fr));
  gap: 16px;
}

.keyword-wall article {
  position: relative;
  min-height: 190px;
  padding: 26px;
  border-radius: 26px;
  background: linear-gradient(180deg, #fff, #f7faff);
  border: 1px solid rgba(15, 23, 42, 0.10);
  box-shadow: 0 12px 34px rgba(15, 23, 42, 0.06);
  overflow: hidden;
}

.keyword-wall article:nth-child(5) {
  grid-column: 1 / -1;
}

.keyword-wall article::after {
  content: "";
  position: absolute;
  width: 160px;
  height: 160px;
  right: -75px;
  bottom: -75px;
  border-radius: 50%;
  background: rgba(66, 100, 237, 0.08);
}

.rank {
  display: inline-grid;
  place-items: center;
  width: 64px;
  height: 50px;
  border-radius: 18px;
  color: var(--green);
  background: rgba(23, 163, 74, 0.12);
  font-size: 25px;
  font-weight: 950;
}

.keyword-wall h3 {
  margin: 24px 0 10px;
  color: var(--navy);
  font-size: 22px;
  letter-spacing: -0.03em;
}

.keyword-wall p {
  margin: 0;
  color: var(--muted);
  font-weight: 800;
}

.analytics-gallery {
  border: 1px solid rgba(15, 23, 42, 0.10);
  border-radius: 36px;
  background: #f6f8ff;
  box-shadow: var(--shadow-soft);
  padding: 22px;
}

.gallery-header {
  display: flex;
  justify-content: space-between;
  gap: 24px;
  align-items: end;
  padding: 16px 16px 24px;
}

.gallery-header h2 {
  font-size: clamp(32px, 4vw, 52px);
}

.gallery-controls {
  display: flex;
  gap: 10px;
  flex-wrap: wrap;
  justify-content: flex-end;
}

.gallery-controls button,
.shot-nav {
  border: 0;
  cursor: pointer;
  font-weight: 950;
  transition: 0.24s ease;
}

.gallery-controls button {
  min-height: 44px;
  padding: 0 15px;
  border-radius: 999px;
  color: var(--navy);
  background: #fff;
  box-shadow: 0 8px 22px rgba(15, 23, 42, 0.07);
}

.gallery-controls button.active,
.gallery-controls button:hover {
  color: #fff;
  background: var(--blue);
}

.screenshot-stage {
  position: relative;
  overflow: hidden;
  border-radius: 28px;
  background: #fff;
}

.screenshot-stage figure {
  margin: 0;
}

.screenshot-stage img {
  width: 100%;
  max-height: 780px;
  object-fit: cover;
  object-position: top;
  border-radius: 28px 28px 0 0;
  transition: opacity 0.25s ease, transform 0.35s ease;
}

.screenshot-stage img.switching {
  opacity: 0;
  transform: scale(0.985);
}

.screenshot-stage figcaption {
  padding: 18px 22px 22px;
  color: var(--muted);
  line-height: 1.6;
  font-weight: 750;
}

.shot-nav {
  position: absolute;
  top: 50%;
  z-index: 3;
  width: 48px;
  height: 48px;
  border-radius: 50%;
  color: var(--navy);
  background: rgba(255, 255, 255, 0.92);
  box-shadow: var(--shadow-soft);
  font-size: 34px;
  transform: translateY(-50%);
}

.shot-nav:hover {
  color: #fff;
  background: var(--blue);
}

.shot-prev { left: 18px; }
.shot-next { right: 18px; }

.metrics-section {
  background:
    radial-gradient(circle at 90% 12%, rgba(66, 100, 237, 0.12), transparent 32%),
    var(--soft);
}

.metric-mosaic {
  display: grid;
  grid-template-columns: 1.2fr repeat(2, 1fr);
  gap: 18px;
}

.metric-mosaic article {
  min-height: 210px;
  display: flex;
  justify-content: flex-end;
  flex-direction: column;
  padding: 28px;
  border-radius: 28px;
  background: #fff;
  border: 1px solid rgba(15, 23, 42, 0.10);
  box-shadow: 0 12px 32px rgba(15, 23, 42, 0.06);
}

.metric-mosaic .big-metric {
  grid-row: span 2;
  min-height: 438px;
  color: #fff;
  background:
    radial-gradient(circle at 28% 10%, rgba(255, 255, 255, 0.20), transparent 34%),
    linear-gradient(135deg, var(--blue), var(--navy));
}

.metric-mosaic span {
  color: inherit;
  opacity: 0.72;
  font-size: 13px;
  font-weight: 950;
  letter-spacing: 0.1em;
  text-transform: uppercase;
}

.metric-mosaic strong {
  display: block;
  margin-top: 14px;
  color: var(--navy);
  font-size: clamp(34px, 5vw, 64px);
  line-height: 0.95;
  letter-spacing: -0.055em;
}

.metric-mosaic .big-metric strong {
  color: #fff;
  font-size: clamp(82px, 11vw, 146px);
}

.metric-mosaic p {
  margin: 16px 0 0;
  color: var(--muted);
  line-height: 1.65;
}

.metric-mosaic .big-metric p {
  color: rgba(255, 255, 255, 0.78);
}

.impact-section {
  background: #fff;
}

.impact-layout {
  display: grid;
  grid-template-columns: 0.85fr 1.15fr;
  gap: 70px;
  align-items: start;
}

.impact-sticky {
  position: sticky;
  top: 60px;
}

.impact-number {
  margin-top: 38px;
  padding: 26px;
  border-radius: 28px;
  color: #fff;
  background: var(--navy);
  box-shadow: var(--shadow-soft);
}

.impact-number strong {
  display: block;
  font-size: 90px;
  line-height: 0.86;
  letter-spacing: -0.06em;
}

.impact-number span {
  display: block;
  margin-top: 14px;
  color: rgba(255, 255, 255, 0.72);
  font-weight: 850;
}

.accordion {
  display: grid;
  gap: 16px;
}

.accordion-item {
  border: 1px solid rgba(15, 23, 42, 0.10);
  border-radius: 26px;
  background: #fff;
  box-shadow: 0 12px 34px rgba(15, 23, 42, 0.06);
  overflow: hidden;
}

.accordion-item button {
  width: 100%;
  min-height: 86px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 18px;
  padding: 24px 28px;
  border: 0;
  background: transparent;
  color: var(--navy);
  font-size: 23px;
  font-weight: 950;
  letter-spacing: -0.03em;
  text-align: left;
  cursor: pointer;
}

.accordion-item button::after {
  content: "+";
  flex: 0 0 auto;
  width: 42px;
  height: 42px;
  display: grid;
  place-items: center;
  border-radius: 50%;
  color: #fff;
  background: var(--blue);
  transition: transform 0.24s ease;
}

.accordion-item.open button::after {
  content: "−";
  transform: rotate(180deg);
}

.accordion-panel {
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.3s ease;
}

.accordion-panel p {
  margin: 0;
  padding: 0 28px 28px;
  color: var(--muted);
  line-height: 1.75;
  font-size: 17px;
}

.factors-section {
  background: linear-gradient(180deg, #f6f8ff 0%, #ffffff 100%);
}

.factor-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 18px;
}

.factor-card {
  min-height: 320px;
  position: relative;
  padding: 28px;
  border-radius: 30px;
  border: 1px solid rgba(15, 23, 42, 0.10);
  background: #fff;
  box-shadow: 0 14px 38px rgba(15, 23, 42, 0.07);
  overflow: hidden;
}

.factor-card::before {
  content: "";
  position: absolute;
  left: 28px;
  right: 28px;
  top: 0;
  height: 5px;
  border-radius: 0 0 999px 999px;
  background: var(--blue);
}

.factor-icon {
  width: 58px;
  height: 58px;
  display: grid;
  place-items: center;
  border-radius: 20px;
  color: #fff;
  background: var(--navy);
  font-size: 25px;
}

.factor-card h3 {
  margin: 70px 0 14px;
  color: var(--navy);
  font-size: 24px;
  line-height: 1.1;
  letter-spacing: -0.04em;
}

.factor-card p {
  margin: 0;
  color: var(--muted);
  line-height: 1.7;
}

.snapshot-section {
  background: #fff;
}

.snapshot-card {
  display: grid;
  grid-template-columns: 0.85fr 1.15fr;
  gap: 36px;
  align-items: center;
  padding: 34px;
  border-radius: 38px;
  background:
    radial-gradient(circle at 8% 8%, rgba(66, 100, 237, 0.12), transparent 28%),
    #f7f9ff;
  border: 1px solid rgba(15, 23, 42, 0.10);
  box-shadow: var(--shadow-soft);
}

.snapshot-table {
  display: grid;
  overflow: hidden;
  border-radius: 26px;
  border: 1px solid rgba(15, 23, 42, 0.10);
  background: #fff;
}

.snapshot-table div {
  display: grid;
  grid-template-columns: 0.45fr 1fr;
  gap: 16px;
  padding: 18px 20px;
  border-bottom: 1px solid rgba(15, 23, 42, 0.08);
}

.snapshot-table div:last-child {
  border-bottom: 0;
}

.snapshot-table span {
  color: var(--muted);
  font-weight: 850;
}

.snapshot-table strong {
  color: var(--navy);
  line-height: 1.5;
}

.service-cloud {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 12px;
  margin-top: 34px;
}

.service-cloud span {
  display: inline-flex;
  align-items: center;
  min-height: 48px;
  padding: 0 18px;
  border-radius: 999px;
  color: var(--navy);
  background: #fff;
  border: 1px solid rgba(15, 23, 42, 0.10);
  box-shadow: 0 10px 24px rgba(15, 23, 42, 0.06);
  font-weight: 900;
}

.cta-section {
  position: relative;
  padding: 80px 0;
  overflow: hidden;
  background: var(--navy);
}

.cta-bg {
  position: absolute;
  inset: 0;
  background:
    radial-gradient(circle at 18% 18%, rgba(66, 100, 237, 0.38), transparent 30%),
    radial-gradient(circle at 88% 80%, rgba(255, 255, 255, 0.12), transparent 28%);
}

.cta-card {
  position: relative;
  z-index: 2;
  text-align: center;
  max-width: 920px;
  color: #fff;
}

.cta-card h2 {
  color: #fff;
}

.cta-card p {
  max-width: 620px;
  margin: 22px auto 30px;
  color: rgba(255, 255, 255, 0.76);
}

.cta-card .eyebrow {
  color: #fff;
}

.cta-card .eyebrow::before {
  background: #fff;
}

.reveal {
  opacity: 0;
  transform: translateY(24px);
  transition: opacity 0.7s ease, transform 0.7s ease;
}

.reveal.visible {
  opacity: 1;
  transform: translateY(0);
}

.delay-1 { transition-delay: 0.08s; }
.delay-2 { transition-delay: 0.16s; }
.delay-3 { transition-delay: 0.24s; }

@media (max-width: 1240px) {
  .chapter-rail {
    display: none;
  }
}

@media (max-width: 1024px) {
  .section {
    padding: 86px 0;
  }

  .mobile-menu-btn {
    display: block;
  }

  .hero-shell,
  .split-heading,
  .compare-layout,
  .objective-board,
  .blueprint,
  .proof-grid,
  .impact-layout,
  .snapshot-card {
    grid-template-columns: 1fr;
  }

  .hero-shell {
    grid-template-areas:
      "brand"
      "copy"
      "stage";
    padding: 44px 0 100px;
  }

  .hero-stage {
    min-height: 560px;
  }

  .diagonal-card {
    inset: 72px 34px 60px 34px;
  }

  .story-reel {
    grid-template-columns: repeat(4, minmax(280px, 1fr));
  }

  .proof-copy,
  .impact-sticky {
    position: static;
  }

  .metric-mosaic,
  .factor-grid {
    grid-template-columns: repeat(2, 1fr);
  }

  .metric-mosaic .big-metric {
    grid-row: auto;
    grid-column: 1 / -1;
    min-height: 330px;
  }

  .gallery-header {
    align-items: flex-start;
    flex-direction: column;
  }

  .blueprint-content ul {
    grid-template-columns: 1fr;
  }
}

@media (max-width: 720px) {
  .section-shell,
  .section-shell.compact,
  .hero-shell {
    width: min(100% - 28px, var(--shell));
  }

  .section {
    padding: 70px 0;
  }

  .editorial-hero {
    min-height: auto;
    padding-top: 36px;
  }

  .hero-copy h1 {
    font-size: clamp(38px, 11vw, 56px);
  }

  .hero-text,
  .split-heading p,
  .compare-copy p,
  .snapshot-left p,
  .cta-card p {
    font-size: 16px;
  }

  .hero-actions .btn {
    width: 100%;
  }

  .hero-stage {
    min-height: 500px;
  }

  .diagonal-card {
    inset: 80px 10px 62px 10px;
    padding: 24px;
    border-radius: 30px;
  }

  .ticket-one { left: 4px; top: 24px; }
  .ticket-two { right: 4px; top: 155px; }
  .ticket-three { left: 24px; bottom: 2px; }

  .floating-ticket {
    min-width: 135px;
    padding: 14px 15px;
  }

  .floating-ticket strong {
    font-size: 23px;
  }

  .radial-score svg {
    width: 190px;
    height: 190px;
  }

  .radial-score strong {
    font-size: 52px;
  }

  .before-after {
    min-height: 480px;
  }

  .ba-panel {
    padding: 28px;
  }

  .objective-board,
  .analytics-gallery,
  .snapshot-card {
    padding: 16px;
    border-radius: 28px;
  }

  .objective-title,
  .blueprint-display {
    padding: 26px;
  }

  .blueprint-tabs {
    grid-template-columns: 1fr;
  }

  .blueprint-display {
    min-height: 520px;
  }

  .keyword-wall,
  .metric-mosaic,
  .factor-grid {
    grid-template-columns: 1fr;
  }

  .keyword-wall article:nth-child(5) {
    grid-column: auto;
  }

  .screenshot-stage img {
    max-height: 470px;
  }

  .shot-nav {
    top: auto;
    bottom: 66px;
    transform: none;
  }

  .snapshot-table div {
    grid-template-columns: 1fr;
    gap: 8px;
  }

  .marquee-track span {
    padding: 14px 22px;
  }
}

@media (min-width: 1241px) {
  .case-study-main .section:not(.cta-section) .section-shell {
    --case-study-left-gutter: max(var(--rail-safe-space), calc((100vw - var(--shell)) / 2));
    width: min(var(--shell), calc(100vw - var(--case-study-left-gutter) - var(--content-edge-gap)));
    margin-left: var(--case-study-left-gutter);
    margin-right: auto;
  }

  .case-study-main .section:not(.cta-section) .section-shell.compact {
    width: min(1080px, calc(100vw - var(--case-study-left-gutter) - var(--content-edge-gap)));
  }

  .case-study-main .cta-section .section-shell {
    width: min(920px, calc(100% - 44px));
    max-width: 920px;
    margin: 0 auto;
  }
}


/* ============================================================
   FINAL RESPONSIVE FIX: Before / After below 1025px
   Desktop remains unchanged.
   Tablet/Mobile becomes stacked:
   1. Before Optimization
   2. After Optimization
   ============================================================ */

/*@media (max-width: 1024px) {*/
  /* Main section layout */
/*  .comparison-section .compare-layout {*/
/*    display: grid !important;*/
/*    grid-template-columns: 1fr !important;*/
/*    gap: 34px !important;*/
/*    align-items: stretch !important;*/
/*  }*/

  /* Stop slider behavior on tablet/mobile */
/*  .comparison-section .before-after {*/
/*    --split: 100% !important;*/
/*    position: relative !important;*/
/*    display: flex !important;*/
/*    flex-direction: column !important;*/
/*    min-height: auto !important;*/
/*    height: auto !important;*/
/*    overflow: hidden !important;*/
/*    border-radius: 28px !important;*/
/*    background: #ffffff !important;*/
/*    box-shadow: 0 18px 54px rgba(15, 23, 42, 0.12) !important;*/
/*  }*/

  /* Make both panels normal stacked blocks */
/*  .comparison-section .ba-panel,*/
/*  .comparison-section .ba-before,*/
/*  .comparison-section .ba-after {*/
/*    position: relative !important;*/
/*    inset: auto !important;*/
/*    top: auto !important;*/
/*    right: auto !important;*/
/*    bottom: auto !important;*/
/*    left: auto !important;*/
/*    width: 100% !important;*/
/*    max-width: 100% !important;*/
/*    min-height: auto !important;*/
/*    height: auto !important;*/
/*    padding: 34px 28px !important;*/
/*    overflow: visible !important;*/
/*    clip-path: none !important;*/
/*    transform: none !important;*/
/*  }*/

  /* Force order: before first, after second */
/*  .comparison-section .ba-before {*/
/*    order: 1 !important;*/
/*    z-index: 1 !important;*/
/*    color: var(--navy) !important;*/
/*    background: linear-gradient(135deg, #ffffff 0%, #f5f7ff 100%) !important;*/
/*    border-bottom: 1px solid rgba(15, 23, 42, 0.10) !important;*/
/*  }*/

/*  .comparison-section .ba-after {*/
/*    order: 2 !important;*/
/*    z-index: 1 !important;*/
/*    color: #ffffff !important;*/
/*    background: linear-gradient(135deg, rgba(66, 100, 237, 0.96), rgba(15, 23, 42, 0.97)) !important;*/
/*  }*/

  /* Heading should become normal text, not absolute overlay */
/*  .comparison-section .ba-title {*/
/*    position: relative !important;*/
/*    top: auto !important;*/
/*    left: auto !important;*/
/*    right: auto !important;*/
/*    bottom: auto !important;*/
/*    display: block !important;*/
/*    margin: 0 0 24px !important;*/
/*    max-width: 100% !important;*/
/*    font-size: clamp(30px, 7vw, 44px) !important;*/
/*    line-height: 1.08 !important;*/
/*    letter-spacing: -0.04em !important;*/
/*    text-align: left !important;*/
/*    transform: none !important;*/
/*    z-index: 2 !important;*/
/*    white-space: normal !important;*/
/*  }*/

  /* Make Before Optimization / After Optimization read in one line naturally */
/*  .comparison-section .ba-state-word,*/
/*  .comparison-section .ba-fixed-word,*/
/*  .comparison-section .ba-title-before .ba-state-word,*/
/*  .comparison-section .ba-title-after .ba-state-word,*/
/*  .comparison-section .ba-title-before .ba-fixed-word,*/
/*  .comparison-section .ba-title-after .ba-fixed-word {*/
/*    display: inline !important;*/
/*    white-space: normal !important;*/
/*    text-align: left !important;*/
/*  }*/

/*  .comparison-section .ba-title-before .ba-state-word::after,*/
/*  .comparison-section .ba-title-after .ba-state-word::after {*/
/*    content: " " !important;*/
/*  }*/

  /* Make list normal below heading */
/*  .comparison-section .ba-list {*/
/*    position: relative !important;*/
/*    top: auto !important;*/
/*    right: auto !important;*/
/*    bottom: auto !important;*/
/*    left: auto !important;*/
/*    display: grid !important;*/
/*    gap: 14px !important;*/
/*    width: 100% !important;*/
/*    max-width: 100% !important;*/
/*    margin: 0 !important;*/
/*    padding: 0 !important;*/
/*    list-style: none !important;*/
/*    text-align: left !important;*/
/*  }*/

/*  .comparison-section .ba-before .ba-list,*/
/*  .comparison-section .ba-after .ba-list {*/
/*    left: auto !important;*/
/*    right: auto !important;*/
/*    text-align: left !important;*/
/*  }*/

/*  .comparison-section .ba-list li {*/
/*    position: relative !important;*/
/*    display: block !important;*/
/*    width: 100% !important;*/
/*    max-width: 100% !important;*/
/*    padding-left: 26px !important;*/
/*    padding-right: 0 !important;*/
/*    font-size: 15px !important;*/
/*    line-height: 1.55 !important;*/
/*    font-weight: 800 !important;*/
/*    text-align: left !important;*/
/*    white-space: normal !important;*/
/*    overflow-wrap: anywhere !important;*/
/*  }*/

  /* Bullet dots on left for both before and after */
/*  .comparison-section .ba-before .ba-list li::before,*/
/*  .comparison-section .ba-after .ba-list li::before {*/
/*    content: "" !important;*/
/*    position: absolute !important;*/
/*    left: 0 !important;*/
/*    top: 0.62em !important;*/
/*    width: 9px !important;*/
/*    height: 9px !important;*/
/*    border-radius: 50% !important;*/
/*    background: currentColor !important;*/
/*    opacity: 0.45 !important;*/
/*  }*/

/*  .comparison-section .ba-after .ba-list li::after {*/
/*    display: none !important;*/
/*  }*/

  /* Hide slider controls on tablet/mobile */
/*  .comparison-section .ba-range,*/
/*  .comparison-section .ba-handle {*/
/*    display: none !important;*/
/*  }*/
/*}*/

/* Small mobile refinement */
@media (max-width: 480px) {
  .comparison-section .before-after {
    border-radius: 24px !important;
  }

  .comparison-section .ba-panel,
  .comparison-section .ba-before,
  .comparison-section .ba-after {
    padding: 30px 22px !important;
  }

  .comparison-section .ba-title {
    font-size: 31px !important;
    margin-bottom: 22px !important;
  }

  .comparison-section .ba-list {
    gap: 12px !important;
  }

  .comparison-section .ba-list li {
    font-size: 14px !important;
    line-height: 1.55 !important;
  }
}

/* ============================================================
   BEFORE / AFTER RESPONSIVE FIX
   576px - 1025px: side-by-side
   Below 576px: stacked
   ============================================================ */


/* Tablet: 576px to 1025px - keep side-by-side */
@media (min-width: 576px) and (max-width: 1025px) {
  .comparison-section .compare-layout {
    display: grid !important;
    grid-template-columns: 1fr !important;
    gap: 34px !important;
  }

  .comparison-section .before-after {
    --split: 50% !important;
    position: relative !important;
    min-height: 520px !important;
    height: auto !important;
    display: block !important;
    overflow: hidden !important;
    border-radius: 30px !important;
    background: var(--navy) !important;
  }

  .comparison-section .ba-panel {
    position: absolute !important;
    inset: 0 !important;
    overflow: hidden !important;
    padding: 36px !important;
  }

  .comparison-section .ba-before {
    width: 100% !important;
    max-width: 100% !important;
    clip-path: inset(0 50% 0 0) !important;
    z-index: 2 !important;
    color: var(--navy) !important;
    background:
      linear-gradient(135deg, #ffffff 0%, #f5f7ff 100%) !important;
  }

  .comparison-section .ba-after {
    width: 100% !important;
    max-width: 100% !important;
    z-index: 1 !important;
    color: #ffffff !important;
    background:
      linear-gradient(135deg, rgba(66, 100, 237, 0.92), rgba(15, 23, 42, 0.97)) !important;
  }

  /* Left title: Before Optimization stays inside left half */
  .comparison-section .ba-title-before {
    position: absolute !important;
    top: 35px !important;
    left: 36px !important;
    right: auto !important;
    width: calc(50% - 58px) !important;
    max-width: calc(50% - 58px) !important;
    margin: 0 !important;
    text-align: left !important;
    font-size: clamp(30px, 5vw, 48px) !important;
    line-height: 1.02 !important;
    letter-spacing: -0.045em !important;
    z-index: 5 !important;
  }

  .comparison-section .ba-title-before .ba-state-word,
  .comparison-section .ba-title-before .ba-fixed-word {
    display: block !important;
    text-align: left !important;
    white-space: normal !important;
  }

  /* Right title: After Optimization stays inside right half */
  .comparison-section .ba-title-after {
    position: absolute !important;
    top: 35px !important;
    left: calc(50% + 36px) !important;
    right: 36px !important;
    width: calc(50% - 72px) !important;
    max-width: calc(50% - 72px) !important;
    margin: 0 !important;
    text-align: right !important;
    font-size: clamp(30px, 5vw, 48px) !important;
    line-height: 1.02 !important;
    letter-spacing: -0.045em !important;
    z-index: 5 !important;
  }

  .comparison-section .ba-title-after .ba-state-word,
  .comparison-section .ba-title-after .ba-fixed-word {
    display: block !important;
    text-align: right !important;
    white-space: normal !important;
  }

  /* Left list */
  .comparison-section .ba-before .ba-list {
    position: absolute !important;
    left: 36px !important;
    right: auto !important;
    bottom: 36px !important;
    width: calc(50% - 70px) !important;
    max-width: calc(50% - 70px) !important;
    display: grid !important;
    gap: 12px !important;
    margin: 0 !important;
    padding: 0 !important;
    text-align: left !important;
  }

  /* Right list */
  .comparison-section .ba-after .ba-list {
    position: absolute !important;
    left: auto !important;
    right: 36px !important;
    bottom: 36px !important;
    width: calc(50% - 70px) !important;
    max-width: calc(50% - 70px) !important;
    display: grid !important;
    gap: 12px !important;
    margin: 0 !important;
    padding: 0 !important;
    text-align: right !important;
  }

  .comparison-section .ba-list li {
    font-size: 14px !important;
    line-height: 1.45 !important;
    font-weight: 800 !important;
    white-space: normal !important;
    overflow-wrap: anywhere !important;
  }

  .comparison-section .ba-before .ba-list li {
    padding-left: 22px !important;
    padding-right: 0 !important;
  }

  .comparison-section .ba-after .ba-list li {
    padding-left: 0 !important;
    padding-right: 22px !important;
  }

  .comparison-section .ba-before .ba-list li::before {
    left: 0 !important;
  }

  .comparison-section .ba-after .ba-list li::after {
    right: 0 !important;
    display: block !important;
  }

  .comparison-section .ba-range,
  .comparison-section .ba-handle {
    display: none !important;
  }
}


/* Mobile: below 576px - stacked layout */
@media (max-width: 575px) {
  .comparison-section .compare-layout {
    display: grid !important;
    grid-template-columns: 1fr !important;
    gap: 30px !important;
  }

  .comparison-section .before-after {
    --split: 100% !important;
    position: relative !important;
    display: flex !important;
    flex-direction: column !important;
    min-height: auto !important;
    height: auto !important;
    overflow: hidden !important;
    border-radius: 24px !important;
    background: #ffffff !important;
    box-shadow: 0 18px 54px rgba(15, 23, 42, 0.12) !important;
  }

  .comparison-section .ba-panel,
  .comparison-section .ba-before,
  .comparison-section .ba-after {
    position: relative !important;
    inset: auto !important;
    width: 100% !important;
    max-width: 100% !important;
    min-height: auto !important;
    height: auto !important;
    padding: 30px 22px !important;
    overflow: visible !important;
    clip-path: none !important;
    transform: none !important;
  }

  .comparison-section .ba-before {
    order: 1 !important;
    z-index: 1 !important;
    color: var(--navy) !important;
    background: linear-gradient(135deg, #ffffff 0%, #f5f7ff 100%) !important;
    border-bottom: 1px solid rgba(15, 23, 42, 0.10) !important;
  }

  .comparison-section .ba-after {
    order: 2 !important;
    z-index: 1 !important;
    color: #ffffff !important;
    background: linear-gradient(135deg, rgba(66, 100, 237, 0.96), rgba(15, 23, 42, 0.97)) !important;
  }

  .comparison-section .ba-title {
    position: relative !important;
    top: auto !important;
    left: auto !important;
    right: auto !important;
    bottom: auto !important;
    display: block !important;
    width: 100% !important;
    max-width: 100% !important;
    margin: 0 0 22px !important;
    font-size: 31px !important;
    line-height: 1.08 !important;
    letter-spacing: -0.04em !important;
    text-align: left !important;
    transform: none !important;
    white-space: normal !important;
  }

  .comparison-section .ba-state-word,
  .comparison-section .ba-fixed-word,
  .comparison-section .ba-title-before .ba-state-word,
  .comparison-section .ba-title-after .ba-state-word,
  .comparison-section .ba-title-before .ba-fixed-word,
  .comparison-section .ba-title-after .ba-fixed-word {
    display: inline !important;
    white-space: normal !important;
    text-align: left !important;
  }

  .comparison-section .ba-title-before .ba-state-word::after,
  .comparison-section .ba-title-after .ba-state-word::after {
    content: " " !important;
  }

  .comparison-section .ba-list,
  .comparison-section .ba-before .ba-list,
  .comparison-section .ba-after .ba-list {
    position: relative !important;
    top: auto !important;
    right: auto !important;
    bottom: auto !important;
    left: auto !important;
    width: 100% !important;
    max-width: 100% !important;
    display: grid !important;
    gap: 12px !important;
    margin: 0 !important;
    padding: 0 !important;
    text-align: left !important;
  }

  .comparison-section .ba-list li {
    position: relative !important;
    display: block !important;
    padding-left: 26px !important;
    padding-right: 0 !important;
    font-size: 14px !important;
    line-height: 1.55 !important;
    font-weight: 800 !important;
    text-align: left !important;
    white-space: normal !important;
    overflow-wrap: anywhere !important;
  }

  .comparison-section .ba-before .ba-list li::before,
  .comparison-section .ba-after .ba-list li::before {
    content: "" !important;
    position: absolute !important;
    left: 0 !important;
    top: 0.62em !important;
    width: 9px !important;
    height: 9px !important;
    border-radius: 50% !important;
    background: currentColor !important;
    opacity: 0.45 !important;
  }

  .comparison-section .ba-after .ba-list li::after {
    display: none !important;
  }

  .comparison-section .ba-range,
  .comparison-section .ba-handle {
    display: none !important;
  }
}
</style>

<div class="scroll-meter" aria-hidden="true"><span></span></div>

<?php if (!empty($nav_items)) : ?>
<aside class="chapter-rail" aria-label="Case study chapters">
    <?php foreach ($nav_items as $index => $item) : ?>
        <a href="#<?php echo esc_attr($item['id']); ?>" class="<?php echo $index === 0 ? 'active' : ''; ?>"><span><?php echo esc_html(str_pad($index + 1, 2, '0', STR_PAD_LEFT)); ?></span><?php echo esc_html($item['label']); ?></a>
    <?php endforeach; ?>
</aside>
<?php endif; ?>

<button class="mobile-menu-btn" aria-label="Open navigation" aria-expanded="false">
    <span></span><span></span><span></span>
</button>

<nav class="mobile-drawer" aria-label="Mobile navigation">
    <?php foreach ($nav_items as $item) : ?>
        <a href="#<?php echo esc_attr($item['id']); ?>"><?php echo esc_html($item['label']); ?></a>
    <?php endforeach; ?>
    <a href="#cta">CTA</a>
</nav>

<header class="editorial-hero" id="top">
    <div class="hero-pattern" aria-hidden="true"></div>
    <div class="shape shape-one" aria-hidden="true"></div>
    <div class="shape shape-two" aria-hidden="true"></div>

    <div class="hero-shell">
        <div class="brand-lockup reveal">
            <span class="brand-logo">T</span>
            <span><?php echo tm_cs_text($brand_name ? $brand_name . ' Case Study' : 'Tachomind Case Study'); ?></span>
        </div>

        <div class="hero-copy reveal">
            <?php if (!tm_cs_is_empty($hero_eyebrow)) : ?>
                <p class="eyebrow"><?php echo tm_cs_text($hero_eyebrow); ?></p>
            <?php endif; ?>
            <h1><?php tm_cs_hero_title(get_the_title(), $brand_name); ?></h1>
            <?php if (!tm_cs_is_empty(tm_cs_get($hero, 'description'))) : ?>
                <p class="hero-text"><?php echo tm_cs_text(tm_cs_get($hero, 'description')); ?></p>
            <?php endif; ?>
            <div class="hero-actions">
                <?php if ($has_proof) : ?><a href="#proof" class="btn primary">View proof</a><?php endif; ?>
                <?php if ($has_blueprint) : ?><a href="#strategy" class="btn secondary">Explore process</a><?php endif; ?>
            </div>
        </div>

        <div class="hero-stage reveal delay-1" aria-label="Organic growth visual dashboard">
            <div class="diagonal-card performance-card">
                <div class="card-head">
                    <span><?php echo tm_cs_text(tm_cs_get($hero, 'growth_period__timeline', 'Growth period')); ?></span>
                    <strong><?php echo tm_cs_text($brand_name); ?></strong>
                </div>
                <div class="radial-score" data-score="<?php echo esc_attr($score_number); ?>">
                    <svg viewBox="0 0 160 160" aria-hidden="true">
                        <circle cx="80" cy="80" r="66"></circle>
                        <circle class="progress-ring" cx="80" cy="80" r="66"></circle>
                    </svg>
                    <div>
                        <strong><?php echo tm_cs_text(tm_cs_get($hero, 'visibility_score', $score_number . '%')); ?></strong>
                        <span>Visibility score</span>
                    </div>
                </div>
                <div class="mini-line" aria-hidden="true">
                    <span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                </div>
            </div>

            <?php if (!tm_cs_is_empty(tm_cs_get($hero, 'organic_traffic'))) : ?>
                <div class="floating-ticket ticket-one">
                    <small>Organic Traffic</small>
                    <strong><?php echo tm_cs_text(tm_cs_get($hero, 'organic_traffic')); ?></strong>
                </div>
            <?php endif; ?>
            <?php if (!empty($ranking_items)) : ?>
                <div class="floating-ticket ticket-two">
                    <small>Core Keywords</small>
                    <strong>Page 1</strong>
                </div>
            <?php endif; ?>
            <?php if (!tm_cs_is_empty(tm_cs_get($hero, 'growth_period__timeline'))) : ?>
                <div class="floating-ticket ticket-three">
                    <small>Timeline</small>
                    <strong><?php echo tm_cs_text(tm_cs_get($hero, 'growth_period__timeline')); ?></strong>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <?php if (!empty($core_keywords)) : ?>
        <div class="keyword-marquee" aria-label="Target keyword wins">
            <div class="marquee-track">
                <?php for ($r = 0; $r < 2; $r++) : ?>
                    <?php foreach ($core_keywords as $keyword) : ?>
                        <span><?php echo tm_cs_text($keyword); ?></span>
                    <?php endforeach; ?>
                <?php endfor; ?>
            </div>
        </div>
    <?php endif; ?>
</header>

<main class="case-study-main">
    <?php if ($has_story) : ?>
        <section class="section story-section" id="story">
            <div class="section-shell">
                <div class="section-kicker reveal">The story</div>
                <div class="split-heading reveal">
                    <?php if (!tm_cs_is_empty(tm_cs_get($story, 'story_title'))) : ?>
                        <h2><?php echo tm_cs_text(tm_cs_get($story, 'story_title')); ?></h2>
                    <?php endif; ?>
                    <?php if (!tm_cs_is_empty(tm_cs_get($story, 'story_description'))) : ?>
                        <p><?php echo tm_cs_text(tm_cs_get($story, 'story_description')); ?></p>
                    <?php endif; ?>
                </div>

                <?php if (!empty($story_cards)) : ?>
                    <div class="story-reel" role="list">
                        <?php $count = 0; foreach ($story_cards as $i => $card) : $count++; ?>
                            <article class="reel-card reveal delay-<?php echo esc_attr(min($count - 1, 3)); ?>" role="listitem">
                                <span class="reel-number"><?php echo esc_html(str_pad($count, 2, '0', STR_PAD_LEFT)); ?></span>
                                <?php if (!tm_cs_is_empty(tm_cs_get($card, 'story_heading'))) : ?><h3><?php echo tm_cs_text(tm_cs_get($card, 'story_heading')); ?></h3><?php endif; ?>
                                <?php if (!tm_cs_is_empty(tm_cs_get($card, 'story_description'))) : ?><p><?php echo tm_cs_text(tm_cs_get($card, 'story_description')); ?></p><?php endif; ?>
                            </article>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    <?php endif; ?>

    <?php if ($has_compare) : ?>
        <section class="section comparison-section" id="compare">
            <div class="section-shell compact">
                <div class="compare-layout">
                    <div class="compare-copy reveal">
                        <span class="section-kicker">Before vs After</span>
                        <?php if (!tm_cs_is_empty(tm_cs_get($before_after, 'title_'))) : ?><h2><?php echo tm_cs_text(tm_cs_get($before_after, 'title_')); ?></h2><?php endif; ?>
                        <?php if (!tm_cs_is_empty(tm_cs_get($before_after, 'description'))) : ?><?php echo tm_cs_rich(tm_cs_get($before_after, 'description')); ?><?php endif; ?>
                        <?php if (!empty($after_lines)) : ?>
                            <div class="compare-bullets">
                                <?php foreach (array_slice($after_lines, 0, 3) as $line) : ?>
                                    <span><?php echo tm_cs_text($line); ?></span>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <?php if (!empty($before_lines) || !empty($after_lines)) : ?>
                        <div class="before-after reveal delay-1" data-before-after>
                            <?php if (!empty($after_lines)) : ?>
                                <div class="ba-panel ba-after">
                                    <h3 class="ba-title ba-title-after">
                                        <span class="ba-state-word">After</span>
                                        <span class="ba-fixed-word">Optimization</span>
                                    </h3>
                                    <ul class="ba-list">
                                        <?php foreach ($after_lines as $line) : ?><li><?php echo tm_cs_text($line); ?></li><?php endforeach; ?>
                                    </ul>
                                </div>
                            <?php endif; ?>

                            <?php if (!empty($before_lines)) : ?>
                                <div class="ba-panel ba-before" data-before-layer>
                                    <h3 class="ba-title ba-title-before">
                                        <span class="ba-state-word">Before</span>
                                        <span class="ba-fixed-word">Optimization</span>
                                    </h3>
                                    <ul class="ba-list">
                                        <?php foreach ($before_lines as $line) : ?><li><?php echo tm_cs_text($line); ?></li><?php endforeach; ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                            <input class="ba-range" type="range" min="0" max="100" value="48" aria-label="Compare before and after" data-before-range />
                            <div class="ba-handle" data-before-handle aria-hidden="true"><span></span></div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if ($has_objectives) : ?>
        <section class="section objectives-section">
            <div class="section-shell">
                <div class="objective-board reveal">
                    <div class="objective-title">
                        <span class="section-kicker">Objectives</span>
                        <?php if (!tm_cs_is_empty(tm_cs_get($objectives, 'objective_title'))) : ?><h2><?php echo tm_cs_text(tm_cs_get($objectives, 'objective_title')); ?></h2><?php endif; ?>
                    </div>
                    <?php if (!empty($objective_items)) : ?>
                        <div class="objective-grid">
                            <?php foreach ($objective_items as $i => $item) : ?>
                                <article>
                                    <span><?php echo esc_html(str_pad($i + 1, 2, '0', STR_PAD_LEFT)); ?></span>
                                    <?php if (!tm_cs_is_empty(tm_cs_get($item, 'objective_subheading'))) : ?><h3><?php echo tm_cs_text(tm_cs_get($item, 'objective_subheading')); ?></h3><?php endif; ?>
                                    <?php if (!tm_cs_is_empty(tm_cs_get($item, 'objective_description_'))) : ?><p><?php echo tm_cs_text(tm_cs_get($item, 'objective_description_')); ?></p><?php endif; ?>
                                </article>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if ($has_blueprint && !empty($strategy_steps)) : ?>
        <section class="section blueprint-section" id="strategy">
            <div class="section-shell">
                <div class="split-heading reveal">
                    <?php if (!tm_cs_is_empty(tm_cs_get($blueprint, 'blueprint_title'))) : ?><h2><?php echo tm_cs_text(tm_cs_get($blueprint, 'blueprint_title')); ?></h2><?php endif; ?>
                    <?php if (!tm_cs_is_empty(tm_cs_get($blueprint, 'bluprint_description'))) : ?><?php echo tm_cs_rich(tm_cs_get($blueprint, 'bluprint_description')); ?><?php endif; ?>
                </div>

                <div class="blueprint reveal">
                    <div class="blueprint-tabs" aria-label="SEO blueprint steps">
                        <?php foreach ($strategy_steps as $i => $step) : ?>
                            <button type="button" class="<?php echo $i === 0 ? 'active' : ''; ?>" data-step="<?php echo esc_attr($i); ?>"><?php echo tm_cs_text($step['tab'] !== '' ? $step['tab'] : 'Step ' . ($i + 1)); ?></button>
                        <?php endforeach; ?>
                    </div>
                    <div class="blueprint-display">
                        <div class="blueprint-orb" aria-hidden="true"><span></span><span></span><span></span></div>
                        <div class="blueprint-content">
                            <p class="step-count" data-step-count>Step 01 / <?php echo esc_html(str_pad(count($strategy_steps), 2, '0', STR_PAD_LEFT)); ?></p>
                            <h3 data-step-title><?php echo tm_cs_text($strategy_steps[0]['title']); ?></h3>
                            <p data-step-text><?php echo tm_cs_text($strategy_steps[0]['text']); ?></p>
                            <ul data-step-list>
                                <?php foreach ($strategy_steps[0]['items'] as $item) : ?><li><?php echo tm_cs_text($item); ?></li><?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if ($has_proof) : ?>
        <section class="section proof-section" id="proof">
            <div class="section-shell">
                <?php if ($has_ranking) : ?>
                    <div class="proof-grid">
                        <div class="proof-copy reveal">
                            <span class="section-kicker">Ranking proof</span>
                            <?php if (!tm_cs_is_empty(tm_cs_get($ranking, 'ranking_factor_title'))) : ?><h2><?php echo tm_cs_text(tm_cs_get($ranking, 'ranking_factor_title')); ?></h2><?php endif; ?>
                            <?php if (!tm_cs_is_empty(tm_cs_get($ranking, 'ranking_factor_description'))) : ?><?php echo tm_cs_rich(tm_cs_get($ranking, 'ranking_factor_description')); ?><?php endif; ?>
                        </div>

                        <?php if (!empty($ranking_items)) : ?>
                            <div class="keyword-wall reveal delay-1">
                                <?php foreach ($ranking_items as $i => $item) : ?>
                                    <article>
                                        <span class="rank"><?php echo tm_cs_text($item['rank']); ?></span>
                                        <?php if (!tm_cs_is_empty($item['keyword'])) : ?><h3><?php echo tm_cs_text($item['keyword']); ?></h3><?php endif; ?>
                                        <?php if (!tm_cs_is_empty($item['content'])) : ?><p><?php echo tm_cs_text($item['content']); ?></p><?php endif; ?>
                                    </article>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <?php if ($has_gallery) : ?>
                    <div class="analytics-gallery reveal">
                        <div class="gallery-header">
                            <div>
                                <span class="section-kicker">Analytics screenshots</span>
                                <h2>Evidence-led reporting view.</h2>
                            </div>
                            <div class="gallery-controls" aria-label="Screenshot controls">
                                <?php foreach ($shots as $i => $shot) : ?>
                                    <button type="button" class="<?php echo $i === 0 ? 'active' : ''; ?>" data-shot="<?php echo esc_attr($i); ?>"><?php echo tm_cs_text($shot['label']); ?></button>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <div class="screenshot-stage">
                            <button class="shot-nav shot-prev" type="button" aria-label="Previous screenshot">‹</button>
                            <figure>
                                <img src="<?php echo esc_url($shots[0]['src']); ?>" alt="<?php echo esc_attr($shots[0]['label']); ?>" data-shot-image />
                                <figcaption data-shot-caption><?php echo tm_cs_text($shots[0]['caption']); ?></figcaption>
                            </figure>
                            <button class="shot-nav shot-next" type="button" aria-label="Next screenshot">›</button>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    <?php endif; ?>

    <?php if ($has_metrics) : ?>
        <section class="section metrics-section">
            <div class="section-shell">
                <div class="metric-mosaic reveal">
                    <?php if ($has_hero_metric) :
                        $hero_count = tm_cs_metric_count($hero_metric_value);
                        $hero_suffix = tm_cs_metric_suffix($hero_metric_value);
                    ?>
                        <article class="big-metric">
                            <span>Organic traffic</span>
                            <?php if ($hero_count > 0) : ?>
                                <strong data-count="<?php echo esc_attr($hero_count); ?>" data-suffix="<?php echo esc_attr($hero_suffix); ?>">0<?php echo esc_html($hero_suffix); ?></strong>
                            <?php else : ?>
                                <strong><?php echo tm_cs_text($hero_metric_value); ?></strong>
                            <?php endif; ?>
                            <p>Growth from the starting baseline.</p>
                        </article>
                    <?php endif; ?>

                    <?php foreach ($metric_items as $i => $item) :
                        $heading = (string) tm_cs_get($item, 'heading');
                        $is_big_fallback = (!$has_hero_metric && $i === 0);
                        $count = tm_cs_metric_count($heading);
                        $suffix = tm_cs_metric_suffix($heading);
                    ?>
                        <article class="<?php echo $is_big_fallback ? 'big-metric' : ''; ?>">
                            <?php if (!tm_cs_is_empty(tm_cs_get($item, 'title_'))) : ?><span><?php echo tm_cs_text(tm_cs_get($item, 'title_')); ?></span><?php endif; ?>
                            <?php if (!tm_cs_is_empty($heading)) : ?>
                                <?php if ($is_big_fallback && $count > 0) : ?>
                                    <strong data-count="<?php echo esc_attr($count); ?>" data-suffix="<?php echo esc_attr($suffix); ?>">0<?php echo esc_html($suffix); ?></strong>
                                <?php else : ?>
                                    <strong><?php echo tm_cs_text($heading); ?></strong>
                                <?php endif; ?>
                            <?php endif; ?>
                            <?php if (!tm_cs_is_empty(tm_cs_get($item, 'content'))) : ?><?php echo tm_cs_rich(tm_cs_get($item, 'content')); ?><?php endif; ?>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if ($has_impact) : ?>
        <section class="section impact-section" id="impact">
            <div class="section-shell impact-layout">
                <div class="impact-sticky reveal">
                    <span class="section-kicker">Impact beyond metrics</span>
                    <h2>Better rankings created better business outcomes.</h2>
                    <div class="impact-number">
                        <strong><?php echo esc_html(count($impact_items)); ?></strong>
                        <span>business impact areas</span>
                    </div>
                </div>

                <div class="accordion reveal delay-1" data-accordion>
                    <?php foreach ($impact_items as $i => $item) : ?>
                        <article class="accordion-item <?php echo $i === 0 ? 'open' : ''; ?>">
                            <button type="button" aria-expanded="<?php echo $i === 0 ? 'true' : 'false'; ?>"><?php echo tm_cs_text(tm_cs_get($item, 'beyond_metrics_title')); ?></button>
                            <div class="accordion-panel">
                                <?php if (!tm_cs_is_empty(tm_cs_get($item, 'beyond_metrics_description'))) : ?><p><?php echo tm_cs_text(tm_cs_get($item, 'beyond_metrics_description')); ?></p><?php endif; ?>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if ($has_factors) : ?>
        <section class="section factors-section">
            <div class="section-shell">
                <div class="split-heading reveal">
                    <h2>Key success factors.</h2>
                    <?php if (!tm_cs_is_empty(tm_cs_get($success, 'content'))) : ?><?php echo tm_cs_rich(tm_cs_get($success, 'content')); ?><?php endif; ?>
                </div>

                <div class="factor-grid">
                    <?php $icons = array('⌕', '⚙', '✎', '◷'); ?>
                    <?php foreach ($success_items as $i => $item) : ?>
                        <article class="factor-card reveal delay-<?php echo esc_attr(min($i, 3)); ?>">
                            <div class="factor-icon"><?php echo esc_html($icons[$i] ?? '✓'); ?></div>
                            <?php if (!tm_cs_is_empty(tm_cs_get($item, 'success_factor_heading'))) : ?><h3><?php echo tm_cs_text(tm_cs_get($item, 'success_factor_heading')); ?></h3><?php endif; ?>
                            <?php if (!tm_cs_is_empty(tm_cs_get($item, 'success_factor_content'))) : ?><p><?php echo tm_cs_text(tm_cs_get($item, 'success_factor_content')); ?></p><?php endif; ?>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if ($has_snapshot) : ?>
        <section class="section snapshot-section">
            <div class="section-shell">
                <div class="snapshot-card reveal">
                    <div class="snapshot-left">
                        <span class="section-kicker">Quick snapshot</span>
                        <?php if (!tm_cs_is_empty(tm_cs_get($snapshot, 'heading'))) : ?><h2><?php echo tm_cs_text(tm_cs_get($snapshot, 'heading')); ?></h2><?php endif; ?>
                        <?php if (!tm_cs_is_empty(tm_cs_get($snapshot, 'description'))) : ?><?php echo tm_cs_rich(tm_cs_get($snapshot, 'description')); ?><?php endif; ?>
                    </div>

                    <?php if (!empty($snapshot_rows)) : ?>
                        <div class="snapshot-table" role="table" aria-label="Case study snapshot">
                            <?php foreach ($snapshot_rows as $label => $value) : ?>
                                <div role="row"><span role="cell"><?php echo esc_html($label); ?></span><strong role="cell"><?php echo tm_cs_text($value); ?></strong></div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <?php $service_chips = tm_cs_lines(tm_cs_get($snapshot_group, 'solution')); ?>
                <?php if (count($service_chips) > 1) : ?>
                    <div class="service-cloud reveal">
                        <?php foreach ($service_chips as $chip) : ?><span><?php echo tm_cs_text($chip); ?></span><?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    <?php endif; ?>
    
    
    <?php if ($has_testimonial) : ?>
    <section class="section testimonial-section" id="testimonial">
        <div class="section-shell">
            <div class="testimonial-card reveal">
                <div class="testimonial-aside">
                    <div>
                        <span class="section-kicker">Client testimonial</span>
                        <h2>Feedback from <?php echo tm_cs_text($brand_name); ?>.</h2>
                        <p>A quick client voice section that supports the proof, rankings, and business impact shown in this case study.</p>
                    </div>

                    <?php if (!tm_cs_is_empty(tm_cs_get($hero, 'visibility_score')) || !tm_cs_is_empty(tm_cs_get($hero, 'organic_traffic'))) : ?>
                        <div class="testimonial-mini-metrics">
                            <?php if (!tm_cs_is_empty(tm_cs_get($hero, 'visibility_score'))) : ?>
                                <span>
                                    <strong><?php echo tm_cs_text(tm_cs_get($hero, 'visibility_score')); ?></strong>
                                    <small>Visibility score</small>
                                </span>
                            <?php endif; ?>

                            <?php if (!tm_cs_is_empty(tm_cs_get($hero, 'organic_traffic'))) : ?>
                                <span>
                                    <strong><?php echo tm_cs_text(tm_cs_get($hero, 'organic_traffic')); ?></strong>
                                    <small>Organic traffic</small>
                                </span>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="testimonial-quote-card">
                    <div>
                        <div class="testimonial-quote-mark" aria-hidden="true">“</div>

                        <div class="testimonial-stars" aria-hidden="true">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>

                        <blockquote>
                            <?php echo tm_cs_rich($testimonial_review); ?>
                        </blockquote>
                    </div>

                    <div class="testimonial-client-row">
                        <div class="testimonial-avatar" aria-hidden="true">
                            <?php echo esc_html($testimonial_avatar); ?>
                        </div>
                        <div>
                            <strong><?php echo tm_cs_text($testimonial_name ?: $brand_name); ?></strong>
                            <?php if (!tm_cs_is_empty($testimonial_position)) : ?>
                                <span><?php echo tm_cs_text($testimonial_position); ?></span>
                            <?php else : ?>
                                <span><?php echo tm_cs_text($brand_name); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
    

    <section class="cta-section" id="cta">
        <div class="cta-bg" aria-hidden="true"></div>
        <div class="section-shell cta-card reveal">
            <p class="eyebrow">Ready For Your Success Story?</p>
            <h2>Could Your Business Be Our Next Case Study</h2>
            <p>Yo've seen the results we've delivered for businesses like Yours. Lets Create a growth statergy that turns visibility into leads, trust and revenue.</p>
            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn primary">Get My Growth Plan</a>
        </div>
    </section>
</main>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const body = document.body;
    const progressBar = document.querySelector('.scroll-meter span');
    const chapterRail = document.querySelector('.chapter-rail');
    const railLinks = Array.from(document.querySelectorAll('.chapter-rail a'));
    const mobileButton = document.querySelector('.mobile-menu-btn');
    const mobileLinks = Array.from(document.querySelectorAll('.mobile-drawer a'));

    function updateProgress() {
        if (!progressBar) return;
        const maxScroll = document.documentElement.scrollHeight - window.innerHeight;
        const progress = maxScroll > 0 ? (window.scrollY / maxScroll) * 100 : 0;
        progressBar.style.width = progress + '%';
    }

    function getRailStopElement() {
        const selectors = ['footer', '#colophon', '.site-footer', '.footer', '.elementor-location-footer', '.cta-section'];
        for (let i = 0; i < selectors.length; i++) {
            const element = document.querySelector(selectors[i]);
            if (element && element.offsetParent !== null) {
                return element;
            }
        }
        return null;
    }

    function resetChapterRail() {
        if (!chapterRail) return;
        chapterRail.classList.remove('is-visible');
        chapterRail.style.position = '';
        chapterRail.style.top = '';
        chapterRail.style.left = '';
        chapterRail.style.transform = '';
    }

    function updateChapterRailStop() {
        if (!chapterRail) return;

        if (window.matchMedia('(max-width: 1240px)').matches) {
            resetChapterRail();
            return;
        }

        const mainContent = document.querySelector('main');
        const stopElement = getRailStopElement();

        if (!mainContent || !stopElement) {
            resetChapterRail();
            return;
        }

        const gap = 30;
        const railHeight = chapterRail.offsetHeight;
        const railTopWhenFixed = window.scrollY + (window.innerHeight / 2) - (railHeight / 2);
        const mainStartInDocument = mainContent.getBoundingClientRect().top + window.scrollY + gap;
        const stopTopInDocument = stopElement.getBoundingClientRect().top + window.scrollY - railHeight - gap;

        /*
         * Keep the sidebar only inside the body content area:
         * 1. Hide it while the banner/hero is still behind it.
         * 2. Show it as fixed inside body sections.
         * 3. Stop it before CTA/footer.
         */
        if (railTopWhenFixed < mainStartInDocument || stopTopInDocument <= mainStartInDocument) {
            resetChapterRail();
            return;
        }

        chapterRail.classList.add('is-visible');

        if (railTopWhenFixed >= stopTopInDocument) {
            chapterRail.style.position = 'absolute';
            chapterRail.style.top = Math.max(mainStartInDocument, stopTopInDocument) + 'px';
            chapterRail.style.left = '24px';
            chapterRail.style.transform = 'none';
        } else {
            chapterRail.style.position = 'fixed';
            chapterRail.style.top = '50%';
            chapterRail.style.left = '24px';
            chapterRail.style.transform = 'translateY(-50%)';
        }
    }

    let railFrame = null;
    function requestChapterRailUpdate() {
        if (railFrame) return;
        railFrame = window.requestAnimationFrame(function () {
            updateProgress();
            updateChapterRailStop();
            railFrame = null;
        });
    }

    window.addEventListener('scroll', requestChapterRailUpdate, { passive: true });
    window.addEventListener('resize', requestChapterRailUpdate);
    window.addEventListener('load', requestChapterRailUpdate);
    updateProgress();
    updateChapterRailStop();

    if (mobileButton) {
        mobileButton.addEventListener('click', function () {
            const isOpen = body.classList.toggle('menu-open');
            mobileButton.setAttribute('aria-expanded', String(isOpen));
        });
    }

    mobileLinks.forEach(function (link) {
        link.addEventListener('click', function () {
            body.classList.remove('menu-open');
            if (mobileButton) mobileButton.setAttribute('aria-expanded', 'false');
        });
    });

    if ('IntersectionObserver' in window) {
        const revealObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.14 });

        document.querySelectorAll('.reveal').forEach(function (el) { revealObserver.observe(el); });

        const sections = Array.from(document.querySelectorAll('header[id], section[id]'));
        const sectionObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (!entry.isIntersecting) return;
                railLinks.forEach(function (link) {
                    link.classList.toggle('active', link.getAttribute('href') === '#' + entry.target.id);
                });
            });
        }, { rootMargin: '-35% 0px -55% 0px' });

        sections.forEach(function (section) { sectionObserver.observe(section); });
    } else {
        document.querySelectorAll('.reveal').forEach(function (el) { el.classList.add('visible'); });
    }

    const radial = document.querySelector('.radial-score');
    if (radial) {
        const score = Number(radial.dataset.score || 0);
        const circle = radial.querySelector('.progress-ring');
        if (circle) {
            const circumference = 2 * Math.PI * 66;
            circle.style.strokeDasharray = circumference;
            circle.style.strokeDashoffset = circumference;
            window.setTimeout(function () {
                circle.style.strokeDashoffset = circumference - (score / 100) * circumference;
            }, 300);
        }
    }

    const beforeAfter = document.querySelector('[data-before-after]');
    const beforeRange = document.querySelector('[data-before-range]');
    function setBeforeAfter(value) {
        if (!beforeAfter) return;
        beforeAfter.style.setProperty('--split', value + '%');
    }
    if (beforeRange) {
        beforeRange.addEventListener('input', function (event) { setBeforeAfter(event.target.value); });
        setBeforeAfter(beforeRange.value || 48);
    }

    const strategySteps = <?php echo wp_json_encode($strategy_steps); ?>;
    const blueprintTabs = Array.from(document.querySelectorAll('.blueprint-tabs button'));
    const stepCount = document.querySelector('[data-step-count]');
    const stepTitle = document.querySelector('[data-step-title]');
    const stepText = document.querySelector('[data-step-text]');
    const stepList = document.querySelector('[data-step-list]');

    function updateStrategyStep(index) {
        const step = strategySteps[index];
        if (!step) return;

        blueprintTabs.forEach(function (tab, tabIndex) { tab.classList.toggle('active', tabIndex === index); });
        if (stepCount) stepCount.textContent = 'Step ' + String(index + 1).padStart(2, '0') + ' / ' + String(strategySteps.length).padStart(2, '0');
        if (stepTitle) stepTitle.textContent = step.title || '';
        if (stepText) stepText.textContent = step.text || '';
        if (stepList) {
            stepList.innerHTML = Array.isArray(step.items) ? step.items.map(function (item) { return '<li>' + String(item).replace(/[&<>"']/g, function (m) { return ({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#039;'}[m]); }) + '</li>'; }).join('') : '';
        }
    }

    blueprintTabs.forEach(function (tab, index) {
        tab.addEventListener('click', function () { updateStrategyStep(index); });
    });

    const shots = <?php echo wp_json_encode($shots); ?>;
    let activeShot = 0;
    const shotImage = document.querySelector('[data-shot-image]');
    const shotCaption = document.querySelector('[data-shot-caption]');
    const shotButtons = Array.from(document.querySelectorAll('[data-shot]'));
    const prevButton = document.querySelector('.shot-prev');
    const nextButton = document.querySelector('.shot-next');

    function setShot(index) {
        if (!shots.length) return;
        activeShot = (index + shots.length) % shots.length;
        const shot = shots[activeShot];
        shotButtons.forEach(function (button, buttonIndex) { button.classList.toggle('active', buttonIndex === activeShot); });
        if (!shotImage || !shotCaption) return;
        shotImage.classList.add('switching');
        window.setTimeout(function () {
            shotImage.src = shot.src || '';
            shotImage.alt = shot.label || '';
            shotCaption.textContent = shot.caption || '';
            shotImage.onload = function () { shotImage.classList.remove('switching'); };
        }, 180);
    }

    shotButtons.forEach(function (button) {
        button.addEventListener('click', function () { setShot(Number(button.dataset.shot)); });
    });
    if (prevButton) prevButton.addEventListener('click', function () { setShot(activeShot - 1); });
    if (nextButton) nextButton.addEventListener('click', function () { setShot(activeShot + 1); });

    const counters = Array.from(document.querySelectorAll('[data-count]'));
    if ('IntersectionObserver' in window) {
        const counterObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (!entry.isIntersecting) return;
                const el = entry.target;
                const target = Number(el.dataset.count || 0);
                const suffix = el.dataset.suffix || '';
                let current = 0;
                const duration = 900;
                const startTime = performance.now();

                function animateCounter(time) {
                    const elapsed = time - startTime;
                    const progress = Math.min(elapsed / duration, 1);
                    current = Math.round(target * progress);
                    el.textContent = current + suffix;
                    if (progress < 1) requestAnimationFrame(animateCounter);
                }

                requestAnimationFrame(animateCounter);
                counterObserver.unobserve(el);
            });
        }, { threshold: 0.45 });
        counters.forEach(function (counter) { counterObserver.observe(counter); });
    }

    const accordionItems = Array.from(document.querySelectorAll('.accordion-item'));
    function refreshAccordion() {
        accordionItems.forEach(function (item) {
            const panel = item.querySelector('.accordion-panel');
            const button = item.querySelector('button');
            if (!panel || !button) return;
            if (item.classList.contains('open')) {
                panel.style.maxHeight = panel.scrollHeight + 'px';
                button.setAttribute('aria-expanded', 'true');
            } else {
                panel.style.maxHeight = '0px';
                button.setAttribute('aria-expanded', 'false');
            }
        });
    }

    accordionItems.forEach(function (item) {
        const button = item.querySelector('button');
        if (!button) return;
        button.addEventListener('click', function () {
            accordionItems.forEach(function (otherItem) { if (otherItem !== item) otherItem.classList.remove('open'); });
            item.classList.toggle('open');
            refreshAccordion();
        });
    });

    window.addEventListener('resize', refreshAccordion);
    refreshAccordion();
});
</script>

<?php get_footer(); ?>
