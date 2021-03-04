<?php foreach ($service_data as $key => $value) { ?>
<div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Service</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form action="<?=base_url()?>admin/service/service_update" id="service" method="post" enctype="multipart/form-data">
                                <div class="row">
                                  <div class="col-lg-12 text-center">
                                    <div class="form-group">
                                        <input type="hidden" value="<?=$value->uniqcode?>" name="uniqcode">
                                         <input type="hidden" name="old_image" value="<?=$value->image?>">
                                        <img src="<?=base_url()?>webroot/admin/images/service/<?=$value->image?>" id="upload_service" onclick="get_upload('service_image')" class="add_img_button">
                                            <input type="file" class="image-upload select_image" name="image" class="validate[required]" id="service_image" style="display: none" accept=".jpg,.jpeg,.png" onchange="show_photo(this,'service_image','upload_service')" value="<?=$value->image?>">
                                            <span id="image_required" class="formErrorContent1 formErrorArrowBottom1" style="display: none;">Image is required</span>
                                    </div>
                                  </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>service Name</label>
                                            <input type="text" name="service_name" id="service_name" class="form-control validate[required]" data-errormessage-value-missing="service name is required" data-prompt-position="bottomLeft" value="<?=$value->title_name?>" placeholder="Enter service name" maxlength="200">     
                                        </div> 
                                    </div>
                                    <div class="col-lg-12">
                                       <div class="form-group">
                                           <label>Description</label>
                                           <textarea rows="2" cols="30" style="resize: none;"  name="description" id="description" class="form-control validate[required]" data-errormessage-value-missing="Description is required" data-prompt-position="bottomLeft"placeholder="Enter description" ><?=$value->description?></textarea> 
                                       </div> 
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <button class="btn btn-warning btn-primary pull-right m-t-n-xs grediant-btn" type="reset"><strong>Cancel</strong></button>
                                    <button type="submit" class="btn btn-primary" style="margin-left: 756px;" onclick="checkservice('service_image')"><strong>Save<strong></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <script>
                    $(function () 
					{                
   					 $("#service").validationEngine();
				});
                    </script>
                    <?php } ?>