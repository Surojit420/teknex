<?php foreach ($logo_data as $key => $value) {
 ?>
<div class="container-fluid">
        <div class="row">
            <div id="edit_data">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Logo</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form action="<?=base_url()?>admin/logo/logo_update" id="logo" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-12 text-center">
                                        <div class="form-group"> 
                                            <input type="hidden" value="<?=$value->uniqcode?>" name="uniqcode">
                                         <input type="hidden" name="old_image" value="<?=$value->image?>">
                                           <img src="<?=base_url()?>webroot/admin/images/logo/<?=$value->image?>" id="upload_logo" onclick="get_upload('logo_image')" class="add_img_button">
                                            <input type="file" class="image-upload select_image" name="image" class="validate[required]" id="logo_image" style="display: none" accept=".jpg,.jpeg,.png" onchange="show_photo(this,'logo_image','upload_logo')">
                                            <span id="image_required" class="formErrorContent1 formErrorArrowBottom1" style="display: none;">Image is required</span>    
                                        </div> 
                                    </div>
                                     <div class="form-group">
                                                <select class="form-control form-control-lg" name="logo_name">
                                                 <?php   
                                            
                                                    if($value->name == "Logo")
                                                    {
                                                        ?>
                                                         <option value="Logo">Logo</option>
                                                        <option value="Icons">Icons</option>
                                                        <?php
                                                    }
                                                    else
                                                    { 
                                                        ?>
                                                        <option value="Icons">Icons</option>
                                                         <?php
                                                     }

                                                ?>
                                                </select>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <button class="btn btn-warning btn-primary pull-right m-t-n-xs grediant-btn" type="reset"><strong>Cancel</strong></button>
                                    <button type="submit" class="btn btn-primary save_submit" style="margin-left: 756px;" onclick="checkfile('logo_image')"><strong>Save<strong></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <?php
}
    ?>