<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
	public function __construct()
	{
		parent ::__construct();
		$this->load->model('home_model');
	}
	function index()
	{
		if($this->input->post())
			{
				$insert = array
						(
							'firstname'=>$this->input->post('firstname'),
							'lastname'=>$this->input->post('lastname'),
							'street_address'=>$this->input->post('street_address'),
							'email'=>$this->input->post('email'),
							'password'=>$this->input->post('password')
							
						);	
				//print_r($insert);die;
				if($this->home_model->index($insert))
				{
					echo "success";
				}
			}
		$data['tender'] = $this->home_model->getImages();
		$this->load->view('templates/header');
		$this->load->view('index',$data);
		$this->load->view('templates/footer');
	}
	public function login()
	{
		if($this->input->post())
		{
			$array_where = array('email'=>$this->input->post('email'),
								 'password'=>md5($this->input->post('password'))
								);
			$result = $this->home_model->get_where($array_where);
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
		else
		{
		$this->load->view('templates/header');
		$this->load->view('login');
		$this->load->view('templates/footer');
		}
	}
	
}
?>