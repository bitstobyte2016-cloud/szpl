<?php
$current_url = uri_string();
?>

<!-- header -->
<header>
    
    <!-- top header bar -->
    <div class="top-bar">
        <div class="container">
            <div class="top-bar-content">
                <div class="top-bar-left">
                    <p>
                        <!-- TOP BAR LEFT ICON -->
                        <i class="fa-brands fa-envira"></i>
                        Sustainable Zinc Solutions for a Better Tomorrow.
                    </p>
                </div>
                <div class="top-bar-right">
                    <p>
                        ISO 9001:2015 Certified
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- main header -->

    <div class="main-header">
        <div class="container">
            <div class="header-container">
                <a href="/" class="header-logo">
                    <img
                        src="/Images/logo_t.png"
                        alt="Swastic Zinc Pvt. Ltd."
                    >
                </a>

                <nav class="main-nav" id="mainNav">
                    <ul>
                        <li>
                            <a href="/"
                               class="<?= uri_string() == '' ? 'active' : '' ?>">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="/about_us"
                               class="<?= uri_string() == 'about_us' ? 'active' : '' ?>">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="/products"
                               class="<?= uri_string() == 'products' ? 'active' : '' ?>">
                                Products
                            </a>
                        </li>
                        <li>
                            <a href="/sustainability"
                               class="<?= uri_string() == 'sustainability' ? 'active' : '' ?>">
                                Sustainability
                            </a>
                        </li>
                        
                        <!--
                        <li>
                            <a href="/careers"
                               class="<?= uri_string() == 'quality' ? 'active' : '' ?>">
                                Careers
                            </a>
                        </li>
                        
                        -->
                        <li>
                            <a href="/contact_us"
                               class="<?= uri_string() == 'contact_us' ? 'active' : '' ?>">
                                Contact Us
                            </a>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
