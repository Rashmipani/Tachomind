(function () {
  "use strict";

  /* ----------------------------------------------------------
     1. NAVBAR SCROLL DETECTION
     ---------------------------------------------------------- */
  document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.getElementById("navbar");
    window.addEventListener("scroll", function () {
      if (!navbar) return;
      if (window.scrollY > 20) {
        navbar.classList.add("scrolled");
      } else {
        navbar.classList.remove("scrolled");
      }
    });
  });
  /* ----------------------------------------------------------
     2. ACTIVE NAV MENU BY CURRENT PAGE URL
     ---------------------------------------------------------- */
  const navLinks = document.querySelectorAll(".nav-link");

  if (navLinks.length) {
    const currentPath = window.location.pathname.replace(/\/$/, "");

    navLinks.forEach(function (link) {
      const linkPath = new URL(
        link.href,
        window.location.origin,
      ).pathname.replace(/\/$/, "");

      link.classList.remove("active");

      if (linkPath === currentPath) {
        link.classList.add("active");
      }
    });
  }

  document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.getElementById("navbar");

    if (!navbar) return;

    navbar.classList.remove("scrolled");

    function handleNavbarScroll() {
      if (window.scrollY > 20) {
        navbar.classList.add("scrolled");
        console.log("scrolled class added", window.scrollY);
      } else {
        navbar.classList.remove("scrolled");
        console.log("scrolled class removed", window.scrollY);
      }
    }

    handleNavbarScroll();

    window.addEventListener("scroll", handleNavbarScroll, { passive: true });
  });

  /* ----------------------------------------------------------
     3. MOBILE MENU TOGGLE
     ---------------------------------------------------------- */
  document.addEventListener("DOMContentLoaded", function () {
    const hamburger = document.getElementById("hamburger");
    const mobileMenu = document.getElementById("mobileMenu");

    if (!hamburger || !mobileMenu) return;

    let isMenuOpen = false;

    mobileMenu.className = "mobile-menu";

    hamburger.addEventListener("click", function (e) {
      e.preventDefault();
      e.stopPropagation();

      if (isMenuOpen) {
        mobileMenu.className = "mobile-menu";
        isMenuOpen = false;
        console.log("CLOSED:", mobileMenu.className);
      } else {
        mobileMenu.className = "mobile-menu open";
        isMenuOpen = true;
        console.log("OPENED:", mobileMenu.className);
      }
    });

    document.addEventListener("click", function (e) {
      if (!mobileMenu.contains(e.target) && !hamburger.contains(e.target)) {
        mobileMenu.className = "mobile-menu";
        isMenuOpen = false;
        console.log("OUTSIDE CLOSED:", mobileMenu.className);
      }
    });
  });
  /* ----------------------------------------------------------
     4. SCROLLING MARQUEE — PARTNER LOGOS
     ---------------------------------------------------------- */
  const partners = [
    { name: "Google Partner", abbr: "G", bg: "#fef9f0", color: "#d97706" },
    { name: "Bing Ads", abbr: "B", bg: "#eff6ff", color: "#E3EBFC" },
    { name: "Meta Business", abbr: "META", bg: "#eff6ff", color: "#DAEAFB" },
    { name: "BigCommerce", abbr: "BC", bg: "#f0fdf4", color: "#15803d" },
    { name: "WooCommerce", abbr: "WOO", bg: "#faf5ff", color: "#7c3aed" },
    { name: "Shopify Plus", abbr: "SH", bg: "#f0fdf4", color: "#059669" },
    { name: "Facebook Partner", abbr: "FB", bg: "#eff6ff", color: "#1877f2" },
    { name: "Google Analytics", abbr: "GA", bg: "#fff7ed", color: "#ea580c" },
  ];

  const marqueeTrack = document.getElementById("marqueeTrack");

  function buildPartnerItem(p) {
    const item = document.createElement("div");
    item.className = "partner-item";

    const icon = document.createElement("div");
    icon.className = "partner-icon";
    icon.style.background = p.bg;
    icon.style.color = p.color;
    icon.textContent = p.abbr;

    const name = document.createElement("span");
    name.className = "partner-name";
    name.textContent = p.name;

    item.appendChild(icon);
    item.appendChild(name);
    return item;
  }

  if (marqueeTrack) {
    // Render twice for seamless loop
    partners.forEach(function (p) {
      marqueeTrack.appendChild(buildPartnerItem(p));
    });
    partners.forEach(function (p) {
      marqueeTrack.appendChild(buildPartnerItem(p));
    });
  }

  /* ----------------------------------------------------------
     5. SERVICES ACCORDION
     ---------------------------------------------------------- */
  const accordionItems = document.querySelectorAll(".accordion-item");

  accordionItems.forEach(function (item) {
    const title = item.querySelector(".accordion-title");
    const body = item.querySelector(".accordion-body");

    title.addEventListener("click", function () {
      const isActive = item.classList.contains("active");

      // Close all
      accordionItems.forEach(function (el) {
        el.classList.remove("active");
        el.querySelector(".accordion-body").style.display = "none";
      });

      // Open clicked (if it wasn't already open)
      if (!isActive) {
        item.classList.add("active");
        body.style.display = "flex";
      }
    });
  });

  /* ----------------------------------------------------------
     6. CASE STUDY FILTER TABS
     ---------------------------------------------------------- */
  const filterTabs = document.querySelectorAll(".filter-tab");
  const caseCards = document.querySelectorAll(".case-card");

  filterTabs.forEach(function (tab) {
    tab.addEventListener("click", function () {
      // Update active tab
      filterTabs.forEach(function (t) {
        t.classList.remove("active");
      });
      tab.classList.add("active");

      const filter = tab.getAttribute("data-filter");

      caseCards.forEach(function (card) {
        if (filter === "all" || card.getAttribute("data-category") === filter) {
          card.classList.remove("hidden");
          card.style.display = "";
        } else {
          card.classList.add("hidden");
          card.style.display = "none";
        }
      });
    });
  });

  /* ----------------------------------------------------------
     7. TESTIMONIALS CAROUSEL
     ---------------------------------------------------------- */
  const testimonials = [
    {
      name: "Jocelyn Jones",
      role: "Business Owner",
      country: "USA",
      flag: "🇺🇸",
      avatar:
        "https://tachomind.com/wp-content/themes/TACHO/assets/image/testimonial/Jocelyn-Head-Shot.png",
      quote:
        '"TachoMind completely transformed our online presence. Their SEO work pushed us to page one in under three months. The team is professional, responsive, and they genuinely care about results."',
    },
    {
      name: "Manivarnan",
      role: "Digital Entrepreneur",
      country: "India",
      flag: "🇮🇳",
      avatar:
        "https://tachomind.com/wp-content/themes/TACHO/assets/image/testimonial/gm.png",
      quote:
        '"I\'ve worked with several SEO agencies but TachoMind stands out. Their data-driven approach and transparent reporting gave me complete confidence. Our organic traffic grew by over 200% in six months."',
    },
    {
      name: "Toufiq Bin Ahmed Bin Sultan",
      role: "CEO",
      country: "UAE",
      flag: "🇦🇪",
      avatar:
        "https://tachomind.com/wp-content/themes/TACHO/assets/image/testimonial/toufiq-bin-ahmed-bin-sultan.jpg",
      quote:
        "\"Brilliant minds indeed! TachoMind's team delivered everything they promised and more. Their PPC campaigns drove high-quality leads at a cost per acquisition we hadn't thought possible.\"",
    },
    {
      name: "Abdul Mohsin Bin Abdul Aziz Al Afaliq",
      role: "Senior Executive",
      country: "Saudi Arabia",
      flag: "🇸🇦",
      avatar:
        "https://tachomind.com/wp-content/themes/TACHO/assets/image/testimonial/seo_client.jpg",
      quote:
        '"The level of expertise and dedication at TachoMind is unmatched. They handled our entire digital marketing strategy with professionalism and delivered measurable ROI month on month."',
    },
    {
      name: "David Muni Ichoho",
      role: "Chairman",
      country: "Tanzania",
      flag: "🇹🇿",
      avatar:
        "https://tachomind.com/wp-content/themes/TACHO/assets/image/testimonial/David-Muni-Ichoho-Chairman.jpg",
      quote:
        '"Working with TachoMind was a game-changer for our organisation. Their understanding of our market and ability to deliver targeted traffic and leads set them apart from every other agency we\'ve tried."',
    },
  ];

  let currentIndex = 0;

  const testiAvatar = document.getElementById("testiAvatar");
  const testiAvatarFB = document.getElementById("testiAvatarFallback");
  const testiQuote = document.getElementById("testiQuote");
  const testiName = document.getElementById("testiName");
  const testiRole = document.getElementById("testiRole");
  const testiDotsEl = document.getElementById("testiDots");
  const testiPrev = document.getElementById("testiPrev");
  const testiNext = document.getElementById("testiNext");
  const testiStrip = document.getElementById("testiStrip");

  // Build dots
  testimonials.forEach(function (_, i) {
    const dot = document.createElement("button");
    dot.className = "testi-dot" + (i === 0 ? " active" : "");
    dot.setAttribute("aria-label", "Go to testimonial " + (i + 1));
    dot.addEventListener("click", function () {
      goToTestimonial(i);
    });
    testiDotsEl.appendChild(dot);
  });

  // Build mini thumbnail strip
  testimonials.forEach(function (t, i) {
    const mini = document.createElement("div");
    mini.className = "testi-mini" + (i === 0 ? " active" : "");

    const avatarWrap = document.createElement("div");
    avatarWrap.className = "testi-mini-avatar-wrap";

    const avatarImg = document.createElement("img");
    avatarImg.className = "testi-mini-avatar";
    avatarImg.src = t.avatar;
    avatarImg.alt = t.name;
    avatarImg.loading = "lazy";
    avatarImg.onerror = function () {
      this.style.display = "none";
      fallback.style.display = "flex";
    };

    const fallback = document.createElement("div");
    fallback.className = "testi-mini-fallback";
    fallback.textContent = t.name.charAt(0);

    avatarWrap.appendChild(avatarImg);
    avatarWrap.appendChild(fallback);

    const shortName = document.createElement("div");
    shortName.className = "testi-mini-name";
    const nameParts = t.name.split(" ");
    shortName.textContent = nameParts.slice(0, 2).join(" ");

    const flagEl = document.createElement("div");
    flagEl.className = "testi-mini-flag";
    flagEl.textContent = t.flag + " " + t.country;

    mini.appendChild(avatarWrap);
    mini.appendChild(shortName);
    mini.appendChild(flagEl);

    mini.addEventListener("click", function () {
      goToTestimonial(i);
    });
    testiStrip.appendChild(mini);
  });

  function updateTestimonial() {
    const t = testimonials[currentIndex];

    // Avatar
    testiAvatar.src = t.avatar;
    testiAvatar.alt = t.name;
    testiAvatarFB.textContent = t.name.charAt(0);
    testiAvatar.style.display = "block";
    testiAvatarFB.style.display = "none";

    testiAvatar.onerror = function () {
      testiAvatar.style.display = "none";
      testiAvatarFB.style.display = "flex";
    };

    testiQuote.textContent = t.quote;
    testiName.textContent = t.name;
    testiRole.textContent = t.role + " · " + t.flag + " " + t.country;

    // Update dots
    const dots = testiDotsEl.querySelectorAll(".testi-dot");
    dots.forEach(function (d, i) {
      d.classList.toggle("active", i === currentIndex);
    });

    // Update mini strip
    const minis = testiStrip.querySelectorAll(".testi-mini");
    minis.forEach(function (m, i) {
      m.classList.toggle("active", i === currentIndex);
    });
  }

  function goToTestimonial(index) {
    currentIndex = (index + testimonials.length) % testimonials.length;
    updateTestimonial();
  }

  testiPrev.addEventListener("click", function () {
    goToTestimonial(currentIndex - 1);
  });
  testiNext.addEventListener("click", function () {
    goToTestimonial(currentIndex + 1);
  });

  // Auto-advance every 6 seconds
  let autoPlay = setInterval(function () {
    goToTestimonial(currentIndex + 1);
  }, 6000);

  // Pause on hover
  const testiCard = document.getElementById("testiCard");
  if (testiCard) {
    testiCard.addEventListener("mouseenter", function () {
      clearInterval(autoPlay);
    });
    testiCard.addEventListener("mouseleave", function () {
      autoPlay = setInterval(function () {
        goToTestimonial(currentIndex + 1);
      }, 6000);
    });
  }

  updateTestimonial(); // init

  /* ----------------------------------------------------------
     8. INTEGRATIONS GRID
     ---------------------------------------------------------- */
  const tools = [
    { name: "Google Analytics", abbr: "GA", bg: "#fef9f0", color: "#b45309" },
    { name: "Search Console", abbr: "GSC", bg: "#eff6ff", color: "#2563eb" },
    { name: "SEMrush", abbr: "SR", bg: "#fff7ed", color: "#c2410c" },
    { name: "Ahrefs", abbr: "AH", bg: "#eff6ff", color: "#1d4ed8" },
    { name: "Meta Ads", abbr: "META", bg: "#eff6ff", color: "#0000FF" },
    { name: "HubSpot", abbr: "HS", bg: "#fff7ed", color: "#97370C" },
    { name: "Mailchimp", abbr: "MC", bg: "#fefce8", color: "#a16207" },
    { name: "Shopify", abbr: "SH", bg: "#f0fdf4", color: "#15803d" },
  ];

  const toolsGrid = document.getElementById("toolsGrid");

  if (toolsGrid) {
    tools.forEach(function (t) {
      const card = document.createElement("div");
      card.className = "tool-card";

      const icon = document.createElement("div");
      icon.className = "tool-icon";
      icon.style.background = t.bg;
      icon.style.color = t.color;
      icon.textContent = t.abbr;

      const name = document.createElement("span");
      name.className = "tool-name";
      name.textContent = t.name;

      card.appendChild(icon);
      card.appendChild(name);
      toolsGrid.appendChild(card);
    });
  }

  /* ----------------------------------------------------------
     9. CONTACT FORM — Select value color
     ---------------------------------------------------------- */
  const fservice = document.getElementById("fservice");
  if (fservice) {
    fservice.addEventListener("change", function () {
      if (this.value) {
        this.classList.add("has-value");
      }
    });
  }

  /* ----------------------------------------------------------
     10. CONTACT FORM — Submit handling
     ---------------------------------------------------------- */
  const ctaForm = document.getElementById("ctaForm");
  if (ctaForm) {
    ctaForm.addEventListener("submit", function (e) {
      e.preventDefault();
      const btn = ctaForm.querySelector(".form-submit");
      btn.textContent = "✓ Submitted! We'll be in touch soon.";
      btn.style.background = "#059669";
      btn.disabled = true;
    });
  }

  /* ----------------------------------------------------------
     11. NEWSLETTER
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
        emailInput.style.borderColor = "rgba(239,68,68,0.5)";
        setTimeout(function () {
          emailInput.style.borderColor = "";
        }, 2000);
      }
    });
  }
})();


document.addEventListener('DOMContentLoaded', function () {

    const emailField = document.getElementById(
        'evf-2663-field_8aGh0ahEPV-5'
    );

    if (!emailField) {
        return;
    }

    // Prevent duplicates
    const existingLabel = document.querySelector(
        'label[for="' + emailField.id + '"]'
    );

    if (existingLabel) {
        existingLabel.classList.add('visually-hidden');
        return;
    }

    const label = document.createElement('label');

    label.setAttribute('for', emailField.id);
    label.className = 'visually-hidden';
    label.textContent = 'Email address';

    emailField.parentNode.insertBefore(label, emailField);

});
