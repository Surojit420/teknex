<!-- Breadcrumbs Start -->
            <!-- <div class="rs-breadcrumbs img3" style="background:url(<?=base_url()?>webroot/admin/images/banner/<?=$banner_row->image?>)"> -->
              <?php if(!empty($banner_row->image)) { ?>
               <div class="rs-breadcrumbs img1" style="background:url(<?=base_url()?>webroot/admin/images/banner/<?php if(!empty($banner_row->image)){echo $banner_row->image;} ?>)"> 
                <div class="breadcrumbs-inner text-center">
                    <h1 class="page-title">Contact</h1>
                    <ul>
                        <li>
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
                        <div class="col-lg-4 md-mb-60">
                           <div class="contact-box">
                                <div class="sec-title mb-45">
                                    <span class="sub-text new-text white-color">Let's Talk</span>
                                    <h2 class="title white-color">Speak With Expert Engineers.</h2>
                                </div>
                                <?php if(!empty($contact_data)) { ?>
                               <div class="address-box mb-25">
                                   <div class="address-icon">
                                       <i class="fa fa-home"></i>
                                   </div>
                                   <div class="address-text">
                                        <span class="label">Email:</span>
                                        <a href="mailto:<?=$contact_data->email?>"><?=$contact_data->email?></a>
                                   </div>
                               </div>
                               <div class="address-box mb-25">
                                   <div class="address-icon">
                                       <i class="fa fa-phone"></i>
                                   </div>
                                   <div class="address-text">
                                       <span class="label">Phone:</span>
                                       <a href="tel:<?=$contact_data->phone?>"><?=$contact_data->phone?></a>
                                   </div>
                               </div>
                               <div class="address-box">
                                   <div class="address-icon">
                                       <i class="fa fa-map-marker"></i>
                                   </div>
                                   <div class="address-text">
                                       <span class="label">Address:</span>
                                       <div class="desc"><?=$contact_data->contact_address?></div>
                                   </div>
                               </div>
                             <?php }?>
                           </div>
                        </div> 
                        <div class="col-lg-8 pl-70 md-pl-15">
                            <div class="contact-widget">
                               <div class="sec-title2 mb-40">
                                   <span class="sub-text contact mb-15">Get In Touch</span>
                                   <h2 class="title testi-title">Fill The Form Below</h2>

                               </div>
                                
                                <form  method="post" action="<?=base_url()?>contact_add">
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
                                                <input class="from-control" type="text" id="Website" name="subject" placeholder="Your Website" >
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
				<?php if(!empty($contact_data->map)){?>
                <div class="map-canvas pt-120 md-pt-80">
				<?=$contact_data->map?>">   
                </div> 
				<?php } ?>
            </div>
            <!-- Contact Section Start -->
