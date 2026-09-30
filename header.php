<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TachoMind — Brilliant Minds At Work | Digital Marketing Agency</title>
    <meta name="description"
        content="TachoMind is a full-service digital marketing agency — SEO, PPC, Web Development, Social Media & more. Google & Facebook Certified. 8,000+ accounts handled. 28+ countries served." />
    <?php wp_head();?>
	<!-- Google tag (gtag.js) -->
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }

  gtag('js', new Date());
  gtag('config', 'G-4GEG18JTHX');

  function loadGoogleAnalytics() {
    if (window.gaLoaded) return;
    window.gaLoaded = true;

    var script = document.createElement('script');
    script.async = true;
    script.src = 'https://www.googletagmanager.com/gtag/js?id=G-4GEG18JTHX';

    document.head.appendChild(script);
  }

  // Load after 3 seconds
  window.addEventListener('load', function () {
    setTimeout(loadGoogleAnalytics, 3000);
  });

  // Or immediately when user interacts
  ['scroll', 'click', 'touchstart', 'keydown'].forEach(function(event) {
    window.addEventListener(event, loadGoogleAnalytics, {
      once: true,
      passive: true
    });
  });
</script>
</head>

<body <?php body_class();?>>

   <!-- ============================================================
     SECTION 1 — NAVBAR
     ============================================================ -->
   <nav class="navbar" id="navbar">
    <div class="nav-inner">
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

        <ul class="nav-links" id="navLinks">
            <li><a href="<?php echo home_url('/seo'); ?>" class="nav-link">SEO</a></li>
            <li><a href="<?php echo home_url('/digital-marketing'); ?>" class="nav-link">Digital Marketing</a></li>
            <li><a href="<?php echo home_url('/web-development'); ?>" class="nav-link">Web Development</a></li>
            <li><a href="<?php echo home_url('/ppc'); ?>" class="nav-link">PPC</a></li>
            <li><a href="<?php echo home_url('/smo'); ?>" class="nav-link">SMO</a></li>
            <li><a href="<?php echo home_url('/blog'); ?>" class="nav-link">Blog</a></li>
            <li><a href="<?php echo home_url('/about'); ?>" class="nav-link">About</a></li>
        </ul>

        <a href="<?php echo home_url('/contact'); ?>" class="nav-cta" id="navCta">Get Free Audit →</a>

        <button class="hamburger" id="hamburger" aria-label="Open menu">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round">
                <line x1="3" y1="6" x2="21" y2="6" />
                <line x1="3" y1="12" x2="21" y2="12" />
                <line x1="3" y1="18" x2="21" y2="18" />
            </svg>
        </button>
    </div>

    <div class="mobile-menu" id="mobileMenu">
        <a href="<?php echo home_url('/seo'); ?>" class="mobile-link">SEO</a>
        <a href="<?php echo home_url('/digital-marketing'); ?>" class="mobile-link">Digital Marketing</a>
        <a href="<?php echo home_url('/web-development'); ?>" class="mobile-link">Web Development</a>
        <a href="<?php echo home_url('/ppc'); ?>" class="mobile-link">PPC</a>
        <a href="<?php echo home_url('/smo'); ?>" class="mobile-link">SMO</a>
        <a href="<?php echo home_url('/blog'); ?>" class="mobile-link">Blog</a>
        <a href="<?php echo home_url('/about'); ?>" class="mobile-link">About</a>
        <a href="<?php echo home_url('/contact'); ?>" class="mobile-cta">Get Free Audit →</a>
    </div>
</nav>
