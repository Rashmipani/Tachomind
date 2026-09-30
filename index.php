<?php
get_header();

    $blog_page_url = home_url( '/blog/' );
    ?>
<style>
    .seo-contact-inner {
    max-width: 1024px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(2, 1fr)!important;
    gap: 20px;
}

@media screen and (max-width: 576px) {
    .seo-contact-inner  {
        grid-template-columns: repeat(1, 1fr)!important;
    }
}
</style>
     <!-- ============================================================
     SECTION 1 — HERO (Light Blue Gradient + SERP Mockup)
     ============================================================ -->
    <section class="seo-hero">
        <div class="seo-hero-blob-tr"></div>
        <div class="seo-hero-blob-bl"></div>

        <div class="seo-hero-inner">
            <!-- Breadcrumb -->
            <div class="seo-breadcrumb">
                <a href="<?php echo home_url('/'); ?>" class="seo-breadcrumb-home">Home</a>
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#94a3b8" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="9 18 15 12 9 6" />
                </svg>
                <span style="color:#2563eb;">Blog</span>
            </div>

            <div class="seo-hero-grid">

                <!-- LEFT: Text content -->
                <div class="seo-hero-left">
                    <div class="seo-hero-badge">✦ Blog – Briliant Minds At Work</div>

                    <h1 class="seo-hero-h1">
                        <span class="line1">TachoMind</span>
                        <span class="line2">Blog</span>
                    </h1>

                    <p class="seo-hero-sub">
                        We are Tachomind, The brilliant minds at work to serve all your Digital needs. We focus on
                        marketing innovation in digital marketing and web design to get you numerous customers and
                        leads.
                    </p>

                    <div class="seo-hero-btns">
                        <a href="<?php echo home_url('contact/'); ?>" class="seo-btn-primary">Talk To An Expert</a>
                        <a href="<?php echo esc_url( $blog_page_url ); ?>" class="seo-btn-secondary" data-scroll-target="articles">View Articles</a>
                    </div>

                    <!-- Mini-stats -->
                    <div class="seo-mini-stats">
                        <div>
                            <div class="seo-mini-stat-value">$108,231,120</div>
                            <div class="seo-mini-stat-label">We've generated over</div>
                        </div>
                        <div>
                            <div class="seo-mini-stat-value">700+</div>
                            <div class="seo-mini-stat-label">We've managed</div>
                        </div>
                        <div>
                            <div class="seo-mini-stat-value">Certified</div>
                            <div class="seo-mini-stat-label">We're a</div>
                        </div>
                    </div>
                </div>

                <!-- RIGHT: SERP Mockup -->
                <div class="seo-hero-right">
                    <div class="serp-wrap">

                        <!-- Search bar -->
                        <div class="serp-searchbar">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#94a3b8"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;">
                                <circle cx="11" cy="11" r="8" />
                                <path d="M21 21l-4.35-4.35" />
                            </svg>
                            <span class="serp-search-query">best seo agency for my business</span>
                            <div class="serp-search-btn">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#fff"
                                    stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="11" cy="11" r="8" />
                                    <path d="M21 21l-4.35-4.35" />
                                </svg>
                            </div>
                        </div>

                        <!-- SERP panel -->
                        <div class="serp-panel">

                            <!-- Result #1 — TachoMind (highlighted) -->
                            <div class="serp-result-1">
                                <div class="serp-result-top">
                                    <span class="serp-ad-badge">Ad</span>
                                    <span class="serp-domain-1">tachomind.com</span>
                                    <span class="serp-rank-1">#1</span>
                                </div>
                                <div class="serp-title-1">TachoMind – SEO &amp; Digital Marketing Agency</div>
                                <div class="serp-snippet-1">Brilliant minds at work. 8000+ accounts. 98% client
                                    retention. Talk to an expert today.</div>
                            </div>

                            <!-- Result #2 — Competitor -->
                            <div class="serp-result-2">
                                <div class="serp-result-top">
                                    <span class="serp-domain-muted">competitor-seo.com</span>
                                    <span class="serp-rank-muted">#2</span>
                                </div>
                                <div class="serp-title-muted">Generic SEO Services – Basic Plans</div>
                                <div class="serp-snippet-muted">Standard packages starting from...</div>
                            </div>

                            <!-- Result #3 — Competitor -->
                            <div class="serp-result-3">
                                <div class="serp-result-top">
                                    <span class="serp-domain-muted">another-agency.com</span>
                                    <span class="serp-rank-muted">#3</span>
                                </div>
                                <div class="serp-title-muted">SEO Solutions – Monthly Reports</div>
                                <div class="serp-snippet-muted">We help your website rank better...</div>
                            </div>

                            <!-- Stats bar -->
                            <div class="serp-stats-bar">
                                <div class="serp-stat-cell">
                                    <div class="serp-stat-val">8000+</div>
                                    <div class="serp-stat-lbl">Accounts</div>
                                </div>
                                <div class="serp-stat-cell">
                                    <div class="serp-stat-val">100+</div>
                                    <div class="serp-stat-lbl">Team</div>
                                </div>
                                <div class="serp-stat-cell">
                                    <div class="serp-stat-val">28+</div>
                                    <div class="serp-stat-lbl">Countries</div>
                                </div>
                                <div class="serp-stat-cell">
                                    <div class="serp-stat-val">98%</div>
                                    <div class="serp-stat-lbl">Retention</div>
                                </div>
                            </div>
                        </div><!-- /serp-panel -->

                    </div><!-- /serp-wrap -->
                </div><!-- /seo-hero-right -->

            </div><!-- /seo-hero-grid -->
        </div><!-- /seo-hero-inner -->
    </section>

    <!-- ============================================================
     SECTION 3 — STATS STRIP
     ============================================================ -->
    <section class="seo-stats-strip">
        <div class="seo-stats-grid">

            <div class="seo-stat-card" style="background:#eff6ff; border:1px solid rgba(37,99,235,0.12);">
                <div class="seo-stat-icon-box">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                        <circle cx="9" cy="7" r="4" />
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                    </svg>
                </div>
                <div class="seo-stat-value" style="color:#2563eb;">8000+</div>
                <div class="seo-stat-label">Accounts Handled</div>
            </div>

            <div class="seo-stat-card" style="background:#f5f3ff; border:1px solid rgba(124,58,237,0.12);">
                <div class="seo-stat-icon-box">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="8" r="6" />
                        <path d="M15.477 12.89L17 22l-5-3-5 3 1.523-9.11" />
                    </svg>
                </div>
                <div class="seo-stat-value" style="color:#7c3aed;">100+</div>
                <div class="seo-stat-label">Team Of Professional</div>
            </div>

            <div class="seo-stat-card" style="background:#ecfeff; border:1px solid rgba(8,145,178,0.12);">
                <div class="seo-stat-icon-box">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0891b2" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10" />
                        <line x1="2" y1="12" x2="22" y2="12" />
                        <path
                            d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
                    </svg>
                </div>
                <div class="seo-stat-value" style="color:#0891b2;">28+</div>
                <div class="seo-stat-label">Servicing Countries</div>
            </div>

            <div class="seo-stat-card" style="background:#f0fdf4; border:1px solid rgba(5,150,105,0.12);">
                <div class="seo-stat-icon-box">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#059669" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="22 7 13.5 15.5 8.5 10.5 2 17" />
                        <polyline points="16 7 22 7 22 13" />
                    </svg>
                </div>
                <div class="seo-stat-value" style="color:#059669;">98%</div>
                <div class="seo-stat-label">Client Retention</div>
            </div>

        </div>
    </section>

 <!-- ============================================================
     SECTION 2 — SERVICE NAVIGATION BAR
     ============================================================ -->
