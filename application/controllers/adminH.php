<?php
/**
 * Created by PhpStorm.
 * User: Isuru Nanayakkara
 * Date: 27-Oct-17
 * Time: 2:03 PM
 */

class AdminH extends CI_Controller
{
    public function index()
    {
        $this->load->helper('url');
        $this->load->view('template/adminheader');
        //$this->load->view('home');
        $this->load->view('template/footer');

    }
}