<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class AboutController extends CI_Controller 
{
	function __construct() 
	 {
		parent::__construct(); 				
	 	$this->load->helper(array('string'));	
	 	$this->load->model('CommonModel');	
		date_default_timezone_set('Asia/Kolkata');	
	 } 
	public function index()
	{		
		$this->data['page_title']='About';
		$this->data['subview']='about/about';
		$this->data['icon']=$this->CommonModel->RetriveRecordByWhereRow('tbl_logo',['status' => 'Active','name'=>'Icons']); 
		$this->data['logo']=$this->CommonModel->RetriveRecordByWhereRow('tbl_logo',['status' => 'Active','name'=>'Logo']);
		$this->db->where('status','Active');
		$this->db->order_by('id','desc');
		$contact = $this->db->get('tbl_footercontact')->row();
		$this->data['contact_data']=$contact;
		$this->db->where('status','Active');
		$this->db->where('banner_type','About');
		$this->db->order_by('id','desc');
		$banner_row = $this->db->get('tbl_banner')->row();
		$this->data['banner_row']=$banner_row;
		$this->data['about_data'] = $this->CommonModel->RetriveRecordByWhereOrderby('tbl_about_us',['status' => 'Active'],'id' ,'desc');
		$this->load->view('users/layout/default', $this->data);
	}
	


}
