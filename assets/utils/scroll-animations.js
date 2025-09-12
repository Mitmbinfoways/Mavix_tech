export function initScrollAnimations(options = {}) {
  const animationClass = options.defaultAnimation || "animate__fadeInUp";
  const sectionClass = options.selectorClass || "scroll-section";
  const threshold = options.threshold || 0.1;

  const observer = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const target = entry.target;
        const animation = target.dataset.animation || animationClass;
        const delay = target.dataset.delay || "0s";

        target.style.setProperty("--delay", delay);
        target.classList.add("animate__animated", animation);
        obs.unobserve(target);
      }
    });
  }, {
    threshold,
    rootMargin: "0px 0px -10% 0px"
  });

  const observeSections = () => {
    document.querySelectorAll(`.${sectionClass}`).forEach(section => {
      observer.observe(section);
    });
  };

  window.addEventListener("load", observeSections);
}

export function enhanceImagesPerformance() {
  try {
    document.querySelectorAll('img').forEach(img => {
      if (!img.hasAttribute('loading')) img.setAttribute('loading', 'lazy');
      if (!img.hasAttribute('decoding')) img.setAttribute('decoding', 'async');
      if (!img.hasAttribute('fetchpriority')) img.setAttribute('fetchpriority', 'auto');
    });

    const lazyBgElements = document.querySelectorAll('[data-bg]');
    if (lazyBgElements.length === 0) return;

    const bgObserver = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const target = entry.target;
          const url = target.getAttribute('data-bg');
          if (url) {
            target.style.backgroundImage = `url("${url}")`;
            target.removeAttribute('data-bg');
          }
          bgObserver.unobserve(target);
        }
      });
    }, { rootMargin: '200px', threshold: 0.01 });

    lazyBgElements.forEach(el => bgObserver.observe(el));
  } catch (_) {}
}