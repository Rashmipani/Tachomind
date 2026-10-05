<?php
get_header();
while (have_posts()) {
  the_post();
?>
  
  <style>
      .ppc-contact-strip-inner {
    max-width: 900px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(2, 1fr)!important;
    gap: 20px;
}
@media screen and (max-width: 576px) {
    .ppc-contact-strip-inner {
        grid-template-columns: repeat(1, 1fr)!important;
    }
}

.ppc-v5 {
    --blue: #2563EB;
    --light-blue: #BFDBFE;
    --yellow: #FFCD00;
    --dark: #0F172A;
    --text: #475569;
    --soft: #EFF6FF;

    padding: 100px 20px;

    background:
        linear-gradient(
            180deg,
            #ffffff 0%,
            #F8FBFF 100%
        );
}

.ppc-v5 *,
.ppc-v5 *::before,
.ppc-v5 *::after {
    box-sizing: border-box;
}

.ppc-v5-container {
    max-width: 1280px;
    margin: 0 auto;
}


/* HEADER */

.ppc-v5-header {
    display: flex;
    align-items: flex-end;
    justify-content: space-between;

    gap: 30px;

    margin-bottom: 50px;
}

.ppc-v5-badge {
    display: inline-block;

    margin-bottom: 17px;
    padding: 8px 15px;

    border-radius: 50px;

    background: var(--soft);
    border: 1px solid var(--light-blue);

    color: var(--blue);

    font-size: 12px;
    font-weight: 700;
}

.ppc-v5-header h2 {
    max-width: 850px;
    margin: 0;

    color: var(--dark);

    font-size: clamp(38px, 5vw, 60px);
    font-weight: 800;

    line-height: 1.05;
    letter-spacing: -2px;
}

.ppc-v5-header-label {
    font-size: 90px;
    font-weight: 900;

    line-height: 1;

    color: transparent;

    -webkit-text-stroke: 2px var(--light-blue);

    opacity: .8;
}


/* COPY GRID */

.ppc-v5-copy-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);

    gap: 18px;

    margin-bottom: 30px;
}

.ppc-v5-copy-card {
    position: relative;

    padding: 28px 24px 24px;

    background: #ffffff;

    border: 1px solid var(--light-blue);
    border-radius: 18px;

    box-shadow:
        0 10px 30px rgba(37,99,235,.04);

    transition: .3s ease;
}

.ppc-v5-copy-card:hover {
    transform: translateY(-5px);

    border-color: var(--blue);

    box-shadow:
        0 18px 40px rgba(37,99,235,.08);
}

.ppc-v5-copy-card > span {
    position: absolute;

    top: -13px;
    left: 20px;

    width: 36px;
    height: 36px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 10px;

    background: var(--blue);

    color: var(--yellow);

    font-size: 10px;
    font-weight: 900;
}

.ppc-v5-copy-card p {
    margin: 10px 0 0;

    color: var(--text);

    font-size: 14px;
    line-height: 1.8;
}


/* DASHBOARD */

.ppc-v5-dashboard {
    margin-bottom: 85px;

    padding: 32px;

    background: var(--blue);

    border-radius: 24px;

    box-shadow:
        0 22px 55px rgba(37,99,235,.18);
}

.ppc-v5-dashboard-title {
    display: flex;
    align-items: center;
    justify-content: space-between;

    gap: 20px;

    margin-bottom: 28px;
}

.ppc-v5-dashboard-title span {
    display: block;

    color: var(--yellow);

    font-size: 11px;
    font-weight: 800;

    text-transform: uppercase;
    letter-spacing: 1.3px;

    margin-bottom: 5px;
}

.ppc-v5-dashboard-title h3 {
    margin: 0;

    color: #ffffff;

    font-size: 26px;
    line-height: 1.2;
}

.ppc-v5-dashboard-arrow {
    width: 50px;
    height: 50px;

    display: flex;
    align-items: center;
    justify-content: center;

    background: var(--yellow);

    border-radius: 14px;

    color: var(--blue);

    font-size: 24px;
    font-weight: 900;
}


/* DASHBOARD CARDS */

.ppc-v5-dashboard-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);

    gap: 15px;
}

.ppc-v5-stat {
    padding: 20px;

    background: rgba(255,255,255,.1);

    border: 1px solid rgba(255,255,255,.13);
    border-radius: 14px;
}

.ppc-v5-stat > span {
    display: block;

    color: rgba(255,255,255,.72);

    font-size: 11px;

    margin-bottom: 7px;
}

.ppc-v5-stat strong {
    display: block;

    color: #ffffff;

    font-size: 25px;

    margin-bottom: 15px;
}

.ppc-v5-progress {
    height: 7px;

    background: rgba(255,255,255,.16);

    border-radius: 20px;

    overflow: hidden;
}

.ppc-v5-progress i {
    display: block;

    height: 100%;

    background: var(--light-blue);

    border-radius: 20px;
}

.ppc-v5-stat-highlight {
    background: var(--yellow);
}

.ppc-v5-stat-highlight > span,
.ppc-v5-stat-highlight strong {
    color: var(--dark);
}

.ppc-v5-stat-highlight .ppc-v5-progress {
    background: rgba(15,23,42,.15);
}

.ppc-v5-stat-highlight .ppc-v5-progress i {
    background: var(--blue);
}


/* PACKAGE HEADING */

.ppc-v5-packages-header {
    text-align: center;

    margin-bottom: 42px;
}

.ppc-v5-packages-header > span {
    color: var(--blue);

    font-size: 11px;
    font-weight: 800;

    text-transform: uppercase;
    letter-spacing: 1.4px;
}

.ppc-v5-packages-header h3 {
    margin: 8px 0 0;

    color: var(--dark);

    font-size: clamp(30px, 4vw, 42px);
}


/* PLANS */

.ppc-v5-plans {
    display: grid;
    grid-template-columns: repeat(3, 1fr);

    gap: 22px;
}


/* PLAN CARD */

.ppc-v5-plan {
    position: relative;

    display: flex;
    flex-direction: column;

    min-height: 500px;

    padding: 30px;

    background: #ffffff;

    border: 1px solid var(--light-blue);
    border-radius: 22px;

    box-shadow:
        0 10px 30px rgba(37,99,235,.05);

    transition: .3s ease;
}

.ppc-v5-plan:hover {
    transform: translateY(-7px);

    border-color: var(--blue);

    box-shadow:
        0 24px 50px rgba(37,99,235,.11);
}

.ppc-v5-plan-featured {
    background:
        linear-gradient(
            180deg,
            #EFF6FF 0%,
            #ffffff 45%
        );

    border: 2px solid var(--blue);

    transform: translateY(-10px);
}

.ppc-v5-plan-featured:hover {
    transform: translateY(-16px);
}

.ppc-v5-popular {
    position: absolute;

    top: -15px;
    right: 22px;

    padding: 7px 14px;

    background: var(--yellow);

    color: var(--dark);

    border-radius: 40px;

    font-size: 10px;
    font-weight: 900;

    text-transform: uppercase;
}


/* PLAN TOP */

.ppc-v5-plan-top {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
}

.ppc-v5-plan-top > div:first-child > span {
    display: block;

    color: var(--blue);

    font-size: 11px;
    font-weight: 800;

    text-transform: uppercase;
    letter-spacing: 1px;

    margin-bottom: 5px;
}

