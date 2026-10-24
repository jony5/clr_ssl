<?php
$tmp_file_meta_ARRAY = array();

//
// Initialize Application
// Directory Path.
//
// 5 :: Monday, December 15, 2025 @ 0126 hrs.
$tmp_file_meta_ARRAY['APP_ROOT'] = $_SERVER['DOCUMENT_ROOT'] .
                                    DIRECTORY_SEPARATOR .
                                    'lifehacker.me';

//
// Initialize File Names for
// Directory Path Append.
//
// 5 :: Monday, December 15, 2025 @ 0126 hrs.
$tmp_res_favicon_ico = DIRECTORY_SEPARATOR . 'favicon.ico';
$tmp_res_splash_css = DIRECTORY_SEPARATOR . 'css' . DIRECTORY_SEPARATOR . 'splash.css';
$tmp_res_switches_js = DIRECTORY_SEPARATOR . 'js' . DIRECTORY_SEPARATOR . 'switches.js';
$tmp_res_jquery_js = DIRECTORY_SEPARATOR . 'js' . DIRECTORY_SEPARATOR . 'jquery-1.3.2.min.js';

//
// Initialize File Paths.
//
// 5 :: Monday, December 15, 2025 @ 0127 hrs.
$tmp_file_meta_ARRAY[$tmp_res_favicon_ico]['PATH'] = $tmp_file_meta_ARRAY['APP_ROOT'] . $tmp_res_favicon_ico;
$tmp_file_meta_ARRAY[$tmp_res_splash_css]['PATH'] = $tmp_file_meta_ARRAY['APP_ROOT'] . $tmp_res_splash_css;
$tmp_file_meta_ARRAY[$tmp_res_switches_js]['PATH'] = $tmp_file_meta_ARRAY['APP_ROOT'] . $tmp_res_switches_js;
$tmp_file_meta_ARRAY[$tmp_res_jquery_js]['PATH'] = $tmp_file_meta_ARRAY['APP_ROOT'] . $tmp_res_jquery_js;

