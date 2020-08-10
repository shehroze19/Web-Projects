﻿<?php include("connection.php") ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
</head>
<body style="padding:0px; margin:0px; background-color:#fff;font-family:arial,helvetica,sans-serif,verdana,'Open Sans'">

	<!-- #region Jssor Slider Begin -->
	<!-- Generator: Jssor Slider Maker -->
	<!-- Source: https://www.jssor.com -->
	<script src="js/jssor.slider-26.1.5.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		jssor_1_slider_init = function() {

			var jssor_1_options = {
				$AutoPlay: 1,
				$Idle: 2000,
				$SlideEasing: $Jease$.$InOutSine,
				$DragOrientation: 3,
				$ArrowNavigatorOptions: {
					$Class: $JssorArrowNavigator$
				},
				$BulletNavigatorOptions: {
					$Class: $JssorBulletNavigator$
				}
			};

			var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            //make sure to clear margin of the slider container element
            jssor_1_slider.$Elmt.style.margin = "";

            /*#region responsive code begin*/

            /*
                parameters to scale jssor slider to fill parent container

                MAX_WIDTH
                    prevent slider from scaling too wide
                MAX_HEIGHT
                    prevent slider from scaling too high, default value is original height
                MAX_BLEEDING
                    prevent slider from bleeding outside too much, default value is 1
                    0: contain mode, allow up to 0% to bleed outside, the slider will be all inside parent container
                    1: cover mode, allow up to 100% to bleed outside, the slider will cover full area of parent container
                    0.1: flex mode, allow up to 10% to bleed outside, this is better way to make full window slider, especially for mobile devices
                    */

                    var MAX_WIDTH = 3000;
                    var MAX_HEIGHT = 3000;
                    var MAX_BLEEDING = 0.128;

                    function ScaleSlider() {
                    	var containerElement = jssor_1_slider.$Elmt.parentNode;
                    	var containerWidth = containerElement.clientWidth;

                    	if (containerWidth) {
                    		var originalWidth = jssor_1_slider.$OriginalWidth();
                    		var originalHeight = jssor_1_slider.$OriginalHeight();

                    		var containerHeight = containerElement.clientHeight || originalHeight;

                    		var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);
                    		var expectedHeight = Math.min(MAX_HEIGHT || containerHeight, containerHeight);

                    //scale the slider to expected size
                    jssor_1_slider.$ScaleSize(expectedWidth, expectedHeight, MAX_BLEEDING);

                    //position slider at center in vertical orientation
                    jssor_1_slider.$Elmt.style.top = ((containerHeight - expectedHeight) / 2) + "px";

                    //position slider at center in horizontal orientation
                    jssor_1_slider.$Elmt.style.left = ((containerWidth - expectedWidth) / 2) + "px";
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
    	html, body {
    		position:absolute;
    		margin: 0;
    		padding: 0;
    		top: 0;
    		left: 0;
    		width: 100%;
    		height: 100%;
    	}


    	/* jssor slider loading skin spin css */
    	.jssorl-009-spin img {
    		animation-name: jssorl-009-spin;
    		animation-duration: 1.6s;
    		animation-iteration-count: infinite;
    		animation-timing-function: linear;
    	}

    	@keyframes jssorl-009-spin {
    		from {
    			transform: rotate(0deg);
    		}

    		to {
    			transform: rotate(360deg);
    		}
    	}


    	.jssorb064 {position:absolute;}
    	.jssorb064 .i {position:absolute;cursor:pointer;}
    	.jssorb064 .i .b {fill:#000;fill-opacity:.5;stroke:#fff;stroke-width:400;stroke-miterlimit:10;stroke-opacity:0.5;}
    	.jssorb064 .i:hover .b {fill-opacity:.8;}
    	.jssorb064 .iav .b {fill:#ffe200;fill-opacity:1;stroke:#ffaa00;stroke-opacity:.7;stroke-width:2000;}
    	.jssorb064 .iav:hover .b {fill-opacity:.6;}
    	.jssorb064 .i.idn {opacity:.3;}

    	.jssora051 {display:block;position:absolute;cursor:pointer;}
    	.jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
    	.jssora051:hover {opacity:.8;}
    	.jssora051.jssora051dn {opacity:.5;}
    	.jssora051.jssora051ds {opacity:.3;pointer-events:none;}
    </style>
    <div style="position:relative;top:0;left:0;width:100%;height:100%;overflow:hidden;">
    	<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:640px;height:960px;overflow:hidden;visibility:hidden;">
    		<!-- Loading Screen -->
    		<div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
    			<img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
    		</div>
    		<div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:640px;height:960px;overflow:hidden;">

    			<?php

    			$query="SELECT * FROM `ad` ";
    			$result=mysqli_query($con,$query);

    			while($row = mysqli_fetch_assoc($result))
    			{

    				echo "<div>
    				<img data-u='image' src='ad_images/".$row['image']."' />";


                  if($row['description']!=null){


                      echo "
                      <div style='position:absolute;top:80px;left:70px;width:500px;height:550px;z-index:0;background-color:white;font-size:34px;color:black;line-height:30px;text-align:center;padding:10px;box-sizing:border-box;'>";


                        $str=$row['description'];

                        $strlen = strlen($str );
                        for( $i = 0; $i < $strlen; $i++ ) {
                         if($i%16==0 && $i!=0){
                            echo "<br><br>";
                        }
                        else{
                         echo $str[$i];

                     }
                 }


                 echo   "</div>";
             }

             echo "
         </div>";








     }


     ?>



 </div>
 <!-- Bullet Navigator -->
 <div data-u="navigator" class="jssorb064" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
  <div data-u="prototype" class="i" style="width:16px;height:16px;">
     <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
        <circle class="b" cx="8000" cy="8000" r="5800"></circle>
    </svg>
</div>
</div>
<!-- Arrow Navigator -->
<div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
  <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
     <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
 </svg>
</div>
<div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
  <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
     <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
 </svg>
</div>
</div>
</div>
<script type="text/javascript">jssor_1_slider_init();</script>
<!-- #endregion Jssor Slider End -->
</body>
</html>
