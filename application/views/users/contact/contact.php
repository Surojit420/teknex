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
            <!-- <div class="rs-contact pt-120 md-pt-80">
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
            </div>-->
            <!-- Contact Section Start --> 
             <!-- About Section Start -->
            <?php foreach ($company_data as $key => $value) {
               ?>
            <div class="rs-about gray-color pt-120 pb-120 md-pt-80 md-pb-80">
              
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 md-mb-30">
                            <div class="rs-animation-shape">
                                <div class="images">
                                   <img src="<?=base_url()?>/webroot/admin/images/contact/<?=$value->image?>" alt=""> 
                                </div>
                                <div class="middle-image2">
                                   <img class="dance3" src="images/about/effect-1.png" alt=""> 
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 pl-60 md-pl-15">
                            <div class="contact-wrap">
                                <div class="sec-title mb-30">
                                    <div class="sub-text style-bg">Contact Us</div>
                                    <h2 class="title pb-38">
                                      <?=$value->name?>
                                    </h2>
                                    <div class="desc pb-35">
                                      <?=$value->address?>
                                    </div>
                                    <p class="margin-0 pb-15">
                                     <?=$value->description?>
                                    </p>
                                </div>
                                <div class="btn-part">
                                    <!-- <a class="readon learn-more" href="">Learn-More</a> -->
                                    <a data-toggle="modal" class="readon learn-more" href="#myModal" onclick="set('<?=$value->uniqcode?>')">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shape-image">
                        <img class="top dance" src="images/about/dotted-3.png" alt="">
                    </div>
                </div>
              <?php } ?>
            </div>
            <!-- About Section End -->


<div class="modal inmodal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true" style="">
<div class="modal-dialog">
<div class="modal-content animated bounceInLeft" style="min-width: 690px;">
<div class="modal-header">
  Contact Us
<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>



</div>
<div class="modal-body gray-color" id="each_passenger_details">
                            <form  method="post" action="<?=base_url()?>contact_add" class="rs-requset">
                                    <div class="row ">
                                        <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                            <input class="from-control from-cls" type="text" id="name" name="name" placeholder="Name" required="">
                                        </div> 
                                        <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                            <input class="from-control from-cls" type="text" id="phone" name="phone" placeholder="Phone Number" required="">
                                        </div>
                                        <input type="hidden" name="value" id="value">
                                        <div class="col-lg-12 mb-30">
                                            <input class="from-control from-cls" type="text" id="email" name="email" placeholder="E-Mail" required="">
                                        </div>                                   
                                        <div class="col-lg-12 mb-30">
                                            <textarea class="from-control from-cls" id="message" name="massage" placeholder="Your message Here" required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="btn-part mb-30">
                                      <!-- <a class="submit sub-small" id="submit" href="<?=base_url()?>contact_add">Submit Now</a> -->
                                      <button class="submit sub-small" value="submit"></button>
                                    </div> 
                            </form> 
                </div>
</div>
    
</div>

</div>
        <!-- <a data-toggle="modal" class="btn btn-primary" href="#myModal">Form in simple modal box</a> -->

<style type="text/css">
  .from-cls{
    width: 100%;
    max-width: 100%;
    opacity: 1;
    padding: 10px 18px;
    border: 1px solid #F1F5FB;
  }
  #myModal{
    padding-right: 190px !important;
  }
</style>
<script> 
function set(a) 
{
  document.getElementById('value').value=a;
}
</script>