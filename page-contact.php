<?php
get_header();
while (have_posts()) {
  the_post();
?>
<style>
	
	iti__flag-container{
	display:none!important;
}
	
</style>
  <main>
        <section class="contact-hero">
            <div class="contact-hero-dot-grid"></div>
            <div class="contact-hero-glow"></div>
            <div class="contact-hero-inner">
                <div class="contact-breadcrumb">
                    <a href="<?php echo home_url('/'); ?>">Home</a>
                    <span>/</span>
                    <span>Contact</span>
                </div>

                <div class="contact-hero-grid">
                    <div class="contact-hero-copy">
                        <div class="contact-hero-badge">✦ Contact TachoMind</div>
                        <h1>We’ve driven over 6,437,349 leads for clients through digital marketing.</h1>
                        <p>Fill in the form below to instantly schedule a call with us. Tell us where you are today, what you want to improve, and our team will help you choose the right next step.</p>
                        <div class="contact-hero-actions">
                            <a href="#contact-form" class="contact-btn-primary">Schedule a Call</a>
                            <!--<a href="tel:+15183036708 " class="contact-btn-ghost">Call USA</a>-->
                        </div>
                    </div>

                    <aside class="contact-talk-card" aria-label="Talk to an expert">
                        <span>Or talk to an expert right now</span>
                        <!--<a href="tel:+15183036708">+1-518-303-6708</a>-->
                        <a href="tel:+918917643345">+91 8917643345</a>
                        <small>SEO, PPC, SMO, web development and digital marketing specialists are ready to help.</small>
                    </aside>
                </div>
            </div>
        </section>

        <section class="contact-main" id="contact-form">
            <div class="contact-main-grid">
                <?php echo do_shortcode('[everest_form id="2129"]'); ?>

                <div class="contact-side">
                    <div class="contact-info-card">
                        <div class="contact-section-kicker">✦ Phone Support</div>
                        <h2>Or talk to an expert right now</h2>
                        <div class="contact-phone-list">
                            <!--<a href="tel:+15183036708">-->
                            <!--    <span>USA</span>-->
                            <!--    <strong>+1-518-303-6708</strong>-->
                            <!--</a>-->
                            <a href="tel:+917684847744">
                                <span>India</span>
                                <strong>+91-8917643345</strong>
                            </a>
                            <!--<a href="tel:+918114880778">-->
                            <!--    <span>India</span>-->
                            <!--    <strong>+91 8114880778</strong>-->
                            <!--</a>-->
                            <a href="mailto:hello@tachomind.com">
                                <span>Email</span>
                                <strong>hi@tachomind.com</strong>
                            </a>
                        </div>
                    </div>

                    <div class="contact-mini-grid">
                        <article>
                            <span>01</span>
                            <h3>USA</h3>
                            <p>Speak with our team for project planning, audits and growth strategy.</p>
                        </article>
                        <article>
                            <span>02</span>
                            <h3>India</h3>
                            <p>Connect with our delivery team for SEO, paid ads, social and web support.</p>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-services">
            <div class="contact-section-head">
                <div class="contact-section-kicker">✦ Useful Links</div>
                <h2>Find the right team faster</h2>
                <p>Jump directly to the service you want to discuss before booking your call.</p>
            </div>
            <div class="contact-service-grid">
                <a href="<?php echo home_url('/seo'); ?>">SEO</a>
                <a href="<?php echo home_url('/digital-marketing'); ?>">Digital Marketing</a>
                <a href="<?php echo home_url('/web-development'); ?>">Web Development</a>
                <a href="<?php echo home_url('/ppc'); ?>">PPC</a>
                <a href="<?php echo home_url('/smo'); ?>">SMO</a>
                <a href="<?php echo home_url('/blog'); ?>">Blog</a>
            </div>
        </section>
    </main>


<?php
}
get_footer();
?>