// # # C # R # N # R # S # T # N # : : # # # #
// The CRNRSTN :: Logo Animated HTML Story Board
// HTML Generator Function Definition for
// the CRNRSTN :: Lightsaber RoCEv2 SOAP
// Services Layer (CLR-SSL).
//
// _crnrstn_generate_logo_stage()
//
//
// 5 ::
//
// Monday, December 15, 2025 @ 0209 hrs.
if(!function_exists('_crnrstn_generate_logo_stage')){
    function _crnrstn_generate_logo_stage($name = 'crnrstn',
                                          $width = 753,
                                          $height = NULL,
                                          $clickthrough_url = '',
                                          $autoplay = true,
                                          $autoplay_secs_delay = 0,
                                          $format = 'HTML'){
                                          // 5 :: Monday, December 15, 2025 @ 0209 hrs.  //2025-12-15 02:09:00.360226
                                          // TODO: Add HTML output support for other HTML Logos, e.g. the CSS Validator.
                                          //       5 :: Monday, December 15, 2025 @ 0235 hrs.
                                          // Edit: Finished adding UI for HTML output support for
                                          //       all other HTML Logos such as the CSS Validator,
                                          //       WETHRBUG, #COVIDDUSTTHRONEFLEX, and J5 HTML Logos.
                                          //       5 :: Wednesday, December 17, 2025 @ 0335 hrs.

//    //
//    // Initialize CRNRSTN :: Corp
//    // Logo (753px × 450px) Meta Data.
//    //
//    // 5 :: Monday, December 15, 2025 @ 0202 hrs.
//    $tmp_file_meta_ARRAY['CRNRSTN_LOGO']['HTML'] = '<div id="logo_wrapper">
//            <div id="logo_letter_wrapper">
//                <div id="logo_letter">C</div>
//                <div id="logo_letter_R">R</div>
//                <div id="logo_letter">N</div>
//                <div id="logo_letter">R</div>
//                <div id="logo_letter">S</div>
//                <div id="logo_letter">T</div>
//                <div id="logo_letter">N</div>
//                <div class="cb"></div>
//            </div>
//        </div>';

        return '<div id="logo_wrapper">
            <div id="logo_letter_wrapper">
                <div id="logo_letter">C</div>
                <div id="logo_letter_R">R</div>
                <div id="logo_letter">N</div>
                <div id="logo_letter">R</div>
                <div id="logo_letter">S</div>
                <div id="logo_letter">T</div>
                <div id="logo_letter">N</div>
                <div class="cb"></div>
            </div>
        </div>';

    }

}
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>CRNRSTN ::</title>
	<meta http-equiv="Content-category" content="text/html; charset=ISO-8859-1" />
    <link rel="icon" type="image/vnd.microsoft.icon" href="./favicon.ico?v=420.<?php echo filemtime($tmp_file_meta_ARRAY[$tmp_res_favicon_ico]['PATH']) . '.' . filesize($tmp_file_meta_ARRAY[$tmp_res_favicon_ico]['PATH']); ?>" />
    <link rel="SHORTCUT ICON" href="./favicon.ico?v=420.<?php echo filemtime($tmp_file_meta_ARRAY[$tmp_res_favicon_ico]['PATH']) . '.' . filesize($tmp_file_meta_ARRAY[$tmp_res_favicon_ico]['PATH']); ?>" />
	<link href="./css/splash.css?v=420.<?php echo filemtime($tmp_file_meta_ARRAY[$tmp_res_splash_css]['PATH']) . '.' . filesize($tmp_file_meta_ARRAY[$tmp_res_splash_css]['PATH']); ?>" rel="stylesheet" />
	<script src="./js/jquery-1.3.2.min.js?v=420.<?php echo filemtime($tmp_file_meta_ARRAY[$tmp_res_jquery_js]['PATH']) . '.' . filesize($tmp_file_meta_ARRAY[$tmp_res_jquery_js]['PATH']); ?>" type="text/javascript"></script>
	<script type="text/javascript" src="./js/switches.js?v=420.<?php echo filemtime($tmp_file_meta_ARRAY[$tmp_res_switches_js]['PATH']) . '.' . filesize($tmp_file_meta_ARRAY[$tmp_res_switches_js]['PATH']); ?>"></script>
	<style>
		body                    {}
		#nav, #nav a            { <?php
                                    echo 'color: #FFF;';
                                    ?> }
	</style>
