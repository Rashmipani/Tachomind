<?php
get_header();
while (have_posts()) {
  the_post();
?>
    
    <main>
        <section class="legal-hero"><div class="legal-hero-inner"><div class="legal-breadcrumb"><a href="<?php echo home_url('/'); ?>">Home</a><span>/</span><span>Terms and Conditions</span></div><div class="legal-kicker">Legal Information</div><h1>Terms & Conditions</h1><p>These Terms constitute a binding agreement between TACHOMIND PRIVATE LIMITED and users of our website, goods or services.</p></div></section>
        <section class="legal-main"><div class="legal-layout">
            <aside class="legal-sidebar"><nav class="legal-nav" aria-label="Legal pages"><h2>Legal Pages</h2><a href="<?php echo home_url('/privacy-policy'); ?>">Privacy Policy</a><a href="<?php echo home_url('/terms-conditions'); ?>"  class="active">Terms &amp; Conditions</a><a href="<?php echo home_url('/cookie-policy'); ?>" >Cookie Policy</a></nav><div class="legal-contact-card"><h2>Need clarification?</h2><p>Contact us before using our services if any term is unclear.</p><a href="<?php echo home_url('/contact'); ?>">Contact TachoMind</a></div></aside>
            <article class="legal-content">
                <div class="legal-notice"><p>By using our website or availing our services, you agree that you have read and accepted these Terms, including the Privacy Policy. We may modify these Terms at any time, and it is your responsibility to review them periodically.</p></div>
                <section class="legal-section"><h2>Agreement and Scope</h2><p>These Terms and Conditions, together with our Privacy Policy and other applicable terms, constitute a binding agreement by and between TACHOMIND PRIVATE LIMITED, referred to as the Website Owner, we, us or our, and you, the user of the website or services.</p><p>These Terms relate to your use of our website, goods where applicable, and services where applicable, collectively referred to as Services.</p></section>
                <section class="legal-section"><h2>Use of Website and Services</h2><p>You agree to use the website and services only for lawful purposes and in a manner that does not interfere with the operation, security or availability of the website.</p><ul><li>You must provide accurate information when submitting enquiries, forms or project details.</li><li>You must not misuse, copy, disrupt or attempt unauthorized access to our website or systems.</li><li>You are responsible for reviewing service details, proposals and deliverables before confirming work.</li></ul></section>
                <section class="legal-section"><h2>Service Engagements</h2><p>TachoMind provides digital marketing, SEO, PPC, SMO, web development, content and related services. Specific scope, timelines, fees, reporting cadence and deliverables may be defined in proposals, invoices, service agreements or written communication.</p><p>Digital performance may be influenced by third-party platforms, search engine policies, advertising auction conditions, website quality, market competition and client-side implementation timelines.</p></section>
                <section class="legal-section"><h2>Payments and Project Execution</h2><p>Where paid services are agreed, payment obligations will follow the accepted proposal, invoice or service agreement. Work may begin after confirmation of scope, access, required assets and applicable payment milestones.</p><p>Third-party services such as hosting, domain registration, advertising spend, plugins, subscriptions or platform fees may be billed separately unless expressly included.</p></section>
                <section class="legal-section"><h2>Intellectual Property</h2><p>Unless otherwise agreed in writing, TachoMind's website content, design elements, frameworks, documentation, processes and internal materials remain the property of TachoMind or its licensors. Client-owned assets remain the property of the client.</p><p>Final deliverables may be transferred or licensed according to the applicable proposal or agreement once payment and project obligations are fulfilled.</p></section>
                <section class="legal-section"><h2>Limitation of Liability</h2><p>To the maximum extent permitted by law, TachoMind will not be liable for indirect, incidental, consequential or punitive damages arising from website use, service delays, third-party platform changes or business outcomes outside our direct control.</p></section>
                <section class="legal-section"><h2>Privacy and Cookies</h2><p>Use of this website is also governed by our Privacy Policy and Cookie Policy. These documents explain how information may be collected, used and managed when visitors interact with our website.</p></section>
                <section class="legal-section"><h2>Updates to Terms</h2><p>We reserve the right to modify these Terms at any time without assigning any reason. Continued use of the website or services after updates means you accept the revised Terms.</p></section>
                <section class="legal-section"><h2>Related Legal Pages</h2><div class="legal-links-grid"><a href="<?php echo home_url('/privacy-policy'); ?>" class="legal-link-card"><span>Privacy</span><strong>Privacy Policy</strong><em>Read Policy &rarr;</em></a><a href="<?php echo home_url('/cookie-policy'); ?>" class="legal-link-card"><span>Cookies</span><strong>Cookie Policy</strong><em>Read Policy &rarr;</em></a><a href="<?php echo home_url('/contact'); ?>" class="legal-link-card"><span>Support</span><strong>Contact TachoMind</strong><em>Contact Us &rarr;</em></a></div></section>
            </article>
        </div></section>
    </main>

 <script>
document.addEventListener("DOMContentLoaded", function () {
    const sidebar = document.querySelector(".legal-sidebar");

    if (!sidebar) return;

    sidebar.style.position = "";
    sidebar.style.top = "";
    sidebar.style.left = "";
    sidebar.style.width = "";
    sidebar.style.maxWidth = "";
    sidebar.style.bottom = "";
    sidebar.style.transform = "";
    sidebar.style.zIndex = "";
});
 </script>
<?php
}
get_footer();
?>