<?php
$selected_cat = isset( $_GET['blog_cat'] ) ? sanitize_title( wp_unslash( $_GET['blog_cat'] ) ) : 'all';
$current_page = isset( $_GET['pg'] ) ? max( 1, absint( $_GET['pg'] ) ) : 1;

$service_tabs = array(
    'all' => array(
        'label'          => 'All',
        'active_style'   => 'background:#111827; color:#fff; border:1px solid #111827; box-shadow:0 4px 14px rgba(17,24,39,0.25);',
        'inactive_style' => 'background:#f9fafb; color:#111827; border:1px solid rgba(17,24,39,0.12);',
        'active_icon'    => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12h18"></path><path d="M3 6h18"></path><path d="M3 18h18"></path></svg>',
        'inactive_icon'  => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#111827" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12h18"></path><path d="M3 6h18"></path><path d="M3 18h18"></path></svg>',
    ),
    'digital-marketing' => array(
        'label'          => 'Digital Marketing',
        'active_style'   => 'background:#2563eb; color:#fff; border:1px solid #2563eb; box-shadow:0 4px 14px rgba(37,99,235,0.30);',
        'inactive_style' => 'background:#eff6ff; color:#2563eb; border:1px solid rgba(37,99,235,0.18);',
        'active_icon'    => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2A19.79 19.79 0 0 1 12 18a19.5 19.5 0 0 1-5-5 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 5.6 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L9.91 9.72a16 16 0 0 0 6 6l.94-.94a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>',
        'inactive_icon'  => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2A19.79 19.79 0 0 1 12 18a19.5 19.5 0 0 1-5-5 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 5.6 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L9.91 9.72a16 16 0 0 0 6 6l.94-.94a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>',
    ),
    'ppc' => array(
        'label'          => 'PPC',
        'active_style'   => 'background:#7c3aed; color:#fff; border:1px solid #7c3aed; box-shadow:0 4px 14px rgba(124,58,237,0.30);',
        'inactive_style' => 'background:#f5f3ff; color:#7c3aed; border:1px solid rgba(124,58,237,0.18);',
        'active_icon'    => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>',
        'inactive_icon'  => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>',
    ),
    'seo' => array(
        'label'          => 'SEO',
        'active_style'   => 'background:#0891b2; color:#fff; border:1px solid #0891b2; box-shadow:0 4px 14px rgba(8,145,178,0.30);',
        'inactive_style' => 'background:#ecfeff; color:#0891b2; border:1px solid rgba(8,145,178,0.18);',
        'active_icon'    => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><path d="M21 21l-4.35-4.35"></path></svg>',
        'inactive_icon'  => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#0891b2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><path d="M21 21l-4.35-4.35"></path></svg>',
    ),
    'smo' => array(
        'label'          => 'SMO',
        'active_style'   => 'background:#059669; color:#fff; border:1px solid #059669; box-shadow:0 4px 14px rgba(5,150,105,0.30);',
        'inactive_style' => 'background:#f0fdf4; color:#059669; border:1px solid rgba(5,150,105,0.18);',
        'active_icon'    => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>',
        'inactive_icon'  => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#059669" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>',
    ),
    'web-development' => array(
        'label'          => 'Web Development',
        'active_style'   => 'background:#d97706; color:#fff; border:1px solid #d97706; box-shadow:0 4px 14px rgba(217,119,6,0.30);',
        'inactive_style' => 'background:#fffbeb; color:#d97706; border:1px solid rgba(217,119,6,0.18);',
        'active_icon'    => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>',
        'inactive_icon'  => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#d97706" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>',
    ),
);

