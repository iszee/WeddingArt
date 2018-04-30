<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Wedding Art-All About Wedding</title>
<link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--slider-->
<link rel="stylesheet" href="<?php echo base_url(); ?>css/flexslider.css" type="text/css" media="all" />
<!-- jQuery -->
 <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>js/libs/jquery-1.7.min.js">\x3C/script>')</script>
  <!-- FlexSlider -->
  <script defer src="<?php echo base_url(); ?>js/jquery.flexslider.js"></script>
  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
</head>

<style type="text/css">
	.sidebar-box {
			max-height: 120px;
			position: relative;
			padding: 20px;
			overflow: hidden;
		}

	.sidebar-box .read-more {
			position: absolute;
			bottom: 0; left: 0;
			width: 100%;
			text-align: center;
			margin: 0;
			padding: 30px 0 30px 0;

			/* "transparent" only works here because == rgba(0,0,0,0) */
			background-image: linear-gradient(to bottom, transparent, black);
				background-image: -webkit-gradient(linear,left top,left bottom,color-stop(0, transparent),color-stop(1, white));
		}
</style>
<link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
</head>
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js'></script>
	<script>
		// DOM Ready
		$(function() {

			var $el, $ps, $up, totalHeight;

			$(".sidebar-box .button").click(function() {

				// IE 7 doesn't even get this far. I didn't feel like dicking with it.

				totalHeight = 0

				$el = $(this);
				$p  = $el.parent();
				$up = $p.parent();
				$ps = $up.find("p:not('.read-more')");

				// measure how tall inside should be by adding together heights of all inside paragraphs (except read-more paragraph)
				$ps.each(function() {
					totalHeight += $(this).outerHeight();
					// FAIL totalHeight += $(this).css("margin-bottom");
				});

				$up
					.css({
						// Set height to prevent instant jumpdown when max height is removed
						"height": $up.height(),
						"max-height": 9999
					})
					.animate({
						"height": totalHeight
					});

				// fade out read-more
				$p.fadeOut();

				// prevent jump-down
				return false;

			});

		});
	</script>

<body>

 <div class="banner">
	    <div class="flexslider">
	          <ul class="slides">
              <?php
                $baseUrl=base_url();
                foreach($curPicData as $caroPic){
            			$picUrl=$baseUrl.$caroPic["url"];
                  echo "<li><img src='$picUrl' alt=''/></li>";
                }
                  ?>
	          </ul>
	    </div>
   </div>
   <div class="content-top">
		<div class="wrap">
			<div class="content-topbox">
				<div class="col_1_of_bottom span_1_of_bottom">
					<img src="<?php echo base_url(); ?>images/pic6.jpg" alt="">

				     <div class="sidebar-box">
						<h5>Why You Should Consider Hiring a WeddingArt</h5>
						<p>Your friends and family are not a substitute for a professional wedding planner - They have their own jobs and personal responsibilities to attend to, and may not have the time and energy to devote to your wedding.</p>
						<p class="read-more"><a href="#" class="button">Read More</a></p>
					</div>
				</div>

				<div class="col_1_of_bottom span_1_of_bottom">
					<img src="<?php echo base_url(); ?>images/pic7.jpg" alt="">

				     <div class="sidebar-box">
				     	<h5>Why Hire Us?</h5>
						<p>Well-Coordinated Weddings - We maintain a very close customer relationship and make sure that all parties will always know what will happen next during the Wedding Day. </p>
						<p class="read-more"><a href="#" class="button">Read More</a></p>
					</div>
				</div>

				<div class="col_1_of_bottom span_1_of_bottom">
					<img src="<?php echo base_url(); ?>images/pic8.jpg" alt="">
				     <div class="sidebar-box">
				     	<h5>Packages</h5>
						<p>Do you want a Creative wedding, Theme wedding, Budget Wedding Plan or just the Wedding Day Coordination; we’ve got the perfect package to suit your requirements. </p>
						<p class="read-more"><a href="#" class="button">Read More</a></p>
					</div>
				</div>

				  <div class="clear"></div>
			</div>
		</div>
	</div>
