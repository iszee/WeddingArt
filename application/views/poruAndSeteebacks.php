<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Free Brighton Website Template | Gallery :: w3layouts</title>
<link href=<?php echo base_url();?>css/style.css rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- light-box -->
<script src=<?php echo base_url();?>js/jquery.min.js></script>
<script type="text/javascript" src=<?php echo base_url();?>js/jquery.fancybox.js></script>
<link rel="stylesheet" type="text/css" href=<?php echo base_url();?>css/jquery.fancybox.css media="screen" />
<script type="text/javascript">
		$(document).ready(function() {
			$('.fancybox').fancybox();
		});
	</script>
</head>
<body>

	<div class="about-top">
		<div class="wrap">
			<div class="about-box">
			   <div class="section group">
           <?php
           foreach($poruDetails as $poru){
             $url=$poru["url"];
             $title= $poru["title"];
             $description=$poru["description"];
             echo "<div class='col_1_of_4 span_1_of_4'>
                         <a class='fancybox' href=$url data-fancybox-group='gallery' title='Lorem ipsum dolor sit amet'><img src=$url alt='' style='width:100%'><span> </span></a>
                   <div class='caption'>
                                 <h4>$title</h4>
                                 <p>$description</p>
                                 <a href='#' class='btn1'>see more</a>
                             </div>
             </div>";
           }
           ?>
				<div class="clear"></div>
			</div>
		 </div>
	  </div>
	</div>
	<div class="content-middle">
		<div class="wrap">
			<div class="section group">
				<div class="container">
  <h2>Image Gallery</h2>
  <p>The .thumbnail class can be used to display an image gallery.</p>
  <p>The .caption class adds proper padding and a dark grey color to text inside thumbnails.</p>
  <p>Click on the images to enlarge them.</p>
  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/w3images/lights.jpg" target="_blank">
          <img src="/w3images/lights.jpg" alt="Lights" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/w3images/nature.jpg" target="_blank">
          <img src="/w3images/nature.jpg" alt="Nature" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/w3images/fjords.jpg" target="_blank">
          <img src="/w3images/fjords.jpg" alt="Fjords" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
		</div>
	</div>
