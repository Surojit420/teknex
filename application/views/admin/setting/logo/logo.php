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
                            <h4 class="card-title">Logo</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form  action="<?=base_url()?>logo_add" id="logo" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-12 text-center">
                                        <div class="form-group"> 
                                           <img src="<?=base_url()?>webroot/admin/logo/Add-Photo-Button.png" id="upload_logo" onclick="get_upload_logo()" class="add_img_button">
                                            <input type="file" class="image-upload select_image" name="image" class="validate[required]" id="logo_input_upload" style="display: none" accept=".jpg,.jpeg,.png" onchange="logo_show_photo(this)">
                                            <span id="image_required" class="formErrorContent1 formErrorArrowBottom1" style="display: none;">Image is required</span>    
                                        </div> 
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Logo Name</label>
                                            <input type="text" name="logo_name" id="logo_name" class="form-control validate[required]" data-errormessage-value-missing="Logo name is required" data-prompt-position="bottomLeft" placeholder="Enter Logo name" maxlength="200">     
                                        </div> 
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <button class="btn btn-warning btn-primary pull-right m-t-n-xs grediant-btn" type="reset"><strong>Cancel</strong></button>
                                    <button type="submit" class="btn btn-primary" style="margin-left: 756px;" onclick="checkfile()"><strong>Save<strong></button>
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
                        <h4 class="card-title">Logo Image</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 854px">
                                <thead>
                                    <tr>
                                       <th>Index</th>
                                       <th>Logo</th>
                                        <th>Logo Name</th>
                                       <th>Status</th>
                                       <th>Action</th> 
                                    </tr>
                                </thead>
                                <tbody class="gradeX" id="edit">
                                    <?php
                                    foreach ($logo_data as $key => $value) {
                   
                                    ?>
                                       <tr>
                                        <td><?=$key+1?></td>
                                        <td>
                                            <img class="tbli" src="<?=base_url('webroot/admin/images/logo/'.$value->image.'')?>" style="height: 101px;width: 101px;">
                                        </td>
                                        <td>
                                           <?=$value->name?>
                                        </td>

                                        <td>
                                            <input type="checkbox" class="js-switch" onchange="common_status_change(this.value)" id="status" value="<?=$value->uniqcode?>"  <?=$value->status == 'Active' ? 'checked' : ''?>/></td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="javascript:void(0)" class="btn btn-primary shadow btn-xs sharp mr-1" onclick="edit_action('<?=$value->uniqcode?>')" id="get_action_val_<?=$value->uniqcode?>"> <i class="fa fa-pencil"></i></a>

                                                <a href="<?=base_url()?>admin/destroy/<?=$value->uniqcode?>" onclick="return confirm('Are you sure delete this logo?')" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
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

