<?php
/**
 * Created by PhpStorm.
 * User: Isuru Nanayakkara
 * Date: 17-Dec-17
 * Time: 8:03 PM
 */

class Cart extends  CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->library('cart');
        //$this->load->model('user');
    }

    public function addItem()
    {
        if (!(isset($this->session->userdata['user_name']))) {
            $this->load->view('template/header');
            $this->load->view('login');
            $this->load->view('template/footer');
        } else {
            $flg = 0;
            if ($cart = $this->cart->contents()) {
                foreach ($cart as $item) {
                    if ($item['id'] == $this->input->post('title')) {
                        $flg = 1;
                        echo '<script> alert("Item Already Added to the Cart!"); </script>';
                        break;
                    }
                }
            }

            if ($flg == 0) {
                $items = $this->session->userdata['cartItems'];
                $items = $items + 1;
                $this->session->userdata['cartItems'] = $items;
                $this->session->set_flashdata('cart_suc', 'Added to Cart');
                //$item_id=$this->session->userdata['itemId'];

                $insert_data = array(
                    'id' => $this->input->post('title'),
                    'qty' => 1,
                    'price' => 0,
                    'name' => $this->input->post('des'),
                    'username'=>$this->session->userdata['user_name']
                );


                // This function add items into cart.
                $this->cart->insert($insert_data);
                echo '<script> alert("Item Added to the Cart!"); </script>';

            }

            $this->load->view('template/userheader');
            $this->load->view('services');
            $this->load->view('template/footer');
        }
    }


    public function showItems(){
        $this->load->view('template/userheader');
        $this->load->view('cart');
        $this->load->view('template/footer');


    }

    public function checkOut(){
        $this->load->view('template/userheader');
        $this->load->view('contact');
        $this->load->view('template/footer');
        echo '<script> alert("Please Fill the Appointment Form!"); </script>';


    }
    public function realCheckOutSub(){
        $cart = $this->cart->contents();
        $this->load->model('model_cart');
        $result=$this->model_cart->checkOut($cart);
        if($result){
            $this->session->set_flashdata('cart_suc','cart submission successfull');
        }
    }


    function removeItem($rowid) {
        //$rowid=$this->input->post('delete');
        if ($rowid==="all"){
            $this->cart->destroy();
        }else{
            $data = array(
                'rowid' => $rowid,
                'qty' => 0
            );
            $this->cart->update($data);
            $items = $this->session->userdata['cartItems'];
            if($items>0) {
                $items = $items - 1;
            }
            $this->session->userdata['cartItems'] = $items;
        }
        $this->load->view('template/userheader');
        $this->load->view('cart');
        $this->load->view('template/footer');
        echo '<script> alert("Item Removing From the Cart!"); </script>';
    }
}