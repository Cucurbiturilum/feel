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
    <link rel="stylesheet" type="text/css" href="css/content.css">
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
    <div class="template-content">
        <div class="banner">
            <div class="container">
                <h2 class="title text-white">
                    Why become a FeelXVideos Content Creator?
                </h2>
                <p class="main-text text-white">
                    Our Content Creator Program is meant for you to be able to share your content with the Global Leader
                    of Interactive Porn in order to boost your traffic, your branding and your exposure whether you are
                    a <span class="text-warning">adult entertainment studio</span>, a <span class="text-warning">content producer</span>
                    or an independent pornstar.
                </p>
                <button class="btn btn-warning text-white text-uppercase">
                    apply now!
                </button>
                <h2 class="title text-white">
                    Earn additional revenue through our <br>
                    Content Creators Program!
                </h2>
                <p class="main-text text-white mb-0">
                    Share your content with us and earn <span class="text-warning">20% commission which</span> is
                    calculated on the total number of
                    minutes of Producer viewed video content compared to the not producer video content.
                </p>
            </div>
        </div>
        <div class="earn">
            <div class="container h-100">
                <h2 class="title text-white">
                    Earn EXTRA income with FeelXVideos
                </h2>
                <p class="main-text text-white">
                    The content that you will share with us don’t have to be exclusive. You can share it with other
                    partners as well. This is why you can consider FeelXVideos’ Content Creators Program as an <span
                            class="text-warning"> extra</span>
                    income.
                </p>
            </div>
        </div>
        <div class="section-3 position-relative">
            <div class="container">
                <img src="img/iPhoneX.png" alt="iphone" class="iphone-img position-absolute img-fluid">
                <h2 class="title text-white">
                    What are we looking for?
                </h2>
                <p class="main-text text-white">
                    Our main focus is on interactive porn videos, but first of all we are looking for great quality content
                    filmed in landscape(mainly HD and 4K).
                </p>
                <h2 class="title text-white">
                    What does interactive content mean?
                </h2>
                <p class="main-text text-white">
                    We are looking for videos, make them interactive so they can be connected with a male sex toy and then
                    upload them on our website. With that being said, we are looking for intercourse, blowjob, handjob, FFM
                    threesome and solo women masturbating with a sex toy.
                </p>
                <button class="btn btn-warning text-white text-uppercase mb-0">
                    apply now!
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