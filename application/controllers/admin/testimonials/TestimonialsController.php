<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TestimonialsController extends CI_Controller 
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
		$this->data['page_title']='TekNex | Testimonials';
		$this->data['subview']=' testimonials/testimonials';
		$this->data['testimonials_data'] = $this->CommonModel->RetriveRecordByWhereOrderby('tbl_testimonials',['status<>' => 'Delete'],'id' ,'desc');
		$this->load->view('admin/layout/default', $this->data);
	}
	


}
