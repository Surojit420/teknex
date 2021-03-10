<div class="content-body">
    <div class="container-fluid">
    </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Query Data</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 854px">
                                <thead>
                                    <tr>
                                       <th>Index</th>
                                       <th>Name</th>
                                       <th>Email Id</th>
                                       <th>Message</th>
                                       <th>Date Time</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                    foreach ($query_data as $key => $value) {
                                  ?>
                                        <tr>
                                        <td><?=$key+1?></td>
                                        <td><?=$value->name?></td>
                                        <td><?=$value->email?></td>
                                        <td> <?php
                                        if(!empty($value->massage))
                                        {
                                            $massage = strlen($value->massage) > 8 ? substr($value->massage,0,8)."..." : $value->massage;

                                        ?>
                                        <div id="more_ks_desc_<?=$value->uniqcode?>" >
                                            <?php
                                                echo $massage.'...';
                                            ?>
                                            <?php
                                                echo '<a href="javascript:void(0)" onclick="show_more_ks_desc(\''.$value->uniqcode.'\')">more</a>';
                                            ?>
                                        </div>
                                        <div id="less_ks_desc_<?=$value->uniqcode?>" style="display: none" class="all_seller_table_width">
                                            <?php
                                                echo $value->massage;
                                            ?>
                                            <?php
                                                echo '<a onclick="show_less_ks_desc(\''.$value->uniqcode.'\')" href="javascript:void(0)">less</a>';
                                            ?>
                                        </div>
                                        <?php } ?></td>
                                          <td><div style="min-width: max-content;">2021-02-17 01:26:54</div></td>   
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