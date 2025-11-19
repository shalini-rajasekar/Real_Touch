// ─── Sticky Navbar ────────────────────────────────
window.addEventListener("scroll", () => {
  const navbar = document.querySelector(".navbar.main-nav");
  if (!navbar) return; // Prevent errors if element not found

  if (window.scrollY > 100) {
    navbar.classList.add("sticky");
  } else {
    navbar.classList.remove("sticky");
  }
});



// ─── Hero Banner Slider ───────────────────────────
window.addEventListener('scroll', function () {
  const navbar = document.querySelector('.navbar.main-nav');
  if (navbar) {
    if (window.scrollY > 100) {
      navbar.classList.add('sticky');
    } else {
      navbar.classList.remove('sticky');
    }
  }
});

document.addEventListener("DOMContentLoaded", () => {
  const slides = document.querySelectorAll(".hero-banner");
  const dotsContainer = document.querySelector(".hero-dots");

  if (!slides.length || !dotsContainer) return;

  let current = 0;

  // Create navigation dots
  slides.forEach((_, i) => {
    const dot = document.createElement("span");
    dot.classList.add("dot");
    if (i === 0) dot.classList.add("active");
    dot.addEventListener("click", () => showSlide(i));
    dotsContainer.appendChild(dot);
  });

  const dots = dotsContainer.querySelectorAll("span");

  function showSlide(index) {
    slides[current].classList.remove("active");
    dots[current].classList.remove("active");
    current = index;
    slides[current].classList.add("active");
    dots[current].classList.add("active");
  }

  // Auto slide every 5 seconds
  setInterval(() => {
    let next = (current + 1) % slides.length;
    showSlide(next);
  }, 5000);
});



document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll('.counter');

  const startCounting = (counter) => {
    const target = +counter.getAttribute('data-target');
    const duration = 1500; // total animation time (1.5s)
    const start = 0;
    const increment = target / (duration / 30);
    let count = start;

    const updateCount = () => {
      count += increment;
      if (count < target) {
        counter.innerText = Math.floor(count);
        requestAnimationFrame(updateCount);
      } else {
        counter.innerText = target;
      }
    };
    updateCount();
  };

  // Use IntersectionObserver so animation runs when visible
  const observer = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        startCounting(entry.target);
        obs.unobserve(entry.target); // run only once
      }
    });
  }, { threshold: 0.5 });

  counters.forEach(counter => observer.observe(counter));
});




  document.addEventListener('DOMContentLoaded', function () {
    const tabs = Array.from(document.querySelectorAll('.tab'));
    const contents = Array.from(document.querySelectorAll('.tab-content'));

    if (!tabs.length) {
      console.warn('No .tab elements found. Check your HTML.');
      return;
    }
    if (!contents.length) {
      console.warn('No .tab-content elements found. Check your HTML.');
      return;
    }

    function activateTab(tab) {
      const targetId = tab.dataset.target;
      if (!targetId) {
        console.warn('Tab has no data-target:', tab);
        return;
      }

      // remove active from all tabs and contents
      tabs.forEach(t => t.classList.remove('active'));
      contents.forEach(c => c.classList.remove('active'));

      // set active on clicked tab
      tab.classList.add('active');

      // find content with matching id
      const targetContent = document.getElementById(targetId);
      if (!targetContent) {
        console.warn('No element with id="' + targetId + '" found for this tab.');
        return;
      }
      targetContent.classList.add('active');
    }

    // Initialize: if there is one tab with .active use it, otherwise activate first
    let initialTab = tabs.find(t => t.classList.contains('active')) || tabs[0];
    activateTab(initialTab);

    // click handlers
    tabs.forEach(tab => {
      tab.addEventListener('click', function (e) {
        e.preventDefault();
        activateTab(tab);
      });
    });
  });



