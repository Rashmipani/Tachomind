<?php
/* ============================================================
   City Landing Page (page-city.php) - ACF fields + data helper
   ------------------------------------------------------------
   Every field is optional. Empty fields fall back to the
   defaults below, so a new city page only needs a City Name.
   Text fields accept the tokens {city}, {short} and {state}.
   ============================================================ */

function tachomind_city_defaults() {
    return array(
        'city_name'      => 'Bhubaneshwar',
        'city_short'     => 'BBSR',
        'city_state'     => 'Odisha',
        'landmark_name'  => 'Lingaraj Temple',
        'hero_lead'      => 'A full-service SEO company in {city} that is helping businesses to rank on Google, appear in AI-powered answers, and build visibility across the next-GEN searches.',
        'hero_stats'     => "100+ | Professionals\n30+ | Countries\n8500+ | Accounts\n98% | Retention",
        'city_intro'     => 'Businesses in {city} are competing harder than ever for local search visibility. If you are looking for SEO services in {city} for your business, Tachomind is the right choice for you.',
        'search_queries' => "best seo company in {city}\nlocal seo company in {short}\nb2b seo agency {state}\nai seo services {city}",
        'industries'     => implode("\n", array(
            'Real Estate | Real estate SEO services in {city} | Our expert team helps builders rank for local property searches and grab attention from high-value property buyers.',
            'Ecommerce | E-Commerce SEO optimization in {state} | Need a better plan to grow your online sales? We have an excellent strategy for you.',
            'B2B Manufacturing | B2B manufacturing SEO strategies in {city} | Need corporate leads for your factory or industry in {city}? We bring high-ticket leads.',
            'Healthcare | Healthcare SEO services in {city} | Our specialists know which services local patients are actively searching for in medical care. We are the best team that connects hospitals and clinics with patients.',
            'Education | SEO and Digital Marketing in {city} | Tired of competitor ads? Contact our SEO team for positioning your coaching center and college ahead of others.',
            "Hospitality | Hospitality SEO Business Solutions in {short} | Hotels and restaurants attract travelers and local people through the best reviews and GBP. We optimize those for your restaurant. Let's meet for coffee at your restaurant.",
        )),
        // Only used when the city is the default one; other cities list their own areas.
        'areas'          => "Patia | 328 | 74\nChandrasekharpur | 236 | 92\nSaheed Nagar | 266 | 196\nNayapalli | 134 | 196\nRasulgarh | 348 | 226\nKhandagiri | 112 | 316\nJanpath | 212 | 250",
        'faqs'           => implode("\n\n", array(
            "How useful is SEO for a startup company in {city}?\nSEO is the most cost-effective way for a startup to earn more clients. SEO helps businesses to receive long-term trust and a flow of customers without relying on paid ads.",
            "Do you provide any packages that are appropriate for startups?\nYes, we offer tailored packages for every client. We understand your pain points and develop the SEO strategy that suits your business and delivers high-impact wins. We provide a strong competitive edge for your business while keeping the costs manageable.",
            "Why do we hire your SEO agency over other agencies in {city}?\nWe listen to your needs and understand your priorities and develop a strategy that solves your digital problems. We focus on bringing traffic that actually converts into paying customers. Our SEO strategy is transparent, accountable, and data driven.",
            "Do you guarantee #1 Google Rank?\nNo agency can promise the same. Google's algorithm is being updated regularly, and the changes will alter the results. We assure our clients of enhanced organic visibility, high traffic and regular optimization of the pages to outrank your top competitors.",
            "Do you provide monthly SEO reports for the clients?\nYes, of course. We share a comprehensive monthly SEO report with our clients. Our reports are highly appreciated by our clients for their simple and clear highlights.",
            "How long does it take to see results from SEO in {city}?\nYou can begin to see improvements in rank and organic traffic within the first three to six months. If your niche has low competition, you can often see faster wins within 90 days. Highly competitive keywords will take a minimum of 6 months to show positive revenue growth.",
            "What is the cost of SEO services in {city}?\nThe cost of local SEO services in {city} typically starts at INR 10,000. The price varies based on the project complexity and competition. When a project requires more resources, we charge more. Tachomind always provides transparent quotes for the services after a thorough audit of your current digital footprint.",
            "Can SEO help my local business in {city}?\nDefinitely, join the hundreds of local businesses and avail the best local SEO services in {city}. We are pioneers in Google Business Profile Optimization, enhancing AEO and GEO.",
        )),
        'whatsapp'       => '91700824XXXX',
    );
}

