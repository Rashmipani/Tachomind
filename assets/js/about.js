/* ============================================================
   TACHOMIND — ABOUT PAGE JAVASCRIPT
   ============================================================ */

(function () {
  "use strict";

  /* ----------------------------------------------------------
     1. NAVBAR SCROLL DETECTION
     (About page navbar starts scrolled/white by default — 
      but we still monitor scroll for consistency)
     ---------------------------------------------------------- */
  const navbar = document.getElementById("navbar");

  function handleNavScroll() {
    // Always keep scrolled state on About page (non-home),
    // but still toggle just in case user customises this later.
    if (window.scrollY > 20) {
      navbar.classList.add("scrolled");
    } else {
      // On About page, navbar is always white (it sits on dark hero)
      // so we keep .scrolled at all times for proper styling.
      navbar.classList.add("scrolled");
    }
  }

  window.addEventListener("scroll", handleNavScroll, { passive: true });
  handleNavScroll();

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
        newsletterBtn.textContent = "✓ Subscribed!";
        newsletterBtn.style.background = "#059669";
        emailInput.value = "";
        setTimeout(function () {
          newsletterBtn.textContent = "Subscribe";
          newsletterBtn.style.background = "";
        }, 3000);
      } else {
        if (emailInput) {
          emailInput.style.borderColor = "rgba(239,68,68,0.5)";
          setTimeout(function () {
            emailInput.style.borderColor = "";
          }, 2000);
        }
      }
    });
  }

  /* ----------------------------------------------------------
     4. SMOOTH ENTRANCE ANIMATIONS
        Mild fade-up on milestone/value cards as they enter
        the viewport (IntersectionObserver)
     ---------------------------------------------------------- */
  if ("IntersectionObserver" in window) {
    const cards = document.querySelectorAll(
      ".milestone-card, .value-card, .office-card, .overview-img-card, .team-img-card, .founder-photo-card",
    );

    const observerOptions = {
      threshold: 0.12,
      rootMargin: "0px 0px -40px 0px",
    };

    const observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.style.opacity = "1";
          entry.target.style.transform = "translateY(0)";
          observer.unobserve(entry.target);
        }
      });
    }, observerOptions);

    cards.forEach(function (card) {
      card.style.opacity = "0";
      card.style.transform = "translateY(20px)";
      card.style.transition = "opacity 400ms ease, transform 400ms ease";
      observer.observe(card);
    });
  }
})();
