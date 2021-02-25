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
                                <li><a href="<?=base_url()?>admin/client">Clients</a></li>
                            </ul>
                        </li> 
                        <li>
                            <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                                <i class="fa fa-blogger" aria-hidden="true"></i>
                                <span class="nav-text">Blogs</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="<?=base_url()?>admin/blogadd">Blog Add</a></li>
                               <!--  <li><a href="sweetalert.html">Sweet Alert</a></li>
                                <li><a href="toster.html">Toaster</a></li> -->
                            </ul>
                        </li>
                        <li>
                            <a href="business" class="ai-icon" aria-expanded="false">
                                <i class="fa fa-industry" aria-hidden="true"></i>
                                <span class="nav-text">Business</span>
                            </a>
                        </li>
                         <li>
                            <a href="query" class="ai-icon" aria-expanded="false">
                                <i class="fa fa-question-circle" aria-hidden="true"></i>
                                <span class="nav-text">Query</span>
                            </a>
                        </li>
                        <!-- <li>
                            <a href="<?=base_url('admin/changepassword')?>" class="ai-icon" aria-expanded="false">
                                <i class="fa fa-trophy" aria-hidden="true"></i>
                                <span class="nav-text">Change Password</span>
                            </a>
                        </li>  -->
                    </ul>
                    <div class="copyright">
                        <p class="fs-14 font-w200"><strong class="font-w400">Bongtech Admin Dashboard</strong> © 2020 All Rights Reserved</p>
                        <p>Made with <i class="fa fa-heart"></i> by Subhajit and Swapan</p>
                    </div>
                </div>
            </div>
            <!-- Side nav end -->