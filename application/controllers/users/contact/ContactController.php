<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactController extends CI_Controller 
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
		$this->data['page_title']='Contact';
		$this->data['subview']='contact/contact';
		$this->data['icon']=$this->CommonModel->RetriveRecordByWhereRow('tbl_logo',['status' => 'Active','name'=>'Icons']); 
		$this->data['logo']=$this->CommonModel->RetriveRecordByWhereRow('tbl_logo',['status' => 'Active','name'=>'Logo']);
		$this->db->where('status','Active');
		$this->db->order_by('id','desc');
		$contact = $this->db->get('tbl_footercontact')->row();
		$this->data['contact_data']=$contact;
		$this->db->where('status','Active');
		$this->db->where('banner_type','Contact');
		$this->db->order_by('id','desc');
		$banner_row = $this->db->get('tbl_banner')->row();
		$this->data['banner_row']=$banner_row;		
		$this->load->view('users/layout/default', $this->data);
	}
	public function contact_add()
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
		'website' => $website,
		'massage' => $massage,
		'status' => "Inactive",
		'create_date' => date('Y-m-d H:i:s'),
		);

		$insertid = $this->CommonModel->insert($data,"tbl_query");
		if($insertid)
		{
			$this->session->set_flashdata('success', 'Contact added successfully.');
			redirect('contact');
		}
		else
		{
			$this->session->set_flashdata('error', ' Contact added unsuccessfully.');
			redirect('contact');
		}

	}
	


}
