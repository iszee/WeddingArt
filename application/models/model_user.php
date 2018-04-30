<?php
/**
 * Created by PhpStorm.
 * User: Isuru Nanayakkara
 * Date: 17-Dec-17
 * Time: 1:01 AM
 */

class Model_user extends CI_Model
{
    function LoginUser()
    {
        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));
        $sql = "SELECT * FROM user WHERE email='$email' and password='$password'";
        $respond = $this->db->query($sql);


        if ($respond->num_rows() == 1) {
            return $respond->row(0);

        }
        else{
            return false;
        }
    }
}