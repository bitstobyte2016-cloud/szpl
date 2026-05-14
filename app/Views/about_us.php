<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - SZPL</title>
    <link rel="stylesheet" href="/css/theme.css">
    
</head>
<body>
    <?= view('header') ?>
    <main>
        <!-- about section -->
        <section class="about-intro-section">
            <div class="container">
                <div class="about-intro-layout">
                    <!-- left side= -->
                    <div class="about-intro-content">
                        <p class="about-intro-subtitle">ABOUT US</p>
                        <h1 class="about-intro-title">
                            Built on Trust.
                            <br>
                            Committed to a
                            <br>
                            <span>Sustainable Future.</span>
                        </h1>
                        <p class="about-intro-description">
                            Swastic Zinc Pvt. Ltd. is a pioneer in zinc manufacturing
                            and metal recovery, committed to delivering high-quality
                            products while protecting our environment.
                        </p>
                    </div>

                    <!-- right side -->
                    <div class="about-intro-cards">
                        <div class="about-info-card">
                            <div class="about-info-icon">
                                <img
                                    src="/Images/ic_mission.png"
                                    alt="Mission" >
                            </div>
                            <div class="about-info-content">
                                <h3>
                                    Our Mission
                                </h3>
                                <p>
                                    To deliver high-quality, sustainable zinc and
                                    metal recovery solutions with integrity
                                    and innovation.
                                </p>
                            </div>
                        </div>
                        <div class="about-info-card">
                            <div class="about-info-icon">
                                <img
                                    src="/Images/ic_vision.png"
                                    alt="Vision" >
                            </div>
                            <div class="about-info-content">
                                <h3>
                                    Our Vision
                                </h3>
                                <p>
                                    To be a global leader in metal recycling and
                                    value-added zinc products, driving a circular
                                    and sustainable future.
                                </p>
                            </div>
                        </div>
                        <div class="about-info-card">
                            <div class="about-info-icon">
                                <img
                                    src="/Images/ic_values.png"
                                    alt="Values">
                            </div>
                            <div class="about-info-content">
                                <h3>
                                    Our Values
                                </h3>
                                <p>
                                    Integrity, quality, innovation, and responsibility
                                    guide everything we do.
                                </p>
                            </div>
                        </div>
                        <div class="about-info-card">
                            <div class="about-info-icon">
                                <img
                                    src="/Images/ic_people.png"
                                    alt="People">
                            </div>
                            <div class="about-info-content">
                                <h3>
                                    Our People
                                </h3>
                                <p>
                                    Our skilled team and strong leadership are
                                    the pillars of our continued growth.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        
    </main>
    <?= view('footer') ?>
</body>
</html>