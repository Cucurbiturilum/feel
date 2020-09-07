<!DOCTYPE html>
<html>
<head>

    <?php
    $_SERVER["REQUEST_URI"] = str_replace("/de/", "/", $_SERVER["REQUEST_URI"]);
    $_SERVER["REQUEST_URI"] = str_replace("/en/", "/", $_SERVER["REQUEST_URI"]);
    $_SERVER["REQUEST_URI"] = str_replace("/ru/", "/", $_SERVER["REQUEST_URI"]);
    $_SERVER["REQUEST_URI"] = str_replace("/tr/", "/", $_SERVER["REQUEST_URI"]);
    function lang($text)
    {
        return $text;
    }

    ?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="about:blank">

    <!--    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">-->
    <!--    <link rel="stylesheet" type="text/css" href="/assets/landingpages/template.css">-->

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="css/template_B4-5.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/b48621f243.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
            crossorigin="anonymous"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
    <script src="owlcarousel/carousel.js"></script>

</head>
<body class="template_body">

<div class="template_top_bar">
    <div class="container">
        <nav class="nav d-flex template_top_text">
            <div class="col-xs-12 col-sm-12 col-md-3">
                <span class="template_top_text_span"><?php echo lang('1001 interactive porn videos'); ?></span>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <span class="template_top_text_span"><?php echo lang('Compatible with all popular teledildonic devices'); ?></span>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3">
                <span class="template_top_text_span"><?php echo lang('Sync your device in seconds!'); ?></span>
            </div>
        </nav>
    </div>
</div>

<div class="template_header">
    <div class="container">
        <div class="template_logo">
            <a href="/"><img class="template_img" src="../netflix/img/feel_x_logo_new.png"></a>
        </div>
        <div class="template_header_right">
            <ul class="template_ul">
                <li>
                    <a href="/login" class="template_a"><img class="template_icon"
                                                             src="/assets/netflix/img/login_icon.png"><?php echo lang('Login'); ?>
                    </a>
                    <span class="template_pipe">|</span>
                    <a href="/shop" class="template_a"><?php echo lang('Shop'); ?></a>
                </li>
                <li><?php $_lang = 'en' ?>
                    <select class="selectpicker template_select_language" data-width="fit">
                        <option <?php if ($_lang == 'en'): echo "selected"; endif ?> data-content='English'
                                                                                     value="/language/en">
                            English
                        </option>
                        <option <?php if ($_lang == 'de'): echo "selected"; endif ?> data-content='Deutch'
                                                                                     value="/language/de">
                            Deutch
                        </option>
                        <option <?php if ($_lang == 'ru'): echo "selected"; endif ?> data-content='Russian'
                                                                                     value="/language/ru">
                            русский
                        </option>
                        <option <?php if ($_lang == 'tr'): echo "selected"; endif ?> data-content='Turks'
                                                                                     value="/language/tr">
                            Türk
                        </option>
                    </select>
                </li>
            </ul>
        </div>
    </div>
</div>

<!--------------------------------------------- DESIGN ------------------------------------------------>
<!--------------------------------------------- DESIGN ------------------------------------------------>
<!--------------------------------------------- DESIGN ------------------------------------------------>
<?php
//// include();
//$this->load->view($page);
//?>

