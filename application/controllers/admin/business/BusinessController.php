<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BusinessController extends CI_Controller 
{
	// function __construct()
	// {

	//   	parent::__construct(); 		
	// 	$this->load->helper(array('common_helper', 'string', 'form', 'security', 'text'));		
	// 	if(($this->session->userdata('adminDetails')==NULL))
	// 	{
	// 	   return redirect('/');
	// 	}
	// } 
	public function index()
	{		
		$this->data['page_title']='TekNex | Business';
		$this->data['subview']='business/business';
		$this->load->view('admin/layout/default', $this->data);
	}
	


}
