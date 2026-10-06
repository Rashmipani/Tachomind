<style>
    /* Newsletter form design */
#evf-2663 form.everest-form {
    display: flex;
    align-items: center;
    gap: 10px;
    max-width: 470px;
    width: 100%;
    margin: 0;
}

#evf-2663 .evf-field-container {
    flex: 1;
    margin: 0 !important;
}

#evf-2663 .evf-frontend-row,
#evf-2663 .evf-frontend-grid,
#evf-2663 .evf-field {
    margin: 0 !important;
    padding: 0 !important;
    width: 100% !important;
}

#evf-2663 input[type="email"] {
    width: 100% !important;
    height: 46px;
    background: #243654;
    border: 1px solid #3f66a6;
    border-radius: 9px;
    padding: 0 16px;
    color: #ffffff!important;
    font-size: 16px;
    outline: none;
    box-shadow: none;
}

#evf-2663 input[type="email"]::placeholder {
    color: #6f819d;
}

#evf-2663 .evf-submit-container {
    margin: 0 !important;
    padding: 0 !important;
}

#evf-2663 button.everest-forms-submit-button {
    height: 45px;
    min-width: 122px;
    background: #2f6bea !important;
    color: #ffffff !important;
    border: none !important;
    border-radius: 9px;
    padding: 0 2px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    box-shadow: none !important;
    margin-top: -9px;
}

#evf-2663 button.everest-forms-submit-button:hover {
    background: #245bd0 !important;
}

/* Mobile responsive */
@media (max-width: 480px) {
    #evf-2663 form.everest-form {
        flex-direction: column;
        align-items: stretch;
    }

    #evf-2663 button.everest-forms-submit-button {
        width: 100%;
    }
}
</style>
<footer class="footer">
        <div class="footer-inner">
            <!-- Main Grid -->
            <div class="footer-grid">

                <!-- Column 1: Brand -->
                <div class="footer-brand">
                    <a class="nav-logo" href="<?php echo esc_url(home_url('/')); ?>">
    <img
    class="img-fluid"
    src="https://tachomind.com/wp-content/themes/tacho-theme/assets/images/logo.webp"
    alt="TachoMind"
    width="205"
    height="40"
    decoding="async"
