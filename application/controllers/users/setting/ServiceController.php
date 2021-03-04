<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ServiceController extends CI_Controller 
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
		$this->data['page_title']='Service';
		$this->data['subview']='setting/service/service';
		$this->data['service_data'] = $this->CommonModel->RetriveRecordByWhereOrderby('tbl_service',['status<>' => 'Delete'],'id' ,'desc');
		$this->load->view('admin/layout/default', $this->data);
	}
	public function service_add()
	{
			$title_name = $this->input->post('service_name');
			$description = $this->input->post('description');
			$count = $this->CommonModel->CountWhere('tbl_service',['title_name' => $title_name]);
			if($count == 0) 
			{
        	$service_upload_image='';
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
	 					$config['new_image']    = FCPATH.'/webroot/admin/images/service/'.$image_data['file_name'];
	                    $config['width'] = 655;
	                    $config['height'] = 468;
	                    $this->load->library('image_lib', $config);
                		$this->image_lib->clear();
						$this->image_lib->initialize($config);
						$service_upload_image=$image_data['raw_name'].'_thumb'.$image_data['file_ext']; //a_thumb.jpg
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

   //      		$data=array(
			// 'status' => 'Inactive',
			// 'update_date' => date('Y-m-d H:i:s'),
   //     			);
   //     			$this->CommonModel->UpdateRecord($data,'tbl_service','status','Active'); 
        		$data=array(
				'uniqcode' => random_string('alnum',20),
				'title_name' => $title_name,
				'image' => $service_upload_image,
				'description' => $description,
				'status' => "Active",
				'create_date' => date('Y-m-d H:i:s'),
				);

				$insertid = $this->CommonModel->insert($data,"tbl_service");
				// echo $insertid;
				if($insertid)
				{
					$this->session->set_flashdata('success', 'Bannar added successfully.');
					redirect('admin/service');
				}
				else
				{

				}
			}
			else
			{
				$this->session->set_flashdata('error', 'service Name already exists!');
				redirect('admin/service');
				
			}

	}
	public function destroy()
	{
		$uniqcode = $this->input->post('uniqcode');
		 // $destroy_date = $this->CommonModel->RetriveRecordByWhereRow('tbl_logo',['uniqcode' => $uniqcode]);
		 // if($destroy_date->status == 'Active')
		 // {

		 // }
		 // else
		 //{
	      	$data=array(
	        'status'=>'Delete',
	        'update_date'=>date('Y-m-d H:i:s'),
	    	);
		  	$check=$this->CommonModel->UpdateRecord($data,'tbl_service','uniqcode',$uniqcode);
		  	//echo $check;
		  	if($check == 1)
		  	{
			 $this->session->set_flashdata('success', 'service deleted successfully');
			  $this->service['service_data'] = $this->CommonModel->RetriveRecordByWhereOrderby('tbl_service',['status<>' => 'Delete'],'id' ,'desc');
		  	$this->load->view('admin/setting/service/edit', $this->service);                     
			// redirect('admin/logo');
		  	}
		  	else
		  	{
		  	$this->session->set_flashdata('error', 'service not deleted successfully');                     
			 //redirect('admin/logo');
		  	}
		  // }

	}
	public function status()
	{		
        $uniqcode=$this->input->post('uniqcode'); 
       //echo $uniqcode;    
       $destroy_date = $this->CommonModel->RetriveRecordByWhereRow('tbl_service',['uniqcode' => $uniqcode]);
       if($destroy_date->status == 'Active')
       {
	        $data=array(
				'status' => 'Inactive',
				'update_date' => date('Y-m-d H:i:s'),
	       );
       		$check= $this->CommonModel->UpdateRecord($data,'tbl_service','uniqcode',$uniqcode); 
       }
       else
       {
	       	$data=array(
				'status' => 'Active',
				'update_date' => date('Y-m-d H:i:s'),
	       ); 
	       	 $check =$this->CommonModel->UpdateRecord($data,'tbl_service','uniqcode',$uniqcode); 
		}
		 if($check == 1)
		  	{
			 $this->session->set_flashdata('success', 'Status update successfully'); 
			 $this->service['service_data'] = $this->CommonModel->RetriveRecordByWhereOrderby('tbl_service',['status<>' => 'Delete'],'id' ,'desc');
		  $this->load->view('admin/setting/service/edit', $this->service);                    
			//echo $check;
		  	}
		  	else
		  	{
		  	$this->session->set_flashdata('error', 'Status not update');                     
			//echo $check;
		  	}
		     
	}
	public function edit_data()
	{
		$uniqcode=$this->input->post('uniqcode');
		$this->data['service_data'] = $this->CommonModel->RetriveRecordByWhereOrderby('tbl_service',['uniqcode' => $uniqcode],'id' ,'desc');
		$this->load->view('admin/setting/service/update', $this->data); 
				

	}
	public function update_data()
	{
		$title_name = $this->input->post('service_name');
		$description = $this->input->post('description');
		$uniqcode = $this->input->post("uniqcode");
		$old_image = $this->input->post("old_image");		
	    $banner_upload_image='';
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
					$config['new_image']    = FCPATH.'/webroot/admin/images/service/'.$image_data['file_name'];
                $config['width'] = 655;
                $config['height'] = 468;
                $this->load->library('image_lib', $config);
        		$this->image_lib->clear();
				$this->image_lib->initialize($config);
				$banner_upload_image=$image_data['raw_name'].'_thumb'.$image_data['file_ext']; //a_thumb.jpg
			    if (!$this->image_lib->resize())
		     	{
    				$this->handle_error($this->image_lib->display_errors());
					}
				    $file = FCPATH.'/webroot/admin/images/uploadImage/'.$image_data['file_name'];
				if (file_exists($file))
				{
					unlink($file);
				}
				$file = FCPATH.'/webroot/admin/images/service/'.$old_image['file_name'];
				if (file_exists($file))
				{
					unlink($file);
				}
         	}

         	$data=array(
			'title_name' => $title_name,
			'image' => $banner_upload_image,
			'description' => $description,
			'update_date' => date('Y-m-d H:i:s'),
			);
		}
		else
		{
			$data=array(
			'title_name' => $title_name,
			'description' => $description,
			'update_date' => date('Y-m-d H:i:s'),
			);
		}

		$update =$this->CommonModel->UpdateRecord($data,'tbl_service','uniqcode',$uniqcode); 
		if($update)
		{
			$this->session->set_flashdata('success', 'Service Updated successfully.');
			redirect('admin/service');
		}
		else
		{
			$this->session->set_flashdata('error', 'Service Updated Unsuccessfully.');
			redirect('admin/service');
		}
			

	}
	

}
