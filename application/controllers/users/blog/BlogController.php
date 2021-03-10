<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BlogController extends CI_Controller 
{
	function __construct() 
	 {

	 	parent::__construct(); 				
	 	$this->load->helper(array('string','common_helper'));	
	 	$this->load->model('CommonModel');	
		date_default_timezone_set('Asia/Kolkata');	
	 } 
	public function index()
	{		
		$this->data['page_title']='Blog';
		$this->data['subview']='blogs/blogs';
		$this->data['icon']=$this->CommonModel->RetriveRecordByWhereRow('tbl_logo',['status' => 'Active','name'=>'Icons']); 
		$this->data['logo']=$this->CommonModel->RetriveRecordByWhereRow('tbl_logo',['status' => 'Active','name'=>'Logo']);
		$this->db->where('status','Active');
		$this->db->order_by('id','desc');
		$contact = $this->db->get('tbl_footercontact')->row();
		$this->data['contact_data']=$contact;
		$this->data['blogs_data'] = $this->CommonModel->RetriveRecordByWhereOrderby('tbl_blogs',['status' => 'Active'],'id' ,'desc');
		$this->data['title'] = $this->CommonModel->RetriveRecordByWhereOrderby('tbl_blogs',['status' => 'Active'],'id' ,'desc');
		$this->db->where('status','Active');
		$this->db->where('banner_type','Blog');
		$this->db->order_by('id','desc');
		$banner_row = $this->db->get('tbl_banner')->row();
		$this->data['banner_row']=$banner_row;
		$this->load->view('users/layout/default', $this->data); 
	}
	public function blog_detalis($title)
	{
		$uniqcode=$_GET['uid'];
		$this->data['page_title']='Blog Detalis';
		$this->data['subview']='blogs/blog-details';
		$this->db->where('status','Active');
		$this->db->order_by('id','desc');
		$contact = $this->db->get('tbl_footercontact')->row();
		$this->data['contact_data']=$contact;
		$this->db->where('status','Active');
		$this->db->where('banner_type','Blog');
		$this->db->order_by('id','desc');
		$banner_row = $this->db->get('tbl_banner')->row();
		$this->data['banner_row']=$banner_row;
		$this->data['blogs_data'] = $this->CommonModel->RetriveRecordByWhereOrderby('tbl_blogs',['status' => 'Active'],'id' ,'desc');
		$this->data['title'] = $this->CommonModel->RetriveRecordByWhereOrderby('tbl_blogs',['status' => 'Active'],'id' ,'desc');
		$this->data['blog_details'] = $this->CommonModel->RetriveRecordByWhereRow('tbl_blogs',['uniqcode' => $uniqcode]);

		$this->load->view('users/layout/default', $this->data); 
	}
	
}
?>