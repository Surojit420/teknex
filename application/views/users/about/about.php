  <!-- Breadcrumbs Start -->
    <?php if(!empty($banner_row->image)) { ?>
             <!-- <div class="rs-breadcrumbs img1" style="background:url(<?=base_url()?>webroot/admin/images/banner/<?=$banner_row->image?>)">  -->
             <div class="rs-breadcrumbs img1" style="background:url(<?=base_url()?>webroot/admin/images/banner/<?php if(!empty($banner_row->image)){echo $banner_row->image;} ?>)"> 
                <div class="breadcrumbs-inner text-center">

                    <h1 class="page-title">About</h1>
                    <ul>
                        <li title="Braintech - IT Solutions and Technology Startup HTML Template">
                            <a class="active" href="<?=base_url()?>">Home</a>
                        </li>
                        <li>About</li>
                    </ul>

                    <div class="col-lg-5 col-md-12 pl-70 md-pl-15">
                            <div class="rs-contact">
                                
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
            <!-- Breadcrumbs End -->
<!-- About Section Start -->
<?php foreach ($about_data as $key => $value) 
{
    ?>
            <div class="rs-about gray-color pt-120 pb-120 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 md-mb-30">
                            <div class="rs-animation-shape">
                                <div class="images">
                                   <img src="<?=base_url()?>webroot/admin/images/aboutus/<?=$value->image?>" alt=""> 
                                </div>

                                <div class="middle-image2">
                                   <img class="dance3" src="images/about/effect-1.png" alt=""> 
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 pl-60 md-pl-15">
                            <div class="contact-wrap">
                                <div class="sec-title mb-30">
                                    <div class="sub-text style-bg">About Us</div>
                                    <h2 class="title pb-38">
                                       <?=$value->about_title?>
                                    </h2>
                                    <div class="desc pb-35">
                                        <?=$value->short_description?>
                                    </div>
                                    <p class="margin-0 pb-15">
                                       <?=$value->description?>
                                    </p>
                                </div>
                               <!--  <div class="btn-part">
                                    <a class="readon learn-more" href="contact.html">Learn-More</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="shape-image">
                        <img class="top dance" src="<?=base_url()?>webroot/admin/images/aboutus/051f1ef73d1314ef3d9cb71e3770c908_thmb.jpg" alt="">
                    </div>
                </div>
            </div>
        <?php } ?>
            

            <!-- Counter Section Start -->
            <div class="rs-contact-wrap bg5 pt-120 pb-390 md-pt-80">
               <div class="container">
                 <div class="sec-title2 text-center mb-30">
                     <span class="sub-text style-bg white-color">Schedule Your Appointment</span>
                     <h2 class="title white-color">
                       We here to help you 24/7 with experts
                     </h2>
                 </div>           
               </div>
            </div>
            <!-- Counter Section End -->

            <!-- Video Section End -->
            <div class="rs-video-wrap style2 inner pb-120 md-pb-80">
                <div class="container">
                    <div class="row margin-0 gray-color">
                        <div class="col-lg-6 padding-0">
                            <div class="video-item">
                                <div class="rs-videos">
                                
                                </div> 
                            </div>
                        </div>
                        <div class="col-lg-6 padding-0">
                            <div class="rs-requset">                              
                                <div class="sec-title2 text-center mb-30">
                                     <span class="sub-text style-bg white-color">Schedule Your Appointment</span>
                                     <!-- <h2 class="title white-color">
                                       We here to help you 24/7 with experts
                                     </h2> -->
                                </div>
                                <form id="contact-form" method="post" action="<?=base_url()?>appointment">
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-lg-12 mb-30 col-md-6 col-sm-6">
                                                <input class="from-control" type="text" id="name" name="name" placeholder="Name" required>
                                            </div> 
                                             <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                                <input class="from-control" type="email" id="email" name="email" placeholder="E-Mail" required>
                                            </div>    
                                            <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                                <input class="from-control" type="number" id="phone" name="phone" placeholder="Phone Number" required>
                                            </div> 
                                      
                                            <div class="col-lg-12 mb-45">
                                                <textarea class="from-control" id="message" name="description" placeholder="Your description" required></textarea>
                                            </div>
                                        </div>
                                        <div class="btn-part">
                                           <button class="submit sub-small" >Submit Now</button>
                                        </div> 
                                    </fieldset>
                                </form> 
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            <!-- Video Section End -->
