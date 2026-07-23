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
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W73276NQ" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <?php $eventDate = new DateTime('2025-10-23');
    $now = new DateTime();
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
    <script>
        const serverBookingEndDate = "<?= $bookingEndDate->format('Y-m-d') ?>";
    </script>

    <div class="main">
        <section id="banner" class="">
            <!-- Navbar Start -->
            <nav class="navbar navbar-sticky navbar-expand-lg navbar-light py-4">
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
                                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#referralModal">
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
                    <img src="./assets/rann-of-kutch.png?v=0.2" class="rann-of-kutch-logo">
                    <p class="text-center mt-0">
                        <span class="tagline">Culture • Colors • Celebration</span>
                    </p>

                    <img src="./assets/date.png?v=0.2" class="date-card-img">

                    <a href="#booking" id="book-now-button" class="btn btn-sm fs-5 px-5 py-3 mt-4">
                        CRAFT MY ESCAPE!
                    </a>
                    <br>
                    <h4 class="text-center text-light">
                        <b style="color: black ;text-shadow: 1px 1px black;">Experience the best with Majestic
                            Escape!</b>
                    </h4>
                </div>

                <div class="d-flex d-lg-none banner-text">
                    <span>
                        <img src="./assets/rann-of-kutch.png?v=0.2" class="rann-of-kutch-logo">
                        <p class="text-center mt-0">
                            <span class="tagline text-light">Culture • Colors • Celebration</span>
                        </p>
                        <img src="./assets/date.png?v=0.2" class="date-card-img">
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
                            <div><span id="hours">00</span><span class="countdown-subtext">h</span></div>
                            <div class="d-none d-md-block">:</div>
                            <div><span id="minutes">00</span><span class="countdown-subtext">m</span></div>
                            <div class="d-none d-md-block">:</div>
                            <div><span id="seconds">00</span><span class="countdown-subtext">s</span></div>
                        </div>
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
                                <div id="form-error" class="alert p-3 text-center">You have already filled the form. Our
                                    team will reach out to you shortly!</div>
                            </div>
                            <div class="col-md-12 d-none" id="form-error-div">
                                <div id="form-error" class="alert p-3 text-center">Please share all the required details
                                    so we can send you the perfect Rann Utsav itinerary.</div>
                            </div>
                            <div class="col-md-12 d-none" id="form-failed-div">
                                <div id="form-failed" class="alert p-3 text-center">Oops! Something went wrong while
                                    submitting your form. Please try again.</div>
                            </div>
                            <div class="col-md-6">
                                <input type="hidden" class="form-control" id="source" name="source" value="<?php echo isset($_GET['utm_source']) ? htmlspecialchars($_GET['utm_source']) : 'direct'; ?>">
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
                    <h1 class="section-title mb-4 pink-text" id="about-title">Rann Utsav <br
                            class="d-block d-lg-none">2025-2026</h1>
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

        <section id="stars-await" class="section">
            <div class="container-fluid px-4 px-md-5">
                <div class="row">
                    <div class="col-md-12 text-center mb-5">
                        <h1 class="section-title text-dark mb-3">Hands That <span class="pink-text">Shape Kutch</span>
                        </h1>
                        <p class="subtitle mb-0 stars-subtitle text-muted">
                            Every creation tells a story of tradition, passion, and generations of exceptional
                            craftsmanship. </p>
                    </div>
                </div>

                <div class="stars-carousel-container">
                    <div class="stars-carousel-track-wrapper">
                        <div class="stars-carousel-track" id="stars-carousel-track">
                            <!-- Image Cards -->
                            <div class="stars-carousel-card" data-index="0">
                                <div class="artist-img-wrapper">
                                    <img src="./assets/art.jpg" alt="Artist performance under the stars">
                                </div>
                            </div>
                            <div class="stars-carousel-card" data-index="1">
                                <div class="artist-img-wrapper">
                                    <img src="./assets/art2.jpg" alt="Traditional Kutch musicians under the stars">
                                </div>
                            </div>
                            <div class="stars-carousel-card" data-index="2">
                                <div class="artist-img-wrapper">
                                    <img src="./assets/art3.jpg" alt="Cultural performance under the stars">
                                </div>
                            </div>
                            <div class="stars-carousel-card" data-index="3">
                                <div class="artist-img-wrapper">
                                    <img src="./assets/art4.jpg" alt="Artist performing under the stars">
                                </div>
                            </div>
                            <div class="stars-carousel-card" data-index="4">
                                <div class="artist-img-wrapper">
                                    <img src="./assets/art5.jpg" alt="Folk singers under the stars">
                                </div>
                            </div>
                            <div class="stars-carousel-card" data-index="5">
                                <div class="artist-img-wrapper">
                                    <img src="./assets/art6.jpg" alt="Starlit desert dance performance">
                                </div>
                            </div>
                            <div class="stars-carousel-card" data-index="6">
                                <div class="artist-img-wrapper">
                                    <img src="./assets/art7.jpg" alt="Musicians in the White Rann under the stars">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Navigation Controls -->
                    <button class="stars-carousel-btn stars-carousel-btn-prev" id="stars-carousel-prev"
                        aria-label="Previous Slide">
                        <i class="bi bi-chevron-left"></i>
                    </button>
                    <button class="stars-carousel-btn stars-carousel-btn-next" id="stars-carousel-next"
                        aria-label="Next Slide">
                        <i class="bi bi-chevron-right"></i>
                    </button>
                </div>
            </div>
        </section>

        <section id="festival" class="align-items-center pb-5">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-8 offset-md-2 text-center mb-4 mb-md-0">
                        <h2 class="fw-bold mb-3 text-light lh-base">
                            <br class="d-none d-md-block">The magic of <span class="">
                                <img src="./assets/rann-of-kutch.png?v=0.2" class="d-inline-block d-md-none w-50">
                                <img src="./assets/rann-of-kutch.png?v=0.2" class="d-none d-md-inline-block w-25">
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

        <section id="gallery" class="section">
            <div class="container-fluid px-4 px-md-5">
                <div class="row">
                    <div class="col-md-12 text-center mb-5">
                        <h1 class="section-title text-dark mb-3">Glimpses of <span class="pink-text">White Desert</span></h1>
                        <p class="subtitle mb-0 gallery-subtitle text-muted">
                            Explore the breathtaking landscapes, vibrant cultural celebrations, and unforgettable memories of Rann Utsav.
                        </p>
                    </div>
                </div>

                <div class="gallery-carousel-container">
                    <div class="gallery-carousel-track-wrapper">
                        <div class="gallery-carousel-track" id="gallery-carousel-track">
                            <!-- Image Cards -->
                            <div class="gallery-carousel-card" data-index="0">
                                <div class="gallery-img-wrapper">
                                    <img src="./assets/gallery/gallery1.jpg?v=0.2" alt="Kutch Desert Gallery 1">
                                </div>
                            </div>
                            <div class="gallery-carousel-card" data-index="1">
                                <div class="gallery-img-wrapper">
                                    <img src="./assets/gallery/gallery2.jpg?v=0.2" alt="Kutch Desert Gallery 2">
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
                            <div class="gallery-carousel-card" data-index="4">
                                <div class="gallery-img-wrapper">
                                    <img src="./assets/gallery/gallery5.jpg?v=0.2" alt="Kutch Desert Gallery 5">
                                </div>
                            </div>
                            <div class="gallery-carousel-card" data-index="5">
                                <div class="gallery-img-wrapper">
                                    <img src="./assets/gallery/gallery7.jpg?v=0.2" alt="Kutch Desert Gallery 7">
                                </div>
                            </div>
                            <div class="gallery-carousel-card" data-index="6">
                                <div class="gallery-img-wrapper">
                                    <img src="./assets/gallery/gallery10.jpg?v=0.2" alt="Kutch Desert Gallery 10">
                                </div>
                            </div>
                            <div class="gallery-carousel-card" data-index="7">
                                <div class="gallery-img-wrapper">
                                    <img src="./assets/gallery/gallery11.jpg?v=0.2" alt="Kutch Desert Gallery 11">
                                </div>
                            </div>
                            <div class="gallery-carousel-card" data-index="8">
                                <div class="gallery-img-wrapper">
                                    <img src="./assets/gallery/gallery12.jpg?v=0.2" alt="Kutch Desert Gallery 12">
                                </div>
                            </div>
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
                            <div class="gallery-carousel-card" data-index="11">
                                <div class="gallery-img-wrapper">
                                    <img src="./assets/gallery/gallery9.jpg?v=0.2" alt="Kutch Desert Gallery 9">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Navigation Controls -->
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

        <section class="">
            <div id="map" style="height: 500px"></div>
        </section>

        <section class="section-margin pt-5 w-100" id="brought-by">
            <img src="./assets/logo.png?v=0.2" alt="Majestic Escape Logo" class="img-fluid" id="footer-logo">
        </section>
    </div>

    <footer id="footer" class="section-margin text-center py-5">
        <div class="container h-100">
            <div class="row align-items-end">
                <div class="col-md-4 text-md-start mb-3 mb-md-0">
                    <a href="#" class="mb-0 text-light" data-bs-toggle="modal" data-bs-target="#privacyPolicyModal">
                        Privacy Policy
                    </a><br>
                    <a href="#" class="mb-0 text-light" data-bs-toggle="modal" data-bs-target="#termsModal">
                        Terms of Service
                    </a><br>
                    <a href="#" class="mb-0 text-light" data-bs-toggle="modal"
                        data-bs-target="#cancellationPolicyModal">
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