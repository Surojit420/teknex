<!-- Breadcrumbs Start --> 
            <!-- <div class="rs-breadcrumbs" style="background:url(<?=base_url()?>webroot/admin/images/banner/<?=$banner_row->image?>)"> -->
                <?php if(!empty($banner_row->image)) { ?>
                 <div class="rs-breadcrumbs img1" style="background:url(<?=base_url()?>webroot/admin/images/banner/<?php if(!empty($banner_row->image)){echo $banner_row->image;} ?>)"> 
                <div class="breadcrumbs-inner text-center">
                    <h1 class="page-title">Testimonials</h1>
                    <ul>
                        <li title="Braintech - IT Solutions and Technology Startup HTML Template">
                            <a class="active" href="<?=base_url()?>">Home</a>
                        </li>
                       <li>Contact</li>
                    </ul>
                </div>
            </div>
        <?php }?>
            <!-- Breadcrumbs End -->

            <!-- Contact Section Start -->
            <div class="rs-contact pt-120 md-pt-80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 md-mb-60">
                            
                        <div class="col-lg-12 pl-70 md-pl-15">
                            <div class="contact-widget">
                               <div class="sec-title2 mb-40">
                                   <span class="sub-text contact mb-15">Get In Touch</span>
                                   <h2 class="title testi-title">Fill The Form Below</h2>

                               </div>
                                
                                <form  method="post" action="<?=base_url()?>testimonial_add">
                                    <fieldset>

                                        <div class="row">
                                            <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                                <input class="from-control" type="text" id="name" name="name" placeholder="Name" required="">
                                            </div> 
                                            <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                                <input class="from-control" type="text" id="email" name="email" placeholder="E-Mail" required="">
                                            </div>   
                                            <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                                <input class="from-control" type="number" id="phone" name="phone" placeholder="Phone Number" required="">
                                            </div>   
                                            <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                                <input class="from-control" type="text" id="Website" name="subject" placeholder="Your Position" >
                                            </div>
                                            <div class="col-lg-12 mb-30">
                                                <input class="from-control" type="file" id="Website" name="photo" placeholder="Your photo" >
                                            </div>
                                      
                                            <div class="col-lg-12 mb-30">
                                                <textarea class="from-control" id="message" name="message" placeholder="Your message Here" required=""></textarea>
                                            </div>
                                        </div>
                                        <div class="btn-part">                                            
                                            <div class="form-group mb-0">
                                                <input class="readon learn-more submit" type="submit" value="Submit Now">
                                            </div>
                                        </div> 
                                    </fieldset>
                                </form> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rs-testimonial main-home gray-color pt-120 pb-120 md-pt-80 md-pb-80">
                <div class="container">
                  <div class="sec-title2 text-center mb-45">
                      <span class="sub-text">Testimonial</span>
                      <h2 class="title testi-title">
                         What Saying Our Customers
                      </h2>
                      <div class="heading-line">

                      </div>
                  </div>
                    <div class="rs-carousel owl-carousel" 
                        data-loop="true" 
                        data-items="3" 
                        data-margin="30" 
                        data-autoplay="true" 
                        data-hoverpause="true" 
                        data-autoplay-timeout="5000" 
                        data-smart-speed="800" 
                        data-dots="true" 
                        data-nav="false" 
                        data-nav-speed="false" 

                        data-md-device="3" 
                        data-md-device-nav="false" 
                        data-md-device-dots="true" 
                        data-center-mode="false"

                        data-ipad-device2="1" 
                        data-ipad-device-nav2="false" 
                        data-ipad-device-dots2="true"

                        data-ipad-device="2" 
                        data-ipad-device-nav="false" 
                        data-ipad-device-dots="true" 

                        data-mobile-device="1" 
                        data-mobile-device-nav="false" 
                        data-mobile-device-dots="false">
                        <?php 
                        //print_r($testimonials_data);
                        foreach ($testimonials_data as $key => $value) {
                         ?>
                        <div class="testi-item">
                            <div class="author-desc">                                
                                <div class="desc"><img class="quote" src="<?=base_url()?>webroot/users/images/testimonial/main-home/quote2.png" alt=""><?=$value->description?></div>
                                <div class="author-img">
                                    <img src="<?=base_url()?>webroot/admin/images/testimonials/testimonials.png" alt="">
                                </div>
                            </div>
                            <div class="author-part">
                                <a class="name" href="#"><?=$value->name?></a>
                                <span class="designation"><?=$value->position?></span>
                            </div>
                        </div>
                    <?php } ?>
                        <!-- <div class="testi-item">
                            <div class="author-desc">                                
                                <div class="desc"><img class="quote" src="images/testimonial/main-home/quote2.png" alt="">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</div>
                                <div class="author-img">
                                    <img src="images/testimonial/main-home/2.jpg" alt="">
                                </div>
                            </div>
                            <div class="author-part">
                                <a class="name" href="#">Sonia Akhter</a>
                                <span class="designation">Graphic Designer</span>
                            </div>
                        </div>
                        <div class="testi-item">
                            <div class="author-desc">                                
                                <div class="desc"><img class="quote" src="images/testimonial/main-home/quote2.png" alt="">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</div>
                                <div class="author-img">
                                    <img src="images/testimonial/main-home/3.jpg" alt="">
                                </div>
                            </div>
                            <div class="author-part">
                                <a class="name" href="#">Deluar Hossen</a>
                                <span class="designation">Web Developer</span>
                            </div>
                        </div>
                        <div class="testi-item">
                            <div class="author-desc">                                
                                <div class="desc"><img class="quote" src="images/testimonial/main-home/quote2.png" alt="">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway.</div>
                                <div class="author-img">
                                    <img src="images/testimonial/main-home/4.jpg" alt="">
                                </div>
                            </div>
                            <div class="author-part">
                                <a class="name" href="#">Asif Ahmed</a>
                                <span class="designation">App Developer</span>
                            </div>
                        </div>
                    --> </div>
                </div>
            </div>
            
               <!--  <div class="map-canvas pt-120 md-pt-80">
                    <iframe src="https://maps.google.com/maps?q=nitsolutions&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                </div>  -->
            </div>
            <!-- Contact Section Start -->
