<?php

class admin_Appoinment extends CI_Controller
{
    public function index()
    {
    	$this->load->helper('url');
        $this->load->view('template/adminheader');

    	$this->load->model('model_appoinment');
    	$data['state']= $this->model_appoinment->getdata();
    	// $data['state']=null;
    	// if($result){
    	// 	$data['state']=$result;
    	// }

        //var_dump($data);
        $this->load->view('adminappoinment',$data);
        $this->load->view('template/footer');

    }

    public function updatestatus(){

    	//$this->load->model('model_appoinment',$para);
    	$this->load->helper('url');
        $this->load->Model("model_appoinment");
        if(isset($_POST["updatestatus"])){
            $selectedApp=$_POST["updatestatus"];
            $this->model_appoinment->changestatus($selectedApp);
            $this->index();
        }
    }
}