<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Tender extends CI_Controller
	{
		public function __construct()
		{
			parent:: __construct();
			$config['upload_path'] = './upload/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';

			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			$this->load->database();
			$this->load->helper('url');
			$this->load->model('tender_model');
		}

		public function file_upload()
		{
			if($this->upload->do_upload('tender_img')){

				$data = $this->upload->data();
				echo $data['file_name'];
				}else{
					echo "";
				}
		}

		function tender_insert()
		{
			if($this->input->post())
			{
				//change d formate for approve date & comletion date
				$approve_date = date("d-m-Y", strtotime($this->input->post('approve_date')));
				$completion_date = date("d-m-Y", strtotime($this->input->post('completion_date')));

				$insert = array(
							'tender_name'=>$this->input->post('tender_name'),
							'tender_area'=>$this->input->post('tender_area'),
							'street_address'=>$this->input->post('street_address'),
							'length'=>$this->input->post('length'),
							'description'=>$this->input->post('description'),
							'approve_date'=>$approve_date,
							'completion_date'=>$completion_date,
							'status_id'=>$this->input->post('status_id'),
							'tender_img'=>$this->input->post('uploaded_img'),
							'created_at'=>date('Y-m-d')
						);
				if($this->tender_model->tender_insert($insert))
				{
					echo "success";
				}
			}
			else
			{
				$this->load->view('admin/templates/header');
				$this->load->view('admin/tender/tender_insert');
				$this->load->view('admin/templates/footer');
			}
		}
		//display data in tabular form
		function display_tender()
		{
			$this->load->view('admin/templates/header');
			$result = $this->tender_model->display_tender();

			$this->load->view('admin/tender/display_tender',array('mydata'=>$result));
			$this->load->view('admin/templates/footer');
		}

		function tender_delete($id)
		{

			if($this->tender_model->tender_delete($id)){
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
			$this->load->view('admin/templates/header');
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

				if($this->tender_model->tender_update($update_array, $id))
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
				$result['tender_data'] = $this->tender_model->get_where($id);
				$this->load->view('admin/tender/tender_update',$result);
			}
			$this->load->view('admin/templates/footer');
		}
		public function image_upload()
		{
			$this->load->view('tender/tender_insert');
		}
		public function ajax_upload()
		{
			if(isset($_FILES["tender_img"]["name"]))
			{
				$config['upload_path']='./upload/';
				$config['allowed_types']='jpg|jpeg|png|gif';
				$this->load->library('upload',$config);
				if(!$this->upload->do_upload('tender_img'))
				{
					echo $this->upload->display_errors();
				}
				else
				{
					$data=$this->upload->data();
					echo '<img src="'.base_url().'upload/'.$data["file_name"].'">';
				}
			}
		}
		function tender_info()
		{
			$this->load->view('admin/templates/header');
			$result = $this->tender_model->tender_info();

			$this->load->view('admin/tender/tender_info',array('mydata'=>$result));
			$this->load->view('admin/templates/footer');
		}
		public function tender_tracker($id)
		{
			$data = $this->tender_model->tender_tracker($id);

			//$approve_date = str_replace("/","-",$data[0]->approve_date);
			$created = date("d-m-Y", strtotime($data[0]->created_at));
			date_default_timezone_set('Asia/Kolkata');
			//print_r($created);die;
			$datetime1 = new DateTime($created);
			$datetime2 = new DateTime($data[0]->approve_date);
			$difference = $datetime1->diff($datetime2);
			//total days
			$total_days = $difference->days;

			$today = date("d-m-Y");

			$datetime3 = new DateTime($today);

			$datetime4 = new DateTime($data[0]->approve_date);

			$difference1 = $datetime3->diff($datetime4);

			$remaining_days = $difference1->days;
			//print_r($difference);die;

			$round_avg = ($remaining_days/$total_days*100);

			$final_avg = round($round_avg);

			$this->load->view('admin/templates/header');
			$this->load->view('admin/tender/tender_tracker',array('mydata'=>$data,'total_average'=>$final_avg));
			$this->load->view('admin/templates/footer');
		}
	}
?>
