 <?php
foreach ($contact_data as $key => $value) {
 ?>
 <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">contact</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form action="<?=base_url()?>admin/contact/contact_update" id="contact" method="post" enctype="multipart/form-data">
                                <div class="row">
                                  <div class="col-lg-12 text-center">
                                     <div class="form-group">
                                         <input type="hidden" value="<?=$value->uniqcode?>" name="uniqcode">
                                         <input type="hidden" name="old_image" value="<?=$value->image?>">
                                        <img src="<?=base_url()?>webroot/admin/images/contact/<?=$value->image?>" id="upload_contact" onclick="get_upload('contact_image')" class="add_img_button">
                                            <input type="file" class="image-upload select_image" name="image" class="validate[required]" id="contact_image" style="display: none" accept=".jpg,.jpeg,.png" onchange="show_photo(this,'contact_image','upload_contact')">
                                            <span id="image_required" class="formErrorContent1 formErrorArrowBottom1" style="display: none;">Image is required</span>
                                    </div>
                                  </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Company Name</label>
                                            <input type="text" name="name" id="contact_name" class="form-control validate[required]" data-errormessage-value-missing="Company name is required" data-prompt-position="bottomLeft" placeholder="Enter Company name" maxlength="200" value="<?=$value->name?>">     
                                        </div> 
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Company Phone</label>
                                            <input type="text" name="phone" id="contact_phone" class="form-control validate[required]" data-errormessage-value-missing="Company phone is required" data-prompt-position="bottomLeft" placeholder="Enter Company Phone" maxlength="200" value="<?=$value->phone?>">     
                                        </div> 
                                    </div>
                                     <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Company Email</label>
                                            <input type="text" name="email" id="contact_email" class="form-control validate[required]" data-errormessage-value-missing="Company email is required" data-prompt-position="bottomLeft" placeholder="Enter Company email" maxlength="200" value="<?=$value->email?>">     
                                        </div> 
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Company address</label>
                                            <input type="text" name="address" id="contact_address" class="form-control validate[required]" data-errormessage-value-missing="Company address is required" data-prompt-position="bottomLeft" placeholder="Enter Company address" maxlength="200" value="<?=$value->address?>">     
                                        </div> 
                                    </div>
                                    <div class="col-lg-12">
                                       <div class="form-group">
                                           <label>Description</label>
                                           <textarea rows="2" cols="30"      name="description" id="description" class="form-control validate[required]" data-errormessage-value-missing="Description is required" data-prompt-position="bottomLeft"placeholder="Enter description" ><?=$value->description?></textarea> 
                                       </div> 
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <button class="btn btn-warning btn-primary pull-right m-t-n-xs grediant-btn" type="reset"><strong>Cancel</strong></button>
                                    <button type="submit" class="btn btn-primary" style="margin-left: 756px;" onclick="checkfile('contact_image')"><strong>Save<strong></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <script>
                    $(function () 
                    {                
                     $("#contact").validationEngine();
                });
                    </script>
                    <?php  } ?>
