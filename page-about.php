<?php
get_header();
while (have_posts()) {
  the_post();
?>
<style>
    .contact-strip {
    max-width: 1024px;
    margin: 0 auto;
    border-radius: 16px;
    padding: 28px 32px;
    background: #fff;
    border: 1px solid #e2e8f0;
    box-shadow: 0 1px 6px rgb(0 0 0 / .04);
    display: grid;
    grid-template-columns: repeat(2, 1fr)!important;
    gap: 24px;
}
</style>
    <!-- ============================================================
     SECTION 1 — HERO (Dark Navy)
     ============================================================ -->
    <section class="about-hero">
        <div class="about-hero-dot-grid"></div>
        <div class="about-hero-glow"></div>

        <div class="about-hero-inner">
            <!-- Breadcrumb -->
            <div class="about-breadcrumb">
                <a href="<?php echo home_url('/'); ?>" class="breadcrumb-home">Home</a>
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#64748b" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="9 18 15 12 9 6" />
                </svg>
                <span style="color:#94a3b8;">About</span>
            </div>

            <!-- Badge -->
            <div class="about-hero-badge">✦ About TachoMind</div>

            <!-- Headline -->
            <h1 class="about-hero-headline">
                Brilliant Minds At Work<br>
                <span class="about-gradient-text">Serving All Your Digital Needs</span>
            </h1>

            <!-- Subtext -->
            <p class="about-hero-sub">
                We are TachoMind. We focus on marketing innovation in digital marketing and web design to get you
                numerous customers and leads.
            </p>

            <!-- CTA Buttons -->
            <div class="about-hero-btns">
                <a href="<?php echo home_url('/contact'); ?>" class="about-btn-primary">Talk To An Expert</a>
                <a href="<?php echo home_url('/contact'); ?>" class="about-btn-ghost">Get Free Audit</a>
            </div>
        </div>
    </section>

    <!-- ============================================================
     SECTION 2 — COMPANY OVERVIEW
     ============================================================ -->
    <section class="about-section about-overview">
        <div class="about-container">
            <div class="overview-grid">

                <!-- Left: Image -->
                <div class="overview-img-col">
                    <div class="overview-img-card">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/webdev/Reliable-Robust.webp' ?>"
                        alt="Data-driven marketing results" class="overview-img" loading="lazy"
                            onerror="this.style.display='none';" />
                        <!-- Badge top-right -->
                        <div class="ov-badge ov-badge-tr">
                            <div class="ov-badge-value" style="color:#2563eb;">$108M+</div>
                            <div class="ov-badge-label">Revenue Generated</div>
                        </div>
                        <!-- Badge bottom-left -->
                        <div class="ov-badge ov-badge-bl">
                            <div class="ov-badge-value" style="color:#059669;">98%</div>
                            <div class="ov-badge-label">Client Retention</div>
                        </div>
                    </div>
                </div>

                <!-- Right: Text -->
                <div class="overview-text-col">
                    <div class="section-badge">✦ Company Overview</div>
                    <h2 class="about-h2">Marketing Innovation <span style="color:#2563eb">at Its Core</span></h2>

                    <p class="about-body-text">We are TachoMind, the brilliant minds at work to serve all your digital
                        needs. We focus on marketing innovation in digital marketing and web design to get you numerous
                        customers and leads.</p>

                    <p class="about-body-text">Our in-house team ensures the growth your business deserves. Our support
                        team in Bhubaneswar, India makes sure that all our clients and agency partners get the best
                        services a team of 100+ employees delivering top-notch results at the lowest price possible
                        while maintaining quality.</p>

                    <!-- Service tags -->
                    <div class="service-tags">
                        <span class="svc-tag"
                            style="color:#2563eb;background:#eff6ff;border-color:rgba(37,99,235,0.145);">Web
                            Development</span>
                        <span class="svc-tag"
                            style="color:#7c3aed;background:#f5f3ff;border-color:rgba(124,58,237,0.145);">Digital
                            Marketing</span>
                        <span class="svc-tag"
                            style="color:#0891b2;background:#ecfeff;border-color:rgba(8,145,178,0.145);">SEO
                            Service</span>
                        <span class="svc-tag"
                            style="color:#059669;background:#f0fdf4;border-color:rgba(5,150,105,0.145);">SMO
                            Service</span>
                    </div>

                    <a href="<?php echo home_url('/contact'); ?>" class="about-btn-primary"
                        style="display:inline-flex;align-items:center;gap:8px;">Get in Touch ↗</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
     SECTION 3 — MILESTONES
     ============================================================ -->
    <section class="about-section about-milestones">
        <div class="about-container">
            <div class="section-header">
                <div class="section-badge">✦ Our Milestones</div>
                <h2 class="section-header-h2">Numbers That Speak for Themselves</h2>
            </div>

            <div class="milestones-grid">

                <div class="milestone-card">
                    <div class="milestone-icon-box" style="background:#eff6ff;">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="22 7 13.5 15.5 8.5 10.5 2 17" />
                            <polyline points="16 7 22 7 22 13" />
                        </svg>
                    </div>
                    <div class="milestone-value" style="color:#2563eb;">$108M+</div>
                    <div class="milestone-label">Revenue Generated for Clients</div>
                </div>

                <div class="milestone-card">
                    <div class="milestone-icon-box" style="background:#f5f3ff;">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10" />
                            <line x1="22" y1="12" x2="18" y2="12" />
                            <line x1="6" y1="12" x2="2" y2="12" />
                            <line x1="12" y1="2" x2="12" y2="6" />
                            <line x1="12" y1="18" x2="12" y2="22" />
                        </svg>
                    </div>
                    <div class="milestone-value" style="color:#7c3aed;">700+</div>
                    <div class="milestone-label">Campaigns Managed</div>
                </div>

                <div class="milestone-card">
                    <div class="milestone-icon-box" style="background:#ecfeff;">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#0891b2" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="7" width="20" height="14" rx="2" />
                            <path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2" />
                        </svg>
                    </div>
                    <div class="milestone-value" style="color:#0891b2;">8,000+</div>
                    <div class="milestone-label">Accounts Handled</div>
                </div>

                <div class="milestone-card">
                    <div class="milestone-icon-box" style="background:#f0fdf4;">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#059669" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        </svg>
                    </div>
                    <div class="milestone-value" style="color:#059669;">100+</div>
                    <div class="milestone-label">Team of Professionals</div>
                </div>

                <div class="milestone-card">
                    <div class="milestone-icon-box" style="background:#fffbeb;">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#d97706" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10" />
                            <line x1="2" y1="12" x2="22" y2="12" />
                            <path
                                d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
                        </svg>
                    </div>
                    <div class="milestone-value" style="color:#d97706;">28+</div>
                    <div class="milestone-label">Servicing Countries</div>
                </div>

                <div class="milestone-card">
                    <div class="milestone-icon-box" style="background:#fef2f2;">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#dc2626" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <polygon
                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                        </svg>
                    </div>
                    <div class="milestone-value" style="color:#dc2626;">98%</div>
                    <div class="milestone-label">Client Retention Rate</div>
                </div>

            </div>
        </div>
    </section>

    <!-- ============================================================
     SECTION 4 — FOUNDER MESSAGE
     ============================================================ -->
    <section class="about-section about-founder">
        <div class="about-container">
            <div class="section-header">
                <div class="section-badge">✦ From the Founder</div>
                <h2 class="section-header-h2">A Message from Tanmay</h2>
            </div>

            <div class="founder-grid">
                <!-- Left: Photo -->
                <div class="founder-photo-col">
                    <div class="founder-photo-card">
                        <img class="img-fluid"
                  src="<?php echo get_template_directory_uri() . '/assets/images/about/tanmay.webp' ?>" alt="">
              
                    </div>
                    <!-- Name tag below photo -->
                    <div class="founder-name-tag">
                        <div class="founder-name">Tanmay</div>
                        <div class="founder-title">Founder & CEO, TachoMind</div>
                        <div class="founder-chips">
                            <span class="founder-chip"
                                style="background:#eff6ff;color:#2563eb;border-color:#bfdbfe;">12+ Years
                                Experience</span>
                            <span class="founder-chip"
                                style="background:#f0fdf4;color:#059669;border-color:#bbf7d0;">380+ Businesses</span>
                        </div>
                    </div>
                     <!-- Qualification chips grid -->
                    <div class="qual-grid">
                        <div class="qual-chip">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#2563eb"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;">
                                <circle cx="12" cy="8" r="6" />
                                <path d="M15.477 12.89L17 22l-5-3-5 3 1.523-9.11" />
                            </svg>
                            <span class="qual-text">Team with 15+ years of domain expertise</span>
                        </div>
                        <div class="qual-chip">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#7c3aed"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;">
                                <rect x="2" y="7" width="20" height="14" rx="2" />
                                <path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2" />
                            </svg>
                            <span class="qual-text">Hands-on experience with Basecamp, Asana &amp; Trello</span>
                        </div>
                        <div class="qual-chip">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#059669"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                <polyline points="22 4 12 14.01 9 11.01" />
                            </svg>
                            <span class="qual-text">Google &amp; Facebook Certified Partners</span>
                        </div>
                        <div class="qual-chip">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#d97706"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;">
                                <circle cx="12" cy="12" r="10" />
                                <line x1="2" y1="12" x2="22" y2="12" />
                                <path
                                    d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
                            </svg>
                            <span class="qual-text">28+ countries served globally</span>
                        </div>
                    </div>
                </div>

                <!-- Right: Message -->
                <div class="founder-msg-col">
                    <span class="founder-quote-mark">&ldquo;</span>

                    <p class="founder-p1">
                        This is Tanmay from TachoMind. I have been in this industry for the last <strong
                            style="color:#0f172a;font-weight:700;">12 years</strong>. To provide you with the best
                        digital services, I make sure to hire only the top professionals of the industry.
                    </p>

                    <p class="founder-p2">
                        To keep our digital approach fresh and to add fresh perspective, we also hire fresh faces who
                        want to excel in the digital field. In 12 years, I've worked with more than <strong
                            style="color:#0f172a;font-weight:700;">380+ businesses</strong> and understood the needs and
                        requirements they have to increase their digital revenue.
                    </p>

                    <p class="founder-p3">
                        Get in touch with us to discuss any project and decide for yourself. Looking forward to making a
                        very long service relationship.
                    </p>

                    <!-- White Label Announcement -->
                    <div class="whiteLabelBox">
                        <div class="wl-icon-box">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#2563eb"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M9 11l3 3L22 4" />
                                <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11" />
                            </svg>
                        </div>
                        <div>
                            <div class="wl-title">Exciting Announcement White Label Digital Marketing</div>
                            <div class="wl-body">We are excited to announce our <strong
                                    style="color:#1e40af;font-weight:700;">White Label Digital Marketing
                                    solutions</strong>. Partner with us to offer world-class digital services under your
                                own brand. Contact us for more details.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
     SECTION 5 — OUR TEAM
     ============================================================ -->
    <section class="about-section about-team">
        <div class="about-container">
            <div class="team-grid">

                <!-- Left: Image (order-2 on mobile) -->
                <div class="team-img-col">
                    <div class="team-img-card">
                        <img src="https://projects.tachomind.com/tachomind/wp-content/uploads/2026/06/photo-1758691737217-77302c5f988f.webp"
                            alt="TachoMind team working" class="team-img" loading="lazy"
                            onerror="this.style.display='none';" />

                        <!-- Floating chip: top-right -->
                        <div class="team-chip team-chip-tr">
                            <div class="team-chip-icon" style="background:#f0fdf4;">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#059669"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                    <circle cx="9" cy="7" r="4" />
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                </svg>
                            </div>
                            <div>
                                <div class="team-chip-value" style="color:#059669;">100+</div>
                                <div class="team-chip-label">Employees</div>
                            </div>
                        </div>

                        <!-- Floating chip: bottom-left -->
                        <div class="team-chip team-chip-bl">
                            <div class="team-chip-icon" style="background:#fffbeb;">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#d97706"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="2" y1="12" x2="22" y2="12" />
                                    <path
                                        d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
                                </svg>
                            </div>
                            <div>
                                <div class="team-chip-value" style="color:#d97706;">28+</div>
                                <div class="team-chip-label">Countries</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: Text (order-1 on mobile) -->
                <div class="team-text-col">
                    <div class="section-badge">✦ Our Team</div>
                    <h2 class="about-h2">100+ Professionals <span style="color:#2563eb">One Unified Goal</span></h2>

                    <p class="about-body-text">Team of 100+ employees to make sure your work goes smoothly. We believe
                        in delivering top-notch digital services at the lowest price possible while maintaining quality.
                        Our support team in Bhubaneswar, India ensures all our clients and agency partners get the best
                        services.</p>

                    <div class="pm-label">PROJECT MANAGEMENT TOOLS</div>
                    <div class="pm-tools">
                        <span class="pm-tool">Basecamp</span>
                        <span class="pm-tool">Asana</span>
                        <span class="pm-tool">Trello</span>
                    </div>

                    <div class="team-bullets">
                        <div class="team-bullet">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#2563eb"
                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
                                style="flex-shrink:0;">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                <polyline points="22 4 12 14.01 9 11.01" />
                            </svg>
                            <span>Team with 15+ years of domain expertise</span>
                        </div>
                        <div class="team-bullet">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#2563eb"
                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
                                style="flex-shrink:0;">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                <polyline points="22 4 12 14.01 9 11.01" />
                            </svg>
                            <span>Hands-on experience with PM tools</span>
                        </div>
                        <div class="team-bullet">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#2563eb"
                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
                                style="flex-shrink:0;">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                <polyline points="22 4 12 14.01 9 11.01" />
                            </svg>
                            <span>Top professionals + fresh talent = best results</span>
                        </div>
                        <div class="team-bullet">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#2563eb"
                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
                                style="flex-shrink:0;">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                <polyline points="22 4 12 14.01 9 11.01" />
                            </svg>
                            <span>Dedicated support for agency partners</span>
                        </div>
                    </div>

                    <a href="<?php echo home_url('/contact'); ?>" class="about-btn-primary"
                        style="display:inline-flex;align-items:center;gap:8px;">Discuss Your Project ↗</a>
                </div>

            </div>
        </div>
    </section>

    <!-- ============================================================
     SECTION 6 — CORE VALUES
     ============================================================ -->
    <section class="about-section about-values">
        <div class="about-container">
            <div class="section-header">
                <div class="section-badge">✦ What We Stand For</div>
                <h2 class="section-header-h2">Our Core Values</h2>
            </div>

            <div class="values-grid">

                <div class="value-card">
                    <div class="milestone-icon-box" style="background:#eff6ff;margin-bottom:20px;">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="8" r="6" />
                            <path d="M15.477 12.89L17 22l-5-3-5 3 1.523-9.11" />
                        </svg>
                    </div>
                    <h3 class="value-title">Certified Excellence</h3>
                    <p class="value-desc">Google Partner, Facebook Partner, and 18+ Google-certified specialists
                        upholding the highest professional standards.</p>
                </div>

                <div class="value-card">c
                    <div class="milestone-icon-box" style="background:#f5f3ff;margin-bottom:20px;">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <line x1="9" y1="18" x2="15" y2="18" />
                            <line x1="12" y1="2" x2="12" y2="9" />
                            <path d="M4.22 10.22a8 8 0 1 0 11.56 0" />
                            <line x1="12" y1="9" x2="12" y2="13" />
                        </svg>
                    </div>
                    <h3 class="value-title">Innovation First</h3>
                    <p class="value-desc">We hire top industry professionals and fresh talent alike, constantly bringing
                        new perspectives to keep our digital approach cutting-edge.</p>
                </div>

                <div class="value-card">
                    <div class="milestone-icon-box" style="background:#f0fdf4;margin-bottom:20px;">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#059669" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        </svg>
                    </div>
                    <h3 class="value-title">People-Driven</h3>
                    <p class="value-desc">100+ employees in Bhubaneswar, India. Our in-house team ensures agency
                        partners and direct clients get the same world-class service.</p>
                </div>

                <div class="value-card">
                    <div class="milestone-icon-box" style="background:#fffbeb;margin-bottom:20px;">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#d97706" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10" />
                            <line x1="2" y1="12" x2="22" y2="12" />
                            <path
                                d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
                        </svg>
                    </div>
                    <h3 class="value-title">Global, Yet Personal</h3>
                    <p class="value-desc">28+ countries served. We bring local market insight to every global strategy
                        we execute.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- ============================================================
     SECTION 7 — GLOBAL PRESENCE
     ============================================================ -->
    <section class="about-section about-global">
        <div class="about-container">
            <div class="global-header">
                <div class="section-badge">✦ Find Us</div>
                <h2 class="section-header-h2">We're a Global Team</h2>
                <p class="global-subtext">With clients across 28+ countries, TachoMind delivers world-class digital
                    marketing wherever you are.</p>
            </div>

            <!-- Office Cards -->
            <div class="office-grid">

                <!--<a href="tel:+15183036708" class="office-card">-->
                <!--    <div class="office-flag">🇺🇸</div>-->
                <!--    <div class="office-country">USA</div>-->
                <!--    <div class="office-contact">+1-518-303-6708</div>-->
                <!--    <div class="office-note">Mon–Fri, 9am–6pm EST</div>-->
                <!--</a>-->

                <a href="tel:+918917643345" class="office-card">
                    <div class="office-flag">🇮🇳</div>
                    <div class="office-country">India</div>
                    <div class="office-contact">+91-8917643345</div>
                    <div class="office-note">Mon–Sat, 9am–7pm IST</div>
                </a>

                <a href="mailto:hi@tachomind.com" class="office-card">
                    <div class="office-flag">E M</div>
                    <div class="office-country">Email</div>
                    <div class="office-contact">hi@tachomind.com</div>
                    <div class="office-note">Email anytime</div>
                </a>

            </div>

        </div>
    </section>

    <!-- ============================================================
     SECTION 8 — BOTTOM CTA (Dark)
     ============================================================ -->
    <section class="about-cta">
        <div class="about-cta-glow"></div>
        <div class="about-cta-inner">
            <div class="about-cta-icon">
                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M9 11l3 3L22 4" />
                    <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11" />
                </svg>
            </div>
            <h2 class="about-cta-headline">
                You Have a Vision. <span class="about-cta-grad">We Have a Team to Get You There.</span>
            </h2>
            <p class="about-cta-sub">Ready to speak with a marketing expert? Give us a ring or fill out a quick form. We
                reply within one business day.</p>
            <div class="about-cta-btns">
                <a href="<?php echo home_url('/contact'); ?>" class="about-btn-primary about-cta-primary">Talk To An Expert</a>
                <a href="tel:+15183036708" class="about-cta-phone">
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

<?php
}
get_footer();
?>