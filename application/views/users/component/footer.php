
		</div>   
        <!-- Main content End -->
     
        <!-- Footer Start -->
        <footer id="rs-footer" class="rs-footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12 footer-widget">
                             <?php if(!empty($logo->image)) { ?>
                                <div class="footer-logo mb-30">
                                <a href="<?= base_url() ?>"><img src="<?= base_url()?>webroot/admin/images/logo/<?php if(!empty($logo->image)) { echo $logo->image; }?>" alt=""></a>
                            </div>
                        <?php } ?>
                             <?php if(!empty($contact_data)) { ?>
                              <div class="textwidget pb-30"><p><?=$contact_data->about_us?></p>
                              </div>
                              <ul class="footer-social md-mb-30">  
                                  <?php
                                    $data=array();
                                $data=unserialize($contact_data->social);
                                   foreach ($data as $key => $value) {
                             ?>
                                        <li><a href="<?=$value?>"><i class="fa fa-<?=$key?>"></i></a></li>
                                    <?php }?>
                                                                           
                              </ul>
                              <?php }?> 
                        </div>
                    
                        <div class="col-lg-4 col-md-12 col-sm-12 pl-45 md-pl-15 md-mb-30">
                            <h3 class="widget-title">IT Services</h3>
                            <ul class="site-map">
                                <li><a href="software-development.html">Software Development</a></li>
                                <li><a href="web-development.html">Web Development</a></li>
                                <li><a href="analytic-solutions.html">Analytic Solutions</a></li>
                                <li><a href="cloud-and-devops.html">Cloud and DevOps</a></li>
                                <li><a href="product-design.html">Product Design</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 md-mb-30">
                            <?php if(!empty($contact_data)) { ?>
                            <h3 class="widget-title">Contact Info</h3>
                            <ul class="address-widget">
                                <li>
                                    <i class="fa fa-map-marker"></i>
                                    <div class="desc"><?=$contact_data->contact_address?></div>
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <div class="desc">
                                       <a href="tel:(+880)155-69569"><?=$contact_data->phone?></a>
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-envelope-o"></i>
                                    <div class="desc">
                                        <a href="<?=$contact_data->email?>"><?=$contact_data->email?></a>
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-clock-o"></i>
                                    <div class="desc">
                                        Opening Hours: 10:00 - 18:00   
                                    </div>
                                </li>
                            </ul>
                        <?php }?>
                        </div>                       
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">                    
                    <div class="row y-middle">
                        <div class="col-lg-6 text-right md-mb-10 order-last">
                            <ul class="copy-right-menu">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Shop</a></li>
                                <li><a href="#">FAQs</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <!-- <div class="copyright">                                
							<p>&copy; 2021 All Rights Reserved. Developed By <i class="fa fa-heart" style="color: red"></i> <a href="https://www.nitsolution.in" target="_blank">NIT Solution Pvt. Ltd.</a></p>
                            </div> -->
                            <?php if(!empty($contact_data)) { ?>
                            <div class="copyright">                                
                            <p>&copy;<?=$contact_data->footer_copyright?><!--  <i class="fa fa-heart" style="color: red"></i> <a href="https://www.nitsolution.in" target="_blank"> --><!-- NIT Solution Pvt. Ltd. --></a></p>
                            </div>
                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->

        <!-- start scrollUp  -->
        <div id="scrollUp" class="orange-color">
            <i class="fa fa-angle-up"></i>
        </div>
        <!-- End scrollUp  -->

        <!-- Search Modal Start -->
        <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span class="fa fa-cross"></span>
            </button>
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="search-block clearfix">
                        <form>
                            <div class="form-group">
                                <input class="form-control" placeholder="Search Here..." type="text">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Modal End -->


        <script src="<?= base_url() ?>webroot/users/js/custom.js"></script>
         <!-- modernizr js -->
		 <script src="<?= base_url() ?>webroot/users/js/modernizr-2.8.3.min.js"></script>
        <!-- jquery latest version -->
        <script src="<?= base_url() ?>webroot/users/js/jquery.min.js"></script>
        <!-- Bootstrap v4.4.1 js -->
        <script src="<?= base_url() ?>webroot/users/js/bootstrap.min.js"></script>
        <!-- Menu js -->
        <script src="<?= base_url() ?>webroot/users/js/rsmenu-main.js"></script> 
        <!-- op nav js -->
        <script src="<?= base_url() ?>webroot/users/js/jquery.nav.js"></script>
        <!-- owl.carousel js -->
        <script src="<?= base_url() ?>webroot/users/js/owl.carousel.min.js"></script>
        <!-- wow js -->
        <script src="<?= base_url() ?>webroot/users/js/wow.min.js"></script>
        <!-- Skill bar js -->
        <script src="<?= base_url() ?>webroot/users/js/skill.bars.jquery.js"></script>
        <script src="<?= base_url() ?>webroot/users/js/jquery.counterup.min.js"></script> 
         <!-- counter top js -->
        <script src="<?= base_url() ?>webroot/users/js/waypoints.min.js"></script>
        <!-- swiper js -->
        <script src="<?= base_url() ?>webroot/users/js/swiper.min.js"></script>   
        <!-- particles js -->
        <script src="<?= base_url() ?>webroot/users/js/particles.min.js"></script>  
        <!-- magnific popup js -->
        <script src="<?= base_url() ?>webroot/users/js/jquery.magnific-popup.min.js"></script>      
        <!-- plugins js -->
        <script src="<?= base_url() ?>webroot/users/js/plugins.js"></script>
        <!-- pointer js -->
        <script src="<?= base_url() ?>webroot/users/js/pointer.js"></script>
        <!-- contact form js -->
        <script src="<?= base_url() ?>webroot/users/js/contact.form.js"></script>
        <!-- main js -->
        <script src="<?= base_url() ?>webroot/users/js/main.js"></script>

        <script src="<?=base_url()?>webroot/admin/js/toastr.min.js" type="text/javascript"></script> <!-- For validate js -->
        <script src='<?=base_url()?>webroot/admin/js/jquery.validationEngine.js'></script>
        <script src='<?=base_url()?>webroot/admin/js/jquery.validationEngine-en.js'></script>
    </body>
</html>
