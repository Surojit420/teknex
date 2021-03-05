<?php 
   
foreach ($banner_data as $key => $value) { ?>
<div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Banner</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form action="<?=base_url()?>admin/banner/banner_update" id="banner" method="post" enctype="multipart/form-data">
                                  <input type="hidden" name="uniqcode" value="<?=$value->uniqcode?>">
                                  <input type="hidden" name="old_image" value="<?=$value->image?>">
                                <div class="row">
                                  <div class="col-lg-12 text-center">
                                    <div class="form-group">
                                        
                                        <img src="<?=base_url()?>webroot/admin/images/banner/<?=$value->image?>" id="upload_banner" onclick="get_upload('banner_image')" class="add_img_button">
                                            <input type="file" class="image-upload select_image" name="image" class="validate[required]" id="banner_image" style="display: none" accept=".jpg,.jpeg,.png" onchange="show_photo(this,'banner_image','upload_banner')" value="<?=$value->image?>">
                                            <span id="image_required" class="formErrorContent1 formErrorArrowBottom1" style="display: none;">Image is required</span>
                                    </div>
                                  </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Banner Name</label>
                                            <input type="text" name="banner_name" id="banner_name" class="form-control validate[required]" data-errormessage-value-missing="Banner name is required" data-prompt-position="bottomLeft" value="<?=$value->title_name?>" placeholder="Enter Banner name" maxlength="200">     
                                        </div>
                                         <div class="form-group">
                                            Banner Type
                                        <select class="form-control form-control-lg" name="banner_type">

                                            <option value="Home Banner" <?=$value->banner_type == 'Home Banner' ? 'selected' : ''?>>Home Banner</option>
                                                <option value="About" <?=$value->banner_type == 'About' ? 'selected' : ''?>>About</option>
                                                <option value="Blog" <?=$value->banner_type == 'Blog' ? 'selected' : ''?>>Blog</option>
                                                <option value="Testimonials" <?=$value->banner_type == 'Testimonials' ? 'selected' : ''?>>Testimonials</option>
                                        </select>
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
                                    <button type="submit" class="btn btn-primary" style="margin-left: 756px;" onclick="checkbanner()"><strong>Save<strong></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <script>
                    $(function () 
					{                
   					 $("#banner").validationEngine();
				});
                    </script>'
                    <?php } ?>
