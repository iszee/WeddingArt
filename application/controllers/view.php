<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class view extends CI_Controller {

  public function index($page)

  {
        $this->load->view($page.".html");
  }
}
