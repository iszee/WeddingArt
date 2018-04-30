<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class about extends CI_Controller {


	public function index()
	{
    $this->load->helper('url');


        if (isset($this->session->userdata['user_name'])) {
            $this->load->view('template/userheader');
        } else {
            $this->load->view('template/header');
        }

		$this->load->view('about');
		$this->load->view('middleContent');
        $this->load->view('template/footer');
	}
}
