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

            <!-- WAVY TOP -->
            <div class="about-story-wave">
                <svg viewBox="0 0 1440 140" preserveAspectRatio="none">
                    <path
                        d="M0,64L80,80C160,96,320,128,480,122.7C640,117,800,75,960,64C1120,53,1280,75,1360,85.3L1440,96L1440,0L0,0Z">
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

                <!-- layout -->

                <div class="about-story-layout">
                    <!-- CENTER ROAD -->
                    <div class="about-road-wrapper">
                        <div class="about-road">
                            <div class="road-line"></div>
                            <!-- MOVING TANKER -->
                            <div class="about-tanker" id="aboutTanker">
                                <img
                                    src="/Images/ic_tanker.png"
                                    alt="Tanker"
                                >
                            </div>
                        </div>
                    </div>
                    
                    <!-- STORY BLOCKS -->
                    <div class="about-story-grid">
                        <div class="about-story-card story-orange">
                            <div class="about-story-number">
                                01
                            </div>
                            <div class="about-story-content">
                                <img
                                    src="/Images/story1.png"
                                    alt="Established Legacy"
                                    class="about-story-icon"
                                >
                                <h3>
                                    Established Legacy
                                </h3>
                                <p>
                                    Swastic Zinc Pvt. Ltd. is an established
                                    manufacturing company headquartered in
                                    Udaipur, Rajasthan, with decades of
                                    industrial experience.
                                </p>
                            </div>
                        </div>
                        <div class="about-story-card story-green">
                            <div class="about-story-number">
                                02
                            </div>
                            <div class="about-story-content">
                                <img
                                    src="/Images/story2.png"
                                    alt="Technical Expertise"
                                    class="about-story-icon"
                                >
                                <h3>
                                    Technical Expertise
                                </h3>
                                <p>
                                    We have developed strong technical
                                    capabilities in hydrometallurgical
                                    processing and copper chemistry.
                                </p>
                            </div>
                        </div>
                        <div class="about-story-card story-blue">
                            <div class="about-story-number">
                                03
                            </div>
                            <div class="about-story-content">
                                <img
                                    src="/Images/story3.png"
                                    alt="Responsible Operations"
                                    class="about-story-icon"
                                >
                                <h3>
                                    Responsible Operations
                                </h3>
                                <p>
                                    Our facilities and operating practices
                                    align with environmental responsibility,
                                    safety and compliance.
                                </p>
                            </div>
                        </div>
                        <div class="about-story-card story-orange">
                            <div class="about-story-number">
                                04
                            </div>
                            <div class="about-story-content">
                                <img
                                    src="/Images/story4.png"
                                    alt="Built on Relationships"
                                    class="about-story-icon"
                                >
                                <h3>
                                    Built on Relationships
                                </h3>
                                <p>
                                    We believe long-term success is built
                                    on technical understanding and strong
                                    industrial relationships.
                               </p>
                            </div>
                        </div>
                        <div class="about-story-card story-green">
                            <div class="about-story-number">
                                05
                            </div>
                            <div class="about-story-content">
                                <img
                                    src="/Images/story5.png"
                                    alt="Looking Ahead"
                                    class="about-story-icon"
                                >
                                <h3>
                                    Looking Ahead
                                </h3>
                                <p>
                                    With continuous improvement and strong
                                    manufacturing foundations, we remain
                                    focused on future growth.
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


 <!-- scroll animation -->
 <script>

    const tanker = document.getElementById('aboutTanker');
    const storySection = document.querySelector('.about-story-section');

    function animateTanker() {

        const rect = storySection.getBoundingClientRect();

        const scrollable =
            storySection.offsetHeight -
            window.innerHeight;

        const progress =
            Math.min(
                Math.max(
                    (-rect.top) / scrollable,
                    0
                ),
                1
            );

        const moveDistance =
            storySection.offsetHeight - 260;

        tanker.style.transform =
            `translateX(-50%) translateY(${progress * moveDistance}px)`;

        requestAnimationFrame(animateTanker);

    }

    animateTanker();

</script>

</html>
