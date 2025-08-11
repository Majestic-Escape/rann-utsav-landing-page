<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return; n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
            n.queue = []; t = b.createElement(e); t.async = !0;
            t.src = v; s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');

        fbq('init', 'YOUR_PIXEL_ID');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=YOUR_PIXEL_ID&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rann of Kutch Festival</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lexend+Mega:wght@100..900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Meddon&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Limelight&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Eagle+Lake&display=swap');

        html,
        body {
            overflow-x: hidden;
        }

        h1,
        h2,
        h3 {
            font-family: 'Poppins', sans-serif;
            color: #ea0776;
        }

        h4,
        h5,
        h6,
        p,
        label {
            font-family: 'Poppins', sans-serif;
        }

        .pink-text {
            color: #ea0776;
            /* text-shadow: 2px 2px black; */
        }

        .fs-big {
            font-size: 3rem;
        }

        .fs-huge {
            font-size: 6rem;
        }

        /* .main {
            margin: 0 20px;
        } */

        .common-background {}

        .bg-fixed {
            background-attachment: fixed;
        }

        /* .inclined-shadow {
    margin: 25vh auto 0 auto;
    padding: 0 20px;
    position: relative;
    display: block;
    text-align: left;
    color: #ec0877;
    font-size: 80px;
    font-weight: 800;
    transform: scaleY(1.2);
} */

        /* .inclined-shadow::after {
            width: 100%;
            content: "RANN OF KUTCH";
            position: absolute;
            left: 0px;
            top: 70px;
            color: rgba(0, 0, 0, 0.25);
            transform: skewX(301deg) translate(10px, 10px);
            filter: blur(4px);
        } */

        a.nav-link {
            color: #000000;
            margin: 0 10px;
        }

        footer a {
            color: #fff;
            text-decoration: underline;
        }

        .section {
            padding: 100px 0;
        }

        /* .section-margin {
            margin: 0 20px;
        } */

        #banner {
            height: 100vh;
            background:
                linear-gradient(to bottom, rgba(0, 0, 0, 0) 85%, #ffffff),
                url('./banner.jpg') center center / cover no-repeat;
            /* border-radius: 40px 40px 0 0; */
            background-repeat: no-repeat;
            background-size: cover;
            /* background-position: top center; */
        }

        .banner-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
        }

        .cta-text {
            line-height: 1.4;
            color: #ea0776;
            text-shadow: 3px 2px 3px #0000004f;
        }

        .light-text-stroke {
            -webkit-text-fill-color: #ffffff;
            -webkit-text-stroke: #ffffff 1px;
        }

        /* .dark-text-stroke {
            -webkit-text-stroke: #000 0.5px;
        } */

        #about {
            /* height: 600px; */
            background: linear-gradient(to top, rgba(255, 255, 255, 1), rgba(255, 255, 255, 0) 15%), url('./about-bg.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center 42%;
            /* border-radius: 40px 40px 0 0; */
        }

        #about-title {
            /* font-family: "Meddon", cursive; */
        }

        .about-para {
            text-align: justify;
        }

        .section-title {
            font-size: 3rem;
            color: #ea0776;
            font-weight: 700;
            margin-bottom: 20px;
            text-shadow: 2px -1px 3px #0000004f;
        }

        .about-div {
            padding-right: 3rem;
            padding-left: 3rem;
        }

        #countdown-section {
            /* height: 450px; */
            /* background-color: #07243d; */
            background:
                linear-gradient(to bottom, rgba(0, 0, 0, 0.3)),
                url('./countdown-bg.png') top center / cover no-repeat;
            padding: 80px 0px;
            /* border-radius: 0 0 40px 40px; */
        }

        #countdown {
            font-size: 2rem;
            font-weight: 700;
            color: #ffffff;
            font-family: 'Lexend Mega', sans-serif;
        }

        .countdown-subtext {
            font-size: 1rem;
            color: #ffffff;
        }

        #book-now-button {
            color: #000000;
            letter-spacing: 3px;
            font-weight: 200;
            font-family: 'Poppins', sans-serif;
            background-color: #fad42c;
            font-weight: 900;
            border-radius: 20px;
            transition: transform 0.5s;
            animation: blur 1s infinite;
            -webkit-animation: blur 1s infinite;
            animation-iteration-count: infinite;
        }

        @keyframes blur {

            0%,
            100% {
                box-shadow: 0 0 10px #fad42c;
            }

            50% {
                box-shadow: 0 0 36px #fad42c;
            }
        }

        .sticky-button {
            position: fixed;
            top: 0px;
            right: 20px;
            bottom: auto;
            z-index: 1000;
        }

        #booking {
            background: linear-gradient(to top, rgba(255, 255, 255, 0) 20%, rgba(255, 255, 255, 0) 50%),
                linear-gradient(to bottom, rgba(0, 0, 0, 0.3) 10%, rgba(255, 255, 255, 0)),
                url('./background.png') top center / cover no-repeat;
            /* box-shadow: 0 0 5px #35621f; */
            /* border-radius: 40px; */
            /* padding: 80px 40px; */
        }

        .form-control,
        .form-select {
            font-size: 24px;
            font-weight: 200;
            padding-left: 30px;
            height: 60px;
            border-radius: 20px;
            border: 1px solid #ccc;
            margin-bottom: 20px;
        }

        .form-control:focus,
        .form-select:focus {
            box-shadow: none;
            outline: none;
            border: 1px solid #a7a7a7;
            border-bottom: 1px solid #ea0776;
        }

        .form-row>div {
            padding: 0 20px;
        }

        .form-label {
            font-weight: 600;
            color: #ea0776;
        }

        #booking-form {
            margin-top: 30px;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 40px;
            border-radius: 40px;
        }

        /* #booking-form .row {
            margin-bottom: 25px;
        } */

        .send-itinerary-button {
            margin: auto;
            display: flex;
            background-color: #fad42c;
            font-family: 'Poppins', sans-serif;
            color: #000;
            font-weight: 300;
            border-radius: 20px;
            border: 1px solid #fad42c;
            align-items: center;
            justify-content: center;
            flex-direction: row;
        }

        .send-itinerary-button:hover {
            background-color: #ea0776;
            border: 1px solid #ea0776;
            color: #fff;
        }

        #festival {
            /* padding: 0 0 20px 0px; */
            /* border-radius: 0 0 40px 40px; */
            background: linear-gradient(to bottom right, rgb(180 180 180 / 70%) 65%, rgb(234 105 7 / 67%)), url(./festival-bg.png) center center / cover no-repeat;
            background-attachment: fixed;
        }

        #activities {
            /* height: 1600px; */
            margin-top: -1px;
            background: linear-gradient(rgba(255, 255, 255, 1), rgba(255, 255, 255, 0) 30%), url('./activities-bg.png') center center / cover no-repeat;
        }

        .activity-card {
            border-radius: 40px;
            border: none;
        }

        .card-title {
            position: absolute;
            bottom: 40px;
            left: 40px;
            font-size: 1.5rem;
        }

        .activity {
            height: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: all 0.3s ease;
            border-radius: 40px;
            z-index: 0;
            background-size: cover;
            color: #fff;
        }

        .activity:hover {
            transform: scale(1.05);
        }

        .activity#folk-dance-card {
            background: linear-gradient(rgb(0 0 0 / 0%), rgb(0 0 0 / 75%)), url(./activities/folk-dance.png) center 40% / cover no-repeat;
        }

        #handicraft-exhibitions-card {
            background: linear-gradient(rgb(0 0 0 / 0%), rgb(0 0 0 / 75%)), url('./activities/handicraft-exhibitions.png') center center / cover no-repeat;
        }

        #kutchi-cuisine-card {
            background: linear-gradient(rgb(0 0 0 / 0%), rgb(0 0 0 / 75%)), url('./activities/kutchi-cuisine.png') center center / cover no-repeat;
        }

        #desert-safari-card {
            background: linear-gradient(rgb(0 0 0 / 0%), rgb(0 0 0 / 75%)), url('./activities/desert-safari.png') center 58% / cover no-repeat;
        }

        #hot-air-balloon-card {
            background: linear-gradient(rgb(0 0 0 / 0%), rgb(0 0 0 / 75%)), url('./activities/hot-air-balloon.png') center 8% / cover no-repeat;
        }

        #paragliding-card {
            background: linear-gradient(rgb(0 0 0 / 0%), rgb(0 0 0 / 75%)), url('./activities/paragliding.png') center center / cover no-repeat;
        }

        #atv-rides-card {
            background: linear-gradient(rgb(0 0 0 / 0%), rgb(0 0 0 / 75%)), url('./activities/atv-rides.png') center 64% / cover no-repeat;
        }

        #village-visits-card {
            background: linear-gradient(rgb(0 0 0 / 0%), rgb(0 0 0 / 75%)), url('./activities/village-visits.png') center 70% / cover no-repeat;
        }

        #night-bazaar-card {
            background: linear-gradient(rgb(0 0 0 / 0%), rgb(0 0 0 / 75%)), url('./activities/night-bazaar.png') center 75% / cover no-repeat;
        }

        #full-moon-card {
            background: linear-gradient(rgb(0 0 0 / 0%), rgb(0 0 0 / 75%)), url('./activities/full-moon.png') center center / cover no-repeat;
        }

        #bhunga-stay-card {
            background: linear-gradient(rgb(0 0 0 / 0%), rgb(0 0 0 / 75%)), url('./activities/bhunga-stay.png') center center / cover no-repeat;
        }

        #yoga-card {
            background: linear-gradient(rgb(0 0 0 / 0%), rgb(0 0 0 / 75%)), url('./activities/yoga.png') center center / cover no-repeat;
        }

        .activity-carousel {
            overflow: scroll;
            position: relative;
            scrollbar-width: none;
        }

        .activity-track {
            display: flex;
            width: max-content;
            animation: scroll-left 120s linear infinite;
        }

        .activity-track:hover {
            animation-play-state: paused;
        }

        @keyframes scroll-left {
            0% {
                transform: translateX(0%);
            }

            100% {
                transform: translateX(-85%);
            }
        }

        .activity-carousel-item {
            flex: 0 0 auto;
            width: 300px;
            /* Set fixed width so scroll is smooth */
            margin-right: 20px;
        }

        #festival-dance-img {
            background: linear-gradient(to right, rgba(234, 7, 118, 0.3), rgba(255, 255, 255, 0));
            /* border-radius: 0 0 0 40px; */
        }

        #gallery {
            /* border-radius: 40px 40px 0 0; */
            overflow: hidden;
        }

        .carousel-custom-controls {
            position: absolute;
            bottom: 0;
            right: 0;
            z-index: 10;
            display: flex;
            gap: 0.5rem;
        }

        .carousel-custom-controls .carousel-control-prev,
        .carousel-custom-controls .carousel-control-next {
            position: static;
            /* Remove absolute positioning */
            width: auto;
            height: auto;
            background: #000;
            opacity: 1;
            border-radius: 0.25rem;
            padding: 0.5rem;
        }

        .carousel-custom-controls .carousel-control-prev-icon,
        .carousel-custom-controls .carousel-control-next-icon {
            background-size: 1rem 1rem;
        }

        #brought-by {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: absolute;
            left: 50%;
            transform: translate(-50%);
        }

        #footer {
            height: 100vh;
            background:
                linear-gradient(to bottom, rgba(255, 255, 255, 1) 5%, rgba(0, 0, 0, 0) 60%),
                url('./footer.png') center center / cover no-repeat;
            /* border-radius: 0 0 40px 40px; */
        }

        #footer .container {
            display: flex;
            height: 100% !important;
            flex-direction: column;
            justify-content: flex-end;
        }

        #footer a {
            text-decoration: none;
        }

        #footer-logo {
            width: 700px;
        }

        @media screen and (max-width: 768px) {

            #banner {
                background:
                    linear-gradient(to bottom, rgba(0, 0, 0, 0) 85%, #ffffff),
                    url('./banner-mob.png') 75% center / contain no-repeat;
                background-color: rgba(2, 78, 164, 255);
                background-repeat: no-repeat;
                background-size: cover;
                /* background-position: top center; */
            }

            .section-title {
                text-align: center;
                font-size: 2rem;
            }

            .about-div {
                padding-right: 2rem;
                padding-left: 2rem;
            }

            #countdown-section {
                height: auto;
                margin-top: -2px;
            }

            #countdown {
                font-size: 2rem;
            }

            .fs-big {
                font-size: 2rem;
            }

            #about {
                /* background: linear-gradient(to bottom, #ffffff, rgba(255, 255, 255, 0) 10%), url('./about-bg.png'); */
                background-position: 60% center;
                background-size: cover;
            }

            #booking {
                /* padding: 20px; */
            }

            #booking-form {
                padding: 40px 10px;
            }

            #activities {
                height: auto;
                background: #fff;
            }

            .inclined-shadow {
                font-size: 50px;
                margin-top: 5vh;
            }

            .inclined-shadow::after {
                left: 10px;
                top: 5px;
                transform: skewX(0deg) translate(10px, 10px);
                z-index: -1;
            }

            .navbar .container {
                flex-wrap: nowrap;
            }

            .form-control,
            .form-select {
                font-size: 16px;
            }

            .navbar-collapse {
                position: absolute;
                top: 80%;
                text-align: center;
                margin: auto;
                width: 100%;
                left: 0px;
            }

            .navbar-collapse ul.navbar-nav {
                background-color: #fff;
            }

            .navbar-collapse ul.navbar-nav li>a.nav-link {
                color: #4a4a4a;
                border-bottom: 1px solid #dcdcdc;
            }

            #gallery .carousel-item .row {
                flex-direction: column;
            }

            #gallery .carousel-item .col-md-4 {
                flex: 0 0 100%;
                max-width: 100%;
            }

            #gallery .carousel-item img {
                width: 100%;
                height: auto;
                display: block;
            }
        }
    </style>

    <div class="main">
        <section id="banner" class="">
            <!-- Navbar Start -->
            <!-- <img src="./banner.jpg" alt="Rann of Kutch Banner" class="img-fluid banner-image"> -->
            <nav class="navbar navbar-sticky navbar-expand-lg navbar-light py-5">
                <div class="container">
                    <a class="navbar-brand fw-bold text-primary" href="#" style="font-family: 'Poppins', sans-serif;">
                        <img src="./logo.svg" alt="Majestic Escape Logo" class="img-fluid">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto fs-5">
                            <li class="nav-item">
                                <a class="nav-link" href="#about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#booking">Book Now!</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#activities">Activities</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#gallery">Gallery</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
            <span class="d-block d-md-none">
                <!-- <h1 class="inclined-shadow text-center mb-0">
                    rann utsav
                </h1> -->
                <div class="d-flex justify-content-center align-items-center h-100">
                    <img src="./rann-of-kutch.png" class="w-75">
                </div>
                <p class="text-center mt-0">From 23rd Oct 2025 to 04th Mar 2026<br><br>
                    <b>Experience the best with Majestic Escape!</b>
                </p>

                <a href="#explore-now" class="btn btn-lg btn-warning d-block m-auto w-50">
                    Explore Now!
                </a>
            </span>

        </section>
        <section id="countdown-section" class="align-items-center mt-6">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-8 text-center text-md-start mb-4 mb-md-0">
                        <h2 class="fw-bold mb-3 cta-text">Book before <span class="fs-big light-text-stroke"><br
                                    class="d-block d-md-none">31st August 2025</span> <br class="d-block d-none-md">to
                            get the best deals with Majestic Escape!🥳</h2>
                    </div>
                    <div class="col-md-4 text-center m-auto">
                        <div id="countdown" class="d-flex flex-wrap gap-3 justify-content-center">
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
                        <div id="book-now-button-div">
                            <a href="#booking" id="book-now-button" class="btn btn-sm px-5 py-3  mt-4">
                                INQUIRE NOW
                            </a>
                        </div>
                        <br>
                        <p class="text-light">Limited festival slots available!</p>
                    </div>
                </div>
            </div>
            <span id="explore-now"></span>
        </section>

        <section id="booking" class="section px-2 bg-fixed">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center">
                    <h1 class="section-title mb-4 dark-text-stroke">Ready For Kutch?<br> Let's Curate Your Journey!</h1>
                    <p class="text-light fs-5 mb-4">
                        Unveil the White Desert and get your custom itinerary now!
                    </p>
                </div>

                <div class="col-md-8 offset-md-2">
                    <form id="booking-form" method="POST" action="send-email.php">
                        <div class="row form-row">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Enter your name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Enter  your email" required>
                            </div>

                            <div class="col-md-6">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="tel" class="form-control" id="phone" name="phone"
                                    placeholder="Enter your phone number" required>
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
                                <label for="traveller-type" class="form-label">Type of Traveller</label>
                                <select class="form-select" id="traveller-type" name="traveller_type" required>
                                    <option value="" disabled selected>Select type</option>
                                    <option value="solo">Solo</option>
                                    <option value="couple">Couple</option>
                                    <option value="family">Family</option>
                                    <option value="group">Group</option>
                                    <option value="corporate">Corporate</option>
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
                                    SEND ME THE ITINERARY
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
                    <h1 class="section-title mb-4" id="about-title">Rann Utsav 2025</h1>
                    <p class="text-muted fs-5 about-para">
                        The Rann of Kutch is a salt marsh located in the Thar Desert in the Kutch district of Gujarat,
                        India.
                        It is known for its stunning white salt desert, vibrant culture, and unique wildlife. The region
                        comes alive during the Rann Utsav, a festival celebrating local art, crafts, music, and
                        dance.<br><br>

                        Rann Utsav 2025 begins on 23 October 2025 and runs till 4 March 2026, hosted in Dhordo, a small
                        village on the edge of the White Rann in Gujarat's Kutch district. The festival spans over 100
                        days,
                        thanks to Gujarat Tourism, and brings the salt marsh to life with cultural vibrancy and curated
                        experiences
                    </p>
                </div>
            </div>
        </section>

        <section id="activities" class="section">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="section-title mb-4">Live The Colors Of Kutch<span class="d-none d-md-block"></span><span
                            class="d-inline-block d-md-none">,</span> One Experience At A Time!</h1>
                    <p class="text-muted fs-5 mb-4">
                        Immerse yourself in the vibrant culture and traditions of the Rann of Kutch with our curated
                        activities.
                    </p>
                </div>
            </div>

            <div class="activity-carousel pt-4">
                <div class="activity-track">
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <!-- <img src="./activities/folk-dance.png" class="card-img-top" alt="Folk Dance"> -->
                            <div class="card-body activity" id="folk-dance-card">
                                <h5 class="card-title">Folk Dance <br>& Music</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <!-- <img src="./activities/folk-dance.png" class="card-img-top" alt="Folk Dance"> -->
                            <div class="card-body activity" id="handicraft-exhibitions-card">
                                <h5 class="card-title">Local Handicraft Exhibitions</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <!-- <img src="./activities/folk-dance.png" class="card-img-top" alt="Folk Dance"> -->
                            <div class="card-body activity" id="kutchi-cuisine-card">
                                <h5 class="card-title">Traditional Kutchi Cuisine</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <!-- <img src="./activities/folk-dance.png" class="card-img-top" alt="Folk Dance"> -->
                            <div class="card-body activity" id="desert-safari-card">
                                <h5 class="card-title">White Desert <br>Safari</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <!-- <img src="./activities/folk-dance.png" class="card-img-top" alt="Folk Dance"> -->
                            <div class="card-body activity" id="hot-air-balloon-card">
                                <h5 class="card-title">Hot Air Balloon <br>Ride</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <!-- <img src="./activities/folk-dance.png" class="card-img-top" alt="Folk Dance"> -->
                            <div class="card-body activity" id="paragliding-card">
                                <h5 class="card-title">Tethered <br>Paramotoring & <br>Paragliding</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <!-- <img src="./activities/folk-dance.png" class="card-img-top" alt="Folk Dance"> -->
                            <div class="card-body activity" id="atv-rides-card">
                                <h5 class="card-title">ATV & Camel <br>Rides</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <!-- <img src="./activities/folk-dance.png" class="card-img-top" alt="Folk Dance"> -->
                            <div class="card-body activity" id="village-visits-card">
                                <h5 class="card-title">Craft Village <br>Visits</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <!-- <img src="./activities/folk-dance.png" class="card-img-top" alt="Folk Dance"> -->
                            <div class="card-body activity" id="night-bazaar-card">
                                <h5 class="card-title">Night <br>Bazaar</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <!-- <img src="./activities/folk-dance.png" class="card-img-top" alt="Folk Dance"> -->
                            <div class="card-body activity" id="full-moon-card">
                                <h5 class="card-title">Full Moon <br>in the Rann</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <!-- <img src="./activities/folk-dance.png" class="card-img-top" alt="Folk Dance"> -->
                            <div class="card-body activity" id="bhunga-stay-card">
                                <h5 class="card-title">Traditional Bhunga Stay</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <!-- <img src="./activities/folk-dance.png" class="card-img-top" alt="Folk Dance"> -->
                            <div class="card-body activity" id="yoga-card">
                                <h5 class="card-title">Yoga & Meditation Sessions</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <!-- <img src="./activities/folk-dance.png" class="card-img-top" alt="Folk Dance"> -->
                            <div class="card-body activity" id="folk-dance-card">
                                <h5 class="card-title">Folk Dance <br>& Music</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <!-- <img src="./activities/folk-dance.png" class="card-img-top" alt="Folk Dance"> -->
                            <div class="card-body activity" id="handicraft-exhibitions-card">
                                <h5 class="card-title">Local Handicraft Exhibitions</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <!-- <img src="./activities/folk-dance.png" class="card-img-top" alt="Folk Dance"> -->
                            <div class="card-body activity" id="kutchi-cuisine-card">
                                <h5 class="card-title">Traditional Kutchi Cuisine</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <!-- <img src="./activities/folk-dance.png" class="card-img-top" alt="Folk Dance"> -->
                            <div class="card-body activity" id="desert-safari-card">
                                <h5 class="card-title">White Desert <br>Safari</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <!-- <img src="./activities/folk-dance.png" class="card-img-top" alt="Folk Dance"> -->
                            <div class="card-body activity" id="hot-air-balloon-card">
                                <h5 class="card-title">Hot Air Balloon <br>Ride</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <!-- <img src="./activities/folk-dance.png" class="card-img-top" alt="Folk Dance"> -->
                            <div class="card-body activity" id="paragliding-card">
                                <h5 class="card-title">Tethered <br>Paramotoring & <br>Paragliding</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <!-- <img src="./activities/folk-dance.png" class="card-img-top" alt="Folk Dance"> -->
                            <div class="card-body activity" id="atv-rides-card">
                                <h5 class="card-title">ATV & Camel <br>Rides</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <!-- <img src="./activities/folk-dance.png" class="card-img-top" alt="Folk Dance"> -->
                            <div class="card-body activity" id="village-visits-card">
                                <h5 class="card-title">Craft Village <br>Visits</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <!-- <img src="./activities/folk-dance.png" class="card-img-top" alt="Folk Dance"> -->
                            <div class="card-body activity" id="night-bazaar-card">
                                <h5 class="card-title">Night <br>Bazaar</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <!-- <img src="./activities/folk-dance.png" class="card-img-top" alt="Folk Dance"> -->
                            <div class="card-body activity" id="full-moon-card">
                                <h5 class="card-title">Full Moon <br>in the Rann</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <!-- <img src="./activities/folk-dance.png" class="card-img-top" alt="Folk Dance"> -->
                            <div class="card-body activity" id="bhunga-stay-card">
                                <h5 class="card-title">Traditional Bhunga Stay</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <!-- <img src="./activities/folk-dance.png" class="card-img-top" alt="Folk Dance"> -->
                            <div class="card-body activity" id="yoga-card">
                                <h5 class="card-title">Yoga & Meditation Sessions</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <!-- <img src="./activities/folk-dance.png" class="card-img-top" alt="Folk Dance"> -->
                            <div class="card-body activity" id="folk-dance-card">
                                <h5 class="card-title">Folk Dance <br>& Music</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <!-- <img src="./activities/folk-dance.png" class="card-img-top" alt="Folk Dance"> -->
                            <div class="card-body activity" id="handicraft-exhibitions-card">
                                <h5 class="card-title">Local Handicraft Exhibitions</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <!-- <img src="./activities/folk-dance.png" class="card-img-top" alt="Folk Dance"> -->
                            <div class="card-body activity" id="kutchi-cuisine-card">
                                <h5 class="card-title">Traditional Kutchi Cuisine</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <!-- <img src="./activities/folk-dance.png" class="card-img-top" alt="Folk Dance"> -->
                            <div class="card-body activity" id="desert-safari-card">
                                <h5 class="card-title">White Desert <br>Safari</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <!-- <img src="./activities/folk-dance.png" class="card-img-top" alt="Folk Dance"> -->
                            <div class="card-body activity" id="hot-air-balloon-card">
                                <h5 class="card-title">Hot Air Balloon <br>Ride</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <!-- <img src="./activities/folk-dance.png" class="card-img-top" alt="Folk Dance"> -->
                            <div class="card-body activity" id="paragliding-card">
                                <h5 class="card-title">Tethered <br>Paramotoring & <br>Paragliding</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <!-- <img src="./activities/folk-dance.png" class="card-img-top" alt="Folk Dance"> -->
                            <div class="card-body activity" id="atv-rides-card">
                                <h5 class="card-title">ATV & Camel <br>Rides</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <!-- <img src="./activities/folk-dance.png" class="card-img-top" alt="Folk Dance"> -->
                            <div class="card-body activity" id="village-visits-card">
                                <h5 class="card-title">Craft Village <br>Visits</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <!-- <img src="./activities/folk-dance.png" class="card-img-top" alt="Folk Dance"> -->
                            <div class="card-body activity" id="night-bazaar-card">
                                <h5 class="card-title">Night <br>Bazaar</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <!-- <img src="./activities/folk-dance.png" class="card-img-top" alt="Folk Dance"> -->
                            <div class="card-body activity" id="full-moon-card">
                                <h5 class="card-title">Full Moon <br>in the Rann</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <!-- <img src="./activities/folk-dance.png" class="card-img-top" alt="Folk Dance"> -->
                            <div class="card-body activity" id="bhunga-stay-card">
                                <h5 class="card-title">Traditional Bhunga Stay</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 activity-carousel-item">
                        <div class="card activity-card mb-4">
                            <!-- <img src="./activities/folk-dance.png" class="card-img-top" alt="Folk Dance"> -->
                            <div class="card-body activity" id="yoga-card">
                                <h5 class="card-title">Yoga & Meditation Sessions</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="gallery">
            <div class="container-fluid p-0">
                <div id="galleryCarousel" class="carousel slide d-none d-md-block" data-bs-ride="carousel"
                    data-bs-interval="2000">
                    <div class="carousel-inner">
                        <!-- Slide 1 -->
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-4 m-0 p-0">
                                    <img src="./gallery/gallery2.png" alt="Gallery Image 2" class="img-fluid">
                                </div>
                                <div class="col-md-4 m-0 p-0">
                                    <img src="./gallery/gallery11.png" alt="Gallery Image 8" class="img-fluid">
                                </div>
                                <div class="col-md-4 m-0 p-0">
                                    <img src="./gallery/gallery3.png" alt="Gallery Image 3" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <!-- Slide 2 -->
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4 m-0 p-0">
                                    <img src="./gallery/gallery5.png" alt="Gallery Image 5" class="img-fluid">
                                </div>
                                <div class="col-md-4 m-0 p-0">
                                    <img src="./gallery/gallery4.png" alt="Gallery Image 4" class="img-fluid">
                                </div>
                                <div class="col-md-4 m-0 p-0">
                                    <img src="./gallery/gallery10.png" alt="Gallery Image 6" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <!-- Slide 3 -->
                        <div class="carousel-item">
                            <div class="row">
                                
                                <div class="col-md-4 m-0 p-0">
                                    <img src="./gallery/gallery7.png" alt="Gallery Image 7" class="img-fluid">
                                </div>
                                <div class="col-md-4 m-0 p-0">
                                    <img src="./gallery/gallery12.png" alt="Gallery Image 9" class="img-fluid">
                                </div>
                                <div class="col-md-4 m-0 p-0">
                                    <img src="./gallery/gallery1.png" alt="Gallery Image 1" class="img-fluid">
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

                <div id="mobGalleryCarousel" class="carousel slide d-block d-md-none" data-bs-ride="carousel"
                    data-bs-interval="2000">
                    <div class="carousel-inner">
                        <div class="row">
                            <div class="carousel-item active">
                                <div class="col-md-4 m-0 p-0">
                                    <img src="./gallery/gallery1.png" alt="Gallery Image 1" class="img-fluid">
                                </div>
                            </div>
                            <div class="carousel-item">

                                <div class="col-md-4 m-0 p-0">
                                    <img src="./gallery/gallery2.png" alt="Gallery Image 2" class="img-fluid">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-4 m-0 p-0">
                                    <img src="./gallery/gallery3.png" alt="Gallery Image 3" class="img-fluid">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-4 m-0 p-0">
                                    <img src="./gallery/gallery5.png" alt="Gallery Image 5" class="img-fluid">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-4 m-0 p-0">
                                    <img src="./gallery/gallery4.png" alt="Gallery Image 4" class="img-fluid">
                                </div>
                            </div>
                            <div class="carousel-item">

                                <div class="col-md-4 m-0 p-0">
                                    <img src="./gallery/gallery7.png" alt="Gallery Image 7" class="img-fluid">
                                </div>
                            </div>
                            <div class="carousel-item">

                                <div class="col-md-4 m-0 p-0">
                                    <img src="./gallery/gallery10.png" alt="Gallery Image 10" class="img-fluid">
                                </div>
                            </div>
                            <div class="carousel-item">

                                <div class="col-md-4 m-0 p-0">
                                    <img src="./gallery/gallery11.png" alt="Gallery Image 11" class="img-fluid">
                                </div>
                            </div>
                            <div class="carousel-item">

                                <div class="col-md-4 m-0 p-0">
                                    <img src="./gallery/gallery12.png" alt="Gallery Image 12" class="img-fluid">
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

        <section id="festival" class="align-items-center py-5">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-between">
                    <!-- <div class="col-md-4 p-0">
                        <img src="./dance.png" id="festival-dance-img" alt="Rann of Kutch Festival" class="img-fluid">
                    </div> -->
                    <div class="col-md-8 offset-md-2 text-center mb-4 mb-md-0">
                        <h2 class="fw-bold mb-3 text-light lh-base"><span id="festival-days"
                                class="fs-huge pink-text"></span>
                            days to go
                            until <br class="d-none d-md-block">the magic of <span class="">
                                <img src="./rann-of-kutch.png" class="d-inline-block d-md-none w-50">
                                <img src="./rann-of-kutch.png" class="d-none d-md-inline-block w-25">
                            </span> begins!</h2>
                        <p class="text-light">
                            Get ready for a celebration of culture, color, and endless white sands! Your Kutch journey
                            starts here - plan with us today!
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        
                        <a href="#booking" class="form-control btn btn-sm w-auto px-5 w-50 send-itinerary-button"
                            type="button">
                            CRAFT MY KUTCH ESCAPE
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="">
            <div id="map" style="height: 500px"></div>
        </section>

        <section class="section-margin pt-5" id="brought-by">
            <h4 class="text-muted text-center">Brought To You By</h4>
            <img src="./logo.svg" alt="Majestic Escape Logo" class="img-fluid" id="footer-logo">
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
                        Terms of Use
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


