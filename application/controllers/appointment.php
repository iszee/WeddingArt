<?php
/**
 * Created by PhpStorm.
 * User: Isuru Nanayakkara
 * Date: 26-Oct-17
 * Time: 9:03 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Appointment extends CI_Controller
{
public function index()
{

    $this->load->helper('url');
    $this->load->view('template/header');
    $this->load->view('appointment');
    $this->load->view('template/footer');
}
}