</head>
<body>
	<div id="nav">
		<h1>
		html logo ux design
		</h1>
		<div id="elements">
			<ol>
                <li><a href="javascript:switchto('crnrstn');" id="nav_crnrstn">C<span class="the_R">R</span>NRSTN ::</a></li>
                <li><a href="javascript:switchto('wethrbug');" id="nav_wethrbug">WETHRBUG</a></li>
                <li><a href="javascript:switchto('css_validator');" id="nav_css_validator">CSS Validator</a></li>
                <li><a href="javascript:switchto('covid');" id="nav_covid">#COVID<!--DUSTTHRONEFLEX--></a></li>
                <li><a href="javascript:switchto('eVifweb');" id="nav_eVifweb">e<span class="the_V">V</span>ifweb</a></li>
                <li><a href="javascript:switchto('j5_stache');" id="nav_j5_stache">J5</a></li>
			</ol>
		</div>
	</div>

	<div id="triangle">
		<img src="images/bubble_triangle_100.png" width="30" height="15" />
	</div>

	<div id="crnrstn" class="content_bubble">
		<h3>C<span class="the_R">R</span>NRSTN ::</h3>
		<p>The C<span class="the_R">R</span>NRSTN :: Lightsaber RoCEv2
            SOAP Services Layer (CLR-SSL)</p>

        <?php

        //
        // Do something neat here; dynamically
        // generate a CRNRSTN :: Corp Logo
        // Story-Board-Stage-Show (Introductory
        // Experience) that grips and engages
        // a young, innocent, and eagerly
        // expecting audience.
        //
        //
        // 5 :: Monday, December 15, 2025 @ 0217 hrs. //2025-12-15 02:17:51.768322
        echo _crnrstn_generate_logo_stage();
        ?>

        <div class="cb"></div>
        <div class="content_last_modified">
            <p>Last Modified: 2025-12-15 02:47:23.379387</p>
        </div>

	</div>

    <div id="wethrbug" class="content_bubble">
        <h3>WETHRBUG</h3>
        <p>Pulling real-time weather forecasts
            through a National Weather Services
            Web API for fast and accurate results.
        </p>

        <div class="cb"></div>
        <div class="content_last_modified">
            <p>Last Modified: 2025-12-16 09:15:15.002020</p>
        </div>

    </div>

    <div id="css_validator" class="content_bubble">
        <h3>HTML Email CSS Validator</h3>
        <p>Special thanks to the folks at WaSP
            and Campaign Monitor for their
            Ultimate Guide to CSS breaking down
            a host of the nitty-gritty with
            respect to CSS support for many
            popular mobile, web, and desktop
            email clients and for their creation
            of the Email Standards Project.
        </p>

        <div class="cb"></div>
        <div class="content_last_modified">
            <p>Last Modified: 2025-12-16 09:15:15.002020</p>
        </div>

    </div>

    <div id="covid" class="content_bubble">
        <h3>#COVIDDUSTTHRONEFLEX</h3>
        <p>COVID: A simple demonstration to vindicate,
            to justify, and to return respect back to the
            neck of an authority that is granted to a fancy
            pants mud throne...which said dust throne,
            authority of dust (Rom. 5:14, 17, 21; 6:9-11;
            14:7-12), dusty arse seated (Rev. 6:16-17;
            Luke 23:27-30; 19:12, 14, 15, 27), and the dragon
            that eats dust (Gen. 3:14; Rev. 12:3-4, 13, 17;
            13:2, 4) are all being shaken off (Luke 9:5-6;
            13:17; Heb. 2:14-15; 2 Cor. 3:12, 17;
            Rom. 8:33-39; 1 Cor. 3:21-23) by the people of
            the Lord as they return to the Great Shepherd
            and Overseer of their souls (Matt. 2:4-6);<br><br>

            the flex of a throne whose authority over the
            hearts of the people is melting away
            (1 Cor. 15:55, 58; 2 Cor. 1:9-10; Rom. 6:8-11)
            out in the middle of some freak (See Rev. 3:7-13,
            footnote 1 paragraph 2.) rain (Deut. 11:14;
            Joel 2:23 footnote 1, Recovery Version) storm
            (2 Cor. 3:6-9; Rom. 8:14-23) by the side
            (Matt. 13:4 footnote 2, Recovery Version) of the
            solid gold street (Rev. 21:7; 21:3-5; 2:10-11;
            20:6; Eph. 1:3-14; John 5:24-25;
            Luke 9:1-6, 10:19; Rev. 21:21 footnote 3,
            Recovery Version) of the lowly man, Jesus
            (Luke 23:38, 42-43; John 8:51-59; Acts 2:22-25;
            Exo. 9:29; Deut. 10:14-22; Psalm 24;
            1 Cor. 10:26, 29b-31; Luke 1:26-33).
        </p>

        <div class="cb"></div>
        <div class="content_last_modified">
            <p>Last Modified: 2025-12-17 01:22:55.965850</p>
        </div>

    </div>

    <div id="eVifweb" class="content_bubble">
        <h3>e<span class="the_V">V</span>ifweb</h3>
        <p></p>

        <div class="cb"></div>
        <div class="content_last_modified">
            <p>Last Modified: 2025-12-16 09:15:15.002020</p>
        </div>

    </div>

    <div id="j5_stache" class="content_bubble">
        <h3>J5</h3>
        <p></p>

        <div class="cb"></div>
        <div class="content_last_modified">
            <p>Last Modified: 2025-12-16 09:15:15.002020</p>
        </div>

    </div>

	<div id="footer">
		Lifehacker.me by <a href="http://lifehacker.com">Lifehacker</a>.
	</div>

	<div id="spacer" style="padding-bottom: 12px; float: right; clear: both;">&nbsp;</div>
	
</body>
</html>