/* ============================================================
   TACHOMIND — DIGITAL MARKETING PAGE JAVASCRIPT (dm.js)
   ============================================================ */

(function () {
  "use strict";

  /* ----------------------------------------------------------
     1. NAVBAR — always white on DM page (dark hero handled
        by .scrolled class always being present)
     ---------------------------------------------------------- */
  const navbar = document.getElementById("navbar");
  window.addEventListener(
    "scroll",
    function () {
      // Hero is dark, navbar should stay scrolled (white) state
      // since page starts at dark and nav sits on top
      if (!navbar.classList.contains("scrolled")) {
        navbar.classList.add("scrolled");
      }
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
     3. FAQ ACCORDION — independent toggle per item
     ---------------------------------------------------------- */
  document.querySelectorAll(".faq-item").forEach(function (item) {
    var btn = item.querySelector(".faq-btn");
    var answer = item.querySelector(".faq-answer");
    var chevron = item.querySelector(".faq-chevron");

    if (btn && answer && chevron) {
      btn.addEventListener("click", function () {
        var isOpen = item.classList.contains("active");

        document.querySelectorAll(".faq-item").forEach(function (faq) {
          faq.classList.remove("active");

          var faqBtn = faq.querySelector(".faq-btn");
          var faqAnswer = faq.querySelector(".faq-answer");
          var faqChevron = faq.querySelector(".faq-chevron");

          if (faqBtn) faqBtn.setAttribute("aria-expanded", "false");
          if (faqAnswer) faqAnswer.style.display = "none";
          if (faqChevron) faqChevron.style.transform = "rotate(0deg)";
        });

        if (!isOpen) {
          item.classList.add("active");
          btn.setAttribute("aria-expanded", "true");
          answer.style.display = "block";
          chevron.style.transform = "rotate(180deg)";
        }
      });
    }
  });

  /* ----------------------------------------------------------
     4. NEWSLETTER
     ---------------------------------------------------------- */
  var newsletterBtn = document.getElementById("newsletterBtn");
  if (newsletterBtn) {
    newsletterBtn.addEventListener("click", function () {
      var emailInput = document.getElementById("newsletterEmail");
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
     5. ENTRANCE ANIMATIONS
     ---------------------------------------------------------- */
  if ("IntersectionObserver" in window) {
    var animated = document.querySelectorAll(
      ".dm-stat-card, .dm-icon-item, .dm-step-card, .pkg-row, .faq-item",
    );
    var observer = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.style.opacity = "1";
            entry.target.style.transform = "translateY(0)";
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.08, rootMargin: "0px 0px -24px 0px" },
    );

    animated.forEach(function (el) {
      el.style.opacity = "0";
      el.style.transform = "translateY(14px)";
      el.style.transition = "opacity 350ms ease, transform 350ms ease";
      observer.observe(el);
    });
  }
})();