</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDqxQcYynulFTOHm7--QMuQVM_ArcDHyo4&callback=initMap" async
    defer></script>


<script>
    // Set the date for the festival start
    const bookingOfferEndDate = new Date("2025-08-31T00:00:00").getTime();
    const festivalDate = new Date("2025-10-23T00:00:00").getTime();

    function updateCountdown() {
        const now = new Date().getTime();
        const distance = bookingOfferEndDate - now;
        const festivalDistance = festivalDate - now;

        const days = Math.max(0, Math.floor(distance / (1000 * 60 * 60 * 24)));
        const hours = Math.max(0, Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)));
        const minutes = Math.max(0, Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60)));
        const seconds = Math.max(0, Math.floor((distance % (1000 * 60)) / 1000));
        const festivalDays = Math.max(0, Math.floor(festivalDistance / (1000 * 60 * 60 * 24)));

        document.getElementById("days").textContent = String(days).padStart(2, '0');
        document.getElementById("hours").textContent = String(hours).padStart(2, '0');
        document.getElementById("minutes").textContent = String(minutes).padStart(2, '0');
        document.getElementById("seconds").textContent = String(seconds).padStart(2, '0');
        document.getElementById("festival-days").textContent = String(festivalDays).padStart(2, '0');
    }

    updateCountdown();
    setInterval(updateCountdown, 1000);
