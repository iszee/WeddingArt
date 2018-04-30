<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pictures_model_DB extends CI_Model {



	function getData(){
		//for testing purposes
		$query=$this->db->get("service");
		return $query->result();
	}

	function getCurrentPicture(){
		$this->db->select_max('picId');
		$query=$this->db->get('picture');
		return $query->result();
	}


	function getServicePicture($serviceId){
		$this->db->where('service_serviceId',$serviceId);
		$query=$this->db->get('service_has_picture');
		return $query->result();
	}

	function getPictureByPicId($picId){
		$this->db->where('picId',$picId);
		$query=$this->db->get('picture');
		return $query->result();
	}

	function getCarouselPics(){
		$query=$this->db->get('carousel');
		$caroPics=$query->result();
		$data=array();
		foreach($caroPics as $pic){
			$picture=$this->getPictureByPicId($pic->picture_picId);
			$pictureDetails=array();
			$pictureDetails["picId"]=$picture[0]->picId;
			$pictureDetails["title"]=$picture[0]->title;
			$pictureDetails["description"]=$picture[0]->description;
			$pictureDetails["url"]=$picture[0]->url;
			array_push($data,$pictureDetails);
		}
		return $data;
	}

	function getPicsByTags($searchString){
		$keywords = explode(" ", $searchString);
		$this->db->select('*');
		$this->db->from('picture');
		foreach($keywords as $keyyword){
			$this->db->where("tags LIKE '%$keyyword%'");
		}
		$matches=$this->db->get()->result_array();
		return($matches);
	}

	function getAlbumPics($albumId){
		//not compleated
		$this->db->select('*');
		$this->db->from('albumpics');
		$this->db->join('picture', 'albumpics.picId = picture.picId');
		$this->db->where("albumId",$albumId);
		$albumDetails = $this->db->get()->result();
		return $albumDetails;
		}




	function insertPictue($data){
		foreach($data as $key => $value) {
			$this->db->set($key,$value);
		}
		$this->db->insert('picture');
	}

	function insertServicePicture($data){
		foreach($data as $key => $value) {
			$this->db->set($key,$value);
		}
		$this->db->insert('service_has_picture');
	}

	function addCarousalPictue($picId){
		$this->db->where('picture_picId',$picId);
   	$q = $this->db->get('carousel');
		if ( $q->num_rows() > 0 ) {
			echo "<script type='text/javascript'>alert('picture was already Added!')</script>";
		}

		else{
		$this->db->set("picture_picId",$picId);
		$this->db->insert('carousel');
		echo "<script type='text/javascript'>alert('picture was successfully Added!')</script>";
		}
	}

	function removeCarousalPictue($picId){
		$this->db->where('picture_picId', $picId);
   	$this->db->delete('carousel');
		echo "<script type='text/javascript'>alert('picture was successfully removed from carousel!')</script>";

	}

	function removeAlbumPictue($albumId,$picId){
		$this->db->where('picId', $picId);
		$this->db->where('albumId', $albumId);
   	$this->db->delete('albumpics');

	}

	function addAlbumPictue($albumId,$picId){
		$this->db->where('picId',$picId);
		$this->db->where('albumId',$albumId);
   	$q = $this->db->get('albumpics');
		if ( $q->num_rows() > 0 ) {
			echo "<script type='text/javascript'>alert('picture was already Added to album$albumId !')</script>";
		}

		else{
		$this->db->set("albumId",$albumId);
		$this->db->set("picId",$picId);
		$this->db->insert('albumpics');
		echo "<script type='text/javascript'>alert('picture was successfully Added to album$albumId!')</script>";
		}
		}



}
