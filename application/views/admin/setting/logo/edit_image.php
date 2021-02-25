<div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Logo</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form  action="'.base_url().'admin/logo/update'.'" id="logo" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-12 text-center">
                                        <div class="form-group"> 
                                           <img src="'.base_url().'webroot/admin/images/logo/'.$logo_row->image.'" id="upload_logo" onclick="get_upload_logo()" class="add_img_button">
                                            <input type="file" class="image-upload select_image" name="image" class="validate[required]" id="logo_input_upload" style="display: none" accept=".jpg,.jpeg,.png" onchange="logo_show_photo(this)">
                                            <span id="image_required" class="formErrorContent1 formErrorArrowBottom1" style="display: none;">Image is required</span>    
                                        </div> 
                                    </div>
                                         <div class="form-group">
                                            <label>Logo Name</label>
                                            <input type="text" name="logo_name" id="logo_name" class="form-control validate[required]" data-errormessage-value-missing="Logo name is required" data-prompt-position="bottomLeft" placeholder="Enter Logo name" maxlength="200" value='.$logo_row->name.'>     
                                        </div> 
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <button class="btn btn-warning btn-primary pull-right m-t-n-xs grediant-btn" type="reset"><strong>Cancel</strong></button>
                                    <button type="submit" class="btn btn-primary" style="margin-left: 756px;" onclick="checklogo()"><strong>Save<strong></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <script>
                    $(function () 
					{                
   					 $("#logo").validationEngine();
				});
                    </script>