$current_tab_label = isset( $service_tabs[ $selected_cat ]['label'] ) ? $service_tabs[ $selected_cat ]['label'] : 'All';

$tag_styles = array(
    'seo'               => 'color:#0891b2; background:#ecfeff; border-color:rgba(8,145,178,0.12);',
    'social-media'      => 'color:#2563eb; background:#eff6ff; border-color:rgba(37,99,235,0.12);',
    'digital-marketing' => 'color:#dc2626; background:#fef2f2; border-color:rgba(220,38,38,0.12);',
    'marketing'         => 'color:#d97706; background:#fffbeb; border-color:rgba(217,119,6,0.12);',
    'technology'        => 'color:#7c3aed; background:#f5f3ff; border-color:rgba(124,58,237,0.12);',
    'business'          => 'color:#059669; background:#f0fdf4; border-color:rgba(5,150,105,0.12);',
    'legal'             => 'color:#7c3aed; background:#f5f3ff; border-color:rgba(124,58,237,0.12);',
    'uncategorized'     => 'color:#6b7280; background:#f9fafb; border-color:rgba(107,114,128,0.12);',
    'uncategorised'     => 'color:#6b7280; background:#f9fafb; border-color:rgba(107,114,128,0.12);',
    'smo'               => 'color:#059669; background:#f0fdfa; border-color:rgba(5,150,105,0.12);',
    'ppc'               => 'color:#7c3aed; background:#f5f3ff; border-color:rgba(124,58,237,0.12);',
    'web-development'   => 'color:#d97706; background:#fffbeb; border-color:rgba(217,119,6,0.12);',
);

