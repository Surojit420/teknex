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
		$this->data['page_title']='TekNex | Appointment';
		$this->data['subview']='appointment/appointment';
		$this->data['appointment_data'] = $this->CommonModel->RetriveRecordByWhereOrderby('tbl_appointment',['status<>' => 'Delete'],'id' ,'desc');
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
