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
    <link rel="stylesheet" type="text/css" href="css/template_B4-5.css">
    <link rel="stylesheet" type="text/css" href="css/pornstar.css">
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
    <div class="template-pornstar">
        <div class="header-banner">
            <div class="container">
                <div class="row">
                    <div class="col-12 position-relative">
                        <img src="img/actress.png" alt="actress" class="img-fluid">
                        <div class="description position-absolute d-flex flex-column">
                            <h2 class="title text-uppercase text-white text-left">
                                MEET QUEEN OF THE MONTH
                            </h2>
                            <h2 class="title text-white text-left mb-2 mb-sm-3 mb-md-4 mb-lg-5">
                                Giggi Guerero
                            </h2>
                            <p class="banner-text text-white text-left mb-2 mb-sm-3 mb-md-4 mb-lg-5">
                                Lorem ipsum doler it smit, <br>
                                ay tan baon changi ha
                            </p>
                            <button class="btn-warning text-white">
                                Watch with free trial
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="video">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-menu d-flex justify-content-between">
                            <p class="text-white">
                                Top Rated porn stars
                            </p>
                            <div>
                                <p class="d-inline-block text-white mr-3">
                                    <small>
                                        Sort by
                                    </small>
                                </p>
                                <div class="btn-group d-inline-block">
                                    <button type="button" class="btn btn-warning dropdown-toggle rounded-pill border-0" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                        Most Viewed
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Most Viewed</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mb-5">
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
                                        <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24"
                                             width="24">
                                            <path d="M0 0h24v24H0V0z" fill="none"/>
                                            <path fill="#928b8b"
                                                  d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z"/>
                                        </svg>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mb-5">
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
                                        342 Videos
                                    </p>
                                </div>
                                <div class="right-sidebar d-flex">
                                    <p class="views">
                                        33.2k
                                    </p>
                                    <p class="ml-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24"
                                             width="24">
                                            <path d="M0 0h24v24H0V0z" fill="none"/>
                                            <path fill="#928b8b"
                                                  d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z"/>
                                        </svg>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mb-5">
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
                                        342 Videos
                                    </p>
                                </div>
                                <div class="right-sidebar d-flex">
                                    <p class="views">
                                        33.2k
                                    </p>
                                    <p class="ml-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24"
                                             width="24">
                                            <path d="M0 0h24v24H0V0z" fill="none"/>
                                            <path fill="#928b8b"
                                                  d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z"/>
                                        </svg>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mb-5">
                        <div class="card rounded-0 p-0 bg-transparent border-0">
                            <div class="card-header p-0 rounded-0">
                                <img src="img/actress-4.png" class="card-img-top rounded-0" alt="actress">
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
                                        Lisa Ann
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
                                        <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24"
                                             width="24">
                                            <path d="M0 0h24v24H0V0z" fill="none"/>
                                            <path fill="#928b8b"
                                                  d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z"/>
                                        </svg>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mb-5">
                        <div class="card rounded-0 p-0 bg-transparent border-0">
                            <div class="card-header p-0 rounded-0">
                                <img src="img/actress-5.png" class="card-img-top rounded-0" alt="actress">
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
                                        Romi Rain
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
                                        <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24"
                                             width="24">
                                            <path d="M0 0h24v24H0V0z" fill="none"/>
                                            <path fill="#928b8b"
                                                  d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z"/>
                                        </svg>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mb-5">
                        <div class="card rounded-0 p-0 bg-transparent border-0">
                            <div class="card-header p-0 rounded-0">
                                <img src="img/actress-6.png" class="card-img-top rounded-0" alt="actress">
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
                                        Suny Leone
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
                                        <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24"
                                             width="24">
                                            <path d="M0 0h24v24H0V0z" fill="none"/>
                                            <path fill="#928b8b"
                                                  d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z"/>
                                        </svg>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <nav class="w-100">
                            <ul class="pagination justify-content-end">
                                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
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