$query_args = array(
    'post_type'           => 'post',
    'post_status'         => 'publish',
    'posts_per_page'      => 10,
    'paged'               => $current_page,
    'ignore_sticky_posts' => true,
);

if ( 'all' !== $selected_cat ) {
    $query_args['tax_query'] = array(
        array(
            'taxonomy' => 'category',
            'field'    => 'slug',
            'terms'    => $selected_cat,
        ),
    );
}

$articles_query = new WP_Query( $query_args );
?>

<nav class="svc-nav-bar" aria-label="Service pages">
    <div class="svc-nav-inner">
        <?php
        foreach ( $service_tabs as $slug => $tab ) {
            if ( 'all' === $slug ) {
                $tab_url = add_query_arg( 'pg', 1, remove_query_arg( array( 'blog_cat', 'pg' ), $blog_page_url ) );
            } else {
                $tab_url = add_query_arg(
                    array(
                        'blog_cat' => $slug,
                    ),
                    remove_query_arg( 'pg', $blog_page_url )
                );

                $tab_url = add_query_arg( 'pg', 1, $tab_url );
            }

            $is_active = ( $selected_cat === $slug );
            $tab_class = $is_active ? 'svc-nav-pill active' : 'svc-nav-pill inactive';
            $tab_style = $is_active ? $tab['active_style'] : $tab['inactive_style'];
            $tab_icon  = $is_active ? $tab['active_icon'] : $tab['inactive_icon'];
            ?>
            <a href="<?php echo esc_url( $tab_url ); ?>" class="<?php echo esc_attr( $tab_class ); ?>" style="<?php echo esc_attr( $tab_style ); ?>">
                <?php echo $tab_icon; ?>
                <?php echo esc_html( $tab['label'] ); ?>
            </a>
            <?php
        }
        ?>
    </div>
</nav>

