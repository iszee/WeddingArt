<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Wedding Art | Gallery</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- light-box -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src=<?php echo base_url();?>js/jquery.min.js></script>
<script type="text/javascript" src=<?php echo base_url();?>js/jquery.fancybox.js></script>
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
<script type="text/javascript">
		$(document).ready(function() {
			$('.fancybox').fancybox();
		});
	</script>
</head>
<body>

<div class="container col-md-10 col-md-offset-1 " >
   <?php
   $baseUrl=base_url();
   foreach($albums as $album){
     $picTitle=$album["albumTitle"];
     $picId=$album["albumId"];
     $picUrl=$baseUrl.$album["picUrl"];
     $picDes=$album["albumDesc"];
     $viewUrl=$baseUrl."gallery/seeAlbum/$picId";

     echo "
       <div class='col-md-4	' id='id$picId'>
         <div class='thumbnail'>
           <a href=$viewUrl >
             <img src=$picUrl alt='Lights' style='width:100% hight; height:250px;'>
             <div class='caption'>
               <h4>$picTitle</h4>
               <p>$picDes</p>
             </div>
						 see more
           </a>
         </div>

       </div>"
     ;
   }
   ?>
   </div>
