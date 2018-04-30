<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
  // not working

	public function index()
	{
		$this->load->Model("Pictures_model_DB");
		$data=$this->Pictures_model_DB->getCurrentPicture();
		
    foreach ($data as $rec){
      echo "".$rec->picId."<br>";
    }

	}


}