<section class="seo-articles" id="articles">
    <div class="seo-articles-inner">

        <div class="articles-header">
            <div class="articles-header-left">
                <div class="articles-badge">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                        <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                    </svg>
                    SEO Resources &amp; Guides
                </div>
                <h2 class="articles-h2"><?php echo esc_html( $current_tab_label ); ?> Articles &amp; Guides</h2>
            </div>

            <a href="<?php echo esc_url( remove_query_arg( array( 'blog_cat', 'pg' ), $blog_page_url ) ); ?>" class="articles-view-all">
                View all posts
            </a>
        </div>

        <?php
        if ( $articles_query->have_posts() ) {
            $post_count  = 0;
            $grid_opened = false;

            while ( $articles_query->have_posts() ) {
                $articles_query->the_post();
                $post_count++;

                $post_id   = get_the_ID();
                $post_link = get_permalink( $post_id );

                $categories    = get_the_category( $post_id );
                $category_name = ! empty( $categories ) ? $categories[0]->name : 'Uncategorized';
                $category_slug = ! empty( $categories ) ? $categories[0]->slug : 'uncategorized';

                $tag_style = isset( $tag_styles[ $category_slug ] )
                    ? $tag_styles[ $category_slug ]
                    : 'color:#6b7280; background:#f9fafb; border-color:rgba(107,114,128,0.12);';

                $thumbnail_url = get_the_post_thumbnail_url( $post_id, 'large' );

                if ( ! $thumbnail_url ) {
                    $thumbnail_url = 'https://via.placeholder.com/800x500?text=Blog+Post';
                }

                if ( 1 === $post_count ) {
                    ?>
                    <div class="featured-article">
                        <a href="<?php echo esc_url( $post_link ); ?>" class="featured-article-link">
                            <div class="featured-img-wrap">
                                <img src="<?php echo esc_url( $thumbnail_url ); ?>" alt="<?php echo esc_attr( get_the_title( $post_id ) ); ?>" class="featured-img" loading="lazy" />
                            </div>
                            <div class="featured-content">
                                <span class="article-tag" style="<?php echo esc_attr( $tag_style ); ?>">
                                    <?php echo esc_html( $category_name ); ?>
                                </span>
                                <h3 class="featured-title"><?php echo esc_html( get_the_title( $post_id ) ); ?></h3>
                            </div>
                        </a>
                    </div>

                    <div class="articles-grid">
                    <?php
                    $grid_opened = true;
                } else {
                    ?>
                    <a href="<?php echo esc_url( $post_link ); ?>" class="article-card">
                        <div class="article-img-wrap">
                            <img src="<?php echo esc_url( $thumbnail_url ); ?>" alt="<?php echo esc_attr( get_the_title( $post_id ) ); ?>" class="article-img" loading="lazy" />
                        </div>
                        <div class="article-card-body">
                            <span class="article-tag-sm" style="<?php echo esc_attr( $tag_style ); ?>">
                                <?php echo esc_html( $category_name ); ?>
                            </span>
                            <h3 class="article-card-title"><?php echo esc_html( get_the_title( $post_id ) ); ?></h3>
                        </div>
                    </a>
                    <?php
                }
            }

            if ( $grid_opened ) {
                echo '</div>';
            }

            if ( $articles_query->max_num_pages > 1 ) {
                $total_pages = (int) $articles_query->max_num_pages;
                ?>
                <div class="articles-pagination">
                    <ul class="page-numbers">

                        <?php if ( $current_page > 1 ) : ?>
                            <?php
                            $prev_args = array(
                                'pg' => $current_page - 1,
                            );

                            if ( 'all' !== $selected_cat ) {
                                $prev_args['blog_cat'] = $selected_cat;
                            }
                            ?>
                            <li>
                                <a class="prev page-numbers" href="<?php echo esc_url( add_query_arg( $prev_args, $blog_page_url ) ); ?>">
                                    &laquo; Prev
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php for ( $i = 1; $i <= $total_pages; $i++ ) : ?>
                            <?php
                            $page_args = array(
                                'pg' => $i,
                            );

                            if ( 'all' !== $selected_cat ) {
                                $page_args['blog_cat'] = $selected_cat;
                            }
                            ?>

                            <li>
                                <?php if ( $i === $current_page ) : ?>
                                    <span aria-current="page" class="page-numbers current">
                                        <?php echo esc_html( $i ); ?>
                                    </span>
                                <?php else : ?>
                                    <a class="page-numbers" href="<?php echo esc_url( add_query_arg( $page_args, $blog_page_url ) ); ?>">
                                        <?php echo esc_html( $i ); ?>
                                    </a>
                                <?php endif; ?>
                            </li>
                        <?php endfor; ?>

                        <?php if ( $current_page < $total_pages ) : ?>
                            <?php
                            $next_args = array(
                                'pg' => $current_page + 1,
                            );

                            if ( 'all' !== $selected_cat ) {
                                $next_args['blog_cat'] = $selected_cat;
                            }
                            ?>
                            <li>
                                <a class="next page-numbers" href="<?php echo esc_url( add_query_arg( $next_args, $blog_page_url ) ); ?>">
                                    Next &raquo;
                                </a>
                            </li>
                        <?php endif; ?>

                    </ul>
                </div>
                <?php
            }

            wp_reset_postdata();
        } else {
            ?>
            <div class="articles-empty">
                <p>No posts found in <?php echo esc_html( $current_tab_label ); ?>.</p>
            </div>
            <?php
        }
        ?>
    </div>