</script>

<script>
    document.getElementById("booking-form").addEventListener("submit", function () {
        console.log("Form submitted");
        fbq('track', 'Lead');
    });
</script>

<script>
    window.addEventListener('scroll', () => {
        const button = document.getElementById("book-now-button-div");
        if (window.scrollY > window.innerHeight + 220) {
            button.classList.add('sticky-button');
        } else {
            button.classList.remove('sticky-button');
        }
    });
</script>

<script>
    function initMap() {
        const locations = [
            { lat: 23.8391, lng: 69.6905, title: "Dhordo Tent City" },
            { lat: 23.8998, lng: 69.6950, title: "White Desert View Point" },
            { lat: 23.9315, lng: 69.5504, title: "Kala Dungar (Black Hill)" },
            { lat: 23.9428, lng: 69.5337, title: "Kalo Dungar Magnetic Hill Point" },
            { lat: 22.8328, lng: 69.3467, title: "Mandvi Beach" },
            { lat: 23.2504, lng: 69.6668, title: "Bhuj (Aina Mahal)" },
            { lat: 23.7458, lng: 69.6889, title: "Hodka Village" },
            { lat: 23.7508, lng: 69.6993, title: "Ludiya Village" },
            { lat: 23.8892, lng: 70.2066, title: "Dholavira" },
            { lat: 23.9000, lng: 69.6833, title: "Kutch Desert Wildlife Sanctuary" },
            { lat: 23.70000, lng: 69.40000, title: "Banni Grasslands" },
            { lat: 23.676, lng: 68.5394, title: "Narayan Sarovar" },
            { lat: 23.67, lng: 68.54, title: "Koteshwar Temple" }
        ];

        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 9,
            center: locations[0]
        });

        locations.forEach(loc => {
            new google.maps.Marker({
                position: { lat: loc.lat, lng: loc.lng },
                map,
                title: loc.title
            });
        });
    }
</script>

<script>
    document.getElementById('booking-form').addEventListener('submit', function (e) {
        e.preventDefault();
        document.getElementById('send-itinerary-button').disabled = true;
        const formData = new FormData(this);

        fetch('send-email.php', {
            method: 'POST',
            body: formData
        })
            .then(res => res.text())
            .then(response => {
                if (response.trim() === 'success') {
                    alert('Thank you! Your itinerary request has been sent.');
                    document.getElementById('booking-form').reset();
                } else {
                    alert('There was an error: ' + response);
                }
            });
    });
</script>

</html>