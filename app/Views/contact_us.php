<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Kpopmerch.in</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/theme.css">
    
    
    <link
    rel="icon"
    type="image/png"
    href="/Images/logo_trans1.png" >
    
</head>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>

    function sendEmail(){
        
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var phno = document.getElementById("phno").value;
        var comp = document.getElementById("company").value;
        var msg = document.getElementById("msg").value;
        
        
	$.post("<?php echo base_url('send-query'); ?>",{name:name,email:email,comp:comp,phno:phno,msg:msg},function(result){
            alert(result);
            document.getElementById("name").value = "";
            document.getElementById("email").value = "";
            document.getElementById("phno").value = "";
            document.getElementById("company").value = "";
            document.getElementById("msg").value = "";
        
	}); 
    };
        

</script>



<body>
    <?= view('header') ?>
    <main class="page-content">
        <section class="contact-banner-section">

            <div class="contact-banner-image">
                <img
                    src="/Images/contact.png"
                    alt="Contact Us">
                <div class="contact-banner-overlay"></div>
            </div>

            <div class="contact-banner-content">
                <p class="contact-banner-subtitle">
                    CONTACT US
                </p>
                <h1 class="contact-banner-title">
                    We’re Here to
                    <br>
                    <span>Help You.</span>
                </h1>
                <div class="contact-banner-line"></div>
                <p class="contact-banner-text">
                    Have a question, need more information,
                    or looking for the right solution?
                    Get in touch with our team.
                </p>
            </div>
        </section>

            <!-- contact form -->
            <section class="contact-form-section">
                <div class="contact-form-wrapper">
                    <div class="contact-form-header">
                        <div class="contact-form-icon">
                            <i class="fa-regular fa-envelope"></i>
                        </div>
                        <div>
                            <h2>
                                Send Us a Message
                            </h2>
                            <p>
                                Fill in the details below and our team
                                will get back to you shortly.
                            </p>
                        </div>
                    </div>

                    <form id="contactForm" class="contact-form">
                        <div class="contact-form-grid">
                            <div class="contact-field">
                                <label>
                                    Full Name <span>*</span>
                                </label>
                                <input
                                    type="text"
                                    name="full_name"
                                    id ="name"
                                    placeholder="Enter your full name"
                                    required
                                >
                            </div>
                            <div class="contact-field">
                                <label>
                                    Phone Number <span>*</span>
                                </label>
                                <input
                                    type="tel"
                                    name="phone"
                                    id="phno"
                                    placeholder="Enter your phone number"
                                    required
                                >
                            </div>
                            <div class="contact-field">
                                <label>
                                    Email Address <span>*</span>
                                </label>
                                <input
                                    type="email"
                                    name="email"
                                    id="email"
                                    placeholder="Enter your email address"
                                    required
                                >
                            </div>
                            <div class="contact-field">
                                <label>
                                    Organization / Company <span>*</span>
                                </label>
                                <input
                                    type="text"
                                    name="company"
                                    id="company"
                                    placeholder="Enter your organization name"
                                    required
                                >
                            </div>
                        </div>
                        <div class="contact-field full-width">
                            <label>
                                Your Message <span>*</span>
                            </label>
                            <textarea
                                name="message"
                                rows="6"
                                id="msg"
                                placeholder="Type your message here..."
                                required
                            ></textarea>
                        </div>
                        <button
                            type="button"
                            class="contact-submit-btn" onclick="sendEmail()">
                            <i class="fa-regular fa-paper-plane"></i>
                            Submit Message
                        </button>
                        <p class="contact-required-note">
                            * All fields are required
                        </p>
                    </form>
                </div>
            </section>
        
    </main>
    
    <?= view('footer') ?>
</body>
</html>