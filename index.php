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
        (function(w, d, s, l, i) {
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
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
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
    <title>Rann of Kutch Festival</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./style.css?v=0.2">
</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W73276NQ"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <?php $eventDate = new DateTime('2025-10-23');
    $now = new DateTime();
    // $interval = $now->diff($eventDate);
    // $days = $interval->days;

    // if ($days > 23) {
    //     $bookingEndDate = new DateTime('2025-09-30');
    // } else if ($days > 13) {
    //     $bookingEndDate = new DateTime('2025-10-10');
    // } else if ($days > 3) {
    //     $bookingEndDate = new DateTime('2025-10-20');
    // } else {
    //     $bookingEndDate = new DateTime('2025-10-23');
    // }


    $fullMoonDates = [
        new DateTime('2025-11-06'),
        new DateTime('2025-12-05'),
        new DateTime('2026-01-04'),
        new DateTime('2026-01-31'),
        new DateTime('2026-02-02'),
        new DateTime('2026-03-04'),
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
    <div class="main">
        <section id="banner" class="">
            <!-- Navbar Start -->
            <!-- <img src="./banner.jpg?v=0.2" alt="Rann of Kutch Banner" class="img-fluid banner-image"> -->
            <nav class="navbar navbar-sticky navbar-expand-lg navbar-light py-4">
                <div class="container-fluid px-5">
                    <a class="navbar-brand fw-bold text-primary" href="#">
                        <img src="./logo-white.svg" alt="Majestic Escape Logo" id="header-logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <div class="menu-icon">
                            <span>MENU</span>
                        </div>
                        <!-- <img src="./dropdown.svg" alt="Menu Icon" class="menu-icon"> -->
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto fs-5">
                            <li class="nav-item">
                                <a class="nav-link" href="#booking">Book Now!</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#activities">Activities</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#gallery">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="#"
                                    data-bs-toggle="modal"
                                    data-bs-target="#referralModal">
                                    Referral
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
            <div class="container-fluid banner-container">
                <div class="d-none d-lg-flex banner-text">
                    <img src="./rann-of-kutch.png?v=0.2" class="rann-of-kutch-logo">
                    <p class="text-center mt-0">
                        <!-- <span class="card-sm-text">From</span><br>23rd Oct 2025 <br><span class="card-sm-text">to</span><br>04th Mar 2026 -->
                        <span class="tagline">Culture • Colors • Celebration</span>
                    </p>

                    <img src="./date.png?v=0.2" class="date-card-img">

                    <a href="#booking" id="book-now-button" class="btn btn-sm fs-5 px-5 py-3 mt-4">
                        CRAFT MY ESCAPE!
                    </a>
                    <br>
                    <h4 class="text-center text-light">
                        <b>Experience the best with Majestic Escape!</b>
                    </h4>
                </div>

                <div class="d-flex d-lg-none banner-text">
                    <span>
                        <img src="./rann-of-kutch.png?v=0.2" class="rann-of-kutch-logo">
                        <p class="text-center mt-0">
                            <!-- <span class="card-sm-text">From</span><br>23rd Oct 2025 <br><span class="card-sm-text">to</span><br>04th Mar 2026 -->
                            <span class="tagline text-light">Culture • Colors • Celebration</span>
                        </p>
                        <img src="./date.png?v=0.2" class="date-card-img">
                    </span>

                    <span>

                        <a href="#booking" id="book-now-button" class="btn btn-sm fs-5 px-5 py-3 m-4 d-block">
                            CRAFT MY ESCAPE!
                        </a>
                        <h4 class="text-center text-dark experience-text">
                            <b>Experience the best with<br>Majestic Escape!</b>
                        </h4>
                    </span>
                </div>
            </div>

            <!-- <span class="d-block d-md-none">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <img src="./rann-of-kutch.png?v=0.2" class="w-75">
                </div>
                <p class="text-center mt-0">From 23rd Oct 2025 to 04th Mar 2026<br><br>
                    <b>Experience the best with Majestic Escape!</b>
                </p>

                <a href="#explore-now" class="btn btn-lg btn-warning d-block m-auto w-50">
                    Explore Now!
                </a>
            </span> -->

        </section>
        <section id="countdown-section" class="align-items-center mt-6">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-8 text-center text-md-start mb-4 mb-md-0">
                        <h2 class="fw-bold mb-3 cta-text">Book before the <span class="fs-big light-text-stroke"><br
                                    class="d-block d-md-none">next full moon </span> <br class="d-block d-none-md">to
                            get the best deals with Majestic Escape!</h2>
                    </div>
                    <div class="col-md-4 text-center m-auto">
                        <div id="countdown" class="d-flex flex-wrap gap-2 justify-content-center">
                            <div><span id="days">00</span><span class="countdown-subtext">d</span></div>
                            <div class="d-none d-md-block">:</div>
                            <!-- <div class="w-100 d-block d-md-none"></div> -->
                            <div><span id="hours">00</span><span class="countdown-subtext">h</span></div>
                            <div class="d-none d-md-block">:</div>
                            <!-- <div class="w-100 d-block d-md-none"></div> -->
                            <div><span id="minutes">00</span><span class="countdown-subtext">m</span></div>
                            <div class="d-none d-md-block">:</div>
                            <!-- <div class="w-100 d-block d-md-none"></div> -->
                            <div><span id="seconds">00</span><span class="countdown-subtext">s</span></div>
                        </div>
                        <!-- <div id="book-now-button-div">
                            <a href="#booking" id="book-now-button" class="btn btn-sm px-5 py-3  mt-4">
                                CRAFT MY ESCAPE!
                            </a>
                        </div> -->
                        <!-- <p class="text-light"> -->
                        <!--?php echo 'Full moon ends ' . $bookingEndDate->format('d M Y'); ?-->
                        <!-- </p> -->
                    </div>
                </div>
            </div>
            <span id="explore-now"></span>
        </section>

        <section id="booking" class="section px-2 bg-fixed">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center">
                    <br class="d-block d-md-none">
                    <h1 class="section-title text-light mb-4">Ready For <span class="pink-text">Kutch</span>?<br> Let's
                        Curate Your Journey!</h1>
                </div>

                <div class="col-md-8 offset-md-2">
                    <form id="booking-form" method="POST" action="">
                        <p class="mb-4 subtitle text-center">
                            Unveil the White Desert and get your custom itinerary now!
                        </p>
                        <div class="row form-row">
                            <div class="col-md-12 d-none" id="form-duplicate-div">
                                <div id="form-error" class="alert p-3 text-center">You have already filled the form. Our team will reach out to you shortly!</div>
                            </div>
                            <div class="col-md-12 d-none" id="form-error-div">
                                <div id="form-error" class="alert p-3 text-center">Please share all the required details so we can send you the perfect Rann Utsav itinerary.</div>
                            </div>
                            <div class="col-md-12 d-none" id="form-failed-div">
                                <div id="form-failed" class="alert p-3 text-center">Oops! Something went wrong while submitting your form. Please try again.</div>
                            </div>
                            <div class="col-md-6">
                                <input type="hidden" class="form-control" id="source" name="source"
                                    value="<?php echo isset($_GET['utm_source']) ? htmlspecialchars($_GET['utm_source']) : 'direct'; ?>">
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Enter your name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Enter  your email" required>
                            </div>

                            <div class="col-md-6">
                                <input type="tel" class="form-control" id="phone" name="phone"
                                    placeholder="Enter your WhatsApp number" required>
                            </div>
                            <!-- <div class="col-md-6">
                                <label for="guest-count" class="form-label">Guest Count</label>
                                <input type="number" class="form-control" id="guest-count" name="guest_count"
                                    placeholder="Enter the guest count" required>
                            </div>

                            <div class="col-md-6">
                                <label for="start-date" class="form-label">Start Date</label>
                                <input type="date" class="form-control" id="start-date" name="start_date" required>
                            </div>

                            <div class="col-md-6">
                                <label for="end-date" class="form-label">End Date</label>
                                <input type="date" class="form-control" id="end-date" name="end_date" required>
                            </div> -->

                            <div class="col-md-6">
                                <select class="form-select" id="traveller-type" name="traveller_type" required>
                                    <option value="" disabled selected>What type of traveller are you?</option>
                                    <option value="Solo">Solo</option>
                                    <option value="Couple">Couple</option>
                                    <option value="Family">Family</option>
                                    <option value="Group">Group</option>
                                    <option value="Corporate">Corporate</option>
                                </select>
                            </div>
                            <!-- <div class="col-md-6">
                                <label for="source" class="form-label">How did you hear about us?</label>
                                <select class="form-select" id="source" name="source" required>
                                    <option value="" disabled selected>Select source</option>
                                    <option value="google">Google Search</option>
                                    <option value="instagram">Instagram</option>
                                    <option value="facebook">Facebook</option>
                                    <option value="friend">Friend/Family</option>
                                    <option value="travel-agency">Travel Agency</option>
                                    <option value="other">Other</option>
                                </select>
                            </div> -->
                        </div>
                        <br>
                        <div class="row form-row">
                            <div class="col-md-12">

                                <button class="form-control btn btn-warning btn-md px-5 w-100 send-itinerary-button"
                                    type="submit" id="send-itinerary-button">
                                    CRAFT MY ESCAPE!
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <section id="about" class="section">
            <div class="row">
                <div id="about-img-section" class="col-md-6">

                </div>
                <div class="col-md-6 about-div">
                    <h1 class="section-title mb-4 pink-text" id="about-title">Rann Utsav <br class="d-block d-lg-none">2025-2026</h1>
                    <p class="text-dark fs-5 about-para">
                        The Rann of Kutch is a salt marsh located in the Thar Desert in the Kutch district of Gujarat,
                        India.
                        It is known for its stunning white salt desert, vibrant culture, and unique wildlife. The region
                        comes alive during the Rann Utsav, a festival celebrating local art, crafts, music, and
                        dance.<br><br>

                        Rann Utsav 2025 begins on 23 October 2025 and runs till 4 March 2026, hosted in Dhordo, a small
                        village on the edge of the White Rann in Gujarat's Kutch district. The festival spans over 100
                        days,
                        thanks to Gujarat Tourism, and brings the salt marsh to life with cultural vibrancy and curated
                        experiences.
                    </p>
                </div>
            </div>
        </section>

        <section id="activities" class="section pb-4">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="section-title mb-4 pink-text">Live The Colors Of Kutch<span
                            class="d-none d-md-block"></span><span class="d-inline-block d-md-none">,</span> One
                        Experience At A Time!</h1>
                    <p class="subtitle mb-4">
                        Immerse yourself in the vibrant culture and traditions of the Rann of Kutch with our curated
                        activities.
                    </p>
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
                </div>
            </div>
        </section>

        <section id="festival" class="align-items-center pb-5">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-between">
                    <!-- <div class="col-md-4 p-0">
                                <img src="./dance.png?v=0.2" id="festival-dance-img" alt="Rann of Kutch Festival" class="img-fluid">
                            </div> -->
                    <div class="col-md-8 offset-md-2 text-center mb-4 mb-md-0">
                        <h2 class="fw-bold mb-3 text-light lh-base">
                            <!-- <span id="festival-days" class="fs-huge pink-text"></span> -->
                            <br class="d-none d-md-block">The magic of <span class="">
                                <img src="./rann-of-kutch.png?v=0.2" class="d-inline-block d-md-none w-50">
                                <img src="./rann-of-kutch.png?v=0.2" class="d-none d-md-inline-block w-25">
                            </span> has begun!
                        </h2>
                        <p class="text-light">
                            Get ready for a celebration of culture, color, and endless white sands! Your Kutch journey
                            starts here - plan with us today!
                        </p>
                    </div>
                    <div class="col-md-4 offset-md-4">

                        <a href="#booking" class="form-control btn btn-sm w-auto px-5 w-50 send-itinerary-button"
                            type="button">
                            CRAFT MY KUTCH ESCAPE
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="gallery">
            <div class="container-fluid p-0">
                <div id="galleryCarousel" class="carousel slide d-none d-lg-block" data-bs-ride="carousel"
                    data-bs-interval="2000">
                    <div class="carousel-inner">
                        <!-- Slide 1 -->
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-4 m-0 p-0">
                                    <img src="./gallery/gallery2.jpg?v=0.2" alt="Gallery Image 2" class="img-fluid">
                                </div>
                                <div class="col-md-4 m-0 p-0">
                                    <img src="./gallery/gallery11.jpg?v=0.2" alt="Gallery Image 8" class="img-fluid">
                                </div>
                                <div class="col-md-4 m-0 p-0">
                                    <img src="./gallery/gallery3.jpg?v=0.2" alt="Gallery Image 3" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <!-- Slide 2 -->
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4 m-0 p-0">
                                    <img src="./gallery/gallery5.jpg?v=0.2" alt="Gallery Image 5" class="img-fluid">
                                </div>
                                <div class="col-md-4 m-0 p-0">
                                    <img src="./gallery/gallery4.jpg?v=0.2" alt="Gallery Image 4" class="img-fluid">
                                </div>
                                <div class="col-md-4 m-0 p-0">
                                    <img src="./gallery/gallery10.jpg?v=0.2" alt="Gallery Image 6" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <!-- Slide 3 -->
                        <div class="carousel-item">
                            <div class="row">

                                <div class="col-md-4 m-0 p-0">
                                    <img src="./gallery/gallery7.jpg?v=0.2" alt="Gallery Image 7" class="img-fluid">
                                </div>
                                <div class="col-md-4 m-0 p-0">
                                    <img src="./gallery/gallery12.jpg?v=0.2" alt="Gallery Image 9" class="img-fluid">
                                </div>
                                <div class="col-md-4 m-0 p-0">
                                    <img src="./gallery/gallery1.jpg?v=0.2" alt="Gallery Image 1" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-custom-controls">
                        <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>

                        <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

                <div id="mobGalleryCarousel" class="carousel slide d-block d-lg-none" data-bs-ride="carousel"
                    data-bs-interval="2000">
                    <div class="carousel-inner">
                        <div class="row">
                            <div class="carousel-item active">
                                <div class="col-lg-4 m-0 p-0">
                                    <img src="./gallery/gallery1.jpg?v=0.2" alt="Gallery Image 1" class="img-fluid">
                                </div>
                            </div>
                            <div class="carousel-item">

                                <div class="col-lg-4 m-0 p-0">
                                    <img src="./gallery/gallery2.jpg?v=0.2" alt="Gallery Image 2" class="img-fluid">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-lg-4 m-0 p-0">
                                    <img src="./gallery/gallery3.jpg?v=0.2" alt="Gallery Image 3" class="img-fluid">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-lg-4 m-0 p-0">
                                    <img src="./gallery/gallery5.jpg?v=0.2" alt="Gallery Image 5" class="img-fluid">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-lg-4 m-0 p-0">
                                    <img src="./gallery/gallery4.jpg?v=0.2" alt="Gallery Image 4" class="img-fluid">
                                </div>
                            </div>
                            <div class="carousel-item">

                                <div class="col-lg-4 m-0 p-0">
                                    <img src="./gallery/gallery7.jpg?v=0.2" alt="Gallery Image 7" class="img-fluid">
                                </div>
                            </div>
                            <div class="carousel-item">

                                <div class="col-lg-4 m-0 p-0">
                                    <img src="./gallery/gallery10.jpg?v=0.2" alt="Gallery Image 10" class="img-fluid">
                                </div>
                            </div>
                            <div class="carousel-item">

                                <div class="col-lg-4 m-0 p-0">
                                    <img src="./gallery/gallery11.jpg?v=0.2" alt="Gallery Image 11" class="img-fluid">
                                </div>
                            </div>
                            <div class="carousel-item">

                                <div class="col-lg-4 m-0 p-0">
                                    <img src="./gallery/gallery12.jpg?v=0.2" alt="Gallery Image 12" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-custom-controls">
                        <button class="carousel-control-prev" type="button" data-bs-target="#mobGalleryCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>

                        <button class="carousel-control-next" type="button" data-bs-target="#mobGalleryCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <section class="">
            <div id="map" style="height: 500px"></div>
        </section>

        <section class="section-margin pt-5 w-100" id="brought-by">
            <!-- <h4 class="text-muted text-center">Brought To You By</h4> -->
            <img src="./logo.png?v=0.2" alt="Majestic Escape Logo" class="img-fluid" id="footer-logo">
        </section>
    </div>

    <footer id="footer" class="section-margin text-center py-5">
        <div class="container h-100">
            <div class="row align-items-end">
                <div class="col-md-4 text-md-start mb-3 mb-md-0">
                    <!-- <p class="mb-0 text-light">Policy</p> -->
                    <a href="#" class="mb-0 text-light" data-bs-toggle="modal" data-bs-target="#privacyPolicyModal">
                        Privacy Policy
                    </a><br>
                    <a href="#" class="mb-0 text-light" data-bs-toggle="modal" data-bs-target="#termsModal">
                        Terms of Service
                    </a><br>
                    <a href="#" class="mb-0 text-light" data-bs-toggle="modal" data-bs-target="#cancellationPolicyModal">
                        Cancellation & Refund Policy
                    </a>
                </div>
                <div class="col-md-4 d-flex flex-column align-items-center justify-content-center">
                    <p class="mb-0 text-light">
                        &copy; 2025 Majestic Escape. All rights reserved.
                    </p>
                    <p class="mb-0 text-light">
                        Designed by <a href="https://coderelix.com" target="_blank"
                            class="text-decoration-none">CodeRelix</a>
                    </p>
                </div>
                <div class="col-md-4 text-md-end mt-2">
                    <p class="mb-0 text-light">Social Links</p>
                    <a href="https://www.instagram.com/themajesticescape" target="_blank" aria-label="Instagram"
                        class="text-light fs-4 pr-2">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="https://www.facebook.com/profile.php?id=61567800352990" target="_blank"
                        aria-label="Facebook" class="text-light fs-4 px-2">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="https://wa.me/+917219666822" target="_blank" aria-label="WhatsApp"
                        class="text-light fs-4 pl-2">
                        <i class="bi bi-whatsapp"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>

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
                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                </div>
            </div>
        </div>
    </div>

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
                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="referralModal" tabindex="-1"
        aria-labelledby="referralModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="referralModalLabel">
                        Referral
                    </h5>
                    <button type="button" class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <h6>Refer & Earn with Majestic Escape – Rann Utsav Booking</h6>

                    <p>
                        Planning a trip to the magical <strong>Rann Utsav</strong>?<br>
                        Make it even more rewarding by referring your friends and family to
                        book with <strong>Majestic Escape</strong>.
                    </p>

                    <h6>Referral Reward</h6>
                    <p>
                        Get a <strong>₹500 Amazon Voucher*</strong> for every successful
                        referral booking.
                    </p>

                    <h6>How It Works</h6>
                    <p>
                        1. Refer your friends or family to book their Rann Utsav trip via Majestic Escape<br>
                        2. They complete the booking successfully<br>
                        3. After their successful check-out, you receive a ₹500 Amazon voucher
                    </p>

                    <h6>Terms & Conditions*</h6>
                    <p>
                        1. Referral is valid only for friends and family<br>
                        2. The referred person must successfully complete the booking<br>
                        3. The Amazon voucher will be issued only after the referred customer checks out successfully<br>
                        4. Voucher will not be issued for cancelled, no-show, or incomplete bookings<br>
                        5. Majestic Escape reserves the right to modify or withdraw the offer without prior notice
                    </p>

                </div>


                <div class="modal-footer">
                </div>

            </div>
        </div>
    </div>


    <div class="modal fade" id="cancellationPolicyModal" tabindex="-1" aria-labelledby="cancellationPolicyModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cancellationPolicyModalLabel">Cancellation & Refund Policy</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <p><strong>Last Updated:</strong> 08 September 2025</p>

                    <h6>1. Cancellation 30 Days or More</h6>
                    <p>90% refund will be provided if cancelled more than or equal to 30 days prior to the scheduled arrival date.</p>

                    <h6>2. Cancellation Between 15-29 Days</h6>
                    <p>60% refund will be provided if cancelled more than or equal to 15 days prior to the scheduled arrival date but less than 30 days prior to the scheduled arrival date.</p>

                    <h6>3. Cancellation Less Than 15 Days</h6>
                    <p>No refund will be provided if cancelled less than 15 days prior to the scheduled arrival date.</p>

                    <h6>4. Change in Check-in Date</h6>
                    <p>In case of any change in check-in date, 15% of the total booking amount will be charged.</p>

                    <h6>5. Change of Primary Guest Name</h6>
                    <p>In case of a change in the Primary Guest Name, 5% of the total booking amount will be charged.</p>

                    <h6>6. Downgrade of Room Category</h6>
                    <p>In case the existing room category is downgraded, 5% of the total booking amount will be charged.</p>

                    <h6>7. Taxes</h6>
                    <p>Rates are exclusive of applicable taxes.</p>

                    <h6>8. GST</h6>
                    <p>GST shall be charged as applicable.</p>

                    <h6>9. Triple Occupancy</h6>
                    <p>In case of triple occupancy, any person above 6 years of age will be charged as an extra person (with mattress).</p>

                    <p><strong>Note:</strong> The organiser reserves all rights to make any changes without prior notice.</p>

                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
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



</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhfs0hlPrtAjX1wXb2ay9Mlw23yl2D-Og&callback=initMap" async
    defer></script>


<script>
    // Set the date for the festival start
    const bookingOfferEndDate = new Date("<?= $bookingEndDate->format('Y-m-d') ?>T00:00:00").getTime();
    const festivalDate = new Date("2025-10-24T00:00:00").getTime();

    function updateCountdown() {
        const now = new Date().getTime();
        const distance = bookingOfferEndDate - now;
        const festivalDistance = festivalDate - now;

        const days = Math.max(0, Math.floor(distance / (1000 * 60 * 60 * 24)));
        const hours = Math.max(0, Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)));
        const minutes = Math.max(0, Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60)));
        const seconds = Math.max(0, Math.floor((distance % (1000 * 60)) / 1000));
        // const festivalDays = Math.max(0, Math.floor(festivalDistance / (1000 * 60 * 60 * 24)));

        document.getElementById("days").textContent = String(days).padStart(2, '0');
        document.getElementById("hours").textContent = String(hours).padStart(2, '0');
        document.getElementById("minutes").textContent = String(minutes).padStart(2, '0');
        document.getElementById("seconds").textContent = String(seconds).padStart(2, '0');
        // document.getElementById("festival-days").textContent = String(festivalDays).padStart(2, '0');
    }

    updateCountdown();
    setInterval(updateCountdown, 1000);
