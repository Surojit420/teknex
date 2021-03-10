<!DOCTYPE html> 
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <title><?=$page_title;?></title>
        <meta name="description" content="Some description for the page" />
<link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>webroot/admin/images/logo/<?php if(!empty($icon->image)) { echo $icon->image; }?>" />
<link rel="stylesheet" type="text/css" href="<?=base_url()?>webroot/admin/css/bootstrap-select.min.css"/> <!-- For bootstrap select --> 
<link rel="stylesheet" type="text/css" href="<?=base_url()?>webroot/admin/css/variable.scss"/> <!-- For scss
variables -->
 <link rel="stylesheet" type="text/css" href="<?=base_url()?>webroot/admin/css/font-awesome.css"> <!-- For Fontawesome
icons -->
 <link rel="stylesheet" type="text/css" href="<?=base_url()?>webroot/admin/css/slick.css"> <!-- For slick slider -->
<link rel="stylesheet" type="text/css" href="<?=base_url()?>webroot/admin/css/slick-theme.css"> <!-- For slick slider
--> <link rel="stylesheet" type="text/css" href="<?=base_url()?>webroot/admin/css/dataTables.min.css"/> <!-- For data
tables --> 
<link rel="stylesheet" type="text/css" href="<?=base_url()?>webroot/admin/css/daterangepicker.css"/> <!-- For first 3
date picker -->
 <link rel="stylesheet" type="text/css" href="<?=base_url()?>webroot/admin/css/bootstrap-material-datetimepicker.css"/>
<!-- For Material Date Picker -->
 <link rel="stylesheet" type="text/css" href="<?=base_url()?>webroot/admin/css/default-date.css"/> <!-- For default
Date Picker --> 
<link rel="stylesheet" type="text/css" href="<?=base_url()?>webroot/admin/css/bootstrap-clockpicker.min.css"/> <!--
For time picker -->
 <link rel="stylesheet" type="text/css" href="<?=base_url()?>webroot/admin/css/asColorPicker.min.css"/> <!-- For Color
picker -->
 <link rel="stylesheet" type="text/css" href="<?=base_url()?>webroot/admin/css/select2.min.css"/> <!-- For beautiful
select box --> 
<link rel="stylesheet" type="text/css" href="<?=base_url()?>webroot/admin/css/sweetalert.min.css"/> <!-- For Sweet
alert --> 
<link rel="stylesheet" type="text/css" href="<?=base_url()?>webroot/admin/css/texteditor.css"/> <!-- For texteditor
css --> 
<link rel="stylesheet" type="text/css" href="<?=base_url()?>webroot/admin/css/toastr.min.css"/> <!-- For toastr css
-->
 <link rel="stylesheet" type="text/css" href="<?=base_url()?>webroot/admin/css/validationEngine.jquery.css"/> <!-- For
validationEngine css -->
 <!-- <link rel="stylesheet" type="text/css" href="<?=base_url()?>webroot/admin/css/style.scss"/> --> <!-- For custom scss -->
<link rel="stylesheet" type="text/css" href="<?=base_url()?>webroot/admin/css/style.css"/> 
<link rel="stylesheet" type="text/css" href="<?=base_url()?>webroot/admin/css/awesome-bootstrap-checkbox.css"/> 
<link rel="stylesheet" type="text/css" href="<?=base_url()?>webroot/admin/css/switchery.css"/>  

</head> 
<body> 
    <?php
if ($this->session->flashdata('success')) {
    $this->load->view('admin/msg/success');
}
if ($this->session->flashdata('error')) {
    $this->load->view('admin/msg/error');
} ?> 
<input type="hidden" name="base_url" id="base_url" value="<?=base_url()?>"> 
<input type="hidden" name="current_url" id="current_url" value="<?=current_url();?>"> 

<!-- Preloader start --> 
<div id="preloader"> <div class="sk-three-bounce"> <div
class="sk-child sk-bounce1"></div> <div class="sk-child sk-bounce2"></div>
<div class="sk-child sk-bounce3"></div> </div> </div> <!-- Preloader end -->

        <div id="main-wrapper">
            <div class="nav-header">
              <!-- Navbar logo start -->
               <?php if(!empty($logo->image)) { ?>
                <a href="<?=base_url()?>" class="brand-logo">
                    <img class="logo-abbr" src="<?= base_url()?>webroot/admin/images/logo/<?php if(!empty($logo->image)) { echo $logo->image; }?>" alt="" />
                    <img class="logo-compact" src="<?= base_url()?>webroot/admin/images/logo/<?php if(!empty($logo->image)) { echo $logo->image; }?>" alt="" />
                </a>
            <?php } ?>
              <!-- Navbar logo end -->

              <!-- Navbar open close button start -->
                <div class="nav-control">
                    <div class="hamburger"><span class="line"></span><span class="line"></span><span class="line"></span></div>
                </div>
              <!-- Navbar open close button end -->
            </div>
            
            <!-- Top header start -->
            <div class="header">
                <div class="header-content">
                    <nav class="navbar navbar-expand">
                        <div class="collapse navbar-collapse justify-content-between">
                            <div class="header-left">
                               <!--  <div class="dashboard_bar">
                                    Dashboard
                                </div> -->
                            </div>
                            <ul class="navbar-nav header-right">
                                <!-- Profile start -->
                                <li class="nav-item dropdown header-profile">
                                    <a class="nav-link" href="javascript:;" role="button" data-toggle="dropdown">
                                        <div class="header-info" style="    border-left: none;">
                                            <span>
                                                <?php
                                                $first_name=$this->session->userdata('adminDetails')->first_name;
                                                $last_name=$this->session->userdata('adminDetails')->last_name;
                                                if (!empty($first_name)) {
                                                    echo $first_name.' '.$last_name;
                                                }
                                                ?>
                                            </span>
                                        </div>
                                         <?php if(!empty($logo->image)) { ?>
                                        <img src="<?= base_url()?>webroot/admin/images/logo/<?php if(!empty($logo->image)) { echo $logo->image; }?>" width="20" alt="" />
                                    </a>
                                <?php }?>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        
                                         <a href="<?=base_url('admin/changepassword')?>" class="dropdown-item ai-icon">
                                            <i class="fa fa-key" aria-hidden="true"></i>
                                            <span class="ml-2">Change Password </span>
                                        </a>
                                        
                                        <a href="<?=base_url('logout')?>" class="dropdown-item ai-icon">
                                            <svg
                                                id="icon-logout"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="text-danger"
                                                width="18"
                                                height="18"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            >
                                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                                <polyline points="16 17 21 12 16 7"></polyline>
                                                <line x1="21" y1="12" x2="9" y2="12"></line>
                                            </svg>
                                            <span class="ml-2">Logout </span>
                                        </a>
                                    </div>
                                </li>
                                <!-- Profile end -->
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Top header end -->