<div style="text-align: center;">
    <div class="template-home">
        <div class="header-carousel">
            <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselIndicators" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/home-header-1.png" class="d-block" alt="girls">
                    </div>
                    <div class="carousel-item">
                        <img src="img/home-header-2.png" class="d-block" alt="girls">
                    </div>
                    <div class="carousel-item">
                        <img src="img/home-header-3.png" class="d-block" alt="girls">
                    </div>
                    <div class="carousel-item">
                        <img src="img/home-header-4.png" class="d-block" alt="naked girl">
                    </div>
                    <div class="carousel-item">
                        <img src="img/home-header-5.png" class="d-block" alt="naked girl">
                    </div>
                </div>
            </div>
            <div class="carousel-caption">
                <h1 class="title text-uppercase text-white">See, hear and feel your favorite pornstars</h1>
                <p class="subtitle text-white">High quality, X-rated interactive porn.</p>
                <ul class="list-unstyled text-white">
                    Unlock interactive porn
                    <li class="mb-2 mb-lg-3 mt-3">
                        <span>
                            <img src="img/check-icon.png" alt="check icon" class="img-fluid mr-3">
                        </span>
                        Sync your sex toy
                    </li>
                    <li class="mb-2 mb-lg-3">
                        <span>
                            <img src="img/check-icon.png" alt="check icon" class="img-fluid mr-3">
                        </span>
                        Watch on any device
                    </li>
                </ul>
                <form action="">
                    <div class="form-group d-flex flex-column flex-md-row">
                        <label for="inputEmail"></label>
                        <input type="email" class="form-control rounded-0 border-0 mb-4" id="inputEmail"
                               placeholder="Email address">
                        <button type="submit" class="btn btn-warning rounded-0 border-0 text-white text-uppercase mb-4">
                            try it free for 30 days
                        </button>
                    </div>
                    <p class="form-text">
                        Watch unlimited. Cancel anytime.
                    </p>
                </form>
            </div>
        </div>
        <div class="statistic">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <p class="value">
                            3441
                        </p>
                        <p class="description">
                            Members
                        </p>
                    </div>
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <p class="value">
                            3000 <sup>+</sup>
                        </p>
                        <p class="description">
                            interactive sex videos
                        </p>
                    </div>
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <p class="value">
                            4000
                        </p>
                        <p class="description">
                            minutes watch time
                        </p>
                    </div>
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <p class="value">
                            150
                        </p>
                        <p class="description">
                            pornstars
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="connection">
            <div class="container">
                <h2 class="title text-white text-left mb-4">
                    Turn your sexual fantasies into reality.
                </h2>
                <p class="connection-text text-left">
                    Connect in seconds with your favorite sex toy, including <br>
                    the Kiiroo Onyx+, Kiiroo Titan, Fleshlight Launch and more!
                </p>
                <div class="connection-scheme">
                    <p class="connection-scheme-description">
                        Sync your device
                    </p>
                    <p class="connection-scheme-description">
                        Feel the interactive sexual experience.
                    </p>
                </div>
            </div>
        </div>
        <div class="stream">
            <div class="container">
                <h2 class="title text-white text-left mb-2">
                    Stream unlimited
                </h2>
                <h2 class="title text-white text-left mb-4">
                    Get closer to your favorite pornstars.
                </h2>
                <div class="owl-carousel stream-carousel">
                    <div class="card rounded-0 p-0 bg-transparent border-0">
                        <div class="card-header p-0 rounded-0">
                            <img src="img/actress-1.png" class="card-img-top rounded-0" alt="actress">
                            <p class="card-text"> 23k
                                <span class="heart-outline ml-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512"
                                         style="enable-background:new 0 0 512 512;" xml:space="preserve" width="33px"
                                         height="30px">
                                            <g>
                                                <path d="M474.644,74.27C449.391,45.616,414.358,29.836,376,29.836c-53.948,0-88.103,32.22-107.255,59.25    c-4.969,7.014-9.196,14.047-12.745,20.665c-3.549-6.618-7.775-13.651-12.745-20.665c-19.152-27.03-53.307-59.25-107.255-59.25    c-38.358,0-73.391,15.781-98.645,44.435C13.267,101.605,0,138.213,0,177.351c0,42.603,16.633,82.228,52.345,124.7    c31.917,37.96,77.834,77.088,131.005,122.397c19.813,16.884,40.302,34.344,62.115,53.429l0.655,0.574    c2.828,2.476,6.354,3.713,9.88,3.713s7.052-1.238,9.88-3.713l0.655-0.574c21.813-19.085,42.302-36.544,62.118-53.431    c53.168-45.306,99.085-84.434,131.002-122.395C495.367,259.578,512,219.954,512,177.351    C512,138.213,498.733,101.605,474.644,74.27z M309.193,401.614c-17.08,14.554-34.658,29.533-53.193,45.646    c-18.534-16.111-36.113-31.091-53.196-45.648C98.745,312.939,30,254.358,30,177.351c0-31.83,10.605-61.394,29.862-83.245    C79.34,72.007,106.379,59.836,136,59.836c41.129,0,67.716,25.338,82.776,46.594c13.509,19.064,20.558,38.282,22.962,45.659    c2.011,6.175,7.768,10.354,14.262,10.354c6.494,0,12.251-4.179,14.262-10.354c2.404-7.377,9.453-26.595,22.962-45.66    c15.06-21.255,41.647-46.593,82.776-46.593c29.621,0,56.66,12.171,76.137,34.27C471.395,115.957,482,145.521,482,177.351    C482,254.358,413.255,312.939,309.193,401.614z"
                                                      data-original="#000000" class="active-path"
                                                      data-old_color="#000000" fill="#FFFFFF"/>
                                            </g>
                                </svg>
                                </span>
                                <span class="heart-filled ml-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         version="1.1" id="Capa_1" x="0px"
                                         y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                         xml:space="preserve" width="33px"
                                         height="30px">
                                    <g>
                                        <path d="M376,30c-27.783,0-53.255,8.804-75.707,26.168c-21.525,16.647-35.856,37.85-44.293,53.268    c-8.437-15.419-22.768-36.621-44.293-53.268C189.255,38.804,163.783,30,136,30C58.468,30,0,93.417,0,177.514    c0,90.854,72.943,153.015,183.369,247.118c18.752,15.981,40.007,34.095,62.099,53.414C248.38,480.596,252.12,482,256,482    s7.62-1.404,10.532-3.953c22.094-19.322,43.348-37.435,62.111-53.425C439.057,330.529,512,268.368,512,177.514    C512,93.417,453.532,30,376,30z"
                                              data-original="#000000" class="active-path" data-old_color="#000000"
                                              fill="#FFFFFF"/>
                                    </g>
                                </svg>
                                </span>
                            </p>
                        </div>
                        <div class="card-body d-flex justify-content-between">
                            <div class="left-sidebar">
                                <p class="actress-name text-left text-white">
                                    Lana Rhoades
                                </p>
                                <p class="actress-video text-left mb-0">
                                    342 Videos
                                </p>
                            </div>
                            <div class="right-sidebar d-flex">
                                <p class="views">
                                    33.2k
                                </p>
                                <p class="ml-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="24">
                                        <path d="M0 0h24v24H0V0z" fill="none"/>
                                        <path fill="#928b8b"
                                              d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z"/>
                                    </svg>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card rounded-0 p-0 bg-transparent border-0">
                        <div class="card-header p-0 rounded-0">
                            <img src="img/actress-2.png" class="card-img-top rounded-0" alt="actress">
                            <p class="card-text"> 23k
                                <span class="heart-outline ml-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512"
                                         style="enable-background:new 0 0 512 512;" xml:space="preserve" width="33px"
                                         height="30px">
                                            <g>
                                                <path d="M474.644,74.27C449.391,45.616,414.358,29.836,376,29.836c-53.948,0-88.103,32.22-107.255,59.25    c-4.969,7.014-9.196,14.047-12.745,20.665c-3.549-6.618-7.775-13.651-12.745-20.665c-19.152-27.03-53.307-59.25-107.255-59.25    c-38.358,0-73.391,15.781-98.645,44.435C13.267,101.605,0,138.213,0,177.351c0,42.603,16.633,82.228,52.345,124.7    c31.917,37.96,77.834,77.088,131.005,122.397c19.813,16.884,40.302,34.344,62.115,53.429l0.655,0.574    c2.828,2.476,6.354,3.713,9.88,3.713s7.052-1.238,9.88-3.713l0.655-0.574c21.813-19.085,42.302-36.544,62.118-53.431    c53.168-45.306,99.085-84.434,131.002-122.395C495.367,259.578,512,219.954,512,177.351    C512,138.213,498.733,101.605,474.644,74.27z M309.193,401.614c-17.08,14.554-34.658,29.533-53.193,45.646    c-18.534-16.111-36.113-31.091-53.196-45.648C98.745,312.939,30,254.358,30,177.351c0-31.83,10.605-61.394,29.862-83.245    C79.34,72.007,106.379,59.836,136,59.836c41.129,0,67.716,25.338,82.776,46.594c13.509,19.064,20.558,38.282,22.962,45.659    c2.011,6.175,7.768,10.354,14.262,10.354c6.494,0,12.251-4.179,14.262-10.354c2.404-7.377,9.453-26.595,22.962-45.66    c15.06-21.255,41.647-46.593,82.776-46.593c29.621,0,56.66,12.171,76.137,34.27C471.395,115.957,482,145.521,482,177.351    C482,254.358,413.255,312.939,309.193,401.614z"
                                                      data-original="#000000" class="active-path"
                                                      data-old_color="#000000" fill="#FFFFFF"/>
                                            </g>
                                </svg>
                                </span>
                                <span class="heart-filled ml-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         version="1.1" id="Capa_1" x="0px"
                                         y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                         xml:space="preserve" width="33px"
                                         height="30px">
                                    <g>
                                        <path d="M376,30c-27.783,0-53.255,8.804-75.707,26.168c-21.525,16.647-35.856,37.85-44.293,53.268    c-8.437-15.419-22.768-36.621-44.293-53.268C189.255,38.804,163.783,30,136,30C58.468,30,0,93.417,0,177.514    c0,90.854,72.943,153.015,183.369,247.118c18.752,15.981,40.007,34.095,62.099,53.414C248.38,480.596,252.12,482,256,482    s7.62-1.404,10.532-3.953c22.094-19.322,43.348-37.435,62.111-53.425C439.057,330.529,512,268.368,512,177.514    C512,93.417,453.532,30,376,30z"
                                              data-original="#000000" class="active-path" data-old_color="#000000"
                                              fill="#FFFFFF"/>
                                    </g>
                                </svg>
                                </span>
                            </p>
                        </div>
                        <div class="card-body d-flex justify-content-between">
                            <div class="left-sidebar">
                                <p class="actress-name text-left text-white">
                                    Mia Khalifa
                                </p>
                                <p class="actress-video text-left mb-0">
                                    176 Videos
                                </p>
                            </div>
                            <div class="right-sidebar d-flex">
                                <p class="views">
                                    33.2k
                                </p>
                                <p class="ml-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="24">
                                        <path d="M0 0h24v24H0V0z" fill="none"/>
                                        <path fill="#928b8b"
                                              d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z"/>
                                    </svg>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card rounded-0 p-0 bg-transparent border-0">
                        <div class="card-header p-0 rounded-0">
                            <img src="img/actress-3.png" class="card-img-top rounded-0" alt="actress">
                            <p class="card-text"> 23k
                                <span class="heart-outline ml-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512"
                                         style="enable-background:new 0 0 512 512;" xml:space="preserve" width="33px"
                                         height="30px">
                                            <g>
                                                <path d="M474.644,74.27C449.391,45.616,414.358,29.836,376,29.836c-53.948,0-88.103,32.22-107.255,59.25    c-4.969,7.014-9.196,14.047-12.745,20.665c-3.549-6.618-7.775-13.651-12.745-20.665c-19.152-27.03-53.307-59.25-107.255-59.25    c-38.358,0-73.391,15.781-98.645,44.435C13.267,101.605,0,138.213,0,177.351c0,42.603,16.633,82.228,52.345,124.7    c31.917,37.96,77.834,77.088,131.005,122.397c19.813,16.884,40.302,34.344,62.115,53.429l0.655,0.574    c2.828,2.476,6.354,3.713,9.88,3.713s7.052-1.238,9.88-3.713l0.655-0.574c21.813-19.085,42.302-36.544,62.118-53.431    c53.168-45.306,99.085-84.434,131.002-122.395C495.367,259.578,512,219.954,512,177.351    C512,138.213,498.733,101.605,474.644,74.27z M309.193,401.614c-17.08,14.554-34.658,29.533-53.193,45.646    c-18.534-16.111-36.113-31.091-53.196-45.648C98.745,312.939,30,254.358,30,177.351c0-31.83,10.605-61.394,29.862-83.245    C79.34,72.007,106.379,59.836,136,59.836c41.129,0,67.716,25.338,82.776,46.594c13.509,19.064,20.558,38.282,22.962,45.659    c2.011,6.175,7.768,10.354,14.262,10.354c6.494,0,12.251-4.179,14.262-10.354c2.404-7.377,9.453-26.595,22.962-45.66    c15.06-21.255,41.647-46.593,82.776-46.593c29.621,0,56.66,12.171,76.137,34.27C471.395,115.957,482,145.521,482,177.351    C482,254.358,413.255,312.939,309.193,401.614z"
                                                      data-original="#000000" class="active-path"
                                                      data-old_color="#000000" fill="#FFFFFF"/>
                                            </g>
                                </svg>
                                </span>
                                <span class="heart-filled ml-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         version="1.1" id="Capa_1" x="0px"
                                         y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                         xml:space="preserve" width="33px"
                                         height="30px">
                                    <g>
                                        <path d="M376,30c-27.783,0-53.255,8.804-75.707,26.168c-21.525,16.647-35.856,37.85-44.293,53.268    c-8.437-15.419-22.768-36.621-44.293-53.268C189.255,38.804,163.783,30,136,30C58.468,30,0,93.417,0,177.514    c0,90.854,72.943,153.015,183.369,247.118c18.752,15.981,40.007,34.095,62.099,53.414C248.38,480.596,252.12,482,256,482    s7.62-1.404,10.532-3.953c22.094-19.322,43.348-37.435,62.111-53.425C439.057,330.529,512,268.368,512,177.514    C512,93.417,453.532,30,376,30z"
                                              data-original="#000000" class="active-path" data-old_color="#000000"
                                              fill="#FFFFFF"/>
                                    </g>
                                </svg>
                                </span>
                            </p>
                        </div>
                        <div class="card-body d-flex justify-content-between">
                            <div class="left-sidebar">
                                <p class="actress-name text-left text-white">
                                    Riley Reid
                                </p>
                                <p class="actress-video text-left mb-0">
                                    132 Videos
                                </p>
                            </div>
                            <div class="right-sidebar d-flex">
                                <p class="views">
                                    33.2k
                                </p>
                                <p class="ml-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="24">
                                        <path d="M0 0h24v24H0V0z" fill="none"/>
                                        <path fill="#928b8b"
                                              d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z"/>
                                    </svg>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card rounded-0 p-0 bg-transparent border-0">
                        <div class="card-header p-0 rounded-0">
                            <img src="img/actress-1.png" class="card-img-top rounded-0" alt="actress">
                            <p class="card-text"> 23k
                                <span class="heart-outline ml-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512"
                                         style="enable-background:new 0 0 512 512;" xml:space="preserve" width="33px"
                                         height="30px">
                                            <g>
                                                <path d="M474.644,74.27C449.391,45.616,414.358,29.836,376,29.836c-53.948,0-88.103,32.22-107.255,59.25    c-4.969,7.014-9.196,14.047-12.745,20.665c-3.549-6.618-7.775-13.651-12.745-20.665c-19.152-27.03-53.307-59.25-107.255-59.25    c-38.358,0-73.391,15.781-98.645,44.435C13.267,101.605,0,138.213,0,177.351c0,42.603,16.633,82.228,52.345,124.7    c31.917,37.96,77.834,77.088,131.005,122.397c19.813,16.884,40.302,34.344,62.115,53.429l0.655,0.574    c2.828,2.476,6.354,3.713,9.88,3.713s7.052-1.238,9.88-3.713l0.655-0.574c21.813-19.085,42.302-36.544,62.118-53.431    c53.168-45.306,99.085-84.434,131.002-122.395C495.367,259.578,512,219.954,512,177.351    C512,138.213,498.733,101.605,474.644,74.27z M309.193,401.614c-17.08,14.554-34.658,29.533-53.193,45.646    c-18.534-16.111-36.113-31.091-53.196-45.648C98.745,312.939,30,254.358,30,177.351c0-31.83,10.605-61.394,29.862-83.245    C79.34,72.007,106.379,59.836,136,59.836c41.129,0,67.716,25.338,82.776,46.594c13.509,19.064,20.558,38.282,22.962,45.659    c2.011,6.175,7.768,10.354,14.262,10.354c6.494,0,12.251-4.179,14.262-10.354c2.404-7.377,9.453-26.595,22.962-45.66    c15.06-21.255,41.647-46.593,82.776-46.593c29.621,0,56.66,12.171,76.137,34.27C471.395,115.957,482,145.521,482,177.351    C482,254.358,413.255,312.939,309.193,401.614z"
                                                      data-original="#000000" class="active-path"
                                                      data-old_color="#000000" fill="#FFFFFF"/>
                                            </g>
                                </svg>
                                </span>
                                <span class="heart-filled ml-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         version="1.1" id="Capa_1" x="0px"
                                         y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                         xml:space="preserve" width="33px"
                                         height="30px">
                                    <g>
                                        <path d="M376,30c-27.783,0-53.255,8.804-75.707,26.168c-21.525,16.647-35.856,37.85-44.293,53.268    c-8.437-15.419-22.768-36.621-44.293-53.268C189.255,38.804,163.783,30,136,30C58.468,30,0,93.417,0,177.514    c0,90.854,72.943,153.015,183.369,247.118c18.752,15.981,40.007,34.095,62.099,53.414C248.38,480.596,252.12,482,256,482    s7.62-1.404,10.532-3.953c22.094-19.322,43.348-37.435,62.111-53.425C439.057,330.529,512,268.368,512,177.514    C512,93.417,453.532,30,376,30z"
                                              data-original="#000000" class="active-path" data-old_color="#000000"
                                              fill="#FFFFFF"/>
                                    </g>
                                </svg>
                                </span>
                            </p>
                        </div>
                        <div class="card-body d-flex justify-content-between">
                            <div class="left-sidebar">
                                <p class="actress-name text-left text-white">
                                    Lana Rhoades
                                </p>
                                <p class="actress-video text-left mb-0">
                                    342 Videos
                                </p>
                            </div>
                            <div class="right-sidebar d-flex">
                                <p class="views">
                                    33.2k
                                </p>
                                <p class="ml-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="24">
                                        <path d="M0 0h24v24H0V0z" fill="none"/>
                                        <path fill="#928b8b"
                                              d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z"/>
                                    </svg>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card rounded-0 p-0 bg-transparent border-0">
                        <div class="card-header p-0 rounded-0">
                            <img src="img/actress-2.png" class="card-img-top rounded-0" alt="actress">
                            <p class="card-text"> 23k
                                <span class="heart-outline ml-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512"
                                         style="enable-background:new 0 0 512 512;" xml:space="preserve" width="33px"
                                         height="30px">
                                            <g>
                                                <path d="M474.644,74.27C449.391,45.616,414.358,29.836,376,29.836c-53.948,0-88.103,32.22-107.255,59.25    c-4.969,7.014-9.196,14.047-12.745,20.665c-3.549-6.618-7.775-13.651-12.745-20.665c-19.152-27.03-53.307-59.25-107.255-59.25    c-38.358,0-73.391,15.781-98.645,44.435C13.267,101.605,0,138.213,0,177.351c0,42.603,16.633,82.228,52.345,124.7    c31.917,37.96,77.834,77.088,131.005,122.397c19.813,16.884,40.302,34.344,62.115,53.429l0.655,0.574    c2.828,2.476,6.354,3.713,9.88,3.713s7.052-1.238,9.88-3.713l0.655-0.574c21.813-19.085,42.302-36.544,62.118-53.431    c53.168-45.306,99.085-84.434,131.002-122.395C495.367,259.578,512,219.954,512,177.351    C512,138.213,498.733,101.605,474.644,74.27z M309.193,401.614c-17.08,14.554-34.658,29.533-53.193,45.646    c-18.534-16.111-36.113-31.091-53.196-45.648C98.745,312.939,30,254.358,30,177.351c0-31.83,10.605-61.394,29.862-83.245    C79.34,72.007,106.379,59.836,136,59.836c41.129,0,67.716,25.338,82.776,46.594c13.509,19.064,20.558,38.282,22.962,45.659    c2.011,6.175,7.768,10.354,14.262,10.354c6.494,0,12.251-4.179,14.262-10.354c2.404-7.377,9.453-26.595,22.962-45.66    c15.06-21.255,41.647-46.593,82.776-46.593c29.621,0,56.66,12.171,76.137,34.27C471.395,115.957,482,145.521,482,177.351    C482,254.358,413.255,312.939,309.193,401.614z"
                                                      data-original="#000000" class="active-path"
                                                      data-old_color="#000000" fill="#FFFFFF"/>
                                            </g>
                                </svg>
                                </span>
                                <span class="heart-filled ml-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         version="1.1" id="Capa_1" x="0px"
                                         y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                         xml:space="preserve" width="33px"
                                         height="30px">
                                    <g>
                                        <path d="M376,30c-27.783,0-53.255,8.804-75.707,26.168c-21.525,16.647-35.856,37.85-44.293,53.268    c-8.437-15.419-22.768-36.621-44.293-53.268C189.255,38.804,163.783,30,136,30C58.468,30,0,93.417,0,177.514    c0,90.854,72.943,153.015,183.369,247.118c18.752,15.981,40.007,34.095,62.099,53.414C248.38,480.596,252.12,482,256,482    s7.62-1.404,10.532-3.953c22.094-19.322,43.348-37.435,62.111-53.425C439.057,330.529,512,268.368,512,177.514    C512,93.417,453.532,30,376,30z"
                                              data-original="#000000" class="active-path" data-old_color="#000000"
                                              fill="#FFFFFF"/>
                                    </g>
                                </svg>
                                </span>
                            </p>
                        </div>
                        <div class="card-body d-flex justify-content-between">
                            <div class="left-sidebar">
                                <p class="actress-name text-left text-white">
                                    Mia Khalifa
                                </p>
                                <p class="actress-video text-left mb-0">
                                    176 Videos
                                </p>
                            </div>
                            <div class="right-sidebar d-flex">
                                <p class="views">
                                    33.2k
                                </p>
                                <p class="ml-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="24">
                                        <path d="M0 0h24v24H0V0z" fill="none"/>
                                        <path fill="#928b8b"
                                              d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z"/>
                                    </svg>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card rounded-0 p-0 bg-transparent border-0">
                        <div class="card-header p-0 rounded-0">
                            <img src="img/actress-3.png" class="card-img-top rounded-0" alt="actress">
                            <p class="card-text"> 23k
                                <span class="heart-outline ml-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512"
                                         style="enable-background:new 0 0 512 512;" xml:space="preserve" width="33px"
                                         height="30px">
                                            <g>
                                                <path d="M474.644,74.27C449.391,45.616,414.358,29.836,376,29.836c-53.948,0-88.103,32.22-107.255,59.25    c-4.969,7.014-9.196,14.047-12.745,20.665c-3.549-6.618-7.775-13.651-12.745-20.665c-19.152-27.03-53.307-59.25-107.255-59.25    c-38.358,0-73.391,15.781-98.645,44.435C13.267,101.605,0,138.213,0,177.351c0,42.603,16.633,82.228,52.345,124.7    c31.917,37.96,77.834,77.088,131.005,122.397c19.813,16.884,40.302,34.344,62.115,53.429l0.655,0.574    c2.828,2.476,6.354,3.713,9.88,3.713s7.052-1.238,9.88-3.713l0.655-0.574c21.813-19.085,42.302-36.544,62.118-53.431    c53.168-45.306,99.085-84.434,131.002-122.395C495.367,259.578,512,219.954,512,177.351    C512,138.213,498.733,101.605,474.644,74.27z M309.193,401.614c-17.08,14.554-34.658,29.533-53.193,45.646    c-18.534-16.111-36.113-31.091-53.196-45.648C98.745,312.939,30,254.358,30,177.351c0-31.83,10.605-61.394,29.862-83.245    C79.34,72.007,106.379,59.836,136,59.836c41.129,0,67.716,25.338,82.776,46.594c13.509,19.064,20.558,38.282,22.962,45.659    c2.011,6.175,7.768,10.354,14.262,10.354c6.494,0,12.251-4.179,14.262-10.354c2.404-7.377,9.453-26.595,22.962-45.66    c15.06-21.255,41.647-46.593,82.776-46.593c29.621,0,56.66,12.171,76.137,34.27C471.395,115.957,482,145.521,482,177.351    C482,254.358,413.255,312.939,309.193,401.614z"
                                                      data-original="#000000" class="active-path"
                                                      data-old_color="#000000" fill="#FFFFFF"/>
                                            </g>
                                </svg>
                                </span>
                                <span class="heart-filled ml-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         version="1.1" id="Capa_1" x="0px"
                                         y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                         xml:space="preserve" width="33px"
                                         height="30px">
                                    <g>
                                        <path d="M376,30c-27.783,0-53.255,8.804-75.707,26.168c-21.525,16.647-35.856,37.85-44.293,53.268    c-8.437-15.419-22.768-36.621-44.293-53.268C189.255,38.804,163.783,30,136,30C58.468,30,0,93.417,0,177.514    c0,90.854,72.943,153.015,183.369,247.118c18.752,15.981,40.007,34.095,62.099,53.414C248.38,480.596,252.12,482,256,482    s7.62-1.404,10.532-3.953c22.094-19.322,43.348-37.435,62.111-53.425C439.057,330.529,512,268.368,512,177.514    C512,93.417,453.532,30,376,30z"
                                              data-original="#000000" class="active-path" data-old_color="#000000"
                                              fill="#FFFFFF"/>
                                    </g>
                                </svg>
                                </span>
                            </p>
                        </div>
                        <div class="card-body d-flex justify-content-between">
                            <div class="left-sidebar">
                                <p class="actress-name text-left text-white">
                                    Riley Reid
                                </p>
                                <p class="actress-video text-left mb-0">
                                    132 Videos
                                </p>
                            </div>
                            <div class="right-sidebar d-flex">
                                <p class="views">
                                    33.2k
                                </p>
                                <p class="ml-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="24">
                                        <path d="M0 0h24v24H0V0z" fill="none"/>
                                        <path fill="#928b8b"
                                              d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z"/>
                                    </svg>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="">
                    <div class="form-group d-flex flex-column flex-md-row">
                        <label for="inputEmail"></label>
                        <input type="email" class="form-control rounded-0 border-0 mb-4" id="inputEmail"
                               placeholder="Email address">
                        <button type="submit" class="btn btn-warning rounded-0 border-0 text-white text-uppercase mb-4">
                            try it free for 30 days
                        </button>
                    </div>
                    <p class="form-text">
                        Watch unlimited. Cancel anytime.
                    </p>
                </form>
            </div>
        </div>
        <div class="toys">
            <div class="container">
                <h2 class="title text-white text-left mb-2">
                    Choose your interactive sex toy
                </h2>
                <div class="row">
                    <a href="#" class="col-12 show-more text-right">View all</a>
                    <div class="col-6 col-md-4">
                        <div class="card border-0 rounded-0 p-3">
                            <div class="card-header bg-transparent border-0 p-0">
                                <img src="img/toy.png" class="img-fluid" alt="toy">
                            </div>
                            <div class="card-body p-0">
                                <h5 class="toy-name text-uppercase mb-1">titan</h5>
                                <p class="toy-category text-capitalize mb-0">Male Masturbator</p>
                                <p class="rating mb-2">
                                    <span>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill"
                                         fill="#ffcc00"
                                         xmlns="http://www.w3.org/2000/svg">
                                         <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                </span>
                                    <span>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill"
                                         fill="#ffcc00"
                                         xmlns="http://www.w3.org/2000/svg">
                                         <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                </span>
                                    <span>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill"
                                         fill="#ffcc00"
                                         xmlns="http://www.w3.org/2000/svg">
                                         <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                </span>
                                    <span>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill"
                                         fill="#ffcc00"
                                         xmlns="http://www.w3.org/2000/svg">
                                         <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                </span>
                                    <span>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill"
                                         fill="#ffcc00"
                                         xmlns="http://www.w3.org/2000/svg">
                                         <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                </span>
                                    <span class="rating-value">
                                    (4.9)
                                </span>
                                </p>
                                <p class="price">
                                    <strong>$219,000</strong>
                                    <span class="text-uppercase d-block d-md-inline-block">
                                    (3000 sold)
                                </span>
                                </p>
                            </div>
                            <div class="card-footer bg-transparent border-0 p-0">
                                <button class="btn btn-warning text-capitalize text-white border-0 rounded-0">
                                    view details
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="card border-0 rounded-0 p-3">
                            <div class="card-header bg-transparent border-0 p-0">
                                <img src="img/toy.png" class="img-fluid" alt="toy">
                            </div>
                            <div class="card-body p-0">
                                <h5 class="toy-name text-uppercase mb-1">titan</h5>
                                <p class="toy-category text-capitalize mb-0">Male Masturbator</p>
                                <p class="rating mb-2">
                                    <span>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill"
                                         fill="#ffcc00"
                                         xmlns="http://www.w3.org/2000/svg">
                                         <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                </span>
                                    <span>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill"
                                         fill="#ffcc00"
                                         xmlns="http://www.w3.org/2000/svg">
                                         <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                </span>
                                    <span>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill"
                                         fill="#ffcc00"
                                         xmlns="http://www.w3.org/2000/svg">
                                         <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                </span>
                                    <span>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill"
                                         fill="#ffcc00"
                                         xmlns="http://www.w3.org/2000/svg">
                                         <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                </span>
                                    <span>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill"
                                         fill="#ffcc00"
                                         xmlns="http://www.w3.org/2000/svg">
                                         <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                </span>
                                    <span class="rating-value">
                                    (4.9)
                                </span>
                                </p>
                                <p class="price">
                                    <strong>$219,000</strong>
                                    <span class="text-uppercase d-block d-md-inline-block">
                                    (3000 sold)
                                </span>
                                </p>
                            </div>
                            <div class="card-footer bg-transparent border-0 p-0">
                                <button class="btn btn-warning text-capitalize text-white border-0 rounded-0">
                                    view details
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="card border-0 rounded-0 p-3">
                            <div class="card-header bg-transparent border-0 p-0">
                                <img src="img/toy.png" class="img-fluid" alt="toy">
                            </div>
                            <div class="card-body p-0">
                                <h5 class="toy-name text-uppercase mb-1">titan</h5>
                                <p class="toy-category text-capitalize mb-0">Male Masturbator</p>
                                <p class="rating mb-2">
                                    <span>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill"
                                         fill="#ffcc00"
                                         xmlns="http://www.w3.org/2000/svg">
                                         <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                </span>
                                    <span>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill"
                                         fill="#ffcc00"
                                         xmlns="http://www.w3.org/2000/svg">
                                         <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                </span>
                                    <span>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill"
                                         fill="#ffcc00"
                                         xmlns="http://www.w3.org/2000/svg">
                                         <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                </span>
                                    <span>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill"
                                         fill="#ffcc00"
                                         xmlns="http://www.w3.org/2000/svg">
                                         <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                </span>
                                    <span>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill"
                                         fill="#ffcc00"
                                         xmlns="http://www.w3.org/2000/svg">
                                         <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                </span>
                                    <span class="rating-value">
                                    (4.9)
                                </span>
                                </p>
                                <p class="price">
                                    <strong>$219,000</strong>
                                    <span class="text-uppercase d-block d-md-inline-block">
                                    (3000 sold)
                                </span>
                                </p>
                            </div>
                            <div class="card-footer bg-transparent border-0 p-0">
                                <button class="btn btn-warning text-capitalize text-white border-0 rounded-0">
                                    view details
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog">
            <div class="container">
                <h2 class="title text-white text-left mb-2">
                    Boost your performance
                </h2>
                <h2 class="title text-white text-left mb-4">
                    Read tips on sexual health & wellness with the latest posts from the blog.
                </h2>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="blog-articles-navigation d-flex"></div>
                    <a href="#" class="show-more text-right">View all</a>
                </div>
                <div class="owl-carousel blog-articles">
                    <div class="card rounded-0 p-0 bg-transparent border-0">
                        <div class="card-header p-0 rounded-0">
                            <img src="img/blog-image-1.png" class="card-img-top rounded-0" alt="blog-image">
                            <p class="card-text"> 1.2k
                                <span class="heart-outline ml-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512"
                                         style="enable-background:new 0 0 512 512;" xml:space="preserve" width="33px"
                                         height="30px">
                                            <g>
                                                <path d="M474.644,74.27C449.391,45.616,414.358,29.836,376,29.836c-53.948,0-88.103,32.22-107.255,59.25    c-4.969,7.014-9.196,14.047-12.745,20.665c-3.549-6.618-7.775-13.651-12.745-20.665c-19.152-27.03-53.307-59.25-107.255-59.25    c-38.358,0-73.391,15.781-98.645,44.435C13.267,101.605,0,138.213,0,177.351c0,42.603,16.633,82.228,52.345,124.7    c31.917,37.96,77.834,77.088,131.005,122.397c19.813,16.884,40.302,34.344,62.115,53.429l0.655,0.574    c2.828,2.476,6.354,3.713,9.88,3.713s7.052-1.238,9.88-3.713l0.655-0.574c21.813-19.085,42.302-36.544,62.118-53.431    c53.168-45.306,99.085-84.434,131.002-122.395C495.367,259.578,512,219.954,512,177.351    C512,138.213,498.733,101.605,474.644,74.27z M309.193,401.614c-17.08,14.554-34.658,29.533-53.193,45.646    c-18.534-16.111-36.113-31.091-53.196-45.648C98.745,312.939,30,254.358,30,177.351c0-31.83,10.605-61.394,29.862-83.245    C79.34,72.007,106.379,59.836,136,59.836c41.129,0,67.716,25.338,82.776,46.594c13.509,19.064,20.558,38.282,22.962,45.659    c2.011,6.175,7.768,10.354,14.262,10.354c6.494,0,12.251-4.179,14.262-10.354c2.404-7.377,9.453-26.595,22.962-45.66    c15.06-21.255,41.647-46.593,82.776-46.593c29.621,0,56.66,12.171,76.137,34.27C471.395,115.957,482,145.521,482,177.351    C482,254.358,413.255,312.939,309.193,401.614z"
                                                      data-original="#000000" class="active-path"
                                                      data-old_color="#000000" fill="#FFFFFF"/>
                                            </g>
                                </svg>
                                </span>
                                <span class="heart-filled ml-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         version="1.1" id="Capa_1" x="0px"
                                         y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                         xml:space="preserve" width="33px"
                                         height="30px">
                                    <g>
                                        <path d="M376,30c-27.783,0-53.255,8.804-75.707,26.168c-21.525,16.647-35.856,37.85-44.293,53.268    c-8.437-15.419-22.768-36.621-44.293-53.268C189.255,38.804,163.783,30,136,30C58.468,30,0,93.417,0,177.514    c0,90.854,72.943,153.015,183.369,247.118c18.752,15.981,40.007,34.095,62.099,53.414C248.38,480.596,252.12,482,256,482    s7.62-1.404,10.532-3.953c22.094-19.322,43.348-37.435,62.111-53.425C439.057,330.529,512,268.368,512,177.514    C512,93.417,453.532,30,376,30z"
                                              data-original="#000000" class="active-path" data-old_color="#000000"
                                              fill="#FFFFFF"/>
                                    </g>
                                </svg>
                                </span>
                            </p>
                        </div>
                        <div class="card-body">
                            <p class="blog-title text-left mb-3 text-white">
                                Premature ejaculations,
                                causes and remedies
                            </p>
                            <a class="blog-author d-block text-left text-white text-decoration-none mb-3">
                                <span>
                                    by:
                                </span>
                                Elfred Johnson
                            </a>
                            <a href="#" class="blog-category d-block text-right mb-0 text-white text-decoration-none">
                                <span>In:</span>
                                Sexual Health
                            </a>
                        </div>
                    </div>
                    <div class="card rounded-0 p-0 bg-transparent border-0">
                        <div class="card-header p-0 rounded-0">
                            <img src="img/blog-image-2.png" class="card-img-top rounded-0" alt="blog-image">
                            <p class="card-text"> 1.2k
                                <span class="heart-outline ml-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512"
                                         style="enable-background:new 0 0 512 512;" xml:space="preserve" width="33px"
                                         height="30px">
                                            <g>
                                                <path d="M474.644,74.27C449.391,45.616,414.358,29.836,376,29.836c-53.948,0-88.103,32.22-107.255,59.25    c-4.969,7.014-9.196,14.047-12.745,20.665c-3.549-6.618-7.775-13.651-12.745-20.665c-19.152-27.03-53.307-59.25-107.255-59.25    c-38.358,0-73.391,15.781-98.645,44.435C13.267,101.605,0,138.213,0,177.351c0,42.603,16.633,82.228,52.345,124.7    c31.917,37.96,77.834,77.088,131.005,122.397c19.813,16.884,40.302,34.344,62.115,53.429l0.655,0.574    c2.828,2.476,6.354,3.713,9.88,3.713s7.052-1.238,9.88-3.713l0.655-0.574c21.813-19.085,42.302-36.544,62.118-53.431    c53.168-45.306,99.085-84.434,131.002-122.395C495.367,259.578,512,219.954,512,177.351    C512,138.213,498.733,101.605,474.644,74.27z M309.193,401.614c-17.08,14.554-34.658,29.533-53.193,45.646    c-18.534-16.111-36.113-31.091-53.196-45.648C98.745,312.939,30,254.358,30,177.351c0-31.83,10.605-61.394,29.862-83.245    C79.34,72.007,106.379,59.836,136,59.836c41.129,0,67.716,25.338,82.776,46.594c13.509,19.064,20.558,38.282,22.962,45.659    c2.011,6.175,7.768,10.354,14.262,10.354c6.494,0,12.251-4.179,14.262-10.354c2.404-7.377,9.453-26.595,22.962-45.66    c15.06-21.255,41.647-46.593,82.776-46.593c29.621,0,56.66,12.171,76.137,34.27C471.395,115.957,482,145.521,482,177.351    C482,254.358,413.255,312.939,309.193,401.614z"
                                                      data-original="#000000" class="active-path"
                                                      data-old_color="#000000" fill="#FFFFFF"/>
                                            </g>
                                </svg>
                                </span>
                                <span class="heart-filled ml-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         version="1.1" id="Capa_1" x="0px"
                                         y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                         xml:space="preserve" width="33px"
                                         height="30px">
                                    <g>
                                        <path d="M376,30c-27.783,0-53.255,8.804-75.707,26.168c-21.525,16.647-35.856,37.85-44.293,53.268    c-8.437-15.419-22.768-36.621-44.293-53.268C189.255,38.804,163.783,30,136,30C58.468,30,0,93.417,0,177.514    c0,90.854,72.943,153.015,183.369,247.118c18.752,15.981,40.007,34.095,62.099,53.414C248.38,480.596,252.12,482,256,482    s7.62-1.404,10.532-3.953c22.094-19.322,43.348-37.435,62.111-53.425C439.057,330.529,512,268.368,512,177.514    C512,93.417,453.532,30,376,30z"
                                              data-original="#000000" class="active-path" data-old_color="#000000"
                                              fill="#FFFFFF"/>
                                    </g>
                                </svg>
                                </span>
                            </p>
                        </div>
                        <div class="card-body">
                            <p class="blog-title text-left mb-3 text-white">
                                The facts about
                                testosterone and sex
                            </p>
                            <a class="blog-author d-block text-left text-white text-decoration-none mb-3">
                                <span>
                                    by:
                                </span>
                                Elfred Johnson
                            </a>
                            <a href="#" class="blog-category d-block text-right mb-0 text-white text-decoration-none">
                                <span>In:</span>
                                Sexual Health
                            </a>
                        </div>
                    </div>
                    <div class="card rounded-0 p-0 bg-transparent border-0">
                        <div class="card-header p-0 rounded-0">
                            <img src="img/blog-image-3.png" class="card-img-top rounded-0" alt="blog-image">
                            <p class="card-text"> 1.2k
                                <span class="heart-outline ml-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512"
                                         style="enable-background:new 0 0 512 512;" xml:space="preserve" width="33px"
                                         height="30px">
                                            <g>
                                                <path d="M474.644,74.27C449.391,45.616,414.358,29.836,376,29.836c-53.948,0-88.103,32.22-107.255,59.25    c-4.969,7.014-9.196,14.047-12.745,20.665c-3.549-6.618-7.775-13.651-12.745-20.665c-19.152-27.03-53.307-59.25-107.255-59.25    c-38.358,0-73.391,15.781-98.645,44.435C13.267,101.605,0,138.213,0,177.351c0,42.603,16.633,82.228,52.345,124.7    c31.917,37.96,77.834,77.088,131.005,122.397c19.813,16.884,40.302,34.344,62.115,53.429l0.655,0.574    c2.828,2.476,6.354,3.713,9.88,3.713s7.052-1.238,9.88-3.713l0.655-0.574c21.813-19.085,42.302-36.544,62.118-53.431    c53.168-45.306,99.085-84.434,131.002-122.395C495.367,259.578,512,219.954,512,177.351    C512,138.213,498.733,101.605,474.644,74.27z M309.193,401.614c-17.08,14.554-34.658,29.533-53.193,45.646    c-18.534-16.111-36.113-31.091-53.196-45.648C98.745,312.939,30,254.358,30,177.351c0-31.83,10.605-61.394,29.862-83.245    C79.34,72.007,106.379,59.836,136,59.836c41.129,0,67.716,25.338,82.776,46.594c13.509,19.064,20.558,38.282,22.962,45.659    c2.011,6.175,7.768,10.354,14.262,10.354c6.494,0,12.251-4.179,14.262-10.354c2.404-7.377,9.453-26.595,22.962-45.66    c15.06-21.255,41.647-46.593,82.776-46.593c29.621,0,56.66,12.171,76.137,34.27C471.395,115.957,482,145.521,482,177.351    C482,254.358,413.255,312.939,309.193,401.614z"
                                                      data-original="#000000" class="active-path"
                                                      data-old_color="#000000" fill="#FFFFFF"/>
                                            </g>
                                </svg>
                                </span>
                                <span class="heart-filled ml-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         version="1.1" id="Capa_1" x="0px"
                                         y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                         xml:space="preserve" width="33px"
                                         height="30px">
                                    <g>
                                        <path d="M376,30c-27.783,0-53.255,8.804-75.707,26.168c-21.525,16.647-35.856,37.85-44.293,53.268    c-8.437-15.419-22.768-36.621-44.293-53.268C189.255,38.804,163.783,30,136,30C58.468,30,0,93.417,0,177.514    c0,90.854,72.943,153.015,183.369,247.118c18.752,15.981,40.007,34.095,62.099,53.414C248.38,480.596,252.12,482,256,482    s7.62-1.404,10.532-3.953c22.094-19.322,43.348-37.435,62.111-53.425C439.057,330.529,512,268.368,512,177.514    C512,93.417,453.532,30,376,30z"
                                              data-original="#000000" class="active-path" data-old_color="#000000"
                                              fill="#FFFFFF"/>
                                    </g>
                                </svg>
                                </span>
                            </p>
                        </div>
                        <div class="card-body">
                            <p class="blog-title text-left mb-3 text-white">
                                Straight talk about
                                your sex life
                            </p>
                            <a class="blog-author d-block text-left text-white text-decoration-none mb-3">
                                <span>
                                    by:
                                </span>
                                Elfred Johnson
                            </a>
                            <a href="#" class="blog-category d-block text-right mb-0 text-white text-decoration-none">
                                <span>In:</span>
                                Sexual Health
                            </a>
                        </div>
                    </div>
                    <div class="card rounded-0 p-0 bg-transparent border-0">
                        <div class="card-header p-0 rounded-0">
                            <img src="img/blog-image-1.png" class="card-img-top rounded-0" alt="blog-image">
                            <p class="card-text"> 1.2k
                                <span class="heart-outline ml-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512"
                                         style="enable-background:new 0 0 512 512;" xml:space="preserve" width="33px"
                                         height="30px">
                                            <g>
                                                <path d="M474.644,74.27C449.391,45.616,414.358,29.836,376,29.836c-53.948,0-88.103,32.22-107.255,59.25    c-4.969,7.014-9.196,14.047-12.745,20.665c-3.549-6.618-7.775-13.651-12.745-20.665c-19.152-27.03-53.307-59.25-107.255-59.25    c-38.358,0-73.391,15.781-98.645,44.435C13.267,101.605,0,138.213,0,177.351c0,42.603,16.633,82.228,52.345,124.7    c31.917,37.96,77.834,77.088,131.005,122.397c19.813,16.884,40.302,34.344,62.115,53.429l0.655,0.574    c2.828,2.476,6.354,3.713,9.88,3.713s7.052-1.238,9.88-3.713l0.655-0.574c21.813-19.085,42.302-36.544,62.118-53.431    c53.168-45.306,99.085-84.434,131.002-122.395C495.367,259.578,512,219.954,512,177.351    C512,138.213,498.733,101.605,474.644,74.27z M309.193,401.614c-17.08,14.554-34.658,29.533-53.193,45.646    c-18.534-16.111-36.113-31.091-53.196-45.648C98.745,312.939,30,254.358,30,177.351c0-31.83,10.605-61.394,29.862-83.245    C79.34,72.007,106.379,59.836,136,59.836c41.129,0,67.716,25.338,82.776,46.594c13.509,19.064,20.558,38.282,22.962,45.659    c2.011,6.175,7.768,10.354,14.262,10.354c6.494,0,12.251-4.179,14.262-10.354c2.404-7.377,9.453-26.595,22.962-45.66    c15.06-21.255,41.647-46.593,82.776-46.593c29.621,0,56.66,12.171,76.137,34.27C471.395,115.957,482,145.521,482,177.351    C482,254.358,413.255,312.939,309.193,401.614z"
                                                      data-original="#000000" class="active-path"
                                                      data-old_color="#000000" fill="#FFFFFF"/>
                                            </g>
                                </svg>
                                </span>
                                <span class="heart-filled ml-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         version="1.1" id="Capa_1" x="0px"
                                         y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                         xml:space="preserve" width="33px"
                                         height="30px">
                                    <g>
                                        <path d="M376,30c-27.783,0-53.255,8.804-75.707,26.168c-21.525,16.647-35.856,37.85-44.293,53.268    c-8.437-15.419-22.768-36.621-44.293-53.268C189.255,38.804,163.783,30,136,30C58.468,30,0,93.417,0,177.514    c0,90.854,72.943,153.015,183.369,247.118c18.752,15.981,40.007,34.095,62.099,53.414C248.38,480.596,252.12,482,256,482    s7.62-1.404,10.532-3.953c22.094-19.322,43.348-37.435,62.111-53.425C439.057,330.529,512,268.368,512,177.514    C512,93.417,453.532,30,376,30z"
                                              data-original="#000000" class="active-path" data-old_color="#000000"
                                              fill="#FFFFFF"/>
                                    </g>
                                </svg>
                                </span>
                            </p>
                        </div>
                        <div class="card-body">
                            <p class="blog-title text-left mb-3 text-white">
                                Premature ejaculations,
                                causes and remedies
                            </p>
                            <a class="blog-author d-block text-left text-white text-decoration-none mb-3">
                                <span>
                                    by:
                                </span>
                                Elfred Johnson
                            </a>
                            <a href="#" class="blog-category d-block text-right mb-0 text-white text-decoration-none">
                                <span>In:</span>
                                Sexual Health
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="questions">
            <div class="container">
                <h2 class="title text-white text-left mb-2">
                    Frequently Asked Questions
                </h2>
                <div class="accordion" id="accordionQuestions">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block d-flex justify-content-between" type="button" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What is interactive Sex?
                                    <span class="chevron-down">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                          <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                        </svg>
                                    </span>
                                    <span class="chevron-up">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                          <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
                                        </svg>
                                    </span>
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                             data-parent="#accordionQuestions">
                            <div class="card-body text-left">
                                It is the new way to enjoy porn. A new turn of the screw were you’ll be able
                                to enjoy porn with senses. With interactive porn you can syncronyze your
                                chosen porn video with some of your favorite sexual toys. So you’ll be able
                                to feel that you are actually having every single thing you are enjoying
                                in the porn movie done in your own body.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed d-flex justify-content-between" type="button"
                                        data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                    How can I connect my toy?
                                    <span class="chevron-down">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                          <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                        </svg>
                                    </span>
                                    <span class="chevron-up">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                          <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
                                        </svg>
                                    </span>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                             data-parent="#accordionQuestions">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
                                craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                                butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed d-flex justify-content-between" type="button"
                                        data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                    What I have to pay after free trial?
                                    <span class="chevron-down">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                          <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                        </svg>
                                    </span>
                                    <span class="chevron-up">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                          <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
                                        </svg>
                                    </span>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                             data-parent="#accordionQuestions">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
                                craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                                butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                </div>
                <form action="">
                    <div class="form-group d-flex flex-column flex-md-row">
                        <label for="inputEmail"></label>
                        <input type="email" class="form-control rounded-0 border-0 mb-4" id="inputEmail"
                               placeholder="Email address">
                        <button type="submit" class="btn btn-warning rounded-0 border-0 text-white text-uppercase mb-4">
                            get started with free trial
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--------------------------------------------- DESIGN ------------------------------------------------>
<!--------------------------------------------- DESIGN ------------------------------------------------>
<!--------------------------------------------- DESIGN ------------------------------------------------>

