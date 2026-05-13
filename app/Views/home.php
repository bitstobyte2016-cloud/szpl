<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Swastic Zinc Pvt. Ltd.</title>

    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="/css/theme.css">
</head>

<body>

<?= view('header') ?>

<main>
    
    <!-- banner section -->
    <section class="home-banner">
         <img
        src="/Images/home_banner.png"
        alt="Swastic Zinc Banner"
        class="home-banner-image"
        >
        
        <div class="home-banner-overlay"></div>
        <div class="home-banner-top-fade"></div>
        <div class="container">
            <div class="home-banner-content">
                <p class="home-banner-subtitle">
                    SWASTIC ZINC PVT. LTD.
                </p>
                <h1 class="home-banner-title">
                    RECYCLING TODAY
                    <br>
                    FOR A BETTER
                    <br>
                    <span>TOMORROW</span>
                </h1>
                <p class="home-banner-description">
                    Leading manufacturer of Zinc Sulphate Heptahydrate 
                    and Zinc Sulphate with focus on sustainable metal recovery solutions.
                </p>
            </div>
        </div>
    </section>
    
    <!-- about us section -->
    <section class="home-about-section">
        <div class="container">
            <div class="home-about-layout">
                <div class="home-about-content">
                    <p class="home-about-subtitle">
                        ABOUT SZPL
                    </p>
                    <h2 class="home-about-title">
                        Committed to
                        <br>
                        Quality. Driven by
                        <br>
                        <span>Sustainability.</span>
                    </h2>
                    <p class="home-about-description">
                        Swastic Zinc Pvt. Ltd. is a pioneer in zinc
                        manufacturing and metal recovery with a focus
                        on environmental responsibility, innovation and
                        customer satisfaction.
                    </p>
                    <a href="/about_us" class="btn btn-primary">
                        Know More About Us
                    </a>
                </div>
                <div class="home-about-image-wrapper">
                    <img
                        src="/Images/home_about.png"
                        alt="About Swastic Zinc Pvt. Ltd."
                        class="home-about-image"
                    >
                </div>
            </div>
        </div>
    </section>
    
    <!-- products section -->
    <section class="home-products-section">
        <div class="container">
            <div class="home-products-header">
                <div>
                    <p class="home-products-subtitle">
                        OUR PRODUCTS
                    </p>
                    <h2 class="home-products-title">
                        High Quality Products
                        <br>
                        for <span>Global Industries</span>
                    </h2>
                </div>
                <a href="/products" class="home-products-btn">
                    View All Products
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
            <div class="home-products-grid">
                <!-- PRODUCT 1 -->
                <div class="home-product-card">
                    <div class="home-product-image">
                        <img
                            src="/Images/znso_crystals.png"
                            alt="Zinc Sulphate Heptahydrate"
                        >
                    </div>
                    <div class="home-product-content">
                        <h3>
                            Zinc Sulphate
                            <br>
                            Heptahydrate
                        </h3>
                        <p>
                            Premium quality ZnSO₄·7H₂O suitable for
                            agriculture, industrial and feed applications.
                        </p>
                        <a href="/products" class="home-product-link">
                            Explore Product
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- PRODUCT 2 -->
                <div class="home-product-card">
                    <div class="home-product-image">
                        <img
                            src="/Images/copper.png"
                            alt="Copper Recovery"
                        >
                    </div>
                    <div class="home-product-content">
                        <h3>
                            Copper
                            <br>
                            Recovery
                        </h3>
                        <p>
                            Efficient copper recovery solutions
                            from industrial by-products.
                        </p>
                        <a href="/products" class="home-product-link">
                            Explore Product
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- PRODUCT 3 -->
                <div class="home-product-card">
                    <div class="home-product-image">
                        <img
                            src="/Images/znso_tanker.png"
                            alt="Metal Recycling"
                        >
                    </div>
                    <div class="home-product-content">
                        <h3>
                            Zinc Sulphate
                            <br>
                            Technical Grade Solution
                        </h3>
                        <p>
                            Sustainable recycling of metals
                            for a circular future.
                        </p>
                        <a href="/products" class="home-product-link">
                            Explore Product
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?= view('footer') ?>

</body>
</html>