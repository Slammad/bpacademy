<?php
require('core/init.php')
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Home</title>
        <meta name="title" content="">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">  
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/dist/themes/default/skins/_all-skins.min.css">
        <link rel="stylesheet" href="assets/dist/themes/default/ss-main.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    

    </head>
    <style>
.carousel-caption {
    left: 0;
    right: 0;
    bottom: 0;
    text-align: left;
    padding: 0px;
    background: rgba(0,0,0,.6);
    text-shadow: none;
}
.carousel-caption a {
    color: #fff;
}
section {
    padding-top: 4rem;
    padding-bottom: 5rem;
    background-color: #f1f4fa;
}
.wrap {
    display: flex;
    background: white;
    padding: 1rem 1rem 1rem 1rem;
    border-radius: 0.5rem;
    box-shadow: 7px 7px 30px -5px rgba(0,0,0,0.1);
    margin-bottom: 2rem;
}

.wrap:hover {
    background: red;;
    color: white;
}

.ico-wrap {
    margin: auto;
}

.mbr-iconfont {
    font-size: 4.5rem !important;
    color: #313131;
    margin: 1rem;
    padding-right: 1rem;
}
.vcenter {
    margin: auto;
}

.mbr-section-title3 {
    text-align: left;
}
h2 {
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
}
.display-5 {
    font-family: 'Source Sans Pro',sans-serif;
    font-size: 1.4rem;
}
.mbr-bold {
    font-weight: 700;
}

 p {
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    line-height: 25px;
}
.display-6 {
    font-family: 'Source Sans Pro',sans-serif;
    font-size: 1re
}




</style>
<body>

    <!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Maker -->
    <!-- Source: https://www.jssor.com -->
    <script src="assets/js/jssor.slider-27.5.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_options = {
              $AutoPlay: 1,
              $AutoPlaySteps: 5,
              $SlideDuration: 160,
              $SlideWidth: 200,
              $SlideSpacing: 3,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,
                $Steps: 5
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 1150;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /*jssor slider bullet skin 057 css*/
        .jssorb057 .i {position:absolute;cursor:pointer;}
        .jssorb057 .i .b {fill:none;stroke:#fff;stroke-width:2000;stroke-miterlimit:10;stroke-opacity:0.4;}
        .jssorb057 .i:hover .b {stroke-opacity:.7;}
        .jssorb057 .iav .b {stroke-opacity: 1;}
        .jssorb057 .i.idn {opacity:.3;}

        /*jssor slider arrow skin 073 css*/
        .jssora073 {display:block;position:absolute;cursor:pointer;}
        .jssora073 .a {fill:#ddd;fill-opacity:.7;stroke:#000;stroke-width:160;stroke-miterlimit:10;stroke-opacity:.7;}
        .jssora073:hover {opacity:.8;}
        .jssora073.jssora073dn {opacity:.4;}
        .jssora073.jssora073ds {opacity:.3;pointer-events:none;}
    </style>