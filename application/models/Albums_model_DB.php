<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Albums_model_DB extends CI_Model {

	function getAlbumDetails(){
		$query=$this->db->get("albums");
		return $query->result();
	}

	function removeAlbum($albumId){
		$this->db->where('albumId', $albumId);
		$this->db->delete('albums');
	}

	function addAlbum($albumTitle,$albumDesc){
		$this->db->set("title",$albumTitle);
		$this->db->set("description",$albumDesc);
		$this->db->insert('albums');

	}
	function getGalleryAlbums(){
		$query=$this->db->get("albums");
		$results=$query->result();
		$data=array();
		foreach ($results as $album){
			$albumId=$album->albumId;
			$albumTitle=$album->title;
			$albumDesc=$album->description;
			$this->db->where("albumId",$albumId);
			$query=$this->db->get("albumpics");
			$results1=$query->result();
			$albumPic=$results1[0]->picId;
			$AlbumDetails=array();
			$AlbumDetails["picUrl"]="uploads/pic".$albumPic;
			$AlbumDetails["albumId"]=$albumId;
			$AlbumDetails["albumTitle"]=$albumTitle;
			$AlbumDetails["albumDesc"]=$albumDesc;
			array_push($data,$AlbumDetails);
		}
		return $data;
	}


}