/* Original Bhubaneshwar copy, used instead of the generic defaults on the home-city page. */
function tachomind_city_home_defaults() {
    return array(
        'city_intro' => '{city} is a rapidly developing Tech city with commercial and IT corridors. If you are looking for SEO services in {city} for your business, Tachomind is the right choice for you.',
        'industries' => implode("\n", array(
            'Real Estate | Real estate SEO services in {city} | Our expert team helps builders rank for local property searches and grab attention from high-value property buyers.',
            'Ecommerce | E-Commerce SEO optimization in {state} | Need a better plan to grow your online sales? We have an excellent strategy for you.',
            'B2B Manufacturing | B2B manufacturing SEO strategies in Mancheswar | Need corporate leads for your factory or industry in Mancheswar? We bring high-ticket leads.',
            'Healthcare | Healthcare SEO services in Patia | Our specialists know which services local patients are actively searching for in medical care. We are the best team that connects hospitals and clinics with patients.',
            'Education | SEO and Digital Marketing in Saheed Nagar | Tired of competitor ads? Contact our SEO team for positioning your coaching center and college ahead of others.',
            "Hospitality | Hospitality SEO Business Solutions in {short} | Hotels and restaurants attract travelers and local people through the best reviews and GBP. We optimize those for your restaurant. Let's meet for coffee at your restaurant.",
        )),
    );
}

/* Split a textarea into trimmed, non-empty lines. */
function tachomind_city_lines($text) {
    return array_values(array_filter(array_map('trim', preg_split('/\r\n|\r|\n/', (string) $text)), 'strlen'));
}

/* Split a "a | b | c" line into trimmed parts. */
function tachomind_city_parts($line, $count) {
    return array_pad(array_map('trim', explode('|', $line, $count)), $count, '');
}

/* Collect everything page-city.php needs, with defaults and tokens resolved. */
function tachomind_get_city_data($post_id = null) {
    $post_id  = $post_id ?: get_the_ID();
    $defaults = tachomind_city_defaults();
    $raw      = array();
    $filled   = array();

    foreach ($defaults as $key => $default) {
        $value        = function_exists('get_field') ? get_field($key, $post_id) : '';
        $filled[$key] = is_string($value) && trim($value) !== '';
        $raw[$key]    = $filled[$key] ? trim($value) : $default;
    }

    $is_default_city = strcasecmp($raw['city_name'], $defaults['city_name']) === 0;
    if (!$filled['city_short'] && !$is_default_city) {
        $raw['city_short'] = $raw['city_name'];
    }
    if ($is_default_city) {
        foreach (tachomind_city_home_defaults() as $key => $default) {
            if (!$filled[$key]) {
                $raw[$key] = $default;
            }
        }
    }
    $tokens = array(
        '{city}'  => $raw['city_name'],
        '{short}' => $raw['city_short'],
        '{state}' => $raw['city_state'],
    );
    $t = function ($text) use ($tokens) {
        return strtr($text, $tokens);
    };

    // Areas: a different city must list its own; never show Bhubaneshwar areas elsewhere.
    $area_source = ($filled['areas'] || $is_default_city) ? $raw['areas'] : '';
    $areas = array();
    foreach (tachomind_city_lines($area_source) as $i => $line) {
        list($name, $x, $y) = tachomind_city_parts($line, 3);
        $areas[] = array(
            'name' => $name,
            'slug' => sanitize_title($name) ?: 'area-' . $i,
            'x'    => is_numeric($x) ? (int) $x : null,
            'y'    => is_numeric($y) ? (int) $y : null,
        );
    }
    // Pins without coordinates are spread on a ring inside the map outline.
    $n = count($areas);
    foreach ($areas as $i => &$area) {
        if ($area['x'] === null || $area['y'] === null) {
            $angle     = -M_PI / 2 + (2 * M_PI * $i / max($n, 1));
            $area['x'] = (int) round(240 + 140 * cos($angle));
            $area['y'] = (int) round(220 + 130 * sin($angle));
        }
    }
    unset($area);

    $industries = array();
    foreach (tachomind_city_lines($raw['industries']) as $line) {
        list($label, $title, $text) = tachomind_city_parts($line, 3);
        $industries[] = array('label' => $t($label), 'title' => $t($title), 'text' => $t($text));
    }

    $hero_stats = array();
    foreach (tachomind_city_lines($raw['hero_stats']) as $line) {
        list($value, $label) = tachomind_city_parts($line, 2);
        if ($value !== '' && $label !== '') {
            $hero_stats[] = array('value' => $t($value), 'label' => $t($label));
        }
    }

    $faqs = array();
    foreach (preg_split('/(\r\n|\r|\n)\s*(\r\n|\r|\n)/', $raw['faqs']) as $block) {
        $lines = tachomind_city_lines($block);
        if (count($lines) < 2) {
            continue;
        }
        $faqs[] = array('q' => $t(array_shift($lines)), 'a' => $t(implode(' ', $lines)));
    }

    $image   = function_exists('get_field') ? get_field('hero_image', $post_id) : null;
    $img_url = get_template_directory_uri() . '/assets/images/city/lingaraj-temple.webp';
    $img_w   = 1100;
    $img_h   = 849;
    if (is_array($image) && !empty($image['url'])) {
        $img_url = $image['url'];
        $img_w   = (int) $image['width'];
        $img_h   = (int) $image['height'];
    } elseif (!$is_default_city) {
        $img_url = '';
    }

    return array(
        'city'       => $raw['city_name'],
        'is_home_city' => $is_default_city,
        'short'      => $raw['city_short'],
        'state'      => $raw['city_state'],
        'landmark'   => $t($raw['landmark_name']),
        'hero_lead'  => $t($raw['hero_lead']),
        'hero_stats' => $hero_stats,
        'intro'      => $t($raw['city_intro']),
        'queries'    => array_map($t, tachomind_city_lines($raw['search_queries'])),
        'industries' => $industries,
        'areas'      => $areas,
        'faqs'       => $faqs,
        'whatsapp'   => preg_replace('/[^0-9X]/i', '', $raw['whatsapp']),
        'image'      => array('url' => $img_url, 'width' => $img_w, 'height' => $img_h),
    );
}

