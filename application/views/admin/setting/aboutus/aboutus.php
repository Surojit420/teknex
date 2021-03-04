<!-------------------------------------------load page----------------------------------------------------->
 <?php
            if($this->session->flashdata('success'))
            {
                $this->load->view('admin/msg/success');
            }
            if($this->session->flashdata('error'))
            {                
                $this->load->view('admin/msg/error'); 
            }
?> 
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div id="edit_data">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">About Us</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form action="<?=base_url()?>admin/aboutus_add" id="aboutus" method="post" enctype="multipart/form-data">
                                <div class="row">
                                  <div class="col-lg-12 text-center">
                                    <div class="form-group">
                                        <img src="<?=base_url()?>webroot/admin/logo/Add-Photo-Button.png" id="upload_aboutus" onclick="get_upload('aboutus_image')" class="add_img_button">
                                            <input type="file" class="image-upload select_image" name="image" class="validate[required]" id="aboutus_image" style="display: none" accept=".jpg,.jpeg,.png" onchange="show_photo(this,'aboutus_image','upload_aboutus')">
                                            <span id="image_required" class="formErrorContent1 formErrorArrowBottom1" style="display: none;">Image is required</span>
                                    </div>
                                  </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Company Name</label>
                                            <input type="text" name="company_name" id="company_name" class="form-control validate[required]" data-errormessage-value-missing="company name is required" data-prompt-position="bottomLeft" placeholder="Enter company name" maxlength="200">     
                                        </div> 
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>About Title</label>
                                            <input type="text" name="about_title" id="about_title" class="form-control validate[required]" data-errormessage-value-missing="About Title is required" data-prompt-position="bottomLeft" placeholder="Enter About Title" maxlength="200">     
                                        </div> 
                                    </div>
                                    <div class="col-lg-12">
                                       <div class="form-group">
                                           <label>Description</label>
                                           <textarea rows="2" cols="30"     name="description" id="description" class="form-control validate[required]" data-errormessage-value-missing="Description is required" data-prompt-position="bottomLeft" placeholder="Enter description" ></textarea> 
                                       </div> 
                                    </div>
                                    <div class="col-lg-12">
                                       <div class="form-group">
                                           <label> Short Description</label>
                                           <textarea rows="2" cols="30"     name="short_description" id="short_description" class="form-control validate[required]" data-errormessage-value-missing="Short Description is required" data-prompt-position="bottomLeft" placeholder="Enter Short description" ></textarea> 
                                       </div> 
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <button class="btn btn-warning btn-primary pull-right m-t-n-xs grediant-btn" type="reset"><strong>Cancel</strong></button>
                                    <button type="submit" class="btn btn-primary" style="margin-left: 756px;" onclick="checkfile('aboutus_image')"><strong>Save<strong></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">aboutus Data</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 854px">
                                <thead>
                                    <tr>
                                       <th>Index</th>
                                       <th>Company Name</th>
                                       <th>Aboutus Title</th>
                                       <th>Images</th>
                                       <th>Description</th>
                                       <th> Short Description</th>
                                       <th>Action</th> 
                                    </tr>
                                </thead>
                                <tbody id="edit">
                                    <?php foreach ($aboutus_data as $key => $value) { ?>
                                            <tr>
                                        <td><?=$key+1?></td>
                                        <td><?=$value->company_name?></td>
                                        <td><div class="all_seller_table_width">
                                            <?=$value->description?>
                                          </div></td>
                                        <td>
                                            <img src="<?=base_url()?>webroot/admin/images/aboutus/<?=$value->image?>" class="showTableImage" id="product_img">
                                        </td>
                                        <td>
                                            <?=$value->description?>
                                        </td>
                                        <td>
                                             <?=$value->short_description?>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="javascript:void(0)" class="btn btn-primary shadow btn-xs sharp mr-1" onclick="edit_action('<?=$value->uniqcode?>','/edit')" id="get_action_val_<?=$value->uniqcode?>"> <i class="fa fa-pencil"></i></a>

                                                <a href="javascript:void(0)" onclick="delete_action('<?=$value->uniqcode?>','/destroy')" class="btn btn-danger shadow btn-xs sharp" value="<?=$value->uniqcode?>"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>    
                                    </tr>
                                    <?php  } ?>
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</div>