</script>


<script>
    window.addEventListener('scroll', () => {
        const button = document.getElementById("book-now-button-div");
        if (window.scrollY > window.innerHeight + 420) {
            button.classList.add('sticky-button');
        } else {
            button.classList.remove('sticky-button');
        }
    });
</script>

<script>
    function initMap() {
        const locations = [{
                lat: 23.8391,
                lng: 69.6905,
                title: "Dhordo Tent City"
            },
            {
                lat: 23.8998,
                lng: 69.6950,
                title: "White Desert View Point"
            },
            {
                lat: 23.9315,
                lng: 69.5504,
                title: "Kala Dungar (Black Hill)"
            },
            {
                lat: 23.9428,
                lng: 69.5337,
                title: "Kalo Dungar Magnetic Hill Point"
            },
            {
                lat: 22.8328,
                lng: 69.3467,
                title: "Mandvi Beach"
            },
            {
                lat: 23.2504,
                lng: 69.6668,
                title: "Bhuj (Aina Mahal)"
            },
            {
                lat: 23.7458,
                lng: 69.6889,
                title: "Hodka Village"
            },
            {
                lat: 23.7508,
                lng: 69.6993,
                title: "Ludiya Village"
            },
            {
                lat: 23.8892,
                lng: 70.2066,
                title: "Dholavira"
            },
            {
                lat: 23.9000,
                lng: 69.6833,
                title: "Kutch Desert Wildlife Sanctuary"
            },
            {
                lat: 23.70000,
                lng: 69.40000,
                title: "Banni Grasslands"
            },
            {
                lat: 23.676,
                lng: 68.5394,
                title: "Narayan Sarovar"
            },
            {
                lat: 23.67,
                lng: 68.54,
                title: "Koteshwar Temple"
            }
        ];

        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 9,
            center: locations[0]
        });

        locations.forEach(loc => {
            new google.maps.Marker({
                position: {
                    lat: loc.lat,
                    lng: loc.lng
                },
                map,
                title: loc.title
            });
        });
    }
