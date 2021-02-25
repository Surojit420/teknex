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