<?php
get_header();
while (have_posts()) {
  the_post();
?>
<style>
    /* ==================================================
   TACHOMIND NEW SEO PRICING
   All classes isolated with tm-pricing prefix
================================================== */

.tm-pricing,
.tm-pricing * {
    box-sizing: border-box;
}

.tm-pricing {
    --tm-blue: #123d8d;
    --tm-blue-dark: #092d6c;
    --tm-yellow: #ffc400;
    --tm-text: #153b83;
    --tm-border: #dce6f7;
    --tm-light: #f6f9ff;

    position: relative;
    width: 100%;
    overflow: hidden;
    padding: 40px 20px 80px;
    background:
        radial-gradient(
            circle at 0% 15%,
            rgba(255, 196, 0, 0.07),
            transparent 24%
        ),
        radial-gradient(
            circle at 100% 75%,
            rgba(18, 61, 141, 0.08),
            transparent 28%
        ),
        #ffffff;
}

.tm-pricing-inner {
    width: 100%;
    max-width: 1180px;
    margin: 0 auto;
}


/* ==================================================
   EACH SECTION
================================================== */

.tm-pricing-section {
    position: relative;
    padding: 70px 0;
}

.tm-pricing-section:first-child {
    padding-top: 25px;
}

.tm-pricing-section + .tm-pricing-section {
    border-top: 1px solid #e4eaf5;
}


/* ==================================================
   SECTION TITLE
================================================== */

.tm-pricing-heading {
    max-width: 720px;
    margin-bottom: 34px;
}

.tm-pricing-eyebrow {
    display: inline-block;
    margin-bottom: 10px;

    color: var(--tm-blue);

    font-size: 12px;
    line-height: 1;
    font-weight: 800;

    letter-spacing: 2.2px;
    text-transform: uppercase;
}

.tm-pricing-heading h2 {
    margin: 0 0 12px !important;
    padding: 0 !important;

    color: var(--tm-blue) !important;

    font-size: clamp(30px, 4vw, 44px) !important;
    line-height: 1.1 !important;
    font-weight: 800 !important;

    letter-spacing: -1px;
}

.tm-pricing-heading p {
    max-width: 680px;

    margin: 0 !important;
    padding: 0 !important;

    color: #5270a8 !important;

    font-size: 16px !important;
    line-height: 1.65 !important;
}


/* ==================================================
   TWO COLUMNS
================================================== */

.tm-pricing-grid {
    display: grid !important;
    grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
    gap: 30px !important;

    width: 100%;
}


/* ==================================================
   CARD + BUTTON WRAPPER
================================================== */

.tm-plan-wrap {
    display: flex;
    flex-direction: column;

    min-width: 0;
}


/* ==================================================
   CARD
================================================== */

.tm-plan-card {
    position: relative;

    flex: 1;

    width: 100%;
    min-height: 430px;

    padding: 38px 36px 40px !important;

    overflow: hidden;

    background:
        linear-gradient(
            145deg,
            #ffffff 0%,
            #ffffff 65%,
            #f8faff 100%
        );

    border: 1px solid var(--tm-border) !important;
    border-radius: 20px !important;

    box-shadow:
        0 4px 10px rgba(19, 52, 111, 0.03),
        0 18px 50px rgba(19, 52, 111, 0.07);

    transition:
        transform .35s ease,
        box-shadow .35s ease,
        border-color .35s ease;
}

.tm-plan-card::after {
    content: "";

    position: absolute;

    width: 170px;
    height: 170px;

    right: -100px;
    bottom: -100px;

    border-radius: 50%;

    background: rgba(18, 61, 141, 0.04);

    pointer-events: none;
}

.tm-plan-wrap:hover .tm-plan-card {
    transform: translateY(-7px);

    border-color: rgba(18, 61, 141, 0.24) !important;

    box-shadow:
        0 10px 25px rgba(19, 52, 111, 0.06),
        0 25px 65px rgba(19, 52, 111, 0.13);
}


/* ==================================================
   FEATURED CARD
================================================== */

.tm-plan-card-featured {
    border: 1.5px solid rgba(255, 196, 0, 0.75) !important;

    background:
        linear-gradient(
            145deg,
            #ffffff 0%,
            #ffffff 55%,
            #fffaf0 100%
        );
}


/* ==================================================
   BADGES
================================================== */

.tm-plan-badge {
    display: inline-flex;
    align-items: center;
    justify-content: center;

    width: auto;
    min-width: 108px;

    margin: 0 0 20px !important;
    padding: 9px 18px !important;

    background: var(--tm-yellow);

    border-radius: 7px;

    color: #062d6c !important;

    font-size: 10px !important;
    font-weight: 800 !important;
    line-height: 1 !important;

    letter-spacing: .25px;
    text-transform: uppercase;
}

.tm-plan-small-label {
    margin-bottom: 17px;

    color: #7990bb;

    font-size: 10px;
    line-height: 1;
    font-weight: 800;

    letter-spacing: 1.6px;
    text-transform: uppercase;
}

.tm-plan-recommended {
    position: absolute;

    top: 25px;
    right: 25px;

    padding: 9px 17px;

    background: var(--tm-yellow);

    border-radius: 7px;

    color: #062d6c;

    font-size: 9px;
    line-height: 1;
    font-weight: 800;

    letter-spacing: .3px;
}


/* ==================================================
   PACKAGE TITLE
================================================== */

.tm-pricing .tm-plan-card h3 {
    max-width: 100%;

    margin: 0 0 16px !important;
    padding: 0 !important;

    color: var(--tm-blue) !important;

    font-size: 21px !important;
    line-height: 1.3 !important;
    font-weight: 800 !important;

    letter-spacing: -.2px;
}


/* ==================================================
   PRICE
================================================== */

.tm-plan-price {
    display: flex;
    align-items: baseline;
    flex-wrap: wrap;

    gap: 7px;

    margin: 0 0 22px !important;

    color: var(--tm-blue);
}

.tm-plan-price strong {
    color: var(--tm-blue) !important;

    font-size: 38px !important;
    line-height: 1 !important;
    font-weight: 800 !important;

    letter-spacing: -1px;
}

.tm-plan-price span {
    color: #627aa8 !important;

    font-size: 16px !important;
    line-height: 1 !important;
    font-weight: 600 !important;
}


/* ==================================================
   SMALL DIVIDER
================================================== */

.tm-plan-divider {
    width: 46px;
    height: 3px;

    margin: 0 0 23px;

    background: var(--tm-yellow);

    border-radius: 20px;
}


/* ==================================================
   FEATURES
================================================== */

.tm-pricing .tm-plan-features {
    display: flex !important;
    flex-direction: column !important;
    gap: 11px !important;

    margin: 0 !important;
    padding: 0 !important;

    list-style: none !important;
}

.tm-pricing .tm-plan-features li {
    position: relative;

    margin: 0 !important;
    padding: 0 0 0 29px !important;

    color: #284d8d !important;

    font-size: 15.5px !important;
    line-height: 1.45 !important;
    font-weight: 500 !important;

    list-style: none !important;
}

.tm-pricing .tm-plan-features li::before {
    content: "✓";

    position: absolute;

    left: 0;
    top: 1px;

    display: flex;
    align-items: center;
    justify-content: center;

    width: 19px;
    height: 19px;

    background: rgba(255, 196, 0, 0.16);

    border-radius: 50%;

    color: var(--tm-blue);

    font-size: 11px;
    font-weight: 900;
}


/* ==================================================
   BUTTON BELOW CARD
================================================== */

.tm-plan-button {
    display: flex !important;
    align-items: center !important;
    justify-content: space-between !important;

    width: 100%;

    margin: 14px 0 0 !important;
    padding: 16px 22px !important;

    background:
        linear-gradient(
            135deg,
            var(--tm-blue),
            var(--tm-blue-dark)
        ) !important;

    border: 0 !important;
    border-radius: 12px !important;

    color: #ffffff !important;

    text-decoration: none !important;

    font-size: 15px !important;
    line-height: 1 !important;
    font-weight: 700 !important;

    box-shadow: 0 10px 24px rgba(18, 61, 141, .18);

    transition:
        transform .25s ease,
        box-shadow .25s ease;
}

.tm-plan-button:hover {
    color: #ffffff !important;

    transform: translateY(-2px);

    box-shadow: 0 15px 30px rgba(18, 61, 141, .27);
}

.tm-btn-arrow {
    display: flex;
    align-items: center;
    justify-content: center;

    width: 30px;
    height: 30px;

    margin-left: 15px;

    background: rgba(255,255,255,.14);

    border-radius: 50%;

    color: #ffffff;

    font-size: 17px;

    transition: transform .25s ease;
}

.tm-plan-button:hover .tm-btn-arrow {
    transform: translateX(3px);
}


/* YELLOW BUTTON */

.tm-plan-button-yellow {
    background:
        linear-gradient(
            135deg,
            #ffd329,
            var(--tm-yellow)
        ) !important;

    color: var(--tm-blue-dark) !important;

    box-shadow: 0 10px 24px rgba(255, 196, 0, .22);
}

.tm-plan-button-yellow:hover {
    color: var(--tm-blue-dark) !important;

    box-shadow: 0 15px 30px rgba(255, 196, 0, .30);
}

.tm-plan-button-yellow .tm-btn-arrow {
    background: rgba(9, 45, 108, .10);
    color: var(--tm-blue-dark);
}


/* ==================================================
   TABLET
================================================== */

@media (max-width: 991px) {

    .tm-pricing {
        padding-left: 18px;
        padding-right: 18px;
    }

    .tm-pricing-grid {
        gap: 20px !important;
    }

    .tm-plan-card {
        padding: 30px 26px 32px !important;
    }

    .tm-plan-price strong {
        font-size: 34px !important;
    }

}


/* ==================================================
   MOBILE
================================================== */

@media (max-width: 767px) {

    .tm-pricing {
        padding:
            20px
            15px
            50px;
    }

    .tm-pricing-section {
        padding: 48px 0;
    }

    .tm-pricing-section:first-child {
        padding-top: 15px;
    }

    .tm-pricing-heading {
        margin-bottom: 25px;
    }

    .tm-pricing-heading h2 {
        font-size: 30px !important;
    }

    .tm-pricing-heading p {
        font-size: 14px !important;
    }

    .tm-pricing-grid {
        display: grid !important;
        grid-template-columns: 1fr !important;
        gap: 28px !important;
    }

    .tm-plan-card {
        min-height: auto;

        padding:
            29px
            22px
            30px !important;

        border-radius: 16px !important;
    }

    .tm-pricing .tm-plan-card h3 {
        font-size: 19px !important;
    }

    .tm-plan-price strong {
        font-size: 32px !important;
    }

    .tm-plan-price span {
        font-size: 14px !important;
    }

    .tm-pricing .tm-plan-features li {
        font-size: 14.5px !important;
    }

    .tm-plan-recommended {
        position: static;

        display: inline-flex;

        width: fit-content;

        margin-bottom: 18px;
    }

}

/* =========================================
   COMPACT PRICING CARD SIZE
========================================= */

.tm-pricing-inner {
    max-width: 1000px;
}

/* Smaller gap between cards */
.tm-pricing-grid {
    gap: 22px !important;
}

/* Smaller cards */
.tm-plan-card {
    min-height: 330px;
    padding: 25px 26px 27px !important;
    border-radius: 14px !important;
}

/* Smaller package title */
.tm-pricing .tm-plan-card h3 {
    font-size: 18px !important;
    margin-bottom: 12px !important;
}

/* Smaller pricing */
.tm-plan-price {
    margin-bottom: 15px !important;
}

.tm-plan-price strong {
    font-size: 30px !important;
}

.tm-plan-price span {
    font-size: 14px !important;
}

/* Smaller divider */
.tm-plan-divider {
    margin-bottom: 16px;
}

/* Smaller feature text */
.tm-pricing .tm-plan-features {
    gap: 7px !important;
}

.tm-pricing .tm-plan-features li {
    font-size: 14px !important;
    line-height: 1.35 !important;
    padding-left: 25px !important;
}

/* Smaller check icon */
.tm-pricing .tm-plan-features li::before {
    width: 17px;
    height: 17px;
    font-size: 10px;
}

/* Smaller badges */
.tm-plan-badge {
    min-width: 95px;
    padding: 7px 14px !important;
    margin-bottom: 14px !important;
    font-size: 9px !important;
}

.tm-plan-small-label {
    margin-bottom: 12px;
    font-size: 9px;
}

.tm-plan-recommended {
    top: 18px;
    right: 20px;
    padding: 7px 13px;
    font-size: 8px;
}

/* Smaller button */
.tm-plan-button {
    margin-top: 10px !important;
    padding: 12px 18px !important;
    font-size: 14px !important;
    border-radius: 9px !important;
}

.tm-btn-arrow {
    width: 26px;
    height: 26px;
    font-size: 15px;
}

/* Reduce space between pricing sections */
.tm-pricing-section {
    padding: 45px 0;
}


/* =========================================
   TABLET
========================================= */

@media (max-width: 991px) {

    .tm-pricing-inner {
        max-width: 900px;
    }

    .tm-plan-card {
        min-height: 320px;
        padding: 23px 22px 25px !important;
    }
}


/* =========================================
   MOBILE
========================================= */

@media (max-width: 767px) {

    .tm-pricing-grid {
        grid-template-columns: 1fr !important;
        gap: 22px !important;
    }

    .tm-plan-card {
        min-height: auto;
        padding: 23px 20px 24px !important;
    }

    .tm-plan-price strong {
        font-size: 28px !important;
    }

    .tm-pricing-section {
        padding: 35px 0;
    }
}
/* ==================================================
   VERY SMALL MOBILE
================================================== */

@media (max-width: 420px) {

    .tm-plan-card {
        padding:
            25px
            18px
            27px !important;
    }

    .tm-plan-price strong {
        font-size: 29px !important;
    }

    .tm-plan-button {
        padding: 14px 18px !important;
    }

}
</style>

<main id="seo-hero-banner">
        <section class="seo-hero">
            <div class="seo-hero-dot-grid"></div>
            <div class="seo-hero-glow"></div>
            <div class="seo-hero-inner">
                <div class="seo-breadcrumb">
                    <a href="<?php echo home_url('/'); ?>">Home</a>
                    <span>/</span>
                    <span>SEO</span>
                </div>

                <div class="seo-hero-grid">
                    <div class="seo-hero-copy">
                        <div class="seo-hero-badge">✦ SEO - Brilliant Minds At Work</div>
                        <h1>Get your website on top of Google Search Results with 100% Money Back Guarantee</h1>
                        <p>TachoMind is one of the leading digital marketing and SEO service provider agencies with a proven track record of success. We help businesses grow organic rankings, traffic and leads through practical on-page and off-page SEO.</p>
                        <div class="seo-price-pill">Prices start from <strong>$150 USD</strong></div>
                        <div class="seo-hero-actions">
                            <a href="<?php echo home_url('/contact'); ?>" class="seo-btn-primary">Talk To An Expert</a>
                            <a href="#pricing" class="seo-btn-ghost">View Packages</a>
                        </div>
                    </div>

                    <div class="seo-proof-panel" aria-label="TachoMind proof points">
                        <div class="seo-proof-card">
                            <span>We've generated over</span>
                            <strong>$108,231,120</strong>
                        </div>
                        <div class="seo-proof-card">
                            <span>We've managed</span>
                            <strong>700+</strong>
                        </div>
                        <div class="seo-proof-card">
                            <span>We're a</span>
                            <strong>Certified</strong>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="seo-intro">
            <div class="seo-two-col">
                <div class="seo-image-card">
                    <!--<img src="https://images.unsplash.com/photo-1562577309-4932fdd64cd1?auto=format&fit=crop&w=1000&q=80"-->
                    <!--    alt="SEO dashboard and search performance analytics" />-->
                        <img 
  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/seo/affordable-seo-services.webp' ); ?>" 
  alt="Affordable SEO services built around rankings, traffic and revenue"
  loading="lazy"
  decoding="async"
>
                </div>
                <div class="seo-copy">
                    <div class="seo-kicker">✦ Organic Growth</div>
                    <h2>Affordable SEO services built around rankings, traffic and revenue.</h2>
                    <p>If you own a business and did not get satisfactory results from your sales rate, then here we are. With us, you can make meaningful changes in your revenue by improving both on-page and off-page SEO.</p>
                    <p>With the best SEO agency, your business can get more traffic and leads from online search engines. Our marketing experts use unique SEO strategies so you can reach your targeted audience and choose a plan based on your requirement and budget.</p>
                </div>
            </div>
        </section>
        
        <section class="tm-pricing">

    <div class="tm-pricing-inner">

        <!-- =============================
             STARTER & GROWTH
        ============================== -->
        <div class="tm-pricing-section">

            <div class="tm-pricing-heading">
                <span class="tm-pricing-eyebrow">PACKAGE DETAILS</span>
                <h2>Starter &amp; Growth</h2>
                <p>Entry packages for focused local/service visibility.</p>
            </div>

            <div class="tm-pricing-grid">

                <!-- STARTER -->
                <div class="tm-plan-wrap">

                    <article class="tm-plan-card">

                        <div class="tm-plan-badge">SEO ONLY</div>

                        <h3>SEO STARTER</h3>

                        <div class="tm-plan-price">
                            <strong>$149</strong>
                            <span>/ month</span>
                        </div>

                        <div class="tm-plan-divider"></div>

                        <ul class="tm-plan-features">
                            <li>10 Keywords</li>
                            <li>No monthly blogs</li>
                            <li>100 backlinks</li>
                            <li>1 guest post</li>
                            <li>40 foundation technical checks</li>
                        </ul>

                    </article>

                    <a class="tm-plan-button"
                       href="<?php echo home_url('/contact'); ?>">
                        <span>Get Started</span>
                        <span class="tm-btn-arrow">→</span>
                    </a>

                </div>


                <!-- GROWTH -->
                <div class="tm-plan-wrap">

                    <article class="tm-plan-card tm-plan-card-highlight">

                        <div class="tm-plan-badge">SEO + GEO</div>

                        <h3>SEO + GEO GROWTH</h3>

                        <div class="tm-plan-price">
                            <strong>$249</strong>
                            <span>/ month</span>
                        </div>

                        <div class="tm-plan-divider"></div>

                        <ul class="tm-plan-features">
                            <li>25 Keywords</li>
                            <li>2 blogs / month</li>
                            <li>150 backlinks</li>
                            <li>GEO activities included</li>
                            <li>40 foundation technical checks</li>
                            <li>2 guest posts</li>
                        </ul>

                    </article>

                    <a class="tm-plan-button tm-plan-button-yellow"
                       href="<?php echo home_url('/contact'); ?>">
                        <span>Get Started</span>
                        <span class="tm-btn-arrow">→</span>
                    </a>

                </div>

            </div>
        </div>


        <!-- =============================
             SCALE & PRO
        ============================== -->
        <div class="tm-pricing-section">

            <div class="tm-pricing-heading">
                <span class="tm-pricing-eyebrow">PACKAGE DETAILS</span>
                <h2>Scale &amp; Pro</h2>
                <p>
                    Broader keyword coverage with deeper technical
                    and content execution.
                </p>
            </div>

            <div class="tm-pricing-grid">

                <!-- SCALE -->
                <div class="tm-plan-wrap">

                    <article class="tm-plan-card">

                        <div class="tm-plan-small-label">
                            BUILT TO SCALE
                        </div>

                        <h3>SEO + GEO SCALE</h3>

                        <div class="tm-plan-price">
                            <strong>$349</strong>
                            <span>/ month</span>
                        </div>

                        <div class="tm-plan-divider"></div>

                        <ul class="tm-plan-features">
                            <li>50 Keywords</li>
                            <li>3 blogs / month</li>
                            <li>220 backlinks</li>
                            <li>SEO + GEO activities</li>
                            <li>80 technical checks</li>
                            <li>Foundation + Growth checklist</li>
                            <li>3 guest posts</li>
                        </ul>

                    </article>

                    <a class="tm-plan-button"
                       href="<?php echo home_url('/contact'); ?>">
                        <span>Get Started</span>
                        <span class="tm-btn-arrow">→</span>
                    </a>

                </div>


                <!-- PRO -->
                <div class="tm-plan-wrap">

                    <article class="tm-plan-card tm-plan-card-featured">

                        <div class="tm-plan-recommended">
                            RECOMMENDED
                        </div>

                        <div class="tm-plan-small-label">
                            HIGH GROWTH
                        </div>

                        <h3>SEO + GEO PRO</h3>

                        <div class="tm-plan-price">
                            <strong>$599</strong>
                            <span>/ month</span>
                        </div>

                        <div class="tm-plan-divider"></div>

                        <ul class="tm-plan-features">
                            <li>100 Keywords</li>
                            <li>5 blogs / month</li>
                            <li>300 backlinks</li>
                            <li>SEO + GEO activities</li>
                            <li>80 technical checks</li>
                            <li>Foundation + Growth checklist</li>
                            <li>5 guest posts</li>
                        </ul>

                    </article>

                    <a class="tm-plan-button tm-plan-button-yellow"
                       href="<?php echo home_url('/contact'); ?>">
                        <span>Get Started</span>
                        <span class="tm-btn-arrow">→</span>
                    </a>

                </div>

            </div>
        </div>


        <!-- =============================
             ADVANCED & ENTERPRISE
        ============================== -->
        <div class="tm-pricing-section">

            <div class="tm-pricing-heading">
                <span class="tm-pricing-eyebrow">PACKAGE DETAILS</span>
                <h2>Advanced &amp; Enterprise</h2>
                <p>
                    For large sites, multi-service portfolios and
                    aggressive organic expansion.
                </p>
            </div>

            <div class="tm-pricing-grid">

                <!-- ADVANCED -->
                <div class="tm-plan-wrap">

                    <article class="tm-plan-card">

                        <div class="tm-plan-small-label">
                            ADVANCED SEO
                        </div>

                        <h3>SEO + GEO ADVANCED</h3>

                        <div class="tm-plan-price">
                            <strong>$1149</strong>
                            <span>/ month</span>
                        </div>

                        <div class="tm-plan-divider"></div>

                        <ul class="tm-plan-features">
                            <li>250 Keywords</li>
                            <li>7 blogs / month</li>
                            <li>400 backlinks</li>
                            <li>SEO + GEO activities</li>
                            <li>112 technical checks</li>
                            <li>Advanced rendering &amp; index diagnostics</li>
                            <li>7 guest posts</li>
                        </ul>

                    </article>

                    <a class="tm-plan-button"
                       href="<?php echo home_url('/contact'); ?>">
                        <span>Get Started</span>
                        <span class="tm-btn-arrow">→</span>
                    </a>

                </div>


                <!-- ENTERPRISE -->
                <div class="tm-plan-wrap">

                    <article class="tm-plan-card tm-plan-card-featured">

                        <div class="tm-plan-recommended">
                            FULL COVERAGE
                        </div>

                        <div class="tm-plan-small-label">
                            ENTERPRISE SEO
                        </div>

                        <h3>SEO + GEO ENTERPRISE</h3>

                        <div class="tm-plan-price">
                            <strong>$1749</strong>
                            <span>/ month</span>
                        </div>

                        <div class="tm-plan-divider"></div>

                        <ul class="tm-plan-features">
                            <li>500 Keywords</li>
                            <li>10 blogs / month</li>
                            <li>600 backlinks</li>
                            <li>SEO + GEO activities</li>
                            <li>FULL 130 technical checks</li>
                            <li>Enterprise faceting, parameters &amp; lifecycle</li>
                            <li>9 guest posts</li>
                        </ul>

                    </article>

                    <a class="tm-plan-button tm-plan-button-yellow"
                       href="<?php echo home_url('/contact'); ?>">
                        <span>Get Started</span>
                        <span class="tm-btn-arrow">→</span>
                    </a>

                </div>

            </div>
        </div>

    </div>

</section>

        <!--<section class="seo-pricing" id="pricing">-->
        <!--    <div class="seo-section-head">-->
        <!--        <div class="seo-kicker">✦ Affordable SEO Pricing</div>-->
        <!--        <h2>Our Packages</h2>-->
        <!--        <p>Choose a monthly SEO package based on your budget, target area and growth goals.</p>-->
        <!--    </div>-->

        <!--    <div class="seo-package-grid">-->
        <!--        <article class="seo-package-card">-->
        <!--            <div class="seo-package-top"><span>A</span><strong>Starter</strong></div>-->
        <!--            <ul>-->
        <!--                <li>$150 / month</li>-->
        <!--                <li>$200 / month</li>-->
        <!--                <li>$250 / month</li>-->
        <!--                <li>$300 / month</li>-->
        <!--            </ul>-->
        <!--            <a href="<?php echo home_url('/contact'); ?>">Get Started</a>-->
        <!--        </article>-->
        <!--        <article class="seo-package-card featured">-->
        <!--            <div class="seo-package-top"><span>A+</span><strong>Growth</strong></div>-->
        <!--            <ul>-->
        <!--                <li>$200 / month</li>-->
        <!--                <li>$300 / month</li>-->
        <!--                <li>$400 / month</li>-->
        <!--                <li>$500 / month</li>-->
        <!--            </ul>-->
        <!--            <a href="<?php echo home_url('/contact'); ?>">Get Started</a>-->
        <!--        </article>-->
        <!--        <article class="seo-package-card">-->
        <!--            <div class="seo-package-top"><span>B</span><strong>Business</strong></div>-->
        <!--            <ul>-->
        <!--                <li>$300 / month</li>-->
        <!--                <li>$400 / month</li>-->
        <!--                <li>$500 / month</li>-->
        <!--                <li>$600 / month</li>-->
        <!--            </ul>-->
        <!--            <a href="<?php echo home_url('/contact'); ?>">Get Started</a>-->
        <!--        </article>-->
        <!--        <article class="seo-package-card">-->
        <!--            <div class="seo-package-top"><span>B+</span><strong>Scale</strong></div>-->
        <!--            <ul>-->
        <!--                <li>$450 / month</li>-->
        <!--                <li>$550 / month</li>-->
        <!--                <li>$650 / month</li>-->
        <!--                <li>$750 / month</li>-->
        <!--            </ul>-->
        <!--            <a href="<?php echo home_url('/contact'); ?>">Get Started</a>-->
        <!--        </article>-->
        <!--        <article class="seo-package-card">-->
        <!--            <div class="seo-package-top"><span>C</span><strong>Authority</strong></div>-->
        <!--            <ul>-->
        <!--                <li>$850 / month</li>-->
        <!--                <li>$1000 / month</li>-->
        <!--                <li>$1100 / month</li>-->
        <!--                <li>$1200 / month</li>-->
        <!--            </ul>-->
        <!--            <a href="<?php echo home_url('/contact'); ?>">Get Started</a>-->
        <!--        </article>-->
        <!--        <article class="seo-package-card">-->
        <!--            <div class="seo-package-top"><span>C+</span><strong>Enterprise</strong></div>-->
        <!--            <ul>-->
        <!--                <li>$1200 / month</li>-->
        <!--                <li>$1500 / month</li>-->
        <!--                <li>$1750 / month</li>-->
        <!--                <li>$2000 / month</li>-->
        <!--            </ul>-->
        <!--            <a href="<?php echo home_url('/contact'); ?>">Get Started</a>-->
        <!--        </article>-->
        <!--    </div>-->
        <!--</section>-->

        <section class="seo-services">
            <div class="seo-section-head">
                <div class="seo-kicker">✦ The Best SEO Services We Provide</div>
                <h2>What kind of services can you receive under our plans?</h2>
                <p>Every plan is built around technical SEO, content quality, local visibility, authority building and clear monthly reporting.</p>
            </div>

            <div class="seo-services-grid">
                <article>
                    <span>01</span>
                    <h3>Website Technical Audit</h3>
                    <p>We check your website quality, loading speed, crawlability, internal linking, meta tags, security protocols and errors so improvements can be prioritized.</p>
                </article>
                <article>
                    <span>02</span>
                    <h3>Duplicate Content Check</h3>
                    <p>We analyze whether your website content is duplicate or fresh because search engines do not reward copied content.</p>
                </article>
                <article>
                    <span>03</span>
                    <h3>Competitor Research</h3>
                    <p>We understand your business, goals, products and services, then analyze competitor strengths and weaknesses to help you compete.</p>
                </article>
                <article>
                    <span>04</span>
                    <h3>Monthly Activity Report</h3>
                    <p>Our team prepares a monthly activity report covering reachability, efficiency, performance, keyword work and search rankings.</p>
                </article>
                <article>
                    <span>05</span>
                    <h3>Content Optimization</h3>
                    <p>We improve product and service content with keyword research, copywriting support and fresh, unique, plagiarism-free content.</p>
                </article>
                <article>
                    <span>06</span>
                    <h3>Google My Business Page Setup</h3>
                    <p>We set up and optimize your Google Business presence to help your business appear in local search and generate better enquiries.</p>
                </article>
                <article>
                    <span>07</span>
                    <h3>Local Business Directory Listing</h3>
                    <p>Directory listings help users easily reach you, build local credibility and convert searchers into clients.</p>
                </article>
                <article>
                    <span>08</span>
                    <h3>Local and Global Classified Posting</h3>
                    <p>We classify your business for local or global listings based on your goals and the market you want to reach.</p>
                </article>
                <article>
                    <span>09</span>
                    <h3>Page Speed Analysis</h3>
                    <p>We review page loading speed because slow pages hurt user interest and can reduce ranking potential.</p>
                </article>
                <article>
                    <span>10</span>
                    <h3>Article Creation</h3>
                    <p>Articles help bring targeted traffic, explain your services and convert visitors into leads with useful information.</p>
                </article>
                <article>
                    <span>11</span>
                    <h3>Document Submission</h3>
                    <p>After completing SEO work, we submit documents with website information, activity and reports for clear visibility.</p>
                </article>
            </div>
        </section>

        <section class="seo-plan-details">
            <div class="seo-two-col reverse">
                <div class="seo-copy">
                    <div class="seo-kicker">✦ Plan Deliverables</div>
                    <h2>From technical fixes to link building, we cover the SEO fundamentals.</h2>
                    <p>Blog post creation is one of the most important factors for ranking a website. Regular blogs and articles can make your website more reachable and increase traffic.</p>
                    <p>Once competitor analysis is complete, we move to keyword research. We focus on terms related to your business, including long-tail keywords that are searched on Google.</p>
                    <p>We also optimize header tags, meta tags, images, Google Analytics, Google Search Console, sitemaps, robots.txt, canonical tags, responsiveness and link building.</p>
                </div>
                <div class="seo-checklist">
                    <div>Google Search Console Setup</div>
                    <div>Hyperlink Analysis</div>
                    <div>Sitemap Creation</div>
                    <div>Responsiveness Analysis</div>
                    <div>Robots.txt Creation</div>
                    <div>Canonical Tag Setup</div>
                    <div>Meta Tag Optimization</div>
                    <div>Image Submission</div>
                </div>
            </div>
        </section>

<section class="tm-seo-faq-section">
  <div class="tm-seo-container">
    <div class="tm-seo-section-head">
      <span class="tm-seo-badge">✦ Need an answer now?</span>
      <h2>FAQ</h2>
      <p>Have a question for our staff? We are available to help via live chat.</p>
    </div>

    <div class="tm-seo-faq-list">
      <div class="tm-seo-faq-item active">
        <button class="tm-seo-faq-question" type="button" aria-expanded="true">
          <span>Do your SEO plans include every possible step needed for growth?</span>
          <span class="tm-seo-faq-icon">+</span>
        </button>
        <div class="tm-seo-faq-answer">
          <div class="tm-seo-faq-answer-inner">
            <p>Overall, we have every possible step in our SEO service provider plans that can help your business flourish. First, we analyze your website and business, and according to that we move to our next steps.</p>
          </div>
        </div>
      </div>

      <div class="tm-seo-faq-item">
        <button class="tm-seo-faq-question" type="button" aria-expanded="false">
          <span>Will I get monthly reports?</span>
          <span class="tm-seo-faq-icon">+</span>
        </button>
        <div class="tm-seo-faq-answer">
          <div class="tm-seo-faq-answer-inner">
            <p>Yes, of course. The team at TachoMind provides monthly reports at the end of the month.</p>
          </div>
        </div>
      </div>

      <div class="tm-seo-faq-item">
        <button class="tm-seo-faq-question" type="button" aria-expanded="false">
          <span>How long does SEO take?</span>
          <span class="tm-seo-faq-icon">+</span>
        </button>
        <div class="tm-seo-faq-answer">
          <div class="tm-seo-faq-answer-inner">
            <p>SEO is a tough process, and it takes almost 5 to 6 months to rank a keyword. In very difficult cases, it may take one year depending on your business and keywords.</p>
          </div>
        </div>
      </div>

      <div class="tm-seo-faq-item">
        <button class="tm-seo-faq-question" type="button" aria-expanded="false">
          <span>How much does SEO cost?</span>
          <span class="tm-seo-faq-icon">+</span>
        </button>
        <div class="tm-seo-faq-answer">
          <div class="tm-seo-faq-answer-inner">
            <p>SEO is a long-term process, and the cost may vary depending on your business, budget and choice of keywords. For further details, talk with our executives.</p>
          </div>
        </div>
      </div>

      <div class="tm-seo-faq-item">
        <button class="tm-seo-faq-question" type="button" aria-expanded="false">
          <span>Can SEO improve my sales rate?</span>
          <span class="tm-seo-faq-icon">+</span>
        </button>
        <div class="tm-seo-faq-answer">
          <div class="tm-seo-faq-answer-inner">
            <p>If you own a business and did not get satisfactory results, SEO can help increase rankings and traffic, which can improve your sales rate.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


        <!--<section class="seo-faq">-->
        <!--    <div class="seo-section-head">-->
        <!--        <div class="seo-kicker">✦ Need an answer now?</div>-->
        <!--        <h2>FAQ</h2>-->
        <!--        <p>Have a question for our staff? We are available to help via live chat.</p>-->
        <!--    </div>-->
        <!--    <div class="seo-faq-list">-->
        <!--        <details open>-->
        <!--            <summary>Do your SEO plans include every possible step needed for growth?</summary>-->
        <!--            <p>Overall, we have every possible step in our SEO service provider plans that can help your business flourish. First, we analyze your website and business, and according to that we move to our next steps.</p>-->
        <!--        </details>-->
        <!--        <details>-->
        <!--            <summary>Will I get monthly reports?</summary>-->
        <!--            <p>Yes, of course. The team at TachoMind provides monthly reports at the end of the month.</p>-->
        <!--        </details>-->
        <!--        <details>-->
        <!--            <summary>How long does SEO take?</summary>-->
        <!--            <p>SEO is a tough process, and it takes almost 5 to 6 months to rank a keyword. In very difficult cases, it may take one year depending on your business and keywords.</p>-->
        <!--        </details>-->
        <!--        <details>-->
        <!--            <summary>How much does SEO cost?</summary>-->
        <!--            <p>SEO is a long-term process, and the cost may vary depending on your business, budget and choice of keywords. For further details, talk with our executives.</p>-->
        <!--        </details>-->
        <!--        <details>-->
        <!--            <summary>Can SEO improve my sales rate?</summary>-->
        <!--            <p>If you own a business and did not get satisfactory results, SEO can help increase rankings and traffic, which can improve your sales rate.</p>-->
        <!--        </details>-->
        <!--    </div>-->
        <!--</section>-->

        <section class="seo-contact-strip">
            <!--<a href="tel:+15183036708">USA: +1-518-303-6708</a>-->
            <a href="tel:+918917643345">India: +91-8917643345</a>
            <a href="mailto:hi@tachomind.com">hi@tachomind.com</a>
        </section>

        <section class="seo-cta">
            <div class="seo-hero-dot-grid"></div>
            <div class="seo-cta-inner">
                <h2>You have a vision. <span>We have a team to get you there.</span></h2>
                <p>Ready to speak with a marketing expert? Give us a ring.</p>
                <div class="seo-cta-actions">
                    <a href="<?php echo home_url('/contact'); ?>" class="seo-btn-primary">Get a Free Audit</a>
                    <a href="tel:+918917643345" class="seo-btn-ghost">Call Us +91-8917643345</a>
                </div>
            </div>
        </section>
    </main>
    
    <script>
        
        /* ============================================================
   TACHOMIND — SEO PAGE JAVASCRIPT (seo.js)
   ============================================================ */

(function () {
  'use strict';

  /* ----------------------------------------------------------
     1. NAVBAR SCROLL DETECTION
     SEO page navbar starts white (scrolled) at all times
     since it sits above a light-coloured hero.
     ---------------------------------------------------------- */
  const navbar = document.getElementById('navbar');

  window.addEventListener('scroll', function () {
    navbar.classList.add('scrolled');
  }, { passive: true });

  /* ----------------------------------------------------------
     2. MOBILE MENU TOGGLE
     ---------------------------------------------------------- */
  const hamburger = document.getElementById('hamburger');
  const mobileMenu = document.getElementById('mobileMenu');

  if (hamburger && mobileMenu) {
    hamburger.addEventListener('click', function () {
      mobileMenu.classList.toggle('open');
    });

    document.querySelectorAll('.mobile-link, .mobile-cta').forEach(function (link) {
      link.addEventListener('click', function () {
        mobileMenu.classList.remove('open');
      });
    });
  }

  /* ----------------------------------------------------------
     3. NEWSLETTER
     ---------------------------------------------------------- */
  const newsletterBtn = document.getElementById('newsletterBtn');
  if (newsletterBtn) {
    newsletterBtn.addEventListener('click', function () {
      const emailInput = document.getElementById('newsletterEmail');
      if (emailInput && emailInput.value.includes('@')) {
        newsletterBtn.textContent = '✓ Done!';
        newsletterBtn.style.background = '#059669';
        emailInput.value = '';
        setTimeout(function () {
          newsletterBtn.textContent = 'Subscribe';
          newsletterBtn.style.background = '';
        }, 3000);
      } else if (emailInput) {
        emailInput.style.borderColor = 'rgba(239,68,68,0.5)';
        setTimeout(function () { emailInput.style.borderColor = ''; }, 2000);
      }
    });
  }

  /* ----------------------------------------------------------
     4. CARD ENTRANCE ANIMATIONS
     ---------------------------------------------------------- */
  if ('IntersectionObserver' in window) {
    const cards = document.querySelectorAll('.seo-proof-card, .seo-package-card, .seo-services-grid article, .seo-checklist div');

    const observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.style.opacity = '1';
          entry.target.style.transform = 'translateY(0)';
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.08, rootMargin: '0px 0px -32px 0px' });

    cards.forEach(function (card) {
      card.style.opacity = '0';
      card.style.transform = 'translateY(16px)';
      card.style.transition = 'opacity 350ms ease, transform 350ms ease';
      observer.observe(card);
    });
  }

})();

        
    </script>
    
    <script>
        document.addEventListener("DOMContentLoaded", function () {
  const faqList = document.querySelector(".tm-seo-faq-list");

  if (!faqList) return;

  const faqButtons = faqList.querySelectorAll(".tm-seo-faq-question");

  faqButtons.forEach(function (button) {
    button.addEventListener("click", function () {
      const currentItem = button.closest(".tm-seo-faq-item");
      const isActive = currentItem.classList.contains("active");

      faqList.querySelectorAll(".tm-seo-faq-item").forEach(function (item) {
        item.classList.remove("active");

        const itemButton = item.querySelector(".tm-seo-faq-question");
        if (itemButton) {
          itemButton.setAttribute("aria-expanded", "false");
        }
      });

      if (!isActive) {
        currentItem.classList.add("active");
        button.setAttribute("aria-expanded", "true");
      }
    });
  });
});
    </script>
   <?php
}
get_footer();
?>