<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*-------------------------------------project controller---------------------------------------------*/
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
		$this->data['page_title']=' project	';
		$this->data['subview']='client/client';
		$this->data['client_data'] = $this->CommonModel->RetriveRecordByWhereOrderby('tbl_client',['status<>' => 'Delete'],'id' ,'desc');
		$this->data['icon']=$this->CommonModel->RetriveRecordByWhereRow('tbl_logo',['status' => 'Active','name'=>'Icons']); 
		$this->data['logo']=$this->CommonModel->RetriveRecordByWhereRow('tbl_logo',['status' => 'Active','name'=>'Logo']);
		$this->db->where('status','Active');
		$this->db->order_by('id','desc');
		$contact = $this->db->get('tbl_footercontact')->row();
		$this->data['contact_data']=$contact;
		$this->load->view('admin/layout/default', $this->data); 
	}
	public function client_add()
	{
			$title_name = $this->input->post('client_name');
			$link = $this->input->post('client_link');
			$description = $this->input->post('description');

			$count = $this->CommonModel->CountWhere('tbl_client',['title' => $title_name,'status<>'=>'Delete']);
			if($count == 0) 
			{
        	$client_upload_image='';
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
	 					$config['new_image']    = FCPATH.'/webroot/admin/images/client/'.$image_data['file_name'];
	                    $config['width'] = 655;
	                    $config['height'] = 468;
	                    $this->load->library('image_lib', $config);
                		$this->image_lib->clear();
						$this->image_lib->initialize($config);
						$client_upload_image=$image_data['raw_name'].'_thumb'.$image_data['file_ext']; //a_thumb.jpg
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
				'title' => $title_name,
				'description' => $description,
				'image' => $client_upload_image,
				'link' => $link,
				'description' => $description,
				'status' => "Active",
				'create_date' => date('Y-m-d H:i:s'),
				);

				$insertid = $this->CommonModel->insert($data,"tbl_client");
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
	      	$data=array(
	        'status'=>'Delete',
	        'update_date'=>date('Y-m-d H:i:s'),
	    	);
		  	$check=$this->CommonModel->UpdateRecord($data,'tbl_client','uniqcode',$uniqcode);
		  	$delete_file = $this->CommonModel->RetriveRecordByWhereRow('tbl_client',['uniqcode' => $uniqcode]);
		  	$file = FCPATH.'/webroot/admin/images/client/'.$delete_file->image;
			if (file_exists($file))
			{
				unlink($file);
			}
		  	if($check == 1)
		  	{
			 $this->session->set_flashdata('success', 'Client deleted successfully');
			  $this->client['client_data'] = $this->CommonModel->RetriveRecordByWhereOrderby('tbl_client',['status<>' => 'Delete'],'id' ,'desc');
		  	$this->load->view('admin/client/edit', $this->client);                     
		  	}
		  	else
		  	{
		  	$this->session->set_flashdata('error', 'client not deleted successfully');                     
		  	}

	}
	public function status()
	{		
        $uniqcode=$this->input->post('uniqcode'); 
     
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
		  	}
		  	else
		  	{
		  	$this->session->set_flashdata('error', 'Status not update');                     
		  	}
		     
	}
	public function edit_data()
	{
		$uniqcode=$this->input->post('uniqcode');
		$this->data['client_data'] = $this->CommonModel->RetriveRecordByWhere('tbl_client',['uniqcode' => $uniqcode]);
		$this->load->view('admin/client/update', $this->data); 
				

	}
	public function update_data()
	{
		$title_name = $this->input->post('client_name');
		$description = $this->input->post('description');
		$link = $this->input->post('client_link');
		$uniqcode = $this->input->post("uniqcode");
		$old_image = $this->input->post("old_image");		
	    $client_upload_image='';
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
				$client_upload_image=$image_data['raw_name'].'_thumb'.$image_data['file_ext']; //a_thumb.jpg
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
			'title' => $title_name,
			'image' => $client_upload_image,
			'link' => $link,
			'description' => $description,
			'update_date' => date('Y-m-d H:i:s'),
			);
		}
		else
		{
			$data=array(
			'title' => $title_name,
			'link' => $link,
			'description' => $description,
			'update_date' => date('Y-m-d H:i:s'),
			);
		}

		$update =$this->CommonModel->UpdateRecord($data,'tbl_client','uniqcode',$uniqcode); 
		if($update)
		{
			$this->session->set_flashdata('success', 'Client Updated successfully.');
			redirect('admin/client');
		}
		else
		{
			$this->session->set_flashdata('error', 'Client Updated Unsuccessfully.');
			redirect('admin/client');
		}
			

	}
}
?>