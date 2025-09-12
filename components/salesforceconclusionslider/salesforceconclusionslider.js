$(document).ready(function () {
    // Data array for cards
    const cardsData = [
        {
            image: "/assets/images/Salse Cloude.png",
            title: "Sales",
            text: "Accelerate your sales cycle with tools that help manage leads, automate tasks, and close deals faster. Sales Cloud supports AI forecasting, territory planning, and pipeline visibility—all customizable through expert Salesforce app developers."
        },
        {
            image: "../assets/images/Serive Cloude.png",
            title: "Service Cloud",
            text: "Deliver world-class service with integrated case management, self-service portals, and omnichannel support. Our Salesforce development partners optimize Service Cloud to boost customer satisfaction and agent productivity."
        },
        {
            image: "/assets/images/Markting Cloud.png",
            title: "Marketing Cloud",
            text: "Leverage data, AI, and automation to build connected journeys across email, mobile, ads, and more. As your Salesforce Marketing Cloud developer, we create targeted campaigns that increase engagement and drive conversions."
        },
        {
            image: "../assets/images/SalseForce CPQ.png",
            title: "Salesforce CPQ",
            text: "Simplify quoting with automated pricing, configuration, and approvals. Our Salesforce CRM development solutions ensure your sales team delivers accurate, fast, and customized quotes to every client."
        },
        {
            image: "/assets/images/Personalization.png",
            title: "Salesforce Commerce Cloud",
            text: "Create responsive, seamless digital storefronts with personalized experiences and AI-driven recommendations. As your Salesforce Commerce Cloud developer, we ensure consistent experiences across B2C and B2B touchpoints."
        },
        {
            image: "../assets/images/Segment.png",
            title: "Salesforce Lightning",
            text: "Enhance user productivity with a modern UI, pre-built components, and drag-and-drop customization. Our certified Salesforce developers use Lightning to create high-performing and intuitive experiences for end users."
        },
        {
            image: "/assets/images/Responsive Degine.png",
            title: "Health Cloud",
            text: "Centralize patient data and care journeys using Health Cloud. We customize this platform for providers, payers, and care teams to improve collaboration and outcomes."
        },
        {
            image: "../assets/images/ABTesting.png",
            title: "Community Cloud (Experience Cloud)",
            text: "Build vibrant online portals, support centers, and collaboration hubs for your audience. With our expertise, you get scalable solutions that boost engagement and brand loyalty."
        },
        {
            image: "../assets/images/ABTesting.png",
            title: "Nonprofit Cloud",
            text: "Manage donations, events, and volunteer efforts with automation-driven workflows and unified donor records—crafted by experienced Salesforce CRM development company professionals."
        },
        {
            image: "../assets/images/ABTesting.png",
            title: "Education Cloud",
            text: "Streamline student engagement, admissions, and alumni relations with Salesforce Education Cloud. Our team ensures complete visibility across academic journeys with personalized communication and workflow automation."
        },



    ];

    // Generate cards HTML
    const generateCards = () => {
        const slider = $('.slider4');

        // Clear existing content
        slider.empty();

        // Repeat the cards data 3 times to match your original setup

        cardsData.forEach(card => {
            const cardHTML = `
                    <div class="col-md-4">
                        <div class="custom-card-salesforce  text-left p-md-4">
                        <div class="card-slider-images">
                          <img class="card-nmber salseforce-slider-img" src="${card.image}" alt="${card.title}" />

                            </div>

                            <h5 class="customer-card-title text-left ">${card.title}</h5>
                            <p class="mainsubheading-global mt-md-4">${card.text}</p>
                        </div>
                    </div>
                `;
            slider.append(cardHTML);
        });

    };

    // Generate cards
    console.log("Generating cards...");
    generateCards();


    // Initialize slick slider
    $('.slider4').slick({
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


