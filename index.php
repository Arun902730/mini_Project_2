<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['usermail'])){
   header('location:login_form.php');
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Freak - No Pain No Gain</title>

    <!-- 
    - favicon
  -->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

    <!-- 
    - custom css link
  -->
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- 
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@600;700;800;900&family=Rubik:wght@400;500;800&display=swap" rel="stylesheet">

    <!-- 
    - preload images
  -->
    <link rel="preload" as="image" href="./assets/images/hero-banner.png">
    <link rel="preload" as="image" href="./assets/images/hero-circle-one.png">
    <link rel="preload" as="image" href="./assets/images/hero-circle-two.png">
    <link rel="preload" as="image" href="./assets/images/heart-rate.svg">
    <link rel="preload" as="image" href="./assets/images/calories.svg">

</head>

<body id="top">

    <!-- 
    - #HEADER
  -->

    <header class="header" data-header>
        <div class="container">

            <a href="#" class="logo">
                <ion-icon name="barbell-sharp" aria-hidden="true"></ion-icon>

                <span class="span">Fitness Freak</span>
            </a>

            <nav class="navbar" data-navbar>

                <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
          <ion-icon name="close-sharp" aria-hidden="true"></ion-icon>
        </button>

                <ul class="navbar-list">

                    <li>
                        <a href="#home" class="navbar-link active" data-nav-link>Home</a>
                    </li>

                    <li>
                        <a href="#about" class="navbar-link" data-nav-link>About Us</a>
                    </li>

                    <li>
                        <a href="#class" class="navbar-link" data-nav-link>Classes</a>
                    </li>

                    <li>
                        <a href="#blog" class="navbar-link" data-nav-link>Team</a>
                    </li>

                    <li>
                        <a href="#footer" class="navbar-link" data-nav-link>Contact Us</a>
                    </li>

                </ul>

            </nav>

            <a href="logout.php" class="btn btn-secondary"> LogOut</a>

            <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <span class="line"></span>
        <span class="line"></span>
        <span class="line"></span>
      </button>

        </div>
    </header>





    <main>
        <article>

            <!-- 
        - #HERO
      -->

            <section class="section hero bg-dark has-after has-bg-image" id="home" aria-label="hero" data-section style="background-image: url('./assets/images/hero-bg.png')">
                <div class="container">

                    <div class="hero-content">

                        <p class="hero-subtitle">
                            <strong class="strong">The Best</strong>Fitness Club
                        </p>

                        <h1 class="h1 hero-title">Work Hard To Get Better Life</h1>

                        <p class="section-text">
                            Fitness is not about being better than someone else. It's about being better than you used to be.
                        </p>

                        <a href="./getstarted.html" class="btn btn-primary">Get Started</a>

                    </div>

                    <div class="hero-banner">

                        <img src="./assets/images/hero-banner.png" width="660" height="753" alt="hero banner" class="w-100">

                        <img src="./assets/images/hero-circle-one.png" width="666" height="666" aria-hidden="true" alt="" class="circle circle-1">
                        <img src="./assets/images/hero-circle-two.png" width="666" height="666" aria-hidden="true" alt="" class="circle circle-2">

                        <img src="./assets/images/heart-rate.svg" width="255" height="270" alt="heart rate" class="abs-img abs-img-1">
                        <img src="./assets/images/calories.svg" width="348" height="224" alt="calories" class="abs-img abs-img-2">

                    </div>

                </div>
            </section>





            <!-- 
        - #ABOUT
      -->

            <section class="section about" id="about" aria-label="about">
                <div class="container">

                    <div class="about-banner has-after">
                        <img src="./assets/images/about-banner.png" width="660" height="648" loading="lazy" alt="about banner" class="w-100">

                        <img src="./assets/images/about-circle-one.png" width="660" height="534" loading="lazy" aria-hidden="true" alt="" class="circle circle-1">
                        <img src="./assets/images/about-circle-two.png" width="660" height="534" loading="lazy" aria-hidden="true" alt="" class="circle circle-2">

                        <img src="./assets/images/fitness.png" width="650" height="154" loading="lazy" alt="fitness" class="abs-img w-100">
                    </div>

                    <div class="about-content">

                        <p class="section-subtitle">About Us</p>

                        <h2 class="h2 section-title">Welcome To Our Fitness Freak</h2>

                        <p class="section-text">
                            Welcome to our fitness website, where we believe that a healthy body and mind are essential to living a fulfilling life. Our goal is to provide you with the knowledge, resources, and inspiration you need to achieve your fitness goals and make positive
                            changes to your lifestyle. Whether you're a fitness enthusiast or just starting out on your fitness journey, we are here to support you every step of the way. From workout tips and nutrition advice to motivational stories and
                            expert insights, we have everything you need to live your healthiest life. So, take a look around, explore our content, and let's get started on your journey to a healthier you!
                        </p>

                        <p class="section-text">
                            Integer placerat vitae metus posuere tincidunt. Nullam suscipit ante ac aliquet viverra vestibulum ante ipsum primis.
                        </p>

                        <!-- <div class="wrapper">

                            <div class="about-coach">

                                <figure class="coach-avatar">
                                    <img src="./assets/images/about-coach.jpg" width="65" height="65" loading="lazy" alt="Trainer">
                                </figure>

                                <div>
                                    <h3 class="h3 coach-name">Denis Robinson</h3>

                                    <p class="coach-title">Our Coach</p>
                                </div>

                            </div>

                            <a href="#" class="btn btn-primary">Explore More</a>

                        </div> -->

                    </div>

                </div>
            </section>





            <!-- 
        - #VIDEO
      -->

            <section class="section video" aria-label="video">
                <div class="container">

                    <div class="video-card has-before has-bg-image" style="background-image: url('./assets/images/video-banner.jpg')">

                        <h2 class="h2 card-title">Explore Fitness Freak</h2>

                        <button class="play-btn" aria-label="play video">
              <ion-icon name="play-sharp" aria-hidden="true"></ion-icon>
            </button>

                        <a href="#" class="btn-link has-before">Watch More</a>

                    </div>

                </div>
            </section>





            <!-- 
        - #CLASS
      -->

            <section class="section class bg-dark has-bg-image" id="class" aria-label="class" style="background-image: url('./assets/images/classes-bg.png')">
                <div class="container">

                    <p class="section-subtitle">Our Classes</p>

                    <h2 class="h2 section-title text-center">Fitness Classes For Every Goal</h2>

                    <ul class="class-list has-scrollbar">

                        <li class="scrollbar-item">
                            <div class="class-card">

                                <figure class="card-banner img-holder" style="--width: 416; --height: 240;">
                                    <img src="./assets/images/class-1.jpg" width="416" height="240" loading="lazy" alt="Weight Lifting" class="img-cover">
                                </figure>

                                <div class="card-content">

                                    <div class="title-wrapper">
                                        <img src="./assets/images/class-icon-1.png" width="52" height="52" aria-hidden="true" alt="" class="title-icon">

                                        <h3 class="h3">
                                            <a href="#" class="card-title">Weight Lifting</a>
                                        </h3>
                                    </div>

                                    <p class="card-text">
                                        weight lifting in which athletes compete in lifting a barbell loaded with weight plates from the ground to overhead, with the aim of successfully lifting the heaviest weights.
                                    </p>

                                    <div class="card-progress">

                                        <div class="progress-wrapper">
                                            <p class="progress-label">Class Full</p>

                                            <span class="progress-value">85%</span>
                                        </div>

                                        <div class="progress-bg">
                                            <div class="progress-bar" style="width: 85%"></div>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </li>

                        <li class="scrollbar-item">
                            <div class="class-card">

                                <figure class="card-banner img-holder" style="--width: 416; --height: 240;">
                                    <img src="./assets/images/class-2.jpg" width="416" height="240" loading="lazy" alt="Cardio & Strenght" class="img-cover">
                                </figure>

                                <div class="card-content">

                                    <div class="title-wrapper">
                                        <img src="./assets/images/class-icon-2.png" width="52" height="52" aria-hidden="true" alt="" class="title-icon">

                                        <h3 class="h3">
                                            <a href="#" class="card-title">Cardio & Strenght</a>
                                        </h3>
                                    </div>

                                    <p class="card-text">
                                        cardio exercise works to improve cardiovascular adaptations that increase oxygen consumption
                                    </p>

                                    <div class="card-progress">

                                        <div class="progress-wrapper">
                                            <p class="progress-label">Class Full</p>

                                            <span class="progress-value">70%</span>
                                        </div>

                                        <div class="progress-bg">
                                            <div class="progress-bar" style="width: 70%"></div>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </li>

                        <li class="scrollbar-item">
                            <div class="class-card">

                                <figure class="card-banner img-holder" style="--width: 416; --height: 240;">
                                    <img src="./assets/images/class-3.jpg" width="416" height="240" loading="lazy" alt="Power Yoga" class="img-cover">
                                </figure>

                                <div class="card-content">

                                    <div class="title-wrapper">
                                        <img src="./assets/images/class-icon-3.png" width="52" height="52" aria-hidden="true" alt="" class="title-icon">

                                        <h3 class="h3">
                                            <a href="#" class="card-title">Power of Yoga</a>
                                        </h3>
                                    </div>

                                    <p class="card-text">
                                        power yoga has the ability to decrease levels of cortisol, the stress hormone, in your body.
                                    </p>

                                    <div class="card-progress">

                                        <div class="progress-wrapper">
                                            <p class="progress-label">Class Full</p>

                                            <span class="progress-value">90%</span>
                                        </div>

                                        <div class="progress-bg">
                                            <div class="progress-bar" style="width: 90%"></div>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </li>

                        <li class="scrollbar-item">
                            <div class="class-card">

                                <figure class="card-banner img-holder" style="--width: 416; --height: 240;">
                                    <img src="./assets/images/class-4.jpg" width="416" height="240" loading="lazy" alt="The Fitness Pack" class="img-cover">
                                </figure>

                                <div class="card-content">

                                    <div class="title-wrapper">
                                        <img src="./assets/images/class-icon-4.png" width="52" height="52" aria-hidden="true" alt="" class="title-icon">

                                        <h3 class="h3">
                                            <a href="#" class="card-title">The Fitness Pack</a>
                                        </h3>
                                    </div>

                                    <p class="card-text">
                                        In training, you listen to your body. In competition, you tell your body to shut up.
                                    </p>

                                    <div class="card-progress">

                                        <div class="progress-wrapper">
                                            <p class="progress-label">Class Full</p>

                                            <span class="progress-value">60%</span>
                                        </div>

                                        <div class="progress-bg">
                                            <div class="progress-bar" style="width: 60%"></div>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </li>

                    </ul>

                </div>
            </section>





            <!-- 
        - #BLOG
      -->

            <section class="section blog" id="blog" aria-label="blog">
                <div class="container">

                    <p class="section-subtitle">Our Team</p>
                    <br>
                    <br><br>

                    <ul class="blog-list has-scrollbar">

                        <li class="scrollbar-item">
                            <div class="blog-card">

                                <div class="card-banner img-holder" style="width: 440; height: 270;">
                                    <img src="./WhatsApp Image 2023-04-26 at 9.39.27 AM.jpeg" width="440" height="270" loading="lazy" alt="Going to the gym for the first time" class="img-cover">

                                    <time class="card-meta" datetime="2022-07-07"> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; Arun Kumar (201500142) &nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; </time>
                                </div>


                            </div>
                        </li>

                        <li class="scrollbar-item">
                            <div class="blog-card">

                                <div class="card-banner img-holder" style="width: 440; height: 270;">
                                    <img src="./WhatsApp Image 2023-04-26 at 9.39.27 AM.jpeg" width="440" height="270" loading="lazy" alt="Going to the gym for the first time" class="img-cover">

                                    <time class="card-meta" datetime="2022-07-07"> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; Yash Gangwar (201500812)  &nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; </time>
                                </div>


                            </div>
                        </li>

                        <li class="scrollbar-item">
                            <div class="blog-card">

                                <div class="card-banner img-holder" style="width: 440; height: 270;">
                                    <img src="./WhatsApp Image 2023-04-27 at 10.57.18 AM.jpeg" width="440" height="270" loading="lazy" alt="Going to the gym for the first time" class="img-cover">

                                    <time class="card-meta" datetime="2022-07-07">Sushobhit Gautam 201500729  </time>
                                </div>


                            </div>
                        </li>

                       

                    </ul>

                </div>
            </section>

        </article>
    </main>





    <!-- 
    - #FOOTER
  -->

    <footer class="footer" id="footer">

        <div class="section footer-top bg-dark has-bg-image" style="background-image: url('./assets/images/footer-bg.png')">
            <div class="container">

                <div class="footer-brand">

                    <a href="#" class="logo">
                        <ion-icon name="barbell-sharp" aria-hidden="true"></ion-icon>

                        <span class="span">Fitlife</span>
                    </a>

                    <p class="footer-brand-text">
                        The only bad workout is the one that didn't happen.
                    </p>

                    <div class="wrapper">

                        <img src="./assets/images/footer-clock.png" width="34" height="34" loading="lazy" alt="Clock">

                        <ul class="footer-brand-list">

                            <li>
                                <p class="footer-brand-title">Monday - Friday</p>

                                <p>7:00Am - 10:00Pm</p>
                            </li>

                            <li>
                                <p class="footer-brand-title">Saturday - Sunday</p>

                                <p>7:00Am - 2:00Pm</p>
                            </li>

                        </ul>

                    </div>

                </div>

                <ul class="footer-list">

                    <li>
                        <p class="footer-list-title has-before">Our Links</p>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Home</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">About Us</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Classes</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Blog</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Contact Us</a>
                    </li>

                </ul>

                <ul class="footer-list">

                    <li>
                        <p class="footer-list-title has-before">Contact Us</p>
                    </li>

                    <li class="footer-list-item">
                        <div class="icon">
                            <ion-icon name="location" aria-hidden="true"></ion-icon>
                        </div>

                        <address class="address footer-link">
              GLA University, Mathura 281406 NH-19 Uttar Prade
            </address>
                    </li>

                    <li class="footer-list-item">
                        <div class="icon">
                            <ion-icon name="call" aria-hidden="true"></ion-icon>
                        </div>

                        <div>
                            <a href="tel:18001213637" class="footer-link">1800-121-3637</a>

                            <a href="tel:+915552348765" class="footer-link">+91 9991169584</a>
                        </div>
                    </li>

                    <li class="footer-list-item">
                        <div class="icon">
                            <ion-icon name="mail" aria-hidden="true"></ion-icon>
                        </div>

                        <div>
                            <a href="mailto:info@fitlife.com" class="footer-link">fitness@freak.com</a>

                            <a href="mailto:services@fitlife.com" class="footer-link">services@fitfreak.com</a>
                        </div>
                    </li>

                </ul>

                <ul class="footer-list">

                    <li>
                        <p class="footer-list-title has-before">Our Newsletter</p>
                    </li>

                    <li>
                        <form action="" class="footer-form">
                            <input type="email" name="email_address" aria-label="email" placeholder="Email Address" required class="input-field">

                            <button type="submit" class="btn btn-primary" aria-label="Submit">
                <ion-icon name="chevron-forward-sharp" aria-hidden="true"></ion-icon>
              </button>
                        </form>
                    </li>

                    <li>
                        <ul class="social-list">

                            <li>
                                <a href="#" class="social-link">
                                    <ion-icon name="logo-facebook"></ion-icon>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="social-link">
                                    <ion-icon name="logo-instagram"></ion-icon>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="social-link">
                                    <ion-icon name="logo-twitter"></ion-icon>
                                </a>
                            </li>

                        </ul>
                    </li>

                </ul>

            </div>
        </div>

        <div class="footer-bottom" >
            <div class="container">

                <p class="copyright">
                    &copy; 2022 Fitness Freak. All Rights Reserved By <a href="#" class="copyright-link">codewithsadee.</a>
                </p>

                <ul class="footer-bottom-list">

                    <li>
                        <a href="#" class="footer-bottom-link has-before">Privacy Policy</a>
                    </li>

                    <li>
                        <a href="#" class="footer-bottom-link has-before">Terms & Condition</a>
                    </li>

                </ul>

            </div>
        </div>

    </footer>





    <!-- 
    - #BACK TO TOP
  -->

    <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
        <ion-icon name="caret-up-sharp" aria-hidden="true"></ion-icon>
    </a>





    <!-- 
    - custom js link
  -->
    <script src="./assets/js/script.js" defer></script>

    <!-- 
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>