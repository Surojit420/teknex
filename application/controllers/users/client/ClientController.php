<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClientController extends CI_Controller 
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
		$this->data['page_title']='Clients';
		$this->data['subview']='client/client';
		$this->data['client_data'] = $this->CommonModel->RetriveRecordByWhereOrderby('tbl_client',['status<>' => 'Delete'],'id' ,'desc');
		$this->load->view('admin/layout/default', $this->data); 
	}
	public function client_add()
	{
			$title_name = $this->input->post('client_name');
			$link = $this->input->post('client_link');
			$description = $this->input->post('description');

			$count = $this->CommonModel->CountWhere('tbl_client',['title' => $title_name]);
			if($count == 0) 
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
	 					$config['new_image']    = FCPATH.'/webroot/admin/images/client/'.$image_data['file_name'];
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

   //      		$data=array(
			// 'status' => 'Inactive',
			// 'update_date' => date('Y-m-d H:i:s'),
   //     			);
   //     			$this->CommonModel->UpdateRecord($data,'tbl_clients','status','Active'); 
        		$data=array(
				'uniqcode' => random_string('alnum',20),
				'title' => $title_name,
				'description' => $description,
				'image' => $logo_upload_image,
				'link' => $link,
				'description' => $description,
				'status' => "Active",
				'create_date' => date('Y-m-d H:i:s'),
				);

				$insertid = $this->CommonModel->insert($data,"tbl_client");
				// echo $insertid;
				if($insertid)
				{
					$this->session->set_flashdata('success', 'client added successfully.');
					redirect('admin/client');
				}
				else
				{

				}
			}
			else
			{
				$this->session->set_flashdata('error', 'client Name already exists!');
				redirect('admin/client');
				
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
		  	$check=$this->CommonModel->UpdateRecord($data,'tbl_client','uniqcode',$uniqcode);
		  	//echo $check;
		  	if($check == 1)
		  	{
			 $this->session->set_flashdata('success', 'Client deleted successfully');
			  $this->client['client_data'] = $this->CommonModel->RetriveRecordByWhereOrderby('tbl_client',['status<>' => 'Delete'],'id' ,'desc');
		  	$this->load->view('admin/client/edit', $this->client);                     
			// redirect('admin/client');
		  	}
		  	else
		  	{
		  	$this->session->set_flashdata('error', 'client not deleted successfully');                     
			// redirect('admin/client');
		  	}
		  // }

	}
	public function status()
	{		
        $uniqcode=$this->input->post('uniqcode'); 
       //echo $uniqcode;    
       $destroy_date = $this->CommonModel->RetriveRecordByWhereRow('tbl_client',['uniqcode' => $uniqcode]);
       if($destroy_date->status == 'Active')
       {
	        $data=array(
				'status' => 'Inactive',
				'update_date' => date('Y-m-d H:i:s'),
	       );
       		$check= $this->CommonModel->UpdateRecord($data,'tbl_client','uniqcode',$uniqcode); 
       }
       else
       {
	       	$data=array(
				'status' => 'Active',
				'update_date' => date('Y-m-d H:i:s'),
	       ); 
	       	 $check =$this->CommonModel->UpdateRecord($data,'tbl_client','uniqcode',$uniqcode); 
		}
		 if($check == 1)
		  	{
			 $this->session->set_flashdata('success', 'Status update successfully'); 
			 $this->client['client_data'] = $this->CommonModel->RetriveRecordByWhereOrderby('tbl_client',['status<>' => 'Delete'],'id' ,'desc');
		  $this->load->view('admin/client/edit', $this->client);                    
			//echo $check;
		  	}
		  	else
		  	{
		  	$this->session->set_flashdata('error', 'Status not update');                     
			//echo $check;
		  	}
		     
	}
	public function update_data()
	{
		$title_name = $this->input->post('client_name');
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
					$config['new_image']    = FCPATH.'/webroot/admin/images/banner/'.$image_data['file_name'];
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
				$file = FCPATH.'/webroot/admin/images/banner/'.$old_image['file_name'];
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

		$update =$this->CommonModel->UpdateRecord($data,'tbl_banner','uniqcode',$uniqcode); 
		if($update)
		{
			$this->session->set_flashdata('success', 'Bannar Updated successfully.');
			redirect('admin/banner');
		}
		else
		{
			$this->session->set_flashdata('error', 'Bannar Updated Unsuccessfully.');
			redirect('admin/banner');
		}
			

	}
}
?>