//----------------------Have a Project Section-----------------------------------


  document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll(".stat-item h3");
  let started = false; // Prevent multiple triggers

  function startCounting() {
    if (started) return; // Avoid rerun

    counters.forEach(counter => {
      const target = parseInt(counter.textContent);
      let current = 0;
      const duration = 1500; // 1.5s total animation
      const stepTime = Math.max(10, duration / target);

      const updateCounter = () => {
        current += 1;
        counter.textContent = current + "%";
        if (current < target) {
          requestAnimationFrame(updateCounter);
        }
      };

      requestAnimationFrame(updateCounter);
    });

    started = true;
  }

  // Detect when section enters viewport
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        startCounting();
      }
    });
  }, { threshold: 0.4 }); // Trigger when 40% of section visible

  const section = document.querySelector(".project-contact-sec");
  observer.observe(section);
});document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll(".stat-item h3");
  let started = false; // Prevent multiple triggers

  function startCounting() {
    if (started) return; // Avoid rerun

    counters.forEach(counter => {
      const target = parseInt(counter.textContent);
      let current = 0;
      const duration = 1500; // 1.5s total animation
      const stepTime = Math.max(10, duration / target);

      const updateCounter = () => {
        current += 1;
        counter.textContent = current + "%";
        if (current < target) {
          requestAnimationFrame(updateCounter);
        }
      };

      requestAnimationFrame(updateCounter);
    });

    started = true;
  }

  // Detect when section enters viewport
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        startCounting();
      }
    });
  }, { threshold: 0.4 }); // Trigger when 40% of section visible

  const section = document.querySelector(".project-contact-sec");
  observer.observe(section);
});



//----------------------Emi Section-----------------------------------



document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('emi-form');
  const loanInput = document.getElementById('loan_amount');
  const loanRange = document.getElementById('loan_range');
  const loanValue = document.getElementById('loan_value');
  const rateInput = document.getElementById('interest_rate');
  const rateRange = document.getElementById('rate_range');
  const rateValue = document.getElementById('rate_value');
  const tenureInput = document.getElementById('tenure');
  const tenureRange = document.getElementById('tenure_range');
  const tenureValue = document.getElementById('tenure_value');
  const tenureLabel = document.getElementById('tenure_label');
  const tenureUnit = document.getElementById('tenure_unit');
  const tenureBtns = document.querySelectorAll('.tenure-btn');

  let chart = null;

  // Sync input ↔ range
  function syncInputRange(input, range, display, format) {
    input.addEventListener('input', () => {
      range.value = input.value;
      display.textContent = format(input.value);
      calculateEMI();
    });
    range.addEventListener('input', () => {
      input.value = range.value;
      display.textContent = format(range.value);
      calculateEMI();
    });
  }

  // Formatters
  function formatCurrency(val) { return (parseInt(val)).toLocaleString('en-IN'); }
  function formatRate(val) { return parseFloat(val).toFixed(1); }

  syncInputRange(loanInput, loanRange, loanValue, formatCurrency);
  syncInputRange(rateInput, rateRange, rateValue, formatRate);

  // Tenure unit switch
  tenureBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      tenureBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      const unit = btn.dataset.unit;
      tenureUnit.value = unit;
      tenureLabel.textContent = unit === 'years' ? 'Years' : 'Months';
      tenureRange.max = unit === 'years' ? 30 : 360;
      tenureRange.step = unit === 'years' ? 1 : 3;
      if (unit === 'years') {
        tenureInput.value = Math.round(tenureInput.value / 12) || 1;
        tenureRange.value = tenureInput.value;
      } else {
        tenureInput.value = tenureInput.value * 12 || 12;
        tenureRange.value = tenureInput.value;
      }
      tenureValue.textContent = tenureInput.value;
      calculateEMI();
    });
  });

  tenureRange.addEventListener('input', () => {
    const unit = tenureUnit.value;
    const val = tenureRange.value;
    tenureInput.value = val;
    tenureValue.textContent = val;
    calculateEMI();
  });

  tenureInput.addEventListener('input', () => {
    tenureRange.value = tenureInput.value;
    tenureValue.textContent = tenureInput.value;
    calculateEMI();
  });

  // Calculate EMI
  function calculateEMI() {
    const principal = parseFloat(loanInput.value) || 0;
    const rate = (parseFloat(rateInput.value) || 0) / 12 / 100;
    const tenure = tenureUnit.value === 'months' ? parseInt(tenureInput.value) || 0 : (parseInt(tenureInput.value) || 0) * 12;

    if (principal <= 0 || rate <= 0 || tenure <= 0) {
      resetResults();
      return;
    }

    const emi = principal * rate * Math.pow(1 + rate, tenure) / (Math.pow(1 + rate, tenure) - 1);
    const total = emi * tenure;
    const interest = total - principal;

    document.getElementById('result_emi').textContent = emi.toFixed(2);
    document.getElementById('result_interest').textContent = interest.toFixed(2);
    document.getElementById('result_total').textContent = total.toFixed(2);

    document.querySelector('.result-box').classList.add('active');
    updateChart(principal, interest);
  }

  function resetResults() {
    document.querySelector('.result-box').classList.remove('active');
    if (chart) chart.destroy();
  }

  function updateChart(principal, interest) {
    const ctx = document.getElementById('emiChart').getContext('2d');
    if (chart) chart.destroy();

    chart = new Chart(ctx, {
      type: 'doughnut',
      data: {
        datasets: [{
          data: [principal, interest],
          backgroundColor: ['#2563eb', '#29b9ed'],
          borderWidth: 0,
          borderRadius: 8
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        cutout: '70%',
        plugins: { legend: { display: false } }
      }
    });
  }

  // Initial calc
  calculateEMI();

  // Form submit (optional — PHP handles fallback)
  form.addEventListener('submit', (e) => {
    e.preventDefault();
    calculateEMI();
  });
});