.ppc-v5-plan-top h4 {
    margin: 0;

    color: var(--dark);

    font-size: 29px;
}

.ppc-v5-plan-no {
    width: 48px;
    height: 48px;

    display: flex;
    align-items: center;
    justify-content: center;

    background: var(--soft);

    border-radius: 13px;

    color: var(--blue);

    font-size: 11px;
    font-weight: 900;
}

.ppc-v5-plan-featured .ppc-v5-plan-no {
    background: var(--blue);
    color: var(--yellow);
}


/* SPEND */

.ppc-v5-spend {
    margin-top: 27px;
    padding: 18px 20px;

    background: var(--soft);

    border-radius: 13px;
}

.ppc-v5-spend small {
    display: block;

    color: #64748B;

    font-size: 10px;
    font-weight: 700;

    text-transform: uppercase;

    margin-bottom: 4px;
}

.ppc-v5-spend strong {
    color: var(--blue);

    font-size: 19px;
}


/* FEATURES */

.ppc-v5-plan ul {
    list-style: none;

    padding: 0;
    margin: 24px 0 28px;
}

.ppc-v5-plan li {
    position: relative;

    padding: 10px 0 10px 29px;

    color: var(--text);

    font-size: 14px;
    line-height: 1.4;
}

.ppc-v5-plan li::before {
    content: "✓";

    position: absolute;

    left: 0;
    top: 8px;

    width: 21px;
    height: 21px;

    display: flex;
    align-items: center;
    justify-content: center;

    background: var(--light-blue);

    color: var(--blue);

    border-radius: 50%;

    font-size: 10px;
    font-weight: 900;
}


/* BUTTON */

.ppc-v5-plan > a {
    display: flex;
    align-items: center;
    justify-content: space-between;

    margin-top: auto;

    padding: 12px 14px;

    border: 1.5px solid var(--blue);
    border-radius: 10px;

    color: var(--blue);

    font-size: 13px;
    font-weight: 800;

    text-decoration: none !important;

    transition: .3s ease;
}

.ppc-v5-plan > a span {
    width: 30px;
    height: 30px;

    display: flex;
    align-items: center;
    justify-content: center;

    background: var(--light-blue);

    color: var(--blue);

    border-radius: 50%;
}

.ppc-v5-plan > a:hover {
    background: var(--blue);
    color: #ffffff;
}

.ppc-v5-plan > a:hover span {
    background: var(--yellow);
}


/* NOTE */

.ppc-v5-note {
    margin: 30px 0 0;

    text-align: center;

    color: #64748B;

    font-size: 12px;
    font-style: italic;
}


/* TABLET */

@media (max-width: 1000px) {

    .ppc-v5-copy-grid {
        grid-template-columns: 1fr;
    }

    .ppc-v5-dashboard-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .ppc-v5-plans {
        grid-template-columns: 1fr 1fr;
    }

    .ppc-v5-plan-featured {
        transform: none;
    }

}


/* MOBILE */

@media (max-width: 700px) {

    .ppc-v5 {
        padding: 70px 16px;
    }

    .ppc-v5-header {
        display: block;
    }

    .ppc-v5-header-label {
        display: none;
    }

    .ppc-v5-header h2 {
        font-size: 34px;
        letter-spacing: -1px;
    }

    .ppc-v5-dashboard {
        padding: 24px 20px;
    }

    .ppc-v5-dashboard-grid {
        grid-template-columns: 1fr;
    }

    .ppc-v5-dashboard-title h3 {
        font-size: 22px;
    }

    .ppc-v5-plans {
        grid-template-columns: 1fr;
    }

    .ppc-v5-plan {
        min-height: auto;
    }

    .ppc-v5-plan-featured {
        order: -1;
    }

}



/* ==========================================================
   FACEBOOK + INSTAGRAM VERSION
   ADD BELOW EXISTING PPC-V5 CSS
========================================================== */


/* 4 CONTENT CARDS */

.ppc-v5-copy-grid-social {
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 18px;
    margin-bottom: 30px;
}

.ppc-v5-copy-grid-social .ppc-v5-copy-card {
    min-height: 190px;
}


/* ==========================================================
   SOCIAL PERFORMANCE PANEL
========================================================== */

.ppc-v5-social-dashboard {
    overflow: hidden;
}


.ppc-v5-social-performance {
    display: grid;

    grid-template-columns:
        minmax(300px, .8fr)
        minmax(0, 1.2fr);

    gap: 25px;

    align-items: stretch;
}


/* ==========================================================
   INSTAGRAM CARD
========================================================== */

.ppc-v5-instagram {
    background: #ffffff;

    border-radius: 18px;

    overflow: hidden;

    box-shadow:
        0 15px 40px
        rgba(15, 23, 42, .14);
}


/* TOP */

.ppc-v5-insta-top {
    min-height: 65px;

    display: flex;

    align-items: center;

    justify-content: space-between;

    gap: 15px;

    padding: 12px 15px;
}


.ppc-v5-insta-user {
    display: flex;

    align-items: center;

    gap: 10px;
}


.ppc-v5-insta-avatar {
    width: 38px;
    height: 38px;

    display: flex;

    align-items: center;

    justify-content: center;

    flex-shrink: 0;

    background:
        linear-gradient(
            135deg,
            #FFCD00,
            #2563EB
        );

    border-radius: 50%;

    color: #ffffff;

    font-size: 13px;

    font-weight: 900;
}


.ppc-v5-insta-user strong {
    display: block;

    color: #0F172A;

    font-size: 12px;
}


.ppc-v5-insta-user span {
    display: block;

    margin-top: 2px;

    color: #64748B;

    font-size: 9px;
}


.ppc-v5-insta-more {
    color: #64748B;

    font-size: 14px;

    letter-spacing: 2px;
}


/* CREATIVE */

.ppc-v5-insta-creative {
    position: relative;

    min-height: 250px;

    display: flex;

    align-items: center;

    justify-content: center;

    padding: 25px;

    background:
        radial-gradient(
            circle at 80% 20%,
            rgba(255, 205, 0, .45),
            transparent 28%
        ),
        radial-gradient(
            circle at 10% 90%,
            rgba(191, 219, 254, .45),
            transparent 32%
        ),
        linear-gradient(
            145deg,
            #2563EB,
            #1D4ED8
        );

    overflow: hidden;
}


.ppc-v5-insta-creative::before {
    content: "";

    position: absolute;

    width: 160px;
    height: 160px;

    left: -70px;
    top: -70px;

    border:

        1px solid
        rgba(255,255,255,.18);

    border-radius: 50%;
}


.ppc-v5-insta-creative::after {
    content: "";

    position: absolute;

    width: 100px;
    height: 100px;

    right: -30px;
    bottom: -35px;

    background:

        rgba(255,255,255,.08);

    border-radius: 50%;
}


.ppc-v5-insta-ad-label {
    position: absolute;

    top: 15px;
    left: 15px;

    padding: 6px 10px;

    background:

        rgba(255,255,255,.14);

    border:

        1px solid
        rgba(255,255,255,.18);

    border-radius: 50px;

    color: #ffffff;

    font-size: 8px;

    font-weight: 700;

    letter-spacing: .8px;

    text-transform: uppercase;
}


