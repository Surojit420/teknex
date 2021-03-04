  <?php
  foreach ($aboutus_data as $key => $value) 
  {
   
   ?>
  <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">About Us</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form action="<?=base_url()?>admin/aboutus/aboutus_update" id="aboutus" method="post" enctype="multipart/form-data">
                                <div class="row">
                                  <div class="col-lg-12 text-center">
                                    <div class="form-group">
                                        <input type="hidden" name="uniqcode" value="<?=$value->uniqcode?>">
                                  <input type="hidden" name="old_image" value="<?=$value->image?>">
                                        <img src="<?=base_url()?>webroot/admin/images/aboutus/<?=$value->image?>" id="upload_aboutus" onclick="get_upload('aboutus_image')" class="add_img_button">
                                            <input type="file" class="image-upload select_image" name="image" class="validate[required]" id="aboutus_image" style="display: none" accept=".jpg,.jpeg,.png" onchange="show_photo(this,'aboutus_image','upload_aboutus')">
                                            <span id="image_required" class="formErrorContent1 formErrorArrowBottom1" style="display: none;">Image is required</span>
                                    </div>
                                  </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Company Name</label>
                                            <input type="text" name="company_name" id="company_name" class="form-control validate[required]" data-errormessage-value-missing="company name is required" data-prompt-position="bottomLeft" placeholder="Enter company name" maxlength="200" value="<?=$value->company_name?>">     
                                        </div> 
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>About Title</label>
                                            <input type="text" name="about_title" id="about_title" class="form-control validate[required]" data-errormessage-value-missing="About Title is required" data-prompt-position="bottomLeft" placeholder="Enter About Title" maxlength="200" value="<?=$value->about_title?>">     
                                        </div> 
                                    </div>
                                    <div class="col-lg-12">
                                       <div class="form-group">
                                           <label>Description</label>
                                           <textarea rows="2" cols="30" style="resize: none;"  name="description" id="description" class="form-control validate[required]" data-errormessage-value-missing="Description is required" data-prompt-position="bottomLeft" placeholder="Enter description" ><?=$value->description?></textarea> 
                                       </div> 
                                    </div>
                                    <div class="col-lg-12">
                                       <div class="form-group">
                                           <label> Short Description</label>
                                           <textarea rows="2" cols="30" style="resize: none;"  name="short_description" id="short_description" class="form-control validate[required]" data-errormessage-value-missing="Short Description is required" data-prompt-position="bottomLeft" placeholder="Enter Short description" ><?=$value->short_description?></textarea> 
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
                    <?php } ?>