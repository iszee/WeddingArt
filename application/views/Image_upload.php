


<title>Free Brighton Website Template | Services :: w3layouts</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="js/jquery.min.js"></script>
<link type="text/css" rel="stylesheet" href="css/lightslider.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/lightslider.js"></script>
<title>Bootstrap Example</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<body>
  <div class="container">
    <h2>Upload Images</h2>
    <form class="form-horizontal" action="Image_uploader" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label class="control-label col-sm-2" for="fileToUpload">Type of service:</label>
        <div class="col-sm-10">
          <label class="radio-inline"><input type="radio" name="ServiceType" value=3>Poru and Seteebacks</label>
          <label class="radio-inline"><input type="radio" name="ServiceType" value=1>Photo/Video Albums</label>
          <label class="radio-inline"><input type="radio" name="ServiceType" value=4>Traditional Activities</label>
          <label class="radio-inline"><input type="radio" name="ServiceType" value=2>cards and cakeBoxes</label>

        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="ServiceTitle">Service Title:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="ServiceTitle" placeholder="Enter title" name="ServiceTitle" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="ServiceDescription">Service description:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="ServiceDescription" placeholder="Enter description" name="ServiceDescription" required>
        </div>
      </div>

<h3> Image Details</h3>

      <div class="form-group">
        <label class="control-label col-sm-2" for="fileToUpload">File To Upload:</label>
        <div class="col-sm-10">
          <input type="file" class="form-control" name="fileToUpload" id="fileToUpload" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="title">Title:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="description">description:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="description" placeholder="Enter description" name="description" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="tags">tags:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="tags" placeholder="Enter tags" name="tags" required>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">upload</button>
        </div>
      </div>
    </form>
  </div>

<br>
<div class="clear"></div>

</body>