.ppc-v5-insta-creative-center {
    position: relative;

    z-index: 2;

    text-align: center;
}


.ppc-v5-insta-creative-center small {
    display: block;

    margin-bottom: 8px;

    color: #FFCD00;

    font-size: 9px;

    font-weight: 900;

    letter-spacing: 2px;
}


.ppc-v5-insta-creative-center strong {
    display: block;

    max-width: 250px;

    color: #ffffff;

    font-size: 29px;

    font-weight: 800;

    line-height: 1.1;

    letter-spacing: -1px;
}


.ppc-v5-insta-creative-center strong span {
    color: #FFCD00;
}


.ppc-v5-insta-ad-button {
    display: inline-flex;

    align-items: center;

    justify-content: center;

    min-height: 36px;

    margin-top: 18px;

    padding: 8px 16px;

    background: #FFCD00;

    border-radius: 8px;

    color: #0F172A;

    font-size: 10px;

    font-weight: 800;
}


/* ACTIONS */

.ppc-v5-insta-actions {
    display: flex;

    align-items: center;

    gap: 18px;

    min-height: 50px;

    padding: 10px 15px;

    color: #334155;

    font-size: 11px;

    font-weight: 600;
}


.ppc-v5-insta-save {
    margin-left: auto;
}


.ppc-v5-insta-caption {
    padding: 0 15px 16px;

    color: #64748B;

    font-size: 10px;

    line-height: 1.5;
}


.ppc-v5-insta-caption strong {
    color: #0F172A;
}


/* ==========================================================
   SOCIAL STAT CARDS
========================================================== */

.ppc-v5-social-stats {
    display: grid;

    grid-template-columns:
        repeat(2, minmax(0, 1fr));

    gap: 15px;
}


.ppc-v5-social-stat {
    position: relative;

    display: flex;

    align-items: center;

    gap: 14px;

    min-height: 120px;

    padding: 20px;

    background:

        rgba(255,255,255,.10);

    border:

        1px solid
        rgba(255,255,255,.15);

    border-radius: 16px;

    transition:
        transform .3s ease,
        background .3s ease;
}


.ppc-v5-social-stat:hover {
    transform: translateY(-4px);

    background:

        rgba(255,255,255,.15);
}


.ppc-v5-social-icon {
    width: 45px;
    height: 45px;

    display: flex;

    align-items: center;

    justify-content: center;

    flex-shrink: 0;

    background: #BFDBFE;

    border-radius: 12px;

    color: #2563EB;

    font-size: 16px;

    font-weight: 900;
}


.ppc-v5-social-stat > div:nth-child(2) {
    min-width: 0;
}


.ppc-v5-social-stat > div:nth-child(2) span {
    display: block;

    margin-bottom: 4px;

    color:

        rgba(255,255,255,.63);

    font-size: 9px;

    font-weight: 700;

    text-transform: uppercase;

    letter-spacing: .8px;
}


.ppc-v5-social-stat > div:nth-child(2) strong {
    display: block;

    color: #ffffff;

    font-size: 14px;

    line-height: 1.35;
}


.ppc-v5-social-stat > b {
    margin-left: auto;

    color: #BFDBFE;

    font-size: 17px;
}


/* YELLOW CARD */

.ppc-v5-social-stat-yellow {
    background: #FFCD00;

    border-color: #FFCD00;
}


.ppc-v5-social-stat-yellow:hover {
    background: #FFCD00;
}


.ppc-v5-social-stat-yellow .ppc-v5-social-icon {
    background: #2563EB;

    color: #ffffff;
}


.ppc-v5-social-stat-yellow > div:nth-child(2) span {
    color:

        rgba(15,23,42,.62);
}


.ppc-v5-social-stat-yellow > div:nth-child(2) strong {
    color: #0F172A;
}


.ppc-v5-social-stat-yellow > b {
    color: #2563EB;
}


/* ==========================================================
   TABLET
========================================================== */

@media (max-width: 1000px) {

    .ppc-v5-copy-grid-social {
        grid-template-columns: 1fr 1fr;
    }


    .ppc-v5-social-performance {
        grid-template-columns: 1fr;
    }


    .ppc-v5-instagram {
        max-width: 520px;

        width: 100%;

        margin: 0 auto;
    }

}


/* ==========================================================
   MOBILE
========================================================== */

@media (max-width: 700px) {

    .ppc-v5-copy-grid-social {
        grid-template-columns: 1fr;
    }


    .ppc-v5-copy-grid-social
    .ppc-v5-copy-card {
        min-height: auto;
    }


    .ppc-v5-social-dashboard {
        padding: 24px 18px;
    }


    .ppc-v5-social-performance {
        gap: 18px;
    }


    .ppc-v5-social-stats {
        grid-template-columns: 1fr;
    }


    .ppc-v5-social-stat {
        min-height: 95px;
    }


    .ppc-v5-insta-creative {
        min-height: 220px;
    }


    .ppc-v5-insta-creative-center strong {
        font-size: 25px;
    }

}


/* ==========================================================
   SMALL MOBILE
========================================================== */

