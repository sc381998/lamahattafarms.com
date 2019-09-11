<?php
if (!defined('fileIncluded')) {
    exit();
}
include("./lib/checkme.php");
?>
<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>LamahattaFarms : Home</title>

        <!-- Favicons-->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" type="image/x-icon" href="assets/img/apple-touch-icon-57x57-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="assets/img/apple-touch-icon-144x144-precomposed.png">

        <!-- GOOGLE WEB FONT -->
        <link href="https://fonts.googleapis.com/css?family=Gochi+Hand|Lato:300,400|Montserrat:400,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">

        <!-- COMMON CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/vendors.css" rel="stylesheet">

        <!-- CUSTOM CSS -->
        <link href="assets/css/custom.css" rel="stylesheet">

        <!-- REVOLUTION SLIDER CSS -->
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="assets/css/settings.css">

        <!-- REVOLUTION LAYERS STYLES -->
        <style>
            .tp-caption.NotGeneric-Title,
            .NotGeneric-Title {
                color: rgba(255, 255, 255, 1.00);
                font-size: 70px;
                line-height: 70px;
                font-weight: 800;
                font-style: normal;
                text-decoration: none;
                background-color: transparent;
                border-color: transparent;
                border-style: none;
                border-width: 0px;
                border-radius: 0 0 0 0px
            }

            .tp-caption.NotGeneric-SubTitle,
            .NotGeneric-SubTitle {
                color: rgba(255, 255, 255, 1.00);
                font-size: 13px;
                line-height: 20px;
                font-weight: 500;
                font-style: normal;
                text-decoration: none;
                background-color: transparent;
                border-color: transparent;
                border-style: none;
                border-width: 0px;
                border-radius: 0 0 0 0px;
                letter-spacing: 4px
            }

            .tp-caption.NotGeneric-Icon,
            .NotGeneric-Icon {
                color: rgba(255, 255, 255, 1.00);
                font-size: 30px;
                line-height: 30px;
                font-weight: 400;
                font-style: normal;
                text-decoration: none;
                background-color: rgba(0, 0, 0, 0);
                border-color: rgba(255, 255, 255, 0);
                border-style: solid;
                border-width: 0px;
                border-radius: 0px 0px 0px 0px;
                letter-spacing: 3px
            }

            .tp-caption.NotGeneric-Button,
            .NotGeneric-Button {
                color: rgba(255, 255, 255, 1.00);
                font-size: 14px;
                line-height: 14px;
                font-weight: 500;
                font-style: normal;
                text-decoration: none;
                background-color: rgba(0, 0, 0, 0);
                border-color: rgba(255, 255, 255, 0.50);
                border-style: solid;
                border-width: 1px;
                border-radius: 0px 0px 0px 0px;
                letter-spacing: 3px
            }

            .tp-caption.NotGeneric-Button:hover,
            .NotGeneric-Button:hover {
                color: rgba(255, 255, 255, 1.00);
                text-decoration: none;
                background-color: transparent;
                border-color: rgba(255, 255, 255, 1.00);
                border-style: solid;
                border-width: 1px;
                border-radius: 0px 0px 0px 0px;
                cursor: pointer
            }
        </style>

    </head>

    <body>

        <div id="preloader">
            <div class="sk-spinner sk-spinner-wave">
                <div class="sk-rect1"></div>
                <div class="sk-rect2"></div>
                <div class="sk-rect3"></div>
                <div class="sk-rect4"></div>
                <div class="sk-rect5"></div>
            </div>
        </div>
        <!-- End Preload -->

        <div class="layer"></div>
        <!-- Mobile menu overlay mask -->

        <!-- Header================================================== -->
        <header>
            <div id="top_line">
                <div class="container">
                    <div class="row">
                        <div class="col-6"><i class="icon-phone"></i><strong>+91 98009 31184</strong></div>
                        <div class="col-6">
                            <ul id="top_links">
                                <li><a href="https://www.facebook.com/lamahattafarms/"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-twitter"></i></a></li>                           
                                <li><a href="#"><i class="icon-instagram"></i></a></li>
                                <!--<li><a href="#"><i class="icon-youtube-play"></i></a></li>-->
                            </ul>
                        </div>
                    </div><!-- End row -->
                </div><!-- End container-->
            </div><!-- End top line-->

            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <div id="logo_home">
                            <img class="img-responsive" src="assets/img/logo1.png"/>
                        </div>
                    </div>
                    <nav class="col-9">
                        <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="#"><span>Menu mobile</span></a>
                        <div class="main-menu">
                            <div id="header_menu">
                                <img src="assets/img/logo_sticky.png" width="160" height="34" alt="City tours" data-retina="true">
                            </div>
                            <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                            <ul style="margin-top:10px;">
                                <?php
                                foreach ($menuarray as $key => $val) {

                                    if ($key == "index") {
                                        ?>
                                        <li ><a href="index.php"><?php echo $val['name']; ?></a></li>
                                        <?php
                                    } else if ($key == 'rooms' || $key == 'blog') {
                                        ?>
                                        <li><a href="#"><?php echo $val['name']; ?></a></li>  
                                        <?php
                                    } else {
                                        ?>
                                        <li><a href="<?php echo $key; ?>.php"><?php echo $val['name']; ?></a></li>  
                                        <?php
                                    }
                                }
                                ?>
                                <div class="float-right text-center nopadding">
                                    <a href="#" class="btn_1 medium">Submit Query</a>
                                </div>
                            </ul>

                        </div><!-- End main-menu -->

                    </nav>
                </div>
            </div><!-- container -->
        </header><!-- End Header -->

        <main>
            <div id="rev_slider_54_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="notgeneric1" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
                <div id="rev_slider_54_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
                    <ul>
                        <!-- SLIDE  -->
                        <li data-index="rs-140" data-transition="zoomin" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0" data-saveperformance="off" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="assets/img/slider1.jpg" alt="" data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption NotGeneric-Title   tp-resizeme" id="slide-140-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-fontsize="['50','46','36','28']" data-lineheight="['46','46','36','28']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1000,"split":"chars","split_direction":"forward","splitdelay":0.05,"speed":2000,"frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[10,10,10,10]" data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-size: 50px; line-height: 46px; font-weight: 700;font-family:Montserrat; background-color: #00000094;">WELCOME TO LAMAHATTA FARMS </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption NotGeneric-SubTitle   tp-resizeme" id="slide-140-layer-4" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['52','52','52','51']" data-fontweight="['400','500','500','500']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[10,10,10,10]" data-paddingright="[10,10,10,10]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[10,10,10,10]" style="z-index: 6; white-space: nowrap; font-weight: 400;font-family: 'Dancing Script', cursive; font-size:30px; background-color: #000000b5;"><i>Experiential Living In The Wilderness</i></div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption NotGeneric-Icon   tp-resizeme" id="slide-140-layer-8" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-68','-68','-68','-68']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":2000,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; white-space: nowrap;cursor:default;"><i class="pe-7s-compass"></i> </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption NotGeneric-Button rev-btn " id="slide-140-layer-7" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['124','124','124','123']" data-fontweight="['400','500','500','500']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="button" data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]' data-responsive_offset="on" data-responsive="off" data-frames='[{"delay":2000,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1);bc:rgba(255, 255, 255, 1);bw:1 1 1 1;"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[10,10,10,10]" data-paddingright="[30,30,30,30]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[30,30,30,30]" style="z-index: 8; white-space: nowrap; font-weight: 400;font-family:Montserrat;border-color:rgba(255,255,255,0.50);border-width:1px 1px 1px 1px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;background-color: #00000082;">View Gallery </div>

                            <!-- LAYER NR. 5 -->
                            <div class="tp-caption rev-scroll-btn " id="slide-140-layer-9" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['50','50','50','50']" data-width="35" data-height="55" data-whitespace="nowrap" data-visibility="['on','on','on','off']" data-type="button" data-actions='[{"event":"click","action":"scrollbelow","offset":"0px","delay":"","speed":"300","ease":"Linear.easeNone"}]' data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":2000,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"y:50px;opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 9; min-width: 35px; max-width: 35px; max-width: 55px; max-width: 55px; white-space: nowrap; font-weight: 100; color: transparent;border-color:rgba(255, 255, 255, 0.5);border-style:solid;border-width:1px 1px 1px 1px;border-radius:23px 23px 23px 23px;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                                <span></span>
                            </div>
                        </li>





                        <!-- SLIDE  -->
                        <li data-index="rs-144" data-transition="zoomin" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0" data-saveperformance="off" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="assets/img/slider2.jpg" alt="" data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 26 -->
                            <div class="tp-caption NotGeneric-Title   tp-resizeme" id="slide-144-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-fontsize="['50','48','36','28']" data-lineheight="['48','48','36','28']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1000,"split":"chars","split_direction":"forward","splitdelay":0.1,"speed":2000,"frame":"0","from":"x:[-105%];z:0;rX:0deg;rY:0deg;rZ:-90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[10,10,10,10]" data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-size: 50px; line-height: 48px; font-weight: 700;font-family:Montserrat;background-color: #00000094;">WANT THIS TOO? </div>

                            <!-- LAYER NR. 27 -->
                            <div class="tp-caption NotGeneric-SubTitle   tp-resizeme" id="slide-144-layer-4" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['52','52','52','51']" data-fontweight="['400','500','500','500']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[10,10,10,10]" data-paddingright="[10,10,10,10]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[10,10,10,10]" style="z-index: 6; white-space: nowrap; font-weight: 400;font-family: 'Dancing Script', cursive; font-size:30px;background-color: #000000b5;">Book Lamahatta Farms Today </div>

                            <!-- LAYER NR. 28 -->
                            <div class="tp-caption NotGeneric-Icon   tp-resizeme" id="slide-144-layer-8" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-68','-68','-68','-68']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":2000,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; white-space: nowrap;cursor:default;"><i class="pe-7s-diamond"></i> </div>

                            <!-- LAYER NR. 29 -->
                            <div class="tp-caption rev-scroll-btn " id="slide-144-layer-9" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['50','50','50','50']" data-width="35" data-height="55" data-whitespace="nowrap" data-visibility="['on','on','on','off']" data-type="button" data-actions='[{"event":"click","action":"scrollbelow","offset":"0px","delay":"","speed":"300","ease":"Linear.easeNone"}]' data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":2000,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"y:50px;opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8; min-width: 35px; max-width: 35px; max-width: 55px; max-width: 55px; white-space: nowrap; font-weight: 100; color: transparent;border-color:rgba(255, 255, 255, 0.5);border-style:solid;border-width:1px 1px 1px 1px;border-radius:23px 23px 23px 23px;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                                <span></span>
                            </div>

                            <!-- LAYER NR. 30 -->
                            <a class="tp-caption NotGeneric-Button rev-btn " href="#" id="slide-144-layer-10" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['124','125','124','104']" data-fontweight="['400','500','500','500']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="button" data-actions='' data-responsive_offset="on" data-responsive="off" data-frames='[{"delay":2000,"speed":300,"frame":"0","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","ease":"nothing"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1);bc:rgba(255, 255, 255, 1);bw:1 1 1 1;"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[10,10,10,10]" data-paddingright="[30,30,30,30]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[30,30,30,30]" style="z-index: 9; white-space: nowrap; font-weight: 400;font-family:Montserrat;border-color:rgba(255,255,255,0.50);border-width:1px 1px 1px 1px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;background-color: #00000082;">BOOK NOW </a>
                        </li>
                    </ul>
                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                </div>
            </div>
            <!-- END REVOLUTION SLIDER -->

            <?php
            if (is_readable("./pages/$pagefile.php")) {
                include ("./pages/$pagefile.php");
            } else {
                echo $sys->showError('danger', '! 404 file not found. Please try after some time');
            }
            ?>

            <!-- Default footer-->
            <footer class="revealed">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h3>Need help?</h3>
                            <a href="tel://004542344599" id="phone">+91 00000 00000</a>
                            <a href="mailto:help@Lamahatta Farms.com" id="email_footer">help@Lamahatta Farms.com</a>
                        </div>
                        <div class="col-md-4">
                            <h3>About</h3>
                            <ul>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Gallery</a></li>
                                <li><a href="#">Tariff</a></li>                        
                                <li><a href="#">Terms and condition</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h3>Discover</h3>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Community blog</a></li>
                                <li><a href="#">Rooms</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>

                    </div><!-- End row -->
                    <div class="row">
                        <div class="col-md-12">
                            <div id="social_footer">
                                <p>© Lamahatta Farms 2018. Created &amp; Cared By <a target="_blank" href="https://www.apexinvention.com">Apex Invention</a></p>
                            </div>
                        </div>
                    </div><!-- End row -->
                </div><!-- End container -->
            </footer><!-- End footer -->

            <div id="toTop"></div><!-- Back to top button -->

            <!-- Search Menu -->
            <div class="search-overlay-menu">
                <span class="search-overlay-close"><i class="icon_set_1_icon-77"></i></span>
                <form role="search" id="searchform" method="get">
                    <input value="" name="q" type="search" placeholder="Search..." />
                    <button type="submit"><i class="icon_set_1_icon-78"></i>
                    </button>
                </form>
            </div><!-- End Search Menu -->

            <!-- Sign In Popup -->
            <div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
                <div class="small-dialog-header">
                    <h3>Sign In</h3>
                </div>
                <form>
                    <div class="sign-in-wrapper">
                        <a href="#0" class="social_bt facebook">Login with Facebook</a>
                        <a href="#0" class="social_bt google">Login with Google</a>
                        <div class="divider"><span>Or</span></div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" id="email">
                            <i class="icon_mail_alt"></i>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" id="password" value="">
                            <i class="icon_lock_alt"></i>
                        </div>
                        <div class="clearfix add_bottom_15">
                            <div class="checkboxes float-left">
                                <input id="remember-me" type="checkbox" name="check">
                                <label for="remember-me">Remember Me</label>
                            </div>
                            <div class="float-right"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
                        </div>
                        <div class="text-center"><input type="submit" value="Log In" class="btn_login"></div>
                        <div class="text-center">
                            Don’t have an account? <a href="javascript:void(0);">Sign up</a>
                        </div>
                        <div id="forgot_pw">
                            <div class="form-group">
                                <label>Please confirm login email below</label>
                                <input type="email" class="form-control" name="email_forgot" id="email_forgot">
                                <i class="icon_mail_alt"></i>
                            </div>
                            <p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
                            <div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
                        </div>
                    </div>
                </form>
                <!--form -->
            </div>
            <!-- /Sign In Popup -->

            <!-- Common scripts -->
            <script src="assets/js/jquery-2.2.4.min.js"></script>
            <script src="assets/js/common_scripts_min.js"></script>
            <script src="assets/js/functions.js"></script>

            <!-- SLIDER REVOLUTION SCRIPTS  -->
            <script src="assets/js/jquery.themepunch.tools.min.js"></script>
            <script src="assets/js/jquery.themepunch.revolution.min.js"></script>
            <script src="assets/js/revolution.extension.actions.min.js"></script>
            <script src="assets/js/revolution.extension.carousel.min.js"></script>
            <script src="assets/js/revolution.extension.kenburn.min.js"></script>
            <script src="assets/js/revolution.extension.layeranimation.min.js"></script>
            <script src="assets/js/revolution.extension.migration.min.js"></script>
            <script src="assets/js/revolution.extension.navigation.min.js"></script>
            <script src="assets/js/revolution.extension.parallax.min.js"></script>
            <script src="assets/js/revolution.extension.slideanims.min.js"></script>
            <script src="assets/js/revolution.extension.video.min.js"></script>
            <script src="assets/js/popper.js" type="text/javascript"></script>
            <script>
                var tpj = jQuery;
                var revapi54;
                tpj(document).ready(function () {
                    if (tpj("#rev_slider_54_1").revolution == undefined) {
                        revslider_showDoubleJqueryError("#rev_slider_54_1");
                    } else {
                        revapi54 = tpj("#rev_slider_54_1").show().revolution({
                            sliderType: "standard",
                            jsFileLocation: "rev-slider-files/js/",
                            sliderLayout: "fullwidth",
                            dottedOverlay: "none",
                            delay: 9000,
                            navigation: {
                                keyboardNavigation: "off",
                                keyboard_direction: "horizontal",
                                mouseScrollNavigation: "off",
                                mouseScrollReverse: "default",
                                onHoverStop: "off",
                                touch: {
                                    touchenabled: "on",
                                    touchOnDesktop: "off",
                                    swipe_threshold: 75,
                                    swipe_min_touches: 50,
                                    swipe_direction: "horizontal",
                                    drag_block_vertical: false
                                }
                                ,
                                arrows: {
                                    style: "uranus",
                                    enable: true,
                                    hide_onmobile: true,
                                    hide_under: 778,
                                    hide_onleave: true,
                                    hide_delay: 200,
                                    hide_delay_mobile: 1200,
                                    tmp: '',
                                    left: {
                                        h_align: "left",
                                        v_align: "center",
                                        h_offset: 20,
                                        v_offset: 0
                                    },
                                    right: {
                                        h_align: "right",
                                        v_align: "center",
                                        h_offset: 20,
                                        v_offset: 0
                                    }
                                }
                            },
                            responsiveLevels: [1240, 1024, 778, 480],
                            visibilityLevels: [1240, 1024, 778, 480],
                            gridwidth: [1240, 1024, 778, 480],
                            gridheight: [700, 550, 860, 480],
                            lazyType: "none",
                            parallax: {
                                type: "mouse",
                                origo: "slidercenter",
                                speed: 2000,
                                levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 47, 48, 49, 50, 51, 55],
                                disable_onmobile: "on"
                            },
                            shadow: 0,
                            spinner: "off",
                            stopLoop: "on",
                            stopAfterLoops: 0,
                            stopAtSlide: 1,
                            shuffle: "off",
                            autoHeight: "off",
                            disableProgressBar: "on",
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
                    }
                }); /*ready*/
            </script>




    </body>

</html>