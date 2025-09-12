
const carouselItems = [
  {
    number: "01",
    head: `Healthcare`,
    title: "Bird",
    img: "./assets/images/fintech solution development.png",
    alt: "bird"
  },
  {
    number: "02",
    head: `E-commerce & Retail`,
    title: "Landscape",
    img: "./assets/images/regtech app development.png",
    alt: "landscape"
  },
  {
    number: "03",
    head: `Technology & SaaS`,
    title: "Flower",
    img: "./assets/images/healthcare app development.png",
    alt: "flower"
  },
  {
    number: "04",
    head: `Real Estate`,
    title: "Dog",
    img: "./assets/images/regtech app development.png",
    alt: "dog"
  },
  {
    number: "05",
    head: `Travel & Hospitality`,
    title: "Dog",
    img: "./assets/images/regtech app development.png",
    alt: "dog"
  },
  {
    number: "06",
    head: `Education & E-learning`,
    title: "Dog",
    img: "./assets/images/regtech app development.png",
    alt: "dog"
  }
];

const carousel = document.getElementById("carousel");

// Using map instead of forEach
const carouselContent = carouselItems.map((item) => {
  return `
    <li class="slider-item">
      <h1 class="slider-number">${item.number}</h1>
      <h2 class="slider-head">${item.head}</h2>
      <div class="slider-card" title="${item.title}">
        <img src="${item.img}" alt="${item.alt}" class="slider-img" />
      </div>
    </li>
  `;
}).join('');

carousel.innerHTML = carouselContent;

const prevButton = document.querySelector('.prev-button');
const nextButton = document.querySelector('.next-button');
const scrollAmount = 530; // Adjust this value based on your card width + gap
const slider = $('.carousel');
prevButton.addEventListener('click', () => {
  carousel.scrollBy({
    left: -scrollAmount,
    behavior: 'smooth'
  });
});

nextButton.addEventListener('click', () => {
  carousel.scrollBy({
    left: scrollAmount,
    behavior: 'smooth'
  });
});

// Optional: Hide/show buttons based on scroll position
carousel.addEventListener('scroll', () => {
  const isAtStart = carousel.scrollLeft === 0;
  const isAtEnd = carousel.scrollLeft + carousel.clientWidth >= carousel.scrollWidth;

  prevButton.style.opacity = isAtStart ? '0.5' : '1';
  nextButton.style.opacity = isAtEnd ? '0.5' : '1';
});

