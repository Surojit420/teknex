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
                            <h4 class="card-title">Banner</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form  action="/admin/admin/add_banner" id="banner" method="post" enctype="multipart/form-data">
                                <div class="row">
                                  <div class="col-lg-12 text-center">
                                    <div class="form-group">
                                        <img src="<?=base_url()?>/webroot/admin/logo/Add-Photo-Button.png" id="upload_banner" onclick="get_upload_banner()" class="add_img_button">
                                            <input type="file" class="image-upload select_image" name="image" class="validate[required]" id="banner_input_upload" style="display: none" accept=".jpg,.jpeg,.png" onchange="banner_show_photo(this)">
                                            <span id="image_required" class="formErrorContent1 formErrorArrowBottom1" style="display: none;">Image is required</span>
                                    </div>
                                  </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Banner Name</label>
                                            <input type="text" name="banner_name" id="banner_name" class="form-control validate[required]" data-errormessage-value-missing="Banner name is required" data-prompt-position="bottomLeft" placeholder="Enter Banner name" maxlength="200">     
                                        </div> 
                                    </div>
                                    <div class="col-lg-12">
                                       <div class="form-group">
                                           <label>Description</label>
                                           <textarea rows="2" cols="30" style="resize: none;"  name="description" id="description" class="form-control validate[required]" data-errormessage-value-missing="Description is required" data-prompt-position="bottomLeft"placeholder="Enter description" ></textarea> 
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
                </div>
            </div>
        </div>
    </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Banner Data</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 854px">
                                <thead>
                                    <tr>
                                       <th>Index</th>
                                       <th>Banner Name</th>
                                       <th>Description</th>
                                       <th>Images</th>
                                       <th>Status</th>
                                       <th>Action</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                                                    <tr>
                                        <td>1</td>
                                        <td></td>
                                        <td><div class="all_seller_table_width">
                                            
                                          </div></td>
                                        <td>
                                            <img src="/admin/webroot/admin/banner/1cecb80963b0ef4085aa9c0e85607d81_thumb.png" class="showTableImage" id="product_img">
                                        </td>
                                        <td>
                                            <input type="checkbox" class="js-switch" onchange="common_status_change(this.value)" id="status" value="ylWTzVAu2K1MBkiIwGp0rvZURmLJs4" checked /></td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="javascript:void(0)" class="btn btn-primary shadow btn-xs sharp mr-1" onclick="edit_action('ylWTzVAu2K1MBkiIwGp0rvZURmLJs4')" id="get_action_val_ylWTzVAu2K1MBkiIwGp0rvZURmLJs4"> <i class="fa fa-pencil"></i></a>

                                                <a href="/admin/admin/banner/destroy/ylWTzVAu2K1MBkiIwGp0rvZURmLJs4" onclick="return confirm('Are you sure delete this banner?')" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>    
                                    </tr>
                                                                    <tr>
                                        <td>2</td>
                                        <td></td>
                                        <td><div class="all_seller_table_width">
                                            
                                          </div></td>
                                        <td>
                                            <img src="/admin/webroot/admin/banner/e765b52a3204333af109b68b46113623_thumb.png" class="showTableImage" id="product_img">
                                        </td>
                                        <td>
                                            <input type="checkbox" class="js-switch" onchange="common_status_change(this.value)" id="status" value="FHKSuGlqVaDNr1pL0tUMxsBR86i3kh" checked /></td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="javascript:void(0)" class="btn btn-primary shadow btn-xs sharp mr-1" onclick="edit_action('FHKSuGlqVaDNr1pL0tUMxsBR86i3kh')" id="get_action_val_FHKSuGlqVaDNr1pL0tUMxsBR86i3kh"> <i class="fa fa-pencil"></i></a>

                                                <a href="/admin/admin/banner/destroy/FHKSuGlqVaDNr1pL0tUMxsBR86i3kh" onclick="return confirm('Are you sure delete this banner?')" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>    
                                    </tr>
                                                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</div>

