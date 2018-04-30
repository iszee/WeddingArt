<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service_model_DB extends CI_Model {



	function getData(){
		//for testing purposes
		$query=$this->db->get("service");
		return $query->result();
	}

	function getServiceByType($type){
		$this->db->where('type',$type);
		$query=$this->db->get('service');
		return $query->result();
	}

	function insertPictue($data){
		foreach($data as $key => $value) {
			$this->db->set($key,$value);
		}
		$this->db->insert('picture');
	}

	function addService($data){
		foreach($data as $key => $value) {
			$this->db->set($key,$value);
		}
		$this->db->insert('service');
	}

	function getServiceDetails($i){
		$this->load->helper('url');
		$baseUrl=base_url();
		$this->load->Model("Service_model_DB");
		$this->load->Model("Pictures_model_DB");
		$data=array();
		$services=$this->Service_model_DB->getServiceByType($i);

		foreach ($services as $row){

			$serviceId=$row->serviceId;
			$title=$row->title;
			$description=$row->description;
			$ServicePics=$this->Pictures_model_DB->getServicePicture($serviceId);

			foreach ($ServicePics as $roww){
				$picId=$roww->picture_picId;
				$pic=$this->Pictures_model_DB->getPictureByPicId($picId)[0];
				$url=$pic->url;
				$serviceDetails=array("url"=>$baseUrl.$url,"title"=>$title,"description"=>$description,"serviceId"=>$serviceId);
				array_push($data,$serviceDetails);
			}
		}
		return $data;
	}

	function getPoruSetteebackDetail(){
		  return $this->getServiceDetails(3);
	}

	function getAlbumDetail(){
		  return $this->getServiceDetails(1);
	}

	function getCardBoxDetail(){
		  return $this->getServiceDetails(2);
	}

	function getPerformerDetail(){
		  return $this->getServiceDetails(4);
	}

	function getCurrentService(){
		$this->db->select_max('serviceId');
		$query=$this->db->get('service');
		$query->result();
		return $query->result();

	}




}
