<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 <!DOCTYPE html>
 <html>
 <head>
 <style>
 input[type=text] {
     width: 130px;
     box-sizing: border-box;
     border: 2px solid #ccc;
     border-radius: 4px;
     font-size: 16px;
     background-color: white;
     background-image: url('searchicon.png');
     background-position: 10px 10px;
     background-repeat: no-repeat;
     padding: 12px 20px 12px 40px;
     -webkit-transition: width 0.4s ease-in-out;
     transition: width 0.4s ease-in-out;
 }

 input[type=text]:focus {
     width: 100%;
 }
 </style>
 </head>
 <body>
<div class="container col-md-10 col-md-offset-1">
  <h3> search images here to add to albums  </h3>
 <form action="<?php echo base_url();?>changePics/manageGallery/<?php echo "$currentAlbum";?>" method="post"  >
   <br>
   <input type="text" name="searchKeys" placeholder="search....">
   <input type="submit" style="visibility: hidden;" />

 </form>
 <br>
 <br>
 </div>

 </body>
 </html>




 <div class="container col-md-10 col-md-offset-1">
  <h4>Image results..</h4>
  <br>

  <?php
  $baseUrl=base_url();
  foreach($matches as $pics){
    $picTitle=$pics["title"];
    $picId=$pics["picId"];
    $picUrl=$baseUrl.$pics["url"];
    $picDes=$pics["description"];
    $picId=$pics["picId"];
    $submitUrl=$baseUrl."changePics/addAlbumPic/$currentAlbum/$picId";

    echo "
      <div class='col-md-4' id='id$picId'>
        <div class='thumbnail'>
          <a href=$picUrl target='_blank'>
            <img src=$picUrl alt='Lights' style='width:100% hight; height:250px;'>
            <div class='caption'>
              <h4>$picTitle</h4>
              <p>$picDes</p>
            </div>


          </a>
          <form action='$submitUrl' method='post'>
          <button type='submit' name='addPicButton' value='$picId' class='btn btn-primary'>add</button>
          </form>
        </div>

      </div>"
    ;
  }
  ?>
  </div>
