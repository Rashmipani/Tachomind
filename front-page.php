<?php
get_header();
while (have_posts()) {
    the_post();
    ?>
    
<style>
/* ============================================================
   CASE STUDY SECTION FIXES
   - Centers cards when 1/2/3 items are visible
   - Centers filter tabs
   - Adds premium no-results design
   ============================================================ */
   .hero-headline {
    opacity: 1 !important;
    visibility: visible !important;
    transform: none !important;
    animation: none !important;
    transition: none !important;
}

.hero-headline {
    font-family: Arial, Helvetica, sans-serif !important;
}

.case-section {
    position: relative;
    overflow: hidden;
}

.case-section .container {
    max-width: 1200px;
    margin-left: auto;
    margin-right: auto;
    padding-left: 20px;
    padding-right: 20px;
}

.case-section .section-header {
    text-align: center;
    max-width: 880px;
    margin: 0 auto 56px;
}

.case-section .section-badge {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    margin-bottom: 16px;
}

.case-section .section-header h2 {
    text-align: center;
}

.case-section .section-subtext {
    max-width: 760px;
    margin-left: auto;
    margin-right: auto;
    text-align: center;
}

/* Filter tabs centered */
.case-section .filter-tabs {
    display: flex !important;
    align-items: center;
    justify-content: center !important;
    flex-wrap: wrap;
    gap: 12px;
    width: 100%;
    margin: 0 auto 42px;
    text-align: center;
}

.case-section .filter-tab {
    appearance: none;
    border: 1px solid rgba(15, 23, 42, 0.12);
    background: #ffffff;
    color: #334155;
    padding: 11px 21px;
    min-height: 44px;
    border-radius: 999px;
    font-weight: 700;
    line-height: 1;
    cursor: pointer;
    transition: all 0.22s ease;
    box-shadow: 0 8px 22px rgba(15, 23, 42, 0.04);
}

.case-section .filter-tab:hover,
.case-section .filter-tab.active {
    border-color: #2563eb;
    background: #2563eb;
    color: #ffffff;
    box-shadow: 0 14px 30px rgba(37, 99, 235, 0.24);
    transform: translateY(-1px);
}

/* Cards grid changed to flex so visible cards always stay centered */
.case-section .case-grid {
    width: 100%;
    display: flex !important;
    flex-wrap: wrap;
    justify-content: center !important;
    align-items: stretch;
    gap: 28px;
    margin-left: auto;
    margin-right: auto;
}

.case-section .case-card {
    width: min(100%, 360px);
    flex: 0 1 360px;
    margin-left: 0 !important;
    margin-right: 0 !important;
    transition: opacity 0.22s ease, transform 0.22s ease;
}

.case-section .case-card.is-hidden {
    display: none !important;
}

.case-section .case-img-wrap {
    position: relative;
}

.case-section .case-country {
    position: absolute;
    left: 18px;
    bottom: 18px;
    z-index: 4;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    max-width: calc(100% - 36px);
    padding: 7px 11px;
    border-radius: 999px;
    background: rgba(255, 255, 255, 0.86);
    color: #0f172a;
    font-size: 13px;
    font-weight: 800;
    line-height: 1;
    backdrop-filter: blur(12px);
    box-shadow: 0 10px 24px rgba(15, 23, 42, 0.14);
}

/* Designed no-results card */
.case-section .case-no-results {
    width: min(760px, 100%);
    margin: 6px auto 0;
    padding: 44px 28px;
    border: 1px solid rgba(37, 99, 235, 0.14);
    border-radius: 30px;
    background:
        radial-gradient(circle at 20% 15%, rgba(37, 99, 235, 0.10), transparent 34%),
        linear-gradient(180deg, #ffffff 0%, #f7faff 100%);
    box-shadow: 0 22px 60px rgba(15, 23, 42, 0.08);
    text-align: center;
}

.case-section .case-no-results:not(.is-visible) {
    display: none !important;
}

.case-section .case-no-results.is-visible {
    display: grid !important;
    place-items: center;
}

.case-section .case-no-results-icon {
    width: 68px;
    height: 68px;
    display: grid;
    place-items: center;
    margin: 0 auto 18px;
    border-radius: 22px;
    background: #eff6ff;
    color: #2563eb;
    font-size: 30px;
    box-shadow: inset 0 0 0 1px rgba(37, 99, 235, 0.12);
}

.case-section .case-no-results h3 {
    margin: 0;
    color: #0f172a;
    font-size: clamp(24px, 3vw, 34px);
    line-height: 1.12;
    letter-spacing: -0.04em;
}

.case-section .case-no-results p {
    max-width: 560px;
    margin: 14px auto 0;
    color: #64748b;
    font-size: 16px;
    line-height: 1.65;
}

.case-section .case-no-results-actions {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 12px;
    margin-top: 24px;
}

.case-section .case-reset-filter,
.case-section .case-no-results .btn-dark {
    min-height: 46px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 0 18px;
    border-radius: 999px;
    font-weight: 800;
    text-decoration: none;
    cursor: pointer;
}

.case-section .case-reset-filter {
    border: 1px solid rgba(37, 99, 235, 0.20);
    background: #ffffff;
    color: #2563eb;
}

.case-section .case-reset-filter:hover {
    background: #eff6ff;
}

@media (max-width: 767px) {
    .case-section .container {
        padding-left: 16px;
        padding-right: 16px;
    }

    .case-section .section-header {
        margin-bottom: 34px;
    }

    .case-section .filter-tabs {
        margin-bottom: 30px;
        gap: 10px;
    }

    .case-section .filter-tab {
        padding: 10px 16px;
        font-size: 14px;
    }

    .case-section .case-grid {
        gap: 22px;
    }

    .case-section .case-card {
        width: 100%;
        flex-basis: 100%;
    }

    .case-section .case-no-results {
        padding: 34px 18px;
        border-radius: 24px;
    }

    .case-section .case-no-results-actions {
        flex-direction: column;
    }

    .case-section .case-reset-filter,
    .case-section .case-no-results .btn-dark {
        width: 100%;
    }
}
</style>
    <main>
      <!-- ============================================================
     SECTION 2 — HERO
     ============================================================ -->
    <section class="hero" id="hero">
        <!-- Decorative layers -->
        <div class="hero-dot-grid"></div>
        <div class="hero-glow-top"></div>
        <div class="hero-blob-left"></div>
        <div class="hero-blob-right"></div>

        <!-- Text content -->
        <div class="hero-content">
            <div class="hero-badge">
                <span>🏆</span>
                <span>Google &amp; Facebook Certified 8,000+ Accounts Handled</span>
            </div>

            <h1 class="hero-headline">
                Brilliant Minds At Work <br>
                <span class="gradient-text">We Help Companies Grow Digitally</span>
            </h1>

            <p class="hero-subheading">
                We use specialised lead generation and sales increment techniques to give your business a powerful
                presence in the digital world. SEO, Paid Ads, Web Design, Social Media &amp; more under one roof.
            </p>

            <div class="hero-btns">
                <a href="<?php echo home_url('/contact'); ?>" class="btn-primary">Talk To An Expert</a>
                <a href="<?php echo home_url('/seo'); ?>" class="btn-secondary">Our Services →</a>
            </div>

            <!-- Stats strip -->
            <div class="hero-stats">
                <div class="stat-item">
                    <div class="stat-value">$108M+</div>
                    <div class="stat-label">Revenue Generated for Clients</div>
                </div>
                <div class="stat-item">
                    <div class="stat-value">700+</div>
                    <div class="stat-label">Campaigns Managed</div>
                </div>
                <div class="stat-item">
                    <div class="stat-value">28+</div>
                    <div class="stat-label">Countries Served</div>
                </div>
                <div class="stat-item">
                    <div class="stat-value">98%</div>
                    <div class="stat-label">Client Retention Rate</div>
                </div>
            </div>
        </div>

        <!-- Dashboard Preview -->
        <div class="dashboard-wrap">
            <div class="browser-card">
                <!-- Chrome bar -->
                <div class="browser-chrome">
                    <div class="traffic-dot" style="background:#ff5f57;"></div>
                    <div class="traffic-dot" style="background:#ffbd2e;"></div>
                    <div class="traffic-dot" style="background:#28c840;"></div>
                    <div class="url-bar">
                        <span>🔒 app.tachomind.com/dashboard</span>
                    </div>
                </div>

                <!-- Dashboard body -->
                <div class="dashboard-body">
                    <!-- Sidebar -->
                    <div class="dash-sidebar">
                        <div class="sidebar-logo-row">
                            <div style="width:24px;height:24px;border-radius:6px;background:#2563eb;flex-shrink:0;">
                            </div>
                            <div style="height:12px;width:80px;border-radius:4px;background:#e2e8f0;"></div>
                        </div>
                        <div class="sidebar-item active-item">
                            <div class="sidebar-dot" style="background:#2563eb;"></div>
                            <div class="sidebar-bar" style="background:#bfdbfe;width:55%;"></div>
                        </div>
                        <div class="sidebar-item">
                            <div class="sidebar-dot" style="background:#cbd5e1;"></div>
                            <div class="sidebar-bar" style="background:#e2e8f0;width:63%;"></div>
                        </div>
                        <div class="sidebar-item">
                            <div class="sidebar-dot" style="background:#cbd5e1;"></div>
                            <div class="sidebar-bar" style="background:#e2e8f0;width:71%;"></div>
                        </div>
                        <div class="sidebar-item">
                            <div class="sidebar-dot" style="background:#cbd5e1;"></div>
                            <div class="sidebar-bar" style="background:#e2e8f0;width:79%;"></div>
                        </div>
                        <div class="sidebar-item">
                            <div class="sidebar-dot" style="background:#cbd5e1;"></div>
                            <div class="sidebar-bar" style="background:#e2e8f0;width:87%;"></div>
                        </div>
                    </div>

                    <!-- Main content -->
                    <div class="dash-main">
                        <!-- 4 stat mini-cards -->
                        <div class="dash-stats-grid">
                            <div class="dash-stat-card">
                                <div class="dash-stat-label">Organic Traffic</div>
                                <div class="dash-stat-value">+247%</div>
                                <div class="dash-stat-sub">vs last month</div>
                                <div class="dash-progress-bg">
                                    <div class="dash-progress-fill" style="width:55%;"></div>
                                </div>
                            </div>
                            <div class="dash-stat-card">
                                <div class="dash-stat-label">Keyword Rankings</div>
                                <div class="dash-stat-value">#1–3</div>
                                <div class="dash-stat-sub">42 keywords</div>
                                <div class="dash-progress-bg">
                                    <div class="dash-progress-fill" style="width:65%;"></div>
                                </div>
                            </div>
                            <div class="dash-stat-card">
                                <div class="dash-stat-label">Conversion Rate</div>
                                <div class="dash-stat-value">8.4%</div>
                                <div class="dash-stat-sub">+1.2% MoM</div>
                                <div class="dash-progress-bg">
                                    <div class="dash-progress-fill" style="width:75%;"></div>
                                </div>
                            </div>
                            <div class="dash-stat-card">
                                <div class="dash-stat-label">Domain Authority</div>
                                <div class="dash-stat-value">72</div>
                                <div class="dash-stat-sub">+5 pts</div>
                                <div class="dash-progress-bg">
                                    <div class="dash-progress-fill" style="width:85%;"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Bar chart -->
                        <div class="dash-chart-card">
                            <div class="dash-chart-label">Organic Traffic Growth Last 15 Weeks</div>
                            <div class="dash-bars" id="dashBars"><div class="dash-bar" style="height: 20px; background: rgba(37, 99, 235, 0.08);"></div><div class="dash-bar" style="height: 28px; background: rgba(37, 99, 235, 0.11);"></div><div class="dash-bar" style="height: 24px; background: rgba(37, 99, 235, 0.14);"></div><div class="dash-bar" style="height: 38px; background: rgba(37, 99, 235, 0.17);"></div><div class="dash-bar" style="height: 32px; background: rgba(37, 99, 235, 0.2);"></div><div class="dash-bar" style="height: 42px; background: rgba(37, 99, 235, 0.23);"></div><div class="dash-bar" style="height: 35px; background: rgba(37, 99, 235, 0.26);"></div><div class="dash-bar" style="height: 49px; background: rgba(37, 99, 235, 0.29);"></div><div class="dash-bar" style="height: 40px; background: rgba(37, 99, 235, 0.32);"></div><div class="dash-bar" style="height: 52px; background: rgba(37, 99, 235, 0.35);"></div><div class="dash-bar" style="height: 46px; background: rgba(37, 99, 235, 0.38);"></div><div class="dash-bar" style="height: 56px; background: rgba(37, 99, 235, 0.41);"></div><div class="dash-bar" style="height: 48px; background: linear-gradient(rgb(37, 99, 235), rgb(99, 102, 241));"></div><div class="dash-bar" style="height: 50px; background: linear-gradient(rgb(37, 99, 235), rgb(99, 102, 241));"></div><div class="dash-bar" style="height: 43px; background: linear-gradient(rgb(37, 99, 235), rgb(99, 102, 241));"></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
     SECTION 3 — CLIENT LOGOS (Scrolling Marquee)
     ============================================================ -->
    <section class="marquee-section">
        <div class="marquee-label">Certified partner of industry leaders &amp; platforms</div>
        <div class="marquee-outer">
            <div class="marquee-fade-left"></div>
            <div class="marquee-fade-right"></div>
            <div class="marquee-track animate-scroll" id="marqueeTrack"></div>
        </div>
    </section>

    <!-- ============================================================
     SECTION 4 — FEATURES / WHAT WE DO
     ============================================================ -->
    <section class="section features-section">
        <div class="container">
            <!-- Header -->
            <div class="section-header">
                <div class="section-badge">✦ What We Do</div>
                <h2>A Complete Digital Marketing Suite <span style="color:#2563eb">Under One Roof</span></h2>
                <p class="section-subtext">We provide a wide range of services to help companies grow digitally. In the
                    current market, digital is the right way to grow your business and we make it effortless.</p>
            </div>

            <!-- Service Cards -->
            <div class="services-grid">

                <!-- Card 1 -->
                <div class="service-card">
                    <div class="icon-box" style="background:#eff6ff;">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="3" width="20" height="14" rx="2" />
                            <path d="M8 21h8M12 17v4" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="card-title">Website Design &amp; Development</h3>
                        <p class="card-desc">Our 650+ years of combined developer experience means your website becomes
                            the nucleus of your online identity beautiful, fast, and SEO-ready from day one.</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="service-card">
                    <div class="icon-box" style="background:#f5f3ff;">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="22 7 13.5 15.5 8.5 10.5 2 17" />
                            <polyline points="16 7 22 7 22 13" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="card-title">Digital Marketing</h3>
                        <p class="card-desc">Full-service digital marketing packages with a team of 75+ specialists. We
                            combine all our services to give you effortless, results-driven growth online.</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="service-card">
                    <div class="icon-box" style="background:#ecfeff;">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#0891b2" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8" />
                            <path d="M21 21l-4.35-4.35" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="card-title">SEO</h3>
                        <p class="card-desc">Rated #1 SEO agency for small and medium businesses. 50+ highly experienced
                            SEO specialists delivering cost-effective organic growth and real rankings.</p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="service-card">
                    <div class="icon-box" style="background:#f0fdf4;">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#059669" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="18" cy="5" r="3" />
                            <circle cx="6" cy="12" r="3" />
                            <circle cx="18" cy="19" r="3" />
                            <line x1="8.59" y1="13.51" x2="15.42" y2="17.49" />
                            <line x1="15.41" y1="6.51" x2="8.59" y2="10.49" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="card-title">Social Media Optimisation</h3>
                        <p class="card-desc">Original content creation that grows your following on Facebook, Instagram,
                            Twitter, Pinterest &amp; more. Professional SMO backed by strategy and creativity.</p>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="service-card">
                    <div class="icon-box" style="background:#fef2f2;">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#dc2626" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4M10 17l5-5-5-5M13 12H3" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="card-title">ADS &amp; PPC</h3>
                        <p class="card-desc">18+ Google-certified team members. As Google and Facebook Partners, we
                            deliver affordable, high-converting paid ad campaigns that skyrocket your sales.</p>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="service-card">
                    <div class="icon-box" style="background:#fffbeb;">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#d97706" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                            <polyline points="14 2 14 8 20 8" />
                            <line x1="16" y1="13" x2="8" y2="13" />
                            <line x1="16" y1="17" x2="8" y2="17" />
                            <polyline points="10 9 9 9 8 9" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="card-title">Content Marketing</h3>
                        <p class="card-desc">Content is king. Our expert writers produce high-quality, keyword-rich
                            content that attracts your target audience and compounds your search rankings over time.</p>
                    </div>
                </div>

            </div><!-- /services-grid -->

            <!-- Stats strip -->
            <div class="features-stats-grid">
                <div class="feat-stat-card">
                    <div class="feat-stat-value">8,000+</div>
                    <div class="feat-stat-label">Accounts Handled</div>
                </div>
                <div class="feat-stat-card">
                    <div class="feat-stat-value">100+</div>
                    <div class="feat-stat-label">Team of Professionals</div>
                </div>
                <div class="feat-stat-card">
                    <div class="feat-stat-value">28+</div>
                    <div class="feat-stat-label">Countries Served</div>
                </div>
                <div class="feat-stat-card">
                    <div class="feat-stat-value">98%</div>
                    <div class="feat-stat-label">Client Retention</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
     SECTION 5 — SERVICES ACCORDION + IMAGE
     ============================================================ -->
    <section class="section services-section">
        <div class="container">
            <div class="services-inner">
                <!-- Left -->
                <div class="services-left">
                    <div class="section-badge">✦ Our Services</div>
                    <h2>Unlimited Access to <span style="color:#2563eb">Digital Marketing Excellence</span></h2>
                    <p class="section-subtext" style="margin-bottom:40px;">We have specialised teams for every digital
                        channel SEO, PPC, SMO, web development, and content. One agency. Complete solutions.
                        Measurable results.</p>

                    <!-- Accordion -->
                    <div class="accordion" id="accordion">

                        <div class="accordion-item active" data-index="0">
                            <div class="accordion-title">Search Engine Optimisation (SEO)</div>
                            <div class="accordion-body">
                                <p class="accordion-desc">We are the #1 SEO agency for small and medium businesses. Our
                                    50+ SEO specialists handle everything from technical audits and Core Web Vitals to
                                    keyword research and link building delivering cost-effective organic traffic that
                                    compounds over time.</p>
                                <a href="<?php echo home_url('/seo'); ?>" class="accordion-link">Learn More →</a>
                            </div>
                        </div>

                        <div class="accordion-item" data-index="1">
                            <div class="accordion-title">Google &amp; Social Media Ads (PPC)</div>
                            <div class="accordion-body" style="display:none;">
                                <p class="accordion-desc">With 18+ Google-certified team members and official Google
                                    &amp; Facebook Partner status, our PPC campaigns are precision-engineered to
                                    maximise conversions and minimise cost per acquisition sky-rocketing your digital
                                    sales.</p>
                                <a href="<?php echo home_url('/ppc'); ?>" class="accordion-link">Learn More →</a>
                            </div>
                        </div>

                        <div class="accordion-item" data-index="2">
                            <div class="accordion-title">Social Media Optimisation (SMO)</div>
                            <div class="accordion-body" style="display:none;">
                                <p class="accordion-desc">We grow your brand on Facebook, Instagram, Twitter, and
                                    Pinterest using original content creation strategies that build engaged communities
                                    and convert followers into customers.</p>
                                <a href="<?php echo home_url('/smo'); ?>/" class="accordion-link">Learn More →</a>
                            </div>
                        </div>

                        <div class="accordion-item" data-index="3">
                            <div class="accordion-title">Web Design &amp; Development</div>
                            <div class="accordion-body" style="display:none;">
                                <p class="accordion-desc">Our team brings 650+ years of combined experience. We build
                                    fast, secure, SEO-friendly websites that reflect your brand, convert visitors, and
                                    become the nucleus of your online identity.</p>
                                <a href="<?php echo home_url('/web-development'); ?>" class="accordion-link">Learn More →</a>
                            </div>
                        </div>

                        <div class="accordion-item" data-index="4">
                            <div class="accordion-title">Content Marketing</div>
                            <div class="accordion-body" style="display:none;">
                                <p class="accordion-desc">Content is the kingdom. Our industry-best writers create
                                    high-quality, grammatical-error-free content that drives rankings, attracts your
                                    target audience, and positions you as an authority.</p>
                                <a href="#" class="accordion-link">Learn More →</a>
                            </div>
                        </div>

                    </div><!-- /accordion -->

                    <a href="<?php echo home_url('/contact'); ?>" class="btn-primary" style="margin-top:32px;display:inline-block;">Talk To An
                        Expert</a>
                </div>

                <!-- Right: Image -->
                <div class="services-img-wrap">
                   <?php
$image_path = get_template_directory() . '/assets/images/Unlimited-Access-to-Digital-Marketing-Excellence.webp';
$image_url  = get_template_directory_uri() . '/assets/images/Unlimited-Access-to-Digital-Marketing-Excellence.webp';

$image_size = getimagesize($image_path);
?>

<picture>
    <img
        src="<?php echo esc_url($image_url); ?>"
        alt="Affordable SEO services built around rankings, traffic and revenue"
        class="services-img"
        width="<?php echo esc_attr($image_size[0]); ?>"
        height="<?php echo esc_attr($image_size[1]); ?>"
        loading="lazy"
        decoding="async"
    >
</picture>
                    <!-- Floating badge -->
                    <div class="img-float-badge">
                        <div class="float-icon-box">📈</div>
                        <div>
                            <p style="color:#0f172a;font-weight:700;font-size:0.9rem;margin:0;">$108M+ Revenue Generated
                            </p>
                            <p style="color:#64748b;font-size:0.75rem;margin:0;">Across 700+ managed campaigns worldwide
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
     SECTION 6 — CASE STUDIES
     ============================================================ -->
<!-- ============================================================
     SECTION 6 — CASE STUDIES
     Dynamic country + centered cards + designed no-results state
     ============================================================ -->
<?php
if (!function_exists('tachomind_case_pick_value')) {
    /**
     * Finds a value from a flat or nested ACF/meta array without breaking if a key is missing.
     */
    function tachomind_case_pick_value($source, $keys, $default = '') {
        if (empty($source) || !is_array($source)) {
            return $default;
        }

        foreach ($keys as $key) {
            if (isset($source[$key]) && $source[$key] !== '' && $source[$key] !== null) {
                return $source[$key];
            }
        }

        foreach ($source as $item) {
            if (is_array($item)) {
                $found = tachomind_case_pick_value($item, $keys, '');
                if ($found !== '') {
                    return $found;
                }
            }
        }

        return $default;
    }
}

if (!function_exists('tachomind_case_clean_text')) {
    function tachomind_case_clean_text($value) {
        if (is_array($value)) {
            if (!empty($value['name'])) {
                return $value['name'];
            }

            if (!empty($value['title'])) {
                return $value['title'];
            }

            return '';
        }

        return trim(wp_strip_all_tags((string) $value));
    }
}

$case_terms = get_terms(array(
    'taxonomy'   => 'case_study_category',
    'hide_empty' => false,
    'orderby'    => 'name',
    'order'      => 'ASC',
));

$home_case_query = new WP_Query(array(
    'post_type'      => 'case_study',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'orderby'        => array(
        'menu_order' => 'ASC',
        'date'       => 'DESC',
    ),
));

$has_case_posts = $home_case_query->post_count > 0;
?>


<section class="section case-section">
    <div class="container">

        <!-- Header -->
        <div class="section-header">
            <div class="section-badge">✦ Case Studies</div>
            <h2>Real Results for <span style="color:#2563eb">Real Businesses</span></h2>
            <p class="section-subtext">
                From emerging startups to established corporations across 28+ countries
                here's what we've achieved for our clients.
            </p>
        </div>

        <!-- Filter Tabs -->
        <?php if (!empty($case_terms) && !is_wp_error($case_terms)) : ?>
            <div class="filter-tabs" id="filterTabs">
                <button class="filter-tab active" type="button" data-filter="all">All</button>

                <?php foreach ($case_terms as $term) : ?>
                    <button
                        class="filter-tab"
                        type="button"
                        data-filter="<?php echo esc_attr($term->slug); ?>"
                    >
                        <?php echo esc_html($term->name); ?>
                    </button>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <!-- Cards Grid -->
        <div class="case-grid" id="caseGrid">

            <?php if ($home_case_query->have_posts()) : ?>
                <?php while ($home_case_query->have_posts()) : $home_case_query->the_post(); ?>

                    <?php
                    $fields = function_exists('tachomind_get_case_fields')
                        ? tachomind_get_case_fields(get_the_ID())
                        : array();

                    $case_terms_for_post = get_the_terms(get_the_ID(), 'case_study_category');

                    $case_category_name  = 'Case Study';
                    $case_category_slugs = '';

                    if (!empty($case_terms_for_post) && !is_wp_error($case_terms_for_post)) {
                        $case_category_name  = $case_terms_for_post[0]->name;
                        $case_category_slugs = implode(' ', wp_list_pluck($case_terms_for_post, 'slug'));
                    }

                    $case_image = function_exists('tachomind_get_case_image_url')
                        ? tachomind_get_case_image_url(get_the_ID(), 'large')
                        : get_the_post_thumbnail_url(get_the_ID(), 'large');

                    if (empty($case_image)) {
                        $case_image = get_template_directory_uri() . '/assets/images/case-study-placeholder.jpg';
                    }

                    $case_industry = !empty($fields['case_industry']) ? $fields['case_industry'] : '';
                    $case_excerpt  = !empty($fields['case_except_']) ? $fields['case_except_'] : get_the_excerpt();

                    $metric_value_1 = !empty($fields['metric_value_1']) ? $fields['metric_value_1'] : '';
                    $metric_label_1 = !empty($fields['metric_label_1_']) ? $fields['metric_label_1_'] : '';

                    $metric_value_2 = !empty($fields['metric_value_2']) ? $fields['metric_value_2'] : '';
                    $metric_label_2 = !empty($fields['metric_lable_2']) ? $fields['metric_lable_2'] : '';

                    /**
                     * Dynamic country/location.
                     * Add your exact ACF field key here if it is different.
                     */
                    $case_country = tachomind_case_pick_value($fields, array(
                        'case_country',
                        'case_country_',
                        'client_country',
                        'client_country_',
                        'country',
                        'country_',
                        'case_location',
                        'client_location',
                        'project_location',
                        'location',
                        'location_',
                    ));

                    $case_country = tachomind_case_clean_text($case_country);

                    /**
                     * Fallback 1: direct ACF fields if tachomind_get_case_fields() does not include country.
                     */
                    if (empty($case_country) && function_exists('get_field')) {
                        $direct_country_keys = array(
                            'case_country',
                            'case_country_',
                            'client_country',
                            'client_country_',
                            'country',
                            'country_',
                            'case_location',
                            'client_location',
                            'project_location',
                            'location',
                            'location_',
                        );

                        foreach ($direct_country_keys as $country_key) {
                            $country_value = get_field($country_key, get_the_ID());

                            if (!empty($country_value)) {
                                $case_country = tachomind_case_clean_text($country_value);
                                break;
                            }
                        }
                    }

                    /**
                     * Fallback 2: optional taxonomy named case_country if you create/use it.
                     */
                    if (empty($case_country) && taxonomy_exists('case_country')) {
                        $country_terms = get_the_terms(get_the_ID(), 'case_country');

                        if (!empty($country_terms) && !is_wp_error($country_terms)) {
                            $case_country = $country_terms[0]->name;
                        }
                    }
                    ?>

                    <div class="case-card" data-category="<?php echo esc_attr($case_category_slugs); ?>">
                        <div class="case-img-wrap">
                            <picture>
                                <img
                                    src="<?php echo esc_url($case_image); ?>"
                                    alt="<?php echo esc_attr(get_the_title()); ?> Case Study"
                                    class="case-img"
                                    loading="lazy"
                                    onerror="this.style.display='none'"
                                />
                            </picture>

                            <div class="case-overlay"></div>

                            <span class="case-badge">
                                <?php echo esc_html($case_category_name); ?>
                            </span>

                            <?php if (!empty($case_country)) : ?>
                                <span class="case-country">
                                    🌍 <?php echo esc_html($case_country); ?>
                                </span>
                            <?php endif; ?>
                        </div>

                        <div class="case-body">
                            <?php if (!empty($case_industry)) : ?>
                                <div class="case-industry">
                                    <?php echo esc_html($case_industry); ?>
                                </div>
                            <?php endif; ?>

                            <div class="case-client">
                                <?php the_title(); ?>
                            </div>

                            <?php if (!empty($case_excerpt)) : ?>
                                <p class="case-summary">
                                    <?php echo esc_html($case_excerpt); ?>
                                </p>
                            <?php endif; ?>

                            <?php if (!empty($metric_value_1) || !empty($metric_value_2)) : ?>
                                <div class="case-metrics-grid">

                                    <?php if (!empty($metric_value_1) || !empty($metric_label_1)) : ?>
                                        <div class="metric-card">
                                            <div class="metric-emoji">📈</div>
                                            <div class="metric-value">
                                                <?php echo esc_html($metric_value_1); ?>
                                            </div>
                                            <div class="metric-label">
                                                <?php echo esc_html($metric_label_1); ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if (!empty($metric_value_2) || !empty($metric_label_2)) : ?>
                                        <div class="metric-card">
                                            <div class="metric-emoji">🎯</div>
                                            <div class="metric-value">
                                                <?php echo esc_html($metric_value_2); ?>
                                            </div>
                                            <div class="metric-label">
                                                <?php echo esc_html($metric_label_2); ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                </div>
                            <?php endif; ?>

                            <a href="<?php the_permalink(); ?>" class="case-link">
                                View Full Case Study →
                            </a>
                        </div>
                    </div>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>

            <div
                class="case-no-results <?php echo $has_case_posts ? '' : 'is-visible'; ?>"
                id="caseNoResults"
                <?php echo $has_case_posts ? 'aria-hidden="true"' : 'aria-hidden="false"'; ?>
            >
               <div id="tmUniqueNoCaseStudiesBox" style="display: block;">
    <div class="tmUniqueNoCaseStudiesCard">
        <div class="tmUniqueNoCaseStudiesIcon">📭</div>
        <div class="tmUniqueNoCaseStudiesContent">
            <h3>No Case Studies Found</h3>
            <p>We do not have any case studies available for this category right now.</p>
        </div>
    </div>
</div>
            </div>

        </div><!-- /case-grid -->

        <div style="text-align:center;margin-top:40px;">
            <a href="<?php echo esc_url(get_post_type_archive_link('case_study')); ?>" class="btn-dark">
                View All Case Studies ↗
            </a>
        </div>

    </div>
</section>




    <!-- ============================================================
     SECTION 7 — TESTIMONIALS CAROUSEL
     ============================================================ -->
    <section class="section testimonials-section">
        <!-- Decorative blobs -->
        <div class="testi-blob-tr"></div>
        <div class="testi-blob-bl"></div>

        <div class="container">
            <!-- Header -->
            <div class="section-header" style="margin-bottom:56px;">
                <div class="section-badge">✦ Client Testimonials</div>
                <h2>What Our Clients Say</h2>
                <p class="section-subtext" style="max-width:512px;margin:0 auto;">Don't take our word for it. Here's
                    what business leaders from around the world say about working with TachoMind.</p>
            </div>

            <!-- Featured card -->
            <div class="testi-card" id="testiCard">
                <div class="testi-quote-deco">"</div>
                <div class="testi-inner">
                    <!-- Avatar block -->
                    <div class="testi-avatar-block">
                        <div class="testi-avatar-wrap">
                            <img id="testiAvatar" src="" alt="" class="testi-avatar" />
                            <div class="testi-avatar-fallback" id="testiAvatarFallback"></div>
                        </div>
                        <div class="testi-stars">★★★★★</div>
                    </div>
                    <!-- Text block -->
                    <div class="testi-text-block">
                        <p class="testi-quote" id="testiQuote"></p>
                        <div class="testi-name" id="testiName"></div>
                        <div class="testi-role" id="testiRole"></div>
                    </div>
                </div>

                <!-- Navigation -->
                <div class="testi-nav">
                    <div class="testi-dots" id="testiDots"></div>
                    <div class="testi-arrows">
                        <button class="testi-arrow" id="testiPrev" aria-label="Previous">&#8249;</button>
                        <button class="testi-arrow" id="testiNext" aria-label="Next">&#8250;</button>
                    </div>
                </div>
            </div>

            <!-- Mini thumbnail strip -->
            <div class="testi-strip" id="testiStrip"></div>
        </div>
    </section>

    <!-- ============================================================
     SECTION 8 — WHY CHOOSE TACHOMIND
     ============================================================ -->
    <section class="section trust-section">
        <div class="container">
            <!-- Header -->
            <div class="section-header">
                <div class="section-badge">✦ Why Choose TachoMind</div>
                <h2>Tested &amp; Trusted by <span style="color:#2563eb">Businesses Worldwide</span></h2>
                <p class="section-subtext">We focus on marketing innovation to get you numerous customers and leads. Our
                    sole mission is digital marketing strategies that help increase serious revenue for your business.
                </p>
            </div>

            <!-- Trust Cards -->
            <div class="trust-grid">

                <div class="trust-card">
                    <div class="icon-box" style="background:#eff6ff;margin-bottom:20px;">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                        </svg>
                    </div>
                    <h3 class="card-title">Proven Reliability</h3>
                    <p class="card-desc">SLA-backed delivery, monthly transparent reporting, and a dedicated account
                        manager who treats your business like their own.</p>
                </div>

                <div class="trust-card">
                    <div class="icon-box" style="background:#f5f3ff;margin-bottom:20px;">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="8" r="6" />
                            <path d="M15.477 12.89L17 22l-5-3-5 3 1.523-9.11" />
                        </svg>
                    </div>
                    <h3 class="card-title">Certified Expertise</h3>
                    <p class="card-desc">Official Google Partner, Facebook Partner, and a team of 18+ Google-certified
                        specialists. Your campaigns are in expert hands.</p>
                </div>

                <div class="trust-card">
                    <div class="icon-box" style="background:#f0fdf4;margin-bottom:20px;">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#059669" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10" />
                            <line x1="2" y1="12" x2="22" y2="12" />
                            <path
                                d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
                        </svg>
                    </div>
                    <h3 class="card-title">Global Reach</h3>
                    <p class="card-desc">28+ servicing countries. Whether you're targeting local search or a global
                        audience, we have the experience and network to deliver.</p>
                </div>

                <div class="trust-card">
                    <div class="icon-box" style="background:#fffbeb;margin-bottom:20px;">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#d97706" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="22 7 13.5 15.5 8.5 10.5 2 17" />
                            <polyline points="16 7 22 7 22 13" />
                        </svg>
                    </div>
                    <h3 class="card-title">ROI-Focused Growth</h3>
                    <p class="card-desc">Every strategy is built around measurable KPIs organic traffic, rankings,
                        leads, and revenue. If you don't succeed, we don't succeed.</p>
                </div>

            </div>

            <!-- Dark Stats Strip -->
            <div class="dark-stats-strip">
                <div class="dark-stat">
                    <div class="dark-stat-value">$108M+</div>
                    <div class="dark-stat-label">Revenue Generated for Clients</div>
                </div>
                <div class="dark-stat">
                    <div class="dark-stat-value">700+</div>
                    <div class="dark-stat-label">Campaigns Managed</div>
                </div>
                <div class="dark-stat">
                    <div class="dark-stat-value">8,000+</div>
                    <div class="dark-stat-label">Accounts Handled</div>
                </div>
                <div class="dark-stat">
                    <div class="dark-stat-value">98%</div>
                    <div class="dark-stat-label">Client Retention Rate</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
     SECTION 9 — INTEGRATIONS
     ============================================================ -->
    <section class="section integrations-section">
        <div class="container">
            <!-- Header -->
            <div class="section-header">
                <div class="section-badge">✦ Integrations</div>
                <h2>Connect to All Your Tools</h2>
                <p class="section-subtext">TachoMind integrates seamlessly with your existing marketing stack, providing
                    a unified view of your data to enhance efficiency and drive smarter decisions.</p>
            </div>

            <!-- Tools Grid -->
            <div class="tools-grid" id="toolsGrid"></div>

            <p style="text-align:center;margin-top:40px;font-size:0.875rem;color:#4B5772;">+ many more integrations
                available on request</p>
        </div>
    </section>

    <!-- ============================================================
     SECTION 10 — CTA / CONTACT FORM
     ============================================================ -->
    <section class="cta-section">
        <!-- Decorative layers -->
        <div class="cta-dot-grid"></div>
        <div class="cta-glow"></div>

        <div class="cta-inner">
            <div class="cta-grid">
                <!-- Left column -->
                <div class="cta-left">
                    <div class="cta-badge">🚀 Ready to grow?</div>
                    <h2 class="cta-headline">We've Driven Over <span class="cta-gradient-text">6,437,349 Leads</span>
                        for Clients Through Digital Marketing</h2>
                    <p class="cta-subtext">Fill in the form to instantly schedule a call with us. We have a vision for
                        your business let's talk.</p>

                    <div class="cta-contacts">
                        <!--<div class="cta-contact-item">-->
                        <!--    <div class="cta-icon-box">-->
                        <!--        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3b82f6"-->
                        <!--            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">-->
                        <!--            <path-->
                        <!--                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1.11h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.72a16 16 0 0 0 6 6l.94-.94a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z" />-->
                        <!--        </svg>-->
                        <!--    </div>-->
                        <!--    <div>-->
                        <!--        <div class="cta-contact-label">USA</div>-->
                        <!--        <a href="tel:+15183036708" class="cta-contact-value">+1-518-303-6708</a>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="cta-contact-item">
                            <div class="cta-icon-box">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3b82f6"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1.11h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.72a16 16 0 0 0 6 6l.94-.94a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z" />
                                </svg>
                            </div>
                            <div>
                                <div class="cta-contact-label">India</div>
                                <a href="tel:+918917643345" class="cta-contact-value">+91-8917643345</a>
                            </div>
                        </div>
                        <div class="cta-contact-item">
                            <div class="cta-icon-box">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#3b82f6"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path
                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                                    <polyline points="22,6 12,13 2,6" />
                                </svg>
                            </div>
                            <div>
                                <div class="cta-contact-label">Email us</div>
                                <a href="mailto:hi@tachomind.com" class="cta-contact-value">hi@tachomind.com</a>
                            </div>
                        </div>
                    </div>

                    <p class="cta-fine-print">No commitment required · Free strategy call · Results in 90 days or we
                        work free</p>
                </div>

                <!-- Right column: Form -->
                <div class="cta-form-wrap">
                    <h3 class="cta-form-title">Get Your Free Audit</h3>
                    <?php echo do_shortcode("[everest_form id='2267']"); ?>
                </div>
            </div>
        </div>
    </section>
    </main>
    
    <script>
document.addEventListener('DOMContentLoaded', function () {
    const tabs = document.querySelectorAll('.filter-tab');
    const cards = document.querySelectorAll('.case-card');
    const noResults = document.getElementById('caseNoResults');

    if (!tabs.length || !cards.length) return;

    tabs.forEach(function (tab) {
        tab.addEventListener('click', function () {
            const filter = this.getAttribute('data-filter');
            let visibleCount = 0;

            tabs.forEach(function (item) {
                item.classList.remove('active');
            });

            this.classList.add('active');

            cards.forEach(function (card) {
                const categories = (card.getAttribute('data-category') || '').split(' ');

                if (filter === 'all' || categories.includes(filter)) {
                    card.style.display = '';
                    visibleCount++;
                } else {
                    card.style.display = 'none';
                }
            });

            if (noResults) {
                noResults.style.display = visibleCount === 0 ? 'block' : 'none';
            }
        });
    });
});
</script>




<script>
document.addEventListener('DOMContentLoaded', function () {
    const caseSection = document.querySelector('.case-section');
    if (!caseSection) return;

    const filterTabs = caseSection.querySelectorAll('.filter-tab');
    const caseCards = caseSection.querySelectorAll('.case-card');
    const noResults = caseSection.querySelector('#caseNoResults');
    const noResultsTitle = caseSection.querySelector('#caseNoResultsTitle');
    const noResultsText = caseSection.querySelector('#caseNoResultsText');
    const resetButton = caseSection.querySelector('[data-filter-reset]');

    function getActiveLabel(button) {
        return button ? button.textContent.trim() : 'selected';
    }

    function updateNoResults(show, label) {
        if (!noResults) return;

        if (show) {
            noResults.classList.add('is-visible');
            noResults.setAttribute('aria-hidden', 'false');

            if (noResultsTitle) {
                noResultsTitle.textContent = label && label !== 'All'
                    ? 'No ' + label + ' case studies found yet'
                    : 'No case studies found yet';
            }

            if (noResultsText) {
                noResultsText.textContent = label && label !== 'All'
                    ? 'We are still adding case studies for ' + label + '. Please try another category or view all case studies.'
                    : 'We could not find any case studies right now. Please check back soon or view all case studies.';
            }
        } else {
            noResults.classList.remove('is-visible');
            noResults.setAttribute('aria-hidden', 'true');
        }
    }

    function applyFilter(filterValue, activeButton) {
        let visibleCount = 0;
        const label = getActiveLabel(activeButton);

        caseCards.forEach(function (card) {
            const categories = (card.getAttribute('data-category') || '').split(/\s+/).filter(Boolean);
            const shouldShow = filterValue === 'all' || categories.includes(filterValue);

            if (shouldShow) {
                card.classList.remove('is-hidden');
                visibleCount++;
            } else {
                card.classList.add('is-hidden');
            }
        });

        updateNoResults(visibleCount === 0, label);
    }

    filterTabs.forEach(function (button) {
        button.addEventListener('click', function () {
            const filterValue = button.getAttribute('data-filter') || 'all';

            filterTabs.forEach(function (tab) {
                tab.classList.remove('active');
            });

            button.classList.add('active');
            applyFilter(filterValue, button);
        });
    });

    if (resetButton) {
        resetButton.addEventListener('click', function () {
            const allButton = caseSection.querySelector('.filter-tab[data-filter="all"]');

            if (allButton) {
                allButton.click();
            } else {
                applyFilter('all', null);
            }
        });
    }

    const currentActive = caseSection.querySelector('.filter-tab.active');
    if (currentActive) {
        applyFilter(currentActive.getAttribute('data-filter') || 'all', currentActive);
    } else if (caseCards.length === 0) {
        updateNoResults(true, 'All');
    }
});



document.addEventListener('DOMContentLoaded', function () {

    const emailField = document.getElementById(
        'evf-2663-field_8aGh0ahEPV-5'
    );

    if (!emailField) {
        return;
    }

    // Prevent duplicates
    const existingLabel = document.querySelector(
        'label[for="' + emailField.id + '"]'
    );

    if (existingLabel) {
        existingLabel.classList.add('visually-hidden');
        return;
    }

    const label = document.createElement('label');

    label.setAttribute('for', emailField.id);
    label.className = 'visually-hidden';
    label.textContent = 'Email address';

    emailField.parentNode.insertBefore(label, emailField);

});
</script>

<?php
}
get_footer();
?>