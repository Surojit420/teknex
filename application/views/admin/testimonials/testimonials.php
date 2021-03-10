<div class="content-body">
    <div class="container-fluid">
    </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Testimonials Data</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 854px">
                                <thead>
                                    <tr>
                                       <th>Index</th>
                                       <th>Name</th>
                                       <th>Email Id</th>
                                       <th>Phone No.</th>
                                       <th>Image</th>
                                       <th>Position</th>
                                       <th>description</th>
                                      <th>Date Time</th>  
                                      <th>Status</th>
                                      <th>Action</th> 
                                    </tr>
                                </thead>
                                <tbody id="edit">
                                  <?php
                                    foreach ($testimonials_data as $key => $value) {
                                  ?>
                                        <tr>
                                        <td><?=$key+1?></td>
                                        <td><?=$value->name?></td>
                                        <td><?=$value->email?></td>
                                        <td><?=$value->moblie_no?></td>
                                        <td><?=$value->image?></td>
                                        <td><?=$value->position?></td>
                                        <td> <?php
                                        if(!empty($value->description))
                                        {
                                            $description = strlen($value->description) > 8 ? substr($value->description,0,8)."..." : $value->description;

                                        ?>
                                        <div id="more_ks_desc_<?=$value->uniqcode?>" >
                                            <?php
                                                echo $description.'...';
                                            ?>
                                            <?php
                                                echo '<a href="javascript:void(0)" onclick="show_more_ks_desc(\''.$value->uniqcode.'\')">more</a>';
                                            ?>
                                        </div>
                                        <div id="less_ks_desc_<?=$value->uniqcode?>" style="display: none" class="all_seller_table_width">
                                            <?php
                                                echo $value->description;
                                            ?>
                                            <?php
                                                echo '<a onclick="show_less_ks_desc(\''.$value->uniqcode.'\')" href="javascript:void(0)">less</a>';
                                            ?>
                                        </div>
                                        <?php } ?></td>
                                          <td><div style="min-width: max-content;"> <?=$value->create_date?></div></td>
                                           <td>
                                            <input type="checkbox" class="js-switch" onchange="common_status_change(this.value,'/status')" id="status" value="<?=$value->uniqcode?>" <?=$value->status == 'Active' ? 'checked' : ''?> /></td>
                                        <td>
                                            <div class="d-flex">
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