document.addEventListener("DOMContentLoaded", function () {
  const faqItems = document.querySelectorAll(".ppc-faq-item");

  faqItems.forEach((item) => {
    const button = item.querySelector(".ppc-faq-q");

    button.addEventListener("click", function () {
      const isOpen = item.classList.contains("active");

      faqItems.forEach((faq) => {
        faq.classList.remove("active");
        faq.querySelector(".ppc-faq-q").setAttribute("aria-expanded", "false");
      });

      if (!isOpen) {
        item.classList.add("active");
        button.setAttribute("aria-expanded", "true");
      }
    });
  });
});
