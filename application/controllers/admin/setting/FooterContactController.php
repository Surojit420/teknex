<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FooterContactController extends CI_Controller 
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
		$this->data['page_title']='TekNex | FooterContact';
		$this->data['subview']='setting/footer_contact/footer_contact';
		$this->data['footcontact_data'] = $this->CommonModel->RetriveRecordByWhereOrderby('tbl_footercontact',['status<>' => 'Delete'],'id' ,'desc');
		$this->load->view('admin/layout/default', $this->data);
	}
	public function footcontact_add()
	{
			
			$email = $this->input->post('email');
			$phone = $this->input->post('phone_no');
			$footer_copy = $this->input->post('footer_copy_right');
			$contact_address = $this->input->post('address');
			$about = $this->input->post('about_us');
			$contact = $this->input->post('contact_us');
			$map = $this->input->post('map');
			$count = $this->CommonModel->CountWhere('tbl_footercontact',['email' => $email,'phone'=>$phone]);
			if($count == 0) 
			{
        	$footercontact_upload_image='';
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
	 					$config['new_image']    = FCPATH.'/webroot/admin/images/footercontact/'.$image_data['file_name'];
	                    $config['width'] = 655;
	                    $config['height'] = 468;
	                    $this->load->library('image_lib', $config);
                		$this->image_lib->clear();
						$this->image_lib->initialize($config);
						$footercontact_upload_image=$image_data['raw_name'].'_thumb'.$image_data['file_ext']; //a_thumb.jpg
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
   //     			$this->CommonModel->UpdateRecord($data,'tbl_footercontact','status','Active'); 
        		$data=array(
				'uniqcode' => random_string('alnum',20),
				'email' => $email,
				'phone' => $phone,
				'image' => $footercontact_upload_image,
				'footer_copyright' =>$footer_copy,
				'contact_address' => $contact_address,
				'about_us' => $about,
				'contact_us' => $contact,
				// 'map' => $map,
				'status' => "Active",
				'create_date' => date('Y-m-d H:i:s'),
				);

				$insertid = $this->CommonModel->insert($data,"tbl_footercontact");
				// echo $insertid;
				if($insertid)
				{
					$this->session->set_flashdata('success', 'Footer&Contact added successfully.');
					redirect('admin/footercontact');
				}
				else
				{

				}
			}
			else
			{
				$this->session->set_flashdata('error', 'Footer&Contact email & phone already exists!');
				redirect('admin/footercontact');
				
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
		  	$check=$this->CommonModel->UpdateRecord($data,'tbl_footercontact','uniqcode',$uniqcode);
		  	//echo $check;
		  	if($check == 1)
		  	{
			 $this->session->set_flashdata('success', 'footercontact deleted successfully');
			  $this->footercontact['footercontact_data'] = $this->CommonModel->RetriveRecordByWhereOrderby('tbl_footercontact',['status<>' => 'Delete'],'id' ,'desc');
		  	$this->load->view('admin/setting/footer_contact/edit', $this->footercontact);                     
			// redirect('admin/logo');
		  	}
		  	else
		  	{
		  	$this->session->set_flashdata('error', 'footercontact not deleted successfully');                     
			 //redirect('admin/logo');
		  	}
		  // }

	}
	public function status()
	{		
        $uniqcode=$this->input->post('uniqcode'); 
       //echo $uniqcode;    
       $destroy_date = $this->CommonModel->RetriveRecordByWhereRow('tbl_footercontact',['uniqcode' => $uniqcode]);
       if($destroy_date->status == 'Active')
       {
	        $data=array(
				'status' => 'Inactive',
				'update_date' => date('Y-m-d H:i:s'),
	       );
       		$check= $this->CommonModel->UpdateRecord($data,'tbl_footercontact','uniqcode',$uniqcode); 
       }
       else
       {
	       	$data=array(
				'status' => 'Active',
				'update_date' => date('Y-m-d H:i:s'),
	       ); 
	       	 $check =$this->CommonModel->UpdateRecord($data,'tbl_footercontact','uniqcode',$uniqcode); 
		}
		 if($check == 1)
		  	{
			 $this->session->set_flashdata('success', 'Status update successfully'); 
			 echo "Status update successfully";
			 $this->footercontact['footercontact_data'] = $this->CommonModel->RetriveRecordByWhereOrderby('tbl_footercontact',['status<>' => 'Delete'],'id' ,'desc');
		  $this->load->view('admin/setting/footer_contact/edit', $this->footercontact);                    
			//echo $check;
		  	}
		  	else
		  	{
		  	echo "Status not update";
		  	$this->session->set_flashdata('error', 'Status not update');                     
			//echo $check;
		  	}
		     
	}
	public function edit_data()
	{
		$uniqcode=$this->input->post('uniqcode');
		$this->data['footercontact_data'] = $this->CommonModel->RetriveRecordByWhere('tbl_footercontact',['uniqcode' => $uniqcode]);
		$this->load->view('admin/setting/footer_contact/update', $this->data); 
				

	}
	public function update_data()
	{
		$email = $this->input->post('email');
		$phone = $this->input->post('phone_no');
		$footer_copy = $this->input->post('footer_copy_right');
		$contact_address = $this->input->post('address');
		$about = $this->input->post('about_us');
		$contact = $this->input->post('contact_us');
		$map = $this->input->post('map');
		$count = $this->CommonModel->CountWhere('tbl_footercontact',['email' => $email,'phone'=>$phone]);
		$uniqcode = $this->input->post("uniqcode");
		$old_image = $this->input->post("old_image");		
	    $footercontact_upload_image='';
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
					$config['new_image']    = FCPATH.'/webroot/admin/images/footercontact/'.$image_data['file_name'];
                $config['width'] = 655;
                $config['height'] = 468;
                $this->load->library('image_lib', $config);
        		$this->image_lib->clear();
				$this->image_lib->initialize($config);
				$footercontact_upload_image=$image_data['raw_name'].'_thumb'.$image_data['file_ext']; //a_thumb.jpg
			    if (!$this->image_lib->resize())
		     	{
    				$this->handle_error($this->image_lib->display_errors());
					}
				    $file = FCPATH.'/webroot/admin/images/uploadImage/'.$image_data['file_name'];
				if (file_exists($file))
				{
					unlink($file);
				}
				$file = FCPATH.'/webroot/admin/images/footercontact/'.$old_image['file_name'];
				if (file_exists($file))
				{
					unlink($file);
				}
         	}

         	$data=array(
				'email' => $email,
				'phone' => $phone,
				'image' => $footercontact_upload_image,
				'footer_copyright' =>$footer_copy,
				'contact_address' => $contact_address,
				'about_us' => $about,
				'contact_us' => $contact,
				// 'map' => $map,
				'status' => "Active",
				'update_date' => date('Y-m-d H:i:s'),
				);
		}
		else
		{
			$data=array(
				'email' => $email,
				'phone' => $phone,
				'footer_copyright' =>$footer_copy,
				'contact_address' => $contact_address,
				'about_us' => $about,
				'contact_us' => $contact,
				// 'map' => $map,
				'status' => "Active",
				'update_date' => date('Y-m-d H:i:s'),
				);
		}

		$update =$this->CommonModel->UpdateRecord($data,'tbl_footercontact','uniqcode',$uniqcode); 
		if($update)
		{
			$this->session->set_flashdata('success', 'Bannar Updated successfully.');
			redirect('admin/footercontact');
		}
		else
		{
			$this->session->set_flashdata('error', 'Bannar Updated Unsuccessfully.');
			redirect('admin/footercontact');
		}
			

	}
	


}
