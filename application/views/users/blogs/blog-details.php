  <!-- Breadcrumbs Start -->
  <?php if(!empty($banner_row->image)) { ?>
            <div class="rs-breadcrumbs" style="background:url(<?=base_url()?>webroot/admin/images/banner/<?=$banner_row->image?>)">
                <div class="breadcrumbs-inner text-center">
                    <h1 class="page-title new-title pb-10">Servo Project Joins The Linux Foundation Fold Desco</h1>
                    <ul>
                        <li title="Braintech - IT Solutions and Technology Startup HTML Template">
                            <a class="active" href="<?=base_url()?>">Home</a>
                        </li>
                        <li title="Go to Blog"><a class="active" href="<?=base_url()?>blog">Blog</a></li>
            
                    </ul>
                </div>
            </div>
            <?php }?>
            <!-- Breadcrumbs End -->

            <!-- Blog Section Start -->
            <div class="rs-inner-blog pt-120 pb-120 md-pt-90 md-pb-90">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 order-last">
                            <div class="widget-area">
                                <div class="search-widget mb-50">
                                    <div class="search-wrap">
                                        <input type="search" placeholder="Searching..." name="s" class="search-input" value="">
                                        <button type="submit" value="Search"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                                <div class="recent-posts mb-50">
                                    <div class="widget-title">
                                        <h3 class="title">Latest Posts</h3>
                                    </div>
                                     <?php foreach ($title as $key => $value) 
                                    {
                                       ?>     
                                     <div class="recent-post-widget">
                                        <div class="post-img">
                                            <a href="<?=base_url()?>blog_details/<?=slugify($value->title)?>?uid=<?=$value->uniqcode?>"><img src="<?=base_url()?>webroot/admin/images/blogs/<?=$value->image?>" alt=""></a>
                                        </div>
                                        <div class="post-desc">
                                            <a href="<?=base_url()?>blog_details/<?=slugify($value->title)?>?uid=<?=$value->uniqcode?>"><?=$value->title?> </a>
                                            <span class="date">
                                                <i class="fa fa-calendar"></i>
                                                 <?=date('F j, Y', strtotime($value->create_date))?>
                                            </span>
                                        </div>
                                    </div> 
                                <?php } ?>
                                    
                                </div>
                               
                            </div>
                        </div>
                        <div class="col-lg-8 pr-35 md-pr-15">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="blog-details">
                                        <div class="bs-img mb-35">
                                             <a href="#"><img src="<?=base_url()?>webroot/admin/images/blogs/<?=$blog_details->image?>" alt="hyiggggg"></a> 
                                        </div>
                                        <div class="blog-full">
                                            <ul class="single-post-meta">
                                                <li>
                                                    <span class="p-date"><i class="fa fa-calendar-check-o"></i> <?=date('F j, Y', strtotime($blog_details->create_date))?>  </span>
                                                </li> 
                                                <li>
                                                    <span class="p-date"> <i class="fa fa-user"></i> admin </span>
                                                </li> 
                                                <li class="Post-cate">
                                                    <div class="tag-line">
                                                        <i class="fa fa-book"></i>
                                   
                                                        <a href="#">Strategy</a>
                                                    </div>
                                                </li>
                                                <li class="post-comment"> <i class="fa fa-comments-o"></i> 1</li>
                                            </ul>
                                            <h3><?=$blog_details->title?></h3>
                                            <p>
                                                
                                                 <?=$blog_details->description?> 
                                            </p>
                                            
                                           <!-- <h3>Digital technology on the cutting edge</h3>
                                            <p>
                                                
                                            </p>
                                            <ul class="dots">
                                                <li>How will digital activities impact traditional manufacturing.</li>
                                                <li>All these digital elements and projects aim to enhance .</li>
                                                <li>I monitor my staff with software that takes screenshots.</li>
                                                <li>Laoreet dolore magna niacin sodium glutimate aliquam hendrerit.</li>
                                                <li>Minim veniam quis niacin sodium glutimate nostrud exerci dolor.</li>
                                            </ul>
                                            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                                            <div class="bs-img mb-30">
                                                <img src="images/blog/inner/6.jpg" alt="">
                                            </div>
                                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>
                                             <h3 class="comment-title">1 comment on “Servo Project Joins The Linux Foundation Desco”</h3>
                                            <div class="comment-body">
                                               <div class="nitsolutions-logo">
                                                   <img src="images/nitsolutions.png" alt="">
                                               </div>
                                               <div class="comment-meta">
                                                   <span><a href="#">Admin</a></span>
                                                   <a href="#">December 3, 2020 at 8:30 am</a>
                                                   <p class="mb-15">
                                                       Aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est
                                                   </p>
                                                   <div class="btn-part">
                                                      <a class="readon reply" href="#">Reply</a> 
                                                   </div>
                                               </div>
                                            </div>
                                            <h3 class="comment-title">Leave a Reply</h3>
                                            <p>Your email address will not be published. Required fields are marked *</p>
                                            <div class="comment-note">
                                                <div id="form-messages"></div>
                                                <form id="contact-form" method="post" action="mailer.php">
                                                    <fieldset>
                                                        <div class="row">
                                                            <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                                                <input class="from-control" type="text" id="name" name="name" placeholder="Name*" required="">
                                                            </div> 
                                                            <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                                                <input class="from-control" type="text" id="email" name="email" placeholder="E-Mail*" required="">
                                                            </div>
                                                            <div class="col-lg-12 mb-30">
                                                                <textarea class="from-control" id="message" name="message" placeholder="Your message Here" required=""></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="btn-part">
                                                           <a class="readon learn-more post" href="#">Post Comment</a>
                                                        </div> 
                                                    </fieldset>
                                                </form>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <!-- Blog Section End --> 