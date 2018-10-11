<?php 
	class Admin_model extends CI_Model
	{
		//Log In
		function get_where($array_where)
		{
			$result = $this->db->get_where('tbl_admin',$array_where);
			return $result->result();
		}
		
		//insert all values into database
		/*  function insert_data($insert)
		{
			if($this->db->insert('tbl_tender', $insert))
			{
				return true;
			}
			else
			{
				return false;
			}
		} */
		//get all data to display
		/* function display_tender()
		{
			$result = $this->db->get('tbl_tender');
			return $result->result();
		} */
		//deleter record from database
		/* function tender_delete($id)
		{
			$this->db->where('tender_id',$id);
			
			if($this->db->delete('tbl_tender'))
			{
				return true;
			}else{
				return false;
			}
		}	 */
	/* 	//get data where
		public function get_where($id)
		{
			return $this->db->where('tender_id',$id)->get('tbl_tender')->result();
		} */
		
		//update data in where
		/*  public function tender_update($update_array, $id)
		{
			 $this->db->where('tender_id',$id);
			 if($this->db->update('tbl_tender',$update_array))
			 {
				 return true;
			 }else{
				 return false;
			 }
		}   */
	}
?>