<?php
/**
 * Created by PhpStorm.
 * User: Isuru Nanayakkara
 * Date: 27-Oct-17
 * Time: 2:07 PM
 */

class Appointment extends CI_Model
{
public function insertdata($data){
    print_r($data);
    return $this->db->insert('appointment',$data);

}
}
