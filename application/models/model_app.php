<?php
/**
 * Created by PhpStorm.
 * User: Isuru Nanayakkara
 * Date: 17-Dec-17
 * Time: 3:22 AM
 */

class Model_app extends CI_Model
{
    public function insertdata(){
        $data=array(
            'username'=>$this->session->userdata('user_name'),
            'name'=>$this->input->post('userName',True),
            'date'=>$this->input->post('appDate',True),
            'email'=>$this->input->post('userEmail',True),
            'mobile'=>$this->input->post('userPhone',True)
        );
        return $this->db->insert('appointment',$data);

    }
}