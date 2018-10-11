<?php

class Home_model extends CI_Model
{
	//Log In
	function get_where($array_where)
	{
		$result = $this->db->get_where('tbl_user',$array_where);
		return $result->result();
	}
	function index($insert)
	{
		if($this->db->insert('tbl_users', $insert))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function getImages()
	{
		$this->db->select("tender_name,street_address,description,status_id,tender_img");
		$this->db->from('tbl_tender');
		$query = $this->db->get();
		return $query->result();
	}
}
?>