@media (max-width: 420px) {

    .ppc-v5-insta-creative {
        min-height: 200px;
    }


    .ppc-v5-insta-creative-center strong {
        font-size: 22px;
    }


    .ppc-v5-social-stat {
        padding: 16px;
    }


    .ppc-v5-social-icon {
        width: 40px;
        height: 40px;
    }

}
  </style>
  <!-- ============================================================
         SECTION 1 — HERO (Dark Navy)
         ============================================================ -->
    <section class="ppc-hero">
        <div class="ppc-hero-dot-grid"></div>
        <div class="ppc-hero-glow"></div>
        <div class="ppc-hero-inner">
            <div class="ppc-breadcrumb">
                <a href="<?php echo home_url('/'); ?>" class="ppc-breadcrumb-home">Home</a>
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#94a3b8" stroke-width="2"
                    stroke-linecap="round">
                    <polyline points="9 18 15 12 9 6" />
                </svg>
                <span style="color:#94a3b8;">PPC</span>
            </div>
            <div class="ppc-hero-grid">
                <!-- Left: text -->
                <div class="ppc-hero-left">
                    <div class="ppc-hero-badge">✦ PPC Advertising</div>
                    <h1 class="ppc-hero-h1">
                        <span class="ppc-white">Pay Per Click Advertising</span>
                        <span class="ppc-grad">A cost-effective solution for the growth of businesses!</span>
                    </h1>
                    <p class="ppc-hero-sub">Really tired of searching for the best-trusted PPC service provider in
                        India? If so, we have a great opportunity here for you. You would love using PPC Services. We
                        are focused on helping PPC advertising products which help businesses succeed in the ongoing
                        digital world.</p>
                    <div class="ppc-hero-btns">
                        <a href="<?php echo home_url('/contact'); ?>" class="ppc-btn-primary">Talk To An Expert</a>
                        <a href="#ppc-packages" class="ppc-btn-ghost">Our Packages</a>
                    </div>
                </div>
                <!-- Right: 3 stat cards (single column) -->
                <div class="ppc-hero-right">
                    <div class="ppc-hero-stats">
                        <div class="ppc-stat-card">
                            <div class="ppc-stat-icon" style="background:rgba(59,130,246,0.15);">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#3b82f6"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="22 7 13.5 15.5 8.5 10.5 2 17" />
                                    <polyline points="16 7 22 7 22 13" />
                                </svg>
                            </div>
                            <div>
                                <div class="ppc-stat-pre">We've generated over</div>
                                <div class="ppc-stat-val">$108,231,120</div>
                            </div>
                        </div>
                        <div class="ppc-stat-card">
                            <div class="ppc-stat-icon" style="background:rgba(129,140,248,0.15);">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#818cf8"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="2" y1="12" x2="22" y2="12" />
                                    <path
                                        d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
                                </svg>
                            </div>
                            <div>
                                <div class="ppc-stat-pre">We've managed</div>
                                <div class="ppc-stat-val">700+</div>
                            </div>
                        </div>
                        <div class="ppc-stat-card">
                            <div class="ppc-stat-icon" style="background:rgba(52,211,153,0.15);">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#34d399"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="8" r="6" />
                                    <path d="M15.477 12.89L17 22l-5-3-5 3 1.523-9.11" />
                                </svg>
                            </div>
                            <div>
                                <div class="ppc-stat-pre">We're a</div>
                                <div class="ppc-stat-val">Certified</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
         SECTION 2 — GROW YOUR BUSINESS WITH PPC CAMPAIGNS
         Image LEFT / Text RIGHT
         ============================================================ -->
    <section class="ppc-grow">
        <div class="ppc-grow-inner">
            <!-- Left: Image -->
            <div class="ppc-grow-img-col">
                <div class="ppc-grow-img-card">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/ppc/PPC-Campaigns.webp' ?>"
                        alt="PPC Advertising - Google Gemini" class="ppc-grow-img" loading="lazy" />
                </div>
            </div>
            <!-- Right: Text -->
            <div class="ppc-grow-text-col">
                <div class="section-badge">✦ PPC Campaign Services</div>
                <h2 class="ppc-h2">Grow Your Business with <span style="color:#2563eb;">PPC Campaigns</span></h2>
                <p class="ppc-body-text">This is the reason you need the right PPC services in India: even more if
                    you're running a business. PPC Advertising, optimising your brand campaigns, increasing product
                    visibility, or handling your website through agencies that require paid media exposure.</p>
                <p class="ppc-body-text">In most cases, you come across website visitors that did not convert into a
                    business lead. It simply means that many of the clients that visit your website are not ready to
                    generate high-quality leads. We have never failed in our expertise of choosing the best strategies
                    that result in a business outcome.</p>
                <p class="ppc-body-text">A business really benefits from the development and growth of its paid
                    channels. PPC is the primary driver of fast results for businesses looking to scale their online
                    reach quickly. That's why we make sure you always get maximum ROI from every campaign dollar spent.
                </p>
                <a href="#ppc-packages" class="ppc-text-link">Our PPC Campaign Services →</a>
            </div>
        </div>
    </section>

    <!-- ============================================================
         SECTION 3 — PPC SERVICE FEATURES (3×2 grid)
         ============================================================ -->
    <section class="ppc-features" style="background:#f8fafc;">
        <div class="ppc-features-inner">
            <div class="section-header">
                <div class="section-badge">✦ Our PPC Campaign Services</div>
            </div>
            <div class="ppc-features-grid">

                <div class="ppc-feature-card">
                    <div class="ppc-feature-icon" style="background:#eff6ff;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8" />
                            <path d="M21 21l-4.35-4.35" />
                        </svg>
                    </div>
                    <h3 class="ppc-feature-title">Proper Keyword Research</h3>
                    <p class="ppc-feature-desc">We conduct deep keyword research to identify high-intent search terms
                        that your target audience is using. We find the keywords that drive real clicks, leads, and
                        conversions for your business not just traffic.</p>
                </div>

                <div class="ppc-feature-card">
                    <div class="ppc-feature-icon" style="background:#f5f3ff;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                        </svg>
                    </div>
                    <h3 class="ppc-feature-title">Attractive Ad Creation</h3>
                    <p class="ppc-feature-desc">Our creative team designs compelling ad copy and visuals that capture
                        attention and drive clicks. Every ad we create is crafted to be relevant, engaging, and
                        conversion-focused matching the intent behind every search query.</p>
                </div>

                <div class="ppc-feature-card">
                    <div class="ppc-feature-icon" style="background:#f0fdf4;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#059669" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4" />
                            <polyline points="10 17 15 12 10 7" />
                            <line x1="15" y1="12" x2="3" y2="12" />
                        </svg>
                    </div>
                    <h3 class="ppc-feature-title">Optimizing Landing Page Conversion</h3>
                    <p class="ppc-feature-desc">Driving traffic is only half the battle. We optimise your landing
                        pages to ensure visitors convert into leads and customers. Our CRO experts test headlines,
                        CTAs, layouts, and forms to maximise your campaign's ROI.</p>
                </div>

                <div class="ppc-feature-card">
                    <div class="ppc-feature-icon" style="background:#fef2f2;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#dc2626" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="17 1 21 5 17 9" />
                            <path d="M3 11V9a4 4 0 0 1 4-4h14" />
                            <polyline points="7 23 3 19 7 15" />
                            <path d="M21 13v2a4 4 0 0 1-4 4H3" />
                        </svg>
                    </div>
                    <h3 class="ppc-feature-title">Remarketing PPC Campaign</h3>
                    <p class="ppc-feature-desc">Re-engage past visitors who didn't convert. Our remarketing campaigns
                        bring back warm audiences with tailored ads that remind them of your product or service dramatically increasing conversion rates and reducing your cost per acquisition.</p>
                </div>

                <div class="ppc-feature-card">
                    <div class="ppc-feature-icon" style="background:#fffbeb;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#d97706" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="20" x2="18" y2="10" />
                            <line x1="12" y1="20" x2="12" y2="4" />
                            <line x1="6" y1="20" x2="6" y2="14" />
                        </svg>
                    </div>
                    <h3 class="ppc-feature-title">Detailed Reporting giving the ROI results</h3>
                    <p class="ppc-feature-desc">We believe in full transparency. Our detailed monthly reports show
                        exactly where your budget is being spent, which keywords and ads are performing, and what ROI
                        you're achieving giving you complete visibility into your campaign performance.</p>
                </div>

                <div class="ppc-feature-card">
                    <div class="ppc-feature-icon" style="background:#ecfeff;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0891b2" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="3" width="20" height="14" rx="2" />
                            <path d="M8 21h8M12 17v4" />
                        </svg>
                    </div>
                    <h3 class="ppc-feature-title">Strategic Campaign Management</h3>
                    <p class="ppc-feature-desc">Our PPC specialists actively manage and optimise your campaigns on a
                        daily basis adjusting bids, pausing underperformers, testing new ad variations, and
                        continuously refining your targeting strategy to drive the best possible outcomes.</p>
                </div>

            </div>
        </div>
    </section>

   
