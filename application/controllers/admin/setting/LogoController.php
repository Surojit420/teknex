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
		$this->data['page_title'] = 'TekNex | Logo';
		$this->data['logo_data'] = $this->CommonModel->RetriveRecordByWhereOrderby('tbl_logo',['status<>' => 'Delete'],'id' ,'desc');
		$this->data['type_data'] = $this->CommonModel->RetriveRecordByWhereRow('tbl_logo',['status<>' => 'Delete']);
		$this->data['hide_data'] = $this->CommonModel->CountWhere('tbl_logo',['status<>' => 'Delete']);
		$this->data['subview'] = 'setting/logo/logo';
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

   //      		$data=array(
			// 'status' => 'Inactive',
			// 'update_date' => date('Y-m-d H:i:s'),
   //     			);
   //     			$this->CommonModel->UpdateRecord($data,'tbl_logo','status','Active'); 
        		$data=array(
				'uniqcode' => random_string('alnum',20),
				'image'=>$logo_upload_image,
				'name' => $name,
				'status' => "Active",
				'create_date' => date('Y-m-d H:i:s'),
				);

				$insertid = $this->CommonModel->insert($data,"tbl_logo");
				// echo $insertid;
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
		  //       $active = $this->db->get('tbl_logo');		
    // 			$active_row = $active->num_rows(); 
    // 			if($active_row==0)
    // 			{
				// 	$this->db->where('status <>', 'Delete');
				// 	$this->db->where('name', $name);
			 //        $query = $this->db->get('tbl_logo');		
	   //  			$count_row = $query->num_rows(); 
	   //  			print_r($data);
				//   	if($count_row == 0) 
	   //            	{
	   //   //          		$this->db->insert('tbl_logo', $data);
	   //   //          		$this->session->set_flashdata('success', 'Logo added successfully.');	
				// 		// redirect('admin/logo');
	   //            	}
	   //            	else
	   //            	{
	   //            		$this->session->set_flashdata('error', 'Logo name already exists!');	
				// 		//redirect('admin/logo');
	   //            	}
    //           	}
	   //          else
	   //          {
	   //          	$this->session->set_flashdata('error', 'Logo already exists!');	
				// 	//redirect('admin/logo');
	   //          }
    //         }
    //         else
    //         {
    //         	$this->session->set_flashdata('error', 'Please fill in all the files!');	
				// //redirect('admin/logo');
    //         }	
	}
	public function edit_data()
	{
		$uniqcode=$this->input->post('uniqcode');
		$name=$this->input->post('name');
		$logo_row[] = $this->CommonModel->RetriveRecordByWhereRow('tbl_logo',['uniqcode' => $uniqcode]);
		$this->load->view('admin/setting/footer_contact/update', $this->data); 
	}
	public function status()
	{		
        $uniqcode=$this->input->post('uniqcode'); 
       //echo $uniqcode;    
       //$this->CommonModel->GetRecordSql("selet * from tbl_logo ") 
   //     $data=array(
			// 'status' => 'Inactive',
			// 'update_date' => date('Y-m-d H:i:s'),
   //     );
   //     $this->CommonModel->UpdateRecord($data,'tbl_logo','status','Active'); 
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
		//echo $check;
	  	}
	  	else
	  	{
	  	$this->session->set_flashdata('error', 'Status not update');                     
		//echo $check;
	  	}
	  	
	     
	}
	public function destroy($uniqcode)
	{
		//$uniqcode = $this->input->post('uniqcode');
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
		  	$check=$this->CommonModel->UpdateRecord($data,'tbl_logo','uniqcode',$uniqcode);
		  	//echo $check;
		  	if($check == 1)
		  	{
			 $this->session->set_flashdata('success', 'Logo deleted successfully');
		// 	  $this->logo['logo_data'] = $this->CommonModel->RetriveRecordByWhereOrderby('tbl_logo',['status<>' => 'Delete'],'id' ,'desc');
		// $this->logo['type_data'] = $this->CommonModel->RetriveRecordByWhereRow('tbl_logo',['status<>' => 'Delete']);
		// $this->logo['hide_data'] = $this->CommonModel->CountWhere('tbl_logo',['status<>' => 'Delete']);

		  	//$this->load->view('admin/setting/logo/edit', $this->logo);                     
			 redirect('admin/logo');
		  	}
		  	else
		  	{
		  	$this->session->set_flashdata('error', 'Logo not deleted successfully');                     
			redirect('admin/logo');
		  	}
		  // }

	}


}
