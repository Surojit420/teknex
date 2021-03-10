<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AppointmentController extends CI_Controller 
{
	function __construct() 
	 {

	 	parent::__construct(); 				
	 	 $this->load->helper(array('string'));	
	 	$this->load->model('CommonModel');	
		date_default_timezone_set('Asia/Kolkata');	
	 } 
	// public function index()
	// {		
	// 	$this->data['page_title']='TekNex | Banner';
	// 	$this->data['subview']='setting/banner/banner';
	// 	$this->data['banner_data'] = $this->CommonModel->RetriveRecordByWhereOrderby('tbl_banner',['status<>' => 'Delete'],'id' ,'desc');
	// 	$this->load->view('admin/layout/default', $this->data);
	// }
	public function appointment_add()
	{
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$description = $this->input->post('description');
		
		$data=array(
		'uniqcode' => random_string('alnum',20),
		'name' => $name,
		'email' => $email,
		'moblie_no' => $phone,
		'description' => $description,
		'status' => "Inactive",
		'create_date' => date('Y-m-d H:i:s'),
		);

		$insertid = $this->CommonModel->insert($data,"tbl_appointment");
		// if($insertid)
		// {
			$this->session->set_flashdata('success', 'Appointment added successfully.');
			redirect('/');
		// }
		// else
		// {
		// 	$this->session->set_flashdata('error', 'Appointment Name already exists!');
		// 	redirect('home');
		// }

	}
	// public function destroy()
	// {
	// 	$uniqcode = $this->input->post('uniqcode');
	//       	$data=array(
	//         'status'=>'Delete',
	//         'update_date'=>date('Y-m-d H:i:s'),
	//     	);
	// 	  	$check=$this->CommonModel->UpdateRecord($data,'tbl_banner','uniqcode',$uniqcode);
	// 	  	if($check == 1)
	// 	  	{
	// 		 $this->session->set_flashdata('success', 'Banner deleted successfully');
	// 		  $this->banner['banner_data'] = $this->CommonModel->RetriveRecordByWhereOrderby('tbl_banner',['status<>' => 'Delete'],'id' ,'desc');
	// 	  	$this->load->view('admin/setting/banner/edit', $this->banner);                     
	// 	  	}
	// 	  	else
	// 	  	{
	// 	  	$this->session->set_flashdata('error', 'Banner not deleted successfully');                     
	// 	  	}

	// }
	// public function status()
	// {		
    //     $uniqcode=$this->input->post('uniqcode');    
    //    $destroy_date = $this->CommonModel->RetriveRecordByWhereRow('tbl_banner',['uniqcode' => $uniqcode]);
    //    if($destroy_date->status == 'Active')
    //    {
	//         $data=array(
	// 			'status' => 'Inactive',
	// 			'update_date' => date('Y-m-d H:i:s'),
	//        );
    //    		$check= $this->CommonModel->UpdateRecord($data,'tbl_banner','uniqcode',$uniqcode); 
    //    }
    //    else
    //    {
	//        	$data=array(
	// 			'status' => 'Active',
	// 			'update_date' => date('Y-m-d H:i:s'),
	//        ); 
	//        	 $check =$this->CommonModel->UpdateRecord($data,'tbl_banner','uniqcode',$uniqcode); 
	// 	}
	// 	 if($check == 1)
	// 	  	{
	// 		 $this->session->set_flashdata('success', 'Status update successfully'); 
	// 		 echo "Status update successfully";
	// 		 $this->banner['banner_data'] = $this->CommonModel->RetriveRecordByWhereOrderby('tbl_banner',['status<>' => 'Delete'],'id' ,'desc');
	// 	  $this->load->view('admin/setting/banner/edit', $this->banner);                    
	// 	  	}
	// 	  	else
	// 	  	{
	// 	  	echo "Status not update";
	// 	  	$this->session->set_flashdata('error', 'Status not update');                     
	// 	  	}
		     
	// }
	// public function edit_data()
	// {
	// 	$uniqcode=$this->input->post('uniqcode');
	// 	$this->data['banner_data'] = $this->CommonModel->RetriveRecordByWhere('tbl_banner',['uniqcode' => $uniqcode]);
	// 	$this->load->view('admin/setting/banner/update', $this->data); 
				

	// }
	// public function update_data()
	// {
	// 	$title_name = $this->input->post('banner_name');
	// 	$description = $this->input->post('description');
	// 	$uniqcode = $this->input->post("uniqcode");
	// 	$old_image = $this->input->post("old_image");		
	//     $banner_upload_image='';
    // 	if(!empty($_FILES['image']['name']))
	// 	{
	// 		$config['upload_path']          = FCPATH.'/webroot/admin/images/uploadImage/';
    //         $config['allowed_types']        = '*';
    //         $config['encrypt_name'] 		= TRUE;
    //         $config['max_size']             = 1024;
    //         $config['file_name']          	= $_FILES['image']['name'];
    //         $this->load->library('upload', $config);
    //         $this->upload->initialize($config);
    //         if ($this->upload->do_upload('image'))
    //     	{
    //     		$image_data = $this->upload->data();
    //             $config['image_library'] = 'gd2';
    //             $config['source_image'] = $image_data['full_path']; 
    //             $config['create_thumb'] = TRUE;
	// 				$config['maintain_ratio'] = TRUE;
	// 				$config['new_image']    = FCPATH.'/webroot/admin/images/banner/'.$image_data['file_name'];
    //             $config['width'] = 655;
    //             $config['height'] = 468;
    //             $this->load->library('image_lib', $config);
    //     		$this->image_lib->clear();
	// 			$this->image_lib->initialize($config);
	// 			$banner_upload_image=$image_data['raw_name'].'_thumb'.$image_data['file_ext']; //a_thumb.jpg
	// 		    if (!$this->image_lib->resize())
	// 	     	{
    // 				$this->handle_error($this->image_lib->display_errors());
	// 				}
	// 			    $file = FCPATH.'/webroot/admin/images/uploadImage/'.$image_data['file_name'];
	// 			if (file_exists($file))
	// 			{
	// 				unlink($file);
	// 			}
	// 			$file = FCPATH.'/webroot/admin/images/banner/'.$old_image['file_name'];
	// 			if (file_exists($file))
	// 			{
	// 				unlink($file);
	// 			}
    //      	}

    //      	$data=array(
	// 		'title_name' => $title_name,
	// 		'image' => $banner_upload_image,
	// 		'description' => $description,
	// 		'update_date' => date('Y-m-d H:i:s'),
	// 		);
	// 	}
	// 	else
	// 	{
	// 		$data=array(
	// 		'title_name' => $title_name,
	// 		'description' => $description,
	// 		'update_date' => date('Y-m-d H:i:s'),
	// 		);
	// 	}

	// 	$update =$this->CommonModel->UpdateRecord($data,'tbl_banner','uniqcode',$uniqcode); 
	// 	if($update)
	// 	{
	// 		$this->session->set_flashdata('success', 'Bannar Updated successfully.');
	// 		redirect('admin/banner');
	// 	}
	// 	else
	// 	{
	// 		$this->session->set_flashdata('error', 'Bannar Updated Unsuccessfully.');
	// 		redirect('admin/banner');
	// 	}
			

	// }
	

}
