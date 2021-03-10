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
		$this->load->model('CommonModel');	
	} 
	public function index()
	{		
		$this->data['page_title']='Dashboard';
		$this->data['subview']='dashboard/dashboard';
		$this->data['icon']=$this->CommonModel->RetriveRecordByWhereRow('tbl_logo',['status' => 'Active','name'=>'Icons']); 
		$this->data['logo']=$this->CommonModel->RetriveRecordByWhereRow('tbl_logo',['status' => 'Active','name'=>'Logo']);
		$this->db->where('status','Active');
		$this->db->order_by('id','desc');
		$contact = $this->db->get('tbl_footercontact')->row();
		$this->data['contact_data']=$contact;
		$this->load->view('admin/layout/default', $this->data);
	}
	

}
