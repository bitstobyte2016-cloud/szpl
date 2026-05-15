<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - SZPL</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/theme.css">
</head>

<!-- script for button clicks-->
    <script>

        document.addEventListener('DOMContentLoaded', () => {

            const items =
                document.querySelectorAll('.product-list-item');

            const details =
                document.querySelectorAll('.product-detail');

            /* ========================================
               HIDE ALL PRODUCTS
            ========================================= */

            details.forEach(detail => {

                detail.style.display = 'none';

            });

            /* ========================================
               SHOW FIRST PRODUCT
            ========================================= */

            const firstProduct =
                document.getElementById('znso_hepta');

            if (firstProduct) {

                firstProduct.style.display = 'block';

            }

            /* ========================================
               PRODUCT SWITCHING
            ========================================= */

            items.forEach(item => {

                item.addEventListener('click', () => {

                    const target =
                        item.dataset.product;

                    /* REMOVE ACTIVE */

                    items.forEach(i => {

                        i.classList.remove('active');

                    });

                    /* HIDE ALL */

                    details.forEach(detail => {

                        detail.style.display = 'none';

                    });

                    /* ACTIVATE CURRENT */

                    item.classList.add('active');

                    /* SHOW CURRENT PRODUCT */

                    const current =
                        document.getElementById(target);

                    if (current) {

                        current.style.display = 'block';

                    }

                });

            });

        });

        function requestQuote() {

            // TODO:
            // OPEN QUOTE POPUP

        }

    </script>
   



