<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Model{
    public function insertdata(){
        $data=array(
            'username'=>$this->input->post('name',True),
            'email'=>$this->input->post('email',True),
            'password'=>md5($this->input->post('password',True)),
            'phoneNumber'=>$this->input->post('phone',True),
            'type'=>'0'
        );
        return $this->db->insert('user',$data);

    }

}