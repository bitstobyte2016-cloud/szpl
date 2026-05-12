<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Swastic Zinc Pvt. Ltd.</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/theme.css">
    <style>
        .about-hero {
            padding: 80px 20px;
            background-color: var(--bg-main);
            font-family: sans-serif;
        }
        .about-hero-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            align-items: center;
        }
        .about-hero-left {
            flex: 1;
            min-width: 300px;
        }
        .about-hero-right {
            flex: 1;
            min-width: 300px;
        }

        .subtitle-wrap {
            margin-bottom: 20px;
        }
        .subtitle {
            color: var(--orange);
            font-weight: 600;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 1px;
            display: block;
        }
        .underline-orange {
            width: 30px;
            height: 2px;
            background-color: var(--orange);
            margin-top: 5px;
        }

        .about-hero-left h1 {
            font-size: 48px;
            line-height: 1.2;
            margin: 0 0 20px 0;
            color: var(--text-heading);
            font-weight: 700;
        }
        .about-hero-left p {
            font-size: 16px;
            line-height: 1.6;
            color: var(--text-body);
            max-width: 90%;
        }

        .value-card {
            background-color: #fff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }
        .value-item {
            display: flex;
            gap: 20px;
            align-items: flex-start;
        }
        .value-icon img {
            width: 40px;
            height: 40px;
            object-fit: contain;
        }
        .value-content h3 {
            margin: 0 0 10px 0;
            font-size: 18px;
            font-weight: 600;
            color: var(--text-heading);
        }
        .value-content p {
            margin: 0;
            font-size: 14px;
            line-height: 1.5;
            color: var(--text-body);
        }
        .value-divider {
            border: 0;
            border-top: 1px solid var(--border-light);
            margin: 20px 0;
        }

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