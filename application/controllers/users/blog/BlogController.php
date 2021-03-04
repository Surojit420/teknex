<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BlogController extends CI_Controller 
{
	function __construct() 
	 {

	 	parent::__construct(); 				
		if(($this->session->userdata('adminDetails')==NULL))
		{
		   return redirect('/');
		}
	 	 $this->load->helper(array('string'));	
	 	$this->load->model('CommonModel');	
		date_default_timezone_set('Asia/Kolkata');	
	 } 
	public function index()
	{		
		$this->data['page_title']='Blog';
		$this->data['subview']='blogs/blogs';
		$this->data['blog_data'] = $this->CommonModel->RetriveRecordByWhereOrderby('tbl_blogs',['status' => 'Active'],'id' ,'desc');
		$this->load->view('users/layout/default', $this->data); 
	}
	
}
?>