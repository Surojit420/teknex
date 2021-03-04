<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width,initial-scale=1" />
		<title><?= $page_title; ?></title>
		<meta name="description" content="Some description for the page" />	
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
		<link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>webroot/admin/images/logo.png" />
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>webroot/admin/css/toastr.min.css" />
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>webroot/admin/css/validationEngine.jquery.css" />
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
                                    <div class="logo-part">
                                        <a href="<?= base_url() ?>"><img src="<?= base_url() ?>webroot/admin/images/nit.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-lg-10 text-right">
                                    <ul class="rs-contact-info">
                                        <li class="contact-part">
                                            <i class="fa fa-map-marker"></i>
                                            <span class="contact-info">
                                                <span>Address</span>
                                                05 kandi BR. New York
                                            </span>
                                        </li>
                                        <li class="contact-part">
                                            <i class="fa fa-envelope-o"></i>
                                            <span class="contact-info">
                                                <span>E-mail</span>
                                                <a href="#"> support@nitsolutions.com</a>
                                            </span>
                                        </li>
                                        <li class="contact-part no-border">
                                             <i class="fa fa-phone"></i>
                                            <span class="contact-info">
                                                <span>Phone</span>
                                                 +019988772
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Topbar Area End -->

                    <!-- Menu Start -->
                    <div class="menu-area menu-sticky">
                        <div class="container">
                            <div class="logo-area">
                                <a href="index.html">
                                    <img class="sticky-logo" src="<?= base_url() ?>webroot/admin/images/nit.png" alt="logo">
                                </a>
                            </div>
                            <div class="rs-menu-area">
                                <div class="main-menu">
                                    <div class="mobile-menu">
                                        <a href="index.html" class="mobile-logo">
                                            <img src="images/logo-light.png" alt="logo">
                                        </a>
                                        <a href="#" class="rs-menu-toggle rs-menu-toggle-close">
                                            <i class="fa fa-bars"></i>
                                        </a>
                                    </div>
                                    <nav class="rs-menu">
                                        <ul class="nav-menu">
                                            <li class="menu-item-has-children current-menu-item">
                                                <a href="<?=base_url()?>users/home">Home</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item-has-children current-menu-item">
                                                        <a href="#">Multipages</a>
                                                        <ul class="sub-menu">
                                                            <li class="active"><a href="index.html">Main Home</a></li>
                                                            <li><a href="index2.html">Home Two</a></li>
                                                            <li><a href="index3.html">Home Three</a></li>
                                                            <li><a href="index4.html">Home Four</a></li>
                                                            <li><a href="index5.html">Home Five</a></li>
                                                            <li><a href="index6.html">Home Six</a></li>
                                                            <li><a href="index7.html">Home Seven</a></li>
                                                            <li><a href="index8.html">Home Eight</a></li>
                                                            <li><a href="index9.html">Home Nine</a></li>
                                                            <li><a href="index10.html">Home Ten</a></li>
                                                        </ul> 
                                                    </li>
                                                    <li class="menu-item-has-children">
                                                        <a href="#">Onepages</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="onepage1.html">Onepage One</a></li>
                                                            <li><a href="onepage2.html">Onepage Two</a></li>
                                                            <li><a href="onepage3.html">Onepage Three</a></li>
                                                            <li><a href="onepage4.html">Onepage Four</a></li>
                                                            <li><a href="onepage5.html">Onepage Five</a></li>
                                                            <li><a href="onepage6.html">Onepage Six</a></li>
                                                            <li><a href="onepage7.html">Onepage Seven</a></li>
                                                            <li><a href="onepage8.html">Onepage Eight</a></li>
                                                            <li><a href="onepage9.html">Onepage Nine</a></li>
                                                            <li><a href="onepage10.html">Onepage Ten</a></li>
                                                        </ul>  
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="<?=base_url()?>users/about">About</a>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#">Services</a>
                                                <ul class="sub-menu">
                                                    <li><a href="software-development.html">Software Development</a> </li>
                                                    <li><a href="web-development.html">Web Development</a> </li>
                                                    <li><a href="analytic-solutions.html">Analytic Solutions</a> </li>
                                                    <li><a href="cloud-and-devops.html">Cloud and DevOps</a></li>
                                                    <li><a href="project-design.html">Project Design</a> </li>
                                                    <li><a href="data-center.html">Data Center</a> </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#">Pages</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item-has-children">
                                                        <a href="#">Services</a>
                                                        <ul class="sub-menu right">
                                                           <li><a href="services1.html">Services 1</a></li>
                                                           <li><a href="services2.html">Services 2</a></li>
                                                           <li><a href="services3.html">Services 3</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item-has-children">
                                                       <a href="our-team.html">Our Team</a>
                                                    </li> 
                                                    <li class="menu-item-has-children">
                                                       <a href="single-team.html">Single Team</a>
                                                    </li>
                                                    <li class="menu-item-has-children">
                                                       <a href="#">Case Studies</a>
                                                        <ul class="sub-menu right">
                                                           <li><a href="case-studies-style1.html">Case Studies Style 1</a></li>
                                                           <li><a href="case-studies-style2.html">Case Studies Style 2</a></li>
                                                           <li><a href="case-studies-style3.html">Case Studies Style 3</a></li>
                                                           <li><a href="case-studies-style4.html">Case Studies Style 4</a></li>
                                                           <li><a href="case-studies-style5.html">Case Studies Style 5</a></li>
                                                           <li><a href="case-studies-style6.html">Case Studies Style 6</a></li>
                                                           <li><a href="case-studies-style7.html">Case Studies Style 7</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item-has-children">
                                                        <a href="shop.html">Shop</a>
                                                        <ul class="sub-menu right">
                                                            <li><a href="shop.html">Shop</a></li>
                                                            <li><a href="shop-single.html">Shop Single</a></li>
                                                            <li><a href="cart.html">Cart</a></li>
                                                            <li><a href="checkout.html">Checkout</a></li>
                                                            <li><a href="my-account.html">My Account</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item-has-children">
                                                       <a href="pricing.html">Pricing</a>
                                                    </li>
                                                    <li class="menu-item-has-children">
                                                       <a href="faq.html">Faq</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                               <a href="<?=base_url()?>users/blog">Blog</a>
                                               <ul class="sub-menu">
                                                   <li><a href="<?=base_url()?>users/blog">Blog</a> </li>
                                                   <li><a href="<?=base_url()?>users/blog_detalis">Blog Details</a></li>
                                               </ul>
                                            </li>
                                            <li>
                                                <a href="contact.html">Contact</a>
                                            </li>
                                        </ul> 
                                    </nav>                                        
                                </div>                               
                            </div>
                            <div class="expand-btn-inner search-icon hidden-sticky hidden-md">
                                <div class="toolbar-sl-share">
                                    <ul class="social">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Menu End -->
                </header>
                <!--Header End-->
            </div>
