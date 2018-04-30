<?php

class model_appoinment extends CI_Model
{
    public function getdata(){

        // $status['0'] = "SELECT * FROM appointment WHERE status='0'";
        // $status['1'] = "SELECT * FROM appointment WHERE status='1'";
        $this->db->select('*');
		$this->db->from('appointment');
		//$this->db->where('status',1);
        
        
        $result=$this->db->get()->result_array();

        return $result;

    }

    public function changestatus($selectedApp){
    	// $data=array(
    	// 		'status'=>1
    	// 	);
    	$this->db->where('appoint_id',$selectedApp);
    	$this->db->update('appointment', array('status' => 1));
    }
}