//----------------------CASE STUDIES-----------------------------------


document.addEventListener("DOMContentLoaded", () => {
  const track = document.getElementById("csTrack"); // ✅ Correct ID
  const slides = Array.from(track.children).filter(slide => !slide.classList.contains('clone'));
  const prevBtn = document.querySelector(".cs-nav .prev");
  const nextBtn = document.querySelector(".cs-nav .next");
  let index = 0;
  const total = slides.length;

  function updateSlider() {
    track.style.transform = `translateX(-${index * 100}%)`;

    // Animate progress bar for active slide
    slides.forEach((slide, i) => {
      const fill = slide.querySelector(".cs-fill");
      if (fill) {
        fill.style.width = i === index ? "100%" : "0";
      }
    });
  }

  function nextSlide() {
    index = (index + 1) % total;
    updateSlider();
  }

  function prevSlide() {
    index = (index - 1 + total) % total;
    updateSlider();
  }

  nextBtn.addEventListener("click", () => {
    nextSlide();
    resetAutoSlide();
  });

  prevBtn.addEventListener("click", () => {
    prevSlide();
    resetAutoSlide();
  });

  // Auto slide
  let autoSlide = setInterval(nextSlide, 5000);
  function resetAutoSlide() {
    clearInterval(autoSlide);
    autoSlide = setInterval(nextSlide, 5000);
  }

  // Pause when hovered
  track.addEventListener("mouseenter", () => clearInterval(autoSlide));
  track.addEventListener("mouseleave", resetAutoSlide);

  updateSlider();
});



