
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


			   <div class="section group" style="margin-bottom: 100px">
					 <!-- <div class="container"> -->

           <?php

           $baseUrl=base_url('cart/addItem');

           $submitUrl="asd.php";
           foreach($serviceDetails as $service){
             $url=$service["url"];
             $title= $service["title"];
             $description=$service["description"];
               $serviceId=$service["serviceId"];
             echo "<div class='col_1_of_4 span_1_of_4' name='currentService'	>
                         <a class='fancybox' href=$url data-fancybox-group='gallery' title=$title ><img src=$url alt='' style='width:100%'><span> </span></a>
                   <div class='caption'>
                                 <h4>$title</h4>
                                 <p>$description</p>
                                 
					<form action='$baseUrl' method='post'>
                    <div>
                    <input type=\"hidden\" class=\"hidden\" value=\"$serviceId\" name=\"title\">
                    <input type=\"hidden\" class=\"hidden\" value=\"$description\" name=\"des\">
                    <input type=\"hidden\" class=\"hidden\" value=\"$url\" name=\"url\">
                    <input type=\"submit\" name=\"addCart\" class=\"btn btn-primary\" value=\"add to cart\"/>
                    </div>
                    </form>					
                             </div>
             </div>";


           }
           ?>
				<div class="clear"></div>
			</div>
</body>
</html>

