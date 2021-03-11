<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class TestimonialsController extends CI_Controller 
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
		$this->data['page_title']='Testimonials';
		$this->data['subview']='testimonials/testimonials';
		$this->data['icon']=$this->CommonModel->RetriveRecordByWhereRow('tbl_logo',['status' => 'Active','name'=>'Icons']); 
		$this->data['logo']=$this->CommonModel->RetriveRecordByWhereRow('tbl_logo',['status' => 'Active','name'=>'Logo']);
		$this->data['testimonials_data'] = $this->CommonModel->RetriveRecordByWhereOrderby('tbl_testimonials',['status' => 'Active'],'id' ,'desc');
		$this->db->where('status','Active');
		$this->db->order_by('id','desc');
		$contact = $this->db->get('tbl_footercontact')->row();
		$this->data['contact_data']=$contact;
		$this->db->where('status','Active');
		$this->db->where('banner_type','Testimonials');
		$this->db->order_by('id','desc');
		$banner_row = $this->db->get('tbl_banner')->row();
		$this->data['banner_row']=$banner_row;
		$this->load->view('users/layout/default', $this->data);
	}
	public function testimonials_add()
	{
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$position = $this->input->post('subject');
		$massage = $this->input->post('massage');
		echo $massage;
		$testimonials_upload_image = '';
    	if(!empty($_FILES['image']['name']))
		{
			$config['upload_path']          = FCPATH.'/webroot/admin/images/uploadImage/';
            $config['allowed_types']        = '*';
            $config['encrypt_name'] 		= TRUE;
            $config['max_size']             = '*';
            $config['file_name']          	= $_FILES['image']['name'];
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('image'))
        	{
        		$image_data = $this->upload->data();
                $config['image_library'] = 'gd2';
                $config['source_image'] = $image_data['full_path']; 
                $config['create_thumb'] = TRUE;
					$config['maintain_ratio'] = TRUE;
					$config['new_image']    = FCPATH.'/webroot/admin/images/testimonials/'.$image_data['file_name'];
                $config['width'] = 655;
                $config['height'] = 468;
                $this->load->library('image_lib', $config);
        		$this->image_lib->clear();
				$this->image_lib->initialize($config);
				$testimonials_upload_image=$image_data['raw_name'].'_thumb'.$image_data['file_ext']; //a_thumb.jpg
			    if (!$this->image_lib->resize())
		     	{
    				//$this->handle_error($this->image_lib->display_errors());
					}
				    $file = FCPATH.'/webroot/admin/images/uploadImage/'.$image_data['file_name'];
				if (file_exists($file))
				{
					unlink($file);
				}
         	}
		}
        		//echo $testimonials_upload_image;
		$data=array(
		'uniqcode' => random_string('alnum',20),
		'name' => $name,
		'email' => $email,
		'moblie_no' => $phone,
		'image' => $testimonials_upload_image,
		'position' => $position,
		'description' => $massage,
		'status' => "Inactive",
		'create_date' => date('Y-m-d H:i:s'),
		);

		$insertid = $this->CommonModel->insert($data,"tbl_testimonials");
		if($insertid)
		{
			$this->session->set_flashdata('success', 'Testimonials added successfully.');
			redirect('testimonials');
		}
		else
		{
			$this->session->set_flashdata('error', ' Testimonials added unsuccessfully.');
			redirect('testimonials');
		}

	 }
	


}
