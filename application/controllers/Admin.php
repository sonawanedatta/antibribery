<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Admin extends CI_Controller
	{
		public function __construct()
		{
			parent:: __construct();
			$this->load->model('admin_model');
		}
		public function index()
		{
			if($this->input->post())
			{
				$array_where = array('email'=>$this->input->post('email'),
									 'password'=>md5($this->input->post('password'))
									);
				$result = $this->admin_model->get_where($array_where);
				if(count($result) > 0)
				{
					$this->session->set_userdata('admin_data',$result);
					redirect(base_url('admin/dashboard'));
				}
				else
				{
					$this->session->set_flashdata('error','Invalid Username or password');
				}
			}
			$this->load->view('admin/index');
		}
		public function dashboard()
		{
			$this->load->view('admin/templates/header');
			$this->load->view('admin/dashboard');
			$this->load->view('admin/templates/footer');
		}
		public function logout()
		{
			$this->load->library('session');

			$data = $this->session->userdata('admin_data');
			$id = $data[0]->admin_id;
			if($id !='')
			{
				$this->session->unset_userdata('admin_data');
				redirect(base_url('admin'));
			}else{
				redirect(base_url(''));
			}
		}
		/* function tender_insert()
		{
			if($this->input->post()){
			$insert = array
						(
							'tender_name'=>$this->input->post('tender_name'),
							'tender_area'=>$this->input->post('tender_area'),
							'street_address'=>$this->input->post('street_address'),
							'length'=>$this->input->post('length'),
							'description'=>$this->input->post('description'),
							'approve_date'=>$this->input->post('approve_date'),
							'completion_date'=>$this->input->post('completion_date'),
							'tender_status'=>$this->input->post('tender_status')
						);				
				if($this->admin_model->insert_data($insert))
				{
					echo "successfully inserted";
				}else{
					echo "failed..";
				}
			}
			$this->load->view('admin/templates/header');
			$this->load->view('admin/tender_insert');
			$this->load->view('admin/templates/footer');
		}
		//display data in tabular form
		function display_tender()
		{
			$this->load->view('admin/templates/header');
			$result = $this->admin_model->display_tender();
			
			$this->load->view('admin/display_tender',array('mydata'=>$result));
			$this->load->view('admin/templates/footer');
		}
		
		function tender_delete($id)
		{
		
			if($this->admin_model->tender_delete($id)){
				//create session 
				//$this->session->set_flashdata('success','successfully deleted');
				redirect(base_url('admin/display_tender'));
			}else{
				echo "failed";
				redirect(base_url('admin/display_tender'));
			}
		}
		
		public function tender_update()
		{
			$id = $this->uri->segment(3);

			if($this->input->post())
			{
				$update_array = array
						(
							'tender_name'=>$this->input->post('tender_name'),
							'tender_area'=>$this->input->post('tender_area'),
							'street_address'=>$this->input->post('street_address'),
							'length'=>$this->input->post('length'),
							'description'=>$this->input->post('description'),
							'approve_date'=>$this->input->post('approve_date'),
							'completion_date'=>$this->input->post('completion_date'),
							'tender_status'=>$this->input->post('tender_status')
						);
				
				if($this->admin_model->tender_update($update_array, $id))
				{
					echo "success";
					//redirect(base_url('admin/display_tender'));
				}
				else
				{
					//redirect(base_url('admin/display_tender'.$id));
				}
			}
			else
			{
				$result['tender_data'] = $this->admin_model->get_where($id);
				$this->load->view('admin/tender_update',$result);
			}		
		} */
	}
?>