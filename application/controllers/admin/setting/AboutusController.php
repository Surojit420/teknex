<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AboutusController extends CI_Controller 
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
		$this->data['page_title']='TekNex | About Us';
		$this->data['subview']='setting/aboutus/aboutus';
		$this->data['aboutus_data'] = $this->CommonModel->RetriveRecordByWhereOrderby('tbl_about_us',['status<>' => 'Delete'],'id' ,'desc');
		$this->load->view('admin/layout/default', $this->data);
	}
	public function aboutus_add()
	{
			$company_name = $this->input->post('company_name');
			$about_title = $this->input->post('about_title'); 
			$description = $this->input->post('description');
			$short_description = $this->input->post('short_description');
			$count = $this->CommonModel->CountWhere('tbl_about_us',['company_name' => $company_name,'status<>'=>'Delete']);
			if($count == 0) 
			{
        	$aboutus_upload_image='';
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
	 					$config['new_image']    = FCPATH.'/webroot/admin/images/aboutus/'.$image_data['file_name'];
	                    $config['width'] = 655;
	                    $config['height'] = 468;
	                    $this->load->library('image_lib', $config);
                		$this->image_lib->clear();
						$this->image_lib->initialize($config);
						$aboutus_upload_image=$image_data['raw_name'].'_thumb'.$image_data['file_ext']; //a_thumb.jpg
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

        		$data=array(
				'uniqcode' => random_string('alnum',20),
				'company_name' => $company_name,
				'about_title' => $about_title,
				'description' => $description,
				'short_description' => $short_description,
				'image' => $aboutus_upload_image,
				'status' => "Active"
				);

				$insertid = $this->CommonModel->insert($data,"tbl_about_us");
				if($insertid)
				{
					$this->session->set_flashdata('success', 'aboutus added successfully.');
					redirect('admin/aboutus');
				}
				else
				{

				}
			}
			else
			{
				$this->session->set_flashdata('error', 'aboutus Name already exists!');
				redirect('admin/aboutus');
				
			}

	}
	public function destroy()
	{
		$uniqcode = $this->input->post('uniqcode');
	      	$data=array(
	        'status'=>'Delete',
	    	);
		  	$check=$this->CommonModel->UpdateRecord($data,'tbl_about_us','uniqcode',$uniqcode);
		  	if($check == 1)
		  	{
			 $this->session->set_flashdata('success', 'aboutus deleted successfully');
			  $this->aboutus['aboutus_data'] = $this->CommonModel->RetriveRecordByWhereOrderby('tbl_about_us',['status<>' => 'Delete'],'id' ,'desc');
		  	$this->load->view('admin/setting/aboutus/edit', $this->aboutus);                     
		  	}
		  	else
		  	{
		  	$this->session->set_flashdata('error', 'aboutus not deleted successfully');                     
		  	}

	}
	
	public function edit_data()
	{
		$uniqcode=$this->input->post('uniqcode');
		$this->data['aboutus_data'] = $this->CommonModel->RetriveRecordByWhere('tbl_about_us',['uniqcode' => $uniqcode]);
		$this->load->view('admin/setting/aboutus/update', $this->data); 
				

	}
	public function update_data()
	{
		$company_name = $this->input->post('company_name');
		$about_title = $this->input->post('about_title'); 
		$description = $this->input->post('description');
		$short_description = $this->input->post('short_description');
		$uniqcode = $this->input->post("uniqcode");
		$old_image = $this->input->post("old_image");		
	    $aboutus_upload_image='';
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
				$config['new_image']    = FCPATH.'/webroot/admin/images/aboutus/'.$image_data['file_name'];
                $config['width'] = 655;
                $config['height'] = 468;
                $this->load->library('image_lib', $config);
        		$this->image_lib->clear();
				$this->image_lib->initialize($config);
				$aboutus_upload_image=$image_data['raw_name'].'_thumb'.$image_data['file_ext']; //a_thumb.jpg
			    if (!$this->image_lib->resize())
		     	{
    				//$this->handle_error($this->image_lib->display_errors());
					}
				    $file = FCPATH.'/webroot/admin/images/uploadImage/'.$image_data['file_name'];
				if (file_exists($file))
				{
					unlink($file);
				}
				$file = FCPATH.'/webroot/admin/images/aboutus/'.$old_image['file_name'];
				if (file_exists($file))
				{
					unlink($file);
				}
         	}

         	$data=array(
			'company_name' => $company_name,
			'about_title' => $about_title,
			'description' => $description,
			'short_description' => $short_description,
			'image' => $aboutus_upload_image,
			);
		}
		else
		{
			$data=array(
			'company_name' => $company_name,
			'about_title' => $about_title,
			'description' => $description,
			'short_description' => $short_description,
			);
		}

		$update =$this->CommonModel->UpdateRecord($data,'tbl_about_us','uniqcode',$uniqcode); 
		if($update)
		{
			$this->session->set_flashdata('success', 'About Us Updated successfully.');
			redirect('admin/aboutus');
		}
		else
		{
			$this->session->set_flashdata('error', 'Abouts Us Updated Unsuccessfully.');
			redirect('admin/aboutus');
		}
			

	}
	

}
