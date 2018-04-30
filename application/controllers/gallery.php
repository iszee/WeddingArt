<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class gallery extends CI_Controller {
  // not working

	public function index()
	{
		$this->load->helper('url');

		$data=array();
		$this->load->Model("Albums_model_DB");
		$data["albums"]=$this->Albums_model_DB->getGalleryAlbums();
    $this->load->view('template/header');
		$this->load->view('gallery',$data);
		$this->load->view('middleContent');
		$this->load->view('template/footer');

	}

public function seeAlbum($albumId)
{
	$this->load->helper('url');
	$data=array();
	$this->load->Model("Pictures_model_DB");
	$data["pics"]=$this->Pictures_model_DB->getAlbumPics($albumId);
	$this->load->view('template/header');
	$this->load->view('galleryPics',$data);
	$this->load->view('middleContent');
	$this->load->view('template/footer');

}
}
