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
                                        <td><div class="all_seller_table_width">
                                          
                                            <span id="more_about_quNdnI3gshbUlGPjwmECxko5yrv1Ku">
                                               <?=$value->massage?>                                                <a href="javascript:void(0)" onclick="show_more_about('quNdnI3gshbUlGPjwmECxko5yrv1Ku')">more</a>                                            </span>
                                            <span id="less_about_quNdnI3gshbUlGPjwmECxko5yrv1Ku" style="display: none" >
                                                  Test                                                  <a onclick="show_less_about('quNdnI3gshbUlGPjwmECxko5yrv1Ku')" href="javascript:void(0)">less</a>                                            </span>
                                              
                                          </div></td>
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