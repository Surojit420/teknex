<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends CI_Controller 
{
	function __construct()
	{

	  	parent::__construct(); 		
		$this->load->helper(array('common_helper', 'string', 'form', 'security', 'text'));		
		if(($this->session->userdata('adminDetails')==NULL))
		{
		   return redirect('/');
		}
	} 
	public function index()
	{		
		$this->data['page_title']='Dashboard';
		$this->data['subview']='dashboard/dashboard';
		$this->load->view('admin/layout/default', $this->data);
	}
	

}
