          
              <!-- Banner Section Start -->
              <?php if(!empty($banner_row)) { ?>
            <div class="rs-banner main-home pt-100 pb-100  md-pt-80 md-pb-80" style="background:url(<?=base_url()?>webroot/admin/images/banner/<?=$banner_row->image?>); background-repeat: no-repeat; background-size: cover; min-height: 575px;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-12 pr-140 md-mb-140 md-pr-15">
                            <div class="content-wrap">
                                <h1 class="it-title"><?=$banner_row->title_name?></h1>
                                <div class="description">
                                    <p class="desc">
                                      <?=$banner_row->description?>
                                    </p>
                                </div>
                               
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
          <?php } ?>

            <!-- About Section Start -->
            <div id="rs-about" class="rs-about style1 pt-130 pb-190 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-12 md-mb-50">
                            <div class="rs-animation-shape">
                                <div class="pattern">
                                   <img src="<?= base_url() ?>webroot/users/images/about/main-home/about-part-1.png" alt=""> 
                                </div>
                                <div class="middle">
                                   <img class="dance" src="<?= base_url() ?>webroot/users/images/about/main-home/about-part-2.png" alt=""> 
                                </div>
                                <div class="bottom-shape">
                                   <img class="dance2" src="<?= base_url() ?>webroot/users/images/about/main-home/about-part-3.png" alt=""> 
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12 pl-40 md-pl-15 md-pt-200 sm-pt-0">
                            <div class="sec-title mb-30">
                                <div class="sub-text">About Us</div>
                                <h2 class="title pb-20">
                                    We Are Increasing Business Success With Technology
                                </h2>
                                <div class="desc pr-90 md-pr-0">
                                   Over 25 years working in IT services developing software applications and mobile apps for clients all over the world.
                                </div>
                            </div>
                            <!-- Skillbar Section Start -->
                            <div class="row">
                                <div class="col-lg-10">
                                    <div class="rs-skillbar style1">
                                       <div class="cl-skill-bar">
                                          <!-- Start Skill Bar -->
                                          <span class="skillbar-title">Project Complete</span>
                                          <div class="skillbar" data-percent="20">
                                              <p class="skillbar-bar"></p>
                                              <span class="skill-bar-percent"></span> 
                                          </div>
                                          <!-- Start Skill Bar -->
                                          <span class="skillbar-title">Project Running</span>
                                          <div class="skillbar" data-percent="80">
                                              <p class="skillbar-bar"></p>
                                              <span class="skill-bar-percent"></span> 
                                          </div>
                                          <!-- Start Skill Bar -->
                                          <span class="skillbar-title">Rating and Review</span>
                                          <div class="skillbar" data-percent="95">
                                              <p class="skillbar-bar"></p>
                                              <span class="skill-bar-percent"></span> 
                                          </div>    
                                          <!-- Start Skill Bar -->
                                          <span class="skillbar-title">Web Development</span>
                                          <div class="skillbar" data-percent="78">
                                              <p class="skillbar-bar"></p>
                                              <span class="skill-bar-percent"></span> 
                                          </div>
                                      </div>
                                   </div>
                                </div>
                            </div>
                           <!-- Skillbar Section End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Section End -->

            <!-- Services Section Start -->
            <div class="rs-services main-home gray-color pt-120 pb-120 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="sec-title2 text-center mb-45">
                        <span class="sub-text">Services</span>
                        <h2 class="title">
                           We Are Offering All Kinds of IT Solutions Services
                        </h2>
                        <div class="heading-line"></div>
                    </div>
                    <div class="row">
					<?php foreach($service_data as $service_row){ ?>
                        <div class="col-lg-4 col-md-6 mb-25">
                           <div class="services-item">
                               <div class="services-icon">
                                   <div class="image-part">
                                       <img src="<?= base_url() ?>webroot/admin/images/service/<?=$service_row->image?>" alt=""> 
                                   </div>
                               </div>
                               <div class="services-content">
                                   <div class="services-text">
                                       <h3 class="services-title"><a href="software-development.html"><?=$service_row->title_name?></a></h3>
                                   </div>
                                   <div class="services-desc">
                                       <p>
									   <?=$service_row->description?>
                                       </p>
                                   </div>
                               </div>
                           </div> 
                        </div>
						<?php } ?>
                    </div>
                </div>
            </div>
            <!-- Services Section End -->
         

            <!-- Project Section Start -->
            <div class="rs-project bg5 style1 pt-110 md-pt-80">
                <div class="container">
                   <div class="sec-title2 text-center mb-45 md-mb-30">
                       <span class="sub-text white-color">Project</span>
                       <h2 class="title white-color">
                          We Are Offering All Kinds of IT Solutions Services
                       </h2>                       
                   </div>
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="true" data-md-device-dots="false">
					<?php foreach($project_data as $project_row){ ?>
						<div class="project-item">
                            <div class="project-img">
                                <a target="_blank" href="<?=$project_row->link?>"><img src="<?= base_url() ?>webroot/admin/images/client/<?=$project_row->image?>" alt="images"></a>
                            </div>
                            <div class="project-content">
                                <h3 class="title"><a target="_blank" href="<?=$project_row->link?>"><?=$project_row->title?></a></h3>
                                <span class="category"><a target="_blank" href="<?=$project_row->link?>"><!-- <?=$project_row->description?> --></a></span>
                            </div>
                        </div>
						<?php } ?>
                    </div>
                </div>
            </div>
            <!-- Project Section End -->
<!-- Testimonial Section Start -->
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
                        foreach ($testimonials as $key => $value) {
                         ?>
                        <div class="testi-item">
                            <div class="author-desc">                                
                                <div class="desc"><img class="quote" src="webroot/user/images/testimonial/main-home/quote2.png" alt=""><?=$value->description?></div>
                                <div class="author-img">
                                    <img src="webroot/admin/images/testimonials/<?=$value->image?>" alt="">
                                </div>
                            </div>
                            <div class="author-part">
                                <a class="name" href="#"><?=$value->name?></a>
                                <span class="designation">CEO, Brick Consulting</span>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
           

            <!-- Blog Section Start -->
            <div id="rs-blog" class="rs-blog pb-120 pt-120 md-pt-80 md-pb-80">
                <div class="container">  
                    <div class="sec-title2 text-center mb-45">
                        <span class="sub-text">Blogs</span>
                            <h2 class="title testi-title">
                                Read Our Latest Tips & Tricks
                            </h2>
                        <div class="heading-line">

                        </div>
                    </div>
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="false">
                    <?php foreach($blog_data as $blog_row){ ?>    
					<div class="blog-item">
                            <div class="image-wrap">
                                <a href="blog-details.html">
									<img src="<?= base_url() ?>webroot/admin/images/blogs/<?=$blog_row->image?>" alt="">
								</a>
                            </div>
                            <div class="blog-content">
                               <ul class="blog-meta">
                                   <li class="date"><i class="fa fa-calendar-check-o"></i> <?=date('F j, Y', strtotime($blog_row->create_date))?></li>
                                   <li class="admin"><i class="fa fa-user"></i> Admin</li>
                               </ul>
                               <h3 class="blog-title"><a href="blog-details.html"><?=$blog_row->title?></a></h3>
                               <p class="desc"><?=$blog_row->description?>...</p>
                               <div class="blog-button"><a href="blog-details.html">Learn More</a></div>
                            </div>
                        </div>
						<?php } ?>
                     </div>
                </div>
            </div>
            <!-- Blog Section End -->
