<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductController extends CI_Controller 
{
	function __construct()
	{

	  	parent::__construct(); 		
		$this->load->helper(array('common_helper', 'string', 'form', 'security', 'text'));		
		$this->load->model('CommonModel');	
		date_default_timezone_set('Asia/Kolkata');
	}
	public function index()
	{		
		$this->data['page_title']='product';
		$this->data['subview']='product/product';
		$this->data['icon']=$this->CommonModel->RetriveRecordByWhereRow('tbl_logo',['status' => 'Active','name'=>'Icons']); 
		$this->data['logo']=$this->CommonModel->RetriveRecordByWhereRow('tbl_logo',['status' => 'Active','name'=>'Logo']);
		$this->data['product_data'] = $this->CommonModel->RetriveRecordByWhereOrderby('tbl_client',['status' => 'Active'],'id' ,'desc');
		$this->db->where('status','Active');
		$this->db->order_by('id','desc');
		$contact = $this->db->get('tbl_footercontact')->row();
		$this->data['contact_data']=$contact;
		$this->db->where('status','Active');
		$this->db->where('banner_type','Product');
		$this->db->order_by('id','desc');
		$banner_row = $this->db->get('tbl_banner')->row();
		$this->data['banner_row']=$banner_row;	
		$this->load->view('users/layout/default', $this->data);
	}
	


}
