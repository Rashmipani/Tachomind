/* ============================================================
   TACHOMIND — WEB DEVELOPMENT PAGE JS
   ============================================================ */

(function () {
  "use strict";

  /* Navbar scroll */
  const navbar = document.getElementById("navbar");
  function handleNavScroll() {
    if (window.scrollY > 20) {
      navbar.classList.add("scrolled");
    } else {
      navbar.classList.remove("scrolled");
    }
  }
  window.addEventListener("scroll", handleNavScroll, { passive: true });
  handleNavScroll();

  /* Mobile menu */
  const hamburger = document.getElementById("hamburger");
  const mobileMenu = document.getElementById("mobileMenu");
  hamburger.addEventListener("click", function () {
    mobileMenu.classList.toggle("open");
  });
  document
    .querySelectorAll(".mobile-link, .mobile-cta")
    .forEach(function (link) {
      link.addEventListener("click", function () {
        mobileMenu.classList.remove("open");
      });
    });

  /* FAQ accordion */
  document.querySelectorAll(".wd-faq-q").forEach(function (btn) {
    btn.addEventListener("click", function () {
      const item = btn.closest(".wd-faq-item");
      const isOpen = item.classList.contains("open");

      document.querySelectorAll(".wd-faq-item.open").forEach(function (el) {
        el.classList.remove("open");
        el.querySelector(".wd-faq-q").setAttribute("aria-expanded", "false");
      });

      if (!isOpen) {
        item.classList.add("open");
        btn.setAttribute("aria-expanded", "true");
      }
    });
  });
})();
