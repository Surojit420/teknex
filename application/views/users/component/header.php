<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width,initial-scale=1" />
		<title><?=$page_title?></title>
		<meta name="description" content="Some description for the page" />	
		<link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>webroot/admin/images/logo/<?php if(!empty($icon->image)) { echo $icon->image; }?>" />
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>webroot/users/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>webroot/users/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>webroot/users/css/animate.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>webroot/users/css/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>webroot/users/css/slick.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>webroot/users/css/off-canvas.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>webroot/users/css/magnific-popup.css">
        <link rel="stylesheet" href="<?= base_url() ?>webroot/users/css/rsmenu-main.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>webroot/users/css/rs-spacing.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>webroot/users/css/style.css"> <!-- This stylesheet dynamically changed from style.less -->
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>webroot/users/css/responsive.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>webroot/admin/css/toastr.min.css" />
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>webroot/admin/css/validationEngine.jquery.css" />
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>webroot/admin/css/custom.css" /> <!-- model show contact -->

</head>

<body>
	<?php
	if ($this->session->flashdata('success')) {
		$this->load->view('admin/msg/success');
	}
	if ($this->session->flashdata('error')) {
		$this->load->view('admin/msg/error');
	} ?>
	<input type="hidden" name="base_url" id="base_url" value="<?= base_url() ?>">
	<input type="hidden" name="current_url" id="current_url" value="<?= current_url(); ?>">

	<body class="defult-home">
        
        <!--Preloader area start here-->
        <div id="loader" class="loader">
            <div class="loader-container"></div>
        </div>
        <!--Preloader area End here--> 
     
		<!-- Main content Start -->
        <div class="main-content">
            <!--Full width header Start-->
            <div class="full-width-header">
                <!--Header Start-->
                <header id="rs-header" class="rs-header">
                    <!-- Topbar Area Start -->
                    <div class="topbar-area">
                        <div class="container">
                            <div class="row rs-vertical-middle">
                                <div class="col-lg-2">
                                    <?php if(!empty($logo->image)) { ?>
                                    <div class="logo-part">

                                        <a href="<?= base_url() ?>"><img src="<?= base_url()?>webroot/admin/images/logo/<?php if(!empty($logo->image)) { echo $logo->image; }?>" alt=""></a>
                                    </div>
                                <?php } ?>
                                </div>
                                <?php  if(!empty($contact_data))
                                { ?>
                                <div class="col-lg-10 text-right">
                                    <ul class="rs-contact-info">
                                        <li class="contact-part">
                                            <i class="fa fa-map-marker"></i>
                                            <span class="contact-info">
                                                <span>Address</span>
                                                <?=$contact_data->contact_address?>
                                            </span>
                                        </li>
                                        <li class="contact-part">
                                            <i class="fa fa-envelope-o"></i>
                                            <span class="contact-info">
                                                <span>E-mail</span>
                                                <a href="mailto:<?=$contact_data->email?>"><?=$contact_data->email?></a>
                                            </span>
                                        </li>
                                        <li class="contact-part no-border">
                                             <i class="fa fa-phone"></i>
                                            <span class="contact-info">
                                                <span>Phone</span>
												<a href="tel:<?=$contact_data->contact_us?>"> <?=$contact_data->phone?></a>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            <?php } ?>
                            </div>
                        </div>
                    </div>
                    <!-- Topbar Area End -->
                    <!-- Menu Start -->
                    <div class="menu-area menu-sticky">
                        <div class="container">
                             <?php if(!empty($logo->image)) { ?>
                            <div class="logo-area">
                                <a href="<?=base_url()?>">
                                    <img class="sticky-logo" src="<?= base_url()?>webroot/admin/images/logo/<?php if(!empty($logo->image)) { echo $logo->image; }?>" alt="logo">
                                </a>
                            </div>
                        <?php } ?>
                            <div class="rs-menu-area">
                                <div class="main-menu">
                                     <?php if(!empty($logo->image)) { ?>
                                    <div class="mobile-menu">
                                        <a href="<?=base_url()?>" class="mobile-logo">
                                            <img src="<?= base_url()?>webroot/admin/images/logo/<?php if(!empty($logo->image)) { echo $logo->image; }?>" alt="logo">
                                        </a>
                                        <a href="#" class="rs-menu-toggle rs-menu-toggle-close">
                                            <i class="fa fa-bars"></i>
                                        </a>
                                    </div>
                                <?php } ?>
                                    <nav class="rs-menu">
                                        <ul class="nav-menu">
                                           
                                            <li class="<?php if($this->uri->uri_string() == '') { echo 'current-menu-item'; } ?>">
                                                <a href="<?=base_url()?>">Home</a>
                                            </li>
                                            <li class="<?php if($this->uri->uri_string() == 'about') { echo 'current-menu-item'; } ?>">
                                                <a href="<?=base_url()?>about">About</a>
                                            </li>
                                           
                                            <li class="<?php if($this->uri->uri_string() == 'blog' || $this->uri->uri_string() == 'blog_details') { echo 'current-menu-item'; } ?>">
                                               <a href="<?=base_url()?>blog">Blog</a>
                                               <!-- <ul class="sub-menu">
                                                   <li><a href="<?=base_url()?>blog">Blog</a> </li>
                                                   <li><a href="<?=base_url()?>blog_details">Blog Details</a></li>
                                               </ul> -->
                                            </li>
											<li class="<?php if($this->uri->uri_string() == 'project') { echo 'current-menu-item'; } ?>">
                                                <a href="<?=base_url()?>project">project</a>
                                            </li>
                                            <li class="<?php if($this->uri->uri_string() == 'product') { echo 'current-menu-item'; } ?>">
                                                <a href="<?=base_url()?>product">product</a>
                                            </li>
                                            <li class="<?php if($this->uri->uri_string() == 'testimonials') { echo 'current-menu-item'; } ?>">
                                                <a href="<?=base_url()?>testimonials">Testimonials</a>
                                            </li>
                                            <li class="<?php if($this->uri->uri_string() == 'contact') { echo 'current-menu-item'; } ?>">
                                                <a href="<?=base_url()?>contact">Contact</a>
                                            </li>
                                        </ul> 
                                    </nav>                                        
                                </div>                               
                            </div>

                            <div class="expand-btn-inner search-icon hidden-sticky hidden-md">
                                <div class="toolbar-sl-share">
                                    <ul class="social">
                                 
                             <?php
                             if(!empty($contact_data))
                             {
                                $data=array();
                                $data=unserialize($contact_data->social);
                               // print_r($data);
                              foreach ($data as $key => $value) {
                             ?>
                                        <li><a href="<?=$value?>"><i class="fa fa-<?=$key?>"></i></a></li>
                                    <?php } } ?>
                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Menu End -->
                </header>
                <!--Header End-->
            </div>
