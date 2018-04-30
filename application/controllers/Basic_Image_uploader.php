<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Basic_Image_uploader extends CI_Controller {
  // not working

	public function index(){
    $this->load->Model("Pictures_model_DB");
		$currentPicture=$this->Pictures_model_DB->getCurrentPicture();
    $newPicId=$currentPicture[0]->picId+1;
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    $newPictureName='pic'.$newPicId.'.'.$imageFileType;

    $target_file = $target_dir . basename($newPictureName);
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

            $this->load->Model("Pictures_model_DB");
            $data=array();
            $data["title"]=$_POST["title"];
            $data["description"]=$_POST["description"];
            $data["tags"]=$_POST["tags"]." all";
            $data["url"]=$target_dir.$newPictureName;
            $this->Pictures_model_DB->insertPictue($data);
						redirect('/Basic_Upload_image');
						echo "<script type='text/javascript'>alert('picture was successfully uploaded!')</script>";

        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

	}

}
