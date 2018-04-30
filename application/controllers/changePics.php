<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class changePics extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('template/adminheader');
		$this->load->Model("Pictures_model_DB");
		$data=array();
		$data["curPicData"]=$this->Pictures_model_DB->getCarouselPics();
		$this->load->view('carouselPics',$data);
		if(isset($_POST["searchKeys"])){
			$searchKeys=$_POST["searchKeys"];
		}
		else{
			$searchKeys="all";
		}
		$data=array();
		$data["matches"]=$this->Pictures_model_DB->getPicsByTags($searchKeys);
		$this->load->view('imageResults',$data);
		$this->load->view('template/footer');
	}

	public function manageGallery($albumId=0)
	{
		$this->load->helper('url');
		$this->load->view('template/adminheader');
		$this->load->Model("Pictures_model_DB");
		$this->load->Model("Albums_model_DB");

		$data=array();
		$data["albumData"]=$this->Albums_model_DB->getAlbumDetails();
		$data["albumPicDetails"]=$this->Pictures_model_DB->getAlbumPics($albumId);
		$data["currentAlbum"]=$albumId;
		//print_r($data);
		$this->load->view('manageAlbums',$data);
		if(isset($_POST["searchKeys"])){
			$searchKeys=$_POST["searchKeys"];
		}
		else{
			$searchKeys="all";
		}
		$data=array();
		$data["matches"]=$this->Pictures_model_DB->getPicsByTags($searchKeys);
		$this->load->view('GalleryImageResults',$data);
		$this->load->view('template/footer');
	}


	public function addPic(){
		$this->load->helper('url');
		$this->load->Model("Pictures_model_DB");
		if(isset($_POST["addPicButton"])){
			$addedPic=$_POST["addPicButton"];
			$this->Pictures_model_DB->addCarousalPictue($addedPic);
			$this->index();
		}
	}


	public function addAlbumPic($albumId,$picId){
		if(!($albumId==0)){
		$this->load->helper('url');
		$this->load->Model("Pictures_model_DB");
		$this->Pictures_model_DB->addAlbumPictue($albumId,$picId);
		$this->manageGallery($albumId);
		}
		else{
			echo "<script type='text/javascript'>alert('select a album before you add a Picture!')</script>";
			$this->manageGallery();
		}

		}



	public function removePic(){
		$this->load->helper('url');
		$this->load->Model("Pictures_model_DB");
		if(isset($_POST["removePicButton"])){
			$addedPic=$_POST["removePicButton"];
			$this->Pictures_model_DB->removeCarousalPictue($addedPic);
			$this->index();
			echo "<script type='text/javascript'>alert('picture was successfully removed from carousel!')</script>";

		}
	}

	public function removeAlbum(){
		$this->load->helper('url');
		$this->load->Model("Albums_model_DB");
		if(isset($_POST["removeAlbumButton"])){
			$addedPic=$_POST["removeAlbumButton"];
			$this->Albums_model_DB->removeAlbum($addedPic);
			$this->manageGallery();
			echo "<script type='text/javascript'>alert('album was successfully removed from gallery!')</script>";

		}
	}

	public function removeAlbumPic($albumId,$picId){
		$this->load->helper('url');
		$this->load->Model("Pictures_model_DB");
		$this->Pictures_model_DB->removeAlbumPictue($albumId,$picId);
		$this->manageGallery($albumId);
		echo "<script type='text/javascript'>alert('picture was successfully removed from album!')</script>";


	}

	public function addAlbum(){
		if(isset($_POST["albumTitleInput"]) && isset($_POST["albumDescriptionInput"])){
			$albumTitle=$_POST["albumTitleInput"];
			$albumDesc=$_POST["albumDescriptionInput"];
			$this->load->Model("Albums_model_DB");
			$this->Albums_model_DB->addAlbum($albumTitle,$albumDesc);
			$this->manageGallery();
			echo "<script type='text/javascript'>alert('album added successfully !')</script>";

		}
		else{
			echo "<script type='text/javascript'>alert('fill All field before add album !')</script>";
			$this->manageGallery();
		}

		}




}
