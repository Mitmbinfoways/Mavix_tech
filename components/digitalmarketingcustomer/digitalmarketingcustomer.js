$(document).ready(function() {
    // Data array for cards
    const cardsData = [
        {
            number: "01",
            title: "Cross-Platform Campaign Execution",
            text: "As a top digital marketing agency in the USA, we synchronize messaging across Google, Meta, YouTube, LinkedIn, and other platforms to ensure brand consistency and optimal engagement."
        },
        {
            number: "02",
            title: "ROI-Focused Ad Strategies",
            text: "Every campaign we run is data-driven. As your dedicated PPC agency in the USA, we focus on CPC, CTR, and conversion optimization so you get the most value for your budget."
        },
        {
            number: "03",
            title: "Full-Funnel Digital Marketing Plans",
            text: "From awareness campaigns to retargeting and loyalty programs, our strategies nurture leads across all stages of the funnel. Trust our internet marketing services in the USA to deliver qualified leads, not just clicks."
        },
         {
            number: "04",
            title: "Precision Targeting & Segmentation",
            text: "Using AI, CRM insights, and heatmaps, we build highly targeted audience segments. Our professional SEO services in the USA include persona research and keyword targeting tailored to local and national audiences."
        },

        {
            number: "05",
            title: "Analytics & Performance Reporting",
            text: "We provide in-depth performance reports that are easy to understand. Our transparent approach ensures you know exactly what results you’re getting from your Digital Marketing Services Company."
        },
        {
            number: "06",
            title: "Mobile-First Experiences",
            text: "With mobile traffic dominating the digital space, we design every ad and campaign for mobile optimization—ensuring speed, clarity, and conversions."
        },
        {
            number: "07",
            title: "AI-Driven Optimization",
            text: "We use machine learning and real-time analytics to adapt your campaigns continuously. As an affordable SEO company in the USA, we believe in using technology to drive efficiency and lower costs."
        },
         {
            number: "08",
            title: "Hyperlocal Targeting",
            text: "Want to target specific cities or zip codes? Our Local SEO Services USA use geofencing, location-based ads, and localized content to ensure you're visible where it matters most."
        },

       
    ];

    // Generate cards HTML
    const generateCards = () => {
        const slider = $('.slider2');
        
        // Clear existing content
        slider.empty();
        
        // Repeat the cards data 3 times to match your original setup
        
            cardsData.forEach(card => {
                const cardHTML = `
                    <div class="col-md-4">
                        <div class="custom-card text-left p-4">
                        <div class="card-numbersystem ">
                            <p class="card-nmber">${card.number}</p>
                            </div>

                            <h5 class="customer-card-title text-left mt-4">${card.title}</h5>
                            <p class="mainsubheading-global mt-4">${card.text}</p>
                        </div>
                    </div>
                `;
                slider.append(cardHTML);
            });
        
    };

    // Generate cards
    generateCards();

    // Initialize slick slider
    $('.slider2').slick({
        dots: true,
        infinite: false,
        slidesToShow: 4,
        centerMode: false,
        vertical: false,
        slidesToScroll: 1,
        arrows: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1
                }
            }
        ],
        cssEase: 'linear',
        speed: 500,
        adaptiveHeight: false
    });
});


