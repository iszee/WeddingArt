<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class contact extends CI_Controller {


	public function index()
	{
    $this->load->helper('url');
        if(isset($this->session->userdata['user_name'])){
            $this->load->view('template/userheader');
        }
        else{
            $this->load->view('template/header');
        }
    $this->load->view('contact');
    $this->load->view('template/footer');

	}


    public function submitContact(){
            $data=array();
            $appData=array();

            $this->form_validation->set_rules('userName','Name','required');
            $this->form_validation->set_rules('userEmail', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('userPhone','Contact Number','required|numeric|min_length[9]|max_length[12]');
            $this->form_validation->set_rules('appDate','Appointment Date','required');



        if (isset($this->session->userdata['user_name'])){
                $appData = array(
                    'userName' => strip_tags($this->input->post('userName')),
                    'userEmail' => strip_tags($this->input->post('userEmail')),
                    'userPhone' => strip_tags($this->input->post('userPhone')),
                    'userNotee' => strip_tags($this->input->post('userNotee')),
                    'username'=>$this->session->userdata['user_name']
                );

            }
            else{
                $appData = array(
                    'userName' => strip_tags($this->input->post('userName')),
                    'userEmail' => strip_tags($this->input->post('userEmail')),
                    'userPhone' => strip_tags($this->input->post('userPhone')),
                    'userNotee' => strip_tags($this->input->post('userNotee'))
                );
            }


        $data['app']=$appData;

            if($this->form_validation->run()==FALSE){

                if(isset($this->session->userdata['user_name'])){
                    $this->load->view('template/userheader');
                }
                else{
                    $this->load->view('template/header');
                }
                $this->load->view('contact',$data);
                $this->load->view('template/footer');
            }else{
                $this->load->model('model_app');
                $result=$this->model_app->insertdata();
                $this->session->set_flashdata('app_suc','Appointment placed Successfully');
                //alert("Appointment Placed");



                $cart = $this->cart->contents();
                $this->load->model('model_cart');
                $result=$this->model_cart->checkOut($cart);
                if($result){
                    $this->session->set_flashdata('cart_suc','cart submission successfull');
                }



                $this->session->userdata['cartItems']=0;
                $this->cart->destroy();
                if(isset($this->session->userdata['user_name'])){
                    $this->load->view('template/userheader');
                }
                else{
                    $this->load->view('template/header');
                }
                $this->load->view('contact');
                $this->load->view('template/footer');

            }


    }

    public function dateVali(){
        $appDate=$this->input->post('appdate');
        $nowdate=date("Y-m-d");
        if($nowdate>$appDate){
            $this->form_validation->set_message('appDate', 'Appointment date cant be in past');
            return False;

        }
        else
            return True;


    }
}