</script>

<script>
    document.getElementById("booking-form").addEventListener("submit", async (e) => {
        e.preventDefault();

        fbq('track', 'Lead');

        const form = e.target;
        const formData = new FormData(form);
        const data = Object.fromEntries(formData.entries());

        document.getElementById("send-itinerary-button").disabled = true;
        document.querySelectorAll(
            "#form-duplicate-div, #form-error-div, #form-failed-div"
        ).forEach(el => el.classList.add("d-none"));

        try {
            const res = await fetch("https://live-am.coderelix.com/webhook/rann-inquiry", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify(data)
            });

            const json = await res.json();

            console.log(json);

            if (json.status === "success") {
                var successModal = new bootstrap.Modal(document.getElementById('successModal'));
                successModal.show();
                document.getElementById('booking-form').reset();
            } else if (json.status === "duplicate") {
                var errorDiv = document.getElementById('form-duplicate-div');
                errorDiv.classList.remove('d-none');
                document.getElementById('booking-form').reset();
            } else if (json.status === "error") {
                var errorDiv = document.getElementById('form-error-div');
                errorDiv.classList.remove('d-none');
            } else {
                var errorDiv = document.getElementById('form-failed-div');
                errorDiv.classList.remove('d-none');
            }
        } catch (err) {
            var errorDiv = document.getElementById('form-failed-div');
            errorDiv.classList.remove('d-none');
        }
        document.getElementById("send-itinerary-button").disabled = false;
    });
</script>

</html>