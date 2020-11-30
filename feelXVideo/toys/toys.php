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
    <link rel="stylesheet" type="text/css" href="css/toys.css">
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
    <div class="template-toys">
        <div class="section-1">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 d-flex flex-column justify-content-center">
                        <h2 class="title">
                            Feel your favorite pornstars.
                        </h2>
                        <p class="main-text">
                            Get closer to the action and feel every movement with the world’s most advanced interactive
                            sex toys.
                        </p>
                        <div class="button-group text-left">
                            <button class="btn btn-warning text-white mr-5" data-toggle="modal" data-target="#modal">
                                Learn More
                            </button>
                            <button class="btn btn-warning text-white">
                                Buy Now
                            </button>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 d-flex align-items-end">
                        <img src="img/video-toys.png" alt="video-toys" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <div class="section-2">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-3 col-lg-2 d-md-flex align-items-center">
                        <img src="img/Keon-side-front-new-material-13.png" alt="Keon-side-front"
                             class="keon-img img-fluid mb-5 mb-md-0">
                    </div>
                    <div class="col-12 col-md-8 d-flex justify-content-center flex-column">
                        <h2 class="title text-center">
                            Explore your wildest fantasies
                        </h2>
                        <p class="main-text text-center">
                            Sit back & enjoy unrestricted pleasure with the world’s
                            smartest male masturbators.
                        </p>
                        <div class="button-group text-center">
                            <button class="btn btn-warning text-white" data-toggle="modal" data-target="#modal">
                                Learn More
                            </button>
                        </div>
                    </div>
                    <div class="col-12 d-md-none">
                        <img src="img/girls.png" alt="girls" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <div class="section-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-6 text-md-left mb-5 mb-md-0">
                        <img src="img/pornHubSync.png" alt="pornHubSync" class="img-fluid">
                    </div>
                    <div class="col-12 col-md-5 d-flex justify-content-center flex-column">
                        <h2 class="title text-left">
                            Control your experience.
                        </h2>
                        <p class="main-text">
                            If you haven’t tried interactive porn yet, you’re missing
                            out on a unique sexual experience.
                        </p>
                        <div class="button-group text-left">
                            <button class="btn btn-warning text-white" data-toggle="modal" data-target="#modal">
                                Learn More
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-5 offset-lg-1 d-flex justify-content-center flex-column">
                        <h2 class="title text-left">
                            Discover the nex generation of
                            teledildonic sex toys
                        </h2>
                        <p class="main-text">
                            Stream the latest interactive, X-rated sex scenes on your phone, tablet or laptop. Sync your
                            new interactive sex toy with over 4 000+ HD interactive sex scenes and explore the hottest
                            new titles. Enjoy unrestricted pleasure and get closer to the action than ever before.
                        </p>
                        <div class="button-group text-left">
                            <button class="btn btn-warning text-white" data-toggle="modal" data-target="#modal">
                                Learn More
                            </button>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 text-md-right mb-5 mb-md-0">
                        <img src="img/ipod-toy.png" alt="ipod-toy" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <div class="section-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="title text-center">
                            A mind-blowing sexual experience.
                        </h2>
                        <p class="main-text text-center mx-auto">
                            The next generation of male masturbators has finally arrived. Featuring sleek, compact
                            designs and
                            smart, interactive technology, they’re the perfect fusion of function and form. Guaranteed
                            to give you a
                            mind-blowing sexual experience that will change the way you look at porn for good.
                        </p>
                        <p class="main-text text-center mx-auto">
                            Choose your device, connect to the on-screen action, and let your imagination run wild.
                        </p>
                    </div>
                    <div class="col-12">
                        <div class="row row-cols-1 row-cols-md-2">
                            <div class="col mb-4">
                                <div class="card card-1 h-100">
                                    <img src="img/toy-1.png" class="w-50 ml-auto" alt='toy-1'>
                                    <div class="card-body p-0">
                                        <h5 class="card-title">KEON (New)</h5>
                                        <h6 class="subtitle">
                                            Feel The Future
                                        </h6>
                                        <p class="card-text">The KEON by KIIROO is no ordinary male masturbator. This
                                            compact, automated next-gen male stroker sets a new standard in pleasure
                                            technology. Its sleek & stylish looks and ergonomic design make it the
                                            perfect way to experience interactive adult video content.</p>
                                        <div class="button-group text-left mb-0">
                                            <button class="btn btn-warning text-white">
                                                Check Now
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-4">
                                <div class="card card-2 h-100 pt-2">
                                    <img src="img/toy-2.png" class="h-50 ml-auto" alt='toy-1'>
                                    <div class="card-body p-0">
                                        <h5 class="card-title">HANDY</h5>
                                        <h6 class="subtitle">
                                            Take Control
                                        </h6>
                                        <p class="card-text">Sit back, relax, and enjoy your favorite adult performers
                                            and let the Handy’s advanced technology do the work for you. Connect with
                                            interactive X-rated video content and masturbate in time to your favorite
                                            cam shows, thanks to Handy’s smart wi-fi control.</p>
                                        <div class="button-group text-left mb-0">
                                            <button class="btn btn-warning text-white">
                                                Check Now
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-4">
                                <div class="card card-3 h-100 pt-2">
                                    <img src="img/toy-3.png" class="h-50 ml-auto" alt='toy-1'>
                                    <div class="card-body p-0">
                                        <h5 class="card-title">TITAN by KIIRO</h5>
                                        <h6 class="subtitle">
                                            Unleash Your Desire
                                        </h6>
                                        <p class="card-text">This bestselling interactive male masturbator by Kiiroo is
                                            the perfect fusion of technology and design. Increase your stamina, maximize
                                            your performance, and achieve exhilarating climaxes from the comfort of your
                                            own home.</p>
                                        <div class="button-group text-left mb-0">
                                            <button class="btn btn-warning text-white">
                                                Check Now
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-4">
                                <div class="card card-4 h-100 pt-2">
                                    <img src="img/toy-4.png" class="h-50 ml-auto" alt='toy-1'>
                                    <div class="card-body p-0">
                                        <h5 class="card-title">ONYX+</h5>
                                        <h6 class="subtitle">
                                            Pleasure Redefined
                                        </h6>
                                        <p class="card-text">Incorporating the latest sex technology in the same stylish
                                            form factor, the Onyx+ will elevate you to new heights of orgasmic pleasure.
                                            The elegant, compact design, and real-feel sleeve, makes this one of the
                                            most comfortable male strokers you can buy.</p>
                                        <div class="button-group text-left mb-0">
                                            <button class="btn btn-warning text-white">
                                                Check Now
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-4">
                                <div class="card card-5 h-100 pt-2">
                                    <img src="img/toy-5.png" class="h-50 ml-auto" alt='toy-1'>
                                    <div class="card-body p-0">
                                        <h5 class="card-title">Titan FeelPornstar Experience</h5>
                                        <p class="card-text">Feel the mind-blowing vibrations that react in real-time to
                                            the action you see on screen.</p>
                                        <div class="button-group text-left mb-0">
                                            <button class="btn btn-warning text-white">
                                                Check Now
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-4">
                                <div class="card card-6 h-100 pt-2">
                                    <img src="img/toy-6.png" class="h-50 ml-auto" alt='toy-1'>
                                    <div class="card-body p-0">
                                        <h5 class="card-title">Onyx+ FeelPornstar Experience</h5>
                                        <p class="card-text">Feel everything that you see on screen with the contracting
                                            movements of the Onyx+. Choose your favorite star and get right into the
                                            action!</p>
                                        <div class="button-group text-left mb-0">
                                            <button class="btn btn-warning text-white">
                                                Check Now
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-6">
            <div class="container">
                <div class="row">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-6 d-flex flex-column justify-content-center">
                                <h2 class="title">
                                    Our Partners
                                </h2>
                                <p class="main-text">
                                    We work with the world’s leading sex toy manufacturers to bring you an experience
                                    that’s fully compatible with the latest and most advanced teledildonic devices.
                                </p>
                            </div>
                            <div class="col-12 col-md-6 d-flex align-items-end">
                                <img src="img/group-3.png" alt="video-toys" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-7">
            <div class="container">
                <div class="row">
                    <div class="col-10 registration-form mx-auto">
                        <h3 class="title">
                            Enter your email for more information and get the the latest
                            discounts and sex toy offers sent direct to your inbox.
                        </h3>
                        <form action="">
                            <div class="form-group flex-wrap flex-md-nowrap">
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter your Email">
                                <button type="submit" class="btn btn-warning">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header border-0 p-0 d-block">
                        <h5 class="modal-title title text-center" id="modalLabel">Before you go!</h5>
                    </div>
                    <div class="modal-body border-0 p-0">
                        <p class="main-text text-center mb-5">
                            Unlimited interactive porn. <br>
                            Sign up today and get 30-days premium membership free.
                        </p>
                        <p class="main-text text-center">
                            Ready to get started? Enter your email and we’ll send an exclusive code direct to your inbox.
                        </p>
                    </div>
                    <div class="modal-footer border-0 p-0">
                        <form action="" class="w-100">
                            <div class="form-group flex-wrap flex-md-nowrap">
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter your Email">
                                <button type="submit" class="btn btn-warning">Send me my code</button>
                            </div>
                        </form>
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