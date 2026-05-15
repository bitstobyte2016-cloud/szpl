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
         <img src="/Images/home_banner.png" alt="Swastic Zinc Banner" class="home-banner-image">
        <div class="home-banner-overlay"></div>
        <div class="home-banner-top-fade"></div>
        <div class="container">
            <div class="home-banner-content">
                <p class="home-banner-subtitle">SWASTIC ZINC PVT. LTD.</p>
                <h1 class="home-banner-title">
                    RECYCLING TODAY<br>FOR A BETTER<br><span>TOMORROW</span>
                </h1>
                <p class="home-banner-description">
                    Leading manufacturer of Zinc Sulphate Heptahydrate and 
                    Zinc Sulphate Solution with focus on sustainable metal recovery solutions.
                </p>
            </div>
        </div>
    </section>
    
    <!-- about us section -->
    <section class="home-about-section">
        <div class="container">
            <div class="home-about-layout">
                <div class="home-about-content">
                    <p class="home-about-subtitle">ABOUT SZPL</p>
                    <h2 class="home-about-title">
                        Committed to <br> Quality. Driven by <br> <span>Sustainability.</span>
                    </h2>
                    <p class="home-about-description">
                        Swastic Zinc Pvt. Ltd. is a pioneer in zinc
                        manufacturing and metal recovery with a focus
                        on environmental responsibility, innovation and
                        customer satisfaction.
                    </p>
                    <a href="/about_us" class="btn btn-primary">Know More About Us</a>
                </div>
                <div class="home-about-image-wrapper">
                    <img src="/Images/home_about.png" alt="About Swastic Zinc Pvt. Ltd." class="home-about-image" >
                </div>
            </div>
        </div>
    </section>
    
    <!-- products section -->
    <section class="home-products-section">
        <div class="container">
            <div class="home-products-header">
                <div>
                    <p class="home-products-subtitle"> OUR PRODUCTS </p>
                    <h2 class="home-products-title"> High Quality Products <br>for <span>Global Industries</span>
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
                        <img src="/Images/znso_crystals.png" alt="Zinc Sulphate Heptahydrate">
                    </div>
                    <div class="home-product-content">
                        <h3>
                            Zinc Sulphate<br>Heptahydrate</h3>
                        <p>
                            Premium quality ZnSO₄·7H₂O suitable for
                            agriculture, industrial and feed applications.
                        </p>
                        <a href="/products" class="home-product-link">
                            Explore Product<i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- PRODUCT 2 -->
                <div class="home-product-card">
                    <div class="home-product-image">
                        <img src="/Images/copper.png" alt="Copper Recovery">
                    </div>
                    <div class="home-product-content">
                        <h3>Copper<br>Recovery</h3>
                        <p>
                            Efficient copper metal recovery solutions
                            from industrial by-products.
                        </p>
                        <a href="/products" class="home-product-link">
                            Explore Product<i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- PRODUCT 3 -->
                <div class="home-product-card">
                    <div class="home-product-image">
                        <img src="/Images/znso_tanker.png" alt="Metal Recycling">
                    </div>
                    <div class="home-product-content">
                        <h3>Zinc Sulphate<br>Technical Grade Solution</h3>
                        <p>
                            Sustainable recycling of metals
                            for a circular future.
                        </p>
                        <a href="/products" class="home-product-link">
                            Explore Product<i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- process section -->
    <section class="home-process-section">
        <div class="container">
            <div class="home-process-layout">
                <div class="home-process-content">
                    <p class="home-process-subtitle">OUR PROCESS</p>
                    <h2 class="home-process-title">
                        From Waste to<br><span>Value</span>
                    </h2>
                    <p class="home-process-description">
                        Our advanced technology and skilled
                        team ensure maximum recovery with
                        zero compromise on quality.
                    </p>
                </div>

                <div class="home-process-steps">
                    <!-- STEP 1 -->
                    <div class="home-process-step">
                        <div class="home-process-icon">
                            <i class="fa-solid fa-truck"></i>
                        </div>
                        <div class="home-process-number">01</div>
                        <h3>Raw Material<br>Collection</h3>
                    </div>

                    <!-- STEP 2 -->
                    <div class="home-process-step">
                        <div class="home-process-icon">
                            <i class="fa-solid fa-gears"></i>
                        </div>
                        <div class="home-process-number">02</div>
                        <h3>Processing &<br>Treatment</h3>
                    </div>
                    <!-- STEP 3 -->
                    <div class="home-process-step">
                        <div class="home-process-icon">
                            <i class="fa-solid fa-flask"></i>
                        </div>
                        <div class="home-process-number">03</div>
                        <h3>Purification &<br>Refinement</h3>
                    </div>

                    <!-- STEP 4 -->
                    <div class="home-process-step">
                        <div class="home-process-icon">
                            <i class="fa-solid fa-circle-check"></i>
                        </div>
                        <div class="home-process-number">04</div>
                        <h3> Quality<br>Assurance</h3>
                    </div>

                    <!-- STEP 5 -->
                    <div class="home-process-step">
                        <div class="home-process-icon">
                            <i class="fa-solid fa-box"></i>
                        </div>
                        <div class="home-process-number">05</div>
                        <h3>Finished Product<br>Dispatch</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- sustain section -->
    <section class="home-sustainability-section">
        <div class="container">
            <div class="home-sustainability-layout">
                <div class="home-sustainability-image-wrapper">
                    <img src="/Images/home_sus.png" alt="Sustainability" class="home-sustainability-image">
                </div>
                <div class="home-sustainability-content">
                    <p class="home-sustainability-subtitle">SUSTAINABILITY</p>
                    <h2 class="home-sustainability-title">
                        Care for<span> Environment.</span><br>Commitment for<span> Life.</span>
                    </h2>
                    <p class="home-sustainability-description">
                        We believe in responsible manufacturing that protects
                        our planet while creating value for future generations.
                    </p>
                    <div class="home-sustainability-features">
                        <div class="home-sus-feature">
                            <div class="home-sus-icon">
                                <i class="fa-solid fa-recycle"></i>
                            </div>
                            <div>
                                <h3>Eco-Friendly<br>Processes</h3>
                                <p>Minimizing waste
                                    and emissions</p>
                            </div>
                        </div>
                        <div class="home-sus-feature">
                            <div class="home-sus-icon">
                                <i class="fa-solid fa-leaf"></i>
                            </div>
                            <div>
                                <h3>Resource<br>Conservation</h3>
                                <p>Efficient use of energy
                                    and resources</p>
                            </div>
                        </div>
                        <div class="home-sus-feature">
                            <div class="home-sus-icon">
                                <i class="fa-solid fa-droplet"></i>
                            </div>
                            <div>
                                <h3>Safe & Green<br>Operations</h3>
                                <p>Ensuring safety for people
                                    and environment</p>
                            </div>
                        </div>
                        <div class="home-sus-feature">
                            <div class="home-sus-icon">
                                <i class="fa-solid fa-users"></i>
                            </div>
                            <div>
                                <h3>Community<br>Impact</h3>
                                <p>Building a better future together</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- orange status bar-->

            <div class="home-stats-bar">
                <div class="home-stat-item">
                    <div class="home-stat-icon">
                        <img src="/Images/ic_indus.png" alt="Industry">
                    </div>
                    <div>
                        <h3>25+</h3>
                        <p>Years of<br>Industry Experience</p>
                    </div>
                </div>
                <div class="home-stat-item">
                    <div class="home-stat-icon">
                        <img src="/Images/ic_refine.png" alt="Industry">
                    </div>
                    <div>
                        <h3>0%</h3>
                        <p>Liquid<br>discharge</p>
                    </div>
                </div>
                <div class="home-stat-item">
                    <div class="home-stat-icon">
                        <img src="/Images/ic_medal.png" t="Quality">
                    </div>
                    <div>
                        <h3>100%</h3>
                        <p>Quality<br>Assurance</p>
                    </div>
                </div>
                <div class="home-stat-item">
                    <div class="home-stat-icon">
                        <img src="/Images/ic_iso.png" alt="ISO">
                    </div>
                    <div>
                        <h3>ISO</h3>
                        <p>9001:2015<br>Certified</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?= view('footer') ?>

</body>
</html>