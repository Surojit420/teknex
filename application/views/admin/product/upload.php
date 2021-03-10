<?php 
 foreach ($product_data as $key => $value) {
                   
?>
<div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Project</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form action="<?=base_url()?>admin/product/product_update" id="product" method="post" enctype="multipart/form-data">
                                <div class="row">
                                     <div class="col-lg-12 text-center">
                                        <div class="form-group"> 
                                            <input type="hidden" value="<?=$value->uniqcode?>" name="uniqcode">
                                         <input type="hidden" name="old_image" value="<?=$value->image?>">
                                           <img src="<?=base_url()?>webroot/admin/images/product/<?=$value->image?>" id="upload_product" onclick="get_upload('product_image')" class="add_img_button">
                                            <input type="file" class="image-upload select_image" name="image" class="validate[required]" id="product_image" style="display: none" accept=".jpg,.jpeg,.png" onchange="show_photo(this,'product_image','upload_product')" value="<?=$value->image?>">
                                            <span id="image_required" class="formErrorContent1 formErrorArrowBottom1" style="display: none;">Image is required</span>    
                                        </div> 
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Project Name</label>
                                            <input type="text" name="product_name" id="product_name" class="form-control validate[required]" data-errormessage-value-missing="Project name is required" data-prompt-position="bottomLeft"  value="<?=$value->title?>" placeholder="Enter Project name" maxlength="200">     
                                        </div> 
                                    </div>
                                     <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Link</label>
                                            <input type="text" name="product_link" id="product_link" class="form-control validate[required]" data-errormessage-value-missing="Project link is required" data-prompt-position="bottomLeft" value="<?=$value->link?>" placeholder="Enter Project link" maxlength="200">     
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
                                    <button type="submit" class="btn btn-primary" style="margin-left: 756px;" onclick="checkfile('product_image')"><strong>Save<strong></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <?php } ?>
                    <script>
                    $(function () 
                    {                
                     $("#product").validationEngine();
                });
                    </script>
