<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AboutController extends CI_Controller 
{
	function __construct() 
	 {

	 	parent::__construct(); 				
		// if(($this->session->userdata('adminDetails')==NULL))
		// {
		//    return redirect('/'); 
		// }
	 	 $this->load->helper(array('string'));	
	 	$this->load->model('CommonModel');	
		date_default_timezone_set('Asia/Kolkata');	
	 } 
	public function index()
	{		
		$this->data['page_title']='TekNex | About';
		$this->data['subview']='about/about';
		$this->data['about_data'] = $this->CommonModel->RetriveRecordByWhereOrderby('tbl_about_us',['status' => 'Active'],'id' ,'desc');
		$this->load->view('users/layout/default', $this->data);
	}
	


}