<div class="template_footer">
    <div class="container">
        <div class="col-md-12">
            <p class="template_p">&copy; 2017 FeelXVideos | All rights reserved.</p>
            <p class="template_p">
                <a href="<?php echo main_url() ?>contact" style="color:#f5883d;"><?php echo lang('Contact'); ?></a>
                |
                <a href="<?php echo main_url() ?>tos"
                   style="color:#f5883d;"><?php echo lang('Terms & conditions'); ?></a> |
                <a href="<?php echo main_url() ?>policy"
                   style="color:#f5883d;"><?php echo lang('Privacy policy'); ?></a> |
                <a href="<?php echo main_url() ?>faq" style="color:#f5883d;"><?php echo lang('FAQ'); ?></a> |
                <a href="<?php echo main_url() ?>about" style="color:#f5883d;"><?php echo lang('About'); ?></a> |
                <a href="<?php echo main_url() ?>affiliate/register"
                   style="color:#f5883d;"><?php echo lang('Affiliate'); ?></a> |
                <a href="<?php echo main_url() ?>interactive-sex-toys"
                   style="color:#f5883d;"><?php echo lang('interactive-sex-toys'); ?></a>
            </p>
            <p class="template_p">
                <a href="<?php echo main_url() ?>2257"
                   style="color:#f5883d;"><?php echo lang('18 U.S.C. 2257 Record-Keeping Requirements Compliance Statement'); ?></a>
            </p>
            <p class="template_p"><?php echo lang('This site is owned by DatoroMedia BV'); ?></p>
            <p class="template_p"><?php echo lang('Operated by Webcasters BV'); ?></p>
            <p class="template_p">Phone: +31 20 7371194 | E-mail: support@datoromedia.com</p>
            <p class="template_p">Amstelplein 62, 1096 BC, Amsterdam, Netherlands</p>
        </div>
    </div>
</div>


</body>

<script>
    $(document).ready(function () {
        $('.selectpicker').change(function (e) {
            window.location = e.target.value;
        });
    });
</script>


</html>