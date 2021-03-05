<?php
                                    foreach ($appointment_data as $key => $value) {
                                  ?>
                                        <tr>
                                        <td><?=$key+1?></td>
                                        <td><?=$value->name?></td>
                                        <td><?=$value->email?></td>
                                         <td><?=$value->moblie_no?></td>
                                        <td><div class="all_seller_table_width">
                                          
                                            <span id="more_about_quNdnI3gshbUlGPjwmECxko5yrv1Ku">
                                               <?=$value->description?>                                                <a href="javascript:void(0)" onclick="show_more_about('quNdnI3gshbUlGPjwmECxko5yrv1Ku')">more</a>                                            </span>
                                            <span id="less_about_quNdnI3gshbUlGPjwmECxko5yrv1Ku" style="display: none" >
                                                  Test                                                  <a onclick="show_less_about('quNdnI3gshbUlGPjwmECxko5yrv1Ku')" href="javascript:void(0)">less</a>                                            </span>
                                              
                                          </div></td>
                                          <td><div style="min-width: max-content;">2021-02-17 01:26:54</div></td> 
                                          <td>
                                            <div class="d-flex">
                                                <a href="javascript:void(0)" onclick="delete_action('<?=$value->uniqcode?>','/destroy')" class="btn btn-danger shadow btn-xs sharp" value="<?=$value->uniqcode?>"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>   
                                    </tr>
                                  <?php } ?>