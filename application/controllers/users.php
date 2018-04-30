<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * User Management class created by CodexWorld
 */
class Users extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('user');
    }

    /*
     * User account information
     */
    public function account(){
        $data = array();
        if($this->session->userdata('isUserLoggedIn')){
            $data['user'] = $this->user->getRows(array('username'=>$this->session->userdata('userId')));
            //load the view
            $this->load->view('users/account', $data);
        }else{
            redirect('users/login');
        }
    }

    /*
     * User login
     */
    public function login(){
//        $data = array();
//        if($this->session->userdata('success_msg')){
//            $data['success_msg'] = $this->session->userdata('success_msg');
//            $this->session->unset_userdata('success_msg');
//        }
//        if($this->session->userdata('error_msg')){
//            $data['error_msg'] = $this->session->userdata('error_msg');
//            $this->session->unset_userdata('error_msg');
//        }
//        if($this->input->post('loginSubmit')){
//            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
//            $this->form_validation->set_rules('password', 'password', 'required');
//            if ($this->form_validation->run() == true) {
//                $con['returnType'] = 'single';
//                $con['conditions'] = array(
//                    'email'=>$this->input->post('email'),
//                    'password' => $this->input->post('password'),
//
//                );
//                $checkLogin = $this->user->getRows($con);
//                if($checkLogin){
//                    $this->session->set_userdata('isUserLoggedIn',TRUE);
//                    $this->session->set_userdata('username',$checkLogin['id']);
//                    //$data['success_msg'] = 'Successfully Logged as Admin';
//                    $this->load->helper('url');
//
//                   redirect('adminH');
//                   //   $this->load->view('template/adminheader');
//                }else{
//                    $data['error_msg'] = 'Wrong email or password, please try again.';
//                }
//            }
//        }
//        //load the view

        $data=array();
        $login=array();
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        $login = array(
            'email' => strip_tags($this->input->post('email')),
            'password' => md5($this->input->post('password'))


        );
        $data['login']=$login;

        if ($this->form_validation->run() == False) {
            $this->session->set_flashdata('errmsg','Please check and re enter email and password');
            $this->load->view('template/header');
            $this->load->view('login',$data);
            $this->load->view('template/footer');

        }
        else{

            $this->load->model('model_user');
            $result = $this->model_user->LoginUser();


            if ($result != false) {
                $user_data = array(
                    'user_name' =>$result->username ,
                    'loggedin' => TRUE,
                    'cartItems' =>0,
                    'itemId'=>null
                );

                //$this->session_start();
                $this->session->set_userdata($user_data);
                $this->session->set_flashdata('welcome');
                if ($result->type==0) {
                    //var_dump($result);
                    redirect('home/user');


                }
                else if ($result->type!=0){
                    redirect('home/admin');
                }


            }
            else{
                $this->session->set_flashdata('login_err','Username or Password incorrect');
                $this->load->view('template/header');
                $this->load->view('login',$data);
                $this->load->view('template/footer');
            }
            //var_dump($result);
        }
        }


    /*
     * User registration
     */
    public function registration()
    {
        $data = array();
        $userData = array();

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('phone','Contact Number','required|numeric|min_length[9]|max_length[12]');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('conf_password', 'confirm password', 'required|matches[password]');

        $userData = array(
            'name' => strip_tags($this->input->post('name')),
            'email' => strip_tags($this->input->post('email')),
            'password' => md5($this->input->post('password')),
            'gender' => $this->input->post('gender'),
            'phone' => strip_tags($this->input->post('phone'))
        );

        $data['user'] = $userData;

        if ($this->form_validation->run() == FALSE) {

            if (isset($this->session->userdata['user_name'])) {
                $this->load->view('template/userheader');
            } else {
                $this->load->view('template/header');
            }
            $this->load->view('reg', $data);
            $this->load->view('template/footer');
        } else {
            $this->load->model('user');
            $result = $this->user->insertdata();
            $this->session->set_flashdata('user_reg_suc','Registration Success. Please Login');
            //alert("Appointment Placed");
            if (isset($this->session->userdata['user_name'])) {
                $this->load->view('template/userheader');
            } else {
                $this->load->view('template/header');
            }
            $this->load->view('login');
            $this->load->view('template/footer');

        }
    }



    /*
     * User logout
     */
    public function logout(){
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('loggedin');
        $this->session->sess_destroy();
        $this->cart->destroy();
        $this->load->view('template/header');
        $this->load->view('login');
        $this->load->view('template/footer');
    }

    /*
     * Existing email check during validation
     */
    public function email_check($str){
        $con['returnType'] = 'count';
        $con['conditions'] = array('email'=>$str);
        $checkEmail = $this->user->getRows($con);
        if($checkEmail > 0){
            $this->form_validation->set_message('email_check', 'The given email already exists.');
            return FALSE;
        } else {
            return TRUE;
        }
    }
}