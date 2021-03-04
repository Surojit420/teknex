<!-------------------------------------------load page----------------------------------------------------->
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div id="edit_data">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Footer & Contact</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form  action="<?=base_url()?>admin/footercontact_add" id="fot_contact" method="post" enctype="multipart/form-data">
                                <div class="row">
                                  <div class="col-lg-12 text-center">
                                    <div class="form-group">
                                        <img src="<?=base_url()?>webroot/admin/logo/Add-Photo-Button.png" id="upload_fot_contact" onclick="get_upload('fot_contact_image')" class="add_img_button">
                                            <input type="file" class="image-upload select_image" name="image" class="validate[required]" id="fot_contact_image" style="display: none" accept=".jpg,.jpeg,.png" onchange="show_photo(this,'fot_contact_image','upload_fot_contact')">
                                            <span id="image_required" class="formErrorContent1 formErrorArrowBottom1" style="display: none;">Image is required</span>
                                    </div>
                                  </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" name="email" id="email" class="form-control validate[required,custom[email]]" data-errormessage-value-missing="Email is required" data-prompt-position="bottomLeft" placeholder="Enter email" maxlength="200">      
                                        </div> 
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input type="number" name="phone_no" id="phone_no" class="form-control validate[required,custom[phone],minSize[10],maxSize[10]]" data-errormessage-value-missing="Phone no is required" data-prompt-position="bottomLeft" placeholder="Enter phone no" maxlength="200">     
                                        </div> 
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Footer Copyright</label>
                                            <input type="text" name="footer_copy_right" id="footer_copy_right" class="form-control validate[required]" data-errormessage-value-missing="Footer copy right" data-prompt-position="bottomLeft" placeholder="Enter footer copyright" maxlength="200">     
                                        </div> 
                                    </div>
                                    <div class="col-lg-12">
                                       <div class="form-group">
                                           <label>Contact Address</label>
                                           <textarea rows="2" cols="30"   name="address" id="address" class="form-control validate[required]" data-errormessage-value-missing="Address is required" data-prompt-position="bottomLeft"placeholder="Enter contact address" ></textarea> 
                                       </div> 
                                    </div>
                                    <div class="col-lg-12">
                                       <div class="form-group">
                                           <label>About Us</label>
                                           <textarea rows="2" cols="30"   name="about_us" id="about_us" class="form-control validate[required]" data-errormessage-value-missing="About is required" data-prompt-position="bottomLeft"placeholder="Enter about us" ></textarea> 
                                       </div> 
                                    </div>
                                    <div class="col-lg-12">
                                       <div class="form-group">
                                           <label>Contact Us</label>
                                           <textarea rows="2" cols="30"   name="contact_us" id="contact_us" class="form-control validate[required]" data-errormessage-value-missing="Contact is required" data-prompt-position="bottomLeft"placeholder="Enter contact us" ></textarea> 
                                       </div> 
                                    </div>
                                     <div class="col-lg-12">
                                       <div class="form-group">
                                           <label>Contact Map Iframe</label>
                                           <textarea rows="2" cols="30" name="contact_map" id="contact_map" class="form-control" data-errormessage-value-missing="Contact map iframe" data-prompt-position="bottomLeft"placeholder="Enter map iframe"  value="  "></textarea> 
                                       </div> 
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <button class="btn btn-warning btn-primary pull-right m-t-n-xs grediant-btn" type="reset"><strong>Cancel</strong></button>
                                    <button type="submit" class="btn btn-primary" style="margin-left: 756px;" onclick="checkfile('fot_contact_image')"><strong>Save<strong></button>
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
                        <h4 class="card-title">Contact Data</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 854px">
                                <thead>
                                    <tr>
                                       <th>Index</th>
                                       <th>Email</th>
                                       <th>Phone Number</th>
                                       <th>Footer Copyright</th>
                                       <th>Address</th>
                                       <th>About Us</th>
                                       <th>Contact Us</th>
                                       <th>Map Iframe</th>
                                       <th>Contact Images</th>
                                       <th>Status</th>
                                       <th>Action</th> 
                                    </tr>
                                </thead>
                                <tbody id="edit">
                                  <?php foreach ($footcontact_data as $key => $value) {
                                    ?>
                                      <tr>
                                        <td><?=$key+1?></td>
                                        <td><div><?=$value->email?></div></td>
                                        <td><div ><?=$value->phone?></div></td>
                                        <td><div class="all_seller_table_width"><?=$value->footer_copyright?></div></td>
                                        <td><div class="all_seller_table_width"><?=$value->contact_address?></div></td>
                                        <td><div class="all_seller_table_width">
                                          
                                            <span id="more_about_CkNqmew93vZuRDzV0UMA2l1OTsQr76">
                                                Our proces......                                                <a href="javascript:void(0)" onclick="show_more_about('CkNqmew93vZuRDzV0UMA2l1OTsQr76')">more</a>                                            </span>
                                            <span id="less_about_CkNqmew93vZuRDzV0UMA2l1OTsQr76" style="display: none" >
                                                  Our process starts with meeting clients and understanding their requirement properly, this helps us in making research and planning for their problem and providing them with solutions accordingly to achieve their business goals. After completion of the pl                                                  <a onclick="show_less_about('CkNqmew93vZuRDzV0UMA2l1OTsQr76')" href="javascript:void(0)">less</a>                                            </span>
                                              
                                          </div></td>
                                        <td><div class="all_seller_table_width">
                                                                                      <span id="more_contact_CkNqmew93vZuRDzV0UMA2l1OTsQr76">
                                                If you are......                                                <a href="javascript:void(0)" onclick="show_more_contact('CkNqmew93vZuRDzV0UMA2l1OTsQr76')">more</a>                                            </span>
                                            <span id="less_contact_CkNqmew93vZuRDzV0UMA2l1OTsQr76" style="display: none" >
                                                  If you are looking for high-quality web designing and development, software development and mobile application development you can contact us Bongtech Solution Pvt ltd we have a team of experts who specializes in IT solution, we have dedicated our efforts                                                  <a onclick="show_less_contact('CkNqmew93vZuRDzV0UMA2l1OTsQr76')" href="javascript:void(0)">less</a>                                            </span>
                                             

                                          </div></td>
                                          <td><div class="all_seller_table_width"><?=$value->map?></div></td>
                                        <td>
                                            <img src="<?=base_url()?>webroot/admin/images/footercontact/<?=$value->image?>" class="showTableImage" id="product_img">
                                        </td>
                                        <td>
                                            <input type="checkbox" class="js-switch" onchange="common_status_change('<?=$value->uniqcode?>','/status')" id="status" <?=$value->status == 'Active' ? 'checked' : ''?> /></td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="javascript:void(0)" class="btn btn-primary shadow btn-xs sharp mr-1" onclick="edit_action('<?=$value->uniqcode?>','/edit')" id="get_action_val_<?=$value->uniqcode?>"> <i class="fa fa-pencil"></i></a>

                                                 <a href="javascript:void(0)" onclick="delete_action('<?=$value->uniqcode?>','/destroy')" class="btn btn-danger shadow btn-xs sharp" value="<?=$value->uniqcode?>"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>    
                                    </tr>
                                  <?php } ?>
                                                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</div>

