  <!-- Breadcrumbs Start -->
  <!-- <div class="rs-breadcrumbs " style="background:url(<?=base_url()?>webroot/admin/images/banner/<?=$banner_row->image?>)"> -->
    <?php if(!empty($banner_row->image)) { ?>
     <div class="rs-breadcrumbs img1" style="background:url(<?=base_url()?>webroot/admin/images/banner/<?php if(!empty($banner_row->image)){echo $banner_row->image;} ?>)"> 
                <div class="breadcrumbs-inner text-center">
                    <h1 class="page-title">product</h1>
                    <ul>
                        <li title="Braintech - IT Solutions and Technology Startup HTML Template">
                            <a class="active" href="<?=base_url()?>">Home</a>
                        </li>
                       <li>Blog</li>
                    </ul>
                </div>
            </div>
            <?php }?>
            <!-- Breadcrumbs End -->

            <!-- Blog Section Start -->
            <div class="rs-inner-blog pt-120 pb-120 md-pt-90 md-pb-90">
                <div class="container">
                    <div class="row">
                       
                        <div class="col-lg-12 pr-35 md-pr-15">
                            <div class="row">
                                <?php foreach($product_data as $service_row){ ?>
                                <div class="col-lg-4 mb-50">
                                    <div class="blog-item">
                                        <div class="blog-img">
                                            <a href="<?=base_url()?>blog_details/<?=slugify($service_row->title)?>?uid=<?=$service_row->uniqcode?>"><img src="<?=base_url()?>webroot/admin/images/client/<?=$service_row->image?>" alt=""></a>
                                            <ul class="post-categories">
                                                <li><a href="<?=base_url()?>blog_details/<?=slugify($service_row->title)?>?uid=<?=$service_row->uniqcode?>">Application Testing</a></li>
                                            </ul>
                                        </div>
                                        <div class="blog-content">
                                            <h3 class="blog-title"><a href="<?=base_url()?>blog_details/<?=slugify($service_row->title)?>?uid=<?=$service_row->uniqcode?>">
                                            <?=$service_row->title?>
                                            </a></h3>
                                            <div class="blog-meta">
                                                <ul class="btm-cate">
                                                    <li>
                                                        <div class="blog-date">
                                                            <i class="fa fa-calendar-check-o"></i>  <?=date('F j, Y', strtotime($service_row->create_date))?>                                                        
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="author">
                                                            <i class="fa fa-user"></i> Admin  
                                                        </div>
                                                    </li> 
                                                </ul>
                                            </div>
                                            <div class="blog-desc">   
                                            <?=$service_row->description?>
                                            </div>
                                           <!--  <div class="blog-button inner-blog">
                                                <a class="blog-btn" href="<?=base_url()?>blog_details/<?=slugify($service_row->title)?>?uid=<?=$service_row->uniqcode?>"><?=$service_row->link?></a>
                                            </div> -->
                                            <div class="btn-part">                                            
                                            <a class="readon learn-more" href="<?=$service_row->link?>">Check Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <!-- Blog Section End --> 