(function () {
  let track, dotsContainer, totalSlides, index = 0, timer, isManual = false;
  let step = 0; // card width + gap

  function getStep() {
    const card = track.querySelector('.quote-card');
    const trackStyles = getComputedStyle(track);
    const gap = parseFloat(trackStyles.gap || trackStyles.columnGap || 0);
    // Use getBoundingClientRect for precise rendered width
    const cardWidth = card.getBoundingClientRect().width;
    return cardWidth + gap;
  }

  function buildDots() {
    dotsContainer.innerHTML = '';
    for (let i = 0; i < totalSlides; i++) {
      const dot = document.createElement('div');
      dot.className = 'ts-dot' + (i === 0 ? ' active' : '');
      dot.addEventListener('click', () => {
        stopAuto();
        isManual = true;
        index = i;
        moveToIndex();
      });
      dotsContainer.appendChild(dot);
    }
  }

  function updateDots() {
    const dots = dotsContainer.querySelectorAll('.ts-dot');
    dots.forEach(d => d.classList.remove('active'));
    const active = dots[index % totalSlides];
    if (active) active.classList.add('active');
  }

  function moveToIndex(animate = true) {
    track.style.transition = animate ? 'transform 0.6s ease-in-out' : 'none';
    track.style.transform = `translateX(-${index * step}px)`;
    updateDots();
  }

  function autoSlide() {
    if (isManual) return;
    index++;
    moveToIndex(true);

    // When we’ve scrolled through the original set, snap back to start
    if (index >= totalSlides) {
      // after the animation finishes, jump back without flicker
      setTimeout(() => {
        index = 0;
        moveToIndex(false);
      }, 600);
    }
  }

  function startAuto() {
    stopAuto();
    timer = setInterval(autoSlide, 3000);
  }
  function stopAuto() {
    if (timer) clearInterval(timer);
  }

  function init() {
    track = document.querySelector('#tsTrack');
    dotsContainer = document.querySelector('.ts-dots');

    // Duplicate slides once to allow seamless loop
    const original = Array.from(track.children);
    totalSlides = original.length;
    track.innerHTML = '';
    // Append original + clone
    original.forEach(n => track.appendChild(n.cloneNode(true)));
    original.forEach(n => track.appendChild(n.cloneNode(true)));

    step = getStep();
    buildDots();
    index = 0;
    moveToIndex(false);

    // Pause on hover
    track.addEventListener('mouseenter', stopAuto);
    track.addEventListener('mouseleave', () => { isManual = false; startAuto(); });

    startAuto();
  }

  // Recalc on resize (debounced)
  let resizeTO;
  function handleResize() {
    clearTimeout(resizeTO);
    resizeTO = setTimeout(() => {
      const prevStep = step;
      step = getStep();
      // Keep the visible card aligned after step change
      moveToIndex(false);
    }, 150);
  }

  window.addEventListener('load', init);          // wait for images/fonts
  window.addEventListener('resize', handleResize); // responsive recalc
})();




//----------------------Faq Section-----------------------------------

document.addEventListener('DOMContentLoaded', () => { 
  const searchInput = document.querySelector('.faq-search input');
  const tabs = document.querySelectorAll('.tab');
  const items = document.querySelectorAll('.faq-item');
  const questions = document.querySelectorAll('.faq-question');

  // ✅ Show all FAQs initially
  function showAllFaqs() {
    items.forEach(item => {
      item.style.display = 'block';
    });
    document.querySelector('.tab[data-tab="all"]').classList.add('active');
  }
  showAllFaqs();

  // 🔍 Search filter
  searchInput.addEventListener('input', () => {
    const term = searchInput.value.toLowerCase();
    items.forEach(item => {
      const text = item.textContent.toLowerCase();
      item.style.display = text.includes(term) ? 'block' : 'none';
    });
  });

  // 🏷️ Tabs filter
  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      tabs.forEach(t => t.classList.remove('active'));
      tab.classList.add('active');
      const category = tab.getAttribute('data-tab');

      items.forEach(item => {
        const itemCat = item.getAttribute('data-category');
        if (category === 'all' || itemCat === category) {
          item.style.display = 'block';
        } else {
          item.style.display = 'none';
        }
      });
    });
  });

  // 🎚️ Accordion toggle
  questions.forEach(btn => {
    btn.addEventListener('click', () => {
      const parent = btn.parentElement;
      const isActive = parent.classList.contains('active');

      // Close all first
      items.forEach(i => {
        i.classList.remove('active');
        i.querySelector('.faq-question').setAttribute('aria-expanded', 'false');
      });

      // Open clicked one
      if (!isActive) {
        parent.classList.add('active');
        btn.setAttribute('aria-expanded', 'true');
      }
    });

    // Keyboard accessibility
    btn.addEventListener('keydown', e => {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        btn.click();
      }
    });
  });
});






