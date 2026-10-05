(() => {
  const get = (id) => document.getElementById(id);

  // Reveal elements as they enter the viewport.
  if ('IntersectionObserver' in window) {
    const revealObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;
        entry.target.classList.add('in');
        observer.unobserve(entry.target);
      });
    }, { threshold: 0.08 });

    document.querySelectorAll('.rv').forEach((element) => revealObserver.observe(element));
  } else {
    document.querySelectorAll('.rv').forEach((element) => element.classList.add('in'));
  }

  // Services tabs and the floating AI SEO shortcut.
  const tabButtons = [...document.querySelectorAll('.tab-btn')];
  const tabPanels = [...document.querySelectorAll('.tab-panel')];

  tabButtons.forEach((button, index) => {
    button.addEventListener('click', () => {
      tabButtons.forEach((item) => item.classList.remove('active'));
      tabPanels.forEach((panel) => panel.classList.remove('active'));
      button.classList.add('active');
      tabPanels[index]?.classList.add('active');

      if (window.innerWidth <= 860) {
        button.scrollIntoView({ behavior: 'smooth', inline: 'center', block: 'nearest' });
      }
    });
  });

  get('aiSide')?.addEventListener('click', () => tabButtons[0]?.click());

  // Update the process step and progress bar while scrolling.
  const processSteps = [...document.querySelectorAll('.pstep')];
  const currentStep = get('stepNow');
  const stepBar = get('stepBar');

  if (processSteps.length && 'IntersectionObserver' in window) {
    const processObserver = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;

        const stepIndex = processSteps.indexOf(entry.target);
        processSteps.forEach((step, index) => step.classList.toggle('on', index <= stepIndex));
        if (currentStep) currentStep.textContent = String(stepIndex + 1).padStart(2, '0');
        if (stepBar) stepBar.style.width = `${((stepIndex + 1) / processSteps.length) * 100}%`;
      });
    }, { rootMargin: '-45% 0px -45% 0px' });

    processSteps.forEach((step) => processObserver.observe(step));
  }

  // Keep the area list, map pins, and map label in sync.
  const areaButtons = [...document.querySelectorAll('#areaList button')];
  const mapPins = [...document.querySelectorAll('.mp')];
  const currentArea = get('areaName');

  function selectArea(slug) {
    areaButtons.forEach((button) => {
      button.classList.toggle('active', button.dataset.a === slug);
    });
    mapPins.forEach((pin) => {
      pin.classList.toggle('active', pin.dataset.a === slug);
    });

    const selectedButton = areaButtons.find((button) => button.dataset.a === slug);
    if (selectedButton && currentArea) {
      currentArea.textContent = selectedButton.firstChild.textContent.trim();
    }
  }

  areaButtons.forEach((button) => {
    button.addEventListener('mouseenter', () => selectArea(button.dataset.a));
    button.addEventListener('click', () => selectArea(button.dataset.a));
  });
  mapPins.forEach((pin) => {
    pin.addEventListener('click', () => selectArea(pin.dataset.a));
  });
  if (areaButtons.length) selectArea(areaButtons[0].dataset.a);

  // Rotate the example search queries. Respect the visitor's reduced-motion setting.
  const typedQuery = get('typed');
  if (typedQuery) {
    let nextQueries = [];
    try {
      nextQueries = JSON.parse(typedQuery.dataset.nextQueries || '[]');
    } catch (error) {
      nextQueries = [];
    }

    const queries = [typedQuery.textContent.trim(), ...nextQueries].filter(Boolean);
    if (queries.length && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
      let queryIndex = 0;
      let characterIndex = 0;
      let deleting = false;

      function animateQuery() {
        const query = queries[queryIndex];
        typedQuery.textContent = query.slice(0, characterIndex);

        if (!deleting && characterIndex < query.length) {
          characterIndex++;
          window.setTimeout(animateQuery, 70);
        } else if (!deleting) {
          deleting = true;
          window.setTimeout(animateQuery, 1800);
        } else if (characterIndex > 0) {
          characterIndex--;
          window.setTimeout(animateQuery, 30);
        } else {
          deleting = false;
          queryIndex = (queryIndex + 1) % queries.length;
          window.setTimeout(animateQuery, 300);
        }
      }

      animateQuery();
    }
  }

  // Validate the audit form and prepare the WhatsApp message.
  const auditForm = get('form');
  if (auditForm) {
    auditForm.addEventListener('submit', (event) => {
      event.preventDefault();

      const status = get('status');
      const requiredFields = [...auditForm.querySelectorAll('[required]')];
      const invalidField = requiredFields.find((field) => !field.value.trim() || !field.checkValidity());

      requiredFields.forEach((field) => {
        field.classList.toggle('invalid', !field.value.trim() || !field.checkValidity());
      });

      if (invalidField) {
        if (status) {
          status.style.color = '#e5484d';
          status.textContent = 'Please add your name, a valid phone number and your website.';
        }
        invalidField.focus();
        return;
      }

      const values = Object.fromEntries(new FormData(auditForm));
      const lines = [
        'Hi Tachomind, I would like a free SEO audit.',
        '',
        `*Name:* ${values.name.trim()}`,
        `*Phone:* ${values.phone.trim()}`,
        `*Website:* ${values.website.trim()}`,
        `*Service:* ${values.service}`,
        `*Location:* ${values.area}`,
      ];

      if (values.message?.trim()) lines.push(`*Details:* ${values.message.trim()}`);
      lines.push('', 'Please share the audit and next steps.');

      const phoneNumber = auditForm.dataset.wa || '91700824XXXX';
      const whatsappUrl = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(lines.join('\n'))}`;
      const whatsappWindow = window.open(whatsappUrl, '_blank');

      if (whatsappWindow) {
        whatsappWindow.opener = null;
      } else {
        window.location.href = whatsappUrl;
      }

      if (status) {
        status.style.color = '#1a8f4a';
        status.textContent = 'WhatsApp is opening with your request. Just tap Send.';
      }
      auditForm.reset();
    });

    auditForm.querySelectorAll('input, select').forEach((field) => {
      field.addEventListener('input', () => field.classList.remove('invalid'));
    });
  }

  // Scroll the case study slider one card at a time.
  const caseTrack = get('track');
  const firstCaseCard = caseTrack?.querySelector('.ind');
  const scrollAmount = () => (firstCaseCard?.offsetWidth || 0) + 20;

  get('next')?.addEventListener('click', () => {
    caseTrack?.scrollBy({ left: scrollAmount(), behavior: 'smooth' });
  });
  get('prev')?.addEventListener('click', () => {
    caseTrack?.scrollBy({ left: -scrollAmount(), behavior: 'smooth' });
  });

  // Animate the timeline when it first appears.
  const timeline = get('phaseTrack');
  if (timeline && 'IntersectionObserver' in window) {
    const timelineObserver = new IntersectionObserver((entries, observer) => {
      if (!entries[0].isIntersecting) return;
      timeline.classList.add('go');
      observer.disconnect();
    }, { threshold: 0.4 });
    timelineObserver.observe(timeline);
  }

  // Open one FAQ answer at a time and keep its height correct after resizing.
  const accordions = [...document.querySelectorAll('[data-acc]')];

  function setAnswerHeight(item, isOpen) {
    const answer = item.querySelector('.qa-b');
    if (answer) answer.style.maxHeight = isOpen ? `${answer.scrollHeight}px` : '0px';
  }

  accordions.forEach((accordion) => {
    const items = [...accordion.querySelectorAll('.qa')];

    items.forEach((item) => {
      setAnswerHeight(item, item.classList.contains('open'));
      item.querySelector('.qa-h')?.addEventListener('click', () => {
        const shouldOpen = !item.classList.contains('open');

        items.forEach((otherItem) => {
          otherItem.classList.remove('open');
          setAnswerHeight(otherItem, false);
        });

        if (shouldOpen) {
          item.classList.add('open');
          setAnswerHeight(item, true);
        }
      });
    });
  });

  window.addEventListener('resize', () => {
    document.querySelectorAll('.qa.open').forEach((item) => setAnswerHeight(item, true));
  });
})();
