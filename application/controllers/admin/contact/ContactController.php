<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactController extends CI_Controller 
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
		$this->data['page_title']=' contact';
		$this->data['subview']='contact/contact';
		$this->data['company_data'] = $this->CommonModel->RetriveRecordByWhereOrderby('tbl_contact',['status<>' => 'Delete'],'id' ,'desc');
		$this->data['icon']=$this->CommonModel->RetriveRecordByWhereRow('tbl_logo',['status' => 'Active','name'=>'Icons']); 
		$this->data['logo']=$this->CommonModel->RetriveRecordByWhereRow('tbl_logo',['status' => 'Active','name'=>'Logo']);
		$this->db->where('status','Active');
		$this->db->order_by('id','desc');
		$contact = $this->db->get('tbl_footercontact')->row();
		$this->data['contact_data']=$contact;
		$this->load->view('admin/layout/default', $this->data); 
	}
	public function contact_add()
	{
			$name = $this->input->post('name');
			$phone = $this->input->post('phone');
			$address = $this->input->post('address');
			$email = $this->input->post('email');
			$description = $this->input->post('description');

			$count = $this->CommonModel->CountWhere('tbl_contact',['name' => $name,'status<>'=>'Delete']);
			if($count == 0) 
			{
        	$contact_upload_image='';
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
	 					$config['new_image']    = FCPATH.'/webroot/admin/images/contact/'.$image_data['file_name'];
	                    $config['width'] = 655;
	                    $config['height'] = 468;
	                    $this->load->library('image_lib', $config);
                		$this->image_lib->clear();
						$this->image_lib->initialize($config);
						$contact_upload_image=$image_data['raw_name'].'_thumb'.$image_data['file_ext']; //a_thumb.jpg
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
				'name' => $name,
				'phone' => $phone,
				'email' => $email,
				'address' => $address,
				'description' => $description,
				'image' => $contact_upload_image,
				'status' => "Active",
				'create_date' => date('Y-m-d H:i:s'),
				);

				$insertid = $this->CommonModel->insert($data,"tbl_contact");
				// echo $insertid;
				if($insertid)
				{
					$this->session->set_flashdata('success', 'contact added successfully.');
					redirect('admin/contact');
				}
				else
				{

				}
			}
			else
			{
				$this->session->set_flashdata('error', 'contact Name already exists!');
				redirect('admin/contact');
				
			}

	}
	public function destroy()
	{
		$uniqcode = $this->input->post('uniqcode');
	      	$data=array(
	        'status'=>'Delete',
	        'update_date'=>date('Y-m-d H:i:s'),
	    	);
		  	$check=$this->CommonModel->UpdateRecord($data,'tbl_contact','uniqcode',$uniqcode);
		  	$delete_file = $this->CommonModel->RetriveRecordByWhereRow('tbl_contact',['uniqcode' => $uniqcode]);
		  	$file = FCPATH.'/webroot/admin/images/contact/'.$delete_file->image;
			if (file_exists($file))
			{
				unlink($file);
			}
		  	if($check == 1)
		  	{
			 $this->session->set_flashdata('success', 'contact deleted successfully');
			  $this->contact['contact_data'] = $this->CommonModel->RetriveRecordByWhereOrderby('tbl_contact',['status<>' => 'Delete'],'id' ,'desc');
		  	$this->load->view('admin/contact/edit', $this->contact);                     
		  	}
		  	else
		  	{
		  	$this->session->set_flashdata('error', 'contact not deleted successfully');                     
		  	}

	}
	public function status()
	{		
        $uniqcode=$this->input->post('uniqcode'); 
       $destroy_date = $this->CommonModel->RetriveRecordByWhereRow('tbl_contact',['uniqcode' => $uniqcode]);
       if($destroy_date->status == 'Active')
       {
	        $data=array(
				'status' => 'Inactive',
				'update_date' => date('Y-m-d H:i:s'),
	       );
       		$check= $this->CommonModel->UpdateRecord($data,'tbl_contact','uniqcode',$uniqcode); 
       }
       else
       {
	       	$data=array(
				'status' => 'Active',
				'update_date' => date('Y-m-d H:i:s'),
	       ); 
	       	 $check =$this->CommonModel->UpdateRecord($data,'tbl_contact','uniqcode',$uniqcode); 
		}
		 if($check == 1)
		  	{
			 $this->session->set_flashdata('success', 'Status update successfully'); 
			 echo "Status update successfully";
			 $this->contact['contact_data'] = $this->CommonModel->RetriveRecordByWhereOrderby('tbl_contact',['status<>' => 'Delete'],'id' ,'desc');
		  $this->load->view('admin/contact/edit', $this->contact);                    
		  	}
		  	else
		  	{
		  	$this->session->set_flashdata('error', 'Status not update');
		  	echo "Status not update";                 
		  	}
		     
	}
	public function edit_data()
	{
		$uniqcode=$this->input->post('uniqcode');
		$this->data['contact_data'] = $this->CommonModel->RetriveRecordByWhereOrderby('tbl_contact',['uniqcode' => $uniqcode],'id' ,'desc');
		$this->load->view('admin/contact/upload', $this->data); 
				

	}
	public function update_data()
	{
		$name = $this->input->post('name');
		$phone = $this->input->post('phone');
		$address = $this->input->post('address');
		$email = $this->input->post('email');
		$description = $this->input->post('description');
		$uniqcode = $this->input->post("uniqcode");
		$old_image = $this->input->post("old_image");		
	    $contact_upload_image='';
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
					$config['new_image']    = FCPATH.'/webroot/admin/images/contact/'.$image_data['file_name'];
                $config['width'] = 655;
                $config['height'] = 468;
                $this->load->library('image_lib', $config);
        		$this->image_lib->clear();
				$this->image_lib->initialize($config);
				$contact_upload_image=$image_data['raw_name'].'_thumb'.$image_data['file_ext']; //a_thumb.jpg
			    if (!$this->image_lib->resize())
		     	{
    				//$this->handle_error($this->image_lib->display_errors());
					}
				    $file = FCPATH.'/webroot/admin/images/uploadImage/'.$image_data['file_name'];
				if (file_exists($file))
				{
					unlink($file);
				}
				$old_file = FCPATH.'/webroot/admin/images/contact/'.$old_image;
				if (file_exists($old_file))
				{
					unlink($old_file);
				}
         	}

         	$data=array(
			'name' => $name,
			'phone' => $phone,
			'email' => $email,
			'address' => $address,
			'description' => $description,
			'image' => $contact_upload_image,
			'update_date' => date('Y-m-d H:i:s'),
			);
		}
		else
		{
			$data=array(
			'name' => $name,
			'phone' => $phone,
			'email' => $email,
			'address' => $address,
			'description' => $description,
			'update_date' => date('Y-m-d H:i:s'),
			);
		}

		$update =$this->CommonModel->UpdateRecord($data,'tbl_contact','uniqcode',$uniqcode); 
		if($update)
		{
			$this->session->set_flashdata('success', 'contact Updated successfully.');
			redirect('admin/contact');
		}
		else
		{
			$this->session->set_flashdata('error', 'contact Updated Unsuccessfully.');
			redirect('admin/contact');
		}
			

	}
}
?>