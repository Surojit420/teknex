<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactController extends CI_Controller 
{
	function __construct()
	{
	  	parent::__construct(); 		
		$this->load->helper(array('common_helper', 'string', 'form', 'security', 'text'));		
		$this->load->model('CommonModel');
		 $this->load->library(array('form_validation', 'email'));	
		date_default_timezone_set('Asia/Kolkata');
	} 
	public function index()
	{		
		$this->data['page_title']='Contact';
		$this->data['subview']='contact/contact';
		$this->data['icon']=$this->CommonModel->RetriveRecordByWhereRow('tbl_logo',['status' => 'Active','name'=>'Icons']); 
		$this->data['logo']=$this->CommonModel->RetriveRecordByWhereRow('tbl_logo',['status' => 'Active','name'=>'Logo']);
		$this->data['company_data']=$this->CommonModel->RetriveRecordByWhereOrderby('tbl_contact',['status' => 'Active'],'id' ,'desc');
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
		$description = $this->input->post('massage');
		$value= $this->input->post('value');
		$email=$this->CommonModel->RetriveRecordByWhereRow('tbl_contact',['uniqcode' => $value]);
		if(!empty($email->email))
		{
			$data=array(
			'uniqcode' => random_string('alnum',20),
			'name' => $name,
			'email' => $email->email,
			'moblie_no' => $phone,
			'massage' => $description,
			'status' => "Inactive",
			'create_date' => date('Y-m-d H:i:s'),
			);

			$insertid = $this->CommonModel->insert($data,"tbl_query");
			if($insertid)
			{ 
				$config = Array(
		          'protocol' => 'smtp',
		          'mailtype' => 'html', 
		          'charset' => 'utf-8',
		          'wordwrap' => TRUE

		      );
				$this->load->library('email', $config);				
				$from='surojitsamui007@gmail.com';		
				$from_name='surojit';
				$to_email='bcaprogramup@gmail.com';
				$subject='APPOINTMENT';
				// $message='<p>Dear '.$row->first_name.' '.$row->last_name.'</p><p> You have successfully changed your password. <br> Your new password is: '.$password.' </p><p>Warm Regards <br>Team shsh</p> <p><span style="color:red">This is an automated response. Please do not directly reply to this email.</span></p>';
				$massage = " <table border='3'><tr><td>Name</td><td>'$name'</td></tr><tr><td>Email</td><td>'$email->email'</td></tr><tr><td>Phone</td><td>'$phone'</td></tr><tr><td>Description</td><td>'$description'</td></tr></table>";
				
				email_send();
				$this->email->from($from, $from_name);
				$this->email->to($to_email);
				$this->email->subject($subject);
				$this->email->message($massage);
				$this->email->send();
								
			// 	$this->session->set_flashdata('success', 'We have sent you a new password to your registered email.');
			// 		redirect('/');
			// $this->session->set_flashdata('success', 'Thanks');
			redirect('contact');
			
			}
			else
			{
				$this->session->set_flashdata('error', ' Contact added unsuccessfully.');
				redirect('contact');
			}
	}
	else
	{
		$this->session->set_flashdata('error', ' Contact added unsuccessfully.');
			redirect('contact');
	}
	}
	


}
