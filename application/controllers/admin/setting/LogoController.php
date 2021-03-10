<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LogoController extends CI_Controller 
{
	function __construct()
	{

	 	parent::__construct(); 		
		 $this->load->helper(array('string'));		
		if(($this->session->userdata('adminDetails')==NULL))
		{
		   return redirect('/');
		}
		$this->load->model('CommonModel');	
		date_default_timezone_set('Asia/Kolkata');	
	} 
	
	public function index()
	{
		$this->data['page_title'] = ' Logo';
		$this->data['logo_data'] = $this->CommonModel->RetriveRecordByWhereOrderby('tbl_logo',['status<>' => 'Delete'],'id' ,'desc');
		$this->data['type_data'] = $this->CommonModel->RetriveRecordByWhereRow('tbl_logo',['status<>' => 'Delete']);
		$this->data['hide_data'] = $this->CommonModel->CountWhere('tbl_logo',['status<>' => 'Delete']);
		$this->data['subview'] = 'setting/logo/logo';
		$this->data['icon']=$this->CommonModel->RetriveRecordByWhereRow('tbl_logo',['status' => 'Active','name'=>'Icons']); 
		$this->data['logo']=$this->CommonModel->RetriveRecordByWhereRow('tbl_logo',['status' => 'Active','name'=>'Logo']);
		$this->db->where('status','Active');
		$this->db->order_by('id','desc');
		$contact = $this->db->get('tbl_footercontact')->row();
		$this->data['contact_data']=$contact;
		$this->load->view('admin/layout/default', $this->data);
	}

	public function add_logo()
	{
		$name = $this->input->post('logo_name');
			$count = $this->CommonModel->CountWhere('tbl_logo',['name' => $name,'status<>'=>'Delete']);
			if($count == 0)
			{
        	$logo_upload_image='';
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
	 					$config['new_image']    = FCPATH.'/webroot/admin/images/logo/'.$image_data['file_name'];
	                    $config['width'] = 655;
	                    $config['height'] = 468;
	                    $this->load->library('image_lib', $config);
                		$this->image_lib->clear();
						$this->image_lib->initialize($config);
						$logo_upload_image=$image_data['raw_name'].'_thumb'.$image_data['file_ext']; //a_thumb.jpg
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
				'image'=>$logo_upload_image,
				'name' => $name,
				'status' => "Active",
				'create_date' => date('Y-m-d H:i:s'),
				);

				$insertid = $this->CommonModel->insert($data,"tbl_logo");
				if($insertid)
				{
					$this->session->set_flashdata('success', 'Logo added successfully.');
					redirect('admin/logo');
				}
				else
				{

				}
			}
			else
			{
				$this->session->set_flashdata('error', 'Logo Name already exists!');
				redirect('admin/logo');
				
			}	
	}
	public function edit_data()
	{
		$uniqcode=$this->input->post('uniqcode');
		$this->logo_row['logo_data'] = $this->CommonModel->RetriveRecordByWhere('tbl_logo',['uniqcode' => $uniqcode]);
		$this->load->view('admin/setting/logo/update', $this->logo_row); 
	}
	public function update_data()
	{
		$name = $this->input->post('logo_name');
		$uniqcode = $this->input->post("uniqcode");
		$old_image = $this->input->post("old_image");		
	    $logo_upload_image='';
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
					$config['new_image']    = FCPATH.'/webroot/admin/images/logo/'.$image_data['file_name'];
                $config['width'] = 655;
                $config['height'] = 468;
                $this->load->library('image_lib', $config);
        		$this->image_lib->clear();
				$this->image_lib->initialize($config);
				$logo_upload_image=$image_data['raw_name'].'_thumb'.$image_data['file_ext']; //a_thumb.jpg
			    if (!$this->image_lib->resize())
		     	{
    				//$this->handle_error($this->image_lib->display_errors());
					}
				    $file = FCPATH.'/webroot/admin/images/uploadImage/'.$image_data['file_name'];
				if (file_exists($file))
				{
					unlink($file);
				}
				$old_file = FCPATH.'/webroot/admin/images/banner/'.$old_image;
				if (file_exists($old_file))
				{
					unlink($old_file);
				}
         	}

         	$data=array(
			'image' => $logo_upload_image,
			'update_date' => date('Y-m-d H:i:s'),
			);
		}
		else
		{
			$data=array(
			'update_date' => date('Y-m-d H:i:s'),
			);
		}

		$update =$this->CommonModel->UpdateRecord($data,'tbl_logo','uniqcode',$uniqcode); 
		if($update)
		{
			$this->session->set_flashdata('success', 'logo Updated successfully.');
			redirect('admin/logo');
		}
		else
		{
			$this->session->set_flashdata('error', 'logo Updated Unsuccessfully.');
			redirect('admin/logo');
		}
			

	}
	public function status()
	{		
        $uniqcode=$this->input->post('uniqcode');  
        $status = $this->CommonModel->RetriveRecordByWhereRow('tbl_logo',['uniqcode' => $uniqcode]);
        if($status->status == 'Active')
        {
        $data=array(
			'status' => 'Inactive',
			'update_date' => date('Y-m-d H:i:s'),
       ); 
    	}
    	else
    	{
    	$data=array(
			'status' => 'Active',
			'update_date' => date('Y-m-d H:i:s'),	
		);
    	}
       	 $check =$this->CommonModel->UpdateRecord($data,'tbl_logo','uniqcode',$uniqcode); 
       	 if($check == 1)
	  	{
		 $this->session->set_flashdata('success', 'Status update successfully'); 
		 $this->logo['logo_data'] = $this->CommonModel->RetriveRecordByWhereOrderby('tbl_logo',['status<>' => 'Delete'],'id' ,'desc');
		$this->logo['hide_data'] = $this->CommonModel->CountWhere('tbl_logo',['status<>' => 'Delete']);

	  $this->load->view('admin/setting/logo/status', $this->logo);                    
	  	}
	  	else
	  	{
	  	$this->session->set_flashdata('error', 'Status not update');                     
	  	}
	  	
	     
	}
	public function destroy($uniqcode)
	{
		
	      	$data=array(
	        'status'=>'Delete',
	        'update_date'=>date('Y-m-d H:i:s'),
	    	);

		  	$check=$this->CommonModel->UpdateRecord($data,'tbl_logo','uniqcode',$uniqcode);
		  	$delete_file = $this->CommonModel->RetriveRecordByWhereRow('tbl_logo',['uniqcode' => $uniqcode]);
		  	$file = FCPATH.'/webroot/admin/images/logo/'.$delete_file->image;
			if (file_exists($file))
			{
				unlink($file);
			}

		  	if($check == 1)
		  	{
			 $this->session->set_flashdata('success', 'Logo deleted successfully');                     
			 redirect('admin/logo');
		  	}
		  	else
		  	{
		  	$this->session->set_flashdata('error', 'Logo not deleted successfully');                     
			redirect('admin/logo');
		  	}

	}


}