<section class="ppc-v5" id="ppc-packages">
    <div class="ppc-v5-container">

        <!-- Header -->
        <div class="ppc-v5-header">
            <div>
                <span class="ppc-v5-badge">
                    ✦ Our PPC Campaigns for Google Ads &amp; Youtube Ads
                </span>

                <h2>Our Packages for Google ads &amp; Youtube Ads</h2>
            </div>

            <div class="ppc-v5-header-label">
                PPC
            </div>
        </div>


        <!-- Intro Copy -->
        <div class="ppc-v5-copy-grid">

            <div class="ppc-v5-copy-card">
                <span>01</span>

                <p>
                    Pay per click is the most cost-efficient advertising solution for the
                    businesses digitally. Our clients' budgets. With this, we can make your business marketing
                    performance at the right place and the right time to accomplish a lot more with your ads with
                    Google.
                </p>
            </div>


            <div class="ppc-v5-copy-card">
                <span>02</span>

                <p>
                    Our company, TachoMind, is a leading name in the field of digital
                    marketing. We strive, a wide range of digital advertising services that can help you achieve
                    your ultimate goals for your business. We have a track record for deciding as our business
                    and adds miles sites.
                </p>
            </div>


            <div class="ppc-v5-copy-card">
                <span>03</span>

                <p>
                    Whenever, if you want to unlock and learn to overcome the strong
                    reported results, then we would love to connect you to our team of specialists. Furthermore,
                    with our Google Ads solution, you can eliminate your competition and scale your audience in
                    the most effective way.
                </p>
            </div>

        </div>


        <!-- Performance Dashboard -->
        <div class="ppc-v5-dashboard">

            <div class="ppc-v5-dashboard-title">
                <div>
                    <span>Performance Overview</span>
                    <h3>Campaign Performance Growth</h3>
                </div>

                <div class="ppc-v5-dashboard-arrow">
                    ↗
                </div>
            </div>


            <div class="ppc-v5-dashboard-grid">

                <div class="ppc-v5-stat">
                    <span>Search Ads</span>
                    <strong>68%</strong>

                    <div class="ppc-v5-progress">
                        <i style="width:68%;"></i>
                    </div>
                </div>


                <div class="ppc-v5-stat">
                    <span>Display Ads</span>
                    <strong>76%</strong>

                    <div class="ppc-v5-progress">
                        <i style="width:76%;"></i>
                    </div>
                </div>


                <div class="ppc-v5-stat">
                    <span>YouTube Ads</span>
                    <strong>84%</strong>

                    <div class="ppc-v5-progress">
                        <i style="width:84%;"></i>
                    </div>
                </div>


                <div class="ppc-v5-stat ppc-v5-stat-highlight">
                    <span>Overall Growth</span>
                    <strong>92%</strong>

                    <div class="ppc-v5-progress">
                        <i style="width:92%;"></i>
                    </div>
                </div>

            </div>

        </div>


        <!-- Packages Header -->
        <div class="ppc-v5-packages-header">
            <span>Campaign Packages</span>
            <h3>Choose the Right PPC Plan</h3>
        </div>


        <!-- Packages -->
        <div class="ppc-v5-plans">

            <!-- Tier 1 -->
            <article class="ppc-v5-plan">

                <div class="ppc-v5-plan-top">
                    <div>
                        <span>Starter</span>
                        <h4>Tier 1</h4>
                    </div>

                    <div class="ppc-v5-plan-no">
                        01
                    </div>
                </div>


                <div class="ppc-v5-spend">
                    <small>Ad Spend</small>
                    <strong>Up to $2,500/mo</strong>
                </div>


                <ul>
                    <li>Google Search Campaigns</li>
                    <li>1 Campaign Setup</li>
                    <li>Keyword Research</li>
                    <li>Monthly Reporting</li>
                    <li>Ad Copywriting</li>
                </ul>


                <a href="https://tachomind.com/contact">
                    Choose Plan
                    <span>→</span>
                </a>

            </article>


            <!-- Tier 2 -->
            <article class="ppc-v5-plan ppc-v5-plan-featured">

                <div class="ppc-v5-popular">
                    ★ Most Popular
                </div>

                <div class="ppc-v5-plan-top">
                    <div>
                        <span>Growth</span>
                        <h4>Tier 2</h4>
                    </div>

                    <div class="ppc-v5-plan-no">
                        02
                    </div>
                </div>


                <div class="ppc-v5-spend">
                    <small>Ad Spend</small>
                    <strong>Above $10,000/mo</strong>
                </div>


                <ul>
                    <li>Google Search + Display</li>
                    <li>YouTube Ads</li>
                    <li>3 Campaign Setups</li>
                    <li>Advanced Keyword Research</li>
                    <li>A/B Ad Testing</li>
                    <li>Bi-Weekly Reporting</li>
                </ul>


                <a href="https://tachomind.com/contact">
                    Choose Plan
                    <span>→</span>
                </a>

            </article>


            <!-- Tier 3 -->
            <article class="ppc-v5-plan">

                <div class="ppc-v5-plan-top">
                    <div>
                        <span>Advanced</span>
                        <h4>Tier 3</h4>
                    </div>

                    <div class="ppc-v5-plan-no">
                        03
                    </div>
                </div>


                <div class="ppc-v5-spend">
                    <small>Ad Spend</small>
                    <strong>Above $10,000/mo</strong>
                </div>


                <ul>
                    <li>All Google Ad Types</li>
                    <li>Unlimited Campaigns</li>
                    <li>Dedicated Account Manager</li>
                    <li>Landing Page CRO</li>
                    <li>Remarketing Campaigns</li>
                    <li>Weekly Reporting</li>
                </ul>


                <a href="https://tachomind.com/contact">
                    Choose Plan
                    <span>→</span>
                </a>

            </article>

        </div>


        <p class="ppc-v5-note">
            Prices are exclusive of Applicable Taxes
        </p>

    </div>
</section>
<br>


<!-- ============================================================
     SECTION 5 — FACEBOOK ADS & INSTAGRAM PACKAGES
============================================================ -->

