<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload_image extends CI_Controller {
  // not working

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('template/adminheader');
		//$this->load->view('services');
		$this->load->view('Image_upload.php');
		$this->load->view('middleContent.php');
		$this->load->view('template/footer');


	}

}
