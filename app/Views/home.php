<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Kpopmerch.in</title>

    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="/css/theme.css">
</head>
<body>
    <?= view('header') ?>

    <main style="font-family: sans-serif;">
        <section class="home-banner">
            <div class="home-banner-content">
                <div class="home-banner-subtitle">SWASTIC ZINC PVT. LTD.</div>
                <h1 class="home-banner-title">RECYCLING TODAY<br>FOR A BETTER<br><span class="text-orange">TOMORROW</span></h1>
                <p class="home-banner-text">Leading manufacturer of zinc sulphate since 1995.</p>
            </div>
        </section>
    </main>

    <section class="about-section" id="about">
  <div class="about-inner">
    <div class="about-content">
      <h2 class="about-heading">ABOUT SZPL</h2>
      <p class="about-subheading">Committed to Quality. Driven by Sustainability.</p>
      <p class="about-text">
        Swastic Zinc Pvt. Ltd. is a pioneer in zinc manufacturing and metal recovery with a focus on environmental responsibility, innovation and customer satisfaction.
      </p>
      <a class="btn btn-primary about-cta" href="/about-us" aria-label="Know more about Swastic Zinc Pvt. Ltd.">Know More About Us &rarr;</a>
    </div>

    <figure class="about-media" aria-hidden="false">
      <img src="/Images/home_about.png" alt="Industrial facility with zinc processing equipment and safety railings" />
    </figure>
  </div>
</section>


    <?= view('footer') ?>
</body>
</html>