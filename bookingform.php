<?php
session_start();
include_once 'config.php';
if (!$_SESSION['user_name']) {
    header("index.php");
}

?>
<!DOCTYPE html>

<html>

<head>

    <title>ZEEFEK</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style/jquery.qtip.css" />
    <link rel="stylesheet" type="text/css" href="style/jquery-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="style/superfish.css" />
    <link rel="stylesheet" type="text/css" href="style/flexnav.css" />
    <link rel="stylesheet" type="text/css" href="style/DateTimePicker.min.css" />
    <link rel="stylesheet" type="text/css" href="style/fancybox/jquery.fancybox.css" />
    <link rel="stylesheet" type="text/css" href="style/fancybox/helpers/jquery.fancybox-buttons.css" />
    <link rel="stylesheet" type="text/css" href="style/revolution/layers.css" />
    <link rel="stylesheet" type="text/css" href="style/revolution/settings.css" />
    <link rel="stylesheet" type="text/css" href="style/revolution/navigation.css" />
    <link rel="stylesheet" type="text/css" href="style/base.css" />
    <link rel="stylesheet" type="text/css" href="style/responsive.css" />
    <script type="text/javascript" src="script/jquery.min.js"></script>
</head>

<body class="template-page-home">

    <!-- Header -->
    <div class="template-header">

        <!-- Top header -->
        <div class="template-header-top">

            <!-- Logo -->
            <!-- 	<div class="template-header-top-logo">
				<a href="index.php" title="">
					<img src="media/image/logo.png" alt="" class="template-logo" />
					<img src="media/image/logo_sticky.png" alt="" class="template-logo template-logo-sticky" />
				</a>
			</div> -->

            <!-- Menu-->
            <div class="template-header-top-menu template-main">
                <nav>
                    <!-- Default menu-->
                    <div class="template-component-menu-default">
                        <ul class="sf-menu">
                            <li><a href="index.php" class="template-state-selected">Home</a></li>
                            <li>
                                <a href="about.php">About </a>

                            </li>

                            <li>
                                <a href="service.php">Services</a>

                            </li>

                            <li><a href="gallery.php">Gallery</a></li>
                            <li><a href="book-your-wash.php">Booking</a></li>
                            <li>
                                <a href="contact.php">Contact</a>

                            </li>
                        </ul>
                    </div>

                </nav>
                <nav>

                    <!-- Mobile menu-->
                    <div class="template-component-menu-responsive">
                        <ul class="flexnav">
                            <li><a href="#"><span class="touch-button template-icon-meta-arrow-large-tb template-component-menu-button-close"></span>&nbsp;</a></li>
                            <li><a href="index.php" class="template-state-selected">Home</a></li>

                            <li>
                                <a href="about.php">About </a>

                            </li>

                            <li>
                                <a href="service.php">Services</a>

                            </li>

                            <li><a href="gallery.php">Gallery</a></li>
                            <li><a href="book-your-wash.php">Booking</a></li>
                            <li>
                                <a href="contact.php">Contact</a>

                            </li>
                        </ul>
                    </div>

                </nav>

            </div>

            <!-- Social icons -->
            <div class="template-header-top-icon-list template-component-social-icon-list-1">
                <ul class="template-component-social-icon-list">
                    <li><a href="https://www.twitter.com/zeekef@gmail.com" class="template-icon-social-twitter" target="_blank"></a></li>
                    <li><a href="https://www.facebook.com/ZEEFEk" class="template-icon-social-facebook" target="_blank"></a></li>
                    <li><a href="#" class="template-icon-social-dribbble" target="_blank"></a></li>
                    <li><a href="book-your-wash.php" class="template-icon-meta-cart"></a></li>
                    <li style="color:white; font-size:15px;"> <?php
                                                                echo    $_SESSION['user_name'];
                                                                ?></li>
                    <li><a href="Logout.php" class="" style="font-size: 12px;">Logout</a></li>
                </ul>
            </div>

        </div>

        <div class="template-header-bottom">

            <div id="rev_slider_wrapper" class="rev_slider_wrapper fullwidthbanner-container">

                <div id="rev_slider" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
                    <ul>
                        <!-- Slide 1 -->
                        <li data-index="slide-1" data-transition="fade" data-slotamount="1" data-easein="default" data-easeout="default" data-masterspeed="500" data-rotate="0" data-delay="6000">
                            <!-- Main image -->
                            <img src="media/image/slider1.jpg" alt="slide-1" data-bgfit="cover" data-bgposition="center bottom">
                            <!-- Layers -->
                            <!-- Layer 01 -->
                            <div class="tp-caption tp-resizeme" data-x="['center','center','center','center','center']" data-hoffset="['0','0','0','0','0']" data-y="['middle','middle','middle','middle','middle']" data-voffset="['-120','-105','-91','-33','-36']" data-fontsize="['17','17','17','15','14']" data-fontweight="['700','700','700','700','900']" data-lineheight="['17','17','17','15','27']" data-whitespace="['nowrap','nowrap','nowrap','nowrap','normal']" data-width="['auto','auto','auto','auto','300']" data-height="auto" data-basealign="grid" data-transform_idle="o:1;" data-transform_in="o:1;x:[175%];y:0px;z:0px;s:2000;e:Power4.easeInOut;" data-transform_out="o:0;x:0px;y:0px;z:0px;s:1000;e:Power4.easeInOut;" data-mask_in="x:[-100%];y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="100" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="letter-spacing: 2px;">

                                WELCOME TO ZEEFEK SERVICE
                            </div>

                            <!-- Layer 02 -->
                            <div class="tp-caption tp-resizeme" data-x="['center','center','center','center','center']" data-hoffset="['0','0','0','0','0']" data-y="['middle','middle','middle','middle','middle']" data-voffset="['-41','-35','-29','17','26']" data-fontsize="['62','55','43','29','22']" data-fontweight="['900','900','900','700','700']" data-lineheight="['62','55','43','29','32']" data-whitespace="['nowrap','nowrap','nowrap','nowrap','normal']" data-width="['auto','auto','auto','auto','300']" data-height="auto" data-basealign="grid" data-transform_idle="o:1;" data-transform_in="o:1;x:0px;y:[100%];z:0px;s:2000;e:Power4.easeInOut;" data-transform_out="o:1;x:0px;y:[100%];z:0px;s:1000;e:Power4.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="letter-spacing: 4px;">

                                YOUR CAR IS ALWAYS
                            </div>

                            <!-- Layer 03 -->
                            <div class="tp-caption tp-resizeme" data-x="['center','center','center','center','center']" data-hoffset="['0','0','0','0','0']" data-y="['middle','middle','middle','middle','middle']" data-voffset="['41','35','29','60','74']" data-fontsize="['62','55','43','29','22']" data-fontweight="['900','900','900','700','700']" data-lineheight="['62','55','43','29','32']" data-whitespace="['nowrap','nowrap','nowrap','nowrap','normal']" data-width="['auto','auto','auto','auto','300']" data-height="auto" data-basealign="grid" data-transform_idle="o:1;" data-transform_in="o:1;x:0px;y:[100%];z:0px;s:2000;e:Power4.easeInOut;" data-transform_out="o:1;x:0px;y:[100%];z:0px;s:1000;e:Power4.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="letter-spacing: 4px;">

                                IN GREAT HANDS WITH US
                            </div>

                            <!-- Layer 04 -->
                            <!--  <div class="tp-caption tp-resizeme" data-x="['center','center','center','center','center']" data-hoffset="['0','0','0','0','0']" data-y="['middle','middle','middle','middle','middle']" data-voffset="['150','137','121','142','165']" data-fontsize="['15','15','15','15','15']" data-fontweight="['400','400','400','400','400']" data-lineheight="['15','15','15','15','15']" data-whitespace="['nowrap','nowrap','nowrap','nowrap','nowrap']" data-width="['auto','auto','auto','auto','auto']" data-height="auto" data-basealign="grid" data-transform_idle="o:1;" data-transform_in="o:1;x:0px;y:[-100%];z:0px;s:1500;e:Power4.easeInOut;" data-transform_out="o:1;x:0px;y:[100%];z:0px;s:750;e:Power4.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="2500" data-splitin="none" data-splitout="none" data-responsive_offset="on">

                                <a class="template-component-button template-color-white" href="#" title="Purchase Template">BOOK YOUR APPOINMET</a>
                            </div> -->
                        </li>

                        <!-- Slide 2 -->
                        <li data-index="slide-2" data-transition="fade" data-slotamount="1" data-easein="default" data-easeout="default" data-masterspeed="500" data-rotate="0" data-delay="6000">
                            <!-- Main image -->
                            <img src="media/image/slider2.jpg" alt="slide-2" data-bgfit="cover" data-bgposition="center bottom">
                            <!-- Layers -->
                            <!-- Layer 01 -->
                            <div class="tp-caption tp-resizeme" data-x="['center','center','center','center','center']" data-hoffset="['0','0','0','0','0']" data-y="['middle','middle','middle','middle','middle']" data-voffset="['-120','-105','-91','-33','-36']" data-fontsize="['17','17','17','15','14']" data-fontweight="['700','700','700','700','900']" data-lineheight="['17','17','17','15','27']" data-whitespace="['nowrap','nowrap','nowrap','nowrap','normal']" data-width="['auto','auto','auto','auto','300']" data-height="auto" data-basealign="grid" data-transform_idle="o:1;" data-transform_in="o:1;x:[175%];y:0px;z:0px;s:2000;e:Power4.easeInOut;" data-transform_out="o:0;x:0px;y:0px;z:0px;s:1000;e:Power4.easeInOut;" data-mask_in="x:[-100%];y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="100" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="letter-spacing: 2px;">
                                FULL SERVICE AND EXTERIOR TREATMENTS
                            </div>

                            <!-- Layer 02 -->
                            <div class="tp-caption tp-resizeme" data-x="['center','center','center','center','center']" data-hoffset="['0','0','0','0','0']" data-y="['middle','middle','middle','middle','middle']" data-voffset="['-41','-35','-29','17','26']" data-fontsize="['62','55','43','29','22']" data-fontweight="['900','900','900','700','700']" data-lineheight="['62','55','43','29','32']" data-whitespace="['nowrap','nowrap','nowrap','nowrap','normal']" data-width="['auto','auto','auto','auto','300']" data-height="auto" data-basealign="grid" data-transform_idle="o:1;" data-transform_in="o:1;x:0px;y:[100%];z:0px;s:2000;e:Power4.easeInOut;" data-transform_out="o:1;x:0px;y:[100%];z:0px;s:1000;e:Power4.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="letter-spacing: 4px;">

                                WE LOVE YOUR CAR
                            </div>

                            <!-- Layer 03 -->
                            <div class="tp-caption tp-resizeme" data-x="['center','center','center','center','center']" data-hoffset="['0','0','0','0','0']" data-y="['middle','middle','middle','middle','middle']" data-voffset="['41','35','29','60','74']" data-fontsize="['62','55','43','29','22']" data-fontweight="['900','900','900','700','700']" data-lineheight="['62','55','43','29','32']" data-whitespace="['nowrap','nowrap','nowrap','nowrap','normal']" data-width="['auto','auto','auto','auto','300']" data-height="auto" data-basealign="grid" data-transform_idle="o:1;" data-transform_in="o:1;x:0px;y:[100%];z:0px;s:2000;e:Power4.easeInOut;" data-transform_out="o:1;x:0px;y:[100%];z:0px;s:1000;e:Power4.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="letter-spacing: 4px;">

                                THE SAME AS YOU DO
                            </div>

                            <!-- Layer 04 -->
                            <!--   <div class="tp-caption tp-resizeme" data-x="['center','center','center','center','center']" data-hoffset="['0','0','0','0','0']" data-y="['middle','middle','middle','middle','middle']" data-voffset="['150','137','121','142','165']" data-fontsize="['15','15','15','15','15']" data-fontweight="['400','400','400','400','400']" data-lineheight="['15','15','15','15','15']" data-whitespace="['nowrap','nowrap','nowrap','nowrap','nowrap']" data-width="['auto','auto','auto','auto','auto']" data-height="auto" data-basealign="grid" data-transform_idle="o:1;" data-transform_in="o:1;x:0px;y:[-100%];z:0px;s:1500;e:Power4.easeInOut;" data-transform_out="o:1;x:0px;y:[100%];z:0px;s:750;e:Power4.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="2500" data-splitin="none" data-splitout="none" data-responsive_offset="on">

                                <a class="template-component-button template-color-white" href="#" title="Purchase Template">BOOK YOUR APPOINMET</a>
                            </div> -->
                        </li>

                        <!-- Slide 3 -->
                        <li data-index="slide-3" data-transition="fade" data-slotamount="1" data-easein="default" data-easeout="default" data-masterspeed="500" data-rotate="0" data-delay="6000">
                            <!-- Main image -->
                            <img src="media/image/slider3.jpg" alt="slide-3" data-bgfit="cover" data-bgposition="center bottom">
                            <!-- Layers -->
                            <!-- Layer 01 -->
                            <div class="tp-caption tp-resizeme" data-x="['center','center','center','center','center']" data-hoffset="['0','0','0','0','0']" data-y="['middle','middle','middle','middle','middle']" data-voffset="['-120','-105','-91','-33','-36']" data-fontsize="['17','17','17','15','14']" data-fontweight="['700','700','700','700','900']" data-lineheight="['17','17','17','15','27']" data-whitespace="['nowrap','nowrap','nowrap','nowrap','normal']" data-width="['auto','auto','auto','auto','300']" data-height="auto" data-basealign="grid" data-transform_idle="o:1;" data-transform_in="o:1;x:[175%];y:0px;z:0px;s:2000;e:Power4.easeInOut;" data-transform_out="o:0;x:0px;y:0px;z:0px;s:1000;e:Power4.easeInOut;" data-mask_in="x:[-100%];y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="100" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="letter-spacing: 2px;">

                                FROM EXPRESS DETAIL TO FULL INSIDE & OUT
                            </div>

                            <!-- Layer 02 -->
                            <div class="tp-caption tp-resizeme" data-x="['center','center','center','center','center']" data-hoffset="['0','0','0','0','0']" data-y="['middle','middle','middle','middle','middle']" data-voffset="['-41','-35','-29','17','26']" data-fontsize="['62','55','43','29','22']" data-fontweight="['900','900','900','700','700']" data-lineheight="['62','55','43','29','32']" data-whitespace="['nowrap','nowrap','nowrap','nowrap','normal']" data-width="['auto','auto','auto','auto','300']" data-height="auto" data-basealign="grid" data-transform_idle="o:1;" data-transform_in="o:1;x:0px;y:[100%];z:0px;s:2000;e:Power4.easeInOut;" data-transform_out="o:1;x:0px;y:[100%];z:0px;s:1000;e:Power4.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="letter-spacing: 4px;">

                                DETAILING SERVICES
                            </div>

                            <!-- Layer 03 -->
                            <div class="tp-caption tp-resizeme" data-x="['center','center','center','center','center']" data-hoffset="['0','0','0','0','0']" data-y="['middle','middle','middle','middle','middle']" data-voffset="['41','35','29','60','74']" data-fontsize="['62','55','43','29','22']" data-fontweight="['900','900','900','700','700']" data-lineheight="['62','55','43','29','32']" data-whitespace="['nowrap','nowrap','nowrap','nowrap','normal']" data-width="['auto','auto','auto','auto','300']" data-height="auto" data-basealign="grid" data-transform_idle="o:1;" data-transform_in="o:1;x:0px;y:[100%];z:0px;s:2000;e:Power4.easeInOut;" data-transform_out="o:1;x:0px;y:[100%];z:0px;s:1000;e:Power4.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="letter-spacing: 4px;">

                                WITH A PERSONAL TOUCH
                            </div>

                            <!-- Layer 04 -->
                            <!--  <div class="tp-caption tp-resizeme" data-x="['center','center','center','center','center']" data-hoffset="['0','0','0','0','0']" data-y="['middle','middle','middle','middle','middle']" data-voffset="['150','137','121','142','165']" data-fontsize="['15','15','15','15','15']" data-fontweight="['400','400','400','400','400']" data-lineheight="['15','15','15','15','15']" data-whitespace="['nowrap','nowrap','nowrap','nowrap','nowrap']" data-width="['auto','auto','auto','auto','auto']" data-height="auto" data-basealign="grid" data-transform_idle="o:1;" data-transform_in="o:1;x:0px;y:[-100%];z:0px;s:1500;e:Power4.easeInOut;" data-transform_out="o:1;x:0px;y:[100%];z:0px;s:750;e:Power4.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="2500" data-splitin="none" data-splitout="none" data-responsive_offset="on">

                                <a class="template-component-button template-color-white" href="#" title="Purchase Template">BOOK YOUR APPOINMET</a>
                            </div> -->
                        </li>
                    </ul>
                </div>
            </div>
            <!--/-->

            <!-- Slider JS -->
            <script type="text/javascript">
                var tpj = jQuery;
                var revapi4;
                tpj(document).ready(function() {
                    if (tpj("#rev_slider").revolution == undefined) {
                        revslider_showDoubleJqueryError("#rev_slider");
                    } else {
                        revapi4 = tpj("#rev_slider").show().revolution({
                            jsFileLocation: "script/",
                            sliderType: "standard",
                            sliderLayout: "fullwidth",
                            dottedOverlay: "none",
                            delay: 9000,
                            responsiveLevels: [1920, 1189, 959, 767, 479],
                            gridwidth: [1170, 940, 750, 460, 300],
                            gridheight: [750, 600, 550, 550, 550],
                            lazyType: "none",
                            navigation: {
                                keyboardNavigation: "on",
                                mouseScrollNavigation: "off",
                                onHoverStop: "on",
                                keyboard_direction: "horizontal",
                                touch: {
                                    touchenabled: "on",
                                    swipe_treshold: 75,
                                    swipe_min_touches: 1,
                                    drag_block_vertical: false,
                                    swipe_direction: "horizontal",
                                },
                                arrows: {
                                    style: "preview1",
                                    enable: true,
                                    hide_onmobile: true,
                                    hide_onleave: true,
                                    hide_delay: 200,
                                    hide_delay_mobile: 1500,
                                    hide_under: 0,
                                    hide_over: 9999,
                                    tmp: '',
                                    left: {
                                        h_align: "left",
                                        v_align: "center",
                                        h_offset: 0,
                                        v_offset: 0,
                                    },
                                    right: {
                                        h_align: "right",
                                        v_align: "center",
                                        h_offset: 0,
                                        v_offset: 0,
                                    }
                                },
                                bullets: {
                                    style: "preview1",
                                    enable: true,
                                    hide_onmobile: true,
                                    hide_onleave: true,
                                    hide_delay: 200,
                                    hide_delay_mobile: 1500,
                                    hide_under: 0,
                                    hide_over: 9999,
                                    direction: "horizontal",
                                    h_align: "center",
                                    v_align: "bottom",
                                    space: 10,
                                    h_offset: 0,
                                    v_offset: 20,
                                    tmp: '<span class="tp-bullet-image"></span><span class="tp-bullet-title"></span>'
                                },
                            },
                            shadow: 0,
                            spinner: "spinner1",
                            stopAfterLoops: -1,
                            stopAtSlide: -1,
                            disableProgressBar: "on",
                            shuffle: "off",
                            autoHeight: "off",
                            hideSliderAtLimit: 0,
                            hideCaptionAtLimit: 0,
                            hideAllCaptionAtLilmit: 0,
                            debugMode: false,
                            fallbacks: {
                                simplifyAll: "off",
                                nextSlideOnWindowFocus: "off",
                                disableFocusListener: false,
                            }
                        });
                    }
                }); /*ready*/
            </script>

        </div>

    </div>




    <div class="template-component-booking template-section template-main" id="template-booking" style="padding: 40px 0px;">

        <form action="process.php" method="POST">
            <!-- Layout -->
            <ul class=" template-layout-50x50 template-layout-margin-reset template-clear-fix">
                <h3 style="padding: 10px ; text-align:center;">Book your Appointment</h3>
                <!-- First name -->
                <li class="template-layout-column-left template-margin-bottom-reset">
                    <div class="template-component-form-field">
                        <label for="booking-form-first-name">First Name *</label>
                        <input type="text" name="bookingformfirstname" id="booking-form-first-name" required="true" />
                    </div>
                </li>

                <!-- Second name -->
                <li class="template-layout-column-right template-margin-bottom-reset">
                    <div class="template-component-form-field">
                        <label for="booking-form-second-name">Second Name *</label>
                        <input type="text" name="bookingformsecondname" id="booking-form-second-name" required="true" />
                    </div>
                </li>

            </ul>

            <!-- Layout -->
            <ul class="template-layout-50x50 template-layout-margin-reset template-clear-fix">

                <!-- E-mail address -->
                <li class="template-layout-column-left template-margin-bottom-reset">
                    <div class="template-component-form-field">
                        <label for="booking-form-email">E-mail Address *</label>
                        <input type="email" name="bookingformemail" id="booking-form-email" required="true" />
                    </div>
                </li>

                <!-- Phone number -->
                <li class="template-layout-column-right template-margin-bottom-reset">
                    <div class="template-component-form-field">
                        <label for="booking-form-phone">Phone Number *</label>
                        <input type="number" name="bookingformphone" id="booking-form-phone" required="true" />
                    </div>
                </li>

            </ul>

            <!-- Layout -->
            <ul class="template-layout-33x33x33 template-layout-margin-reset template-clear-fix">

                <!-- Vehicle make -->
                <li class="template-layout-column-left template-margin-bottom-reset">
                    <div class="template-component-form-field">
                        <label for="booking-form-vehicle-make">Vehicle Name</label>
                        <input type="text" name="bookingformvehiclemake" id="booking-form-vehicle-make" required="true" />
                    </div>
                </li>

                <!-- Vehicle model -->
                <li class="template-layout-column-center template-margin-bottom-reset">
                    <div class="template-component-form-field">
                        <label for="booking-form-vehicle-model">Vehicle Model</label>
                        <input type="number" name="bookingformvehiclemodel" id="booking-form-vehicle-model" required="true" />
                    </div>
                </li>


                <!-- Booking date -->
                <li class="template-layout-column-right template-margin-bottom-reset">
                    <div class="template-component-form-field">
                        <label for="booking-form-date">Booking Date *</label>
                        <input type="date" data-field="datetime" name="bookingformdate" id="booking-form-date" required="true" />
                    </div>
                </li>

            </ul>

            <!-- Layout -->
            <ul class="template-layout-50x50 template-layout-margin-reset template-clear-fix">

                <!-- E-mail address -->
                <li class="template-layout-column-left template-margin-bottom-reset">
                    <div class="template-component-form-field">
                        <label for="booking-form-email">Vehicle No. Plate *</label>
                        <input type="text" name="bookingformenoplate" id="booking-form-email" required="true" />
                    </div>
                </li>

                <!-- Phone number -->
                <li class="template-layout-column-right template-margin-bottom-reset">
                    <div class="template-component-form-field">
                        <label for="booking-form-phone">Pass Code *</label>
                        <input type="number" name="bookingformpasscode" id="booking-form-phone" required="true" />
                    </div>
                </li>

            </ul>
            <!-- Layout -->
            <ul class="template-layout-100 template-layout-margin-reset template-clear-fix">

                <!-- Message -->
                <li>
                    <div class="template-component-form-field">
                        <label for="booking-form-message">Order Description </label>
                        <textarea rows="1" cols="1" name="orderdescription"></textarea>
                    </div>
                </li>

            </ul>

            <!-- Layout -->
            <ul class="template-layout-100 template-layout-margin-reset template-clear-fix">

                <!-- Message -->
                <li>
                    <div class="template-component-form-field">
                        <label for="booking-form-message">Address * </label>
                        <textarea rows="1" cols="1" name="bookingformmessage" required="true" id="booking-form-message"></textarea>
                    </div>
                </li>

            </ul>


            <!-- Text + submit button -->
            <div class=" template-align-center template-clear-fix template-margin-top-2">
                <p class="template-padding-reset template-margin-bottom-2">We will confirm your appointment with you by whatsapp or e-mail within 24 hours of receiving your request.</p>
                <input type="submit" value="Confirm Booking" class="template-component-button" name="booking-form-submit" id="booking-form-submit" />
                <input type="hidden" value="" name="booking-form-data" id="booking-form-data" />
            </div>
        </form>
    </div>









    <!-- Footer -->
    <div class="template-footer">

        <div class="template-main">

            <!-- Footer top -->
            <div class="template-footer-top">

                <!-- Layout 25x25x25x25 -->
                <div class="template-layout-25x25x25x25 template-clear-fix">

                    <!-- Left column -->
                    <div class="template-layout-column-left">
                        <h6>About</h6>
                        <p>ZEEFEK is eco-friendly hand Car Wash &amp; Other Garage Services based in Faisalabad.</p>
                        <!-- 		<img src="media/image/logo.png" alt="" class="template-logo" /> -->
                    </div>

                    <!-- Center left column -->
                    <div class="template-layout-column-center-left">
                        <h6>Services</h6>
                        <ul class="template-list-reset">
                            <li><a href="service.php">Car Wash</a></li>

                            <li><a href="service.php">Denting & Painting </a></li>
                            <li><a href="service.php">Electrical Services </a></li>
                            <li><a href="service.php">Mechnical Services</a></li>
                            <li><a href="service.php">Other Car Services</a></li>
                        </ul>
                    </div>

                    <!-- Center right column -->
                    <div class="template-layout-column-center-right">
                        <h6>Company</h6>
                        <ul class="template-list-reset">
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="gallery.php">Gallery</a></li>
                            <li><a href="service.php">Our Services</a></li>
                            <li><a href="book-your-wash.php">Book Your Wash</a></li>

                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>

                    <!-- Right column -->
                    <div class="template-layout-column-right">
                        <h6>Newsletter</h6>
                        <form class="template-component-newsletter-form">
                            <div class="template-component-form-field">
                                <label for="newsletter-form-email">Your e-mail address *</label>
                                <input type="text" name="newsletter-form-email" id="newsletter-form-email" />
                            </div>
                            <div class="template-margin-top-2">
                                <input type="submit" value="Subscribe" class="template-component-button" name="newsletter-form-submit" id="newsletter-form-submit" />
                            </div>
                        </form>
                    </div>

                </div>

            </div>

            <!-- Footer bottom -->
            <div class="template-footer-bottom">

                <!-- Social icon list -->
                <ul class="template-component-social-icon-list template-component-social-icon-list-2">
                    <li><a href="https://www.twitter.com/ZEEFEK" class="template-icon-social-twitter" target="_blank"></a></li>
                    <li><a href="https://www.facebook.com/ZEEFEK" class="template-icon-social-facebook" target="_blank"></a></li>
                    <li><a href="https://dribbble.com/ZEEFEK" class="template-icon-social-dribbble" target="_blank"></a></li>
                    <li><a href="http://ZEEFEK/portfolio?ref=ZEEFEK" class="template-icon-social-envato" target="_blank"></a></li>
                    <li><a href="https://ZEEFEK" class="template-icon-social-behance" target="_blank"></a></li>
                    <li><a href="https://www.youtube.com/user/ZEEFEK" class="template-icon-social-youtube" target="_blank"></a></li>
                </ul>

                <!-- Copyright -->
                <div class="template-footer-bottom-copyright">
                    By <a href="http://ZEEFEK.com" target="_blank">ZEEFEK</a> &copy; 2020
                </div>

            </div>

        </div>

    </div>

    <!-- Search box -->
    <div class="template-component-search-form">
        <div></div>
        <form>
            <div>
                <input type="search" name="search" />
                <span class="template-icon-meta-search"></span>
                <input type="submit" name="submit" value="" />
            </div>
        </form>
    </div>

    <!-- Go to top button -->
    <a href="#go-to-top" class="template-component-go-to-top template-icon-meta-arrow-large-tb"></a>

    <!-- Wrapper for date picker -->
    <div id="dtBox"></div>

    <!-- JS files -->
    <script type="text/javascript" src="script/jquery-ui.min.js"></script>
    <script type="text/javascript" src="script/superfish.min.js"></script>
    <script type="text/javascript" src="script/jquery.easing.js"></script>
    <script type="text/javascript" src="script/jquery.blockUI.js"></script>
    <script type="text/javascript" src="script/jquery.qtip.min.js"></script>
    <script type="text/javascript" src="script/jquery.fancybox.js"></script>
    <script type="text/javascript" src="script/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="script/jquery.actual.min.js"></script>
    <script type="text/javascript" src="script/jquery.flexnav.min.js"></script>
    <script type="text/javascript" src="script/jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="script/sticky.min.js"></script>
    <script type="text/javascript" src="script/jquery.scrollTo.min.js"></script>
    <script type="text/javascript" src="script/jquery.fancybox-media.js"></script>
    <script type="text/javascript" src="script/jquery.fancybox-buttons.js"></script>
    <script type="text/javascript" src="script/jquery.carouFredSel.packed.js"></script>
    <script type="text/javascript" src="script/jquery.responsiveElement.js"></script>
    <script type="text/javascript" src="script/jquery.touchSwipe.min.js"></script>
    <script type="text/javascript" src="script/DateTimePicker.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>

    <!-- Revolution Slider files -->
    <script type="text/javascript" src="script/revolution/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="script/revolution/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="script/revolution/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="script/revolution/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="script/revolution/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="script/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="script/revolution/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="script/revolution/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="script/revolution/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="script/revolution/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="script/revolution/extensions/revolution.extension.video.min.js"></script>

    <!-- Plugins files -->
    <script type="text/javascript" src="plugin/booking/jquery.booking.js"></script>

    <!-- Components files -->
    <script type="text/javascript" src="script/template/jquery.template.tab.js"></script>
    <script type="text/javascript" src="script/template/jquery.template.image.js"></script>
    <script type="text/javascript" src="script/template/jquery.template.helper.js"></script>
    <script type="text/javascript" src="script/template/jquery.template.header.js"></script>
    <script type="text/javascript" src="script/template/jquery.template.counter.js"></script>
    <script type="text/javascript" src="script/template/jquery.template.gallery.js"></script>
    <script type="text/javascript" src="script/template/jquery.template.goToTop.js"></script>
    <script type="text/javascript" src="script/template/jquery.template.fancybox.js"></script>
    <script type="text/javascript" src="script/template/jquery.template.moreLess.js"></script>
    <script type="text/javascript" src="script/template/jquery.template.googleMap.js"></script>
    <script type="text/javascript" src="script/template/jquery.template.accordion.js"></script>
    <script type="text/javascript" src="script/template/jquery.template.searchForm.js"></script>
    <script type="text/javascript" src="script/template/jquery.template.testimonial.js"></script>
    <script type="text/javascript" src="script/public.js"></script>

</body>

</html>