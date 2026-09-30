<?php
get_header();
while (have_posts()) {
  the_post();
?>

<style>
    .dm-contact-inner {
  max-width: 1024px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: repeat(2, 1fr)!important;
  gap: 20px;
}
@media screen and (max-width: 576px) {
    .dm-contact-inner {
       grid-template-columns: repeat(1, 1fr)!important;
  }
}
</style>
 <!-- HERO -->
    <section class="dm-hero">
        <div class="dm-hero-dot-grid"></div>
        <div class="dm-hero-glow"></div>
        <div class="dm-hero-inner">
            <div class="dm-breadcrumb">
                <a href="<?php echo home_url('/'); ?>" class="dm-breadcrumb-home">Home</a>
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#94a3b8" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="9 18 15 12 9 6" />
                </svg>
                <span style="color:#94a3b8;">Digital Marketing</span>
            </div>
            <div class="dm-hero-grid">
                <div class="dm-hero-left">
                    <div class="dm-hero-badge">✦ Digital Marketing</div>
                    <h1 class="dm-hero-h1"><span class="white">Brilliant Minds At Work</span><span
                            class="grad">Full-Service Digital Marketing</span></h1>
                    <p class="dm-hero-sub">As a leading digital marketing agency in India, Tachomind helps your business
                        grow globally. We mainly focus on accomplishing high rankings and high traffic for our clients.
                        Our main motto: <em>"if you don't succeed, we won't succeed."</em></p>
                    <div class="dm-hero-btns">
                        <a href="<?php echo home_url('/contact'); ?>" class="dm-btn-primary">Talk To An Expert</a>
                        <a href="#packages" class="dm-btn-ghost">View Packages</a>
                    </div>
                </div>
                <div class="dm-hero-right">
                    <div class="dm-hero-stats">
                        <div class="dm-stat-card">
                            <div class="dm-stat-icon" style="background:rgba(59,130,246,0.15);"><svg width="22"
                                    height="22" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="22 7 13.5 15.5 8.5 10.5 2 17" />
                                    <polyline points="16 7 22 7 22 13" />
                                </svg></div>
                            <div>
                                <div class="dm-stat-pre">We've generated over</div>
                                <div class="dm-stat-val">$108,231,120</div>
                            </div>
                        </div>
                        <div class="dm-stat-card">
                            <div class="dm-stat-icon" style="background:rgba(129,140,248,0.15);"><svg width="22"
                                    height="22" viewBox="0 0 24 24" fill="none" stroke="#818cf8" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="22" y1="12" x2="18" y2="12" />
                                    <line x1="6" y1="12" x2="2" y2="12" />
                                    <line x1="12" y1="2" x2="12" y2="6" />
                                    <line x1="12" y1="18" x2="12" y2="22" />
                                </svg></div>
                            <div>
                                <div class="dm-stat-pre">We've managed</div>
                                <div class="dm-stat-val">700+</div>
                            </div>
                        </div>
                        <div class="dm-stat-card">
                            <div class="dm-stat-icon" style="background:rgba(52,211,153,0.15);"><svg width="22"
                                    height="22" viewBox="0 0 24 24" fill="none" stroke="#34d399" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="8" r="6" />
                                    <path d="M15.477 12.89L17 22l-5-3-5 3 1.523-9.11" />
                                </svg></div>
                            <div>
                                <div class="dm-stat-pre">We're a</div>
                                <div class="dm-stat-val">Certified</div>
                            </div>
                        </div>
                        <div class="dm-stat-card">
                            <div class="dm-stat-icon" style="background:rgba(217,119,6,0.15);"><svg width="22"
                                    height="22" viewBox="0 0 24 24" fill="none" stroke="#fbbf24" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                    <circle cx="9" cy="7" r="4" />
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                </svg></div>
                            <div>
                                <div class="dm-stat-pre">We have</div>
                                <div class="dm-stat-val">8,000+ Accounts Handled</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICE NAV BAR -->
    <nav class="svc-nav-bar" aria-label="Service pages">
        <div class="svc-nav-inner">
            <a href="<?php echo home_url('/digital-marketing'); ?>" class="svc-nav-pill active"
                style="background:#2563eb;color:#fff;border:1px solid #2563eb;box-shadow:0 4px 14px rgba(37,99,235,0.3);"><svg
                    width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path
                        d="M22 16.92v3a2 2 0 0 1-2.18 2A19.79 19.79 0 0 1 12 18a19.5 19.5 0 0 1-5-5 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 5.6 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L9.91 9.72a16 16 0 0 0 6 6l.94-.94a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z" />
                </svg>Digital Marketing</a>
            <a href="/ppc" class="svc-nav-pill inactive"
                style="background:#f5f3ff;color:#7c3aed;border:1px solid rgba(124,58,237,0.18);"><svg width="16"
                    height="16" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <line x1="18" y1="20" x2="18" y2="10" />
                    <line x1="12" y1="20" x2="12" y2="4" />
                    <line x1="6" y1="20" x2="6" y2="14" />
                </svg>PPC</a>
            <a href="<?php echo home_url('/seo'); ?>" class="svc-nav-pill inactive"
                style="background:#ecfeff;color:#0891b2;border:1px solid rgba(8,145,178,0.18);"><svg width="16"
                    height="16" viewBox="0 0 24 24" fill="none" stroke="#0891b2" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8" />
                    <path d="M21 21l-4.35-4.35" />
                </svg>SEO</a>
            <a href="/smo" class="svc-nav-pill inactive"
                style="background:#f0fdf4;color:#059669;border:1px solid rgba(5,150,105,0.18);"><svg width="16"
                    height="16" viewBox="0 0 24 24" fill="none" stroke="#059669" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10" />
                    <line x1="2" y1="12" x2="22" y2="12" />
                    <path
                        d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
                </svg>SMO</a>
            <a href="/web-development" class="svc-nav-pill inactive"
                style="background:#fffbeb;color:#d97706;border:1px solid rgba(217,119,6,0.18);"><svg width="16"
                    height="16" viewBox="0 0 24 24" fill="none" stroke="#d97706" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <polyline points="16 18 22 12 16 6" />
                    <polyline points="8 6 2 12 8 18" />
                </svg>Web Development</a>
        </div>
    </nav>

    <!-- INTRO -->
    <section class="dm-intro">
        <div class="dm-intro-grid">
            <div class="dm-intro-img-card">
                    <img 
  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/We-Make-Your-Site-SearchEngineFriendly.webp' ); ?>" 
  alt="Digital marketing strategy" class="dm-intro-img"
  loading="lazy" onerror="this.style.display='none';"
  decoding="async"
>
                    </div>
            <div class="dm-intro-text">
                <div class="section-badge">✦ About Our Approach</div>
                <h2 class="dm-intro-h2">We Make Your Site <span style="color:#2563eb">Search Engine Friendly</span></h2>
                <p class="dm-body-text">We, as a trusted digital agency, make sure to make your site search engine
                    friendly. We understand the Google Algorithm in a better way and work accordingly. We help you in
                    achieving the top page Google ranking.</p>
                <p class="dm-body-text">Don't you think it can make a lot of difference to your business? Definitely
                    yes. While other agencies just promise to give good results in the form of traffic, we assure you
                    the results you really want.</p>
                <p class="dm-body-text">Our sole mission is on digital marketing strategies which helps in increasing
                    serious revenue for your business.</p>
                <div class="dm-check-grid">
                    <div class="dm-check-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none"
                            stroke="#2563eb" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
                            style="flex-shrink:0;">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                            <polyline points="22 4 12 14.01 9 11.01" />
                        </svg><span class="dm-check-text">8000+ Accounts Handled</span></div>
                    <div class="dm-check-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none"
                            stroke="#2563eb" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
                            style="flex-shrink:0;">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                            <polyline points="22 4 12 14.01 9 11.01" />
                        </svg><span class="dm-check-text">100+ Team Of Professional</span></div>
                    <div class="dm-check-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none"
                            stroke="#2563eb" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
                            style="flex-shrink:0;">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                            <polyline points="22 4 12 14.01 9 11.01" />
                        </svg><span class="dm-check-text">28+ Servicing Countries</span></div>
                    <div class="dm-check-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none"
                            stroke="#2563eb" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
                            style="flex-shrink:0;">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                            <polyline points="22 4 12 14.01 9 11.01" />
                        </svg><span class="dm-check-text">98% Client Retention</span></div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHAT CAN YOU GET -->
    <section class="dm-whatget">
        <div class="dm-whatget-header">
            <div class="section-badge">✦ What can an individual get from us?</div>
            <h2 class="section-header-h2">Receive a bunch of services under one roof!</h2>
            <p class="dm-whatget-sub">Here check the plethora of digital marketing services provided by us:</p>
        </div>
        <div class="dm-icon-grid">
            <div class="dm-icon-item">
                <div class="dm-icon-box" style="background:#eff6ff;"><svg width="16" height="16" viewBox="0 0 24 24"
                        fill="none" stroke="#2563eb" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="11" cy="11" r="8" />
                        <path d="M21 21l-4.35-4.35" />
                    </svg></div><span class="dm-icon-label">SEO</span>
            </div>
            <div class="dm-icon-item">
                <div class="dm-icon-box" style="background:#f5f3ff;"><svg width="16" height="16" viewBox="0 0 24 24"
                        fill="none" stroke="#7c3aed" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                        <circle cx="12" cy="10" r="3" />
                    </svg></div><span class="dm-icon-label">GMB Setup (Local SEO)</span>
            </div>
            <div class="dm-icon-item">
                <div class="dm-icon-box" style="background:#ecfeff;"><svg width="16" height="16" viewBox="0 0 24 24"
                        fill="none" stroke="#0891b2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="18" cy="5" r="3" />
                        <circle cx="6" cy="12" r="3" />
                        <circle cx="18" cy="19" r="3" />
                        <line x1="8.59" y1="13.51" x2="15.42" y2="17.49" />
                        <line x1="15.41" y1="6.51" x2="8.59" y2="10.49" />
                    </svg></div><span class="dm-icon-label">Post-creation and Social Media Management</span>
            </div>
            <div class="dm-icon-item">
                <div class="dm-icon-box" style="background:#f0fdf4;"><svg width="16" height="16" viewBox="0 0 24 24"
                        fill="none" stroke="#059669" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 20h9" />
                        <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z" />
                    </svg></div><span class="dm-icon-label">Content Writing (As needed)</span>
            </div>
            <div class="dm-icon-item">
                <div class="dm-icon-box" style="background:#fffbeb;"><svg width="16" height="16" viewBox="0 0 24 24"
                        fill="none" stroke="#d97706" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 15v4c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2v-4M17 9l-5 5-5-5M12 12.8V2.5" />
                    </svg></div><span class="dm-icon-label">Facebook/Instagram Ads</span>
            </div>
            <div class="dm-icon-item">
                <div class="dm-icon-box" style="background:#fef2f2;"><svg width="16" height="16" viewBox="0 0 24 24"
                        fill="none" stroke="#dc2626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polygon points="23 7 16 12 23 17 23 7" />
                        <rect x="1" y="5" width="15" height="14" rx="2" ry="2" />
                    </svg></div><span class="dm-icon-label">Google &amp; Youtube ads</span>
            </div>
        </div>
    </section>

    <!-- WHY DIGITAL MARKETING -->
    <section class="dm-why">
        <div class="dm-why-inner">
            <div class="dm-why-top">
                <div class="dm-why-text">
                    <div class="section-badge">✦ Why Digital Marketing?</div>
                    <h2 class="dm-why-h2">The Proven Strategy for <span style="color:#2563eb">Visibility &amp;
                            Traffic</span></h2>
                    <p class="dm-body-text">If you want to make effective strategies for the visibility of your business
                        online, then a digital marketing company will be a one-stop solution for you.</p>
                    <p class="dm-body-text">Digital marketing or online marketing is the proven marketing strategy that
                        offers visibility and traffic to your site at the minimum cost. Digital marketing shows the
                        power of the internet. It can take your business to the peak of success by boosting its website
                        traffic.</p>
                    <p class="dm-body-text">If you own a business that doesn't give you a satisfactory revenue rate,
                        then this is the right time to implement the digital marketing agency. We are the leading
                        digital marketing agency that ensures to take your business to the next level. We at TachoMind,
                        a digital marketing agency, will help you by giving visibility to your business on digital
                        platforms.</p>
                    <p class="dm-body-text">With us, you will not only reach your targeted audience but also convert
                        them into your clients. As a business owner, you have to battle with a lot of competitors.
                        Ranking a business on the digital platform sometimes needs time, but when you have the helping
                        hands of a digital marketing company like us, it becomes easy!</p>
                </div>
                <div class="dm-why-img-col">
                    <div class="dm-why-img-card">
                            <img 
  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/The-Proven-Strategy-for-Visibility-&-Traffic.webp' ); ?>" 
  alt="Business meeting strategy" class="dm-why-img"
  loading="lazy"
  decoding="async" onerror="this.style.display='none';"
>
                            </div>
                </div>
            </div>
            <div class="dm-why-bottom">
                <p class="dm-body-text">A lot of businesses are added to the online platform in each hour, so making
                    your business ranked could be the greatest issue. It really seems tough to be in the race in this
                    competitive world. Therefore, it is necessary to have a digital presence on the internet so that you
                    can emerge as a powerful brand. If you want to achieve new heights, then you have to implement the
                    digital marketing strategy!</p>
                <p class="dm-body-text">Improve your website with the best digital marketing team. As experts in web
                    designing, we help in boosting your business growth. We have the best plans with the latest
                    technology tools that help in executing the required traffic and rankings your business seeks for.
                    With the help of our digital marketing services, you will be on the top of every search engine
                    results. We have the best SEO Services that cover a vital procedure in Digital Marketing.</p>
                <p class="dm-body-text">Online Reputation Management SEO Services, to achieve your business target.
                    Redesign your website with our best digital marketing strategies. We are the best choice for your
                    business as we seriously want our work to build your digital presence for your target audiences.</p>
                <p class="dm-body-text">In recent times, the digital marketing term emerges as a new way of marketing.
                    Promoting your business is the only way to attract global and local users. In order to promote your
                    business, you need to hire a digital marketing agency. As per the recent report, there is a 27% hike
                    in digital marketing advertisements and campaigns. If your business still didn't receive the
                    required attention from the targeted consumers, then this is the right time to talk with a digital
                    marketing agency like us!</p>
                <p class="dm-body-text">A business can easily achieve its goal if it gets enough connections. There were
                    almost billions of active internet users at the need of 2020 who mostly preferred the online media
                    to purchase any kind of service. Also, those days are gone when you visit door to door for promoting
                    and advertising your products to the users. The internet makes things quite easier. Now you can post
                    ads on digital media so that more and more people can click on them. As an owner, you are always
                    looking for new strategies to expand your reachability. By connecting with TachoMind, you can open
                    the door for people who are in search of the service providers like you!</p>
                <p class="dm-body-text">If you are a newbie to this business industry and feel worried after considering
                    your sales rate or reachability of the site, then you are at a safe place. A successful digital
                    marketing company like us will deliver you the best possible results. We are the best solution that
                    your business needs. We have an unbelievable history of delivering on-time projects for diverse
                    industries. Furthermore, we go above and beyond the horizon for delivering long-term results. We
                    have passionate marketers and certified digital marketing consultants who have ideas on how to
                    exceed a business from scratch!</p>
            </div>
        </div>
    </section><!-- SERVICES DETAIL -->
<section class="dm-services">
    <div class="dm-services-inner">
        <div class="section-header" style="text-align:center;margin-bottom:56px;">
            <div class="section-badge">✦ Our Digital Marketing Services</div>
            <h2 class="section-header-h2">At TachoMind, you can receive A to Z online digital marketing services under
                one roof</h2>
        </div>
        <div class="dm-svc-blocks">

            <!-- Block 0: image LEFT, text RIGHT -->
            <div class="dm-svc-block">
                <div class="dm-svc-img-wrap">
                    <div class="dm-svc-img-card">
                        <img 
  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/seo.webp' ); ?>" 
  alt="SEO" class="dm-svc-img"
  loading="lazy"
  decoding="async" onerror="this.style.display='none';"
></div>
                </div>
                <div class="dm-svc-text">
                    <div class="dm-svc-icon-box" style="background:#eff6ff;"><svg width="20" height="20"
                            viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8" />
                            <path d="M21 21l-4.35-4.35" />
                        </svg></div>
                    <h3 class="dm-svc-h3">SEO</h3>
                    <p class="dm-svc-desc">Search engine marketing is the most searched and used term in the industry in
                        recent years. This field is emerging at an amazing rate. As a digital marketing company, we have
                        the best SEO experts who understand your brands. We know how much it is important to run SEO
                        specialized campaigns for your business. Everyone wants to make their business visible on the
                        top search engine page. The team of TachoMind, an online marketing agency, will definitely help
                        your business to emerge from scratch.</p>
                </div>
            </div>

            <!-- Block 1: image RIGHT, text LEFT -->
            <div class="dm-svc-block alt">
                <div class="dm-svc-text">
                    <div class="dm-svc-icon-box" style="background:#f5f3ff;"><svg width="20" height="20"
                            viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                            <circle cx="12" cy="10" r="3" />
                        </svg></div>
                    <h3 class="dm-svc-h3">GMB Setup (Local SEO)</h3>
                    <p class="dm-svc-desc">Local search engine service could give better exposure to your business. If
                        you want to reach the local audience, then it will help you. If you face any kind of issues in
                        the site regarding its visibility, audience, and reachability, then you can come to us! So, if
                        you want to expand your business, then purchase this service from us!</p>
                </div>
                <div class="dm-svc-img-wrap">
                    <div class="dm-svc-img-card">
                            
                            <img 
  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/GMB-Setup-(Local SEO).webp' ); ?>" 
  alt="SEO" class="dm-svc-img"
  loading="lazy"
  decoding="async" onerror="this.style.display='none';"
>
                    </div>
                </div>
            </div>

            <!-- Block 2: image LEFT, text RIGHT -->
            <div class="dm-svc-block">
                <div class="dm-svc-img-wrap">
                    <div class="dm-svc-img-card">
                        <img 
  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Post-creation-and-Social-Media-Management.webp' ); ?>" 
  alt="SEO" class="dm-svc-img"
  loading="lazy"
  decoding="async" onerror="this.style.display='none';"
></div>
                </div>
                <div class="dm-svc-text">
                    <div class="dm-svc-icon-box" style="background:#ecfeff;"><svg width="20" height="20"
                            viewBox="0 0 24 24" fill="none" stroke="#0891b2" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <circle cx="18" cy="5" r="3" />
                            <circle cx="6" cy="12" r="3" />
                            <circle cx="18" cy="19" r="3" />
                            <line x1="8.59" y1="13.51" x2="15.42" y2="17.49" />
                            <line x1="15.41" y1="6.51" x2="8.59" y2="10.49" />
                        </svg></div>
                    <h3 class="dm-svc-h3">Post-creation and Social Media Management</h3>
                    <p class="dm-svc-desc">In this generation, most of us are using social media in our day-to-day life.
                        The number of active social media users is increasing at a rapid pace, and that's why it is
                        considered as greater exposure for the business. By visiting us, you can make your business
                        reachable and visible. We create fresh content related to your industry keywords and manage your
                        social media handles. Social media is the only platform where you can create your brand image in
                        a unique, creative, and fun way!</p>
                </div>
            </div>

            <!-- Block 3: image RIGHT, text LEFT -->
            <div class="dm-svc-block alt">
                <div class="dm-svc-text">
                    <div class="dm-svc-icon-box" style="background:#f0fdf4;"><svg width="20" height="20"
                            viewBox="0 0 24 24" fill="none" stroke="#059669" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M12 20h9" />
                            <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z" />
                        </svg></div>
                    <h3 class="dm-svc-h3">Content Writing (As needed)</h3>
                    <p class="dm-svc-desc">Every one of us says a website is the king of any business. But according to
                        us, if a website is a king, then the content is the kingdom of any business. We, at TachoMind,
                        offer unique and fresh content that too at the lowest price. From us, you can receive
                        high-quality, grammatical-error-free contents that will hike the ranking of your site instantly.
                        In addition, we have the industry's best writers who will help you to become visible on the
                        search engine with the related keywords.</p>
                </div>
                <div class="dm-svc-img-wrap">
                    <div class="dm-svc-img-card">
                        <img 
  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Content-Writing.webp' ); ?>" 
  alt="SEO" class="dm-svc-img"
  loading="lazy"
  decoding="async" onerror="this.style.display='none';"
></div>
                </div>
            </div>

            <!-- Block 4: image LEFT, text RIGHT -->
            <div class="dm-svc-block">
                <div class="dm-svc-img-wrap">
                    <div class="dm-svc-img-card">
                            <img 
  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/FacebookInstagram-Ads.webp' ); ?>" 
   alt="Facebook Instagram Ads" class="dm-svc-img" loading="lazy"
                            onerror="this.style.display='none';"
/>
                            
                            </div>
                </div>
                <div class="dm-svc-text">
                    <div class="dm-svc-icon-box" style="background:#fffbeb;"><svg width="20" height="20"
                            viewBox="0 0 24 24" fill="none" stroke="#d97706" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M3 15v4c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2v-4M17 9l-5 5-5-5M12 12.8V2.5" />
                        </svg></div>
                    <h3 class="dm-svc-h3">Facebook/Instagram Ads</h3>
                    <p class="dm-svc-desc">PPC is the ultimate solution for any business. This is a well-targeted and
                        unique marketing campaign where you have to pay for each click of users. It can maximize your
                        profits and offer better exposure, especially to the start-up business. It can give your
                        business instant visibility and deliver better traffic. When someone clicks on your Ad, then it
                        will direct him/her to your website. There are many social media platforms like Facebook and
                        Instagram where you can post your ads. Facebook is one of the greatest and powerful media
                        platforms that can give the power to generate leads.</p>
                </div>
            </div>

            <!-- Block 5: image RIGHT, text LEFT -->
            <div class="dm-svc-block alt">
                <div class="dm-svc-text">
                    <div class="dm-svc-icon-box" style="background:#fef2f2;"><svg width="20" height="20"
                            viewBox="0 0 24 24" fill="none" stroke="#dc2626" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <polygon points="23 7 16 12 23 17 23 7" />
                            <rect x="1" y="5" width="15" height="14" rx="2" ry="2" />
                        </svg></div>
                    <h3 class="dm-svc-h3">Google &amp; Youtube ads</h3>
                    <p class="dm-svc-desc">Google Ads is another service provided by TachoMind. Google is the most
                        visited search engine platform. A lot of people visit google daily to refresh their needs. If
                        you want to make your website visible to those billions of people, then Google Ads could help
                        you. We also provide Youtube ads where you can promote your business on youtube without
                        investing so many amounts!</p>
                </div>
                <div class="dm-svc-img-wrap">
                    <div class="dm-svc-img-card"><img 
  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Google-Youtube-ads.webp' ); ?>" 
  alt="Google Youtube Ads" class="dm-svc-img" loading="lazy"
                            onerror="this.style.display='none';" />
                            </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PROCESS -->
<section class="dm-process">
    <div class="section-header" style="text-align:center;margin-bottom:56px;">
        <div class="section-badge">✦ How We Work</div>
        <h2 class="section-header-h2">Our Process Step by Step</h2>
    </div>
    <div class="dm-steps-grid">
        <div class="dm-step-card">
            <div class="dm-step-num">01</div>
            <p class="dm-step-text">At TachoMind, you can receive a comprehensive range of services that can make your
                business grow.</p>
        </div>
        <div class="dm-step-card">
            <div class="dm-step-num">02</div>
            <p class="dm-step-text">To survive in this competitive world, the first thing your business needs is
                attention.</p>
        </div>
        <div class="dm-step-card">
            <div class="dm-step-num">03</div>
            <p class="dm-step-text">A business will become successful when it gets proper attention from not only the
                local audience but also from the global audience too.</p>
        </div>
        <div class="dm-step-card">
            <div class="dm-step-num">04</div>
            <p class="dm-step-text">The digital marketing agency will help you to overcome the challenges by maximizing
                online research.</p>
        </div>
        <div class="dm-step-card">
            <div class="dm-step-num">05</div>
            <p class="dm-step-text">We have a team of digital market experts who will organize a meeting with you.
                First, we listen to you and understand the goal of your business.</p>
        </div>
        <div class="dm-step-card">
            <div class="dm-step-num">06</div>
            <p class="dm-step-text">After that, we do proper research regarding the business, product, and its
                competitors.</p>
        </div>
        <div class="dm-step-card">
            <div class="dm-step-num">07</div>
            <p class="dm-step-text">We believe in researching things so that we can deliver you something better than
                you expected.</p>
        </div>
    </div>
    <div class="dm-process-textbox" style="margin-top:40px;">
        <p>At TachoMind, you can receive the A to Z online digital marketing services under one roof. Our digital
            marketing consultant team deals with a variety of clients. Till now, we have successfully completed more
            than thousands of projects. As a result, we have gained many happy clients who believe in us.</p>
        <p>We make every possible effort so that your business website can reach the top. Here you will get SEO
            services, SMM services, Content marketing, and PPC marketing campaigns at a low cost. We excel in every
            aspect of your business, and on the basis of that, we make strategies. Our only motto is to deliver you the
            digital excellence for which you are starving!</p>
    </div>
</section>

<!-- PACKAGES -->
<!--<section class="dm-packages" id="packages">-->
<!--    <div class="dm-packages-header">-->
<!--        <div class="section-badge">✦ Our Packages</div>-->
<!--        <h2 class="section-header-h2" style="max-width:700px;margin:0 auto 12px;">Are you looking for an advanced-->
<!--            marketing strategy to experience the spike in your sales rate?</h2>-->
<!--        <p class="dm-packages-sub">4 options per tier SEO → SEO + GMB → SEO + GMB + SMO → Full Package</p>-->
<!--    </div>-->
    <!-- Column headers -->
<!--    <div class="pkg-col-headers" style="margin-top:56px;">-->
<!--        <div class="pkg-col-empty"></div>-->
<!--        <div class="pkg-col-label">SEO</div>-->
<!--        <div class="pkg-col-label">SEO + GMB</div>-->
<!--        <div class="pkg-col-label">SEO + GMB + SMO</div>-->
<!--        <div class="pkg-col-label">Full Package</div>-->
<!--    </div>-->
<!--    <div class="dm-pkg-rows">-->

        <!-- Tier A -->
<!--        <div class="pkg-row">-->
<!--            <div class="pkg-grid">-->
<!--                <div class="pkg-tier-cell" style="background:#eff6ff;">-->
<!--                    <div class="pkg-tier-icon" style="border-color:rgba(37,99,235,0.3);"><span class="pkg-tier-letter"-->
<!--                            style="color:#2563eb;">A</span></div>-->
<!--                    <div>-->
<!--                        <div class="pkg-tier-sublabel">Tier</div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="pkg-price-cell">-->
<!--                    <div class="pkg-price" style="color:#2563eb;">$399<span-->
<!--                            style="font-size:0.7rem;font-weight:500;">/mo</span></div>-->
<!--                    <div class="pkg-col-mobile-label">SEO</div>-->
<!--                </div>-->
<!--                <div class="pkg-price-cell">-->
<!--                    <div class="pkg-price" style="color:#2563eb;">$449<span-->
<!--                            style="font-size:0.7rem;font-weight:500;">/mo</span></div>-->
<!--                    <div class="pkg-col-mobile-label">SEO + GMB</div>-->
<!--                </div>-->
<!--                <div class="pkg-price-cell">-->
<!--                    <div class="pkg-price" style="color:#2563eb;">$499<span-->
<!--                            style="font-size:0.7rem;font-weight:500;">/mo</span></div>-->
<!--                    <div class="pkg-col-mobile-label">SEO + GMB + SMO</div>-->
<!--                </div>-->
<!--                <div class="pkg-price-cell" style="border-right:none;">-->
<!--                    <div class="pkg-price" style="color:#2563eb;">$599<span-->
<!--                            style="font-size:0.7rem;font-weight:500;">/mo</span></div>-->
<!--                    <div class="pkg-col-mobile-label">Full Package</div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="pkg-includes">-->
<!--                <div class="pkg-include-item"><svg width="12" height="12" viewBox="0 0 24 24" fill="none"-->
<!--                        stroke="#2563eb" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">-->
<!--                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />-->
<!--                        <polyline points="22 4 12 14.01 9 11.01" />-->
<!--                    </svg><span class="pkg-include-text">10 Post creation and Social Media Management</span></div>-->
<!--                <div class="pkg-include-item"><svg width="12" height="12" viewBox="0 0 24 24" fill="none"-->
<!--                        stroke="#2563eb" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">-->
<!--                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />-->
<!--                        <polyline points="22 4 12 14.01 9 11.01" />-->
<!--                    </svg><span class="pkg-include-text">Facebook/Instagram Ads Upto $500</span></div>-->
<!--                <a href="<?php echo home_url('/contact'); ?>" class="pkg-cta-btn" style="background:#2563eb;">Choose Plan</a>-->
<!--            </div>-->
<!--        </div>-->

        <!-- Tier A+ (Popular) -->
<!--        <div class="pkg-row popular" style="border-color:#7c3aed;box-shadow:0 6px 24px rgba(124,58,237,0.12);">-->
<!--            <div class="pkg-popular-badge" style="background:#7c3aed;">Most Popular</div>-->
<!--            <div class="pkg-grid">-->
<!--                <div class="pkg-tier-cell" style="background:#f5f3ff;">-->
<!--                    <div class="pkg-tier-icon" style="border-color:rgba(124,58,237,0.3);"><span class="pkg-tier-letter"-->
<!--                            style="color:#7c3aed;">A+</span></div>-->
<!--                    <div>-->
<!--                        <div class="pkg-tier-sublabel">Tier</div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="pkg-price-cell">-->
<!--                    <div class="pkg-price" style="color:#7c3aed;">$799<span-->
<!--                            style="font-size:0.7rem;font-weight:500;">/mo</span></div>-->
<!--                    <div class="pkg-col-mobile-label">SEO</div>-->
<!--                </div>-->
<!--                <div class="pkg-price-cell">-->
<!--                    <div class="pkg-price" style="color:#7c3aed;">$999<span-->
<!--                            style="font-size:0.7rem;font-weight:500;">/mo</span></div>-->
<!--                    <div class="pkg-col-mobile-label">SEO + GMB</div>-->
<!--                </div>-->
<!--                <div class="pkg-price-cell">-->
<!--                    <div class="pkg-price" style="color:#7c3aed;">$1,049<span-->
<!--                            style="font-size:0.7rem;font-weight:500;">/mo</span></div>-->
<!--                    <div class="pkg-col-mobile-label">SEO + GMB + SMO</div>-->
<!--                </div>-->
<!--                <div class="pkg-price-cell" style="border-right:none;">-->
<!--                    <div class="pkg-price" style="color:#7c3aed;">$1,199<span-->
<!--                            style="font-size:0.7rem;font-weight:500;">/mo</span></div>-->
<!--                    <div class="pkg-col-mobile-label">Full Package</div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="pkg-includes">-->
<!--                <div class="pkg-include-item"><svg width="12" height="12" viewBox="0 0 24 24" fill="none"-->
<!--                        stroke="#7c3aed" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">-->
<!--                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />-->
<!--                        <polyline points="22 4 12 14.01 9 11.01" />-->
<!--                    </svg><span class="pkg-include-text">10 Post creation and Social Media Management</span></div>-->
<!--                <div class="pkg-include-item"><svg width="12" height="12" viewBox="0 0 24 24" fill="none"-->
<!--                        stroke="#7c3aed" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">-->
<!--                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />-->
<!--                        <polyline points="22 4 12 14.01 9 11.01" />-->
<!--                    </svg><span class="pkg-include-text">Facebook/Instagram Ads Upto $1,000</span></div>-->
<!--                <a href="<?php echo home_url('/contact'); ?>" class="pkg-cta-btn" style="background:#7c3aed;">Choose Plan</a>-->
<!--            </div>-->
<!--        </div>-->

        <!-- Tier B -->
<!--        <div class="pkg-row">-->
<!--            <div class="pkg-grid">-->
<!--                <div class="pkg-tier-cell" style="background:#ecfeff;">-->
<!--                    <div class="pkg-tier-icon" style="border-color:rgba(8,145,178,0.3);"><span class="pkg-tier-letter"-->
<!--                            style="color:#0891b2;">B</span></div>-->
<!--                    <div>-->
<!--                        <div class="pkg-tier-sublabel">Tier</div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="pkg-price-cell">-->
<!--                    <div class="pkg-price" style="color:#0891b2;">$1,599<span-->
<!--                            style="font-size:0.7rem;font-weight:500;">/mo</span></div>-->
<!--                    <div class="pkg-col-mobile-label">SEO</div>-->
<!--                </div>-->
<!--                <div class="pkg-price-cell">-->
<!--                    <div class="pkg-price" style="color:#0891b2;">$1,799<span-->
<!--                            style="font-size:0.7rem;font-weight:500;">/mo</span></div>-->
<!--                    <div class="pkg-col-mobile-label">SEO + GMB</div>-->
<!--                </div>-->
<!--                <div class="pkg-price-cell">-->
<!--                    <div class="pkg-price" style="color:#0891b2;">$1,899<span-->
<!--                            style="font-size:0.7rem;font-weight:500;">/mo</span></div>-->
<!--                    <div class="pkg-col-mobile-label">SEO + GMB + SMO</div>-->
<!--                </div>-->
<!--                <div class="pkg-price-cell" style="border-right:none;">-->
<!--                    <div class="pkg-price" style="color:#0891b2;">$2,099<span-->
<!--                            style="font-size:0.7rem;font-weight:500;">/mo</span></div>-->
<!--                    <div class="pkg-col-mobile-label">Full Package</div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="pkg-includes">-->
<!--                <div class="pkg-include-item"><svg width="12" height="12" viewBox="0 0 24 24" fill="none"-->
<!--                        stroke="#0891b2" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">-->
<!--                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />-->
<!--                        <polyline points="22 4 12 14.01 9 11.01" />-->
<!--                    </svg><span class="pkg-include-text">10 Post creation and Social Media Management</span></div>-->
<!--                <div class="pkg-include-item"><svg width="12" height="12" viewBox="0 0 24 24" fill="none"-->
<!--                        stroke="#0891b2" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">-->
<!--                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />-->
<!--                        <polyline points="22 4 12 14.01 9 11.01" />-->
<!--                    </svg><span class="pkg-include-text">Facebook/Instagram Ads Upto $2,500</span></div>-->
<!--                <a href="<?php echo home_url('/contact'); ?>" class="pkg-cta-btn" style="background:#0891b2;">Choose Plan</a>-->
<!--            </div>-->
<!--        </div>-->

        <!-- Tier B+ -->
<!--        <div class="pkg-row">-->
<!--            <div class="pkg-grid">-->
<!--                <div class="pkg-tier-cell" style="background:#f0fdf4;">-->
<!--                    <div class="pkg-tier-icon" style="border-color:rgba(5,150,105,0.3);"><span class="pkg-tier-letter"-->
<!--                            style="color:#059669;">B+</span></div>-->
<!--                    <div>-->
<!--                        <div class="pkg-tier-sublabel">Tier</div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="pkg-price-cell">-->
<!--                    <div class="pkg-price" style="color:#059669;">$3,999<span-->
<!--                            style="font-size:0.7rem;font-weight:500;">/mo</span></div>-->
<!--                    <div class="pkg-col-mobile-label">SEO</div>-->
<!--                </div>-->
<!--                <div class="pkg-price-cell">-->
<!--                    <div class="pkg-price" style="color:#059669;">$4,499<span-->
<!--                            style="font-size:0.7rem;font-weight:500;">/mo</span></div>-->
<!--                    <div class="pkg-col-mobile-label">SEO + GMB</div>-->
<!--                </div>-->
<!--                <div class="pkg-price-cell">-->
<!--                    <div class="pkg-price" style="color:#059669;">$4,999<span-->
<!--                            style="font-size:0.7rem;font-weight:500;">/mo</span></div>-->
<!--                    <div class="pkg-col-mobile-label">SEO + GMB + SMO</div>-->
<!--                </div>-->
<!--                <div class="pkg-price-cell" style="border-right:none;">-->
<!--                    <div class="pkg-price" style="color:#059669;">$5,999<span-->
<!--                            style="font-size:0.7rem;font-weight:500;">/mo</span></div>-->
<!--                    <div class="pkg-col-mobile-label">Full Package</div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="pkg-includes">-->
<!--                <div class="pkg-include-item"><svg width="12" height="12" viewBox="0 0 24 24" fill="none"-->
<!--                        stroke="#059669" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">-->
<!--                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />-->
<!--                        <polyline points="22 4 12 14.01 9 11.01" />-->
<!--                    </svg><span class="pkg-include-text">10 Post creation and Social Media Management</span></div>-->
<!--                <div class="pkg-include-item"><svg width="12" height="12" viewBox="0 0 24 24" fill="none"-->
<!--                        stroke="#059669" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">-->
<!--                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />-->
<!--                        <polyline points="22 4 12 14.01 9 11.01" />-->
<!--                    </svg><span class="pkg-include-text">Facebook/Instagram Ads Upto $7,500</span></div>-->
<!--                <a href="<?php echo home_url('/contact'); ?>" class="pkg-cta-btn" style="background:#059669;">Choose Plan</a>-->
<!--            </div>-->
<!--        </div>-->

        <!-- Tier C -->
<!--        <div class="pkg-row">-->
<!--            <div class="pkg-grid">-->
<!--                <div class="pkg-tier-cell" style="background:#fffbeb;">-->
<!--                    <div class="pkg-tier-icon" style="border-color:rgba(217,119,6,0.3);"><span class="pkg-tier-letter"-->
<!--                            style="color:#d97706;">C</span></div>-->
<!--                    <div>-->
<!--                        <div class="pkg-tier-sublabel">Tier</div>-->
<!--                        <div class="pkg-tier-keywords" style="color:#d97706;">100 Keywords</div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="pkg-price-cell">-->
<!--                    <div class="pkg-price" style="color:#d97706;">$7,999<span-->
<!--                            style="font-size:0.7rem;font-weight:500;">/mo</span></div>-->
<!--                    <div class="pkg-col-mobile-label">SEO</div>-->
<!--                </div>-->
<!--                <div class="pkg-price-cell">-->
<!--                    <div class="pkg-price" style="color:#d97706;">$8,999<span-->
<!--                            style="font-size:0.7rem;font-weight:500;">/mo</span></div>-->
<!--                    <div class="pkg-col-mobile-label">SEO + GMB</div>-->
<!--                </div>-->
<!--                <div class="pkg-price-cell">-->
<!--                    <div class="pkg-price" style="color:#d97706;">$9,999<span-->
<!--                            style="font-size:0.7rem;font-weight:500;">/mo</span></div>-->
<!--                    <div class="pkg-col-mobile-label">SEO + GMB + SMO</div>-->
<!--                </div>-->
<!--                <div class="pkg-price-cell" style="border-right:none;">-->
<!--                    <div class="pkg-price" style="color:#d97706;">$11,999<span-->
<!--                            style="font-size:0.7rem;font-weight:500;">/mo</span></div>-->
<!--                    <div class="pkg-col-mobile-label">Full Package</div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="pkg-includes">-->
<!--                <div class="pkg-include-item"><svg width="12" height="12" viewBox="0 0 24 24" fill="none"-->
<!--                        stroke="#d97706" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">-->
<!--                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />-->
<!--                        <polyline points="22 4 12 14.01 9 11.01" />-->
<!--                    </svg><span class="pkg-include-text">10 Post creation and Social Media Management</span></div>-->
<!--                <div class="pkg-include-item"><svg width="12" height="12" viewBox="0 0 24 24" fill="none"-->
<!--                        stroke="#d97706" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">-->
<!--                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />-->
<!--                        <polyline points="22 4 12 14.01 9 11.01" />-->
<!--                    </svg><span class="pkg-include-text">Facebook/Instagram Ads Upto $20,000</span></div>-->
<!--                <a href="<?php echo home_url('/contact'); ?>" class="pkg-cta-btn" style="background:#d97706;">Choose Plan</a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->


<section class="dm-packages" id="packages">

    <div class="dm-packages-header">
        <div class="section-badge">✦ Our Packages</div>

        <h2 class="section-header-h2"
            style="max-width:700px;margin:0 auto 12px;">
            Are you looking for an advanced marketing strategy to experience
            the spike in your sales rate?
        </h2>

        <p class="dm-packages-sub">
            Choose the right package and billing cycle for your business.
        </p>
    </div>


    <!-- =========================================
         COLUMN HEADERS
    ========================================== -->

    <div class="pkg-col-headers" style="margin-top:56px;">

        <div class="pkg-col-empty"></div>

        <div class="pkg-col-label">
            Annually
        </div>

        <div class="pkg-col-label">
            Half Yearly
        </div>

        <div class="pkg-col-label">
            Quarterly
        </div>

        <div class="pkg-col-label">
            Monthly
        </div>

    </div>


    <div class="dm-pkg-rows">


        <!-- =========================================
             PACKAGE A
        ========================================== -->

        <div class="pkg-row">

            <div class="pkg-grid">

                <div class="pkg-tier-cell"
                     style="background:#eff6ff;">

                    <div class="pkg-tier-icon"
                         style="border-color:rgba(37,99,235,0.3);">

                        <span class="pkg-tier-letter"
                              style="color:#2563eb;">
                            A
                        </span>

                    </div>

                    <div>

                        <div class="pkg-tier-sublabel">
                            Tier
                        </div>

                        <div class="pkg-tier-keywords"
                             style="color:#2563eb;">
                            10 Keywords
                        </div>

                    </div>

                </div>


                <!-- Annual -->
                <div class="pkg-price-cell">

                    <div class="pkg-price"
                         style="color:#2563eb;">
                        $399
                        <span style="font-size:0.7rem;font-weight:500;">
                            /mo
                        </span>
                    </div>

                    <div class="pkg-col-mobile-label">
                        Annually
                    </div>

                </div>


                <!-- Half Yearly -->
                <div class="pkg-price-cell">

                    <div class="pkg-price"
                         style="color:#2563eb;">
                        $449
                        <span style="font-size:0.7rem;font-weight:500;">
                            /mo
                        </span>
                    </div>

                    <div class="pkg-col-mobile-label">
                        Half Yearly
                    </div>

                </div>


                <!-- Quarterly -->
                <div class="pkg-price-cell">

                    <div class="pkg-price"
                         style="color:#2563eb;">
                        $499
                        <span style="font-size:0.7rem;font-weight:500;">
                            /mo
                        </span>
                    </div>

                    <div class="pkg-col-mobile-label">
                        Quarterly
                    </div>

                </div>


                <!-- Monthly -->
                <div class="pkg-price-cell"
                     style="border-right:none;">

                    <div class="pkg-price"
                         style="color:#2563eb;">
                        $599
                        <span style="font-size:0.7rem;font-weight:500;">
                            /mo
                        </span>
                    </div>

                    <div class="pkg-col-mobile-label">
                        Monthly
                    </div>

                </div>

            </div>


            <!-- Features -->

            <div class="pkg-includes">

                <div class="pkg-include-item">
                    <span class="pkg-check" style="color:#2563eb;">✓</span>
                    <span class="pkg-include-text">
                        10 Keywords
                    </span>
                </div>

                <div class="pkg-include-item">
                    <span class="pkg-check" style="color:#2563eb;">✓</span>
                    <span class="pkg-include-text">
                        GMB Setup (Local SEO)
                    </span>
                </div>

                <div class="pkg-include-item">
                    <span class="pkg-check" style="color:#2563eb;">✓</span>
                    <span class="pkg-include-text">
                        10 Post Creation and Social Media Management
                    </span>
                </div>

                <div class="pkg-include-item">
                    <span class="pkg-check" style="color:#2563eb;">✓</span>
                    <span class="pkg-include-text">
                        Content Writing (As Needed)
                    </span>
                </div>

                <div class="pkg-include-item">
                    <span class="pkg-check" style="color:#2563eb;">✓</span>
                    <span class="pkg-include-text">
                        Facebook/Instagram Ads Up to $500
                    </span>
                </div>

                <div class="pkg-include-item">
                    <span class="pkg-check" style="color:#2563eb;">✓</span>
                    <span class="pkg-include-text">
                        Google Ads Extra
                    </span>
                </div>


                <button
                    type="button"
                    class="pkg-cta-btn"
                    style="background:#2563eb;border:0;"
                    data-bs-toggle="modal"
                    data-bs-target="#modal_v"
                    data-bs-whatever="Digital-marketing Package-type: A">
                    Choose Plan
                </button>

            </div>

        </div>



        <!-- =========================================
             PACKAGE A+
        ========================================== -->

        <div class="pkg-row popular"
             style="
                border-color:#7c3aed;
                box-shadow:rgba(124,58,237,0.12) 0 6px 24px;
             ">

            <div class="pkg-popular-badge"
                 style="background:#7c3aed;">
                Most Popular
            </div>


            <div class="pkg-grid">

                <div class="pkg-tier-cell"
                     style="background:#f5f3ff;">

                    <div class="pkg-tier-icon"
                         style="border-color:rgba(124,58,237,0.3);">

                        <span class="pkg-tier-letter"
                              style="color:#7c3aed;">
                            A+
                        </span>

                    </div>

                    <div>

                        <div class="pkg-tier-sublabel">
                            Tier
                        </div>

                        <div class="pkg-tier-keywords"
                             style="color:#7c3aed;">
                            20 Keywords
                        </div>

                    </div>

                </div>


                <!-- Annual -->
                <div class="pkg-price-cell">

                    <div class="pkg-price"
                         style="color:#7c3aed;">
                        $799
                        <span style="font-size:0.7rem;font-weight:500;">
                            /mo
                        </span>
                    </div>

                    <div class="pkg-col-mobile-label">
                        Annually
                    </div>

                </div>


                <!-- Half Yearly -->
                <div class="pkg-price-cell">

                    <div class="pkg-price"
                         style="color:#7c3aed;">
                        $999
                        <span style="font-size:0.7rem;font-weight:500;">
                            /mo
                        </span>
                    </div>

                    <div class="pkg-col-mobile-label">
                        Half Yearly
                    </div>

                </div>


                <!-- Quarterly -->
                <div class="pkg-price-cell">

                    <div class="pkg-price"
                         style="color:#7c3aed;">
                        $1,049
                        <span style="font-size:0.7rem;font-weight:500;">
                            /mo
                        </span>
                    </div>

                    <div class="pkg-col-mobile-label">
                        Quarterly
                    </div>

                </div>


                <!-- Monthly -->
                <div class="pkg-price-cell"
                     style="border-right:none;">

                    <div class="pkg-price"
                         style="color:#7c3aed;">
                        $1,199
                        <span style="font-size:0.7rem;font-weight:500;">
                            /mo
                        </span>
                    </div>

                    <div class="pkg-col-mobile-label">
                        Monthly
                    </div>

                </div>

            </div>


            <!-- Features -->

            <div class="pkg-includes">

                <div class="pkg-include-item">
                    <span class="pkg-check" style="color:#7c3aed;">✓</span>
                    <span class="pkg-include-text">
                        20 Keywords
                    </span>
                </div>

                <div class="pkg-include-item">
                    <span class="pkg-check" style="color:#7c3aed;">✓</span>
                    <span class="pkg-include-text">
                        GMB Setup (Local SEO)
                    </span>
                </div>

                <div class="pkg-include-item">
                    <span class="pkg-check" style="color:#7c3aed;">✓</span>
                    <span class="pkg-include-text">
                        20 Posts on Social Media
                    </span>
                </div>

                <div class="pkg-include-item">
                    <span class="pkg-check" style="color:#7c3aed;">✓</span>
                    <span class="pkg-include-text">
                        Content Writing (As Needed)
                    </span>
                </div>

                <div class="pkg-include-item">
                    <span class="pkg-check" style="color:#7c3aed;">✓</span>
                    <span class="pkg-include-text">
                        Facebook/Instagram Ads Up to $1,000
                    </span>
                </div>

                <div class="pkg-include-item">
                    <span class="pkg-check" style="color:#7c3aed;">✓</span>
                    <span class="pkg-include-text">
                        Google Ads Up to $1,000
                    </span>
                </div>


                <button
                    type="button"
                    class="pkg-cta-btn"
                    style="background:#7c3aed;border:0;"
                    data-bs-toggle="modal"
                    data-bs-target="#modal_v"
                    data-bs-whatever="Digital-marketing Package-type: A+">
                    Choose Plan
                </button>

            </div>

        </div>



        <!-- =========================================
             PACKAGE B
        ========================================== -->

        <div class="pkg-row">

            <div class="pkg-grid">

                <div class="pkg-tier-cell"
                     style="background:#ecfeff;">

                    <div class="pkg-tier-icon"
                         style="border-color:rgba(8,145,178,0.3);">

                        <span class="pkg-tier-letter"
                              style="color:#0891b2;">
                            B
                        </span>

                    </div>

                    <div>

                        <div class="pkg-tier-sublabel">
                            Tier
                        </div>

                        <div class="pkg-tier-keywords"
                             style="color:#0891b2;">
                            30 Keywords
                        </div>

                    </div>

                </div>


                <!-- Annual -->
                <div class="pkg-price-cell">

                    <div class="pkg-price"
                         style="color:#0891b2;">
                        $1,599
                        <span style="font-size:0.7rem;font-weight:500;">
                            /mo
                        </span>
                    </div>

                    <div class="pkg-col-mobile-label">
                        Annually
                    </div>

                </div>


                <!-- Half Yearly -->
                <div class="pkg-price-cell">

                    <div class="pkg-price"
                         style="color:#0891b2;">
                        $1,799
                        <span style="font-size:0.7rem;font-weight:500;">
                            /mo
                        </span>
                    </div>

                    <div class="pkg-col-mobile-label">
                        Half Yearly
                    </div>

                </div>


                <!-- Quarterly -->
                <div class="pkg-price-cell">

                    <div class="pkg-price"
                         style="color:#0891b2;">
                        $1,899
                        <span style="font-size:0.7rem;font-weight:500;">
                            /mo
                        </span>
                    </div>

                    <div class="pkg-col-mobile-label">
                        Quarterly
                    </div>

                </div>


                <!-- Monthly -->
                <div class="pkg-price-cell"
                     style="border-right:none;">

                    <div class="pkg-price"
                         style="color:#0891b2;">
                        $2,099
                        <span style="font-size:0.7rem;font-weight:500;">
                            /mo
                        </span>
                    </div>

                    <div class="pkg-col-mobile-label">
                        Monthly
                    </div>

                </div>

            </div>


            <!-- Features -->

            <div class="pkg-includes">

                <div class="pkg-include-item">
                    <span class="pkg-check" style="color:#0891b2;">✓</span>
                    <span class="pkg-include-text">
                        30 Keywords
                    </span>
                </div>

                <div class="pkg-include-item">
                    <span class="pkg-check" style="color:#0891b2;">✓</span>
                    <span class="pkg-include-text">
                        GMB Setup (Local SEO)
                    </span>
                </div>

                <div class="pkg-include-item">
                    <span class="pkg-check" style="color:#0891b2;">✓</span>
                    <span class="pkg-include-text">
                        30 Posts on Social Media
                    </span>
                </div>

                <div class="pkg-include-item">
                    <span class="pkg-check" style="color:#0891b2;">✓</span>
                    <span class="pkg-include-text">
                        Content Writing (As Needed)
                    </span>
                </div>

                <div class="pkg-include-item">
                    <span class="pkg-check" style="color:#0891b2;">✓</span>
                    <span class="pkg-include-text">
                        Facebook/Instagram Ads Up to $2,500
                    </span>
                </div>

                <div class="pkg-include-item">
                    <span class="pkg-check" style="color:#0891b2;">✓</span>
                    <span class="pkg-include-text">
                        Google Ads Up to $2,500
                    </span>
                </div>


                <button
                    type="button"
                    class="pkg-cta-btn"
                    style="background:#0891b2;border:0;"
                    data-bs-toggle="modal"
                    data-bs-target="#modal_v"
                    data-bs-whatever="Digital-marketing Package-type: B">
                    Choose Plan
                </button>

            </div>

        </div>



        <!-- =========================================
             PACKAGE B+
        ========================================== -->

        <div class="pkg-row">

            <div class="pkg-grid">

                <div class="pkg-tier-cell"
                     style="background:#f0fdf4;">

                    <div class="pkg-tier-icon"
                         style="border-color:rgba(5,150,105,0.3);">

                        <span class="pkg-tier-letter"
                              style="color:#059669;">
                            B+
                        </span>

                    </div>

                    <div>

                        <div class="pkg-tier-sublabel">
                            Tier
                        </div>

                        <div class="pkg-tier-keywords"
                             style="color:#059669;">
                            50 Keywords
                        </div>

                    </div>

                </div>


                <!-- Annual -->
                <div class="pkg-price-cell">

                    <div class="pkg-price"
                         style="color:#059669;">
                        $3,999
                        <span style="font-size:0.7rem;font-weight:500;">
                            /mo
                        </span>
                    </div>

                    <div class="pkg-col-mobile-label">
                        Annually
                    </div>

                </div>


                <!-- Half Yearly -->
                <div class="pkg-price-cell">

                    <div class="pkg-price"
                         style="color:#059669;">
                        $4,499
                        <span style="font-size:0.7rem;font-weight:500;">
                            /mo
                        </span>
                    </div>

                    <div class="pkg-col-mobile-label">
                        Half Yearly
                    </div>

                </div>


                <!-- Quarterly -->
                <div class="pkg-price-cell">

                    <div class="pkg-price"
                         style="color:#059669;">
                        $4,999
                        <span style="font-size:0.7rem;font-weight:500;">
                            /mo
                        </span>
                    </div>

                    <div class="pkg-col-mobile-label">
                        Quarterly
                    </div>

                </div>


                <!-- Monthly -->
                <div class="pkg-price-cell"
                     style="border-right:none;">

                    <div class="pkg-price"
                         style="color:#059669;">
                        $5,999
                        <span style="font-size:0.7rem;font-weight:500;">
                            /mo
                        </span>
                    </div>

                    <div class="pkg-col-mobile-label">
                        Monthly
                    </div>

                </div>

            </div>


            <!-- Features -->

            <div class="pkg-includes">

                <div class="pkg-include-item">
                    <span class="pkg-check" style="color:#059669;">✓</span>
                    <span class="pkg-include-text">
                        50 Keywords
                    </span>
                </div>

                <div class="pkg-include-item">
                    <span class="pkg-check" style="color:#059669;">✓</span>
                    <span class="pkg-include-text">
                        GMB Setup (Local SEO)
                    </span>
                </div>

                <div class="pkg-include-item">
                    <span class="pkg-check" style="color:#059669;">✓</span>
                    <span class="pkg-include-text">
                        50 Posts on Social Media
                    </span>
                </div>

                <div class="pkg-include-item">
                    <span class="pkg-check" style="color:#059669;">✓</span>
                    <span class="pkg-include-text">
                        Content Writing (As Needed)
                    </span>
                </div>

                <div class="pkg-include-item">
                    <span class="pkg-check" style="color:#059669;">✓</span>
                    <span class="pkg-include-text">
                        Facebook/Instagram Ads Up to $7,500
                    </span>
                </div>

                <div class="pkg-include-item">
                    <span class="pkg-check" style="color:#059669;">✓</span>
                    <span class="pkg-include-text">
                        Google Ads Up to $7,500
                    </span>
                </div>


                <button
                    type="button"
                    class="pkg-cta-btn"
                    style="background:#059669;border:0;"
                    data-bs-toggle="modal"
                    data-bs-target="#modal_v"
                    data-bs-whatever="Digital-marketing Package-type: B+">
                    Choose Plan
                </button>

            </div>

        </div>



        <!-- =========================================
             PACKAGE C
        ========================================== -->

        <div class="pkg-row">

            <div class="pkg-grid">

                <div class="pkg-tier-cell"
                     style="background:#fffbeb;">

                    <div class="pkg-tier-icon"
                         style="border-color:rgba(217,119,6,0.3);">

                        <span class="pkg-tier-letter"
                              style="color:#d97706;">
                            C
                        </span>

                    </div>

                    <div>

                        <div class="pkg-tier-sublabel">
                            Tier
                        </div>

                        <div class="pkg-tier-keywords"
                             style="color:#d97706;">
                            100 Keywords
                        </div>

                    </div>

                </div>


                <!-- Annual -->
                <div class="pkg-price-cell">

                    <div class="pkg-price"
                         style="color:#d97706;">
                        $7,999
                        <span style="font-size:0.7rem;font-weight:500;">
                            /mo
                        </span>
                    </div>

                    <div class="pkg-col-mobile-label">
                        Annually
                    </div>

                </div>


                <!-- Half Yearly -->
                <div class="pkg-price-cell">

                    <div class="pkg-price"
                         style="color:#d97706;">
                        $8,999
                        <span style="font-size:0.7rem;font-weight:500;">
                            /mo
                        </span>
                    </div>

                    <div class="pkg-col-mobile-label">
                        Half Yearly
                    </div>

                </div>


                <!-- Quarterly -->
                <div class="pkg-price-cell">

                    <div class="pkg-price"
                         style="color:#d97706;">
                        $9,999
                        <span style="font-size:0.7rem;font-weight:500;">
                            /mo
                        </span>
                    </div>

                    <div class="pkg-col-mobile-label">
                        Quarterly
                    </div>

                </div>


                <!-- Monthly -->
                <div class="pkg-price-cell"
                     style="border-right:none;">

                    <div class="pkg-price"
                         style="color:#d97706;">
                        $11,999
                        <span style="font-size:0.7rem;font-weight:500;">
                            /mo
                        </span>
                    </div>

                    <div class="pkg-col-mobile-label">
                        Monthly
                    </div>

                </div>

            </div>


            <!-- Features -->

            <div class="pkg-includes">

                <div class="pkg-include-item">
                    <span class="pkg-check" style="color:#d97706;">✓</span>
                    <span class="pkg-include-text">
                        100 Keywords
                    </span>
                </div>

                <div class="pkg-include-item">
                    <span class="pkg-check" style="color:#d97706;">✓</span>
                    <span class="pkg-include-text">
                        GMB Setup (Local SEO)
                    </span>
                </div>

                <div class="pkg-include-item">
                    <span class="pkg-check" style="color:#d97706;">✓</span>
                    <span class="pkg-include-text">
                        100 Posts on Social Media
                    </span>
                </div>

                <div class="pkg-include-item">
                    <span class="pkg-check" style="color:#d97706;">✓</span>
                    <span class="pkg-include-text">
                        Content Writing (As Needed)
                    </span>
                </div>

                <div class="pkg-include-item">
                    <span class="pkg-check" style="color:#d97706;">✓</span>
                    <span class="pkg-include-text">
                        Facebook/Instagram Ads Up to $20,000
                    </span>
                </div>

                <div class="pkg-include-item">
                    <span class="pkg-check" style="color:#d97706;">✓</span>
                    <span class="pkg-include-text">
                        Google Ads Up to $20,000
                    </span>
                </div>


                <button
                    type="button"
                    class="pkg-cta-btn"
                    style="background:#d97706;border:0;"
                    data-bs-toggle="modal"
                    data-bs-target="#modal_v"
                    data-bs-whatever="Digital-marketing Package-type: C">
                    Choose Plan
                </button>

            </div>

        </div>


    </div>

</section>


<!-- FAQ -->
<section class="dm-faq">
    <div class="section-header" style="text-align:center;margin-bottom:48px;">
        <div class="section-badge">✦ FAQ</div>
        <h2 class="section-header-h2">Frequently Asked Questions</h2>
    </div>
    <div class="faq-list">
        <div class="faq-item"><button class="faq-btn" aria-expanded="false"><span class="faq-question">Is it possible to
                    rank my business at the top of search engines?</span><svg class="faq-chevron" width="18" height="18"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <polyline points="6 9 12 15 18 9" />
                </svg></button>
            <div class="faq-answer">When you visit the internet and put a keyword related to your business, then you
                will receive crores of results. There is a huge chance that your business might be lost in this crowd.
                For some people, it is impossible. But here, Tachomind, the internet marketing company, can make it
                possible for you. If your business is receiving zero visibility, then purchase the SEO and digital
                marketing packages from us today! With this, you can get better exposure at a minimum period of time!
            </div>
        </div>
        <div class="faq-item"><button class="faq-btn" aria-expanded="false"><span class="faq-question">Can every
                    business benefit from digital marketing?</span><svg class="faq-chevron" width="18" height="18"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <polyline points="6 9 12 15 18 9" />
                </svg></button>
            <div class="faq-answer">Of course! Every business can get better exposure by implementing digital marketing
                services. With the help of digital marketing, you can set your brand in a global position.</div>
        </div>
        <div class="faq-item"><button class="faq-btn" aria-expanded="false"><span class="faq-question">Is digital
                    marketing worth investing in?</span><svg class="faq-chevron" width="18" height="18"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <polyline points="6 9 12 15 18 9" />
                </svg></button>
            <div class="faq-answer">If your business can't get enough success over the years and you are starving for a
                better opportunity, then yes, it is worth investing in this.</div>
        </div>
        <div class="faq-item"><button class="faq-btn" aria-expanded="false"><span class="faq-question">What is the cost
                    of digital marketing?</span><svg class="faq-chevron" width="18" height="18" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="6 9 12 15 18 9" />
                </svg></button>
            <div class="faq-answer">The cost of digital marketing depends upon your budget, business needs, and choice
                of keywords. To get more information on this you can talk with our executives.</div>
        </div>
    </div>
</section>

<!-- CONTACT STRIP -->
<section class="dm-contact-strip">
    <div class="dm-contact-inner">
        <!--<a href="tel:+15183036708" class="dm-contact-item">-->
        <!--    <div class="dm-contact-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#2563eb"-->
        <!--            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">-->
        <!--            <path-->
        <!--                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1.11h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.72a16 16 0 0 0 6 6l.94-.94a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z" />-->
        <!--        </svg></div>-->
        <!--    <div>-->
        <!--        <div class="dm-contact-label">Call USA</div>-->
        <!--        <div class="dm-contact-value">+1-518-303-6708</div>-->
        <!--    </div>-->
        <!--</a>-->
        <a href="tel:+918114880778" class="dm-contact-item">
            <div class="dm-contact-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#2563eb"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path
                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1.11h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.72a16 16 0 0 0 6 6l.94-.94a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z" />
                </svg></div>
            <div>
                <div class="dm-contact-label">Call India</div>
                <div class="dm-contact-value">+91-8917643345</div>
            </div>
        </a>
        <a href="mailto:hello@tachomind.com" class="dm-contact-item">
            <div class="dm-contact-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#2563eb"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                    <polyline points="22,6 12,13 2,6" />
                </svg></div>
            <div>
                <div class="dm-contact-label">Mail Us</div>
                <div class="dm-contact-value">hi@tachomind.com</div>
            </div>
        </a>
    </div>
</section>

<!-- BOTTOM CTA -->
<section class="dm-cta">
    <div class="dm-cta-glow"></div>
    <div class="dm-cta-inner">
        <h2 class="dm-cta-h2">You have a vision. <span class="dm-cta-grad">We have a team to get you there.</span></h2>
        <p class="dm-cta-sub">Ready to speak with a marketing expert? Give us a ring.</p>
        <div class="dm-cta-btns">
            <a href="<?php echo home_url('/contact'); ?>" class="dm-cta-primary">Talk To An Expert ↗</a>
            <a href="tel:+918917643345" class="dm-cta-phone"><svg width="14" height="14" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path
                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1.11h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.72a16 16 0 0 0 6 6l.94-.94a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z" />
                </svg>+91-8917643345</a>
        </div>
    </div>
</section>
<?php
}
get_footer();
?>