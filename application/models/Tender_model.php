<?php 
	class Tender_model extends CI_Model
	{
		function tender_insert($insert)
		{
			if($this->db->insert('tbl_tender', $insert))
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		
		//get all data to display
		function display_tender()
		{
			$this->db->select('tbl_status.status_name,tbl_tender.*');
			$this->db->join('tbl_status',' tbl_tender.status_id=tbl_status.status_id');
			$result = $this->db->get('tbl_tender');
			return $result->result();
		}
		
		//delete record from database
		function tender_delete($id)
		{
			$this->db->where('tender_id',$id);
			
			if($this->db->delete('tbl_tender'))
			{
				return true;
			}
			else
			{
				return false;
			}
		}	
		
		//get data where
		public function get_where($id)
		{
			return $this->db->where('tender_id',$id)->get('tbl_tender')->result();
		} 
		
		//update data in where
		public function tender_update($update_array, $id)
		{
			$this->db->where('tender_id',$id);
			if($this->db->update('tbl_tender',$update_array))
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		
		//get the status name from tbl_status
		public function get_status()
		{
			$result = $this->db->get('tbl_status')->result();
			return $result;
		}
		
		//get all data to display
		function tender_info()
		{
			$this->db->select('tbl_status.status_name,tbl_tender.*');
			$this->db->join('tbl_status',' tbl_tender.status_id=tbl_status.status_id');
			$result = $this->db->get('tbl_tender');
			return $result->result();
		}
		
		// data in where
		public function tender_tracker($id)
		{
			$this->db->select('tbl_status.status_name,tbl_tender.*');
			$this->db->join('tbl_status',' tbl_tender.status_id=tbl_status.status_id');
			
			$this->db->where('tbl_tender.tender_id', $id);  // Also mention table name here
			$query = $this->db->get('tbl_tender');    
			return $query->result();
		}
	}
?>