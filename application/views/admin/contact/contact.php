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
                            <h4 class="card-title">contact</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form action="<?=base_url()?>admin/contact_add" id="contact" method="post" enctype="multipart/form-data">
                                <div class="row">
                                  <div class="col-lg-12 text-center">
                                    <div class="form-group">
                                        <img src="<?=base_url()?>webroot/admin/logo/Add-Photo-Button.png" id="upload_contact" onclick="get_upload('contact_image')" class="add_img_button">
                                            <input type="file" class="image-upload select_image" name="image" class="validate[required]" id="contact_image" style="display: none" accept=".jpg,.jpeg,.png" onchange="show_photo(this,'contact_image','upload_contact')">
                                            <span id="image_required" class="formErrorContent1 formErrorArrowBottom1" style="display: none;">Image is required</span>
                                    </div>
                                  </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Company Name</label>
                                            <input type="text" name="name" id="contact_name" class="form-control validate[required]" data-errormessage-value-missing="Company name is required" data-prompt-position="bottomLeft" placeholder="Enter Company name" maxlength="200">     
                                        </div> 
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Company Phone</label>
                                            <input type="text" name="phone" id="contact_phone" class="form-control validate[required]" data-errormessage-value-missing="Company phone is required" data-prompt-position="bottomLeft" placeholder="Enter Company Phone" maxlength="200">     
                                        </div> 
                                    </div>
                                     <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Company Email</label>
                                            <input type="text" name="email" id="contact_email" class="form-control validate[required]" data-errormessage-value-missing="Company email is required" data-prompt-position="bottomLeft" placeholder="Enter Company email" maxlength="200">     
                                        </div> 
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Company address</label>
                                            <input type="text" name="address" id="contact_address" class="form-control validate[required]" data-errormessage-value-missing="Company address is required" data-prompt-position="bottomLeft" placeholder="Enter Company address" maxlength="200">     
                                        </div> 
                                    </div>
                                    <div class="col-lg-12">
                                       <div class="form-group">
                                           <label>Description</label>
                                           <textarea rows="2" cols="30"  name="description" id="description" class="form-control validate[required]" data-errormessage-value-missing="Description is required" data-prompt-position="bottomLeft"placeholder="Enter description" ></textarea> 
                                       </div> 
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <button class="btn btn-warning btn-primary pull-right m-t-n-xs grediant-btn" type="reset"><strong>Cancel</strong></button>
                                    <button type="submit" class="btn btn-primary save_submit" style="margin-left: 756px;" onclick="checkfile('contact_image')"><strong>Save<strong></button>
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
                        <h4 class="card-title">contact Data</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 854px">
                                <thead>
                                    <tr>
                                       <th>Index</th>
                                       <th>Company Name</th>
                                       <th>Company Email</th>
                                       <th>Company Address</th>
                                       <th>Company Phone</th>
                                       <th>Description</th>
                                       <th>Images</th>
                                       <th>Status</th>
                                       <th>Action</th> 
                                    </tr>
                                </thead>
                                <tbody id="edit">
                                    <?php 
                                    foreach ($company_data as $key => $value) { ?>
                                            <tr>
                                        <td><?=$key+1?></td>
                                        <td><?=$value->name?></td>
                                        <td><?=$value->email?></td>
                                         <td><?=$value->address?></td>
                                        <td><?=$value->phone?></td>
                                        <td> <?php
                                        if(!empty($value->description))
                                        {
                                            $description = strlen($value->description) > 8 ? substr($value->description,0,8)."..." : $value->description;

                                        ?>
                                        <div id="more_ks_desc_<?=$value->uniqcode?>" >
                                            <?php
                                                echo $description.'...';
                                            ?>
                                            <?php
                                                echo '<a href="javascript:void(0)" onclick="show_more_ks_desc(\''.$value->uniqcode.'\')">more</a>';
                                            ?>
                                        </div>
                                        <div id="less_ks_desc_<?=$value->uniqcode?>" style="display: none" class="all_seller_table_width">
                                            <?php
                                                echo $value->description;
                                            ?>
                                            <?php
                                                echo '<a onclick="show_less_ks_desc(\''.$value->uniqcode.'\')" href="javascript:void(0)">less</a>';
                                            ?>
                                        </div>
                                        <?php } ?></td>
                                        <td>
                                            <img src="<?=base_url()?>webroot/admin/images/contact/<?=$value->image?>" class="showTableImage" id="product_img">
                                        </td>
                                        <td>
                                            <input type="checkbox" class="js-switch" onchange="common_status_change(this.value,'/status')" id="status" value="<?=$value->uniqcode?>" <?=$value->status == 'Active' ? 'checked' : ''?> /></td>
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
