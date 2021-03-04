<?php foreach ($footercontact_data as $key => $value) {
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
                                  <script>
                                    $(document).ready(function() 
{            
    var elems = document.querySelectorAll('.js-switch');                
    for (var i = 0; i < elems.length; i++) {
       
        var switchery = new Switchery(elems[i], { color: '#1AB394', secondaryColor: '#ED5565', jackColor: '#ffffff', jackSecondaryColor: '#ffffff' });
    }                        

    var d1 = [[1262304000000, 6], [1264982400000, 3057], [1267401600000, 20434], [1270080000000, 31982], [1272672000000, 26602], [1275350400000, 27826], [1277942400000, 24302], [1280620800000, 24237], [1283299200000, 21004], [1285891200000, 12144], [1288569600000, 10577], [1291161600000, 10295]];
    var d2 = [[1262304000000, 5], [1264982400000, 200], [1267401600000, 1605], [1270080000000, 6129], [1272672000000, 11643], [1275350400000, 19055], [1277942400000, 30062], [1280620800000, 39197], [1283299200000, 37000], [1285891200000, 27000], [1288569600000, 21000], [1291161600000, 17000]];

    var data1 = [
        { label: "Data 1", data: d1, color: '#17a084'},
        { label: "Data 2", data: d2, color: '#127e68' }
    ];
});
                                </script>