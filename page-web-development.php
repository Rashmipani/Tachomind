<?php
get_header();
while (have_posts()) {
  the_post();
?>
<style>
    .wd-contact-strip-inner {
  max-width: 900px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: repeat(2, 1fr)!important;
  gap: 20px;
}
@media screen and (max-width: 576px) {
    .wd-contact-strip-inner {
        grid-template-columns: repeat(1, 1fr)!important;
    }
}
</style>

    <!-- ============================================================
         SECTION 1 — HERO (Dark Navy)
         ============================================================ -->
    <section class="wd-hero">
        <div class="wd-hero-dot-grid"></div>
        <div class="wd-hero-glow"></div>
        <div class="wd-hero-inner">
            <div class="wd-breadcrumb">
                <a href="<?php echo home_url('/'); ?>" class="wd-breadcrumb-home">Home</a>
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#94a3b8" stroke-width="2"
                    stroke-linecap="round">
                    <polyline points="9 18 15 12 9 6" />
                </svg>
                <span style="color:#94a3b8;">Web Development</span>
            </div>
            <div class="wd-hero-grid">
                <!-- Left: text -->
                <div class="wd-hero-left">
                    <div class="wd-hero-badge">✦ Web Development</div>
                    <h1 class="wd-hero-h1">
                        <span class="wd-white">Website designing &amp; developing</span>
                        <span class="wd-grad">A way to empower your business</span>
                    </h1>
                    <p class="wd-hero-sub">You can't afford the fact that your website is the most important element of
                        your business in the digital age. We create professional, high-converting websites that become
                        the nucleus of your online identity beautiful, fast, and SEO-ready from day one.</p>
                    <div class="wd-hero-btns">
                        <a href="<?php echo home_url('/contact'); ?>" class="wd-btn-primary">Get Started</a>
                        <a href="#wd-services" class="wd-btn-ghost">Our Services</a>
                    </div>
                </div>
                <!-- Right: 4 stat cards -->
                <div class="wd-hero-right">
                    <div class="wd-hero-stats">
                        <div class="wd-stat-card">
                            <div class="wd-stat-icon" style="background:rgba(59,130,246,0.15);">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#3b82f6"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="22 7 13.5 15.5 8.5 10.5 2 17" />
                                    <polyline points="16 7 22 7 22 13" />
                                </svg>
                            </div>
                            <div>
                                <div class="wd-stat-pre">Revenue Generated</div>
                                <div class="wd-stat-val">$108,321,150</div>
                            </div>
                        </div>
                        <div class="wd-stat-card">
                            <div class="wd-stat-icon" style="background:rgba(129,140,248,0.15);">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#818cf8"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="2" y1="12" x2="22" y2="12" />
                                    <path
                                        d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
                                </svg>
                            </div>
                            <div>
                                <div class="wd-stat-pre">Campaigns Managed</div>
                                <div class="wd-stat-val">700+</div>
                            </div>
                        </div>
                        <div class="wd-stat-card">
                            <div class="wd-stat-icon" style="background:rgba(52,211,153,0.15);">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#34d399"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="8" r="6" />
                                    <path d="M15.477 12.89L17 22l-5-3-5 3 1.523-9.11" />
                                </svg>
                            </div>
                            <div>
                                <div class="wd-stat-pre">Google &amp; Meta</div>
                                <div class="wd-stat-val">Certified</div>
                            </div>
                        </div>
                        <div class="wd-stat-card">
                            <div class="wd-stat-icon" style="background:rgba(217,119,6,0.15);">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#d97706"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="2" y1="12" x2="22" y2="12" />
                                    <path
                                        d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
                                </svg>
                            </div>
                            <div>
                                <div class="wd-stat-pre">Countries Served</div>
                                <div class="wd-stat-val">28+ Countries</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
         SECTION 2 — A WAY TO EMPOWER YOUR BUSINESS
         ============================================================ -->
    <section class="section wd-empower">
        <div class="container">
            <div class="wd-empower-grid">
                <!-- Left: Image -->
                <div class="wd-empower-img-col">
                    <div class="wd-empower-img-card">
                            <img 
  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/A-way-to-empoweryourbusiness.webp' ); ?>" 
  alt="Web Development" class="wd-empower-img" loading="lazy" />
                    </div>
                    <div class="wd-empower-badge-card">
                        <div class="wd-empower-badge-val" style="color:#2563eb;">105+</div>
                        <div class="wd-empower-badge-lbl">Websites Delivered</div>
                    </div>
                </div>
                <!-- Right: Text -->
                <div class="wd-empower-text-col">
                    <div class="section-badge">✦ About Our Web Services</div>
                    <h2 class="about-h2">A way to <span style="color:#2563eb;">empower your business</span></h2>
                    <p class="about-body-text">Our professional web development company empowers your business with a
                        strong, future-ready online presence. A great website is more than just design — it's your most
                        powerful sales asset, your 24/7 salesperson, and the nucleus of everything you do online.</p>
                    <p class="about-body-text">Our experienced developers create industry-best websites that not only
                        look stunning but also perform exceptionally. We combine beautiful aesthetics with powerful
                        technology to build websites that convert visitors into customers.</p>
                    <p class="about-body-text">A business really starts blooming in the development and growth of its
                        online channels. Website is the primary factor for any business. Without a website, any business
                        will not be able to achieve its targets. That's why we make sure our clients understand the most
                        effective nature of the internet.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
         SECTION 3 — WHAT KIND OF SERVICE
         ============================================================ -->
    <section class="section wd-services-what" id="wd-services" style="background:#f8fafc;">
        <div class="container">
            <div class="wd-services-grid">
                <!-- Left: Text -->
                <div class="wd-services-text-col">
                    <h2 class="about-h2">What kind of service will you receive from us?</h2>
                    <p class="about-body-text">TachoMind, a website development company for 5+ years of experience in
                        the industry. We are proud of having an incredibly experienced team in website designing. Our
                        team leads the way, day by day, building professionally designed, high-performance websites that
                        give your business a powerful online edge.</p>
                    <p class="about-body-text">We have the consistency and growth that you're looking for. We use
                        cutting-edge technology and development standards. Our team of skilled developers brings a
                        wealth of experience across thousands of successful projects from small business sites to
                        enterprise-level platforms.</p>
                    <p class="about-body-text">In addition to collections of very useful and impactful strategies, when
                        you decide to develop a new website or redesign an existing one, you can rely on us to get the
                        job done right. We have a proven record of tremendous success across multiple industries and
                        markets.</p>
                    <p class="about-body-text">We can develop all kinds of websites from custom corporate websites
                        and landing pages to fully featured e-commerce stores. We offer everything you need to succeed
                        online: design, development, optimisation, and ongoing support.</p>

                    <div class="wd-tech-label">Technologies We Work With</div>
                    <div class="wd-tech-pills">
                        <span class="wd-tech-pill"
                            style="background:#fff7ed;color:#ea580c;border-color:#fed7aa;">PHP</span>
                        <span class="wd-tech-pill"
                            style="background:#eff6ff;color:#2563eb;border-color:#bfdbfe;">React</span>
                        <span class="wd-tech-pill"
                            style="background:#f0fdf4;color:#059669;border-color:#bbf7d0;">WordPress</span>
                        <span class="wd-tech-pill"
                            style="background:#fdf2f8;color:#9d174d;border-color:#fbcfe8;">Shopify</span>
                        <span class="wd-tech-pill"
                            style="background:#f5f3ff;color:#7c3aed;border-color:#ddd6fe;">WooCommerce</span>
                        <span class="wd-tech-pill"
                            style="background:#ecfeff;color:#0891b2;border-color:#a5f3fc;">Magento</span>
                        <span class="wd-tech-pill"
                            style="background:#fef2f2;color:#dc2626;border-color:#fecaca;">JavaScript</span>
                        <span class="wd-tech-pill"
                            style="background:#fffbeb;color:#d97706;border-color:#fde68a;">HTML / CSS</span>
                    </div>
                </div>
                <!-- Right: WEB 3.0 Mockup + text -->
                <div class="wd-services-right-col">
                    <div class="wd-web3-card">
                        <div class="wd-web3-header">
                            <div class="wd-web3-dot" style="background:#ff5f57;"></div>
                            <div class="wd-web3-dot" style="background:#ffbd2e;"></div>
                            <div class="wd-web3-dot" style="background:#28c840;"></div>
                        </div>
                        <div class="wd-web3-body">
                            <div class="wd-web3-monitor">
                                <svg width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="#94a3b8"
                                    stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="2" y="3" width="20" height="14" rx="2" />
                                    <path d="M8 21h8M12 17v4" />
                                </svg>
                            </div>
                            <div class="wd-web3-label">WEB 3.0</div>
                            <div class="wd-web3-bars">
                                <div class="wd-web3-bar" style="width:80%;background:#bfdbfe;"></div>
                                <div class="wd-web3-bar" style="width:55%;background:#e2e8f0;"></div>
                                <div class="wd-web3-bar" style="width:70%;background:#e2e8f0;"></div>
                                <div class="wd-web3-bar" style="width:45%;background:#dbeafe;"></div>
                            </div>
                        </div>
                    </div>
                    <p class="about-body-text" style="margin-top:24px;">TachoMind is a sole development firm that has
                        the unique ability to design your business digitally. We stand tall knowing our expertise
                        creates truly engaging experiences for our clients. Providing you with a seamlessly perfect and
                        digitally rich website that performs across all devices.</p>
                    <p class="about-body-text">If you're looking for Shopify experts or WooCommerce developers that
                        give you an extra edge in the digital business landscape, you've come to the right place. We
                        make sure your online store ranks well and converts at every stage of the funnel.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
         SECTION 4 — WHY SHOULD YOU CHOOSE TACHOMIND
         ============================================================ -->
    <section class="section wd-why">
        <div class="container">
            <div class="section-header">
                <h2>Why Should You Choose <span style="color:#2563eb;">TachoMind?</span></h2>
            </div>
            <div class="wd-why-features">

                <!-- Feature 1: Image left, text right -->
                <div class="wd-feature-row">
                    <div class="wd-feature-img-wrap">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/webdev/Creative-Web-Designing.webp'?>"
                            alt="Creative Web Designing" class="wd-feature-img" loading="lazy" />
                    </div>
                    <div class="wd-feature-text">
                        <div class="wd-feature-icon-box" style="background:#eff6ff;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <rect x="2" y="3" width="20" height="14" rx="2" />
                                <path d="M8 21h8M12 17v4" />
                            </svg>
                        </div>
                        <h3 class="wd-feature-title">Creative Web Designing</h3>
                        <p class="wd-feature-desc">Our fully foundational web development company will deliver you the
                            best website design experience along with our extensive years of expertise. We have a
                            talented and creative design team that helps make your website a powerful brand identity.
                            Our creative websites not only visually captivate they turn your audience into buyers.</p>
                    </div>
                </div>

                <!-- Feature 2: Text left, image right -->
                <div class="wd-feature-row wd-feature-row--rev">
                    <div class="wd-feature-text">
                        <div class="wd-feature-icon-box" style="background:#f0fdf4;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#059669" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            </svg>
                        </div>
                        <h3 class="wd-feature-title">Engaging site</h3>
                        <p class="wd-feature-desc">The developers at TachoMind strive to create exciting, up-to-date
                            and creative websites. All of our websites feature a compelling narrative and offer a strong,
                            interactive experience for users. We create amazing websites with the very best customer
                            software that make your users feel reputable and better engaged with your brand.</p>
                    </div>
                    <div class="wd-feature-img-wrap">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/webdev/Engaging-site.webp' ?>"
                            alt="Engaging Site" class="wd-feature-img" loading="lazy" />
                    </div>
                </div>

                <!-- Feature 3: Image left, text right -->
                <div class="wd-feature-row">
                    <div class="wd-feature-img-wrap">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/webdev/SEO-Friendly-Websites.webp'?>"
                            alt="SEO Friendly Websites" class="wd-feature-img" loading="lazy" />
                    </div>
                    <div class="wd-feature-text">
                        <div class="wd-feature-icon-box" style="background:#ecfeff;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0891b2" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="11" cy="11" r="8" />
                                <path d="M21 21l-4.35-4.35" />
                            </svg>
                        </div>
                        <h3 class="wd-feature-title">SEO Friendly Websites</h3>
                        <p class="wd-feature-desc">We develop websites that are built to rank. Using the most advanced
                            technology and best practices, your website is SEO-friendly from day one. If it's SEO
                            friendly, search engines will love your website and rank it higher meaning more visits,
                            more leads, and more revenue for your business.</p>
                    </div>
                </div>

                <!-- Feature 4: Text left, image right -->
                <div class="wd-feature-row wd-feature-row--rev">
                    <div class="wd-feature-text">
                        <div class="wd-feature-icon-box" style="background:#f5f3ff;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 2L2 7l10 5 10-5-10-5z" />
                                <path d="M2 17l10 5 10-5" />
                                <path d="M2 12l10 5 10-5" />
                            </svg>
                        </div>
                        <h3 class="wd-feature-title">Innovative Ideas</h3>
                        <p class="wd-feature-desc">The developers at TachoMind bring new and innovative ideas backed by
                            years of experience in this field. Our development team delivers unparalleled expertise in
                            creating a powerful online experience. Our results are extraordinary, built on strong
                            foundations and proven across a wide range of industries and business sizes.</p>
                    </div>
                    <div class="wd-feature-img-wrap">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/webdev/Innovative-Ideas.webp'?>"
                            alt="Innovative Ideas" class="wd-feature-img" loading="lazy" />
                    </div>
                </div>

                <!-- Feature 5: Image left, text right -->
                <div class="wd-feature-row">
                    <div class="wd-feature-img-wrap">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/webdev/Secure.webp' ?>"
                            alt="Secure" class="wd-feature-img" loading="lazy" />
                    </div>
                    <div class="wd-feature-text">
                        <div class="wd-feature-icon-box" style="background:#fef2f2;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#dc2626" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                            </svg>
                        </div>
                        <h3 class="wd-feature-title">Secure</h3>
                        <p class="wd-feature-desc">We safeguard all your digital resources. Security is our most
                            important factor. We will ensure your website is safe while protecting your business assets
                            so you can rely on us to keep your website's content secure, reliable, and trustworthy for
                            all your users and customers at all times.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ============================================================
         SECTION 5 — WEB DEVELOPMENT PROCESS
         ============================================================ -->
    <section class="wd-process" id="wd-process">
        <div class="wd-process-inner">
            <!-- Left: Steps -->
            <div class="wd-process-text-col">
                <div class="section-badge">✦ Our Process</div>
                <h2 class="about-h2">Take a look at our web development process.</h2>
                <p class="about-body-text" style="margin-bottom:36px;">Established by research and innovation, our
                    process is designed to deliver projects on time with outstanding quality at every stage.</p>

                <div class="wd-steps">
                    <div class="wd-step">
                        <div class="wd-step-num">01</div>
                        <div class="wd-step-content">
                            <div class="wd-step-title">Consultation</div>
                            <p class="wd-step-desc">Establishing trust with the client and understanding your business
                                goals, target audience, brand story, and project requirements before anything begins.
                            </p>
                        </div>
                    </div>
                    <div class="wd-step">
                        <div class="wd-step-num">02</div>
                        <div class="wd-step-content">
                            <div class="wd-step-title">Research &amp; Strategy</div>
                            <p class="wd-step-desc">Researching your industry, competition, and market opportunities.
                                Building a strategy that defines the sitemap, functionality, technology stack, and
                                content plan.</p>
                        </div>
                    </div>
                    <div class="wd-step">
                        <div class="wd-step-num">03</div>
                        <div class="wd-step-content">
                            <div class="wd-step-title">Design</div>
                            <p class="wd-step-desc">Creating wireframes and high-fidelity designs that match your brand
                                identity. Every visual element is crafted to maximise user experience and conversion
                                rate.</p>
                        </div>
                    </div>
                    <div class="wd-step">
                        <div class="wd-step-num">04</div>
                        <div class="wd-step-content">
                            <div class="wd-step-title">Development</div>
                            <p class="wd-step-desc">Our developers build your website using the latest technologies.
                                Clean, scalable, and optimised code that ensures fast load times and smooth performance
                                across all devices.</p>
                        </div>
                    </div>
                    <div class="wd-step">
                        <div class="wd-step-num">05</div>
                        <div class="wd-step-content">
                            <div class="wd-step-title">Testing &amp; Security</div>
                            <p class="wd-step-desc">Rigorous QA testing across devices and browsers. Security audits,
                                performance testing, and Core Web Vitals checks before any launch takes place.</p>
                        </div>
                    </div>
                    <div class="wd-step">
                        <div class="wd-step-num">06</div>
                        <div class="wd-step-content">
                            <div class="wd-step-title">Launch &amp; Support</div>
                            <p class="wd-step-desc">Seamless deployment with post-launch monitoring. Ongoing support,
                                maintenance, and updates to keep your website running at peak performance long-term.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right: Image + Stats -->
            <div class="wd-process-img-col">
                <div class="wd-process-img-card">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/webdev/web-development-process.webp' ?>"
                        alt="Web Development Process" class="wd-process-img" loading="lazy" />
                </div>
                <div class="wd-process-stats">
                    <div class="wd-proc-stat">
                        <div class="wd-proc-stat-val" style="color:#2563eb;">650+</div>
                        <div class="wd-proc-stat-lbl">Years Combined Experience</div>
                    </div>
                    <div class="wd-proc-stat">
                        <div class="wd-proc-stat-val" style="color:#059669;">98%</div>
                        <div class="wd-proc-stat-lbl">Client Satisfaction</div>
                    </div>
                    <div class="wd-proc-stat">
                        <div class="wd-proc-stat-val" style="color:#7c3aed;">105+</div>
                        <div class="wd-proc-stat-lbl">Websites Delivered</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
         SECTION 6 — HIGHLY FUNCTIONAL, SECURE, RELIABLE & ROBUST
         ============================================================ -->
    <section class="section wd-functional">
        <div class="container">
            <div class="wd-functional-grid">
                <!-- Left: Text -->
                <div class="wd-functional-text">
                    <div class="section-badge">✦ What We Build</div>
                    <h2 class="about-h2">Highly Functional, Secure, <span style="color:#2563eb;">Reliable &amp;
                            Robust</span></h2>
                    <p class="about-body-text">We provide a high-class team, driven by creative minds that work with
                        utmost performance and deliver the work in a given timeline. Our website design and development
                        services will help your business grow exponentially, expanding your reach to new audiences
                        across industries and borders.</p>
                    <p class="about-body-text">We can customise and restructure your website from the very beginning ensuring that your business presence online is maximised and that your business can scale
                        efficiently. Our web solutions are powerful platforms that help businesses become successful
                        online, tested &amp; proven across many clients and industries.</p>
                    <a href="<?php echo home_url('/contact'); ?>" class="btn-primary" style="margin-top:8px;display:inline-flex;">Schedule a Free
                        Call</a>
                </div>
                <!-- Right: Decorative Thank You Card -->
                <div class="wd-functional-deco">
                    <div class="wd-thankyou-card">
                        <!--<div class="wd-ty-inner">-->
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/webdev/Reliable-Robust.webp' ?>"
                        alt="Web Development Process" class="wd-process-img" loading="lazy" />
                            <!--<span class="wd-ty-line wd-ty-l1">Thank</span>-->
                            <!--<span class="wd-ty-line wd-ty-l2">You</span>-->
                            <!--<span class="wd-ty-line wd-ty-l3">For</span>-->
                            <!--<span class="wd-ty-line wd-ty-l4">Shopping</span>-->
                            <!--<span class="wd-ty-line wd-ty-l5">With us!</span>-->
                            <!--<span class="wd-ty-line wd-ty-l6">(online)</span>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
         SECTION 7 — FAQ
         ============================================================ -->
    <section class="section wd-faq" style="background:#f8fafc;">
        <div class="container">
            <div class="section-header">
                <div class="section-badge">✦ FAQ</div>
                <h2>Frequently Asked Questions</h2>
                <p class="section-subtext">If you want to flourish your product and services or build your digital
                    media to get more leads, then building a website is worth it.</p>
            </div>
            <div class="wd-faq-list" id="wdFaqList">

                <div class="wd-faq-item">
                    <button class="wd-faq-q" aria-expanded="false">
                        <span>What is the cost of a website?</span>
                        <svg class="wd-faq-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round">
                            <polyline points="6 9 12 15 18 9" />
                        </svg>
                    </button>
                    <div class="wd-faq-a">
                        <p>The cost of a website varies depending on its complexity, features, and the technology stack
                            used. A basic informational website starts from $500, while a fully custom e-commerce
                            platform can range higher. We provide transparent, itemised quotes after understanding your
                            specific requirements no hidden charges.</p>
                    </div>
                </div>

                <div class="wd-faq-item">
                    <button class="wd-faq-q" aria-expanded="false">
                        <span>Do you integrate all the Software that the business function needs?</span>
                        <svg class="wd-faq-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round">
                            <polyline points="6 9 12 15 18 9" />
                        </svg>
                    </button>
                    <div class="wd-faq-a">
                        <p>Yes, absolutely. We integrate CRMs, payment gateways, ERP systems, inventory management
                            tools, marketing automation platforms, and any third-party APIs your business relies on. Our
                            development team ensures all integrations are secure, stable, and properly tested before
                            launch.</p>
                    </div>
                </div>

                <div class="wd-faq-item">
                    <button class="wd-faq-q" aria-expanded="false">
                        <span>How long does it take to build a website?</span>
                        <svg class="wd-faq-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round">
                            <polyline points="6 9 12 15 18 9" />
                        </svg>
                    </button>
                    <div class="wd-faq-a">
                        <p>A simple brochure website typically takes 2–4 weeks. A more complex website with custom
                            features, e-commerce functionality, or multiple integrations can take 6–12 weeks. We provide
                            a detailed project timeline during our initial consultation so you always know what to
                            expect.</p>
                    </div>
                </div>

                <div class="wd-faq-item">
                    <button class="wd-faq-q" aria-expanded="false">
                        <span>Will my website be mobile-friendly and responsive?</span>
                        <svg class="wd-faq-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round">
                            <polyline points="6 9 12 15 18 9" />
                        </svg>
                    </button>
                    <div class="wd-faq-a">
                        <p>Every website we build is fully responsive and optimised for all screen sizes from desktop
                            to tablet to mobile. With over 60% of web traffic coming from mobile devices, we design
                            mobile-first to ensure your visitors have a perfect experience regardless of device.</p>
                    </div>
                </div>

                <div class="wd-faq-item">
                    <button class="wd-faq-q" aria-expanded="false">
                        <span>Do you provide website maintenance after launch?</span>
                        <svg class="wd-faq-chevron" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round">
                            <polyline points="6 9 12 15 18 9" />
                        </svg>
                    </button>
                    <div class="wd-faq-a">
                        <p>Yes, we offer comprehensive post-launch maintenance and support packages including software
                            updates, security patches, content updates, performance monitoring, and technical support.
                            We ensure your website stays secure, fast, and up-to-date long after it goes live.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ============================================================
         CONTACT STRIP
         ============================================================ -->
    <div class="wd-contact-strip">
        <div class="wd-contact-strip-inner">
            <!--<a href="tel:+15183036708" class="wd-contact-item">-->
            <!--    <div class="wd-contact-icon">-->
            <!--        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2"-->
            <!--            stroke-linecap="round" stroke-linejoin="round">-->
            <!--            <path-->
            <!--                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1.11h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.72a16 16 0 0 0 6 6l.94-.94a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z" />-->
            <!--        </svg>-->
            <!--    </div>-->
            <!--    <div>-->
            <!--        <div class="wd-contact-lbl">USA</div>-->
            <!--        <div class="wd-contact-val">+1-518-303-6708</div>-->
            <!--    </div>-->
            <!--</a>-->
            <a href="tel:+918917643345" class="wd-contact-item">
                <div class="wd-contact-icon">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path
                            d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1.11h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.72a16 16 0 0 0 6 6l.94-.94a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z" />
                    </svg>
                </div>
                <div>
                    <div class="wd-contact-lbl">India</div>
                    <div class="wd-contact-val">+91-8917643345</div>
                </div>
            </a>
            <a href="mailto:hello@tachomind.com" class="wd-contact-item">
                <div class="wd-contact-icon">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                        <polyline points="22,6 12,13 2,6" />
                    </svg>
                </div>
                <div>
                    <div class="wd-contact-lbl">Email us</div>
                    <div class="wd-contact-val">hi@tachomind.com</div>
                </div>
            </a>
        </div>
    </div>

    <!-- ============================================================
         SECTION 8 — BOTTOM CTA (Dark)
         ============================================================ -->
    <section class="wd-bottom-cta">
        <div class="wd-bottom-cta-glow"></div>
        <div class="wd-bottom-cta-inner">
            <h2 class="wd-bottom-cta-h2">You have a vision. <span class="wd-cta-grad">We have a team to get you
                    there.</span></h2>
            <div class="wd-bottom-cta-btns">
                <a href="<?php echo home_url('/contact'); ?>" class="wd-btn-primary">Get Started Today</a>
                <a href="tel:+918917643345" class="wd-btn-ghost">
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
(function () {
  'use strict';

  /* Navbar scroll */
  const navbar = document.getElementById('navbar');
  function handleNavScroll() {
    if (window.scrollY > 20) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  }
  window.addEventListener('scroll', handleNavScroll, { passive: true });
  handleNavScroll();

  /* Mobile menu */
  const hamburger = document.getElementById('hamburger');
  const mobileMenu = document.getElementById('mobileMenu');
  hamburger.addEventListener('click', function () {
    mobileMenu.classList.toggle('open');
  });
  document.querySelectorAll('.mobile-link, .mobile-cta').forEach(function (link) {
    link.addEventListener('click', function () {
      mobileMenu.classList.remove('open');
    });
  });

  /* FAQ accordion */
  document.querySelectorAll('.wd-faq-q').forEach(function (btn) {
    btn.addEventListener('click', function () {
      const item = btn.closest('.wd-faq-item');
      const isOpen = item.classList.contains('open');

      document.querySelectorAll('.wd-faq-item.open').forEach(function (el) {
        el.classList.remove('open');
        el.querySelector('.wd-faq-q').setAttribute('aria-expanded', 'false');
      });

      if (!isOpen) {
        item.classList.add('open');
        btn.setAttribute('aria-expanded', 'true');
      }
    });
  });

})();
</script>
    <?php
}
get_footer();
?>