<style>
    .site-footer {
        background-color: #000;
        color: #fff;
        font-family: sans-serif;
        padding: 40px 20px 20px 20px;
    }
    .footer-container {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
        max-width: 1200px;
        margin: 0 auto;
        gap: 20px;
    }
    .footer-col {
        flex: 1;
        min-width: 250px;
    }
    .footer-col-1 {
        display: flex;
        align-items: flex-start;
        gap: 15px;
    }
    .footer-col-1 img {
        height: 80px;
    }
    .footer-brand h1 {
        font-size: 20px;
        margin: 0 0 10px 0;
        font-weight: 500;
    }
    .footer-brand p {
        font-size: 14px;
        color: #ccc;
        margin: 0 0 15px 0;
    }
    .social-icons {
        display: flex;
        gap: 10px;
    }
    .social-icons span {
        display: inline-block;
        width: 24px;
        height: 24px;
        background-color: #333;
        border-radius: 50%;
        text-align: center;
        line-height: 24px;
        font-size: 12px;
        color: #fff;
        cursor: pointer;
    }
    .footer-col h2 {
        font-size: 16px;
        margin: 0 0 20px 0;
        font-weight: 500;
    }
    .footer-links {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .footer-links li {
        margin-bottom: 10px;
    }
    .footer-links a {
        color: #ccc;
        text-decoration: none;
        font-size: 14px;
    }
    .footer-links a:hover {
        color: #fff;
    }
    .contact-item {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 15px;
        font-size: 14px;
        color: #ccc;
    }
    .contact-icon {
        width: 20px;
        height: 20px;
        background-color: #333;
        border-radius: 50%;
        display: inline-block;
        text-align: center;
        line-height: 20px;
        font-size: 10px;
    }
    .contact-item a {
        color: #ccc;
        text-decoration: none;
    }
    .contact-item a:hover {
        color: #fff;
    }
    .footer-bottom {
        border-top: 1px solid #333;
        margin-top: 40px;
        padding-top: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        max-width: 1200px;
        margin-left: auto;
        margin-right: auto;
        font-size: 12px;
        color: #999;
    }
    .footer-bottom-links a {
        color: #999;
        text-decoration: none;
        margin-left: 15px;
    }
    .footer-bottom-links a:hover {
        color: #fff;
    }
</style>

<footer class="site-footer">
    <div class="footer-container">
        
        <div class="footer-col footer-col-1">
            <img src="/Images/logo_t.png" alt="Logo">
            <div class="footer-brand">
                <h1>Swastic Zinc Pvt. Ltd.</h1>
                <p>Manufacturer | Recycler</p>
                <div class="social-icons">
                    <span>in</span>
                </div>
            </div>
        </div>

        <div class="footer-col">
            <h2>Quick Links</h2>
            <ul class="footer-links">
                <li><a href="/about_us">About Us</a></li>
                <li><a href="/products">Products</a></li>
                <li><a href="/sustainability">Sustainability</a></li>
                <li><a href="/career">Careers</a></li>
                <li><a href="/contact_us">Contact Us</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h2>Contact Us</h2>
            <div class="contact-item">
                <span class="contact-icon">📞</span>
                <span>+91-9828841623</span>
            </div>
            <div class="contact-item">
                <span class="contact-icon">✉️</span>
                <span>info@swasticzinc.com</span>
            </div>
            <div class="contact-item">
                <span class="contact-icon">✉️</span>
                <span>swasticzinc@gmail.com</span>
            </div>
            <div class="contact-item">
                <span class="contact-icon">📍</span>
                <a href="#">Udaipur, Raj.</a>
            </div>
        </div>

    </div>

    <div class="footer-bottom">
        <div>Swastic Zinc Pvt. Ltd. | All rights reserved</div>
        <div class="footer-bottom-links">
            <a href="#">Privacy policy</a> | 
            <a href="#">Terms & Conditions</a>
        </div>
    </div>
</footer>
