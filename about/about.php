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
    <link rel="stylesheet" href="css/feelvr-about.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/b48621f243.js" crossorigin="anonymous"></script>


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
    <div class="about">
        <header>
            <div class="container-fluid h-100 d-flex align-items-center text-left">
                <div class="row">
                    <h2 class="title text-white font-weight-bold text-capitalize col-12 col-lg-10 col-xl-8"> what is
                        feel<span class="text-danger">VR</span>Porn?</h2>
                    <p class="subtitle text-white col-12 col-md-10 col-xl-8">Fully interactive VR porn for an
                        immersive sexual experience.</p>
                    <div class="col-12">
                        <button class="btn btn-danger bg-red text-white text-uppercase d-block rounded-pill px-4 mx-auto mx-md-0">
                            try 30 days for free
                        </button>
                    </div>
                </div>
            </div>
        </header>
        <div class="container-fluid section-1">
            <div class="row h-100">
                <div class="col-7 d-flex flex-column justify-content-center">
                    <p class="subtitle text-white text-left">
                        FeelVRPorn is at the leading-edge in interactive online porn. We connect viewers with adult performers
                        through state-of-the-art VR technology. Get ready for the future of porn.
                    </p>
                    <p class="section-text text-white text-left">
                        Members get unlimited access to a database of 100+ high definition VR porn videos for one affordable,
                        monthly subscription.
                    </p>
                </div>
                <div class="col-5 d-flex flex-column justify-content-center align-self-center">
                    <img src="img/girl-vr.png" alt="girl-vr" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="container-fluid section-2">
            <div class="row h-100">
                <div class="col-5 d-flex flex-column justify-content-center align-self-center">
                    <img src="img/girl-feel.png" alt="girl-feel" class="img-fluid">
                </div>
                <div class="col-7 d-flex flex-column justify-content-center">
                    <p class="subtitle text-white text-left">
                        An immersive sexual experience
                    </p>
                    <p class="section-text text-white text-left">
                        Connect your interactive VR Headset and sex toy to the FeelVRPorn platform and discover a new world of
                        possibilities.
                    </p>
                    <p class="section-text text-white text-left">
                        You’ll be able to interact with your favorite adult performers and experience the thrill of sexual
                        pleasure, just like you were in the same room.
                    </p>
                </div>
            </div>
        </div>
        <div class="container-fluid section-3">
            <div class="row h-100">
                <div class="col-7 d-flex flex-column justify-content-center">
                    <p class="subtitle text-white text-left">
                        Watch on any VR platform
                    </p>
                    <p class="section-text text-white text-left">
                        Our videos are custom coded using proprietary software to be compatible with all popular VR platforms
                        including Oculus Rift, Oculus Go, Oculus Quest, PlayStation VR, htc VIVE, and more!
                    </p>
                    <p class="section-text text-white text-left">
                        You’ll be able to watch the latest titles in mindblowing Ultra HDVR, in up to 4K resolution, that will
                        change the way you look at porn for good.
                    </p>
                    <p class="section-text text-white text-left">
                        FeelVRPorn content is shot in high-quality POV, so you can get closer to the action and enjoy a fully
                        immersive experience.
                    </p>
                </div>
                <div class="col-5 d-flex flex-column justify-content-center align-self-center">
                    <img src="img/gay&girl-vr.png" alt="gay&girl-vr" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="container-fluid section-4">
            <div class="row h-100">
                <div class="col-12 d-flex flex-column justify-content-center">
                    <h2 class="section-title text-white font-weight-bold text-uppercase text-center">support all vr
                        platforms</h2>
                    <div class="platforms d-flex justify-content-center flex-wrap">
                        <div class="platform-logo d-flex justify-content-center align-items-center">
                            <div class="platform-logo-ellipse m-2 p-2 p-md-3 rounded-circle bg-white d-flex justify-content-center align-items-center">
                                <img src="img/platforms/oculus-rift-logo.png" alt="oculus-rift" class="img-fluid">
                            </div>
                        </div>
                        <div class="platform-logo d-flex justify-content-center align-items-center">
                            <div class="platform-logo-ellipse m-2 p-2 p-md-3 rounded-circle bg-white d-flex justify-content-center align-items-center">
                                <img src="img/platforms/oculus-go-logo.png" alt="oculus-go" class="img-fluid">
                            </div>
                        </div>
                        <div class="platform-logo d-flex justify-content-center align-items-center">
                            <div class="platform-logo-ellipse m-2 p-2 p-md-3 rounded-circle bg-white d-flex justify-content-center align-items-center">
                                <img src="img/platforms/oculus-quest-logo.png" alt="oculus-quest" class="img-fluid">
                            </div>
                        </div>
                        <div class="platform-logo d-flex justify-content-center align-items-center">
                            <div class="platform-logo-ellipse m-2 p-2 p-md-3 rounded-circle bg-white d-flex justify-content-center align-items-center">
                                <img src="img/platforms/PS-VR-logo.png" alt="PS-VR" class="img-fluid">
                            </div>
                        </div>
                        <div class="platform-logo d-flex justify-content-center align-items-center">
                            <div class="platform-logo-ellipse m-2 p-2 p-md-3 rounded-circle bg-white d-flex justify-content-center align-items-center">
                                <img src="img/platforms/htc-vive-logo.png" alt="htc-vive" class="img-fluid">
                            </div>
                        </div>
                        <div class="platform-logo d-flex justify-content-center align-items-center">
                            <div class="platform-logo-ellipse m-2 p-2 p-md-3 rounded-circle bg-white d-flex justify-content-center align-items-center">
                                <img src="img/platforms/gear-VR-logo.png" alt="gear-VR" class="img-fluid">
                            </div>
                        </div>
                        <div class="platform-logo d-flex justify-content-center align-items-center">
                            <div class="platform-logo-ellipse m-2 p-2 p-md-3 rounded-circle bg-white d-flex justify-content-center align-items-center">
                                <img src="img/platforms/mr-logo.png" alt="mr-logo" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="mx-auto">
                        <button class="btn btn-dark bg-black text-white border-0 text-uppercase d-block rounded-pill px-4 px-md-5 py-md-3 mx-md-0">
                            try 30 days for free <i class="fas fa-chevron-right ml-2 ml-md-4"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid section-5">
            <div class="row h-100">
                <div class="col-5 d-flex flex-column justify-content-center align-self-center">
                    <img src="img/section-5-img.png" alt="girl-feel" class="img-fluid">
                </div>
                <div class="col-7 d-flex flex-column justify-content-center">
                    <p class="subtitle text-white text-left">
                        Stunning content. Superb values
                    </p>
                    <p class="section-text text-white text-left">
                        Members can enjoy unlimited access to a huge database of VR porn videos and stream them on any
                        compatible device, any time they choose.
                    </p>
                    <p class="section-text text-white text-left">
                        With new content being added daily, you’ll never run out of high-quality VR titles to watch.
                    </p>
                </div>
            </div>
        </div>
        <div class="container-fluid section-6">
            <div class="row h-100">
                <div class="col-7 d-flex flex-column justify-content-center">
                    <p class="subtitle text-white text-left">
                        Personalized for you
                    </p>
                    <p class="section-text text-white text-left">
                        Get personal and trending video recommendations based on your personal preferences.
                    </p>
                    <p class="section-text text-white text-left">
                        Enjoy a limitless collection of online VR porn that’s made just for you, so you can dive into a new
                        world of online porn, whenever you choose.
                    </p>
                </div>
                <div class="col-5 d-flex flex-column justify-content-center align-self-center">
                    <img src="img/section-6-img.png" alt="girl" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="container-fluid section-7">
            <div class="row h-100">
                <div class="col-5 d-flex flex-column justify-content-center align-self-center">
                    <img src="img/section-7-img.png" alt="girl-feel" class="img-fluid">
                </div>
                <div class="col-7 d-flex flex-column justify-content-center">
                    <p class="subtitle text-white text-left">
                        Discreet and secure
                    </p>
                    <p class="section-text text-white text-left">
                        Our data privacy and discreet billing ensure your data won’t be shared and your subscription won’t be recognizable on your statement.
                    </p>
                </div>
            </div>
        </div>
        <div class="container-fluid section-8">
            <div class="row h-100">
                <div class="col-7 d-flex flex-column justify-content-center">
                    <p class="subtitle text-white text-left">
                        Make a genuine connection
                    </p>
                    <p class="section-text text-white text-left">
                        Our interactive VR porn content creates a totally unique and immersive experience, allowing you to enter a new dimension of online porn.
                    </p>
                    <p class="section-text text-white text-left">
                        Simply connect your device, browse, and click play to feel VR porn right away.
                    </p>
                </div>
                <div class="col-5 d-flex flex-column justify-content-center align-self-center">
                    <img src="img/section-8-img.png" alt="girl" class="img-fluid">
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
