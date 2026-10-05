/* ============================================================
   TACHOMIND — SEO PAGE JAVASCRIPT (seo.js)
   ============================================================ */

(function () {
  "use strict";

  /* ----------------------------------------------------------
     1. NAVBAR SCROLL DETECTION
     SEO page navbar starts white (scrolled) at all times
     since it sits above a light-coloured hero.
     ---------------------------------------------------------- */
  const navbar = document.getElementById("navbar");

  window.addEventListener(
    "scroll",
    function () {
      navbar.classList.add("scrolled");
    },
    { passive: true },
  );

  /* ----------------------------------------------------------
     2. MOBILE MENU TOGGLE
     ---------------------------------------------------------- */
  const hamburger = document.getElementById("hamburger");
  const mobileMenu = document.getElementById("mobileMenu");

  if (hamburger && mobileMenu) {
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
  }

  /* ----------------------------------------------------------
     3. NEWSLETTER
     ---------------------------------------------------------- */
  const newsletterBtn = document.getElementById("newsletterBtn");
  if (newsletterBtn) {
    newsletterBtn.addEventListener("click", function () {
      const emailInput = document.getElementById("newsletterEmail");
      if (emailInput && emailInput.value.includes("@")) {
        newsletterBtn.textContent = "✓ Done!";
        newsletterBtn.style.background = "#059669";
        emailInput.value = "";
        setTimeout(function () {
          newsletterBtn.textContent = "Subscribe";
          newsletterBtn.style.background = "";
        }, 3000);
      } else if (emailInput) {
        emailInput.style.borderColor = "rgba(239,68,68,0.5)";
        setTimeout(function () {
          emailInput.style.borderColor = "";
        }, 2000);
      }
    });
  }

  /* ----------------------------------------------------------
     4. ARTICLE CARD ENTRANCE ANIMATIONS
     ---------------------------------------------------------- */
  if ("IntersectionObserver" in window) {
    const cards = document.querySelectorAll(
      ".article-card, .featured-article-link, .seo-stat-card",
    );

    const observer = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.style.opacity = "1";
            entry.target.style.transform = entry.target.classList.contains(
              "seo-stat-card",
            )
              ? "translateY(0)"
              : "translateY(0)";
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.08, rootMargin: "0px 0px -32px 0px" },
    );

    cards.forEach(function (card) {
      card.style.opacity = "0";
      card.style.transform = "translateY(16px)";
      card.style.transition = "opacity 350ms ease, transform 350ms ease";
      observer.observe(card);
    });
  }
})();