</section>

    <!-- ============================================================
     SECTION 5 — CONTACT STRIP
     ============================================================ -->
    <section class="seo-contact-strip">
        <div class="seo-contact-inner">

            <!--<a href="tel:+15183036708" class="seo-contact-item">-->
            <!--    <div class="seo-contact-icon">-->
            <!--        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2"-->
            <!--            stroke-linecap="round" stroke-linejoin="round">-->
            <!--            <path-->
            <!--                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1.11h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.72a16 16 0 0 0 6 6l.94-.94a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z" />-->
            <!--        </svg>-->
            <!--    </div>-->
            <!--    <div>-->
            <!--        <div class="seo-contact-label">Find us – Call USA</div>-->
            <!--        <div class="seo-contact-value">+1-518-303-6708</div>-->
            <!--    </div>-->
            <!--</a>-->

            <a href="tel:+918917643345" class="seo-contact-item">
                <div class="seo-contact-icon">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path
                            d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1.11h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.72a16 16 0 0 0 6 6l.94-.94a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z" />
                    </svg>
                </div>
                <div>
                    <div class="seo-contact-label">Call India</div>
                    <div class="seo-contact-value">+91-8917643345</div>
                </div>
            </a>

            <a href="mailto:hello@tachomind.com" class="seo-contact-item">
                <div class="seo-contact-icon">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                        <polyline points="22,6 12,13 2,6" />
                    </svg>
                </div>
                <div>
                    <div class="seo-contact-label">Mail us</div>
                    <div class="seo-contact-value">hi@tachomind.com</div>
                </div>
            </a>

        </div>
    </section>

    <!-- ============================================================
     SECTION 6 — BOTTOM CTA (Dark Navy)
     ============================================================ -->
    <section class="seo-cta">
        <div class="seo-cta-glow"></div>
        <div class="seo-cta-inner">
            <div class="seo-cta-icon">
                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10" />
                    <line x1="22" y1="12" x2="18" y2="12" />
                    <line x1="6" y1="12" x2="2" y2="12" />
                    <line x1="12" y1="2" x2="12" y2="6" />
                    <line x1="12" y1="18" x2="12" y2="22" />
                </svg>
            </div>
            <h2 class="seo-cta-h2">
                You have a vision. <span class="seo-cta-grad">We have a team to get you there.</span>
            </h2>
            <p class="seo-cta-sub1">Ready to speak with a marketing expert? Give us a ring.</p>
            <p class="seo-cta-sub2">We are Tachomind, The brilliant minds at work to serve all your Digital needs. We
                focus on marketing innovation in digital marketing and web design to get you numerous customers and
                leads.</p>
            <div class="seo-cta-btns">
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="seo-cta-primary">
                    Talk To An Expert ↗
                </a>
                <a href="tel:+918917643345" class="seo-cta-phone">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path
                            d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1.11h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.72a16 16 0 0 0 6 6l.94-.94a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z" />
                    </svg>
                    +91-8917643345
                </a>
            </div>
        </div>
    </section>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        var scrollLinks = document.querySelectorAll('[data-scroll-target]');

        scrollLinks.forEach(function (link) {
            link.addEventListener('click', function (event) {
                var targetId = link.getAttribute('data-scroll-target');
                var target = document.getElementById(targetId);

                if (!target) {
                    return;
                }

                event.preventDefault();
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            });
        });
    });
    </script>
    <?php


get_footer();
?>