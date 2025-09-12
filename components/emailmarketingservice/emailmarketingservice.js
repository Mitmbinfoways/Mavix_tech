$(document).ready(function () {
    // Data array for cards
    const cardsData = [
        {
            image: "/assets/images/Personalization.png",
            title: "Personalization",
            text: "Create corporate email template designs that reflect your customers’ unique preferences and behaviors, ensuring every message feels personal and builds stronger connections."
        },
        {
            image: "../assets/images/Segment.png",
            title: "Segmentation",
            text: "Organize your email lists into targeted groups based on demographics and interests so you can send campaigns that truly resonate and drive better engagement."
        },
        {
            image: "/assets/images/Responsive Degine.png",
            title: "Responsive Design",
            text: "All templates are crafted to be fully responsive, guaranteeing your emails look flawless and professional on every device, whether mobile, tablet, or desktop—thanks to our expert responsive email designers and HTML email template designers."
        },
        {
            image: "../assets/images/ABTesting.png",
            title: "Analytics",
            text: "Access detailed reports on email opens, clicks, and conversions, helping you understand campaign performance and make data-driven improvements."
        },
        {
            image: "/assets/images/Personalization.png",
            title: "A/B Testing",
            text: "Test different subject lines, layouts, and content versions to identify what resonates best with your audience and maximizes campaign success."
        },
        {
            image: "../assets/images/Segment.png",
            title: "Compliance",
            text: "Our templates are designed to comply with GDPR, CAN-SPAM, and other industry regulations, helping you protect your brand’s reputation and customer trust."
        },
        {
            image: "/assets/images/Responsive Degine.png",
            title: "Deliverability",
            text: "Expertly coded templates improve inbox placement rates, minimizing the chances of emails landing in spam folders and increasing your campaign reach."
        },
        {
            image: "../assets/images/ABTesting.png",
            title: "Brand Consistency",
            text: "Maintain a cohesive brand image across all your emails with visually consistent, professionally designed templates that reinforce your unique identity."
        },



    ];

    // Generate cards HTML
    const generateCards = () => {
        const slider = $('.slider3');

        // Clear existing content
        slider.empty();

        // Repeat the cards data 3 times to match your original setup

        cardsData.forEach(card => {
            const cardHTML = `
                    <div class="col-md-4">
                        <div class="custom-card text-left p-4">
                        <div class="card-slider-images ">
                          <img class="card-nmber" src="${card.image}" alt="${card.title}" />

                            </div>

                            <h5 class="customer-card-title text-left ">${card.title}</h5>
                            <p class="mainsubheading-global mt-4">${card.text}</p>
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
    $('.slider3').slick({
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


