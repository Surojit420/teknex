<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AppointmentController extends CI_Controller 
{
	 function __construct()
	 {

	  	parent::__construct(); 		
		if(($this->session->userdata('adminDetails')==NULL))
		{
		   return redirect('/');
		}
	 	 //$this->load->helper(array('string'));	
	 	$this->load->model('CommonModel');	
		date_default_timezone_set('Asia/Kolkata');
	 } 
	public function index()
	{		
		$this->data['page_title']=' Appointment';
		$this->data['subview']='appointment/appointment';
		$this->data['appointment_data'] = $this->CommonModel->RetriveRecordByWhereOrderby('tbl_appointment',['status<>' => 'Delete'],'id' ,'desc');
		$this->data['icon']=$this->CommonModel->RetriveRecordByWhereRow('tbl_logo',['status' => 'Active','name'=>'Icons']); 
		$this->data['logo']=$this->CommonModel->RetriveRecordByWhereRow('tbl_logo',['status' => 'Active','name'=>'Logo']);
		$this->db->where('status','Active');
		$this->db->order_by('id','desc');
		$contact = $this->db->get('tbl_footercontact')->row();
		$this->data['contact_data']=$contact;
		$this->load->view('admin/layout/default', $this->data);
	}
	public function destroy()
	{
			$uniqcode = $this->input->post('uniqcode');
	      	$data=array(
	        'status'=>'Delete',
	    	);
		  	$check=$this->CommonModel->UpdateRecord($data,'tbl_appointment','uniqcode',$uniqcode);
		  	if($check == 1)
		  	{
			 $this->session->set_flashdata('success', 'Appointment deleted successfully');
			  $this->appointment['appointment_data'] = $this->CommonModel->RetriveRecordByWhereOrderby('tbl_appointment',['status<>' => 'Delete'],'id' ,'desc');
		  	$this->load->view('admin/appointment/edit', $this->appointment);                     
		  	}
		  	else
		  	{
		  	$this->session->set_flashdata('error', 'Appointment not deleted successfully');                     
		  	}

	}
	


}
