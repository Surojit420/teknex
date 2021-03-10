<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QueryController extends CI_Controller 
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
		$this->data['page_title']=' Query';
		$this->data['subview']='query/query';
		$this->data['query_data'] = $this->CommonModel->RetriveRecordByWhereOrderby('tbl_query',['status<>' => 'Delete'],'id' ,'desc');
		$this->data['icon']=$this->CommonModel->RetriveRecordByWhereRow('tbl_logo',['status' => 'Active','name'=>'Icons']); 
		$this->data['logo']=$this->CommonModel->RetriveRecordByWhereRow('tbl_logo',['status' => 'Active','name'=>'Logo']);
		$this->db->where('status','Active');
		$this->db->order_by('id','desc');
		$contact = $this->db->get('tbl_footercontact')->row();
		$this->data['contact_data']=$contact;
		$this->load->view('admin/layout/default', $this->data);
	}
	


}
