<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div container>
	<div class="container col-md-5 col-md-offset-1">
  <h2>Manage Albums</h2>
  <p>here you can add albums as well as images to albums. </p>
  <table class="table">
    <thead>
      <tr>
        <th>AlbumId</th>
        <th>Title</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
		<?php
    $baseUrl=base_url();
		foreach($albumData as $album){
			$albumId=$album->albumId;
			$title=$album->title;
			$description=$album->description;
      $removeAlbum=$baseUrl."changePics/removeAlbum";
      $editAlbum=$baseUrl."changePics/manageGallery/$albumId";
      echo "<tr>
        			<td>$albumId</td>
        			<td>$title</td>
        			<td>$description</td>
              <td><form action='$removeAlbum' method='post'>
              <button type='submit' name='removeAlbumButton' value='$albumId' class='btn btn-danger'>remove</button>
              </form>
              </td>
              <td><form action='$editAlbum' method='post'>
              <button type='submit' name='editAlbumButton' value='$albumId' class='btn btn-info'>edit</button>
              </form>
              </td>
      			</tr>";
			}
			?>
    </tbody>
  </table>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div>
  <form action='<?php echo base_url();?>changePics/addAlbum' method='post'>
    <div class=col-md-4 >
    <strong>title</Strong>
    <input type="text" class="form-control" id="tags" placeholder="Enter Title" name="albumTitleInput" required>
    <br>
    </div>

    <div class=col-md-8>
    <strong>desccription</strong>
    <input type="text" class="form-control" id="tags" placeholder="Enter Description" name="albumDescriptionInput" required>
    <br>
    </div>
    <div class=" col-md-offset-9">
    <button  type='submit' name='removePicButton' class='btn btn-success'>Add Album</button>
  </div>

  </form>
</div>
</div>

<!-- add remove photos to album -->

<div class="container col-md-4 col-md-offset-1">
<h2>Manage album<?php echo "$currentAlbum";?> Pic</h2>
<p>here you can manage images of albums. </p>
<table class="table">
  <thead>
    <tr>
      <th>PicId</th>
      <th>Title</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $baseUrl=base_url();
  foreach($albumPicDetails as $pic){
    $picId=$pic->picId;
    $picTitle=$pic->title;
    $picDescription=$pic->description;
    $removePic=$baseUrl."changePics/removeAlbumPic/$currentAlbum/$picId";
    echo "<tr>
            <td>$picId</td>
            <td>$picTitle</td>
            <td>$picDescription</td>
            <td><form action='$removePic' method='post'>
            <button type='submit' name='removeAlbumButton' value='$picId' class='btn btn-danger'>remove</button>
            </form>
            </td>

          </tr>";
    }
    ?>
  </tbody>
</table>
<br>

  <a href=<?php echo base_url();?>Basic_Upload_image>
    <button  type='button' name='removePicButton' class='btn btn-success '>Upload Images </button>
  </a>
</div>
</div>
