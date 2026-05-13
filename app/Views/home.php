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

    <!-- ========================================
         HERO SECTION
    ========================================= -->

    <section class="hero-section">

        <div class="hero-overlay"></div>

        <div class="container">

            <div class="hero-content">

                <p class="hero-subtitle">
                    SWASTIC ZINC PVT. LTD.
                </p>

                <h1 class="hero-title">
                    RECYCLING TODAY
                    <br>
                    FOR A BETTER
                    <br>
                    <span class="text-orange">TOMORROW</span>
                </h1>

                <p class="hero-description">
                    Leading manufacturer and exporter of Zinc Sulphate
                    Heptahydrate and sustainable metal recovery solutions.
                </p>

                <div class="hero-buttons">

                    <a href="/products" class="btn btn-primary">
                        Explore Products
                    </a>

                    <a href="/about_us" class="btn btn-outline-light">
                        About SZPL
                    </a>

                </div>

            </div>

        </div>

    </section>

    <!-- ========================================
         ABOUT SECTION
    ========================================= -->

    <section class="section section-light">

        <div class="container">

            <div class="about-home-grid">

                <div class="about-home-content">

                    <p class="section-subtitle">
                        ABOUT SZPL
                    </p>

                    <h2 class="section-title">
                        Committed to
                        <br>
                        Quality. Driven by
                        <br>
                        <span class="text-orange">Sustainability.</span>
                    </h2>

                    <p class="section-description">
                        Swastic Zinc Pvt. Ltd. is a pioneer in zinc manufacturing
                        and metal recovery with a strong focus on environmental
                        responsibility, innovation and customer satisfaction.
                    </p>

                    <a href="/about_us" class="btn btn-primary">
                        Know More About Us
                    </a>

                </div>

                <div class="about-home-image">

                    <img
                        src="/Images/home_about.png"
                        alt="Swastic Zinc Manufacturing Facility"
                    >

                </div>

            </div>

        </div>

    </section>

    <!-- ========================================
         PRODUCTS SECTION
    ========================================= -->

    <section class="section">

        <div class="container">

            <div class="products-header">

                <div>

                    <p class="section-subtitle">
                        OUR PRODUCTS
                    </p>

                    <h2 class="section-title">
                        High Quality Products
                        <br>
                        for <span class="text-orange">Global Industries</span>
                    </h2>

                </div>

                <a href="/products" class="btn btn-outline">
                    View All Products
                </a>

            </div>

            <div class="products-grid">

                <!-- PRODUCT 1 -->

                <div class="product-card card">

                    <div class="product-image">

                        <img
                            src="/Images/product_1.png"
                            alt="Zinc Sulphate Heptahydrate"
                        >

                    </div>

                    <div class="product-content">

                        <div class="product-icon">
                            <i class="fa-solid fa-flask"></i>
                        </div>

                        <h3>
                            Zinc Sulphate
                            <br>
                            Heptahydrate
                        </h3>

                        <p>
                            Premium quality ZnSO4 suitable for agriculture,
                            industrial and feed applications.
                        </p>

                        <a href="/products" class="product-link">
                            Explore Product
                        </a>

                    </div>

                </div>

                <!-- PRODUCT 2 -->

                <div class="product-card card">

                    <div class="product-image">

                        <img
                            src="/Images/product_2.png"
                            alt="Copper Recovery"
                        >

                    </div>

                    <div class="product-content">

                        <div class="product-icon">
                            <i class="fa-solid fa-recycle"></i>
                        </div>

                        <h3>
                            Copper
                            <br>
                            Recovery
                        </h3>

                        <p>
                            Efficient copper recovery solutions from industrial
                            by-products and recyclable materials.
                        </p>

                        <a href="/products" class="product-link">
                            Explore Product
                        </a>

                    </div>

                </div>

                <!-- PRODUCT 3 -->

                <div class="product-card card">

                    <div class="product-image">

                        <img
                            src="/Images/product_3.png"
                            alt="Metal Recycling"
                        >

                    </div>

                    <div class="product-content">

                        <div class="product-icon">
                            <i class="fa-solid fa-industry"></i>
                        </div>

                        <h3>
                            Metal
                            <br>
                            Recycling
                        </h3>

                        <p>
                            Sustainable recycling of metals for a circular
                            economy and eco-friendly future.
                        </p>

                        <a href="/products" class="product-link">
                            Explore Product
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- ========================================
         PROCESS SECTION
    ========================================= -->

    <section class="section section-light">

        <div class="container">

            <div class="process-layout">

                <div class="process-content">

                    <p class="section-subtitle">
                        OUR PROCESS
                    </p>

                    <h2 class="section-title">
                        From Waste to
                        <br>
                        <span class="text-orange">Value</span>
                    </h2>

                    <p class="section-description">
                        Our advanced technology and skilled team ensure
                        maximum recovery with zero compromise on quality.
                    </p>

                </div>

                <div class="process-grid">

                    <div class="process-card">

                        <div class="process-icon">
                            <i class="fa-solid fa-truck"></i>
                        </div>

                        <div class="process-number">01</div>

                        <h3>
                            Raw Material
                            <br>
                            Collection
                        </h3>

                    </div>

                    <div class="process-card">

                        <div class="process-icon">
                            <i class="fa-solid fa-gears"></i>
                        </div>

                        <div class="process-number">02</div>

                        <h3>
                            Processing &
                            <br>
                            Treatment
                        </h3>

                    </div>

                    <div class="process-card">

                        <div class="process-icon">
                            <i class="fa-solid fa-flask"></i>
                        </div>

                        <div class="process-number">03</div>

                        <h3>
                            Purification &
                            <br>
                            Refinement
                        </h3>

                    </div>

                    <div class="process-card">

                        <div class="process-icon">
                            <i class="fa-solid fa-shield"></i>
                        </div>

                        <div class="process-number">04</div>

                        <h3>
                            Quality
                            <br>
                            Assurance
                        </h3>

                    </div>

                    <div class="process-card">

                        <div class="process-icon">
                            <i class="fa-solid fa-box"></i>
                        </div>

                        <div class="process-number">05</div>

                        <h3>
                            Finished Product
                            <br>
                            Dispatch
                        </h3>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- ========================================
         SUSTAINABILITY SECTION
    ========================================= -->

    <section class="section">

        <div class="container">

            <div class="sustainability-layout">

                <div class="sustainability-image">

                    <img
                        src="/Images/sustainability.png"
                        alt="Sustainability"
                    >

                </div>

                <div class="sustainability-content">

                    <p class="section-subtitle">
                        SUSTAINABILITY
                    </p>

                    <h2 class="section-title">
                        Care for
                        <span class="text-orange"> Environment.</span>
                        <br>
                        Commitment for Life.
                    </h2>

                    <p class="section-description">
                        We believe in responsible manufacturing that protects
                        our planet while creating value for future generations.
                    </p>

                    <div class="sustainability-grid">

                        <div class="sustainability-item">

                            <div class="sustainability-icon">
                                <i class="fa-solid fa-leaf"></i>
                            </div>

                            <div>

                                <h3>
                                    Eco-Friendly Processes
                                </h3>

                                <p>
                                    Minimizing waste and emissions.
                                </p>

                            </div>

                        </div>

                        <div class="sustainability-item">

                            <div class="sustainability-icon">
                                <i class="fa-solid fa-seedling"></i>
                            </div>

                            <div>

                                <h3>
                                    Resource Conservation
                                </h3>

                                <p>
                                    Efficient use of energy and resources.
                                </p>

                            </div>

                        </div>

                        <div class="sustainability-item">

                            <div class="sustainability-icon">
                                <i class="fa-solid fa-droplet"></i>
                            </div>

                            <div>

                                <h3>
                                    Safe Operations
                                </h3>

                                <p>
                                    Ensuring safety for people and environment.
                                </p>

                            </div>

                        </div>

                        <div class="sustainability-item">

                            <div class="sustainability-icon">
                                <i class="fa-solid fa-users"></i>
                            </div>

                            <div>

                                <h3>
                                    Community Impact
                                </h3>

                                <p>
                                    Building a better future together.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- ========================================
                 STATS BAR
            ========================================= -->

            <div class="stats-bar">

                <div class="stat-item">

                    <div class="stat-icon">
                        <i class="fa-solid fa-industry"></i>
                    </div>

                    <h3>20+</h3>

                    <p>
                        Years of Industry Experience
                    </p>

                </div>

                <div class="stat-item">

                    <div class="stat-icon">
                        <i class="fa-solid fa-earth-asia"></i>
                    </div>

                    <h3>50+</h3>

                    <p>
                        Countries Exported
                    </p>

                </div>

                <div class="stat-item">

                    <div class="stat-icon">
                        <i class="fa-solid fa-award"></i>
                    </div>

                    <h3>100%</h3>

                    <p>
                        Quality Assurance
                    </p>

                </div>

                <div class="stat-item">

                    <div class="stat-icon">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>

                    <h3>ISO</h3>

                    <p>
                        9001:2015 Certified
                    </p>

                </div>

            </div>

        </div>

    </section>

</main>

<?= view('footer') ?>

</body>
</html>