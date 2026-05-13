<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - SZPL</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/theme.css">
    <style>
        @media (max-width: 768px) {
            .about-hero-left h1 {
                font-size: 36px;
            }
        }
    </style>
</head>
<body>
    <?= view('header') ?>
    <main>
        <section class="about-hero">
            <div class="about-hero-container">
                <div class="about-hero-left">
                    <div class="subtitle-wrap">
                        <span class="subtitle">ABOUT US</span>
                        <div class="underline-orange"></div>
                    </div>
                    <h1>Built on Trust.<br>Committed to a<br><span style="color: var(--orange);">Sustainable Future.</span></h1>
                    <p>Swastic zinc is a pioneer in zinc sulphate manufacturing and metal recovery, commited to delivering high quality products while protecting our environment</p>
                </div>
                <div class="about-hero-right">
                    <div class="value-card">
                        <div class="value-item">
                            <div class="value-icon"><img src="/Images/ic_mission.png" alt="Mission"></div>
                            <div class="value-content">
                                <h3>Our Mission</h3>
                                <p>To deliver high-quality, sustainable zinc and metal recovery solutions with integrity and innovation.</p>
                            </div>
                        </div>
                        <hr class="value-divider">
                        <div class="value-item">
                            <div class="value-icon"><img src="/Images/ic_vision.png" alt="Vision"></div>
                            <div class="value-content">
                                <h3>Our Vision</h3>
                                <p>To be a global leader in metal recycling and value-added zinc products, driving a circular and sustainable future.</p>
                            </div>
                        </div>
                        <hr class="value-divider">
                        <div class="value-item">
                            <div class="value-icon"><img src="/Images/ic_values.png" alt="Values"></div>
                            <div class="value-content">
                                <h3>Our Values</h3>
                                <p>Integrity, quality, innovation, and responsibility guide everything we do.</p>
                            </div>
                        </div>
                        <hr class="value-divider">
                        <div class="value-item">
                            <div class="value-icon"><img src="/Images/ic_people.png" alt="People"></div>
                            <div class="value-content">
                                <h3>Our People</h3>
                                <p>Our skilled team and strong leadership are the pillars of our continued growth.</p>
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