<section class="ppc-v5 ppc-v5-social" id="ppc-social-packages">

    <div class="ppc-v5-container">

        <!-- ======================================
             HEADER
        ======================================= -->

        <div class="ppc-v5-header">

            <div>

                <span class="ppc-v5-badge">
                    ✦ Our PPC Campaigns for Facebook &amp; Instagram Ads
                </span>

                <h2>
                    Our Packages for Facebook ads &amp; Instagram Ads
                </h2>

            </div>

            <div class="ppc-v5-header-label">
                META
            </div>

        </div>


        <!-- ======================================
             INTRO CONTENT
        ======================================= -->

        <div class="ppc-v5-copy-grid ppc-v5-copy-grid-social">


            <!-- Content 01 -->
            <div class="ppc-v5-copy-card">

                <span>
                    01
                </span>

                <p>
                    In this way, the digital marketing platform is growing at a rapid rate
                    from small companies to large enterprises of the business world. With the help of Facebook
                    and Instagram, you can figure out marketing where you can target specific audiences based on
                    interests, behaviours, demographics, and life events.
                </p>

            </div>


            <!-- Content 02 -->
            <div class="ppc-v5-copy-card">

                <span>
                    02
                </span>

                <p>
                    We, at TachoMind, have industry expert developers who optimise your
                    business advertising in advertising social ads and our different objectives. Therefore, we can
                    provide you with the required data to kickstart your marketing growth.
                </p>

            </div>


            <!-- Content 03 -->
            <div class="ppc-v5-copy-card">

                <span>
                    03
                </span>

                <p>
                    Running a business today is getting painful this first looks. It has
                    only a company knows about the very best and is not good enough when it can. The
                    demand for PPC marketing will increase in the upcoming weeks.
                </p>

            </div>


            <!-- Content 04 -->
            <div class="ppc-v5-copy-card">

                <span>
                    04
                </span>

                <p>
                    TachoMind has many years in research experience that helps grow your
                    business campaign results organically grow across many today, market, brands, and then. Look
                    at our data that you keep an eye on. Create the app and click a method to create a better marketing
                    strategy to keep on growing for the benefit of your business.
                </p>

            </div>

        </div>


        <!-- ======================================
             SOCIAL ADS PERFORMANCE PANEL
        ======================================= -->

        <div class="ppc-v5-dashboard ppc-v5-social-dashboard">


            <div class="ppc-v5-dashboard-title">

                <div>

                    <span>
                        Social Advertising
                    </span>

                    <h3>
                        Facebook &amp; Instagram Campaign Performance
                    </h3>

                </div>


                <div class="ppc-v5-dashboard-arrow">
                    ↗
                </div>

            </div>


            <div class="ppc-v5-social-performance">


                <!-- Instagram Mockup -->
                <div class="ppc-v5-instagram">


                    <div class="ppc-v5-insta-top">

                        <div class="ppc-v5-insta-user">

                            <div class="ppc-v5-insta-avatar">
                                T
                            </div>

                            <div>

                                <strong>
                                    TachoMind
                                </strong>

                                <span>
                                    Sponsored
                                </span>

                            </div>

                        </div>


                        <div class="ppc-v5-insta-more">
                            •••
                        </div>

                    </div>


                    <div class="ppc-v5-insta-creative">

                        <div class="ppc-v5-insta-ad-label">
                            Sponsored Ad
                        </div>

                        <div class="ppc-v5-insta-creative-center">

                            <small>
                                META ADS
                            </small>

                            <strong>
                                Facebook
                                <span>&amp;</span>
                                Instagram
                            </strong>

                            <div class="ppc-v5-insta-ad-button">
                                Learn More
                            </div>

                        </div>

                    </div>


                    <div class="ppc-v5-insta-actions">

                        <span>
                            ♥ 2.4k
                        </span>

                        <span>
                            💬 184
                        </span>

                        <span class="ppc-v5-save">
                            ♡
                        </span>

                    </div>


                    <div class="ppc-v5-insta-caption">

                        <strong>TachoMind</strong>

                        Build campaigns that reach your ideal audience.

                    </div>

                </div>


                <!-- Right Social Ad Features -->
                <div class="ppc-v5-social-stats">


                    <div class="ppc-v5-social-stat">

                        <div class="ppc-v5-social-icon">
                            F
                        </div>

                        <div>

                            <span>
                                Facebook
                            </span>

                            <strong>
                                Feed Ads
                            </strong>

                        </div>

                        <b>
                            ↗
                        </b>

                    </div>


                    <div class="ppc-v5-social-stat">

                        <div class="ppc-v5-social-icon">
                            I
                        </div>

                        <div>

                            <span>
                                Instagram
                            </span>

                            <strong>
                                Feed Ads
                            </strong>

                        </div>

                        <b>
                            ↗
                        </b>

                    </div>


                    <div class="ppc-v5-social-stat">

                        <div class="ppc-v5-social-icon">
                            R
                        </div>

                        <div>

                            <span>
                                Instagram
                            </span>

                            <strong>
                                Stories &amp; Reels Ads
                            </strong>

                        </div>

                        <b>
                            ↗
                        </b>

                    </div>


                    <div class="ppc-v5-social-stat ppc-v5-social-stat-yellow">

                        <div class="ppc-v5-social-icon">
                            +
                        </div>

                        <div>

                            <span>
                                Audience
                            </span>

                            <strong>
                                Targeting &amp; Retargeting
                            </strong>

                        </div>

                        <b>
                            ↗
                        </b>

                    </div>


                </div>

            </div>

        </div>


        <!-- ======================================
             PACKAGE HEADING
        ======================================= -->

        <div class="ppc-v5-packages-header">

            <span>
                Social Media PPC Packages
            </span>

            <h3>
                Choose the Right Meta Ads Plan
            </h3>

        </div>


        <!-- ======================================
             PRICING PACKAGES
        ======================================= -->

        <div class="ppc-v5-plans">


            <!-- ==============================
                 TIER 1
            =============================== -->

            <article class="ppc-v5-plan">

                <div class="ppc-v5-plan-top">

                    <div>

                        <span>
                            Starter
                        </span>

                        <h4>
                            Tier 1
                        </h4>

                    </div>


                    <div class="ppc-v5-plan-no">
                        01
                    </div>

                </div>


                <div class="ppc-v5-spend">

                    <small>
                        Ad Spend
                    </small>

                    <strong>
                        Up to $2,500/mo
                    </strong>

                </div>


                <ul>

                    <li>
                        Facebook Feed Ads
                    </li>

                    <li>
                        1 Campaign Setup
                    </li>

                    <li>
                        Audience Research
                    </li>

                    <li>
                        Monthly Reporting
                    </li>

                    <li>
                        Ad Copywriting
                    </li>

                </ul>


                <a href="https://tachomind.com/contact">

                    Choose Plan

                    <span>
                        →
                    </span>

                </a>

            </article>


            <!-- ==============================
                 TIER 2
            =============================== -->

            <article class="ppc-v5-plan ppc-v5-plan-featured">

                <div class="ppc-v5-popular">
                    ★ Most Popular
                </div>


                <div class="ppc-v5-plan-top">

                    <div>

                        <span>
                            Growth
                        </span>

                        <h4>
                            Tier 2
                        </h4>

                    </div>


                    <div class="ppc-v5-plan-no">
                        02
                    </div>

                </div>


                <div class="ppc-v5-spend">

                    <small>
                        Ad Spend
                    </small>

                    <strong>
                        Up to $10,000/mo
                    </strong>

                </div>


                <ul>

                    <li>
                        Facebook + Instagram Ads
                    </li>

                    <li>
                        Stories &amp; Reels Ads
                    </li>

                    <li>
                        3 Campaign Setups
                    </li>

                    <li>
                        Lookalike Audiences
                    </li>

                    <li>
                        A/B Creative Testing
                    </li>

                    <li>
                        Bi-Weekly Reporting
                    </li>

                </ul>


                <a href="https://tachomind.com/contact">

                    Choose Plan

                    <span>
                        →
                    </span>

                </a>

            </article>


            <!-- ==============================
                 TIER 3
            =============================== -->

            <article class="ppc-v5-plan">

                <div class="ppc-v5-plan-top">

                    <div>

                        <span>
                            Advanced
                        </span>

                        <h4>
                            Tier 3
                        </h4>

                    </div>


                    <div class="ppc-v5-plan-no">
                        03
                    </div>

                </div>


                <div class="ppc-v5-spend">

                    <small>
                        Ad Spend
                    </small>

                    <strong>
                        Above $10,000/mo
                    </strong>

                </div>


                <ul>

                    <li>
                        All Meta Ad Placements
                    </li>

                    <li>
                        Unlimited Campaigns
                    </li>

                    <li>
                        Dedicated Account Manager
                    </li>

                    <li>
                        Retargeting Funnels
                    </li>

                    <li>
                        Dynamic Product Ads
                    </li>

                    <li>
                        Weekly Reporting
                    </li>

                </ul>


                <a href="https://tachomind.com/contact">

                    Choose Plan

                    <span>
                        →
                    </span>

                </a>

            </article>

        </div>


        <p class="ppc-v5-note">
            Prices are exclusive of Applicable Taxes
        </p>

    </div>

