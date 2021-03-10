<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class TestimonialsController extends CI_Controller 
{
	function __construct() 
	{

	  	parent::__construct(); 		
		$this->load->helper(array('common_helper', 'string', 'form', 'security', 'text'));		
		$this->load->model('CommonModel');	
		date_default_timezone_set('Asia/Kolkata');
	} 
	public function index()
	{		 
		$this->data['page_title']='Testimonials';
		$this->data['subview']='testimonials/testimonials';
		$this->data['icon']=$this->CommonModel->RetriveRecordByWhereRow('tbl_logo',['status' => 'Active','name'=>'Icons']); 
		$this->data['logo']=$this->CommonModel->RetriveRecordByWhereRow('tbl_logo',['status' => 'Active','name'=>'Logo']);
		$this->data['testimonials_data'] = $this->CommonModel->RetriveRecordByWhereOrderby('tbl_testimonials',['status' => 'Active'],'id' ,'desc');
		$this->db->where('status','Active');
		$this->db->order_by('id','desc');
		$contact = $this->db->get('tbl_footercontact')->row();
		$this->data['contact_data']=$contact;
		$this->db->where('status','Active');
		$this->db->where('banner_type','Testimonials');
		$this->db->order_by('id','desc');
		$banner_row = $this->db->get('tbl_banner')->row();
		$this->data['banner_row']=$banner_row;
		$this->load->view('users/layout/default', $this->data);
	}
	public function testimonials_add()
	{
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$website = $this->input->post('subject');
		$massage = $this->input->post('subject');
		
		$data=array(
		'uniqcode' => random_string('alnum',20),
		'name' => $name,
		'email' => $email,
		'moblie_no' => $phone,
		'image' => 'testimonials.png',
		'position' => $website,
		'description' => $massage,
		'status' => "Inactive",
		'create_date' => date('Y-m-d H:i:s'),
		);

		$insertid = $this->CommonModel->insert($data,"tbl_testimonials");
		if($insertid)
		{
			$this->session->set_flashdata('success', 'Testimonials added successfully.');
			redirect('testimonials');
		}
		else
		{
			$this->session->set_flashdata('error', ' Testimonials added unsuccessfully.');
			redirect('testimonials');
		}

	}
	


}