<body>
    <?= view('header') ?>
    <main class="page-content">
        <section class="products-banner-section">
            <div class="products-banner-image">
                <img
                    src="/Images/products.png"
                    alt="Products"
                >
                <div class="products-banner-overlay"></div>
            </div>
            <div class="products-banner-content">
                <p class="products-banner-subtitle">
                    OUR PRODUCTS
                </p>
                <h1 class="products-banner-title">
                    High Quality Solutions
                    <br>
                    for <span>Global Industries.</span>
                </h1>
                <p class="products-banner-text">
                    We manufacture premium zinc sulphate
                    and sustainable metal recovery products
                    designed for agriculture, industrial,
                    and environmental applications.
                </p>
            </div>
        </section>
        
        <!-- products section -->
        <section class="products-main-section">
            <div class="products-layout">

                <!-- left column-->
                <div class="products-sidebar">
                    <div class="products-sidebar-header">
                        <p class="products-sidebar-subtitle">
                            OUR PRODUCTS
                        </p>
                    </div>

                    <div class="products-list">
                        <div
                            class="product-list-item active"
                            data-product="znso_hepta"
                        >
                            <div class="product-list-left">
                                <img
                                    src="/Images/znso_crystals.png"
                                    alt="Zinc Sulphate Heptahydrate"
                                    class="product-list-image"
                                >
                                <h3>
                                    Zinc Sulphate
                                    <br>
                                    Heptahydrate
                                </h3>
                            </div>
                            <div class="product-list-arrow">
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>

                        <div
                            class="product-list-item"
                            data-product="znso_solution">
                            <div class="product-list-left">
                                <img
                                    src="/Images/znso_sol.png"
                                    alt="Zinc Sulphate Technical Grade"
                                    class="product-list-image"
                                >
                                <h3>
                                    Zinc Sulphate
                                    <br>
                                    Technical Grade
                                </h3>
                            </div>
                            <div class="product-list-arrow">
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>

                        <div
                            class="product-list-item"
                            data-product="copper">
                            <div class="product-list-left">
                                <img
                                    src="/Images/copper.png"
                                    alt="Copper Metal"
                                    class="product-list-image"
                                >
                                <h3>
                                    Copper Metal
                                </h3>
                            </div>
                            <div class="product-list-arrow">
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- right column -->
                
                <div class="products-content">
                    
                     <!-- znso4 hepta -->
                    <div class="product-detail" id="znso_hepta">
                            <h2 class="product-detail-title">
                                Zinc Sulphate Heptahydrate
                            </h2>
                            <h3 class="product-detail-subtitle">
                                ZnSO₄·7H₂O
                            </h3>
                            <p class="product-detail-description">
                                We manufacture high-quality zinc sulphate heptahydrate solutions designed to meet the
                                requirements of various industrial and agricultural applications. Produced under
                                controlled processes, our solutions maintain consistent concentration, purity, and stability to
                                ensure reliable performance in downstream processes. Zinc sulphate solutions are widely
                                used in fertilizer formulations, micronutrient supplements, chemical manufacturing, and water
                                treatment applications. Our production capability also allows for customized concentration levels
                                to suit specific customer requirements and operational needs.
                            </p>

                            <div class="product-feature-layout">
                                <div class="product-features">
                                    <h4 class="product-section-heading">
                                        Key Features
                                    </h4>
                                    <ul class="product-feature-list">
                                        <li>
                                            <i class="fa-regular fa-circle-check"></i>
                                            High purity with excellent solubility
                                        </li>
                                        <li>
                                            <i class="fa-regular fa-circle-check"></i>
                                            Free flowing crystals with consistent quality
                                        </li>
                                        <li>
                                            <i class="fa-regular fa-circle-check"></i>
                                            Suitable for industrial applications
                                        </li>
                                        <li>
                                            <i class="fa-regular fa-circle-check"></i>
                                            Manufactured under strict quality standards
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-feature-image-wrap">
                                    <img
                                        src="/Images/znso_crystals.png"
                                        alt="Zinc Sulphate"
                                        class="product-feature-image"
                                    >
                                    <img
                                        src="/Images/znso_bags.png"
                                        alt="Zinc Sulphate"
                                        class="product-feature-image"
                                    >
                                </div>
                            </div>

                            <div class="product-specifications">
                                <h4 class="product-section-heading">
                                    Specifications
                                </h4>
                                <div class="product-spec-grid">
                                    <div class="product-spec-column">
                                        <div class="product-spec-row">
                                            <span>Purity (as Zn)</span>
                                            <strong>Min. 21%</strong>
                                        </div>
                                        <div class="product-spec-row">
                                            <span>Zinc (Zn)</span>
                                            <strong>Min. 21%</strong>
                                        </div>
                                        <div class="product-spec-row">
                                            <span>Sulphate (SO₄)</span>
                                            <strong>Min. 61%</strong>
                                        </div>
                                        <div class="product-spec-row">
                                            <span>Iron (Fe)</span>
                                            <strong>Max. 0.005%</strong>
                                        </div>
                                    </div>
                                    <div class="product-spec-column">
                                        <div class="product-spec-row">
                                            <span>Lead (Pb)</span>
                                            <strong>Max. 0.001%</strong>
                                        </div>
                                        <div class="product-spec-row">
                                            <span>Arsenic (As)</span>
                                            <strong>Max. 0.0005%</strong>
                                        </div>
                                        <div class="product-spec-row">
                                            <span>Insoluble Matter</span>
                                            <strong>Max. 0.05%</strong>
                                        </div>
                                        <div class="product-spec-row">
                                            <span>Appearance</span>
                                            <strong>White Crystalline</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="product-applications">
                                <h4 class="product-section-heading">
                                    Applications
                                </h4>
                                <div class="product-application-grid">
                                    <div class="product-app-item">
                                        <i class="fa-solid fa-seedling"></i>
                                        <div>
                                            <h5>
                                                Agriculture
                                            </h5>
                                            <p>
                                                Micronutrient fertilizer
                                            </p>
                                        </div>
                                    </div>
                                    <div class="product-app-item">
                                        <i class="fa-solid fa-cow"></i>
                                        <div>
                                            <h5>
                                                Animal Feed
                                            </h5>
                                            <p>
                                                Nutritional supplement
                                            </p>
                                        </div>
                                    </div>
                                    <div class="product-app-item">
                                        <i class="fa-solid fa-droplet"></i>
                                        <div>
                                            <h5>
                                                Water Treatment
                                            </h5>
                                            <p>
                                                Precipitant and coagulant
                                            </p>
                                        </div>
                                    </div>
                                    <div class="product-app-item">
                                        <i class="fa-solid fa-flask"></i>
                                        <div>
                                            <h5>
                                                Industrial Use
                                            </h5>
                                            <p>
                                                Dyeing, leather and more
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="product-bottom-box">
                                <div class="product-packaging">
                                    <i class="fa-solid fa-box"></i>
                                    <div>
                                        <h5>
                                            Packaging
                                        </h5>
                                        <p>
                                            25 Kg / 50 Kg Bags
                                            <br>
                                            Bulk Packaging Available
                                        </p>
                                    </div>
                                </div>
                                <button
                                    class="product-quote-btn"
                                    onclick="requestQuote()">
                                    Request a Quote
                                    <i class="fa-solid fa-arrow-right"></i>
                                </button>
                            </div>
                    </div>
                    
                    <!-- znso4 solution-->
                    <div class="product-detail active" id="znso_solution">
                            <h2 class="product-detail-title">
                                Zinc Sulphate Technical Grade Soultion
                            </h2>
                            <h3 class="product-detail-subtitle">
                                ZnSO₄
                            </h3>
                            <p class="product-detail-description">
                                Swastic Zinc Pvt. Ltd. manufactures zinc sulphate solution through controlled chemical processing
                                and concentration management. 

                                The product is produced with a focus on consistency, stability, and reliable zinc content,
                                making it suitable for use in agricultural formulations and various industrial applications.
                            </p>

                            <div class="product-feature-layout">
                                <div class="product-features">
                                    <h4 class="product-section-heading">
                                        Key Features
                                    </h4>
                                    <ul class="product-feature-list">
                                        <li>
                                            <i class="fa-regular fa-circle-check"></i>
                                            Controlled zinc concentration
                                        </li>
                                        <li>
                                            <i class="fa-regular fa-circle-check"></i>
                                            Stable and uniform solution quality
                                        </li>
                                        <li>
                                            <i class="fa-regular fa-circle-check"></i>
                                            Consistent batch to batch performance
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-feature-image-wrap">
                                    <img
                                        src="/Images/znso_sol.png"
                                        alt="Zinc Sulphate"
                                        class="product-feature-image"
                                    >
                                    <img
                                        src="/Images/znso_tanker.png"
                                        alt="Zinc Sulphate"
                                        class="product-feature-image"
                                    >
                                </div>
                            </div>

                            <div class="product-specifications">
                                <h4 class="product-section-heading">
                                    Specifications
                                </h4>
                                <div class="product-spec-grid">
                                    <div class="product-spec-column">
                                        <div class="product-spec-row">
                                            <span>Purity (as Zn)</span>
                                            <strong>Min. 13%</strong>
                                        </div>
                                        <div class="product-spec-row">
                                            <span>Zinc (Zn)</span>
                                            <strong>Min. 13%</strong>
                                        </div>
                                        <div class="product-spec-row">
                                            <span>Sulphate (SO₄)</span>
                                            <strong>Min. 61%</strong>
                                        </div>
                                        <div class="product-spec-row">
                                            <span>Iron (Fe)</span>
                                            <strong>Max. 0.005%</strong>
                                        </div>
                                    </div>
                                    <div class="product-spec-column">
                                        <div class="product-spec-row">
                                            <span>Lead (Pb)</span>
                                            <strong>Max. 0.001%</strong>
                                        </div>
                                        <div class="product-spec-row">
                                            <span>Arsenic (As)</span>
                                            <strong>Max. 0.0005%</strong>
                                        </div>
                                        <div class="product-spec-row">
                                            <span>Insoluble Matter</span>
                                            <strong>Max. 0.05%</strong>
                                        </div>
                                        <div class="product-spec-row">
                                            <span>Appearance</span>
                                            <strong>transparent solution with 0% visible solid impurity</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="product-applications">
                                <h4 class="product-section-heading">
                                    Applications
                                </h4>
                                <div class="product-application-grid">
                                    <div class="product-app-item">
                                        <i class="fa-solid fa-seedling"></i>
                                        <div>
                                            <h5>
                                                Agriculture
                                            </h5>
                                            <p>
                                                Micronutrient fertilizer
                                            </p>
                                        </div>
                                    </div>
                                    <div class="product-app-item">
                                        <i class="fa-solid fa-cow"></i>
                                        <div>
                                            <h5>
                                                Animal Feed
                                            </h5>
                                            <p>
                                                Nutritional supplement
                                            </p>
                                        </div>
                                    </div>
                                    <div class="product-app-item">
                                        <i class="fa-solid fa-droplet"></i>
                                        <div>
                                            <h5>
                                                Water Treatment
                                            </h5>
                                            <p>
                                                Precipitant and coagulant
                                            </p>
                                        </div>
                                    </div>
                                    <div class="product-app-item">
                                        <i class="fa-solid fa-flask"></i>
                                        <div>
                                            <h5>
                                                Industrial Use
                                            </h5>
                                            <p>
                                                Dyeing, leather and more
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="product-bottom-box">
                                <div class="product-packaging">
                                    <i class="fa-solid fa-box"></i>
                                    <div>
                                        <h5>
                                            Packaging
                                        </h5>
                                        <p>
                                            25 Kg / 50 Kg Bags
                                            <br>
                                            Bulk Packaging Available
                                        </p>
                                    </div>
                                </div>
                                <button
                                    class="product-quote-btn"
                                    onclick="requestQuote()">
                                    Request a Quote
                                    <i class="fa-solid fa-arrow-right"></i>
                                </button>
                            </div>
                    </div>
                    
                    <!-- cu metal -->
                    <div class="product-detail" id="copper">
                            <h2 class="product-detail-title">
                                Copper metal
                            </h2>
                            <h3 class="product-detail-subtitle">
                                Cu
                            </h3>
                            <p class="product-detail-description">
                                We produce high-purity copper cathodes through advanced recovery and refining
                                processes, ensuring consistent quality and reliability. Our copper cathodes are
                                manufactured to meet industry standards and are suitable for a wide range of industrial
                                applications including electrical manufacturing, metal processing, and alloy production. By
                                efficiently recovering copper from process streams and secondary materials, we not only
                                deliver a valuable metal product but also support sustainable manufacturing through responsible
                                resource utilization.
                            </p>

                            <div class="product-feature-layout">
                                <div class="product-features">
                                    <h4 class="product-section-heading">
                                        Key Features
                                    </h4>
                                    <ul class="product-feature-list">
                                        <li>
                                            <i class="fa-regular fa-circle-check"></i>
                                            High purity with excellent solubility
                                        </li>
                                        <li>
                                            <i class="fa-regular fa-circle-check"></i>
                                            Free flowing crystals with consistent quality
                                        </li>
                                        <li>
                                            <i class="fa-regular fa-circle-check"></i>
                                            Suitable for industrial applications
                                        </li>
                                        <li>
                                            <i class="fa-regular fa-circle-check"></i>
                                            Manufactured under strict quality standards
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-feature-image-wrap">
                                    <img
                                        src="/Images/copper.png"
                                        alt="Zinc Sulphate"
                                        class="product-feature-image"
                                    >
                                    <img
                                        src="/Images/copper_sheets.png"
                                        alt="Zinc Sulphate"
                                        class="product-feature-image"
                                    >
                                </div>
                            </div>

                            <div class="product-specifications">
                                <h4 class="product-section-heading">
                                    Specifications
                                </h4>
                                <div class="product-spec-grid">
                                    <div class="product-spec-column">
                                        <div class="product-spec-row">
                                            <span>Purity (as Zn)</span>
                                            <strong>Min. 21%</strong>
                                        </div>
                                        <div class="product-spec-row">
                                            <span>Zinc (Zn)</span>
                                            <strong>Min. 21%</strong>
                                        </div>
                                        <div class="product-spec-row">
                                            <span>Sulphate (SO₄)</span>
                                            <strong>Min. 61%</strong>
                                        </div>
                                        <div class="product-spec-row">
                                            <span>Iron (Fe)</span>
                                            <strong>Max. 0.005%</strong>
                                        </div>
                                    </div>
                                    <div class="product-spec-column">
                                        <div class="product-spec-row">
                                            <span>Lead (Pb)</span>
                                            <strong>Max. 0.001%</strong>
                                        </div>
                                        <div class="product-spec-row">
                                            <span>Arsenic (As)</span>
                                            <strong>Max. 0.0005%</strong>
                                        </div>
                                        <div class="product-spec-row">
                                            <span>Insoluble Matter</span>
                                            <strong>Max. 0.05%</strong>
                                        </div>
                                        <div class="product-spec-row">
                                            <span>Appearance</span>
                                            <strong>White Crystalline</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="product-applications">
                                <h4 class="product-section-heading">
                                    Applications
                                </h4>
                                <div class="product-application-grid">
                                    <div class="product-app-item">
                                        <i class="fa-solid fa-seedling"></i>
                                        <div>
                                            <h5>
                                                Agriculture
                                            </h5>
                                            <p>
                                                Micronutrient fertilizer
                                            </p>
                                        </div>
                                    </div>
                                    <div class="product-app-item">
                                        <i class="fa-solid fa-cow"></i>
                                        <div>
                                            <h5>
                                                Animal Feed
                                            </h5>
                                            <p>
                                                Nutritional supplement
                                            </p>
                                        </div>
                                    </div>
                                    <div class="product-app-item">
                                        <i class="fa-solid fa-droplet"></i>
                                        <div>
                                            <h5>
                                                Water Treatment
                                            </h5>
                                            <p>
                                                Precipitant and coagulant
                                            </p>
                                        </div>
                                    </div>
                                    <div class="product-app-item">
                                        <i class="fa-solid fa-flask"></i>
                                        <div>
                                            <h5>
                                                Industrial Use
                                            </h5>
                                            <p>
                                                Dyeing, leather and more
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="product-bottom-box">
                                <div class="product-packaging">
                                    <i class="fa-solid fa-box"></i>
                                    <div>
                                        <h5>
                                            Packaging
                                        </h5>
                                        <p>
                                            25 Kg / 50 Kg Bags
                                            <br>
                                            Bulk Packaging Available
                                        </p>
                                    </div>
                                </div>
                                <button
                                    class="product-quote-btn"
                                    onclick="requestQuote()">
                                    Request a Quote
                                    <i class="fa-solid fa-arrow-right"></i>
                                </button>
                            </div>
                    </div>

                </div>

            </div>
        </section>
        
    </main>
    
    <?= view('footer') ?>
</body>
</html>