</section>






    <!-- ============================================================
         SECTION 6 — IS IT WORTH INVESTING?
         Text LEFT / Image RIGHT → then 2-col ad types grid below
         ============================================================ -->
    <section class="ppc-worth">
        <div class="ppc-worth-inner">
            <div class="ppc-worth-top">
                <!-- Left: text -->
                <div class="ppc-worth-text">
                    <div class="section-badge">✦ Why PPC Marketing</div>
                    <h2 class="ppc-h2">Is it worth investing in a PPC marketing campaign?</h2>
                    <p class="ppc-body-text">Pay per click strategy is a search-based tool that has us continuing to do
                        the building block of an effective advertising strategy. This business benefits some of the
                        best ways we should be aware of this solution. The PPC process, you should know what you want
                        and what kind of results you want to generate.</p>
                    <p class="ppc-body-text">We are united, by this, to help you search for traffic, both the right
                        results and make your website. Take your website the right tools to target your audience and
                        take them through the buying process. Analyse, your product, content, and business plans so
                        you'll use the right amount of statistics into your online presence.</p>
                    <p class="ppc-body-text">The marketing campaign allows the costs of advertising that truly affect
                        businesses in the digital world. Focusing on the right strategies with the right business will
                        bring many long-term gains. We should have our priority and needs, the marketing plan for the
                        right amount of advertising and the right place to use advertising for your online business.
                    </p>
                </div>
                <!-- Right: image -->
                <div class="ppc-worth-img-col">
                    <div class="ppc-worth-img-card">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/ppc/PPC-marketingcampaign.webp' ?>"
                            alt="PPC Campaign Strategy" class="ppc-worth-img" loading="lazy" />
                    </div>
                </div>
            </div>

            <!-- Ad Types Grid: 2 cols x 4 rows -->
            <div class="ppc-ad-types-grid">

                <div class="ppc-ad-type-card">
                    <div class="ppc-ad-type-icon" style="background:#eff6ff;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="3" width="20" height="14" rx="2" />
                            <path d="M8 21h8M12 17v4" />
                        </svg>
                    </div>
                    <div>
                        <div class="ppc-ad-type-name">Bing Ads</div>
                        <p class="ppc-ad-type-desc">Bing Ads allow you to place sponsored links in the Bing search
                            engine results. Targeting valuable intent-based traffic with lower CPCs than Google Ads,
                            making them a cost-effective addition to your paid search strategy.</p>
                    </div>
                </div>

                <div class="ppc-ad-type-card">
                    <div class="ppc-ad-type-icon" style="background:#fef9f0;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#d97706" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8" />
                            <path d="M21 21l-4.35-4.35" />
                        </svg>
                    </div>
                    <div>
                        <div class="ppc-ad-type-name">Google Ads</div>
                        <p class="ppc-ad-type-desc">Google Ads is the most powerful PPC advertising platform in the
                            world. Show your business at the top of search results the moment potential customers are
                            actively searching for products or services like yours.</p>
                    </div>
                </div>

                <div class="ppc-ad-type-card">
                    <div class="ppc-ad-type-icon" style="background:#ecfeff;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#0891b2" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z" />
                        </svg>
                    </div>
                    <div>
                        <div class="ppc-ad-type-name">Twitter Ads</div>
                        <p class="ppc-ad-type-desc">Twitter Ads help you promote your products or services to highly
                            engaged and tech-savvy audiences. Twitter advertising enables precise targeting based on
                            keywords, interests, followers, and real-time conversation topics.</p>
                    </div>
                </div>

                <div class="ppc-ad-type-card">
                    <div class="ppc-ad-type-icon" style="background:#f0fdf4;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#059669" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                            <circle cx="12" cy="10" r="3" />
                        </svg>
                    </div>
                    <div>
                        <div class="ppc-ad-type-name">Google Local Services</div>
                        <p class="ppc-ad-type-desc">Google Local Services Ads allow local businesses to appear at the
                            very top of Google Search results. These ads display your business name, rating, and phone
                            number ideal for generating immediate phone calls and local leads.</p>
                    </div>
                </div>

                <div class="ppc-ad-type-card">
                    <div class="ppc-ad-type-icon" style="background:#fef2f2;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#dc2626" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M22.54 6.42a2.78 2.78 0 0 0-1.95-1.96C18.88 4 12 4 12 4s-6.88 0-8.59.46a2.78 2.78 0 0 0-1.95 1.96A29 29 0 0 0 1 12a29 29 0 0 0 .46 5.58A2.78 2.78 0 0 0 3.41 19.6C5.12 20 12 20 12 20s6.88 0 8.59-.4a2.78 2.78 0 0 0 1.95-1.95A29 29 0 0 0 23 12a29 29 0 0 0-.46-5.58zM9.75 15.02V8.98L15.5 12z" />
                        </svg>
                    </div>
                    <div>
                        <div class="ppc-ad-type-name">Youtube Ads</div>
                        <p class="ppc-ad-type-desc">YouTube Ads let you reach your target audience while they watch
                            their favourite videos. With skippable and non-skippable video ad formats, you can build
                            powerful brand awareness and drive action from over 2 billion monthly active users.</p>
                    </div>
                </div>

                <div class="ppc-ad-type-card">
                    <div class="ppc-ad-type-icon" style="background:#eff6ff;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#1d4ed8" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                        </svg>
                    </div>
                    <div>
                        <div class="ppc-ad-type-name">Facebook Ads</div>
                        <p class="ppc-ad-type-desc">Facebook Ads offer unparalleled audience targeting capabilities.
                            Reach your ideal customers based on demographics, interests, behaviours, and connections.
                            From awareness to conversions, Facebook Ads support every stage of the marketing funnel.
                        </p>
                    </div>
                </div>

                <div class="ppc-ad-type-card">
                    <div class="ppc-ad-type-icon" style="background:#fdf4ff;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#a21caf" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" />
                        </svg>
                    </div>
                    <div>
                        <div class="ppc-ad-type-name">Instagram Ads</div>
                        <p class="ppc-ad-type-desc">Instagram is a great platform to use for your YouTube ads. You
                            can target your audience based on their interests, behaviours, and demographics. Instagram
                            Ads in Feed, Stories, and Reels deliver highly visual, engaging content to your audience.
                        </p>
                    </div>
                </div>

                <div class="ppc-ad-type-card">
                    <div class="ppc-ad-type-icon" style="background:#eff6ff;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
                            <rect x="2" y="9" width="4" height="12" />
                            <circle cx="4" cy="4" r="2" />
                        </svg>
                    </div>
                    <div>
                        <div class="ppc-ad-type-name">LinkedIn Ads</div>
                        <p class="ppc-ad-type-desc">LinkedIn Ads are the leading platform for B2B advertising. Target
                            decision-makers and professionals by job title, company size, industry, seniority, and
                            skills making LinkedIn the ideal channel for high-value B2B lead generation campaigns.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ============================================================
         SECTION 7 — HOW DOES PPC WORK?
         ============================================================ -->
    <section class="ppc-how" style="background:#f8fafc;">
        <div class="ppc-how-inner">
            <div class="section-header">
                <div class="section-badge">✦ PPC</div>
                <h2 class="ppc-how-h2">How does a PPC marketing campaign work for you?</h2>
            </div>
            <div class="ppc-how-steps">

                <div class="ppc-how-step">
                    <div class="ppc-how-icon" style="background:#eff6ff;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="22 7 13.5 15.5 8.5 10.5 2 17" />
                            <polyline points="16 7 22 7 22 13" />
                        </svg>
                    </div>
                    <div class="ppc-how-text">
                        <p class="ppc-body-text">PPC advertising is a keyword-based marketing strategy. You bid on
                            different search terms across different search engines to reach users at the moment they are
                            searching. The important thing to note is that not everyone who searches actually clicks on
                            your ad this is why carefully chosen keywords and compelling ad copy are absolutely
                            essential to the success of your campaign.</p>
                    </div>
                </div>

                <div class="ppc-how-step">
                    <div class="ppc-how-icon" style="background:#f0fdf4;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#059669" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10" />
                            <polyline points="12 6 12 12 16 14" />
                        </svg>
                    </div>
                    <div class="ppc-how-text">
                        <p class="ppc-body-text">Here you can use Google to analyse right, right, it's a generally
                            a better-based version of traffic clicks. To see if it's a good option for you, you can
                            use the available tools and data to look at what search terms your target users type in.
                            We work across many Google channels with a strong presence on Google Search and Google
                            Display that maximises your campaign reach.</p>
                    </div>
                </div>

                <div class="ppc-how-step">
                    <div class="ppc-how-icon" style="background:#f5f3ff;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                            <polyline points="22 4 12 14.01 9 11.01" />
                        </svg>
                    </div>
                    <div class="ppc-how-text">
                        <p class="ppc-body-text">We don't have time anymore to build a PPC advertising campaign that's
                            not well-structured, you have to be able to take the right steps in a marketing plan before
                            becoming a TachoMind client. Our campaigns are structured for maximum efficiency. We
                            continuously monitor, test, and optimise every element of your PPC campaign to drive more
                            conversions and lower your cost per acquisition over time.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ============================================================
         SECTION 8 — FAQ
         ============================================================ -->
    <section class="ppc-faq-section">
        <div class="ppc-faq-inner">
            <div class="section-header">
                <div class="section-badge">✦ FAQ</div>
                <h2>Frequently Asked Questions</h2>
            </div>
            <div class="ppc-faq-list" id="ppcFaqList">

                <div class="ppc-faq-item">
                    <button class="ppc-faq-q" aria-expanded="false">
                        <span>What is the cost of PPC?</span>
                        <svg class="ppc-faq-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round">
                            <polyline points="6 9 12 15 18 9" />
                        </svg>
                    </button>
                    <div class="ppc-faq-a">
                        <p>The cost of PPC advertising varies widely depending on your industry, competition, target
                            keywords, and ad spend budget. Typically, you pay a management fee to your PPC agency
                            plus your actual ad spend to the platform (Google, Meta, etc.). TachoMind offers flexible
                            pricing tiers to suit businesses of all sizes get in touch for a custom quote.</p>
                    </div>
                </div>

                <div class="ppc-faq-item">
                    <button class="ppc-faq-q" aria-expanded="false">
                        <span>Is it worth investing in a PPC marketing campaign?</span>
                        <svg class="ppc-faq-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round">
                            <polyline points="6 9 12 15 18 9" />
                        </svg>
                    </button>
                    <div class="ppc-faq-a">
                        <p>Absolutely. PPC advertising delivers immediate, measurable results unlike SEO which takes
                            months to show results. With proper targeting and management, PPC campaigns can generate
                            highly qualified leads and sales within days of launch. When managed correctly, PPC
                            consistently delivers a strong return on investment for businesses across all industries.
                        </p>
                    </div>
                </div>

                <div class="ppc-faq-item">
                    <button class="ppc-faq-q" aria-expanded="false">
                        <span>Why do we do a lot of labour regularly and gain value?</span>
                        <svg class="ppc-faq-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round">
                            <polyline points="6 9 12 15 18 9" />
                        </svg>
                    </button>
                    <div class="ppc-faq-a">
                        <p>Effective PPC management requires continuous work monitoring bids, testing ad copy,
                            analysing performance data, adjusting targeting, and optimising landing pages. This ongoing
                            labour is what separates profitable campaigns from wasted spend. Our team works daily on
                            your account to ensure every dollar of your ad budget is generating maximum value.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- CONTACT STRIP -->
    <div class="ppc-contact-strip">
        <div class="ppc-contact-strip-inner">
            <!--<a href="tel:+15183036708" class="ppc-contact-item">-->
            <!--    <div class="ppc-contact-icon">-->
            <!--        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2"-->
            <!--            stroke-linecap="round" stroke-linejoin="round">-->
            <!--            <path-->
            <!--                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1.11h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.72a16 16 0 0 0 6 6l.94-.94a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z" />-->
            <!--        </svg>-->
            <!--    </div>-->
            <!--    <div>-->
            <!--        <div class="ppc-contact-lbl">USA</div>-->
            <!--        <div class="ppc-contact-val">+1-518-303-6708</div>-->
            <!--    </div>-->
            <!--</a>-->
            <a href="tel:+918917643345" class="ppc-contact-item">
                <div class="ppc-contact-icon">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path
                            d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1.11h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.72a16 16 0 0 0 6 6l.94-.94a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z" />
                    </svg>
                </div>
                <div>
                    <div class="ppc-contact-lbl">India</div>
                    <div class="ppc-contact-val">+91-8917643345</div>
                </div>
            </a>
            <a href="mailto:hello@tachomind.com" class="ppc-contact-item">
                <div class="ppc-contact-icon">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                        <polyline points="22,6 12,13 2,6" />
                    </svg>
                </div>
                <div>
                    <div class="ppc-contact-lbl">Email us</div>
                    <div class="ppc-contact-val">hi@tachomind.com</div>
                </div>
            </a>
        </div>
    </div>

    <!-- BOTTOM CTA -->
    <section class="ppc-bottom-cta">
        <div class="ppc-bottom-cta-glow"></div>
        <div class="ppc-bottom-cta-inner">
            <h2 class="ppc-bottom-cta-h2">You have a vision. <span class="ppc-cta-grad">We have a team to get you
                    there.</span></h2>
            <div class="ppc-bottom-cta-btns">
                <a href="<?php echo home_url('/contact'); ?>" class="ppc-btn-primary">Get Started Today</a>
                <a href="tel:+918917643345" class="ppc-btn-ghost">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
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
document.addEventListener("click", function (e) {
  const btn = e.target.closest(".ppc-faq-q");
  if (!btn) return;

  e.preventDefault();

  const item = btn.closest(".ppc-faq-item");
  const isOpen = item.classList.contains("open");

  document.querySelectorAll(".ppc-faq-item").forEach(function (faq) {
    faq.classList.remove("open");

    const q = faq.querySelector(".ppc-faq-q");
    if (q) q.setAttribute("aria-expanded", "false");
  });

  if (!isOpen) {
    item.classList.add("open");
    btn.setAttribute("aria-expanded", "true");
  }
});
</script>
    <?php
}
get_footer();
?>