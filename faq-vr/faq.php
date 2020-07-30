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
    <link rel="stylesheet" href="css/faq.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/b48621f243.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
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
    <div class="fqa">
        <header>
            <h2 class="title text-white">
                FeelVRPorn is the leading platform for Virtual Reality, interactive VR content.
            </h2>
            <h2 class="title text-white">
                Read these FAQs to find out about your account, payments, devices, and VR Porn.
            </h2>
            <form action="">
                <div class="form-group bg-white p-0">
                    <label for="search"></label>
                    <input type="text" class="form-control border-0 bg-transparent rounded-0" id="search"
                           placeholder="Search her ...">
                    <div class="search-icon">
                        <i class="fas fa-search"></i>
                    </div>
                </div>
            </form>
        </header>
        <div class="container-fluid bg-white">
            <div class="row">
                <div class="col-md-12 col-lg-4 col-xl-3 px-0">
                    <ul class="nav nav-pills flex-row flex-lg-column justify-content-center justify-content-lg-start" id="pills-tab"
                        role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active text-capitalize text-left" id="pills-account-tab"
                               data-toggle="pill"
                               href="#pills-account" role="tab" aria-controls="pills-account" aria-selected="true">my
                                account</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link text-capitalize text-left" id="pills-payment-tab" data-toggle="pill"
                               href="#pills-payment" role="tab" aria-controls="pills-payment" aria-selected="false">payment</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link text-capitalize text-left" id="pills-devices-tab" data-toggle="pill"
                               href="#pills-devices" role="tab" aria-controls="pills-devices" aria-selected="false">devices</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link text-capitalize text-left" id="pills-virtual-reality-tab"
                               data-toggle="pill"
                               href="#pills-virtual-reality" role="tab" aria-controls="pills-virtual-reality"
                               aria-selected="false">virtual reality porn</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link text-capitalize text-left" id="pills-section-tab" data-toggle="pill"
                               href="#pills-section" role="tab" aria-controls="pills-section" aria-selected="false">new
                                section</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-lg-8 col-xl-9">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-account" role="tabpanel"
                             aria-labelledby="pills-account-tab">
                            <div class="accordion" id="accordionFaqAccount">
                                <div class="card rounded-0">
                                    <div class="card-header border-0" id="headingAccountOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left clearfix w-100 text-decoration-none px-0"
                                                    type="button"
                                                    data-toggle="collapse" data-target="#collapseAccountOne"
                                                    aria-expanded="false" aria-controls="collapseAccountOne">
                                                How can I watch the content on FeelVRPorn?
                                                <span class="float-right">
                                                    <i class="fas fa-plus"></i>
                                                </span>
                                                <span class="float-right">
                                                    <i class="fas fa-minus"></i>
                                                </span>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseAccountOne" class="collapse" aria-labelledby="headingAccountOne"
                                         data-parent="#accordionFaqAccount">
                                        <div class="card-body text-left">
                                            FeelVRPorn is compatible with any smartphone or Virtual Reality viewer that
                                            is
                                            connected to a Virtual Reality Headset.
                                        </div>
                                    </div>
                                </div>
                                <div class="card rounded-0">
                                    <div class="card-header border-0" id="headingAccountTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left clearfix w-100 text-decoration-none px-0"
                                                    type="button" data-toggle="collapse" data-target="#collapseAccountTwo"
                                                    aria-expanded="false" aria-controls="collapseAccountTwo">
                                                Can I download the videos to watch offline?
                                                <span class="float-right">
                                                    <i class="fas fa-plus"></i>
                                                </span>
                                                <span class="float-right">
                                                    <i class="fas fa-minus"></i>
                                                </span>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseAccountTwo" class="collapse" aria-labelledby="headingAccountTwo"
                                         data-parent="#accordionFaqAccount">
                                        <div class="card-body text-left">
                                            FeelVRPorn is compatible with any smartphone or Virtual Reality viewer that
                                            is
                                            connected to a Virtual Reality Headset.
                                        </div>
                                    </div>
                                </div>
                                <div class="card rounded-0">
                                    <div class="card-header border-0" id="headingAccountThree">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left clearfix w-100 text-decoration-none px-0"
                                                    type="button" data-toggle="collapse" data-target="#collapseAccountThree"
                                                    aria-expanded="false" aria-controls="collapseAccountThree">
                                                How do I contact FeelVRPorn?
                                                <span class="float-right">
                                                    <i class="fas fa-plus"></i>
                                                </span>
                                                <span class="float-right">
                                                    <i class="fas fa-minus"></i>
                                                </span>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseAccountThree" class="collapse" aria-labelledby="headingAccountThree"
                                         data-parent="#accordionFaqAccount">
                                        <div class="card-body text-left">
                                            FeelVRPorn is compatible with any smartphone or Virtual Reality viewer that
                                            is
                                            connected to a Virtual Reality Headset.
                                        </div>
                                    </div>
                                </div>
                                <div class="card rounded-0">
                                    <div class="card-header border-0" id="headingAccountFour">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left clearfix w-100 text-decoration-none px-0"
                                                    type="button" data-toggle="collapse" data-target="#collapseAccountFour"
                                                    aria-expanded="false" aria-controls="collapseAccountFour">
                                                How do I cancel my subscription?
                                                <span class="float-right">
                                                    <i class="fas fa-plus"></i>
                                                </span>
                                                <span class="float-right">
                                                    <i class="fas fa-minus"></i>
                                                </span>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseAccountFour" class="collapse" aria-labelledby="headingAccountFour"
                                         data-parent="#accordionFaqAccount">
                                        <div class="card-body text-left">
                                            FeelVRPorn is compatible with any smartphone or Virtual Reality viewer that
                                            is
                                            connected to a Virtual Reality Headset.
                                        </div>
                                    </div>
                                </div>
                                <div class="card rounded-0">
                                    <div class="card-header border-0" id="headingAccountFive">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left clearfix w-100 text-decoration-none px-0"
                                                    type="button" data-toggle="collapse" data-target="#collapseAccountFive"
                                                    aria-expanded="false" aria-controls="collapseAccountFive">
                                                How can I subscribe, or unsubscribe, to the FeelVRPorn newsletter?
                                                <span class="float-right">
                                                    <i class="fas fa-plus"></i>
                                                </span>
                                                <span class="float-right">
                                                    <i class="fas fa-minus"></i>
                                                </span>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseAccountFive" class="collapse" aria-labelledby="headingAccountFive"
                                         data-parent="#accordionFaqAccount">
                                        <div class="card-body text-left">
                                            FeelVRPorn is compatible with any smartphone or Virtual Reality viewer that
                                            is
                                            connected to a Virtual Reality Headset.
                                        </div>
                                    </div>
                                </div>
                                <div class="card rounded-0">
                                    <div class="card-header border-0" id="headingAccountSix">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left clearfix w-100 text-decoration-none px-0"
                                                    type="button" data-toggle="collapse" data-target="#collapseAccountSix"
                                                    aria-expanded="false" aria-controls="collapseAccountSix">
                                                Why am I unable to log in to my account?
                                                <span class="float-right">
                                                    <i class="fas fa-plus"></i>
                                                </span>
                                                <span class="float-right">
                                                    <i class="fas fa-minus"></i>
                                                </span>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseAccountSix" class="collapse" aria-labelledby="headingAccountSix"
                                         data-parent="#accordionFaqAccount">
                                        <div class="card-body text-left">
                                            FeelVRPorn is compatible with any smartphone or Virtual Reality viewer that
                                            is
                                            connected to a Virtual Reality Headset.
                                        </div>
                                    </div>
                                </div>
                                <div class="card rounded-0">
                                    <div class="card-header border-0" id="headingAccountSeven">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left clearfix w-100 text-decoration-none px-0"
                                                    type="button" data-toggle="collapse" data-target="#collapseAccountSeven"
                                                    aria-expanded="false" aria-controls="collapseAccountSeven">
                                                Where can I find my account details?
                                                <span class="float-right">
                                                    <i class="fas fa-plus"></i>
                                                </span>
                                                <span class="float-right">
                                                    <i class="fas fa-minus"></i>
                                                </span>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseAccountSeven" class="collapse" aria-labelledby="headingAccountSeven"
                                         data-parent="#accordionFaqAccount">
                                        <div class="card-body text-left">
                                            FeelVRPorn is compatible with any smartphone or Virtual Reality viewer that
                                            is connected to a Virtual Reality Headset.
                                        </div>
                                    </div>
                                </div>
                                <div class="card rounded-0">
                                    <div class="card-header border-0" id="headingAccountEight">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left clearfix w-100 text-decoration-none px-0"
                                                    type="button" data-toggle="collapse" data-target="#collapseAccountEight"
                                                    aria-expanded="false" aria-controls="collapseAccountEight">
                                                How can I change my account details?
                                                <span class="float-right">
                                                    <i class="fas fa-plus"></i>
                                                </span>
                                                <span class="float-right">
                                                    <i class="fas fa-minus"></i>
                                                </span>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseAccountEight" class="collapse" aria-labelledby="headingAccountEight"
                                         data-parent="#accordionFaqAccount">
                                        <div class="card-body text-left">
                                            FeelVRPorn is compatible with any smartphone or Virtual Reality viewer that
                                            is connected to a Virtual Reality Headset.
                                        </div>
                                    </div>
                                </div>
                                <div class="card rounded-0">
                                    <div class="card-header border-0" id="headingAccountNine">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left clearfix w-100 text-decoration-none px-0"
                                                    type="button" data-toggle="collapse" data-target="#collapseAccountNine"
                                                    aria-expanded="false" aria-controls="collapseAccountNine">
                                                How do I change my password settings?
                                                <span class="float-right">
                                                    <i class="fas fa-plus"></i>
                                                </span>
                                                <span class="float-right">
                                                    <i class="fas fa-minus"></i>
                                                </span>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseAccountNine" class="collapse" aria-labelledby="headingAccountNine"
                                         data-parent="#accordionFaqAccount">
                                        <div class="card-body text-left">
                                            FeelVRPorn is compatible with any smartphone or Virtual Reality viewer that
                                            is connected to a Virtual Reality Headset.
                                        </div>
                                    </div>
                                </div>
                                <div class="card rounded-0">
                                    <div class="card-header border-0" id="headingAccountTen">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left clearfix w-100 text-decoration-none px-0"
                                                    type="button" data-toggle="collapse" data-target="#collapseAccountTen"
                                                    aria-expanded="false" aria-controls="collapseAccountNine">
                                                How can I change my email address?
                                                <span class="float-right">
                                                    <i class="fas fa-plus"></i>
                                                </span>
                                                <span class="float-right">
                                                    <i class="fas fa-minus"></i>
                                                </span>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseAccountTen" class="collapse" aria-labelledby="headingAccountTen"
                                         data-parent="#accordionFaqAccount">
                                        <div class="card-body text-left">
                                            FeelVRPorn is compatible with any smartphone or Virtual Reality viewer that
                                            is connected to a Virtual Reality Headset.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-payment" role="tabpanel"
                             aria-labelledby="pills-payment-tab">...
                        </div>
                        <div class="tab-pane fade" id="pills-devices" role="tabpanel"
                             aria-labelledby="pills-devices-tab">...
                        </div>
                        <div class="tab-pane fade" id="pills-virtual-reality" role="tabpanel"
                             aria-labelledby="pills-virtual-reality-tab">...
                        </div>
                        <div class="tab-pane fade" id="pills-section" role="tabpanel"
                             aria-labelledby="pills-section-tab">...
                        </div>
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