>
</a>
                    <p class="footer-tagline">Brilliant minds at work serving all your digital needs. We focus on
                        marketing innovation in digital marketing and web design to get you numerous customers and
                        leads.</p>

                    <div class="footer-contacts">
                        <div class="footer-contact-item">
                            <!--<div class="footer-icon-box">-->
                            <!--    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#3b82f6"-->
                            <!--        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">-->
                            <!--        <path-->
                            <!--            d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1.11h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.72a16 16 0 0 0 6 6l.94-.94a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z" />-->
                            <!--    </svg>-->
                            <!--</div>-->
                            <!--<span><span style="color:#94a3b8;">USA:</span> <a href="tel:+15183036708"-->
                            <!--        class="footer-link-val">+1-518-303-6708</a></span>-->
                        </div>
                        <div class="footer-contact-item">
                            <div class="footer-icon-box">
                                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#3b82f6"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1.11h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.72a16 16 0 0 0 6 6l.94-.94a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z" />
                                </svg>
                            </div>
                            <span><span style="color:#94a3b8;">India:</span> <a href="tel:+918917643345"
                                    class="footer-link-val">+91-8917643345</a></span>
                        </div>
                        <div class="footer-contact-item">
                            <div class="footer-icon-box">
                                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#3b82f6"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path
                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                                    <polyline points="22,6 12,13 2,6" />
                                </svg>
                            </div>
                            <a href="mailto:hi@tachomind.com" class="footer-link-val">hi@tachomind.com</a>
                        </div>
                    </div>

                    <!-- Newsletter -->
                    <div class="footer-newsletter">
                        <div class="newsletter-label">Don't miss our weekly SEO insights:</div>
                        <!--<div class="newsletter-row">-->
                        <!--    <input type="email" class="form-input newsletter-input" placeholder="Email Address"-->
                        <!--        id="newsletterEmail" />-->
                        <!--    <button class="newsletter-btn" id="newsletterBtn">Subscribe</button>-->
                        <!--</div>-->
                         <?php echo do_shortcode('[everest_form id="2663"]'); ?>
                    </div>
                </div>

                <!-- Column 2: Services -->
                <div class="footer-col">
                    <h4 class="footer-col-heading">Services</h4>
                    <a href="<?php echo home_url('/seo'); ?>" class="footer-nav-link">SEO</a>
                    <a href="<?php echo home_url('/digital-marketing'); ?>" class="footer-nav-link">Digital Marketing</a>
                    <a href="<?php echo home_url('/web-development'); ?>" class="footer-nav-link">Web Development</a>
                    <a href="<?php echo home_url('/ppc'); ?>" class="footer-nav-link">PPC</a>
                    <a href="<?php echo home_url('/smo'); ?>" class="footer-nav-link">SMO</a>
                </div>

                <!-- Column 3: Company -->
                <div class="footer-col">
                    <h4 class="footer-col-heading">Company</h4>
                    <a href="<?php echo home_url('/about'); ?>" class="footer-nav-link">About Us</a>
                    <a href="<?php echo home_url('/case-studies'); ?>" class="footer-nav-link">Case Studies</a>
                    <a href="<?php echo home_url('/blog'); ?>" class="footer-nav-link">Blog</a>
                    <a href="<?php echo home_url('/job-careers'); ?>" class="footer-nav-link">Careers</a>
                    <a href="<?php echo home_url('/contact'); ?>" class="footer-nav-link">Contact</a>
                </div>

                <!-- Column 4: Legal -->
                <div class="footer-col">
                    <h4 class="footer-col-heading">Legal</h4>
                    <a href="<?php echo home_url('/privacy-policy'); ?>" class="footer-nav-link">Privacy Policy</a>
                    <a href="<?php echo home_url('/terms-conditions'); ?>" class="footer-nav-link">Terms of Service</a>
                    <a href="<?php echo home_url('/cookie-policy'); ?>" class="footer-nav-link">Cookie Policy</a>
                    <a href="<?php echo home_url('/cancellation-and-refund-policy'); ?>" class="footer-nav-link">Cancellation and Refund Policy</a>
                </div>

            </div><!-- /footer-grid -->

            <!-- Bottom bar -->
            <div class="footer-bottom">
                <p class="footer-copy">© <?php echo esc_html( wp_date('Y') ); ?> TachoMind. All Rights Reserved. · Brilliant Minds At Work</p>
                <div class="social-icons">
                    <!-- Facebook -->
                    <a href="https://www.facebook.com/tachomindpvtltd/" class="social-icon" aria-label="Facebook">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                        </svg>
                    </a>
                    <!-- Instagram -->
                    <a href="https://www.instagram.com/tachomind/" class="social-icon" aria-label="Instagram">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" />
                        </svg>
                    </a>
                    <!-- Twitter/X -->
                    <a href="https://x.com/tachomind" class="social-icon" aria-label="Twitter">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                        </svg>
                    </a>
                    <!-- YouTube -->
                    <a href="https://co.pinterest.com/Tacho_mind/" class="social-icon" aria-label="YouTube">
                       <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor">
    <path
        d="M12.04 2C6.58 2 3 5.64 3 10.47c0 2.24 1.26 5.03 3.28 5.92.31.14.48.08.55-.22.05-.23.33-1.32.45-1.83.04-.16.02-.3-.11-.45-.66-.8-1.19-2.25-1.19-3.61 0-3.37 2.55-6.63 6.9-6.63 3.76 0 6.39 2.56 6.39 6.22 0 4.13-2.09 6.99-4.8 6.99-1.5 0-2.62-1.24-2.26-2.76.43-1.82 1.26-3.79 1.26-5.1 0-1.18-.63-2.16-1.94-2.16-1.54 0-2.78 1.59-2.78 3.73 0 1.36.46 2.28.46 2.28s-1.52 6.43-1.8 7.63c-.53 2.26-.08 4.98-.04 5.26.02.16.22.2.31.08.13-.17 1.79-2.29 2.36-4.49.16-.63.93-3.63.93-3.63.46.88 1.8 1.62 3.22 1.62 4.24 0 7.31-3.9 7.31-8.74C21.5 5.95 17.71 2 12.04 2z" />
</svg>
                    </a>
                    <!-- LinkedIn -->
                    <a href="https://www.linkedin.com/authwall?trk=gf&trkInfo=AQG7Ix04lpbeYAAAAZ7VrE8gQnTDprSg3nL2o8mAjvU7Qt7f6W6cSgSVQXpzvu36Jsoij4fE5UTnQyRy74RUbhlvGxprIPBGYNzURLSvIhixymcXnu3xH6V1WbGCbHU3OJGVceY=&original_referer=https://tachomind.com/&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fin%2Ftachomind-private-limited-34350418b" class="social-icon" aria-label="LinkedIn">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6zM2 9h4v12H2z" />
                            <circle cx="4" cy="4" r="2" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
    const emailField = document.getElementById(
        'evf-2663-field_8aGh0ahEPV-5'
    );

    if (emailField) {
        emailField.setAttribute('aria-label', 'Email Address');
    }
});
    </script>
<?php wp_footer();?>
</body>
</html>