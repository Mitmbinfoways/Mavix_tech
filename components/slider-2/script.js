$(document).ready(function () {
  // Data array for cards
  const cardsData = [
    {
      image: "/components/slider-2/assets/Image Features-1.png",
      title: "Healthcare",
      text: "Improving patient care and healthcare systems with secure, scalable, and efficient technology solutions.",
    },
    {
      image: "/components/slider-2/assets/Image Features.png",
      title: "E-commerce & Retail",
      text: "Driving online growth through high-performing, conversion-focused, and mobile-optimized digital storefronts.",
    },
    {
      image: "/components/slider-2/assets/Container.png",
      title: "Technology",
      text: "Boosting operational performance with integrated, scalable, and automation-ready software business solutions.",
    },
    {
      image: "/components/slider-2/assets/Container.png",
      title: "Real Estate",
      text: "Enhancing property visibility, client engagement, and sales processes with smart digital tools.",
    },
    {
      image: "/components/slider-2/assets/Image Features-1.png",
      title: "Travel & Hospitality",
      text: "Delivering seamless booking, guest satisfaction, and operational efficiency through reliable tech platforms.",
    },
    {
      image: "/components/slider-2/assets/Image Features.png",
      title: "Education & E-learning",
      text: "Enabling engaging, data-driven learning experiences through connected and interactive digital platforms.",
    }
  ];

  // Generate cards HTML
  const generateCards = () => {
    const slider = $('.slider2');
    slider.empty();

    cardsData.forEach(card => {
      const cardHTML = `
            <div>
  <div class="custom-card text-center p-4">
    <div class="image-wrapper1 mb-3">
      <img src="${card.image}" class="card-img" alt="${card.title}" />
    </div>
    <h5 class="bussines-card-title">${card.title}</h5>
    <p class="card-text">${card.text}</p>
  </div>
</div>
        `;
      slider.append(cardHTML);
    });
  };


  // Generate cards
  generateCards();

  // Initialize slick slider
  $(".slider2").slick({
    dots: true,
    infinite: false,
    slidesToShow: 3,
    centerMode: false,
    vertical: false,
    slidesToScroll: 1,
    arrows: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
    cssEase: "linear",
    speed: 500,
    adaptiveHeight: false,
  });
});
