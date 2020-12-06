<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="StudyPress | Education & Courses HTML Template"/>
    <meta name="keywords" content="academy, course, education, education html theme, elearning, learning,"/>
    <meta name="author" content="ThemeMascot"/>

    <title>StudyPress | Education & Courses HTML Template</title>

    <!-- Favicon and Touch Icons -->
    <link href="{{ asset('images/favicon.png') }}" rel="shortcut icon" type="image/png">
    <link href="{{ asset('images/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <link href="{{ asset('images/apple-touch-icon-72x72.png') }}" rel="apple-touch-icon" sizes="72x72">
    <link href="{{ asset('images/apple-touch-icon-114x114.png') }}" rel="apple-touch-icon" sizes="114x114">
    <link href="{{ asset('images/apple-touch-icon-144x144.png') }}" rel="apple-touch-icon" sizes="144x144">

    <!-- Stylesheet -->
    <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet" type="text/css">
    <link href="{{ asset("css/jquery-ui.min.css") }}" rel="stylesheet" type="text/css">
    <link href="{{ asset("css/animate.css") }}" rel="stylesheet" type="text/css">
    <link href="{{ asset("css/css-plugin-collections.css") }}" rel="stylesheet"/>
    <!-- CSS | menuzord megamenu skins -->
    <link id="menuzord-menu-skins" href="{{ asset("css/menuzord-skins/menuzord-rounded-boxed.css") }}"
          rel="stylesheet"/>
    <!-- CSS | Main style file -->
    <link href="{{ asset("css/style-main.css") }}" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="{{ asset("css/preloader.css") }}" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="{{ asset("css/custom-bootstrap-margin-padding.css") }}" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="{{ asset("css/responsive.css") }}" rel="stylesheet" type="text/css">
    <!-- CSS | For Dark Layout -->
    <link href="{{ asset("css/style-main-dark.css") }}" rel="stylesheet" type="text/css">


    <!-- Revolution Slider 5.x CSS settings -->
    <link href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
    <link href="js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
    <link href="js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

    <!-- CSS | Theme Color -->
    <link href="css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">

    <!-- external javascripts -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="js/jquery-plugin-collection.js"></script>

    <!-- Revolution Slider 5.x SCRIPTS -->
    <script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
    <script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>


