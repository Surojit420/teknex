<?php
    $controller_name=$this->router->fetch_class();
    $method_name=$this->router->fetch_method();
?>
 
   <!-- Side nav start -->
            <div class="deznav">
                <div class="deznav-scroll">
                    <ul class="metismenu" id="menu">
                        <li>
                            <a href="<?=base_url('admin/dashboard')?>" class="ai-icon" aria-expanded="false">
                                <i class="fa fa-trophy" aria-hidden="true"></i>
                                <span class="nav-text">Dashboard</span>
                            </a>
                        </li>
                         <li>
                            <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                                <i class="fa fa-cog" aria-hidden="true"></i>
                                <span class="nav-text">Setting</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="<?=base_url()?>admin/logo">Logo</a></li>
                                <li><a href="<?=base_url()?>admin/banner">Banner</a></li>
                                <li><a href="<?=base_url()?>admin/footercontact">Footer & contact</a></li>
                                <li><a href="<?=base_url()?>admin/project">Project</a></li>
                                 <li><a href="<?=base_url()?>admin/product">Product</a></li>
                                <li><a href="<?=base_url()?>admin/service">Service</a></li>
                                 <li><a href="<?=base_url()?>admin/aboutus">About Us</a></li>
                            </ul>
                        </li> 
                        <li>
                            <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                                <i class="fa fa-blogger" aria-hidden="true"></i>
                                <span class="nav-text">Blogs</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="<?=base_url()?>admin/blogs">Blog Add</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?=base_url()?>admin/appointment" class="ai-icon" aria-expanded="false">
                                <i class="fa fa-address-book" aria-hidden="true"></i>
                                <span class="nav-text">Appointment</span>
                            </a>
                        </li> 
                          <li>
                            <a href="<?=base_url()?>admin/testimonials" class="ai-icon" aria-expanded="false">
                                <i class="fa fa-users" aria-hidden="true"></i>
                                <span class="nav-text">Testimonials</span>
                            </a>
                        </li> 
                         <li>
                            <a href="<?=base_url()?>admin/query" class="ai-icon" aria-expanded="false">
                                <i class="fa fa-question-circle" aria-hidden="true"></i>
                                <span class="nav-text">Query</span>
                            </a>
                        </li> 
                       
                    </ul>
                    <div class="copyright">
                        <p class="fs-14 font-w200">
                        <strong class="font-w400"><?php
                        $first_name=$this->session->userdata('adminDetails')->first_name;
                        $last_name=$this->session->userdata('adminDetails')->last_name;
                        if (!empty($first_name)) {
                            echo $first_name.' '.$last_name;
                        }
                        ?></strong><!--  © <?=date('Y')?> All Rights Reserved --></p>
                        <?php if(!empty($contact_data)) { ?>
                        <p><?=$contact_data->footer_copyright?><!-- <i class="fa fa-heart" style="color: red"></i> --></p>
                    <?php }?>
                    </div>
                </div>
            </div>
            <!-- Side nav end -->