/* Field group shown on pages that use the City Landing Page template. */
add_action('acf/include_fields', function () {
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    $d    = tachomind_city_defaults();
    $hint = ' Leave empty to use the default. You can use {city}, {short} and {state}.';

    acf_add_local_field_group(array(
        'key'      => 'group_tm_city_page',
        'title'    => 'City Landing Page',
        'location' => array(array(array(
            'param'    => 'page_template',
            'operator' => '==',
            'value'    => 'page-city.php',
        ))),
        'position' => 'normal',
        'fields'   => array(
            array('key' => 'field_tm_city_tab_city', 'label' => 'City', 'type' => 'tab'),
            array('key' => 'field_tm_city_name', 'name' => 'city_name', 'label' => 'City Name', 'type' => 'text', 'placeholder' => $d['city_name'], 'instructions' => 'Used everywhere the page mentions the city.'),
            array('key' => 'field_tm_city_short', 'name' => 'city_short', 'label' => 'Short Name', 'type' => 'text', 'placeholder' => $d['city_short'], 'instructions' => 'Abbreviation, e.g. BBSR. Falls back to the city name.'),
            array('key' => 'field_tm_city_state', 'name' => 'city_state', 'label' => 'State', 'type' => 'text', 'placeholder' => $d['city_state']),
            array('key' => 'field_tm_city_whatsapp', 'name' => 'whatsapp', 'label' => 'WhatsApp Number', 'type' => 'text', 'placeholder' => $d['whatsapp'], 'instructions' => 'Country code + number, digits only. Audit requests from the form go here.'),

            array('key' => 'field_tm_city_tab_hero', 'label' => 'Hero', 'type' => 'tab'),
            array('key' => 'field_tm_city_hero_image', 'name' => 'hero_image', 'label' => 'Landmark Image', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'medium', 'instructions' => 'Transparent WebP/PNG cut-out works best (about 1100×850).'),
            array('key' => 'field_tm_city_landmark', 'name' => 'landmark_name', 'label' => 'Landmark Name', 'type' => 'text', 'placeholder' => $d['landmark_name'], 'instructions' => 'Shown in the image caption and alt text.'),
            array('key' => 'field_tm_city_hero_lead', 'name' => 'hero_lead', 'label' => 'Hero Text', 'type' => 'textarea', 'rows' => 3, 'placeholder' => $d['hero_lead'], 'instructions' => trim($hint)),
            array('key' => 'field_tm_city_hero_stats', 'name' => 'hero_stats', 'label' => 'Hero Stats', 'type' => 'textarea', 'rows' => 4, 'placeholder' => $d['hero_stats'], 'instructions' => 'One stat per line: Value | Label.'),
            array('key' => 'field_tm_city_queries', 'name' => 'search_queries', 'label' => 'Search Preview Queries', 'type' => 'textarea', 'rows' => 4, 'placeholder' => $d['search_queries'], 'instructions' => 'One query per line; they are typed out in the search preview.' . $hint),

            array('key' => 'field_tm_city_tab_ind', 'label' => 'Industries', 'type' => 'tab'),
            array('key' => 'field_tm_city_intro', 'name' => 'city_intro', 'label' => 'City Intro', 'type' => 'textarea', 'rows' => 3, 'placeholder' => $d['city_intro'], 'instructions' => 'Used in the Industries and Areas sections.' . $hint),
            array('key' => 'field_tm_city_industries', 'name' => 'industries', 'label' => 'Industry Cards', 'type' => 'textarea', 'rows' => 8, 'placeholder' => $d['industries'], 'instructions' => 'One card per line: Label | Heading | Text. The first six cards use the six background images.' . $hint),

            array('key' => 'field_tm_city_tab_areas', 'label' => 'Areas', 'type' => 'tab'),
            array('key' => 'field_tm_city_areas', 'name' => 'areas', 'label' => 'Areas Served', 'type' => 'textarea', 'rows' => 8, 'placeholder' => $d['areas'], 'instructions' => 'One area per line: Name | X | Y. X (0-480) and Y (0-440) place the pin on the map; leave them out to place pins automatically. Bhubaneshwar areas are only used for Bhubaneshwar.'),

            array('key' => 'field_tm_city_tab_faq', 'label' => 'FAQs', 'type' => 'tab'),
            array('key' => 'field_tm_city_faqs', 'name' => 'faqs', 'label' => 'FAQs', 'type' => 'textarea', 'rows' => 14, 'new_lines' => '', 'placeholder' => $d['faqs'], 'instructions' => 'First line is the question, following lines the answer. Separate FAQs with an empty line. Also output as FAQ schema.' . $hint),
        ),
    ));
});
