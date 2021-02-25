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
                            <h4 class="card-title">client</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form action="<?=base_url()?>admin/client_add" id="client" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-12 text-center">
                                        <div class="form-group"> 
                                           <img src="<?=base_url()?>webroot/admin/logo/Add-Photo-Button.png" id="upload_client" onclick="get_upload('client_image')" class="add_img_button">
                                            <input type="file" class="image-upload select_image" name="image" class="validate[required]" id="client_image" style="display: none" accept=".jpg,.jpeg,.png" onchange="show_photo(this,'client_image','upload_client')">
                                            <span id="image_required" class="formErrorContent1 formErrorArrowBottom1" style="display: none;">Image is required</span>    
                                        </div> 
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>name</label>
                                            <input type="text" name="client_name" id="client_name" class="form-control validate[required]" data-errormessage-value-missing="client name is required" data-prompt-position="bottomLeft" placeholder="Enter client name" maxlength="200">     
                                        </div> 
                                    </div>
                                     <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Link</label>
                                            <input type="text" name="client_link" id="client_link" class="form-control validate[required]" data-errormessage-value-missing="client link is required" data-prompt-position="bottomLeft" placeholder="Enter client link" maxlength="200">     
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
                        <h4 class="card-title">client Image</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 854px">
                                <thead>
                                    <tr>
                                       <th>Index</th>
                                       <th>client Image</th>
                                        <th>client Name</th>
                                         <th>client Desription</th>
                                       <th>Status</th>
                                       <th>Action</th> 
                                    </tr>
                                </thead>
                                <tbody class="gradeX" id="edit">
                                    <?php
                                    foreach ($client_data as $key => $value) {
                   
                                    ?>
                                       <tr>
                                        <td><?=$key+1?></td>
                                        <td>
                                            <img class="tbli" src="<?=base_url('webroot/admin/images/client/'.$value->image.'')?>" style="height: 101px;width: 101px;">
                                        </td>
                                        <td>
                                           <?=$value->title?>
                                        </td>
                                        <td>
                                           <?=$value->description?>
                                        </td>

                                        <td>
                                            <input type="checkbox" class="js-switch" onchange="common_status_change('<?=$value->uniqcode?>','/status')" id="status" value="<?=$value->uniqcode?>"  <?=$value->status == 'Active' ? 'checked' : ''?>/></td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="javascript:void(0)" class="btn btn-primary shadow btn-xs sharp mr-1" onclick="edit_action('<?=$value->uniqcode?>',/edit)" id="get_action_val_<?=$value->uniqcode?>"> <i class="fa fa-pencil"></i></a>

                                                <!-- <a href="<?=base_url()?>admin/destroy/<?=$value->uniqcode?>" onclick="return confirm('Are you sure delete this client?')" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a> -->
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
