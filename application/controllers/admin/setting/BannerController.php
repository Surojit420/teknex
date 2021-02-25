<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BannerController extends CI_Controller 
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
		$this->data['page_title']='TekNex | Banner';
		$this->data['subview']='setting/banner';
		$this->load->view('admin/layout/default', $this->data);
	}
	public function banner_add()
	{
		$logo_upload_image='';
            	if(!empty($_FILES['image']['name']))
				{
					$config['upload_path']          = FCPATH.'/webroot/admin/images/uploadImage/';
		            $config['allowed_types']        = '*';
		            $config['encrypt_name'] 		= TRUE;
		            $config['max_size']             = 1024;
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
	 					$config['new_image']    = FCPATH.'/webroot/admin/images/logo/'.$image_data['file_name'];
	                    $config['width'] = 655;
	                    $config['height'] = 468;
	                    $this->load->library('image_lib', $config);
                		$this->image_lib->clear();
						$this->image_lib->initialize($config);
						$logo_upload_image=$image_data['raw_name'].'_thumb'.$image_data['file_ext']; //a_thumb.jpg
					    if (!$this->image_lib->resize())
				     	{
	        				$this->handle_error($this->image_lib->display_errors());
	   					}
	   				    $file = FCPATH.'/webroot/admin/images/uploadImage/'.$image_data['file_name'];
    					if (file_exists($file))
    					{
        					unlink($file);
    					}
	             	}
        		}

        		$name=$this->input->post('logo_name');
        		$data=array(
				'uniqcode' => random_string('alnum',20),
				'image'=>$logo_upload_image,
				'name' => $name,
				'status' => "Active",
				'create_date' => date('Y-m-d H:i:s'),
				);
				$insertid = $this->CommonModel->insert($data,"tbl_logo");
				echo $insertid;
				if($insertid)
				{
					$this->session->set_flashdata('success', 'Logo added successfully.');
				}
				else
				{
					
				}
	}
	


}
