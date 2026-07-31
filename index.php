<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-SW4W868BCN"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-SW4W868BCN');
    </script>

    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-W73276NQ');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Meta Pixel Code -->
    <script>
        ! function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1097797528726098');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=1097797528726098&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="./favicon.ico" type="image/x-icon" sizes="76x76">
    <title>Rann of Kutch Festival | Majestic Escape</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts: Poppins, Outfit, Meddon -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Outfit:wght@400;500;600;700;800&family=Meddon&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./style.css?v=1.5">
</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W73276NQ" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Hidden SVG for gradient definitions -->
    <svg width="0" height="0" class="position-absolute" style="visibility: hidden;">
        <linearGradient id="purple-pink-gradient" x1="0%" y1="0%" x2="100%" y2="100%">
            <stop offset="0%" stop-color="#744FB9" />
            <stop offset="100%" stop-color="#FF4D8D" />
        </linearGradient>
        <linearGradient id="form-underline-gradient" x1="0%" y1="0%" x2="100%" y2="0%">
            <stop offset="0%" stop-color="#FF4D6A" />
            <stop offset="100%" stop-color="#1F58FF" />
        </linearGradient>
    </svg>

    <?php $eventDate = new DateTime('2025-10-23');
    $now = new DateTime();
    $fullMoonDates = [
        new DateTime('2025-11-06'),
        new DateTime('2025-12-05'),
        new DateTime('2026-01-04'),
        new DateTime('2026-01-31'),
        new DateTime('2026-02-02'),
        new DateTime('2026-03-04'),
        new DateTime('2026-08-03'),
        new DateTime('2026-09-01'),
    ];

    foreach ($fullMoonDates as $fullMoonDate) {
        $daysUntilNextFullMoon = $now->diff($fullMoonDate)->days;
        if ($now < $fullMoonDate && $daysUntilNextFullMoon >= 0) {
            $nextFullMoonDate = $fullMoonDate;
            break;
        } else {
            $nextFullMoonDate = new DateTime('2026-05-04');
        }
    }
    $bookingEndDate = $nextFullMoonDate;
    ?>
    <script>
        const serverBookingEndDate = "<?= $bookingEndDate->format('Y-m-d') ?>";
    </script>

    <div class="main">
        <!-- 1. Hero Banner Section -->
        <section id="banner" class="d-flex flex-column position-relative">
            <!-- Navbar Start -->
            <nav class="navbar navbar-sticky navbar-expand-lg navbar-dark py-4">
                <div class="container-fluid px-5">
                    <a class="navbar-brand fw-bold text-primary" href="#">
                        <img src="./assets/logo-white.svg" alt="Majestic Escape Logo" id="header-logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <div class="menu-icon">
                            <span>MENU</span>
                        </div>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto fs-5 align-items-center">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#activities">Experiences</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#tents-showcase">Accommodation</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#footer">Contact</a>
                            </li>
                            <li class="nav-item ms-lg-3 mt-3 mt-lg-0">
                                <a href="#booking" class="btn btn-primary rounded-pill px-4 py-2 fw-bold header-cta-btn">
                                    CRAFT MY ESCAPE!
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            <!-- Hero Date Board -->
            <div class="hero-date-board">
                <img src="./Date Board.png" alt="Rann Utsav Dates" class="img-fluid">
            </div>
        </section>

        <!-- 2. Countdown Section -->
        <section id="countdown-section" class="align-items-center">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-5 text-center text-lg-start mb-4 mb-lg-0">
                        <h2 class="fw-bold mb-3 cta-text text-white countdown-cta-heading">
                            Book before the <br class="d-none d-lg-block">
                            <span class="next-full-moon-highlight">next full moon</span> <br class="d-none d-lg-block">
                            to get the best deals with <br class="d-none d-lg-block">
                            Majestic Escape!
                        </h2>
                            <svg class="form-banner-underline" viewBox="0 0 120 10" preserveAspectRatio="none" style="width: 140px; height: 8px;">
                                <path d="M0,5 Q60,10 120,5" stroke="url(#form-underline-gradient)" stroke-width="3" stroke-linecap="round" fill="transparent"/>
                            </svg>
                    </div>
                    <div class="col-lg-7">
                        <div class="row g-3 justify-content-center" id="countdown-cards">
                            <div class="col-6 col-sm-3">
                                <div class="countdown-card text-center p-4">
                                    <div class="countdown-icon-wrapper mb-3 text-warning">
                                        <i class="bi bi-moon-stars fs-3"></i>
                                    </div>
                                    <div class="countdown-number" id="days">00</div>
                                    <div class="countdown-label">Days</div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-3">
                                <div class="countdown-card text-center p-4">
                                    <div class="countdown-icon-wrapper mb-3 text-danger">
                                        <i class="bi bi-clock fs-3"></i>
                                    </div>
                                    <div class="countdown-number" id="hours">00</div>
                                    <div class="countdown-label">Hours</div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-3">
                                <div class="countdown-card text-center p-4">
                                    <div class="countdown-icon-wrapper mb-3 text-info">
                                        <i class="bi bi-calendar4-event fs-3"></i>
                                    </div>
                                    <div class="countdown-number" id="minutes">00</div>
                                    <div class="countdown-label">Minutes</div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-3">
                                <div class="countdown-card text-center p-4">
                                    <div class="countdown-icon-wrapper mb-3 text-warning">
                                        <i class="bi bi-hourglass-split fs-3"></i>
                                    </div>
                                    <div class="countdown-number" id="seconds">00</div>
                                    <div class="countdown-label">Seconds</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3. About Rann Utsav Section -->
        <section id="about" class="section">
            <div class="container about-marg">
                <div class="row align-items-center justify-content-end">
                    <div class="col-lg-8 about-div ps-lg-5 text-black">
                        <div class="about-header-wrapper text-start mb-4">
                            <h2 class="about-main-title mb-2" id="about-title">
                                <span class="blue-purple-gradient-text">Rann Utsav</span>
                                <span class="about-title-year-group">
                                    <span class="black-gradient-text fw-bold">2026–2027</span>
                                    <span class="activities-separator about-sep">
                                        <span class="activities-sep-line"></span>
                                        <span class="activities-sep-dot"></span>
                                        <span class="activities-sep-line"></span>
                                    </span>
                                </span>
                            </h2>
                        </div>
                        <p class="about-para">
                            The Rann of Kutch is a salt marsh located in the Thar Desert in the Kutch district of Gujarat, India. It is known for its stunning white salt desert, vibrant culture, and unique wildlife. The region comes alive during the Rann Utsav, a festival celebrating local art, crafts, music, and dance.<br><br>
                            Rann Utsav 2026 begins on 1 november 2026 and runs till 4 March 2027, hosted in Dhordo, a small village on the edge of the White Rann in Gujarat's Kutch district. The festival spans over 100 days, thanks to Gujarat Tourism, and brings this salt marsh to life with cultural vibrancy and curated experiences.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 4. Gallery Section ("Glimpses of White Desert") -->
        <section id="gallery" class="section">
            <div class="container-fluid px-4 px-md-5">
                <div class="row">
                    <div class="col-md-12 text-center mb-5">
                        <h2 class="section-title text-dark mb-3">Glimpses of <span class="purple-gradient-text">White Desert</span></h2>
                        <div class="activities-separator mb-3">
                            <span class="activities-sep-line"></span>
                            <span class="activities-sep-dot"></span>
                            <span class="activities-sep-line"></span>
                        </div>
                        <p class="subtitle mb-0 gallery-subtitle">
                            Explore the breathtaking landscapes, vibrant cultural celebrations, and unforgettable memories of Rann Utsav.
                        </p>
                    </div>
                </div>

                <div class="gallery-carousel-container">
                    <div class="gallery-carousel-track-wrapper">
                        <div class="gallery-carousel-track" id="gallery-carousel-track">
                            <!-- Image Cards -->
                              <div class="gallery-carousel-card" data-index="9">
                                <div class="gallery-img-wrapper">
                                    <img src="./assets/gallery/gallery6.jpg?v=0.2" alt="Kutch Desert Gallery 6">
                                </div>
                            </div>
                            <div class="gallery-carousel-card" data-index="10">
                                <div class="gallery-img-wrapper">
                                    <img src="./assets/gallery/gallery8.jpg?v=0.2" alt="Kutch Desert Gallery 8">
                                </div>
                            </div>
                            <div class="gallery-carousel-card" data-index="12">
                                <div class="gallery-img-wrapper">
                                    <img src="./assets/gallery/gallery13.jpg?v=0.2" alt="Kutch Desert Gallery 13">
                                </div>
                            </div>
                            <div class="gallery-carousel-card" data-index="13">
                                <div class="gallery-img-wrapper">
                                    <img src="./assets/gallery/gallery14.jpg?v=0.2" alt="Kutch Desert Gallery 14">
                                </div>
                            </div>
                            <div class="gallery-carousel-card" data-index="14">
                                <div class="gallery-img-wrapper">
                                    <img src="./assets/gallery/gallery15.jpg?v=0.2" alt="Kutch Desert Gallery 15">
                                </div>
                            </div>
                            <div class="gallery-carousel-card" data-index="15">
                                <div class="gallery-img-wrapper">
                                    <img src="./assets/gallery/gallery16.jpg?v=0.2" alt="Kutch Desert Gallery 16">
                                </div>
                            </div>
                            <div class="gallery-carousel-card" data-index="0">
                                <div class="gallery-img-wrapper">
                                    <img src="./assets/gallery/gallery1.jpg?v=0.2" alt="Kutch Desert Gallery 1">
                                </div>
                            </div>
                            <div class="gallery-carousel-card" data-index="2">
                                <div class="gallery-img-wrapper">
                                    <img src="./assets/gallery/gallery3.jpg?v=0.2" alt="Kutch Desert Gallery 3">
                                </div>
                            </div>
                            <div class="gallery-carousel-card" data-index="3">
                                <div class="gallery-img-wrapper">
                                    <img src="./assets/gallery/gallery4.jpg?v=0.2" alt="Kutch Desert Gallery 4">
                                </div>
                            </div>
                            <div class="gallery-carousel-card" data-index="6">
                                <div class="gallery-img-wrapper">
                                    <img src="./assets/gallery/gallery10.jpg?v=0.2" alt="Kutch Desert Gallery 10">
                                </div>
                            </div>
                            <div class="gallery-carousel-card" data-index="8">
                                <div class="gallery-img-wrapper">
                                    <img src="./assets/gallery/gallery12.jpg?v=0.2" alt="Kutch Desert Gallery 12">
                                </div>
                            </div>
                           
                        </div>
                    </div>

                    <!-- Floating Navigation Controls on active cards -->
                    <button class="gallery-carousel-btn gallery-carousel-btn-prev" id="gallery-carousel-prev"
                        aria-label="Previous Slide">
                        <i class="bi bi-chevron-left"></i>
                    </button>
                    <button class="gallery-carousel-btn gallery-carousel-btn-next" id="gallery-carousel-next"
                        aria-label="Next Slide">
                        <i class="bi bi-chevron-right"></i>
                    </button>
                </div>
            </div>
        </section>

        <!-- 5. Lead Form Banner ("The magic of Rann Utsav has begun!") -->
        <section id="booking" class="align-items-center">
            <div class="container-fluid px-4 px-md-5">
                <div class="row align-items-center justify-content-between">
                    <!-- Left Side: Promo Content (35%) -->
                    <div class="col-lg-5 booking-text-col text-white text-lg-start text-center mb-5 mb-lg-0">
                        <h2 class="fw-bold mb-3 form-banner-heading">
                            The magic of <span class="gradient-text-pink-blue">Rann Utsav</span> has begun!
                        </h2>
                        <p class="opacity-90 form-banner-para">
                            Get ready for a celebration of culture, color, and endless white sands! Your Kutch journey starts here - plan with us today!
                        </p>
                        <div class="form-banner-underline-wrapper mt-3 text-start d-none d-lg-block">
                            <svg class="form-banner-underline" viewBox="0 0 120 10" preserveAspectRatio="none" style="width: 140px; height: 8px;">
                                <path d="M0,5 Q60,10 120,5" stroke="url(#form-underline-gradient)" stroke-width="3" stroke-linecap="round" fill="transparent"/>
                            </svg>
                        </div>
                    </div>

                    <!-- Right Side: Booking Form Card (65%) -->
                    <div class="col-lg-7 booking-form-col">
                        <div class="booking-card-wrapper rounded-4 shadow-lg bg-white w-100">
                            <form id="booking-form" class="booking-form" method="POST" action="">
                                <div class="row g-3">
                                    <div class="col-md-12 d-none form-duplicate-div">
                                        <div class="alert alert-danger p-3 text-center">You have already filled the form. Our team will reach out to you shortly!</div>
                                    </div>
                                    <div class="col-md-12 d-none form-error-div">
                                        <div class="alert alert-danger p-3 text-center">Please share all the required details so we can send you the perfect Rann Utsav itinerary.</div>
                                    </div>
                                    <div class="col-md-12 d-none form-failed-div">
                                        <div class="alert alert-danger p-3 text-center">Oops! Something went wrong while submitting your form. Please try again.</div>
                                    </div>
                                    
                                    <!-- 2x2 Form Layout -->
                                    <div class="col-md-6">
                                        <div class="input-group form-input-group">
                                            <span class="input-group-text"><i class="bi bi-person text-muted"></i></span>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group form-input-group">
                                            <span class="input-group-text"><i class="bi bi-envelope text-muted"></i></span>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                                        </div>
                                    </div>
 
                                    <div class="col-md-6">
                                        <div class="input-group form-input-group">
                                            <span class="input-group-text"><i class="bi bi-whatsapp text-muted"></i></span>
                                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter Whatsapp no." required>
                                        </div>
                                    </div>
 
                                    <div class="col-md-6">
                                        <div class="input-group form-input-group">
                                            <span class="input-group-text"><i class="bi bi-compass text-muted"></i></span>
                                            <select class="form-select" id="traveller-type" name="traveller_type" required>
                                                <option value="" disabled selected>What type of traveller?</option>
                                                <option value="Solo">Solo</option>
                                                <option value="Couple">Couple</option>
                                                <option value="Family">Family</option>
                                                <option value="Group">Group</option>
                                                <option value="Corporate">Corporate</option>
                                            </select>
                                        </div>
                                    </div>
 
                                    <div class="col-md-12 mt-4">
                                        <input type="hidden" class="form-control" id="source" name="source" value="<?php echo isset($_GET['utm_source']) ? htmlspecialchars($_GET['utm_source']) : 'direct'; ?>">
                                        <button class="btn w-100 fw-bold py-3 text-white rounded-pill form-submit-btn" type="submit" id="send-itinerary-button">
                                            CRAFT MY KUTCH ESCAPE
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 6. Experiences Section ("Live The Colors Of Kutch...") -->
        <section id="activities" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="section-title mb-3 text-center">
                            <span class="dark-text d-inline-block">Live The </span>
                            <span class="blue-pink-gradient-text d-inline-block">Colors Of Kutch</span>
                            <span class="d-block mt-1"></span>
                            <span class="blue-pink-gradient-text d-inline-block">One</span>
                            <span class="dark-text d-inline-block"> Experience </span>
                            <span class="blue-pink-gradient-text d-inline-block">At A Time!</span>
                        </h2>
                        <div class="activities-separator mb-3">
                            <span class="activities-sep-line"></span>
                            <span class="activities-sep-dot"></span>
                            <span class="activities-sep-line"></span>
                        </div>
                        <p class="subtitle mb-4">
                            Immerse yourself in the vibrant culture and traditions of the Rann of Kutch with our curated
                            activities.
                        </p>
                    </div>
                </div>
            </div>


            <div class="activity-carousel pt-4">
                <div class="activity-track">
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <div class="card-body activity" id="folk-dance-card">
                                <h5 class="card-title">Folk Dance <br>& Music</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <div class="card-body activity" id="handicraft-exhibitions-card">
                                <h5 class="card-title">Local Handicraft Exhibitions</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <div class="card-body activity" id="dolls-card">
                                <h5 class="card-title">Kutchi Dolls & <br>Puppetry</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <div class="card-body activity" id="kutchi-cuisine-card">
                                <h5 class="card-title">Traditional Kutchi Cuisine</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <div class="card-body activity" id="desert-safari-card">
                                <h5 class="card-title">White Desert <br>Safari</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <div class="card-body activity" id="hot-air-balloon-card">
                                <h5 class="card-title">Hot Air Balloon <br>Ride</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <div class="card-body activity" id="paragliding-card">
                                <h5 class="card-title">Tethered <br>Paramotoring & <br>Paragliding</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <div class="card-body activity" id="paramotor-flight-card">
                                <h5 class="card-title">Paramotor <br>Flights</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <div class="card-body activity" id="atv-rides-card">
                                <h5 class="card-title">ATV & Camel <br>Rides</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <div class="card-body activity" id="village-visits-card">
                                <h5 class="card-title">Craft Village <br>Visits</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <div class="card-body activity" id="local-market-card">
                                <h5 class="card-title">Local Bazaars <br>Shopping</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <div class="card-body activity" id="craft-market-card">
                                <h5 class="card-title">Traditional Craft <br>Markets</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <div class="card-body activity" id="cultural-market-card">
                                <h5 class="card-title">Kutchi Cultural <br>Market</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <div class="card-body activity" id="night-bazaar-card">
                                <h5 class="card-title">Night <br>Bazaar</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <div class="card-body activity" id="full-moon-card">
                                <h5 class="card-title">Full Moon <br>in the Rann</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <div class="card-body activity" id="bhunga-stay-card">
                                <h5 class="card-title">Traditional Bhunga Stay</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <div class="card-body activity" id="yoga-card">
                                <h5 class="card-title">Yoga & Meditation Sessions</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <div class="card-body activity" id="paintball-card">
                                <h5 class="card-title">Paintball <br>Adventure</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <div class="card-body activity" id="rodeo-card">
                                <h5 class="card-title">Desert Camel <br>Rodeo</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <div class="card-body activity" id="kaha-card">
                                <h5 class="card-title">Kutch Heritage <br>Tour</h5>
                            </div>
                        </div>
                    </div>
                    <!-- Duplicate items for infinite marquee loop -->
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <div class="card-body activity" id="folk-dance-card">
                                <h5 class="card-title">Folk Dance <br>& Music</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <div class="card-body activity" id="handicraft-exhibitions-card">
                                <h5 class="card-title">Local Handicraft Exhibitions</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <div class="card-body activity" id="dolls-card">
                                <h5 class="card-title">Kutchi Dolls & <br>Puppetry</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <div class="card-body activity" id="kutchi-cuisine-card">
                                <h5 class="card-title">Traditional Kutchi Cuisine</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <div class="card-body activity" id="desert-safari-card">
                                <h5 class="card-title">White Desert <br>Safari</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <div class="card-body activity" id="hot-air-balloon-card">
                                <h5 class="card-title">Hot Air Balloon <br>Ride</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <div class="card-body activity" id="paragliding-card">
                                <h5 class="card-title">Tethered <br>Paramotoring & <br>Paragliding</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <div class="card-body activity" id="paramotor-flight-card">
                                <h5 class="card-title">Paramotor <br>Flights</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <div class="card-body activity" id="atv-rides-card">
                                <h5 class="card-title">ATV & Camel <br>Rides</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <div class="card-body activity" id="village-visits-card">
                                <h5 class="card-title">Craft Village <br>Visits</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <div class="card-body activity" id="local-market-card">
                                <h5 class="card-title">Local Bazaars <br>Shopping</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <div class="card-body activity" id="craft-market-card">
                                <h5 class="card-title">Traditional Craft <br>Markets</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <div class="card-body activity" id="cultural-market-card">
                                <h5 class="card-title">Kutchi Cultural <br>Market</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <div class="card-body activity" id="night-bazaar-card">
                                <h5 class="card-title">Night <br>Bazaar</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <div class="card-body activity" id="full-moon-card">
                                <h5 class="card-title">Full Moon <br>in the Rann</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <div class="card-body activity" id="bhunga-stay-card">
                                <h5 class="card-title">Traditional Bhunga Stay</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <div class="card-body activity" id="yoga-card">
                                <h5 class="card-title">Yoga & Meditation Sessions</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <div class="card-body activity" id="paintball-card">
                                <h5 class="card-title">Paintball <br>Adventure</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <div class="card-body activity" id="rodeo-card">
                                <h5 class="card-title">Desert Camel <br>Rodeo</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <div class="card-body activity" id="kaha-card">
                                <h5 class="card-title">Kutch Heritage <br>Tour</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 6.5 Stay Under The Stars (Accommodation Showcase) -->
        <section id="tents-showcase" class="section" style="border-top: 1px solid rgba(116, 79, 185, 0.05); border-bottom: 1px solid rgba(116, 79, 185, 0.05);">
            <div class="container">
                <!-- Section Header -->
                <div class="row text-center mb-5">
                    <div class="col-md-12">
                        <h2 class="section-title text-white mt-2 mb-3">Stay Under The <span class="pink-text">Stars</span></h2>
                        <div class="activities-separator mb-3">
                            <span class="activities-sep-line"></span>
                            <span class="activities-sep-dot"></span>
                            <span class="activities-sep-line"></span>
                        </div>
                        <p class="subtitle-accomadation text-muted mx-auto" style="max-width: 600px;">Luxury Tents Crafted For Every Traveller</p>
                    </div>
                </div>

                <!-- Main Carousel -->
                <div id="tentsCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="6000">
                    <div class="carousel-inner">
                        
                        <!-- Slide 1: Darbari Maharaja Suite -->
                        <div class="carousel-item active">
                            <div class="row g-4 align-items-center justify-content-center">
                                <!-- Left Column: Image & Thumbnails -->
                                <div class="col-lg-6 order-lg-2 offset-xl-1">
                                    <div class="tent-gallery-card p-3 bg-white rounded-4 shadow-sm">
                                        <div class="tent-main-img-wrapper position-relative overflow-hidden rounded-3 mb-3" style="aspect-ratio: 16/10;">
                                            <img id="darbari-main-img" src="./assets/tents/darbari-tent-exterior.JPG" alt="Darbari Maharaja Suite" class="w-100 h-100 object-fit-cover">
                                            <span class="position-absolute top-3 start-3 badge bg-danger fs-6 py-2 px-3 rounded-pill shadow-sm" style="background: linear-gradient(135deg, #EA0776 0%, #744FB9 100%) !important;">🔥 Best Seller</span>
                                        </div>
                                        <div class="row g-2 tent-thumbnails">
                                            <div class="col-3">
                                                <img src="./assets/tents/darbari-tent-exterior.JPG" class="img-fluid rounded cursor-pointer active-thumb" onclick="changeTentImage('darbari', './assets/tents/darbari-tent-exterior.JPG', this)" alt="Darbari Suite Exterior">
                                            </div>
                                            <div class="col-3">
                                                <img src="./assets/tents/darbari-tent-bed.JPG" class="img-fluid rounded cursor-pointer" onclick="changeTentImage('darbari', './assets/tents/darbari-tent-bed.JPG', this)" alt="Darbari Suite Interior">
                                            </div>
                                            <div class="col-3">
                                                <img src="./assets/tents/darbari-tent-sitting-area.JPG" class="img-fluid rounded cursor-pointer" onclick="changeTentImage('darbari', './assets/tents/darbari-tent-sitting-area.JPG', this)" alt="Darbari Suite Lounge">
                                            </div>
                                            <div class="col-3">
                                                <img src="./assets/tents/darbari-tent-wc.JPG" class="img-fluid rounded cursor-pointer" onclick="changeTentImage('darbari', './assets/tents/darbari-tent-wc.JPG', this)" alt="Darbari Suite Washroom">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Right Column: Information Panel -->
                                <div class="col-lg-6 col-xl-5 order-lg-1">
                                    <div class="tent-info-panel p-4 p-md-5 bg-white rounded-4 shadow-sm border border-opacity-10" style="border-color: rgba(116, 79, 185, 0.1);">
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <h2 class="tent-title mb-0" style="color: #10182D;">Darbari Suite</h2>
                                            <div class="tent-rating text-end">
                                                <span class="text-warning"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></span>
                                                <span class="fw-bold text-dark ms-1">5.0</span>
                                            </div>
                                        </div>
                                        
                                        <p class="tent-description text-muted mb-4">Experience the ultimate royal stay in our grand Darbari Suite, featuring rich traditional Kutch decor, lavish furnishings, and modern comforts.</p>
                                        
                                        <div class="row mb-4 g-3">
                                            <div class="col-sm-6">
                                                <h6 class="fw-bold text-dark mb-2" style="font-size: 13px; letter-spacing: 0.5px; text-transform: uppercase; color: #744FB9 !important;">Amenities</h6>
                                                <ul class="list-unstyled amenities-list mb-0">
                                                    <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2" style="font-size: 14px;"></i> King Size Bed</li>
                                                    <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2" style="font-size: 14px;"></i> Air Conditioning</li>
                                                    <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2" style="font-size: 14px;"></i> Attached Washroom</li>
                                                    <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2" style="font-size: 14px;"></i> Private Lounge</li>
                                                    <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2" style="font-size: 14px;"></i> Meals Included</li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <h6 class="fw-bold text-dark mb-2" style="font-size: 13px; letter-spacing: 0.5px; text-transform: uppercase; color: #744FB9 !important;">Capacity</h6>
                                                    <p class="text-muted mb-0"><i class="bi bi-people-fill me-2" style="color: #744FB9;"></i> 2 Adults + 2 Kids</p>
                                                </div>
                                                <div>
                                                    <h6 class="fw-bold text-dark mb-2" style="font-size: 13px; letter-spacing: 0.5px; text-transform: uppercase; color: #744FB9 !important;">Ideal For</h6>
                                                    <p class="text-muted mb-0"><i class="bi bi-suit-heart-fill me-2" style="color: #EA0776;"></i> Families & Royal Luxury</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <a href="#booking" class="btn btn-primary w-100 rounded-pill py-3 fw-bold btn-book-tent" style="background: linear-gradient(135deg, #744FB9 0%, #EA0776 100%); border: none;">
                                            Book This Tent <i class="bi bi-arrow-right-short ms-1 fs-5 align-middle"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2: Rajwadi Luxury Tent -->
                        <div class="carousel-item">
                            <div class="row g-4 align-items-center justify-content-center">
                                <!-- Left Column: Image & Thumbnails -->
                                <div class="col-lg-6 order-lg-2 offset-xl-1">
                                    <div class="tent-gallery-card p-3 bg-white rounded-4 shadow-sm">
                                        <div class="tent-main-img-wrapper position-relative overflow-hidden rounded-3 mb-3" style="aspect-ratio: 16/10;">
                                            <img id="rajwadi-main-img" src="./assets/tents/rajwadi-tent.JPG" alt="Rajwadi Luxury Tent" class="w-100 h-100 object-fit-cover">
                                            <span class="position-absolute top-3 start-3 badge bg-primary fs-6 py-2 px-3 rounded-pill shadow-sm" style="background: #744FB9 !important;">Most Popular</span>
                                        </div>
                                        <div class="row g-2 tent-thumbnails">
                                            <div class="col-3">
                                                <img src="./assets/tents/rajwadi-tent.JPG" class="img-fluid rounded cursor-pointer active-thumb" onclick="changeTentImage('rajwadi', './assets/tents/rajwadi-tent.JPG', this)" alt="Rajwadi Tent Exterior">
                                            </div>
                                            <div class="col-3">
                                                <img src="./assets/tents/rajwadi-tent-bed.JPG" class="img-fluid rounded cursor-pointer" onclick="changeTentImage('rajwadi', './assets/tents/rajwadi-tent-bed.JPG', this)" alt="Rajwadi Tent Bed">
                                            </div>
                                            <div class="col-3">
                                                <img src="./assets/tents/rajwadi-tent-sitting-area.JPG" class="img-fluid rounded cursor-pointer" onclick="changeTentImage('rajwadi', './assets/tents/rajwadi-tent-sitting-area.JPG', this)" alt="Rajwadi Tent Lounge">
                                            </div>
                                            <div class="col-3">
                                                <img src="./assets/tents/rajwadi-tent-wc.JPG" class="img-fluid rounded cursor-pointer" onclick="changeTentImage('rajwadi', './assets/tents/rajwadi-tent-wc.JPG', this)" alt="Rajwadi Tent Washroom">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Right Column: Information Panel -->
                                <div class="col-lg-6 col-xl-5 order-lg-1">
                                    <div class="tent-info-panel p-4 p-md-5 bg-white rounded-4 shadow-sm border border-opacity-10" style="border-color: rgba(116, 79, 185, 0.1);">
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <h2 class="tent-title mb-0" style="color: #10182D;">Rajwadi Tent</h2>
                                            <div class="tent-rating text-end">
                                                <span class="text-warning"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></span>
                                                <span class="fw-bold text-dark ms-1">4.9</span>
                                            </div>
                                        </div>
                                        
                                        <p class="tent-description text-muted mb-4">Inspired by royal heritage, the Rajwadi tent blends traditional luxury with modern comfort, offering a premium stay under the starlit sky.</p>
                                        
                                        <div class="row mb-4 g-3">
                                            <div class="col-sm-6">
                                                <h6 class="fw-bold text-dark mb-2" style="font-size: 13px; letter-spacing: 0.5px; text-transform: uppercase; color: #744FB9 !important;">Amenities</h6>
                                                <ul class="list-unstyled amenities-list mb-0">
                                                    <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2" style="font-size: 14px;"></i> King Size Bed</li>
                                                    <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2" style="font-size: 14px;"></i> Air Conditioning</li>
                                                    <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2" style="font-size: 14px;"></i> Attached Washroom</li>
                                                    <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2" style="font-size: 14px;"></i> Private Lounge</li>
                                                    <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2" style="font-size: 14px;"></i> Breakfast & Dinner</li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <h6 class="fw-bold text-dark mb-2" style="font-size: 13px; letter-spacing: 0.5px; text-transform: uppercase; color: #744FB9 !important;">Capacity</h6>
                                                    <p class="text-muted mb-0"><i class="bi bi-people-fill me-2" style="color: #744FB9;"></i> 2 Adults + 1 Kid</p>
                                                </div>
                                                <div>
                                                    <h6 class="fw-bold text-dark mb-2" style="font-size: 13px; letter-spacing: 0.5px; text-transform: uppercase; color: #744FB9 !important;">Ideal For</h6>
                                                    <p class="text-muted mb-0"><i class="bi bi-suit-heart-fill me-2" style="color: #EA0776;"></i> Couples & Families</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <a href="#booking" class="btn btn-primary w-100 rounded-pill py-3 fw-bold btn-book-tent" style="background: linear-gradient(135deg, #744FB9 0%, #EA0776 100%); border: none;">
                                            Book This Tent <i class="bi bi-arrow-right-short ms-1 fs-5 align-middle"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3: Premium AC Tent -->
                        <div class="carousel-item">
                            <div class="row g-4 align-items-center justify-content-center">
                                <!-- Left Column: Image & Thumbnails -->
                                <div class="col-lg-6 order-lg-2 offset-xl-1">
                                    <div class="tent-gallery-card p-3 bg-white rounded-4 shadow-sm">
                                        <div class="tent-main-img-wrapper position-relative overflow-hidden rounded-3 mb-3" style="aspect-ratio: 16/10;">
                                            <img id="premium-main-img" src="./assets/tents/premium-tent-exterior.JPG" alt="Premium AC Tent" class="w-100 h-100 object-fit-cover">
                                            <span class="position-absolute top-3 start-3 badge bg-success fs-6 py-2 px-3 rounded-pill shadow-sm" style="background: #28a745 !important;">🔥 Best Value</span>
                                        </div>
                                        <div class="row g-2 tent-thumbnails">
                                            <div class="col-3">
                                                <img src="./assets/tents/premium-tent-exterior.JPG" class="img-fluid rounded cursor-pointer active-thumb" onclick="changeTentImage('premium', './assets/tents/premium-tent-exterior.JPG', this)" alt="Premium Tent Exterior">
                                            </div>
                                            <div class="col-3">
                                                <img src="./assets/tents/premium-tent-bed.JPG" class="img-fluid rounded cursor-pointer" onclick="changeTentImage('premium', './assets/tents/premium-tent-bed.JPG', this)" alt="Premium Tent Bed">
                                            </div>
                                            <div class="col-3">
                                                <img src="./assets/tents/premium-tent-sitting-area1.JPG" class="img-fluid rounded cursor-pointer" onclick="changeTentImage('premium', './assets/tents/premium-tent-sitting-area1.JPG', this)" alt="Premium Tent Lounge">
                                            </div>
                                            <div class="col-3">
                                                <img src="./assets/tents/premium-tent-wc.JPG" class="img-fluid rounded cursor-pointer" onclick="changeTentImage('premium', './assets/tents/premium-tent-wc.JPG', this)" alt="Premium Tent Washroom">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Right Column: Information Panel -->
                                <div class="col-lg-6 col-xl-5 order-lg-1">
                                    <div class="tent-info-panel p-4 p-md-5 bg-white rounded-4 shadow-sm border border-opacity-10" style="border-color: rgba(116, 79, 185, 0.1);">
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <h2 class="tent-title mb-0" style="color: #10182D;">Premium AC Tent</h2>
                                            <div class="tent-rating text-end">
                                                <span class="text-warning"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></span>
                                                <span class="fw-bold text-dark ms-1">4.8</span>
                                            </div>
                                        </div>
                                        
                                        <p class="tent-description text-muted mb-4">A high-end comfortable tent with complete air conditioning, premium bedding, and a separate sitting area to relax after exploring the Rann.</p>
                                        
                                        <div class="row mb-4 g-3">
                                            <div class="col-sm-6">
                                                <h6 class="fw-bold text-dark mb-2" style="font-size: 13px; letter-spacing: 0.5px; text-transform: uppercase; color: #744FB9 !important;">Amenities</h6>
                                                <ul class="list-unstyled amenities-list mb-0">
                                                    <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2" style="font-size: 14px;"></i> King Size Bed</li>
                                                    <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2" style="font-size: 14px;"></i> Air Conditioning</li>
                                                    <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2" style="font-size: 14px;"></i> Attached Washroom</li>
                                                    <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2" style="font-size: 14px;"></i> Cozy Sitting Area</li>
                                                    <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2" style="font-size: 14px;"></i> Breakfast Included</li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <h6 class="fw-bold text-dark mb-2" style="font-size: 13px; letter-spacing: 0.5px; text-transform: uppercase; color: #744FB9 !important;">Capacity</h6>
                                                    <p class="text-muted mb-0"><i class="bi bi-people-fill me-2" style="color: #744FB9;"></i> 2 Adults + 1 Kid</p>
                                                </div>
                                                <div>
                                                    <h6 class="fw-bold text-dark mb-2" style="font-size: 13px; letter-spacing: 0.5px; text-transform: uppercase; color: #744FB9 !important;">Ideal For</h6>
                                                    <p class="text-muted mb-0"><i class="bi bi-suit-heart-fill me-2" style="color: #EA0776;"></i> Couples & Honeymooners</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <a href="#booking" class="btn btn-primary w-100 rounded-pill py-3 fw-bold btn-book-tent" style="background: linear-gradient(135deg, #744FB9 0%, #EA0776 100%); border: none;">
                                            Book This Tent <i class="bi bi-arrow-right-short ms-1 fs-5 align-middle"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 4: Deluxe AC Tent -->
                        <div class="carousel-item">
                            <div class="row g-4 align-items-center justify-content-center">
                                <!-- Left Column: Image & Thumbnails -->
                                <div class="col-lg-6 order-lg-2 offset-xl-1">
                                    <div class="tent-gallery-card p-3 bg-white rounded-4 shadow-sm">
                                        <div class="tent-main-img-wrapper position-relative overflow-hidden rounded-3 mb-3" style="aspect-ratio: 16/10;">
                                            <img id="deluxe-main-img" src="./assets/tents/delux-tent.JPG" alt="Deluxe AC Tent" class="w-100 h-100 object-fit-cover">
                                            <span class="position-absolute top-3 start-3 badge bg-info fs-6 py-2 px-3 rounded-pill text-white shadow-sm" style="background: #17a2b8 !important;">Classic Comfort</span>
                                        </div>
                                        <div class="row g-2 tent-thumbnails">
                                            <div class="col-3">
                                                <img src="./assets/tents/delux-tent.JPG" class="img-fluid rounded cursor-pointer active-thumb" onclick="changeTentImage('deluxe', './assets/tents/delux-tent.JPG', this)" alt="Deluxe Tent Exterior">
                                            </div>
                                            <div class="col-3">
                                                <img src="./assets/tents/delux-tent-bed.JPG" class="img-fluid rounded cursor-pointer" onclick="changeTentImage('deluxe', './assets/tents/delux-tent-bed.JPG', this)" alt="Deluxe Tent Bed">
                                            </div>
                                            <div class="col-3">
                                                <img src="./assets/tents/delux-tent-sitting-area.JPG" class="img-fluid rounded cursor-pointer" onclick="changeTentImage('deluxe', './assets/tents/delux-tent-sitting-area.JPG', this)" alt="Deluxe Tent Lounge">
                                            </div>
                                            <div class="col-3">
                                                <img src="./assets/tents/delux-tent-wc.JPG" class="img-fluid rounded cursor-pointer" onclick="changeTentImage('deluxe', './assets/tents/delux-tent-wc.JPG', this)" alt="Deluxe Tent Washroom">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Right Column: Information Panel -->
                                <div class="col-lg-6 col-xl-5 order-lg-1">
                                    <div class="tent-info-panel p-4 p-md-5 bg-white rounded-4 shadow-sm border border-opacity-10" style="border-color: rgba(116, 79, 185, 0.1);">
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <h2 class="tent-title mb-0" style="color: #10182D;">Deluxe AC Tent</h2>
                                            <div class="tent-rating text-end">
                                                <span class="text-warning"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></span>
                                                <span class="fw-bold text-dark ms-1">4.6</span>
                                            </div>
                                        </div>
                                        
                                        <p class="tent-description text-muted mb-4">A perfectly balanced deluxe tent offering cozy interiors, air conditioning, and top-tier hospitality for a relaxing stay.</p>
                                        
                                        <div class="row mb-4 g-3">
                                            <div class="col-sm-6">
                                                <h6 class="fw-bold text-dark mb-2" style="font-size: 13px; letter-spacing: 0.5px; text-transform: uppercase; color: #744FB9 !important;">Amenities</h6>
                                                <ul class="list-unstyled amenities-list mb-0">
                                                    <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2" style="font-size: 14px;"></i> King Size Bed</li>
                                                    <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2" style="font-size: 14px;"></i> Air Conditioning</li>
                                                    <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2" style="font-size: 14px;"></i> Attached Washroom</li>
                                                    <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2" style="font-size: 14px;"></i> Wi-Fi Support</li>
                                                    <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2" style="font-size: 14px;"></i> Breakfast Included</li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <h6 class="fw-bold text-dark mb-2" style="font-size: 13px; letter-spacing: 0.5px; text-transform: uppercase; color: #744FB9 !important;">Capacity</h6>
                                                    <p class="text-muted mb-0"><i class="bi bi-people-fill me-2" style="color: #744FB9;"></i> 2 Adults + 1 Kid</p>
                                                </div>
                                                <div>
                                                    <h6 class="fw-bold text-dark mb-2" style="font-size: 13px; letter-spacing: 0.5px; text-transform: uppercase; color: #744FB9 !important;">Ideal For</h6>
                                                    <p class="text-muted mb-0"><i class="bi bi-suit-heart-fill me-2" style="color: #EA0776;"></i> Comfort & Value Seekers</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <a href="#booking" class="btn btn-primary w-100 rounded-pill py-3 fw-bold btn-book-tent" style="background: linear-gradient(135deg, #744FB9 0%, #EA0776 100%); border: none;">
                                            Book This Tent <i class="bi bi-arrow-right-short ms-1 fs-5 align-middle"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 5: Non-AC Traditional Tent -->
                        <div class="carousel-item">
                            <div class="row g-4 align-items-center justify-content-center">
                                <!-- Left Column: Image & Thumbnails -->
                                <div class="col-lg-6 order-lg-2 offset-xl-1">
                                    <div class="tent-gallery-card p-3 bg-white rounded-4 shadow-sm">
                                        <div class="tent-main-img-wrapper position-relative overflow-hidden rounded-3 mb-3" style="aspect-ratio: 16/10;">
                                            <img id="nonac-main-img" src="./assets/tents/non-ac-tent-exterior.JPG" alt="Non-AC Traditional Tent" class="w-100 h-100 object-fit-cover">
                                            <span class="position-absolute top-3 start-3 badge bg-secondary fs-6 py-2 px-3 rounded-pill shadow-sm" style="background: #6c757d !important;">Traditional Stay</span>
                                        </div>
                                        <div class="row g-2 tent-thumbnails">
                                            <div class="col-3">
                                                <img src="./assets/tents/non-ac-tent-exterior.JPG" class="img-fluid rounded cursor-pointer active-thumb" onclick="changeTentImage('nonac', './assets/tents/non-ac-tent-exterior.JPG', this)" alt="Non-AC Tent Exterior">
                                            </div>
                                            <div class="col-3">
                                                <img src="./assets/tents/non-ac-tent-bed.JPG" class="img-fluid rounded cursor-pointer" onclick="changeTentImage('nonac', './assets/tents/non-ac-tent-bed.JPG', this)" alt="Non-AC Tent Bed">
                                            </div>
                                            <div class="col-3">
                                                <img src="./assets/tents/non-ac-tent-sitting-area.JPG" class="img-fluid rounded cursor-pointer" onclick="changeTentImage('nonac', './assets/tents/non-ac-tent-sitting-area.JPG', this)" alt="Non-AC Tent Lounge">
                                            </div>
                                            <div class="col-3">
                                                <img src="./assets/tents/non-ac-tent-wc.JPG" class="img-fluid rounded cursor-pointer" onclick="changeTentImage('nonac', './assets/tents/non-ac-tent-wc.JPG', this)" alt="Non-AC Tent Washroom">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Right Column: Information Panel -->
                                <div class="col-lg-6 col-xl-5 order-lg-1">
                                    <div class="tent-info-panel p-4 p-md-5 bg-white rounded-4 shadow-sm border border-opacity-10" style="border-color: rgba(116, 79, 185, 0.1);">
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <h2 class="tent-title mb-0" style="color: #10182D;">Traditional Non-AC Tent</h2>
                                            <div class="tent-rating text-end">
                                                <span class="text-warning"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></span>
                                                <span class="fw-bold text-dark ms-1">4.5</span>
                                            </div>
                                        </div>
                                        
                                        <p class="tent-description text-muted mb-4">Experience the authentic, traditional desert camping feel in our eco-friendly non-AC tents, keeping you close to Kutch culture.</p>
                                        
                                        <div class="row mb-4 g-3">
                                            <div class="col-sm-6">
                                                <h6 class="fw-bold text-dark mb-2" style="font-size: 13px; letter-spacing: 0.5px; text-transform: uppercase; color: #744FB9 !important;">Amenities</h6>
                                                <ul class="list-unstyled amenities-list mb-0">
                                                    <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2" style="font-size: 14px;"></i> Double Bed</li>
                                                    <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2" style="font-size: 14px;"></i> Natural Ventilation</li>
                                                    <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2" style="font-size: 14px;"></i> Attached Washroom</li>
                                                    <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2" style="font-size: 14px;"></i> Cultural Ambience</li>
                                                    <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2" style="font-size: 14px;"></i> Breakfast Included</li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <h6 class="fw-bold text-dark mb-2" style="font-size: 13px; letter-spacing: 0.5px; text-transform: uppercase; color: #744FB9 !important;">Capacity</h6>
                                                    <p class="text-muted mb-0"><i class="bi bi-people-fill me-2" style="color: #744FB9;"></i> 2 Adults</p>
                                                </div>
                                                <div>
                                                    <h6 class="fw-bold text-dark mb-2" style="font-size: 13px; letter-spacing: 0.5px; text-transform: uppercase; color: #744FB9 !important;">Ideal For</h6>
                                                    <p class="text-muted mb-0"><i class="bi bi-suit-heart-fill me-2" style="color: #EA0776;"></i> Solo & Budget Explorers</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <a href="#booking" class="btn btn-primary w-100 rounded-pill py-3 fw-bold btn-book-tent" style="background: linear-gradient(135deg, #744FB9 0%, #EA0776 100%); border: none;">
                                            Book This Tent <i class="bi bi-arrow-right-short ms-1 fs-5 align-middle"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Custom Navigation: ◀ 1 / 5 ▶ -->
                    <div class="d-flex justify-content-center align-items-center mt-5">
                        <button class="btn btn-outline-primary rounded-circle d-flex align-items-center justify-content-center tents-carousel-prev" type="button" data-bs-target="#tentsCarousel" data-bs-slide="prev" style="width: 48px; height: 48px; border-color: rgba(255, 255, 255, 0.61); color: #744FB9; transition: all 0.3s; background: transparent;">
                            <i class="bi bi-chevron-left fs-5"></i>
                        </button>
                        <span class="fw-bold fs-5 text-white mx-4" id="tents-carousel-counter" style="min-width: 70px; text-align: center; letter-spacing: 1px;">1 / 5</span>
                        <button class="btn btn-outline-primary rounded-circle d-flex align-items-center justify-content-center tents-carousel-next" type="button" data-bs-target="#tentsCarousel" data-bs-slide="next" style="width: 48px; height: 48px; border-color: rgba(255, 255, 255, 0.61); color: #744FB9; transition: all 0.3s; background: transparent;">
                            <i class="bi bi-chevron-right fs-5"></i>
                        </button>
                    </div>
                </div>
            </div>
        </section>
  <!-- 7. Artisans Section ("Hands That Shape Kutch") -->
        <section id="stars-await" class="section">
            <div class="container-fluid px-4 px-md-5">
                <div class="row">
                    <div class="col-md-12 text-center mb-5">
                        <h2 class="section-title text-dark mb-3">Hands That <span class="purple-gradient-text">Shape Kutch</span></h2>
                        <div class="activities-separator mb-3">
                            <span class="activities-sep-line"></span>
                            <span class="activities-sep-dot"></span>
                            <span class="activities-sep-line"></span>
                        </div>
                        <p class="subtitle mb-0 stars-subtitle">
                            Every creation tells a story of tradition, passion, and generations of exceptional craftsmanship.
                        </p>
                    </div>
                </div>

                <div class="stars-carousel-container">
                    <div class="stars-carousel-track-wrapper">
                        <div class="stars-carousel-track" id="stars-carousel-track">
                            <!-- Image Cards -->
                            <div class="stars-carousel-card" data-index="0">
                                <div class="artist-frame">
                                    <div class="artist-pin"></div>
                                    <div class="artist-img-wrapper">
                                        <img src="./assets/art.jpg" alt="Artisan Weaving">
                                    </div>
                                    <div class="artist-details">
                                        <h5 class="artist-title">Kutchi Weaving</h5>
                                        <p class="artist-subtitle">Heritage Handloom</p>
                                    </div>
                                </div>
                            </div>
                            <div class="stars-carousel-card" data-index="1">
                                <div class="artist-frame">
                                    <div class="artist-pin"></div>
                                    <div class="artist-img-wrapper">
                                        <img src="./assets/art2.jpg" alt="Terracotta Pottery">
                                    </div>
                                    <div class="artist-details">
                                        <h5 class="artist-title">Terracotta Pottery</h5>
                                        <p class="artist-subtitle">Molded Clay Art</p>
                                    </div>
                                </div>
                            </div>
                            <div class="stars-carousel-card" data-index="2">
                                <div class="artist-frame">
                                    <div class="artist-pin"></div>
                                    <div class="artist-img-wrapper">
                                        <img src="./assets/art3.jpg" alt="Rogan Painting">
                                    </div>
                                    <div class="artist-details">
                                        <h5 class="artist-title">Rogan Painting</h5>
                                        <p class="artist-subtitle">Castor Oil Paint</p>
                                    </div>
                                </div>
                            </div>
                            <div class="stars-carousel-card" data-index="3">
                                <div class="artist-frame">
                                    <div class="artist-pin"></div>
                                    <div class="artist-img-wrapper">
                                        <img src="./assets/art4.jpg" alt="Suf Embroidery">
                                    </div>
                                    <div class="artist-details">
                                        <h5 class="artist-title">Suf Embroidery</h5>
                                        <p class="artist-subtitle">Intricate Needlework</p>
                                    </div>
                                </div>
                            </div>
                            <div class="stars-carousel-card" data-index="4">
                                <div class="artist-frame">
                                    <div class="artist-pin"></div>
                                    <div class="artist-img-wrapper">
                                        <img src="./assets/art5.jpg" alt="Ajrakh Printing">
                                    </div>
                                    <div class="artist-details">
                                        <h5 class="artist-title">Ajrakh Printing</h5>
                                        <p class="artist-subtitle">Natural Block Print</p>
                                    </div>
                                </div>
                            </div>
                            <div class="stars-carousel-card" data-index="5">
                                <div class="artist-frame">
                                    <div class="artist-pin"></div>
                                    <div class="artist-img-wrapper">
                                        <img src="./assets/art6.jpg" alt="Leather Craft">
                                    </div>
                                    <div class="artist-details">
                                        <h5 class="artist-title">Leather Craft</h5>
                                        <p class="artist-subtitle">Traditional Stitching</p>
                                    </div>
                                </div>
                            </div>
                            <div class="stars-carousel-card" data-index="6">
                                <div class="artist-frame">
                                    <div class="artist-pin"></div>
                                    <div class="artist-img-wrapper">
                                        <img src="./assets/art7.jpg" alt="Copper Bell Art">
                                    </div>
                                    <div class="artist-details">
                                        <h5 class="artist-title">Copper Bell Art</h5>
                                        <p class="artist-subtitle">Chimed Metalwork</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Navigation Controls -->
                    <button class="stars-carousel-btn stars-carousel-btn-prev" id="stars-carousel-prev" aria-label="Previous Slide">
                        <i class="bi bi-chevron-left"></i>
                    </button>
                    <button class="stars-carousel-btn stars-carousel-btn-next" id="stars-carousel-next" aria-label="Next Slide">
                        <i class="bi bi-chevron-right"></i>
                    </button>
                </div>
            </div>
        </section>

        <!-- 6.6 Guest Testimonials Carousel Section -->
        <section id="guest-testimonials" class="section position-relative py-5">
            <div class="container">
                <!-- Section Header -->
                <div class="row text-center mb-4 mb-md-5">
                    <div class="col-12">
                        <span class="testimonials-badge d-inline-block px-3 py-1 mb-3 rounded-pill fw-semibold text-uppercase" style="letter-spacing: 2px; font-size: 0.75rem; background: rgba(116, 79, 185, 0.15); color: #FF4D8D; border: 1px solid rgba(255, 77, 141, 0.3);">
                            GUEST TESTIMONIALS
                        </span>
                        <h2 class="section-title text-white mb-2">What Our <span class="pink-text">Guests Say</span></h2>
                        <div class="activities-separator mb-3">
                            <span class="activities-sep-line"></span>
                            <span class="activities-sep-dot"></span>
                            <span class="activities-sep-line"></span>
                        </div>
                        <p class="subtitle text-muted mx-auto mb-0" style="max-width: 650px; color: rgba(255, 255, 255, 0.7) !important;">
                            Real experiences from visitors who explored the White Rann.
                        </p>
                    </div>
                </div>

                <!-- Carousel Area -->
                <div class="row justify-content-center">
                    <div class="col-lg-11 col-xl-10 position-relative">
                        <div class="testimonial-carousel-wrapper">
                            
                            <!-- Prev Arrow Button -->
                            <button class="testimonial-arrow testimonial-arrow-prev" id="testimonial-prev-btn" aria-label="Previous Testimonial">
                                <i class="bi bi-chevron-left"></i>
                            </button>

                            <!-- Testimonial Card Container -->
                            <div class="testimonial-card-outer mx-auto" id="testimonial-card-outer">
                                <div class="testimonial-card bg-white p-4 p-md-5 text-center rounded-4 shadow-lg position-relative" id="testimonial-card">
                                    
                                    <!-- 5 Gold Stars -->
                                    <div class="testimonial-stars mb-3">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>

                                    <!-- Review Title -->
                                    <h3 class="testimonial-title fw-bold text-dark mb-3" id="testimonial-title">
                                        <!-- Populated via JS -->
                                    </h3>

                                    <!-- Review Text -->
                                    <p class="testimonial-text mb-3 mx-auto" id="testimonial-text">
                                        <!-- Populated via JS -->
                                    </p>

                                    <!-- Special Author & Booking Badge Section -->
                                    <div class="testimonial-author-wrapper my-3 pt-3 border-top border-opacity-10 d-flex flex-column flex-sm-row align-items-center justify-content-center gap-2" id="testimonial-author-wrapper">
                                        <span class="testimonial-author-name fw-bold text-dark fs-6" id="testimonial-author">
                                            <!-- Author Name Populated via JS -->
                                        </span>
                                        <span class="testimonial-author-dot d-none d-sm-inline-block opacity-40" id="testimonial-author-dot">•</span>
                                        <span class="testimonial-booking-badge px-3 py-1 rounded-pill fw-medium" id="testimonial-badge">
                                            <!-- Booking Badge Populated via JS -->
                                        </span>
                                    </div>

                                    <!-- Guest Photos Gallery -->
                                    <div class="testimonial-photos-wrapper mt-4">
                                        <div class="testimonial-photos-gallery d-flex flex-wrap justify-content-center gap-2 gap-sm-3" id="testimonial-photos">
                                            <!-- Populated via JS -->
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- Next Arrow Button -->
                            <button class="testimonial-arrow testimonial-arrow-next" id="testimonial-next-btn" aria-label="Next Testimonial">
                                <i class="bi bi-chevron-right"></i>
                            </button>

                        </div>

                        <!-- Pagination Dots -->
                        <div class="testimonial-dots-wrapper d-flex justify-content-center align-items-center gap-2 mt-4" id="testimonial-dots">
                            <!-- Populated via JS -->
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonial Photo Lightbox Modal -->
        <div class="testimonial-lightbox" id="testimonial-lightbox">
            <div class="lightbox-backdrop" id="lightbox-backdrop"></div>
            <div class="lightbox-dialog">
                <button class="lightbox-close" id="lightbox-close-btn" aria-label="Close Lightbox">
                    <i class="bi bi-x-lg"></i>
                </button>
                <button class="lightbox-nav-btn lightbox-nav-prev" id="testimonial-lightbox-prev" aria-label="Previous Photo">
                    <i class="bi bi-chevron-left"></i>
                </button>
                <img id="testimonial-lightbox-img" src="" alt="Guest Photo View" class="lightbox-img">
                <button class="lightbox-nav-btn lightbox-nav-next" id="testimonial-lightbox-next" aria-label="Next Photo">
                    <i class="bi bi-chevron-right"></i>
                </button>
                <div class="lightbox-photo-counter text-white" id="testimonial-lightbox-counter"></div>
            </div>
        </div>

      
        <!-- 8. Map Section -->
        <section class="position-relative" id="map-section">
            <div id="map" style="height: 500px"></div>
            <div class="map-card-overlay bg-white p-4 rounded-4 shadow-lg text-center text-md-start">
                <h4 class="fw-bold mb-2 blue-purple-gradient-text d-flex align-items-center justify-content-center justify-content-md-start">
                    <i class="bi bi-geo-alt-fill me-2"></i> Explore Rann Utsav
                </h4>
                <p class="mb-3">
                    Discover the magic across the White Desert.
                </p>
                <a href="https://maps.google.com/?q=23.8391,69.6905" target="_blank" class="btn fw-bold text-white rounded-pill px-4 py-2 border-0 map-cta-btn">
                    VIEW ON MAP
                </a>
            </div>
        </section>

    </div>

    <!-- 9. Footer Section -->
    <footer id="footer" class="bg-dark text-white pt-5 pb-4">
        <div class="container text-md-start">
            <div class="row g-4 justify-content-between">
                <!-- Column 1: Logo & Tagline -->
                <div class="col-lg-3 col-md-6">
                    <img src="./assets/logo-white.svg" alt="Majestic Escape Logo" class="img-fluid mb-3" style="max-height: 45px;">
                    <p class="text-white-50">
                        Crafting journeys that become <br><span class="cursive-text" style="font-family: 'Meddon', cursive; font-size: 18px; color: #FAD42C;">your favorite</span> memories.
                    </p>
                    <div class="mt-3">
                        <a href="https://www.instagram.com/themajesticescape" target="_blank" aria-label="Instagram" class="text-white me-3 fs-5 hover-warning"><i class="bi bi-instagram"></i></a>
                        <a href="https://www.facebook.com/profile.php?id=61567800352990" target="_blank" aria-label="Facebook" class="text-white me-3 fs-5 hover-warning"><i class="bi bi-facebook"></i></a>
                        <a href="https://wa.me/+917219666822" target="_blank" aria-label="WhatsApp" class="text-white fs-5 hover-warning"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>

                <!-- Column 2: Quick Links -->
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white fw-bold mb-3" style="font-size: 16px; letter-spacing: 1px;">Quick Links</h5>
                    <ul class="list-unstyled footer-links">
                        <li class="mb-2"><a href="#about" class="text-white-50 text-decoration-none hover-white" style="font-size: 14px;">About Rann Utsav</a></li>
                        <li class="mb-2"><a href="#activities" class="text-white-50 text-decoration-none hover-white" style="font-size: 14px;">Experiences</a></li>
                        <li class="mb-2"><a href="#booking" class="text-white-50 text-decoration-none hover-white" style="font-size: 14px;">Itinerary</a></li>
                        <li class="mb-2"><a href="#tents-showcase" class="text-white-50 text-decoration-none hover-white" style="font-size: 14px;">Accommodation</a></li>
                        <li class="mb-2"><a href="#footer" class="text-white-50 text-decoration-none hover-white" style="font-size: 14px;">Contact</a></li>
                    </ul>
                </div>

                <!-- Column 3: Helpful Links -->
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white fw-bold mb-3" style="font-size: 16px; letter-spacing: 1px;">Helpful Links</h5>
                    <ul class="list-unstyled footer-links">
                        <li class="mb-2"><a href="#booking" class="text-white-50 text-decoration-none hover-white" style="font-size: 14px;">Plan Your Trip</a></li>
                        <li class="mb-2"><a href="#booking" class="text-white-50 text-decoration-none hover-white" style="font-size: 14px;">FAQs</a></li>
                        <li class="mb-2"><a href="#booking" class="text-white-50 text-decoration-none hover-white" style="font-size: 14px;">Travel Guide</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none hover-white" style="font-size: 14px;" data-bs-toggle="modal" data-bs-target="#termsModal">Terms & Conditions</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none hover-white" style="font-size: 14px;" data-bs-toggle="modal" data-bs-target="#privacyPolicyModal">Privacy Policy</a></li>
                    </ul>
                </div>

                <!-- Column 4: Contact Us -->
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white fw-bold mb-3" style="font-size: 16px; letter-spacing: 1px;">Contact Us</h5>
                    <ul class="list-unstyled text-white-50 contact-info" style="font-size: 14px;">
                        <li class="mb-2 d-flex align-items-center"><i class="bi bi-telephone text-white me-2"></i> +91 72196 66822</li>
                        <li class="mb-2 d-flex align-items-center"><i class="bi bi-envelope text-white me-2"></i> support@majesticescape.in</li>
                        <li class="mb-2 d-flex align-items-start"><i class="bi bi-geo-alt text-white me-2 mt-1"></i> Dhordo, Kutch, Gujarat, India</li>
                    </ul>
                </div>
            </div>

            <hr class="my-4 border-secondary opacity-25">

            <!-- Footer Bottom -->
            <div class="row align-items-center text-center text-md-start">
                <div class="col-md-6 text-white-50" style="font-size: 13px;">
                    &copy; 2025 Majestic Escape. All rights reserved.
                </div>
                <div class="col-md-6 text-md-end text-white-50 mt-2 mt-md-0" style="font-size: 13px;">
                    Designed by <a href="https://coderelix.com" target="_blank" class="text-warning text-decoration-none fw-bold hover-underline">CodeRelix</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Privacy Policy Modal -->
    <div class="modal fade" id="privacyPolicyModal" tabindex="-1" aria-labelledby="privacyPolicyModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="privacyPolicyModalLabel">Privacy Policy</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Last Updated:</strong> 09 August 2025</p>

                    <h6>1. Introduction</h6>
                    <p>Welcome to Majestic Escape. This Privacy Policy explains how we collect, use, and protect the
                        information you provide when visiting this landing page and submitting our itinerary request
                        form. This policy applies only to this promotional page and its related campaigns, not to the
                        full Majestic Escape website or other services.</p>

                    <h6>2. Information We Collect</h6>
                    <p>When you use our landing page, we may collect:</p>
                    <p>- <strong>Personal Information:</strong> Your name, email address, phone number, and traveller
                        type.</p>
                    <p>- <strong>Non-Personal Information:</strong> Browser type, device type, IP address, general
                        location, pages visited, time spent on the site, and interactions with our forms or buttons.
                        This data may be collected automatically through cookies, tracking pixels, and third-party
                        analytics tools.</p>

                    <h6>3. Use of Google Analytics</h6>
                    <p>We use Google Analytics to:</p>
                    <p>- Understand how visitors interact with our landing page<br>
                        - Measure the effectiveness of our ads and campaigns<br>
                        - Improve user experience</p>
                    <p>Google may set cookies or read existing cookies in your browser.</p>
                    <p>Learn more: <a href="https://policies.google.com/technologies/partner-sites"
                            target="_blank">Google Partner Sites Policy</a><br>
                        Opt-out: <a href="https://tools.google.com/dlpage/gaoptout" target="_blank">Google Analytics
                            Opt-out</a></p>

                    <h6>4. Use of Meta Pixel</h6>
                    <p>We use Meta Pixel (formerly Facebook Pixel) to:</p>
                    <p>- Measure ad performance on Facebook and Instagram<br>
                        - Build audiences for remarketing<br>
                        - Deliver ads more relevant to your interests</p>
                    <p>Learn more: <a href="https://www.facebook.com/policy.php" target="_blank">Meta Privacy
                            Policy</a><br>
                        Adjust ad preferences: <a href="https://www.facebook.com/ads/preferences" target="_blank">Meta
                            Ad Preferences</a></p>

                    <h6>5. How We Use Your Information</h6>
                    <p>We use your information to:</p>
                    <p>- Respond to your itinerary request<br>
                        - Provide details and offers related to the Rann Utsav<br>
                        - Measure ad and campaign performance<br>
                        - Improve our landing page experience<br>
                        - Send follow-up communication related to your inquiry</p>

                    <h6>6. Sharing of Information</h6>
                    <p>We do not sell your personal information. We may share it only with internal travel consultants
                        and trusted service providers.</p>

                    <h6>7. Cookies & Tracking</h6>
                    <p>Our landing page may use cookies, tracking pixels, and similar technologies to enable features,
                        track ads, and measure visitor behavior.</p>

                    <h6>8. Data Security</h6>
                    <p>We take reasonable steps to protect your personal data. However, no internet transmission is 100%
                        secure.</p>

                    <h6>9. Changes to This Policy</h6>
                    <p>We may update this policy, and changes will be posted here with a revised date.</p>

                    <h6>11. Contact Us</h6>
                    <p>For any questions or concerns, please contact us at:<br>
                        Email: <a href="mailto:support@majesticescape.in">support@majesticescape.in</a></p>
                </div>
                <div class="modal-footer bt-none">
                </div>
            </div>
        </div>
    </div>

    <!-- Terms Modal -->
    <div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="termsModalLabel">Terms of Service</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Last Updated:</strong> 09 August 2025</p>

                    <h6>1. Introduction</h6>
                    <p>Welcome to Majestic Escape. These Terms of Service govern your use of this promotional landing
                        page and participation in our Rann Utsav campaign. By using this page and submitting the
                        itinerary request form, you agree to these terms.</p>

                    <h6>2. Scope of Services</h6>
                    <p>This landing page is designed for promotional purposes only. It allows you to request
                        itineraries, pricing, and offers related to the Rann Utsav in Rann of Kutch. The information
                        provided here is indicative and may change without notice.</p>

                    <h6>3. Accuracy of Information</h6>
                    <p>While we strive to provide accurate and updated information, Majestic Escape does not guarantee
                        the completeness, accuracy, or availability of all details on this landing page. Prices,
                        itineraries, and offers are subject to confirmation at the time of booking.</p>

                    <h6>4. User Responsibilities</h6>
                    <p>By using this page, you agree to:</p>
                    <p>- Provide accurate and complete details in the form.<br>
                        - Not use this page for unlawful purposes.<br>
                        - Not attempt to disrupt or interfere with the website's functionality.</p>

                    <h6>5. No Direct Booking via Landing Page</h6>
                    <p>This landing page does not process payments or confirm bookings directly. All bookings will be
                        finalized through our official booking process after you submit your inquiry.</p>

                    <h6>6. Limitation of Liability</h6>
                    <p>Majestic Escape will not be liable for any loss, damage, or inconvenience caused by reliance on
                        the information on this page, delays in response, or third-party services linked through our
                        campaigns.</p>

                    <h6>7. External Links</h6>
                    <p>This landing page may contain links to external sites such as Google, Facebook, Instagram, or
                        payment gateways. Majestic Escape is not responsible for the content, policies, or practices of
                        these third-party sites.</p>

                    <h6>8. Changes to the Campaign</h6>
                    <p>We reserve the right to modify, suspend, or terminate this campaign or landing page at any time
                        without prior notice.</p>

                    <h6>9. Privacy</h6>
                    <p>Your use of this page is also governed by our Privacy Policy, which explains how we collect and
                        use your data. Please review it for more details.</p>

                    <h6>10. Governing Law</h6>
                    <p>These Terms shall be governed by and interpreted in accordance with the laws of India, without
                        regard to conflict of law principles.</p>

                    <h6>11. Contact Us</h6>
                    <p>For questions about these Terms of Service, please contact us at:<br>
                        Email: <a href="mailto:support@majesticescape.in">support@majesticescape.in</a></p>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>

    <!-- Referral Modal -->
    <div class="modal fade" id="referralModal" tabindex="-1" aria-labelledby="referralModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="referralModalLabel">
                        Referral
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6>🎉 Refer & Earn with Majestic Escape – Rann Utsav Booking</h6>
                    <p>
                        Planning a trip to the magical <strong>Rann Utsav</strong>?<br>
                        Make it even more rewarding by referring your friends and family to
                        book with <strong>Majestic Escape</strong>.
                    </p>

                    <h6>💰 Referral Reward</h6>
                    <p>
                        Get a <strong>₹500 Amazon Voucher*</strong> for every successful
                        referral booking.
                    </p>

                    <h6>✅ How It Works</h6>
                    <p>
                        1. Refer your friends or family to book their Rann Utsav trip via Majestic Escape<br>
                        2. They complete the booking successfully<br>
                        3. After their successful check-out, you receive a ₹500 Amazon voucher
                    </p>

                    <h6>📍 Terms & Conditions*</h6>
                    <p>
                        1. Referral is valid only for friends and family<br>
                        2. The referred person must successfully complete the booking<br>
                        3. The Amazon voucher will be issued only after the referred customer checks out
                        successfully<br>
                        4. Voucher will not be issued for cancelled, no-show, or incomplete bookings<br>
                        5. Majestic Escape reserves the right to modify or withdraw the offer without prior notice<br>
                        6. The referral offer is applicable only to individuals who have completed a confirmed booking
                        with
                        Majestic Escape.
                    </p>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>

    <!-- Cancellation Policy Modal -->
    <div class="modal fade" id="cancellationPolicyModal" tabindex="-1" aria-labelledby="cancellationPolicyModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cancellationPolicyModalLabel">Cancellation & Refund Policy</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Last Updated:</strong> 08 September 2025</p>

                    <h6>1. Cancellation 30 Days or More</h6>
                    <p>90% refund will be provided if cancelled more than or equal to 30 days prior to the scheduled
                        arrival date.</p>

                    <h6>2. Cancellation Between 15-29 Days</h6>
                    <p>60% refund will be provided if cancelled more than or equal to 15 days prior to the scheduled
                        arrival date but less than 30 days prior to the scheduled arrival date.</p>

                    <h6>3. Cancellation Less Than 15 Days</h6>
                    <p>No refund will be provided if cancelled less than 15 days prior to the scheduled arrival date.
                    </p>

                    <h6>4. Change in Check-in Date</h6>
                    <p>In case of any change in check-in date, 15% of the total booking amount will be charged.</p>

                    <h6>5. Change of Primary Guest Name</h6>
                    <p>In case of a change in the Primary Guest Name, 5% of the total booking amount will be charged.
                    </p>

                    <h6>6. Downgrade of Room Category</h6>
                    <p>In case the existing room category is downgraded, 5% of the total booking amount will be charged.
                    </p>

                    <h6>7. Taxes</h6>
                    <p>Rates are exclusive of applicable taxes.</p>

                    <h6>8. GST</h6>
                    <p>GST shall be charged as applicable.</p>

                    <h6>9. Triple Occupancy</h6>
                    <p>In case of triple occupancy, any person above 6 years of age will be charged as an extra person
                        (with mattress).</p>

                    <p><strong>Note:</strong> The organiser reserves all rights to make any changes without prior
                        notice.</p>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>

    <!-- Success Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-center">
                <div class="modal-header border-0">
                    <h5 class="modal-title w-100" id="successModalLabel">🎉 Thank You!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Thank you for requesting your itinerary! Our travel experts are crafting the perfect Rann Utsav
                        experience for you. Magic is on its way!</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Google Maps API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhfs0hlPrtAjX1wXb2ay9Mlw23yl2D-Og&callback=initMap"
        async defer></script>
    <!-- Custom JS -->
    <script src="./script.js"></script>
</body>

</html>