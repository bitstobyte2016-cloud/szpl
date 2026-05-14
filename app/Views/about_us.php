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
                                    zinc products, driving a circular
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
        
        
        <!-- our story -->
        <section class="about-story-section">
            <div class="about-story-wave">
                <svg
                    viewBox="0 0 1440 180"
                    preserveAspectRatio="none"
                >
                    <path
                        d="M0,96L80,106.7C160,117,320,139,480,133.3C640,128,800,96,960,85.3C1120,75,1280,85,1360,90.7L1440,96L1440,0L0,0Z">
                    </path>
                </svg>
            </div>
            <div class="container">
                <div class="about-story-heading">
                    <p class="about-story-subtitle">
                        OUR STORY
                    </p>
                    <h2 class="about-story-title">
                        A Legacy of
                        <br>
                        <span>Excellence.</span>
                    </h2>
                </div>
            </div>
            
            
            <div class="story-wave-row">
                <div class="story-wave-block story-wave-orange"></div>
            </div>
            
        </section>
        
    </main>
    <?= view('footer') ?>
</body>




</html>
