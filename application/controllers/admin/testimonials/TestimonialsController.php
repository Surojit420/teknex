<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TestimonialsController extends CI_Controller 
{
	 function __construct()
	 {

	  	parent::__construct(); 		
	 	 //$this->load->helper(array('string'));	
	 	$this->load->model('CommonModel');	
		date_default_timezone_set('Asia/Kolkata');
	 } 
	public function index()
	{		
		$this->data['page_title']=' Testimonials';
		$this->data['subview']='testimonials/testimonials';
		$this->data['testimonials_data'] = $this->CommonModel->RetriveRecordByWhereOrderby('tbl_testimonials',['status<>' => 'Delete'],'id' ,'desc');
		$this->data['icon']=$this->CommonModel->RetriveRecordByWhereRow('tbl_logo',['status' => 'Active','name'=>'Icons']); 
		$this->data['logo']=$this->CommonModel->RetriveRecordByWhereRow('tbl_logo',['status' => 'Active','name'=>'Logo']);
		$this->db->where('status','Active');
		$this->db->order_by('id','desc');
		$contact = $this->db->get('tbl_footercontact')->row();
		$this->data['contact_data']=$contact;
		$this->load->view('admin/layout/default', $this->data);
	}
	public function destroy()
	{
			$uniqcode = $this->input->post('uniqcode');
	      	$data=array(
	        'status'=>'Delete',
	    	);
		  	$check=$this->CommonModel->UpdateRecord($data,'tbl_testimonials','uniqcode',$uniqcode);
		  	if($check == 1)
		  	{
			 $this->session->set_flashdata('success', 'Testimonials deleted successfully');
			  $this->testimonials['testimonials_data'] = $this->CommonModel->RetriveRecordByWhereOrderby('tbl_testimonials',['status<>' => 'Delete'],'id' ,'desc');
		  	$this->load->view('admin/testimonials/edit', $this->testimonials);                     
		  	}
		  	else
		  	{
		  	$this->session->set_flashdata('error', 'Testimonials not deleted successfully');                     
		  	}

	}
	public function status()
	{		
        $uniqcode=$this->input->post('uniqcode');    
       $destroy_date = $this->CommonModel->RetriveRecordByWhereRow('tbl_testimonials',['uniqcode' => $uniqcode]);
       if($destroy_date->status == 'Active')
       {
	        $data=array(
				'status' => 'Inactive',
	       );
       		$check= $this->CommonModel->UpdateRecord($data,'tbl_testimonials','uniqcode',$uniqcode); 
       }
       else
       {
	       	$data=array(
				'status' => 'Active',
	       ); 
	       	 $check =$this->CommonModel->UpdateRecord($data,'tbl_testimonials','uniqcode',$uniqcode); 
		}
		 if($check == 1)
		  	{
			 $this->session->set_flashdata('success', 'Testimonials update successfully'); 
			 echo "Status update successfully";
			 $this->testimonials['testimonials_data'] = $this->CommonModel->RetriveRecordByWhereOrderby('tbl_testimonials',['status<>' => 'Delete'],'id' ,'desc');
		  $this->load->view('admin/testimonials/edit', $this->testimonials);                    
		  	}
		  	else
		  	{
		  	echo "Status not update";
		  	$this->session->set_flashdata('error', 'Testimonials Status not update');                     
		  	}
		     
	}

	


}
