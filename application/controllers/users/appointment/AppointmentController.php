<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AppointmentController extends CI_Controller 
{
	function __construct() 
	 {

	 	parent::__construct(); 				
		$this->load->helper(array('common_helper', 'string', 'form', 'security'));
	 	 $this->load->library(array('form_validation', 'email'));
	 	$this->load->model('CommonModel');	
		date_default_timezone_set('Asia/Kolkata');	
	 } 
	public function appointment_add()
	{
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$description = $this->input->post('description');
		
		$data=array(
		'uniqcode' => random_string('alnum',20),
		'name' => $name,
		'email' => $email,
		'moblie_no' => $phone,
		'description' => $description,
		'status' => "Inactive",
		'create_date' => date('Y-m-d H:i:s'),
		);

		$insertid = $this->CommonModel->insert($data,"tbl_appointment");
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
				$massage = " <table border='3'><tr><td>Name</td><td>'$name'</td></tr><tr><td>Email</td><td>'$email'</td></tr><tr><td>Phonel</td><td>'$phone'</td></tr><tr><td>Description</td><td>'$description'</td></tr></table>";
				
				email_send();
				$this->email->from($from, $from_name);
				$this->email->to($to_email);
				$this->email->subject($subject);
				$this->email->message($massage);
				$this->email->send();
								
				$this->session->set_flashdata('success', 'We have sent you a new password to your registered email.');
					redirect('/');
			$this->session->set_flashdata('success', 'Thanks');
			redirect('/');
		

	}
	
}