</head>
<body class="dark">
<div id="wrapper" class="clearfix">
    <!-- preloader -->
    <div id="preloader">
        <div id="spinner">
            <div class="preloader-dot-loading">
                <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
            </div>
        </div>
        <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
    </div>

    <!-- Header -->
    <header>
        <div class="header-top bg-theme-color-2 sm-text-center p-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="widget no-border m-0">
                            <ul class="list-inline font-13 sm-text-center mt-5">
                                <li>
                                    <a class="text-white" href="#">FAQ</a>
                                </li>
                                <li class="text-white">|</li>
                                <li>
                                    <a class="text-white" href="#">Help Desk</a>
                                </li>
                                <li class="text-white">|</li>
                                <li>
                                    <a class="text-white" href="#">Login</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="widget m-0 pull-right sm-pull-none sm-text-center">
                            <ul class="list-inline pull-right">
                                <li class="mb-0 pb-0">
                                    <div class="top-dropdown-outer pt-5 pb-10">
                                        <a class="top-cart-link has-dropdown text-white text-hover-theme-colored"><i
                                                class="fa fa-shopping-cart font-13"></i> (12)</a>
                                        <ul class="dropdown">
                                            <li>
                                                <!-- dropdown cart -->
                                                <div class="dropdown-cart">
                                                    <table class="table cart-table-list table-responsive">
                                                        <tbody>
                                                        <tr>
                                                            <td><a href="#"><img alt=""
                                                                                 src="images/products/sm1.jpg"></a></td>
                                                            <td><a href="#"> Product Title</a></td>
                                                            <td>X3</td>
                                                            <td>$ 100.00</td>
                                                            <td><a class="close" href="#"><i
                                                                        class="fa fa-close font-13"></i></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="#"><img alt=""
                                                                                 src="images/products/sm2.jpg"></a></td>
                                                            <td><a href="#"> Product Title</a></td>
                                                            <td>X2</td>
                                                            <td>$ 70.00</td>
                                                            <td><a class="close" href="#"><i
                                                                        class="fa fa-close font-13"></i></a></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="total-cart text-right">
                                                        <table class="table table-responsive">
                                                            <tbody>
                                                            <tr>
                                                                <td>Cart Subtotal</td>
                                                                <td>$170.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Shipping and Handling</td>
                                                                <td>$20.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Order Total</td>
                                                                <td>$190.00</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="cart-btn text-right">
                                                        <a class="btn btn-theme-colored btn-xs" href="shop-cart.html">
                                                            View cart</a>
                                                        <a class="btn btn-dark btn-xs" href="shop-checkout.html">
                                                            Checkout</a>
                                                    </div>
                                                </div>
                                                <!-- dropdown cart ends -->
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="mb-0 pb-0">
                                    <div class="top-dropdown-outer pt-5 pb-10">
                                        <a class="top-search-box has-dropdown text-white text-hover-theme-colored"><i
                                                class="fa fa-search font-13"></i> &nbsp;</a>
                                        <ul class="dropdown">
                                            <li>
                                                <div class="search-form-wrapper">
                                                    <form method="get" class="mt-10">
                                                        <input type="text"
                                                               onfocus="if(this.value =='Enter your search') { this.value = ''; }"
                                                               onblur="if(this.value == '') { this.value ='Enter your search'; }"
                                                               value="Enter your search" id="searchinput" name="s"
                                                               class="">
                                                        <label><input type="submit" name="submit" value=""></label>
                                                    </form>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="widget no-border m-0 mr-15 pull-right flip sm-pull-none sm-text-center">
                            <ul class="styled-icons icon-circled icon-sm pull-right flip sm-pull-none sm-text-center mt-sm-15">
                                <li><a href="#"><i class="fa fa-facebook text-white"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter text-white"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus text-white"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram text-white"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin text-white"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle p-0 bg-lightest xs-text-center">
            <div class="container pt-0 pb-0">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-5">
                        <div class="widget no-border m-0">
                            <a class="menuzord-brand pull-left flip xs-pull-center mb-15" href="javascript:void(0)"><img
                                    src="images/logo-wide-white.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="widget no-border pull-right sm-pull-none sm-text-center mt-10 mb-10 m-0">
                            <ul class="list-inline">
                                <li><i class="fa fa-phone-square text-theme-colored font-36 mt-5 sm-display-block"></i>
                                </li>
                                <li>
                                    <a href="#" class="font-12 text-gray text-uppercase">Call us today!</a>
                                    <h5 class="font-14 m-0"> +(012) 345 6789</h5>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="widget no-border pull-right sm-pull-none sm-text-center mt-10 mb-10 m-0">
                            <ul class="list-inline">
                                <li><i class="fa fa-clock-o text-theme-colored font-36 mt-5 sm-display-block"></i></li>
                                <li>
                                    <a href="#" class="font-12 text-gray text-uppercase">We are open!</a>
                                    <h5 class="font-13 m-0"> Mon-Fri 8:00-16:00</h5>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-nav">
            <div class="header-nav-wrapper navbar-scrolltofixed bg-theme-colored border-bottom-theme-color-2-1px">
                <div class="container">
                    <nav id="menuzord" class="menuzord bg-theme-colored pull-left flip menuzord-responsive">
                        <ul class="menuzord-menu onepage-nav">
                            <li class="active"><a href="#home">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#courses">Courses</a></li>
                            <li><a href="#teachers">Teachers</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>

                        <div id="top-search-bar" class="collapse">
                            <div class="container">
                                <form role="search" action="#" class="search_form_top" method="get">
                                    <input type="text" placeholder="Type text and press Enter..." name="s"
                                           class="form-control" autocomplete="off">
                                    <span class="search-close"><i class="fa fa-search"></i></span>
                                </form>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- Start main-content -->
    <div class="main-content">

        <!-- Section: home -->
        <section id="home">
            <div class="container-fluid p-0">

                <!-- Slider Revolution Start -->
                <div class="rev_slider_wrapper">
                    <div class="rev_slider" data-version="5.0">
                        <ul>

                            <!-- SLIDE 1 -->
                            <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default"
                                data-easein="default" data-easeout="default" data-masterspeed="default"
                                data-thumb="images/bg/bg3.jpg" data-rotate="0" data-saveperformance="off"
                                data-title="Slide 1" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="images/bg/bg3.jpg" alt="" data-bgposition="center 10%" data-bgfit="cover"
                                     data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway"
                                     id="rs-1-layer-1"

                                     data-x="['left']"
                                     data-hoffset="['30']"
                                     data-y="['middle']"
                                     data-voffset="['-110']"
                                     data-fontsize="['100']"
                                     data-lineheight="['110']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;s:500"
                                     data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                     data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1000"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 7; white-space: nowrap; font-weight:700;">Education
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div
                                    class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent border-left-theme-color-2-6px pl-20 pr-20"
                                    id="rs-1-layer-2"

                                    data-x="['left']"
                                    data-hoffset="['35']"
                                    data-y="['middle']"
                                    data-voffset="['-25']"
                                    data-fontsize="['35']"
                                    data-lineheight="['54']"
                                    data-width="none"
                                    data-height="none"
                                    data-whitespace="nowrap"
                                    data-transform_idle="o:1;s:500"
                                    data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                    data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                    data-start="1000"
                                    data-splitin="none"
                                    data-splitout="none"
                                    data-responsive_offset="on"
                                    style="z-index: 7; white-space: nowrap; font-weight:600;">Education For Everyone
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption tp-resizeme text-white"
                                     id="rs-1-layer-3"

                                     data-x="['left']"
                                     data-hoffset="['35']"
                                     data-y="['middle']"
                                     data-voffset="['35']"
                                     data-fontsize="['16']"
                                     data-lineheight="['28']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;s:500"
                                     data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                     data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1400"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">We
                                    provides always our best services for our clients and always<br> try to achieve our
                                    client's trust and satisfaction.
                                </div>

                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption tp-resizeme"
                                     id="rs-1-layer-4"

                                     data-x="['left']"
                                     data-hoffset="['35']"
                                     data-y="['middle']"
                                     data-voffset="['100']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1400"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a
                                        class="btn btn-colored btn-lg btn-flat btn-theme-colored border-left-theme-color-2-6px pl-20 pr-20"
                                        href="#">View Details</a>
                                </div>
                            </li>

                            <!-- SLIDE 2 -->
                            <li data-index="rs-2" data-transition="slidingoverlayhorizontal" data-slotamount="default"
                                data-easein="default" data-easeout="default" data-masterspeed="default"
                                data-thumb="images/bg/bg2.jpg" data-rotate="0" data-saveperformance="off"
                                data-title="Slide 2" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="images/bg/bg2.jpg" alt="" data-bgposition="center 40%" data-bgfit="cover"
                                     data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->
                                <div
                                    class="tp-caption tp-resizeme text-uppercase  bg-dark-transparent-5 text-white font-raleway border-left-theme-color-2-6px border-right-theme-color-2-6px pl-30 pr-30"
                                    id="rs-2-layer-1"

                                    data-x="['center']"
                                    data-hoffset="['0']"
                                    data-y="['middle']"
                                    data-voffset="['-90']"
                                    data-fontsize="['28']"
                                    data-lineheight="['54']"
                                    data-width="none"
                                    data-height="none"
                                    data-whitespace="nowrap"
                                    data-transform_idle="o:1;s:500"
                                    data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                    data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                    data-start="1000"
                                    data-splitin="none"
                                    data-splitout="none"
                                    data-responsive_offset="on"
                                    style="z-index: 7; white-space: nowrap; font-weight:400; border-radius: 30px;">Feed
                                    Your Knowledge
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div
                                    class="tp-caption tp-resizeme text-uppercase bg-theme-colored-transparent text-white font-raleway pl-30 pr-30"
                                    id="rs-2-layer-2"

                                    data-x="['center']"
                                    data-hoffset="['0']"
                                    data-y="['middle']"
                                    data-voffset="['-20']"
                                    data-fontsize="['48']"
                                    data-lineheight="['70']"
                                    data-width="none"
                                    data-height="none"
                                    data-whitespace="nowrap"
                                    data-transform_idle="o:1;s:500"
                                    data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                    data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                    data-start="1000"
                                    data-splitin="none"
                                    data-splitout="none"
                                    data-responsive_offset="on"
                                    style="z-index: 7; white-space: nowrap; font-weight:700; border-radius: 30px;">
                                    World’s Best University
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption tp-resizeme text-white text-center"
                                     id="rs-2-layer-3"

                                     data-x="['center']"
                                     data-hoffset="['0']"
                                     data-y="['middle']"
                                     data-voffset="['50']"
                                     data-fontsize="['16']"
                                     data-lineheight="['28']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;s:500"
                                     data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                     data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1400"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">We
                                    provides always our best services for our clients and always<br> try to achieve our
                                    client's trust and satisfaction.
                                </div>

                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption tp-resizeme"
                                     id="rs-2-layer-4"

                                     data-x="['center']"
                                     data-hoffset="['0']"
                                     data-y="['middle']"
                                     data-voffset="['115']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1400"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a
                                        class="btn btn-default btn-circled btn-transparent pl-20 pr-20" href="#">Apply
                                        Now</a>
                                </div>
                            </li>

                            <!-- SLIDE 3 -->
                            <li data-index="rs-3" data-transition="slidingoverlayhorizontal" data-slotamount="default"
                                data-easein="default" data-easeout="default" data-masterspeed="default"
                                data-thumb="images/bg/bg4.jpg" data-rotate="0" data-saveperformance="off"
                                data-title="Slide 3" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="images/bg/bg4.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                                     data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->
                                <div
                                    class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent border-right-theme-color-2-6px pr-20 pl-20"
                                    id="rs-3-layer-1"

                                    data-x="['right']"
                                    data-hoffset="['30']"
                                    data-y="['middle']"
                                    data-voffset="['-90']"
                                    data-fontsize="['64']"
                                    data-lineheight="['72']"
                                    data-width="none"
                                    data-height="none"
                                    data-whitespace="nowrap"
                                    data-transform_idle="o:1;s:500"
                                    data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                    data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                    data-start="1000"
                                    data-splitin="none"
                                    data-splitout="none"
                                    data-responsive_offset="on"
                                    style="z-index: 7; white-space: nowrap; font-weight:600;">Best Education
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div
                                    class="tp-caption tp-resizeme text-uppercase bg-dark-transparent-6 text-white font-raleway pl-20 pr-20"
                                    id="rs-3-layer-2"

                                    data-x="['right']"
                                    data-hoffset="['35']"
                                    data-y="['middle']"
                                    data-voffset="['-25']"
                                    data-fontsize="['32']"
                                    data-lineheight="['54']"
                                    data-width="none"
                                    data-height="none"
                                    data-whitespace="nowrap"
                                    data-transform_idle="o:1;s:500"
                                    data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                    data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                    data-start="1000"
                                    data-splitin="none"
                                    data-splitout="none"
                                    data-responsive_offset="on"
                                    style="z-index: 7; white-space: nowrap; font-weight:600;">For Your Better Future
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption tp-resizeme text-white text-right"
                                     id="rs-3-layer-3"

                                     data-x="['right']"
                                     data-hoffset="['35']"
                                     data-y="['middle']"
                                     data-voffset="['30']"
                                     data-fontsize="['16']"
                                     data-lineheight="['28']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;s:500"
                                     data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                     data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1400"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">We
                                    provides always our best services for our clients and always<br> try to achieve our
                                    client's trust and satisfaction.
                                </div>

                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption tp-resizeme"
                                     id="rs-3-layer-4"

                                     data-x="['right']"
                                     data-hoffset="['35']"
                                     data-y="['middle']"
                                     data-voffset="['95']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                     data-start="1400"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a
                                        class="btn btn-colored btn-lg btn-flat btn-theme-colored btn-theme-colored border-right-theme-color-2-6px pl-20 pr-20"
                                        href="#">Apply Now</a>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <!-- end .rev_slider -->
                </div>
                <!-- end .rev_slider_wrapper -->
                <script>
                    $(document).ready(function (e) {
                        $(".rev_slider").revolution({
                            sliderType: "standard",
                            sliderLayout: "auto",
                            dottedOverlay: "none",
                            delay: 5000,
                            navigation: {
                                keyboardNavigation: "off",
                                keyboard_direction: "horizontal",
                                mouseScrollNavigation: "off",
                                onHoverStop: "off",
                                touch: {
                                    touchenabled: "on",
                                    swipe_threshold: 75,
                                    swipe_min_touches: 1,
                                    swipe_direction: "horizontal",
                                    drag_block_vertical: false
                                },
                                arrows: {
                                    style: "zeus",
                                    enable: true,
                                    hide_onmobile: true,
                                    hide_under: 600,
                                    hide_onleave: true,
                                    hide_delay: 200,
                                    hide_delay_mobile: 1200,
                                    tmp: '<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                                    left: {
                                        h_align: "left",
                                        v_align: "center",
                                        h_offset: 30,
                                        v_offset: 0
                                    },
                                    right: {
                                        h_align: "right",
                                        v_align: "center",
                                        h_offset: 30,
                                        v_offset: 0
                                    }
                                },
                                bullets: {
                                    enable: true,
                                    hide_onmobile: true,
                                    hide_under: 600,
                                    style: "metis",
                                    hide_onleave: true,
                                    hide_delay: 200,
                                    hide_delay_mobile: 1200,
                                    direction: "horizontal",
                                    h_align: "center",
                                    v_align: "bottom",
                                    h_offset: 0,
                                    v_offset: 30,
                                    space: 5,
                                    tmp: '<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">@{{title}}</span>'
                                }
                            },
                            responsiveLevels: [1240, 1024, 778],
                            visibilityLevels: [1240, 1024, 778],
                            gridwidth: [1170, 1024, 778, 480],
                            gridheight: [650, 768, 960, 720],
                            lazyType: "none",
                            parallax: {
                                origo: "slidercenter",
                                speed: 1000,
                                levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                                type: "scroll"
                            },
                            shadow: 0,
                            spinner: "off",
                            stopLoop: "on",
                            stopAfterLoops: 0,
                            stopAtSlide: -1,
                            shuffle: "off",
                            autoHeight: "off",
                            fullScreenAutoWidth: "off",
                            fullScreenAlignForce: "off",
                            fullScreenOffsetContainer: "",
                            fullScreenOffset: "0",
                            hideThumbsOnMobile: "off",
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
                    });
                </script>
                <!-- Slider Revolution Ends -->

            </div>
        </section>

        <!-- Section: About -->
        <section id="about" class="">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="letter-space-4 text-gray-darkgray text-uppercase mt-0 mb-0">All About</h6>
                            <h2 class="text-uppercase font-weight-600 mt-0 font-28 line-bottom">The World’s Best
                                Education in Our University</h2>
                            <h4 class="text-theme-colored">Lorem ipsum dolor sit amet soluta saepe odit error, maxime
                                praesentium sunt udiandae!</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore atque officiis maxime
                                suscipit expedita obcaecati nulla in ducimus iure quos quam recusandae dolor quas et
                                perspiciatis voluptatum accusantium delectus nisi reprehenderit, eveniet fuga modi
                                pariatur, eius vero. Ea vitae maiores.</p>
                            <a class="btn btn-theme-colored btn-flat btn-lg mt-10 mb-sm-30" href="#">Know More →</a>
                        </div>
                        <div class="col-md-6">
                            <div class="video-popup">
                                <a href="https://www.youtube.com/watch?v=pW1uVUg5wXM"
                                   data-lightbox-gallery="youtube-video" title="Video">
                                    <img alt="" src="images/about/5.jpg" class="img-responsive img-fullwidth">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: COURSES -->
        <section id="courses" class="bg-lighter">
            <div class="container pb-60">
                <div class="section-title mb-10">
                    <div class="row">
                        <div class="col-md-8">
                            <h2 class="mt-0 text-uppercase font-28 line-bottom line-height-1">Our <span
                                    class="text-theme-color-2 font-weight-400">COURSES</span></h2>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="owl-carousel-4col" data-dots="true">

                                @if(isset($courses))
                                    @foreach($courses as $course)
                                        <div class="item ">
                                            <div class="service-block bg-light">
                                                <div class="thumb"><img alt="featured project"
                                                                        src="{{ asset('storage/'. $course->cover) }}"
                                                                        class="img-fullwidth">
                                                    <h4 class="text-white mt-0 mb-0"><span class="price">{{ $course->price }} BDT</span>
                                                    </h4>
                                                </div>
                                                <div class="content text-left flip p-25 pt-0">
                                                    <h4 class="line-bottom mb-10">{{ $course->title }}</h4>
                                                    <p>{{ $course->description }}</p>
                                                    <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10"
                                                       href="{{ route('course.show', $course->id) }}">view details</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif



                                {{--<div class="item">
                                    <div class="service-block mb-md-30 bg-light">
                                        <div class="thumb"> <img alt="featured project" src="images/project/5.jpg" class="img-responsive img-fullwidth">
                                            <h4 class="text-white mt-0 mb-0"><span class="price">$125</span></h4>
                                        </div>
                                        <div class="content text-left flip p-25 pt-0">
                                            <h4 class="line-bottom mb-10">Computer Technologies</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam aliquam ipsum quis ipsum facilisis sit amet.</p>
                                            <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="page-courses-accounting-technologies.html">view details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="service-block mb-md-30 bg-light">
                                        <div class="thumb"> <img alt="featured project" src="images/project/6.jpg" class="img-responsive img-fullwidth">
                                            <h4 class="text-white mt-0 mb-0"><span class="price">$125</span></h4>
                                        </div>
                                        <div class="content text-left flip p-25 pt-0">
                                            <h4 class="line-bottom mb-10">Development Studies</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam aliquam ipsum quis ipsum facilisis sit amet.</p>
                                            <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="page-courses-accounting-technologies.html">view details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="service-block mb-md-30 bg-light">
                                        <div class="thumb"> <img alt="featured project" src="images/project/7.jpg" class="img-responsive img-fullwidth">
                                            <h4 class="text-white mt-0 mb-0"><span class="price">$125</span></h4>
                                        </div>
                                        <div class="content text-left flip p-25 pt-0">
                                            <h4 class="line-bottom mb-10">Electrical & Electronic</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam aliquam ipsum quis ipsum facilisis sit amet.</p>
                                            <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="page-courses-accounting-technologies.html">view details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="service-block mb-md-30 bg-light">
                                        <div class="thumb"> <img alt="featured project" src="images/project/8.jpg" class="img-responsive img-fullwidth">
                                            <h4 class="text-white mt-0 mb-0"><span class="price">$125</span></h4>
                                        </div>
                                        <div class="content text-left flip p-25 pt-0">
                                            <h4 class="line-bottom mb-10">Chemical Engineering</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam aliquam ipsum quis ipsum facilisis sit amet.</p>
                                            <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="page-courses-accounting-technologies.html">view details</a>
                                        </div>
                                    </div>
                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Divider: Funfact -->
        <section class="divider parallax layer-overlay overlay-dark-8" data-bg-img="images/bg/bg2.jpg"
                 data-parallax-ratio="0.7">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                        <div class="funfact text-center">
                            <i class="pe-7s-smile mt-5 text-theme-color-2"></i>
                            <h2 data-animation-duration="2000" data-value="5248"
                                class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
                            <h5 class="text-white text-uppercase mb-0">Happy Students</h5>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                        <div class="funfact text-center">
                            <i class="pe-7s-note2 mt-5 text-theme-color-2"></i>
                            <h2 data-animation-duration="2000" data-value="675"
                                class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
                            <h5 class="text-white text-uppercase mb-0">Our Courses</h5>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                        <div class="funfact text-center">
                            <i class="pe-7s-users mt-5 text-theme-color-2"></i>
                            <h2 data-animation-duration="2000" data-value="248"
                                class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
                            <h5 class="text-white text-uppercase mb-0">Our Teachers</h5>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-0">
                        <div class="funfact text-center">
                            <i class="pe-7s-cup mt-5 text-theme-color-2"></i>
                            <h2 data-animation-duration="2000" data-value="24"
                                class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
                            <h5 class="text-white text-uppercase mb-0">Awards Won</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Teachers -->
        <section id="teachers">
            <div class="container">
                <div class="section-title mb-10">
                    <div class="row">
                        <div class="col-md-8">
                            <h2 class="mt-0 text-uppercase font-28 line-bottom line-height-1">Our <span
                                    class="text-theme-color-2 font-weight-400">Teachers</span></h2>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row multi-row-clearfix">
                        <div class="col-sm-6 col-md-3 sm-text-center mb-sm-30">
                            <div class="team maxwidth400">
                                <div class="thumb"><img class="img-fullwidth" src="images/team/team5.jpg" alt=""></div>
                                <div class="content border-1px border-bottom-theme-color-2-2px p-15 bg-light clearfix">
                                    <h4 class="name text-theme-color-2 mt-0">Andre Smith - <small class="text-white">Teacher</small>
                                    </h4>
                                    <p class="mb-20">Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
                                    <ul class="styled-icons icon-dark icon-circled icon-theme-colored icon-sm pull-left flip">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                    <a class="btn btn-theme-colored btn-sm pull-right flip"
                                       href="page-teachers-details.html">view details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 sm-text-center mb-sm-30">
                            <div class="team maxwidth400">
                                <div class="thumb"><img class="img-fullwidth" src="images/team/team6.jpg" alt=""></div>
                                <div class="content border-1px border-bottom-theme-color-2-2px p-15 bg-light clearfix">
                                    <h4 class="name mt-0 text-theme-color-2">Sakib Smith - <small class="text-white">Teacher</small>
                                    </h4>
                                    <p class="mb-20">Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
                                    <ul class="styled-icons icon-dark icon-circled icon-theme-colored icon-sm pull-left flip">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                    <a class="btn btn-theme-colored btn-sm pull-right flip"
                                       href="page-teachers-details.html">view details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 sm-text-center mb-sm-30">
                            <div class="team maxwidth400">
                                <div class="thumb"><img class="img-fullwidth" src="images/team/team7.jpg" alt=""></div>
                                <div class="content border-1px border-bottom-theme-color-2-2px p-15 bg-light clearfix">
                                    <h4 class="name mt-0 text-theme-color-2">David Zakaria - <small class="text-white">Teacher</small>
                                    </h4>
                                    <p class="mb-20">Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
                                    <ul class="styled-icons icon-dark icon-circled icon-theme-colored icon-sm pull-left flip">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                    <a class="btn btn-theme-colored btn-sm pull-right flip"
                                       href="page-teachers-details.html">view details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 sm-text-center">
                            <div class="team maxwidth400">
                                <div class="thumb"><img class="img-fullwidth" src="images/team/team8.jpg" alt=""></div>
                                <div class="content border-1px border-bottom-theme-color-2-2px p-15 bg-light clearfix">
                                    <h4 class="name mt-0 text-theme-color-2">Ismail Jon - <small class="text-white">Teacher</small>
                                    </h4>
                                    <p class="mb-20">Lorem ipsum dolor sit amet, con amit sectetur adipisicing elit.</p>
                                    <ul class="styled-icons icon-dark icon-circled icon-theme-colored icon-sm pull-left flip">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                    <a class="btn btn-theme-colored btn-sm pull-right flip"
                                       href="page-teachers-details.html">view details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Section: Why Choose Us -->
        <section id="event" class="">
            <div class="container pb-50">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="text-uppercase line-bottom mt-0 line-height-1"><i
                                    class="fa fa-calendar mr-10"></i>Upcoming <span
                                    class="text-theme-color-2">Events</span></h3>
                            <article class="post media-post clearfix pb-0 mb-10">
                                <a href="#" class="post-thumb mr-20"><img alt="" src="images/event/1.jpg"></a>
                                <div class="post-right">
                                    <h4 class="mt-0 mb-5"><a href="#">Upcoming Event Title</a></h4>
                                    <ul class="list-inline font-12 mb-5">
                                        <li class="pr-0"><i class="fa fa-calendar mr-5"></i> June 26, 2016 |</li>
                                        <li class="pl-5"><i class="fa fa-map-marker mr-5"></i>New York</li>
                                    </ul>
                                    <p class="mb-0 font-13">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Quas eveniet, nemo dicta. Ullam nam.</p>
                                    <a class="text-theme-colored font-13" href="#">Read More →</a>
                                </div>
                            </article>
                            <article class="post media-post clearfix pb-0 mb-10">
                                <a href="#" class="post-thumb mr-20"><img alt="" src="images/event/2.jpg"></a>
                                <div class="post-right">
                                    <h4 class="mt-0 mb-5"><a href="#">Upcoming Event Title</a></h4>
                                    <ul class="list-inline font-12 mb-5">
                                        <li class="pr-0"><i class="fa fa-calendar mr-5"></i> June 26, 2016 |</li>
                                        <li class="pl-5"><i class="fa fa-map-marker mr-5"></i>New York</li>
                                    </ul>
                                    <p class="mb-0 font-13">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Quas eveniet, nemo dicta. Ullam nam.</p>
                                    <a class="text-theme-colored font-13" href="#">Read More →</a>
                                </div>
                            </article>
                            <article class="post media-post clearfix pb-0 mb-10">
                                <a href="#" class="post-thumb mr-20"><img alt="" src="images/event/3.jpg"></a>
                                <div class="post-right">
                                    <h4 class="mt-0 mb-5"><a href="#">Upcoming Event Title</a></h4>
                                    <ul class="list-inline font-12 mb-5">
                                        <li class="pr-0"><i class="fa fa-calendar mr-5"></i> June 26, 2016 |</li>
                                        <li class="pl-5"><i class="fa fa-map-marker mr-5"></i>New York</li>
                                    </ul>
                                    <p class="mb-0 font-13">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Quas eveniet, nemo dicta. Ullam nam.</p>
                                    <a class="text-theme-colored font-13" href="#">Read More →</a>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6">
                            <h3 class="line-bottom mt-0 line-height-1">Why <span
                                    class="text-theme-color-2">Choose Us?</span></h3>
                            <p class="mb-10">The Cweren Law Firm is a recognized leader in landlord tenant
                                representation throughout Texas.The largest professional property.</p>
                            <div id="accordion1" class="panel-group accordion">
                                <div class="panel">
                                    <div class="panel-title"><a class="active" data-parent="#accordion1"
                                                                data-toggle="collapse" href="#accordion11"
                                                                aria-expanded="true"> <span class="open-sub"></span> Why
                                            this Company is Best?</a></div>
                                    <div id="accordion11" class="panel-collapse collapse in" role="tablist"
                                         aria-expanded="true">
                                        <div class="panel-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore impedit
                                                quae repellendus provident dolor iure poss imusven am aliquam. Officiis
                                                totam ea laborum deser unt vonsess. iure poss imusven am aliquam</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="panel-title"><a data-parent="#accordion1" data-toggle="collapse"
                                                                href="#accordion12" class="" aria-expanded="true"> <span
                                                class="open-sub"></span> Why this Company is Best?</a></div>
                                    <div id="accordion12" class="panel-collapse collapse" role="tablist"
                                         aria-expanded="true">
                                        <div class="panel-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore impedit
                                                quae repellendus provident dolor iure poss imusven am aliquam. Officiis
                                                totam ea laborum deser unt vonsess. iure poss imusven am aliquam</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="panel-title"><a data-parent="#accordion1" data-toggle="collapse"
                                                                href="#accordion13" class="" aria-expanded="true"> <span
                                                class="open-sub"></span> Why this Company is Best?</a></div>
                                    <div id="accordion13" class="panel-collapse collapse" role="tablist"
                                         aria-expanded="true">
                                        <div class="panel-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore impedit
                                                quae repellendus provident dolor iure poss imusven am aliquam. Officiis
                                                totam ea laborum deser unt vonsess. iure poss imusven am aliquam</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="panel-title"><a data-parent="#accordion1" data-toggle="collapse"
                                                                href="#accordion14" class="" aria-expanded="true"> <span
                                                class="open-sub"></span> Why this Company is Best?</a></div>
                                    <div id="accordion14" class="panel-collapse collapse" role="tablist"
                                         aria-expanded="true">
                                        <div class="panel-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore impedit
                                                quae repellendus provident dolor iure poss imusven am aliquam. Officiis
                                                totam ea laborum deser unt vonsess. iure poss imusven am aliquam</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="panel-title"><a data-parent="#accordion1" data-toggle="collapse"
                                                                href="#accordion15" class="" aria-expanded="true"> <span
                                                class="open-sub"></span> Why this Company is Best?</a></div>
                                    <div id="accordion15" class="panel-collapse collapse" role="tablist"
                                         aria-expanded="true">
                                        <div class="panel-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore impedit
                                                quae repellendus provident dolor iure poss imusven am aliquam. Officiis
                                                totam ea laborum deser unt vonsess. iure poss imusven am aliquam</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Divider: testimonials -->
        <section class="divider parallax layer-overlay overlay-dark-8" data-background-ratio="0.5"
                 data-bg-img="images/bg/bg2.jpg">
            <div class="container pb-50">
                <div class="section-title">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="font-weight-300 m-0 text-gray-lightgray">Happy Student</h5>
                            <h2 class="mt-0 mb-0 text-uppercase line-bottom text-white font-28">Testimonials<span
                                    class="font-30 text-theme-color-2">.</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-10">
                        <div class="owl-carousel-2col boxed" data-dots="true">
                            <div class="item">
                                <div class="testimonial pt-10">
                                    <div class="thumb pull-left mb-0 mr-0 pr-20">
                                        <img width="75" class="img-circle" alt="" src="images/testimonials/1.jpg">
                                    </div>
                                    <div class="ml-100 ">
                                        <h4 class="text-white mt-0">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore
                                            ad.</h4>
                                        <p class="author mt-20">- <span
                                                class="text-theme-color-2">Catherine Grace,</span> <small><em
                                                    class="text-gray-lightgray">CEO apple.inc</em></small></p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial pt-10">
                                    <div class="thumb pull-left mb-0 mr-0 pr-20">
                                        <img width="75" class="img-circle" alt="" src="images/testimonials/2.jpg">
                                    </div>
                                    <div class="ml-100 ">
                                        <h4 class="text-white mt-0">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore
                                            ad.</h4>
                                        <p class="author mt-20">- <span
                                                class="text-theme-color-2">Catherine Grace,</span> <small><em
                                                    class="text-gray-lightgray">CEO apple.inc</em></small></p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial pt-10">
                                    <div class="thumb pull-left mb-0 mr-0 pr-20">
                                        <img width="75" class="img-circle" alt="" src="images/testimonials/3.jpg">
                                    </div>
                                    <div class="ml-100 ">
                                        <h4 class="text-white mt-0">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore
                                            ad.</h4>
                                        <p class="author mt-20">- <span
                                                class="text-theme-color-2">Catherine Grace,</span> <small><em
                                                    class="text-gray-lightgray">CEO apple.inc</em></small></p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial pt-10">
                                    <div class="thumb pull-left mb-0 mr-0 pr-20">
                                        <img width="75" class="img-circle" alt="" src="images/testimonials/2.jpg">
                                    </div>
                                    <div class="ml-100 ">
                                        <h4 class="text-white mt-0">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore
                                            ad.</h4>
                                        <p class="author mt-20">- <span
                                                class="text-theme-color-2">Catherine Grace,</span> <small><em
                                                    class="text-gray-lightgray">CEO apple.inc</em></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section: Contact -->
        <section id="contact" class="bg-lighter">
            <div class="container pb-60">
                <div class="section-title mb-10">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-uppercase text-theme-colored title line-bottom line-height-1 mt-0">Contact
                                <span class="text-theme-color-2 font-weight-400">Us</span></h2>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-5">
                            <!-- Google Map HTML Codes -->
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5456.163483134849!2d144.95177475051227!3d-37.81589041361766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4dd5a05d97%3A0x3e64f855a564844d!2s121+King+St%2C+Melbourne+VIC+3000%2C+Australia!5e0!3m2!1sen!2sbd!4v1556130803137!5m2!1sen!2sbd"
                                width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                        <div class="col-md-7">
                            <h4 class="line-bottom mt-0 mb-30 mt-sm-20">SEND US A MESSAGE</h4>
                            <!-- Contact Form -->
                            <form id="contact_form" name="contact_form" class=""
                                  action="http://html.kodesolution.live/s/studypress/v6.0/demo/includes/sendmail.php"
                                  method="post">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group mb-30">
                                            <input name="form_name" class="form-control" type="text"
                                                   placeholder="Enter Name" required="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group mb-30">
                                            <input name="form_email" class="form-control required email" type="email"
                                                   placeholder="Enter Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group mb-30">
                                            <input name="form_subject" class="form-control required" type="text"
                                                   placeholder="Enter Subject">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group mb-30">
                                            <input name="form_phone" class="form-control" type="text"
                                                   placeholder="Enter Phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea name="form_message" class="form-control required" rows="5"
                                              placeholder="Enter Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <input name="form_botcheck" class="form-control" type="hidden" value=""/>
                                    <button type="submit"
                                            class="btn btn-flat btn-theme-colored text-uppercase mt-20 mb-sm-30 border-left-theme-color-2-4px"
                                            data-loading-text="Please wait...">Send your message
                                    </button>
                                    <button type="reset"
                                            class="btn btn-flat btn-theme-colored text-uppercase mt-20 mb-sm-30 border-left-theme-color-2-4px">
                                        Reset
                                    </button>
                                </div>
                            </form>
                            <!-- Contact Form Validation-->
                            <script type="text/javascript">
                                $("#contact_form").validate({
                                    submitHandler: function (form) {
                                        var form_btn = $(form).find('button[type="submit"]');
                                        var form_result_div = '#form-result';
                                        $(form_result_div).remove();
                                        form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                                        var form_btn_old_msg = form_btn.html();
                                        form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                                        $(form).ajaxSubmit({
                                            dataType: 'json',
                                            success: function (data) {
                                                if (data.status == 'true') {
                                                    $(form).find('.form-control').val('');
                                                }
                                                form_btn.prop('disabled', false).html(form_btn_old_msg);
                                                $(form_result_div).html(data.message).fadeIn('slow');
                                                setTimeout(function () {
                                                    $(form_result_div).fadeOut('slow')
                                                }, 6000);
                                            }
                                        });
                                    }
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Divider: Clients -->
        <section class="clients bg-theme-color-2">
            <div class="container pt-10 pb-0">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Section: Clients -->
                        <div class="owl-carousel-6col clients-logo transparent text-center owl-nav-top">
                            <div class="item"><a href="#"><img src="images/clients/w1.png" alt=""></a></div>
                            <div class="item"><a href="#"><img src="images/clients/w2.png" alt=""></a></div>
                            <div class="item"><a href="#"><img src="images/clients/w3.png" alt=""></a></div>
                            <div class="item"><a href="#"><img src="images/clients/w4.png" alt=""></a></div>
                            <div class="item"><a href="#"><img src="images/clients/w5.png" alt=""></a></div>
                            <div class="item"><a href="#"><img src="images/clients/w6.png" alt=""></a></div>
                            <div class="item"><a href="#"><img src="images/clients/w3.png" alt=""></a></div>
                            <div class="item"><a href="#"><img src="images/clients/w4.png" alt=""></a></div>
                            <div class="item"><a href="#"><img src="images/clients/w5.png" alt=""></a></div>
                            <div class="item"><a href="#"><img src="images/clients/w6.png" alt=""></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end main-content -->
    </div>

    <!-- Footer -->
    <footer id="footer" class="footer divider layer-overlay overlay-dark-9" data-bg-img="images/bg/bg2.jpg">
        <div class="container">
            <div class="row border-bottom">
                <div class="col-sm-6 col-md-3">
                    <div class="widget dark">
                        <img class="mt-5 mb-20" alt="" src="images/logo-white-footer.png">
                        <p>203, Envato Labs, Behind Alis Steet, Melbourne, Australia.</p>
                        <ul class="list-inline mt-5">
                            <li class="m-0 pl-10 pr-10"><i class="fa fa-phone text-theme-color-2 mr-5"></i> <a
                                    class="text-gray" href="#">123-456-789</a></li>
                            <li class="m-0 pl-10 pr-10"><i class="fa fa-envelope-o text-theme-color-2 mr-5"></i> <a
                                    class="text-gray" href="#">contact@yourdomain.com</a></li>
                            <li class="m-0 pl-10 pr-10"><i class="fa fa-globe text-theme-color-2 mr-5"></i> <a
                                    class="text-gray" href="#">www.yourdomain.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="widget dark">
                        <h4 class="widget-title">Useful Links</h4>
                        <ul class="list angle-double-right list-border">
                            <li><a href="page-about-style1.html">About Us</a></li>
                            <li><a href="page-course-list.html">Our Courses</a></li>
                            <li><a href="page-pricing-style1.html">Pricing Table</a></li>
                            <li><a href="page-gallery-3col.html">Gallery</a></li>
                            <li><a href="shop-category.html">Shop</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="widget dark">
                        <h4 class="widget-title">Twitter Feed</h4>
                        <div class="twitter-feed list-border clearfix" data-username="Envato" data-count="2"></div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="widget dark">
                        <h4 class="widget-title line-bottom-theme-colored-2">Opening Hours</h4>
                        <div class="opening-hours">
                            <ul class="list-border">
                                <li class="clearfix"><span> Mon - Tues :  </span>
                                    <div class="value pull-right"> 6.00 am - 10.00 pm</div>
                                </li>
                                <li class="clearfix"><span> Wednes - Thurs :</span>
                                    <div class="value pull-right"> 8.00 am - 6.00 pm</div>
                                </li>
                                <li class="clearfix"><span> Fri : </span>
                                    <div class="value pull-right"> Closed</div>
                                </li>
                                <li class="clearfix"><span> Sun : </span>
                                    <div class="value pull-right"> 8.00 am - 8.00 pm</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-30">
                <div class="col-md-2">
                    <div class="widget dark">
                        <h5 class="widget-title mb-10">Call Us Now</h5>
                        <div class="text-gray">
                            +61 3 1234 5678 <br>
                            +12 3 1234 5678
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="widget dark">
                        <h5 class="widget-title mb-10">Connect With Us</h5>
                        <ul class="styled-icons icon-bordered icon-sm">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-2">
                    <div class="widget dark">
                        <h5 class="widget-title mb-10">Subscribe Us</h5>
                        <!-- Mailchimp Subscription Form Starts Here -->
                        <form id="mailchimp-subscription-form-footer" class="newsletter-form">
                            <div class="input-group">
                                <input type="email" value="" name="EMAIL" placeholder="Your Email"
                                       class="form-control input-lg font-16" data-height="45px" id="mce-EMAIL-footer">
                                <span class="input-group-btn">
                  <button data-height="45px" class="btn bg-theme-color-2 text-white btn-xs m-0 font-14" type="submit">Subscribe</button>
                </span>
                            </div>
                        </form>
                        <!-- Mailchimp Subscription Form Validation-->
                        <script type="text/javascript">
                            $('#mailchimp-subscription-form-footer').ajaxChimp({
                                callback: mailChimpCallBack,
                                url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
                            });

                            function mailChimpCallBack(resp) {
                                // Hide any previous response text
                                var $mailchimpform = $('#mailchimp-subscription-form-footer'),
                                    $response = '';
                                $mailchimpform.children(".alert").remove();
                                if (resp.result === 'success') {
                                    $response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                                } else if (resp.result === 'error') {
                                    $response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                                }
                                $mailchimpform.prepend($response);
                            }
                        </script>
                        <!-- Mailchimp Subscription Form Ends Here -->
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom bg-black-333">
            <div class="container pt-20 pb-20">
                <div class="row">
                    <div class="col-md-6">
                        <p class="font-11 text-black-777 m-0">Copyright &copy;2020 49_Batch Evening. All Rights
                            Reserved</p>
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="widget no-border m-0">
                            <ul class="list-inline sm-text-center mt-5 font-12">
                                <li>
                                    <a href="#">FAQ</a>
                                </li>
                                <li>|</li>
                                <li>
                                    <a href="#">Help Desk</a>
                                </li>
                                <li>|</li>
                                <li>
                                    <a href="#">Support</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS
      (Load Extensions only on Local File Systems !
       The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript"
        src="js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>

</body>

</html>
