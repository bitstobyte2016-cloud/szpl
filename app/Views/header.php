<?php
$current_url = uri_string();
?>
<div class="top-bar">
    <div class="top-bar-content">
        <span class="tagline"><i class="fa-solid fa-leaf"></i> Sustainable Zinc Solutions for a Better Tomorrow.</span>
        <span class="certification">ISO 9001:2015 Certified</span>
    </div>
</div>
<header class="main-header">
    <div class="header-container">
        <div class="logo">
            <a href="/">
                <img src="/Images/logo_t.png" alt="SZPL Logo">
            </a>
        </div>
        <nav class="main-nav">
            <ul>
                <li><a href="/" class="<?= ($current_url == '' || $current_url == '/') ? 'active' : '' ?>">Home</a></li>
                <li><a href="/about-us" class="<?= ($current_url == 'about-us') ? 'active' : '' ?>">About Us</a></li>
                <li class="dropdown">
                    <a href="/products" class="<?= ($current_url == 'products') ? 'active' : '' ?>">Products</a>
                </li>
                <li><a href="/sustainability" class="<?= ($current_url == 'sustainability') ? 'active' : '' ?>">Sustainability</a></li>
                <li><a href="/career" class="<?= ($current_url == 'career') ? 'active' : '' ?>">Career</a></li>
                <li><a href="/contact-us" class="<?= ($current_url == 'contact-us') ? 'active' : '' ?>">Contact Us</a></li>
            </ul>
        </nav>
    </div>
</header>
