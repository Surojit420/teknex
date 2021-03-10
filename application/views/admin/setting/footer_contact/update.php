<?php
foreach ($footercontact_data as $key => $value) {
 
?>
<div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Footer & Contact</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form  action="<?=base_url()?>admin/footercontact/footercontact_update" id="fot_contact" method="post" enctype="multipart/form-data">
                                <div class="row">
                                  <div class="col-lg-12 text-center">
                                    <div class="form-group">
                                      <input type="hidden" name="uniqcode" value="<?=$value->uniqcode?>">
                                  <input type="hidden" name="old_image" value="<?=$value->image?>">
                                        <img src="<?=base_url()?>webroot/admin/images/footercontact/<?=$value->image?>" id="upload_fot_contact" onclick="get_upload('fot_contact_image')" class="add_img_button">
                                            <input type="file" class="image-upload select_image" name="image" class="validate[required]" id="fot_contact_image" style="display: none" accept=".jpg,.jpeg,.png" onchange="show_photo(this,'fot_contact_image','upload_fot_contact')">
                                            <span id="image_required" class="formErrorContent1 formErrorArrowBottom1" style="display: none;">Image is required</span>
                                    </div>
                                  </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" name="email" id="email" class="form-control validate[required,custom[email]]" data-errormessage-value-missing="Email is required" data-prompt-position="bottomLeft" placeholder="Enter email" maxlength="200" value="<?=$value->email?>">      
                                        </div> 
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input type="text" name="phone_no" id="phone_no" class="form-control validate[required,custom[phone],minSize[10],maxSize[10]]" data-errormessage-value-missing="Phone no is required" data-prompt-position="bottomLeft"  value="<?=$value->phone?>" placeholder="Enter phone no" maxlength="200">     
                                        </div> 
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Footer Copyright</label>
                                            <input type="text" name="footer_copy_right" id="footer_copy_right" class="form-control validate[required]" data-errormessage-value-missing="Footer copy right" data-prompt-position="bottomLeft" placeholder="Enter footer copyright" maxlength="200" value="<?=$value->footer_copyright?>">     
                                        </div> 
                                    </div>
                                    <div class="col-lg-12">
                                       <div class="form-group">
                                           <label>Contact Address</label>
                                           <textarea rows="2" cols="30" style="resize: none;"  name="address" id="address" class="form-control validate[required]" data-errormessage-value-missing="Address is required" data-prompt-position="bottomLeft"placeholder="Enter contact address" ><?=$value->contact_address?></textarea> 
                                       </div> 
                                    </div>
                                    <div class="col-lg-12">
                                       <div class="form-group">
                                           <label>Short About</label>
                                           <textarea rows="2" cols="30" name="about_us" id="about_us" class="form-control validate[required]" data-errormessage-value-missing="About is required" data-prompt-position="bottomLeft"placeholder="Enter about us" ><?=$value->about_us?></textarea> 
                                       </div> 
                                    </div> 
                                    <!-- <div class="col-lg-12"> 
                                       <div class="form-group">
                                           <label>Contact Us</label>
                                           <textarea rows="2" cols="30" style="resize: none;"  name="contact_us" id="contact_us" class="form-control validate[required]" data-errormessage-value-missing="Contact is required" data-prompt-position="bottomLeft"placeholder="Enter contact us" ><?=$value->contact_us?></textarea> 
                                       </div> 
                                    </div> -->
                                     <div class="col-lg-12">
                                       <div class="form-group">
                                           <label>Contact Map Iframe</label>
                                           <textarea rows="2" cols="30" style="resize: none;"  name="contact_map" id="contact_map" class="form-control" data-errormessage-value-missing="Contact map iframe" data-prompt-position="bottomLeft"placeholder="Enter map iframe" ><?=$value->map?></textarea> 
                                       </div> 
                                    </div>
                                    <?php 
                                   // echo $value->social;
                                      $social=array();
                                      $social= unserialize($value->social);
                                      //print_r($social);
                                    foreach ($social as $keys => $values) {
                                      //echo $key;
                                    ?>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            Icones
                                        <select class="form-control form-control-lg selectpicker" name="<?=$keys?>">
                                            <option selected="true" data-content="<i class='fa fa-<?=$keys?>' aria-hidden='true'></i> <?=$keys?>" ></option> 
                                        </select>
                                    </div> 
                                    </div>
                                     <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Link</label>
                                            <input type="text" name="<?=$keys?>" id="link" class="form-control validate[required]" data-errormessage-value-missing="link is required" data-prompt-position="bottomLeft" placeholder="<?=$key?> link" maxlength="200" value="<?=$values?>">     
                                        </div>
                                    </div>
                                  <?php } ?>
                                     <!-- <div class="col-lg-6">
                                        <div class="form-group">
                                            Icones
                                        <select class="form-control form-control-lg" name="twitter">
                                                 <option data-content="<i class='fa fa-twitter' aria-hidden='true'></i> Twitter" value="Twitter"></option>
                                        </select>
                                    </div> 
                                    </div>
                                       <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Link</label>
                                            <input type="text" name="twitter_link" id="link" class="form-control validate[required]" data-errormessage-value-missing="link is required" data-prompt-position="bottomLeft" placeholder="twitter link" maxlength="200">     
                                        </div>
                                    </div>
                                     <div class="col-lg-6">
                                        <div class="form-group">
                                            Icones
                                        <select class="form-control form-control-lg" name="pinterest">
                                                 <option data-content="<i class='fa fa-pinterest-p' aria-hidden='true'></i> Pinterest" value="Pinterest"></option>                          
                                        </select>
                                    </div> 
                                    </div>
                                       <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Link</label>
                                            <input type="text" name="pin_link" id="link" class="form-control validate[required]" data-errormessage-value-missing="link is required" data-prompt-position="bottomLeft" placeholder="pinterest link" maxlength="200">     
                                        </div>
                                    </div>
                                     <div class="col-lg-6">
                                        <div class="form-group">
                                            Icones
                                        <select class="form-control form-control-lg" name="instagram">
                                          
                                                 <option data-content="<i class='fa fa-instagram' aria-hidden='true'></i> Instagram" value="Instagram"></option>
                                                
                                        </select>
                                    </div> 
                                    </div>
                                       <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Link</label>
                                            <input type="text" name="ins_link" id="link" class="form-control validate[required]" data-errormessage-value-missing="link is required" data-prompt-position="bottomLeft" placeholder="instagram link" maxlength="200">     
                                        </div>
                                    </div> -->

                                </div>
                                <div class="col-sm-12">
                                    <button class="btn btn-warning btn-primary pull-right m-t-n-xs grediant-btn" type="reset"><strong>Cancel</strong></button>
                                    <button type="submit" class="btn btn-primary" style="margin-left: 756px;" onclick="checkfile('fot_contact_image')"><strong>Save<strong></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <script>
                    $(function () 
                    {                
                     $("#fot_contact").validationEngine();
                });
                    </script>
                    <?php } ?>