<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class services extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
        if(isset($this->session->userdata['user_name'])){
            $this->load->view('template/userheader');
        }
        else{
            $this->load->view('template/header');
        }
		$this->load->view('services');
		//$this->load->view('selectedService.php');
		$this->load->view('template/footer');
	}


	public function dancingAndPerformances()
	{
		$this->load->helper('url');
		$baseUrl=base_url();
		$this->load->Model("Service_model_DB");
		$serviceDetails=$this->Service_model_DB->getPerformerDetail();
		$data["serviceDetails"]=$serviceDetails;
		$this->load->helper('url');
        if (isset($this->session->userdata['user_name'])) {
            $this->load->view('template/userheader');
        } else {
            $this->load->view('template/header');
        }
		$this->load->view('services');
		$this->load->view('service',$data);
		$this->load->view('template/footer');
	}

	public function poruAndSeteebacks()
	{
		$this->load->helper('url');
		$baseUrl=base_url();
		$this->load->Model("Service_model_DB");
		$serviceDetails=$this->Service_model_DB->getPoruSetteebackDetail();
		$data["serviceDetails"]=$serviceDetails;
		$this->load->helper('url');
        if (isset($this->session->userdata['user_name'])) {
            $this->load->view('template/userheader');
        } else {
            $this->load->view('template/header');
        }
		$this->load->view('services');
		$this->load->view('service',$data);
		$this->load->view('template/footer');

	}


	public function cardsAndCakeBoxes()
	{
		$this->load->helper('url');
		$baseUrl=base_url();
		$this->load->Model("Service_model_DB");
		$serviceDetails=$this->Service_model_DB->getCardBoxDetail();
		$data["serviceDetails"]=$serviceDetails;
		$this->load->helper('url');
        if (isset($this->session->userdata['user_name'])) {
            $this->load->view('template/userheader');
        } else {
            $this->load->view('template/header');
        }
		$this->load->view('services');
		$this->load->view('service',$data);
		$this->load->view('template/footer');

	}

	public function photoAndVideoAlbums()
	{
		$this->load->helper('url');
		$baseUrl=base_url();
		$this->load->Model("Service_model_DB");
		$serviceDetails=$this->Service_model_DB->getAlbumDetail();
		$data["serviceDetails"]=$serviceDetails;
		$this->load->helper('url');
        if (isset($this->session->userdata['user_name'])) {
            $this->load->view('template/userheader');
        } else {
            $this->load->view('template/header');
        }
		$this->load->view('services');
		$this->load->view('service',$data);
		$this->load->view('template/footer');

	}


		public function exp()
		{
			$this->load->helper('url');
			$this->load->view('experimental');


		}



}
