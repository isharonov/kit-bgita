/**
 * KIT-BGITA History — Modern Static Site
 * Vanilla JS for timeline, carousel, modals, and navigation
 */

(function() {
  'use strict';

  // =====================================================
  // DATA PREPARATION
  // =====================================================

  // Group events by year (descending)
  const eventsByYear = {};
  const years = [];

  data.events.forEach(event => {
    const year = event.year;
    if (!eventsByYear[year]) {
      eventsByYear[year] = [];
      years.push(year);
    }
    eventsByYear[year].push(event);
  });

  // Sort years descending
  years.sort((a, b) => b - a);

  // Group graduates by year
  const graduatesByYear = {};
  data.graduates.forEach(g => {
    const year = g.year;
    if (!graduatesByYear[year]) {
      graduatesByYear[year] = [];
    }
    graduatesByYear[year].push(g);
  });

  // =====================================================
  // RENDER TIMELINE
  // =====================================================

  const timeline = document.getElementById('timeline');
  const sidebarNav = document.getElementById('sidebar-nav');
  const navYears = document.getElementById('nav-years');

  // Build year navigation links
  const navYearLinks = [];
  const sidebarYearLinks = [];

  years.forEach((year, index) => {
    // Sidebar nav
    const sidebarLink = document.createElement('a');
    sidebarLink.href = `#year-${year}`;
    sidebarLink.textContent = year;
    sidebarLink.dataset.year = year;
    sidebarNav.appendChild(sidebarLink);
    sidebarYearLinks.push(sidebarLink);

    // Top nav (show first 5 years, then "older")
    if (index < 5) {
      const navLink = document.createElement('a');
      navLink.href = `#year-${year}`;
      navLink.textContent = year;
      navLink.dataset.year = year;
      navYears.appendChild(navLink);
      navYearLinks.push(navLink);
    } else if (index === 5) {
      const navLink = document.createElement('a');
      navLink.href = `#year-${year}`;
      navLink.textContent = `${year} — ${years[years.length - 1]}`;
      navLink.dataset.year = year;
      navYears.appendChild(navLink);
      navYearLinks.push(navLink);
    }
  });

  // Build timeline sections
  function shuffle(array) {
    const result = [...array];

    for (let i = result.length - 1; i > 0; i--) {
      const j = Math.floor(Math.random() * (i + 1));
      [result[i], result[j]] = [result[j], result[i]];
    }

    return result;
  }

  years.forEach(year => {
    const events = shuffle(eventsByYear[year]);
    const graduateCount = graduatesByYear[year] ? graduatesByYear[year].length : 0;

    const section = document.createElement('section');
    section.className = 'year-section';
    section.id = `year-${year}`;

    let cardsHTML = '';
    events.forEach(event => {
      const hasImage = event.poster && event.poster !== 'null';
      const isPortrait = event.is_portrait === '1';
      const hasGraduates = event.action === 'graduates' && graduateCount > 0;

      let cardClass = 'event-card';
      if (hasImage) cardClass += ' has-image';
      if (isPortrait) cardClass += ' is-portrait';

      cardsHTML += `
        <article class="${cardClass}">
          ${hasImage && !isPortrait ? `
            <div class="card-image">
              <picture>
                <source srcset="${event.poster.replace(/\.(jpg|png)$/i, '.webp')}" type="image/webp">
                <img src="${event.poster}" alt="${event.poster_desc || ''}" loading="lazy">
              </picture>
            </div>
          ` : ''}
          <div class="card-content">
            ${isPortrait && hasImage ? `
              <div class="card-image">
                <picture>
                  <source srcset="${event.poster.replace(/\.(jpg|png)$/i, '.webp')}" type="image/webp">
                  <img src="${event.poster}" alt="${event.poster_desc || ''}" loading="lazy">
                </picture>
              </div>
            ` : ''}
            <h3 class="card-title">${event.title}</h3>
            ${event.text ? `<p class="card-text">${event.text}</p>` : ''}
            ${hasGraduates ? `
              <div class="card-action">
                <button class="btn-graduates" data-year="${year}" data-graduates="${graduateCount}">
                  Список выпускников
                </button>
              </div>
            ` : ''}
          </div>
        </article>
      `;
    });

    section.innerHTML = `
      <header class="year-header">
        <h2 class="year-number">${year}</h2>
        <span class="year-count">${events.length} ${pluralize(events.length, 'событие', 'события', 'событий')}${graduateCount > 0 ? ` · ${graduateCount} ${pluralize(graduateCount, 'выпускник', 'выпускника', 'выпускников')}` : ''}</span>
      </header>
      <div class="events-grid">
        ${cardsHTML}
      </div>
    `;

    timeline.appendChild(section);
  });

  // Pluralization helper
  function pluralize(n, one, few, many) {
    const mod10 = n % 10;
    const mod100 = n % 100;
    if (mod100 >= 11 && mod100 <= 19) return many;
    if (mod10 === 1) return one;
    if (mod10 >= 2 && mod10 <= 4) return few;
    return many;
  }

  // =====================================================
  // SCROLL SPY
  // =====================================================

  const yearSections = document.querySelectorAll('.year-section');
  const allYearLinks = [...sidebarYearLinks, ...navYearLinks];

  const observerOptions = {
    root: null,
    rootMargin: '-20% 0px -70% 0px',
    threshold: 0
  };

  const scrollObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const year = entry.target.id.replace('year-', '');
        allYearLinks.forEach(link => {
          link.classList.toggle('active', link.dataset.year === year);
        });
      }
    });
  }, observerOptions);

  yearSections.forEach(section => {
    scrollObserver.observe(section);
  });

  // =====================================================
  // MOBILE NAV TOGGLE
  // =====================================================

  const navToggle = document.getElementById('nav-toggle');

  navToggle.addEventListener('click', () => {
    const isOpen = navYears.classList.toggle('open');
    navToggle.setAttribute('aria-expanded', isOpen);
  });

  // Close mobile nav on link click
  navYears.addEventListener('click', (e) => {
    if (e.target.tagName === 'A') {
      navYears.classList.remove('open');
      navToggle.setAttribute('aria-expanded', 'false');
    }
  });

  // =====================================================
  // CAROUSEL
  // =====================================================

  const carouselTrack = document.getElementById('carousel-track');
  const carouselDots = document.getElementById('carousel-dots');
  const carouselPrev = document.getElementById('carousel-prev');
  const carouselNext = document.getElementById('carousel-next');
  const carouselSlides = carouselTrack.querySelectorAll('.carousel-slide');
  const slideCount = carouselSlides.length;
  let currentSlide = 0;
  let carouselInterval;

  // Create dots
  carouselSlides.forEach((_, index) => {
    const dot = document.createElement('button');
    dot.setAttribute('aria-label', `Слайд ${index + 1}`);
    if (index === 0) dot.classList.add('active');
    dot.addEventListener('click', () => goToSlide(index));
    carouselDots.appendChild(dot);
  });

  const dots = carouselDots.querySelectorAll('button');

  function goToSlide(index) {
    currentSlide = index;
    carouselTrack.style.transform = `translateX(-${index * 100}%)`;
    dots.forEach((dot, i) => {
      dot.classList.toggle('active', i === index);
    });
  }

  function nextSlide() {
    goToSlide((currentSlide + 1) % slideCount);
  }

  function prevSlide() {
    goToSlide((currentSlide - 1 + slideCount) % slideCount);
  }

  carouselPrev.addEventListener('click', () => {
    prevSlide();
    resetAutoplay();
  });

  carouselNext.addEventListener('click', () => {
    nextSlide();
    resetAutoplay();
  });

  // Autoplay
  function startAutoplay() {
    carouselInterval = setInterval(nextSlide, 5000);
  }

  function resetAutoplay() {
    clearInterval(carouselInterval);
    startAutoplay();
  }

  // Pause on hover
  const carousel = document.getElementById('carousel');
  carousel.addEventListener('mouseenter', () => clearInterval(carouselInterval));
  carousel.addEventListener('mouseleave', startAutoplay);

  // Touch support
  let touchStartX = 0;
  let touchEndX = 0;

  carousel.addEventListener('touchstart', (e) => {
    touchStartX = e.changedTouches[0].screenX;
  }, { passive: true });

  carousel.addEventListener('touchend', (e) => {
    touchEndX = e.changedTouches[0].screenX;
    handleSwipe();
  }, { passive: true });

  function handleSwipe() {
    const diff = touchStartX - touchEndX;
    if (Math.abs(diff) > 50) {
      if (diff > 0) nextSlide();
      else prevSlide();
      resetAutoplay();
    }
  }

  startAutoplay();

  // =====================================================
  // MODAL
  // =====================================================

  const modalBackdrop = document.getElementById('modal-backdrop');
  const modalTitle = document.getElementById('modal-title');
  const modalBody = document.getElementById('modal-body');
  const modalClose = document.getElementById('modal-close');

  // Open modal on graduates button click
  timeline.addEventListener('click', (e) => {
    const btn = e.target.closest('.btn-graduates');
    if (!btn) return;

    const year = btn.dataset.year;
    const graduates = graduatesByYear[year] || [];

    modalTitle.textContent = `Выпуск специалистов — ${year}`;

    let html = '<div class="graduates-list">';
    graduates.forEach(g => {
      const isRed = g.is_red === '1';
      html += `
        <div class="graduate-item">
          <div class="diploma-icon ${isRed ? 'red' : 'blue'}">
            <picture>
              <source srcset="images/${isRed ? 'diplom_red' : 'diplom_blue'}.webp" type="image/webp">
              <img src="images/${isRed ? 'diplom_red' : 'diplom_blue'}.png" alt="${isRed ? 'Красный диплом' : 'Синий диплом'}">
            </picture>
          </div>
          <div class="graduate-info">
            <p class="graduate-name">
              ${g.vk_id ? `<a href="https://vk.com/${g.vk_id}" target="_blank" rel="noopener">${g.name}</a>` : g.name}
            </p>
            <p class="graduate-thesis">${g.thesis}</p>
          </div>
        </div>
      `;
    });
    html += '</div>';

    modalBody.innerHTML = html;
    openModal();
  });

  function openModal() {
    modalBackdrop.hidden = false;
    document.body.style.overflow = 'hidden';
    modalClose.focus();
  }

  function closeModal() {
    modalBackdrop.hidden = true;
    document.body.style.overflow = '';
  }

  modalClose.addEventListener('click', closeModal);
  modalBackdrop.addEventListener('click', (e) => {
    if (e.target === modalBackdrop) closeModal();
  });

  // Keyboard navigation
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && !modalBackdrop.hidden) {
      closeModal();
    }
  });

})();
