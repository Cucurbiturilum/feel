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
    <link rel="stylesheet" type="text/css" href="css/how-it-works.css">
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
    <div class="template-how-it-work-page">
        <div class="container">
            <div class="top-side">
                <h2 class="title text-white">
                    Intimate pleasure
                </h2>
                <p class="main-text text-white mx-auto">
                    FeelXVideos brings you closer to the action by interfacing your sex toy with streaming adult
                    video content so you can feel the performer’s on-screen movements in real-time.
                </p>
                <div class="video-wrapper embed-responsive embed-responsive-16by9 mx-auto">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0"
                            allowfullscreen></iframe>
                </div>
            </div>
            <div class="started">
                <h2 class="title text-white">
                    How to get started
                </h2>
                <p class="main-text text-white mb-0 mx-auto">
                    Choose your category
                </p>
                <p class="main-text text-white mb-0 mx-auto">
                    Wait for your sex toy recommendation
                </p>
                <p class="main-text text-white mb-5 mx-auto">
                    Complete your order connect your new toy
                </p>
                <div class="stages d-flex justify-content-center">
                    <div class="stage-item card bg-transparent">
                        <img src="img/best-porn-sites.png" alt="best-porn-sites" class="card-img-top mb-4">
                        <p class="card-text text-white">
                            Choose the Porn category
                        </p>
                    </div>
                    <div class="px-2 px-md-4 d-flex align-items-center arrow">
                        <img src="img/divider-line-png-single-sided-arrow.png" alt="arrow" class="img-fluid">
                    </div>
                    <div class="stage-item card bg-transparent">
                        <img src="img/best-porn-sites-2.png" alt="best-porn-sites" class="card-img-top mb-4">
                        <p class="card-text text-white text-center">
                            Get the Sex-Toy <br>
                            Recommendation
                        </p>
                    </div>
                    <div class="px-2 px-md-4 d-flex align-items-center arrow">
                        <img src="img/divider-line-png-single-sided-arrow.png" alt="arrow" class="img-fluid">
                    </div>
                    <div class="stage-item card bg-transparent">
                        <img src="img/card.png" alt="best-porn-sites" class="card-img-top mb-4">
                        <p class="card-text text-white text-center">
                            Get you order and <br>
                            connect the Toy
                        </p>
                    </div>
                </div>
                <div class="media">
                    <img src="img/best-porn-sites.png" class="media-img align-self-center mr-3" alt="best-porn-sites">
                    <div class="media-body">
                        <h2 class="title mt-0 text-white mb-0">Choose your category</h2>
                    </div>
                </div>
                <p class="main-text text-white mb-0 mx-auto">
                    All members get unlimited access to adult video content from the interactive video library.
                </p>
                <p class="main-text text-white mb-5 mx-auto">
                    Connect your device to interact with the hottest porn stars, stream the latest adult titles, and
                    enjoy an orgasmic sensual experience.
                </p>
                <p class="main-text text-white mx-auto">
                    Choose up to 5 categories to start.
                </p>
                <div class="category">
                    <a href="#" role="button" class="category-item btn text-decoration-none active">
                        MILF
                    </a>
                    <a href="#" role="button" class="category-item btn text-decoration-none">
                        Lesbian
                    </a>
                    <a href="#" role="button" class="category-item btn text-decoration-none">
                        Japanese
                    </a>
                    <a href="#" role="button" class="category-item btn text-decoration-none">
                        Ebony
                    </a>
                    <a href="#" role="button" class="category-item btn text-decoration-none">
                        Hentai
                    </a>
                    <a href="#" role="button" class="category-item btn text-decoration-none">
                        Anal
                    </a>
                    <a href="#" role="button" class="category-item btn text-decoration-none">
                        Mature
                    </a>
                    <a href="#" role="button" class="category-item btn text-decoration-none">
                        Threesome
                    </a>
                    <a href="#" role="button" class="category-item btn text-decoration-none">
                        Big Tits
                    </a>
                    <a href="#" role="button" class="category-item btn text-decoration-none">
                        Big Dick
                    </a>
                    <a href="#" role="button" class="category-item btn text-decoration-none">
                        Amateur
                    </a>
                    <a href="#" role="button" class="category-item btn text-decoration-none">
                        Teen
                    </a>
                    <a href="#" role="button" class="category-item btn text-decoration-none">
                        Transgender
                    </a>
                    <a href="#" role="button" class="category-item btn text-decoration-none">
                        Creampai
                    </a>
                    <a href="#" role="button" class="category-item btn text-decoration-none">
                        Indian
                    </a>
                    <a href="#" role="button" class="category-item btn text-decoration-none">
                        Gangbang
                    </a>
                    <a href="#" role="button" class="category-item btn text-decoration-none">
                        Bondage
                    </a>
                </div>
                <div class="arrow">
                    <img src="img/arrow-down.png" alt="arrow-down" class="img-fluid">
                </div>
                <div class="media">
                    <img src="img/best-porn-sites-2.png" class="media-img align-self-center mr-3" alt="best-porn-sites">
                    <div class="media-body">
                        <h2 class="title mt-0 text-white mb-0">Choose your device</h2>
                    </div>
                </div>
                <p class="main-text text-white mx-auto mb-5">
                    Вased on your preferences we’ll offer the sex toy that’s right for you. Simply complete your order
                    and get ready to experience unrestricted pleasure.
                </p>
                <div class="mb-5">
                    <img src="img/best-porn-sites-logo.png" alt="best-porn-sites"
                         class="img-fluid d-block mx-auto mb-4">
                    <a href="#" class="link-item">
                        <u>
                            View more
                        </u>
                    </a>
                </div>
                <div class="arrow">
                    <img src="img/arrow-down.png" alt="arrow-down" class="img-fluid">
                </div>
                <div class="media">
                    <img src="img/card.png" class="media-img align-self-center mr-3" alt="best-porn-sites">
                    <div class="media-body">
                        <h2 class="title mt-0 text-white mb-0">Complete your order</h2>
                    </div>
                </div>
                <p class="main-text text-white mx-auto mb-5">
                    Subscribe to 6 months of FeelXVideos premium to get this toy for free now.
                </p>
                <div class="price d-flex align-items-center justify-content-center flex-wrap flex-md-nowrap">
                    <p class="main-text text-white pr-md-5">
                        Your price is:
                        <span class="pl-5">
                             $ 000
                        </span>
                        <span class="px-2">
                            +
                        </span>
                        <span class="strikethrough-diagonal pr-5">
                            $000
                        </span>
                        <span class="d-block text-right text-warning mt-3 mt-md-2">
                           + Free Sex Toys
                        </span>
                    </p>
                    <img src="img/best-porn-sites-logo.png" alt="best-porn-sites" class="img-fluid price-img">
                </div>
                <button class="btn btn-warning text-capitalize">
                    Complete Your Oder
                </button>
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