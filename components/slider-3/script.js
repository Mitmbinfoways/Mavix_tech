$(document).ready(function() {
    // Data array for cards
    const cardsData = [
        {
            number: "01",
            title: " Google Ads",
            text: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris"
        },
        {
            number: "02",
            title: " Meta Ads",
            text: "Service Cloud is Salesforce’s customer service platform that helps businesses deliver fast, personalized support across every channel. It empowers agents with AI-driven tools, case management, and automation to resolve issues efficiently and enhance customer satisfaction."
        },
        {
            number: "03",
            title: "YouTube Ads",
            text: "Marketing Cloud is Salesforce’s digital marketing platform that enables businesses to create personalized customer journeys across email, social media, web, and more. It combines data, AI, and automation to deliver the right message to the right audience at the right time."
        },
         {
            number: "04",
            title: "LinkedIn Ads",
            text: "Salesforce CPQ (Configure, Price, Quote) is a sales tool that helps businesses quickly and accurately generate quotes for orders. It streamlines product configuration, pricing, and approval processes—ensuring sales teams deliver error-free quotes and close deals faster."
        },

        {
            number: "05",
            title: " Google Ads",
            text: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris"
        },
        {
            number: "06",
            title: " Meta Ads",
            text: "Service Cloud is Salesforce’s customer service platform that helps businesses deliver fast, personalized support across every channel. It empowers agents with AI-driven tools, case management, and automation to resolve issues efficiently and enhance customer satisfaction."
        },
        {
            number: "07",
            title: "YouTube Ads",
            text: "Marketing Cloud is Salesforce’s digital marketing platform that enables businesses to create personalized customer journeys across email, social media, web, and more. It combines data, AI, and automation to deliver the right message to the right audience at the right time."
        },
         {
            number: "08",
            title: "LinkedIn Ads",
            text: "Salesforce CPQ (Configure, Price, Quote) is a sales tool that helps businesses quickly and accurately generate quotes for orders. It streamlines product configuration, pricing, and approval processes—ensuring sales teams deliver error-free quotes and close deals faster."
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
                        <div class="card-numbersystem">
                            <p class="card-nmber">${card.number}</p>
                            </div>

                            <h5 class="card-title text-left mt-4">${card.title}</h5>
                            <p class="card-text mt-4">${card.text}</p>
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


