<?php
get_header();
while (have_posts()) {
  the_post();
?>
    
    <main>
        <section class="legal-hero"><div class="legal-hero-inner"><div class="legal-breadcrumb"><a href="<?php echo home_url('/'); ?>">Home</a><span>/</span><span>Cookie Policy</span></div><div class="legal-kicker">Legal Information</div><h1>Cookie Policy</h1><p>This Cookie Policy explains how TachoMind uses cookies, log files, web beacons and related technologies to operate and improve the website experience.</p></div></section>
        <section class="legal-main"><div class="legal-layout">
            <aside class="legal-sidebar"><nav class="legal-nav" aria-label="Legal pages"><h2>Legal Pages</h2><a href="<?php echo home_url('/privacy-policy'); ?>">Privacy Policy</a><a href="<?php echo home_url('/terms-conditions'); ?>">Terms &amp; Conditions</a><a href="<?php echo home_url('/cookie-policy'); ?>" class="active">Cookie Policy</a></nav><div class="legal-contact-card"><h2>Cookie questions?</h2><p>You can control cookies through your browser settings or contact us for policy questions.</p><a href="mailto:hello@tachomind.com">hello@tachomind.com</a></div></aside>
            <article class="legal-content">
                <div class="legal-notice"><p>Like many websites, TachoMind uses cookies to remember visitor preferences, understand website usage and improve how pages are presented to visitors.</p></div>
                <section class="legal-section"><h2>What Cookies Are</h2><p>Cookies are small files stored by your browser when you visit a website. They may help websites remember preferences, understand page visits and support a smoother browsing experience.</p></section>
                <section class="legal-section"><h2>How TachoMind Uses Cookies</h2><p>TachoMind uses cookies to store information including visitors' preferences and the pages accessed or visited. This information is used to optimize user experience by customizing web page content based on browser type or other information.</p><ul><li>Remembering preferences or interaction details where applicable.</li><li>Understanding which website pages are accessed or visited.</li><li>Improving content presentation and website usability.</li><li>Supporting analytics, advertising measurement and campaign performance review.</li></ul></section>
                <section class="legal-section"><h2>Log Files</h2><p>TachoMind follows a standard procedure of using log files. These files may collect IP addresses, browser type, Internet Service Provider, date and time stamp, referring or exit pages and possibly the number of clicks.</p><p>The purpose is to analyze trends, administer the website, track movement on the website and gather demographic information. This information is not linked to personally identifiable information.</p></section>
                <section class="legal-section"><h2>Web Beacons and Similar Technologies</h2><p>Third-party ad servers or ad networks may use technologies such as cookies, JavaScript or web beacons in advertisements and links that appear on TachoMind. These technologies may be used to measure advertising effectiveness or personalize advertising content.</p></section>
                <section class="legal-section"><h2>Google DoubleClick DART Cookie</h2><p>Google may act as a third-party vendor and may use cookies known as DART cookies to serve ads to website visitors based on visits to this website and other sites on the internet. Visitors may choose to decline DART cookies through Google's advertising privacy controls.</p></section>
                <section class="legal-section"><h2>Third-Party Cookies</h2><p>TachoMind has no access to or control over cookies used by third-party advertisers. Third-party advertising partners may automatically receive your IP address when advertising content is delivered through your browser.</p><p>We advise users to consult the privacy policies of third-party ad servers for details about their practices and opt-out options.</p></section>
                <section class="legal-section"><h2>Managing Cookies</h2><p>You can choose to disable cookies through your individual browser options. Cookie management settings differ by browser, and detailed information can be found through your browser's own help or settings pages.</p><p>Please note that disabling cookies may affect how some website features behave.</p></section>
                <section class="legal-section"><h2>Related Legal Pages</h2><div class="legal-links-grid"><a href="<?php echo home_url('/privacy-policy'); ?>" class="legal-link-card"><span>Privacy</span><strong>Privacy Policy</strong><em>Read Policy &rarr;</em></a><a href="<?php echo home_url('/terms-conditions'); ?>" class="legal-link-card"><span>Legal</span><strong>Terms &amp; Conditions</strong><em>Read Terms &rarr;</em></a><a href="<?php echo home_url('/contact'); ?>" class="legal-link-card"><span>Support</span><strong>Contact TachoMind</strong><em>Contact Us &rarr;</em></a></div></section>
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