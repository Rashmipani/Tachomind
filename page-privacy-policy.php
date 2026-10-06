<?php
get_header();
while (have_posts()) {
  the_post();
?>
    
    <main>
        <section class="legal-hero"><div class="legal-hero-inner"><div class="legal-breadcrumb"><a href="<?php echo home_url('/'); ?>">Home</a><span>/</span><span>Privacy Policy</span></div><div class="legal-kicker">Legal Information</div><h1>Privacy Policy</h1><p>This Privacy Policy explains the types of information collected and recorded by TachoMind and how we use it for website, communication and service-related activities.</p></div></section>
        <section class="legal-main"><div class="legal-layout">
            <aside class="legal-sidebar"><nav class="legal-nav" aria-label="Legal pages"><h2>Legal Pages</h2><a href="<?php echo home_url('/privacy-policy'); ?>" class="active">Privacy Policy</a><a href="<?php echo home_url('/terms-conditions'); ?>">Terms &amp; Conditions</a><a href="<?php echo home_url('/cookie-policy'); ?>">Cookie Policy</a></nav><div class="legal-contact-card"><h2>Questions?</h2><p>If you need more information about this policy, contact the TachoMind team.</p><a href="mailto:hello@tachomind.com">hello@tachomind.com</a></div></aside>
<article class="legal-content">
                    <div class="legal-notice"><p>By using our website, you consent to this Privacy Policy and agree to its terms. This policy applies to online activities and website visitors who share or collect information through TachoMind.</p></div>

                    <section class="legal-section"><h2>Information We Collect</h2><p>The personal information you are asked to provide, and the reasons why you are asked to provide it, will be made clear at the point we ask for your personal information.</p><p>If you contact us directly, we may receive your name, email address, phone number, message contents, attachments and any other information you choose to provide. If you register for an account, we may ask for contact information including name, company name, address, email address and telephone number.</p></section>
                    <section class="legal-section"><h2>How We Use Your Information</h2><p>We use collected information to provide, operate and maintain our website and services, improve user experience, communicate with visitors, respond to enquiries, understand website usage and support marketing or service delivery activity.</p></section>
                    <section class="legal-section"><h2>Log Files</h2><p>TachoMind follows a standard procedure of using log files. These files log visitors when they visit websites. Information collected may include IP addresses, browser type, Internet Service Provider, date and time stamp, referring or exit pages and possibly the number of clicks.</p><p>This information is not linked to personally identifiable information. It is used for analyzing trends, administering the site, tracking user movement and gathering demographic information.</p></section>
                    <section class="legal-section"><h2>Cookies and Web Beacons</h2><p>Like many websites, TachoMind uses cookies. These cookies store information including visitor preferences and pages visited. This information helps optimize user experience by customizing content based on browser type or other information.</p></section>
                    <section class="legal-section"><h2>Google DoubleClick DART Cookie</h2><p>Google may be a third-party vendor on our site and may use cookies known as DART cookies to serve ads to visitors based upon visits to this website and other sites on the internet. Visitors may decline DART cookies through Google's ad and content network privacy policy.</p></section>
                    <section class="legal-section"><h2>Advertising Partners and Third Parties</h2><p>Third-party ad servers or networks may use technologies such as cookies, JavaScript or web beacons in advertisements and links appearing on TachoMind. These technologies are used to measure advertising effectiveness and personalize advertising content.</p><p>TachoMind has no access to or control over cookies used by third-party advertisers. Our Privacy Policy does not apply to other advertisers or websites, and we advise users to review those providers' privacy policies.</p></section>
                    <section class="legal-section"><h2>CCPA and GDPR Data Protection Rights</h2><p>Depending on your location, you may have rights to access, correct, delete, restrict, object to or request transfer of personal data. You may also have the right to opt out of certain data sale or processing activities where applicable.</p></section>
                    <section class="legal-section"><h2>Children's Information</h2><p>TachoMind does not knowingly collect personally identifiable information from children under the age of 13. If you believe a child has provided this information through our website, contact us and we will make reasonable efforts to remove it from our records.</p></section>
                    <section class="legal-section"><h2>Related Legal Pages</h2><div class="legal-links-grid"><a href="<?php echo home_url('/cookie-policy'); ?>" class="legal-link-card"><span>Privacy</span><strong>Cookie Policy</strong><em>Read Policy &rarr;</em></a><a href="<?php echo home_url('/terms-conditions'); ?>" class="legal-link-card"><span>Legal</span><strong>Terms &amp; Conditions</strong><em>Read Terms &rarr;</em></a><a href="<?php echo home_url('/contact'); ?>" class="legal-link-card"><span>Support</span><strong>Contact TachoMind</strong><em>Contact Us &rarr;</em></a></div></section>
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