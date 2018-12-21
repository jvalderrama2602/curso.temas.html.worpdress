<?php get_header(); ?>

<!-- Main Wrapper Start -->
<div class="main-wrapper">
   
    <!-- Header-area start -->

    <!-- Header-area end -->
    
    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area section-ptb">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="breadcrumb-title">Blog Details</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="index.html">Blog Details</a></li>
                        <li class="breadcrumb-item active">Blog</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->
    
    
    <div class="blog-details-area section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 order-2 order-lg-2">
                    <!-- shop-sidebar-wrap start -->
                    <div class="blog-sidebar-wrap">

                        <!-- shop-sidebar start -->
                        <div class="blog-sidebar mb--30">
                            <h4 class="title">Search</h4>
                            <div class="search-post">
                                <form  action="#" class="search-blog">
                                    <input type="text" placeholder="Enter Keywords...">
                                    <button class=" btn-search" type="submit"><span class="bi bi-search"></span></button>
                                </form>
                            </div>
                        </div>
                        <!-- shop-sidebar end -->

                        <!-- shop-sidebar start -->
                        <div class="blog-sidebar mb--30">
                            <h4 class="title">CATEGORIES</h4>
                            <ul>  
                                <li><a href="blog-details.html">design effective <span>(11)</span></a></li>
                                <li><a href="blog-details.html">Digital Market Launched <span>(13)</span></a></li>
                                <li><a href="blog-details.html">Appear in Google’s <span>(6)</span></a></li>
                                <li><a href="blog-details.html">A Software Engineer? <span>(51)</span></a></li>
                            </ul>
                        </div>
                        <!-- shop-sidebar end -->

                        <!-- shop-sidebar start -->
                        <div class="sidbar-blog mb--30">
                            <!-- sidbar-blog-inner start -->
                            <div class="sidbar-blog-inner">
                                <div class="sidbar-blog-image">
                                    <a href="product-details.html"><img src="assets/images/blog/blog-03.jpg" alt=""></a>
                                </div>
                                <div class="sidbar-blog-content text-left">
                                    <h3><a href="blog-details.html">Cleaning & Optimization</a></h3>
                                </div>
                            </div>
                            <!-- sidbar-blog-inner end -->
                            <!-- sidbar-blog-inner start -->
                            <div class="sidbar-blog-inner">
                                <div class="sidbar-blog-image">
                                    <a href="blog-details.html"><img src="assets/images/blog/blog-02.jpg" alt=""></a>
                                </div>
                                <div class="sidbar-blog-content text-left">
                                    <h3><a href="blog-details.html">A/C Installation</a></h3>
                                </div>
                            </div>
                            <!-- sidbar-blog-inner end -->
                            <!-- sidbar-blog-inner start -->
                            <div class="sidbar-blog-inner">
                                <div class="sidbar-blog-image">
                                    <a href="blog-details.html"><img src="assets/images/blog/blog-01.jpg" alt=""></a>
                                </div>
                                <div class="sidbar-blog-content text-left">
                                    <h3><a href="blog-details.html">Maintaince & Installation Guide</a></h3>
                                </div>
                            </div>
                            <!-- sidbar-blog-inner end -->
                        </div>
                        <!-- shop-sidebar end -->

                        <!-- shop-sidebar start -->
                        <div class="blog-sidebar mb--30">
                            <h4 class="title">Archives</h4>
                            <ul>  
                                <li><a href="blog-details.html">September 2018</a></li>
                                <li><a href="blog-details.html">July 2018</a></li>
                                <li><a href="blog-details.html">November 2017</a></li>
                                <li><a href="blog-details.html">September 2017</a></li>
                            </ul>
                        </div>
                        <!-- shop-sidebar end -->

                        <!-- shop-sidebar start -->
                        <div class="blog-sidebar">
                            <h4 class="title">Hot Tags</h4>
                            <div class="sidebar-tag">
                                <a href="#">Digital</a>
                                <a href="#">Google</a>
                                <a href="#">Hot</a>
                                <a href="#">Software</a>
                                <a href="#">design</a>
                            </div>
                        </div>
                        <!-- shop-sidebar end -->
                    </div>
                    <!-- shop-sidebar-wrap end -->
                </div>
                <div class="col-lg-8 order-1 order-lg-1">
                    <!-- blog-details-wrapper start -->
                    <div class="blog-details-wrapper">
                        <div class="blog-details-image">
                            <img src="assets/images/blog/blog-details.png" alt="">
                        </div>
                        <div class="blog-inner">
                            <ul class="meta">
                                <li>By : <a href="#">admin</a></li>
                                <li>30 may 2018</li>
                                <li><a href="#">3 Comment</a></li>
                            </ul>
                        </div>
                        <div class="postinfo-wrapper">
                            <div class="post-info">
                            <?php while (have_posts()):the_post();?>

                            <?php the_content();?>

                            <?php endwhile; ?>
                                <div class="post-commet">
                                    <a class="blog-comment" href="#">0 COMMENT</a>
                                </div>
                            </div>
                            <div class="review_address_inner">
                                    <!-- Start Single Review -->
                                    <div class="pro_review">
                                        <div class="review_thumb">
                                            <img alt="review images" src="assets/images/review/comment-1.jpg">
                                        </div>
                                        <div class="review_details">
                                            <div class="review_info">
                                                <h4><a href="#">Dj Sonika</a></h4>
                                                <div class="rating_send">
                                                    <a href="#"><span class="bi bi-reply"></span></a>
                                                </div>
                                            </div>
                                            <div class="review_date">
                                                <span>27 Jun, 2018 at 3:30pm</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at estei to bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                                        </div>
                                    </div>
                                    <!-- End Single Review -->
                                    <!-- Start Single Review -->
                                    <div class="pro_review ans">
                                        <div class="review_thumb">
                                            <img alt="review images" src="assets/images/review/comment-2.jpg">
                                        </div>
                                        <div class="review_details">
                                            <div class="review_info">
                                                <h4><a href="#">Gerald Barnes</a></h4>
                                                <div class="rating_send">
                                                    <a href="#"><span class="bi bi-reply"></span></a>
                                                </div>
                                            </div>
                                            <div class="review_date">
                                                <span>27 Jun, 2018 at 4:32pm</span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at estei to bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                                        </div>
                                    </div>
                                    <!-- End Single Review -->
                                </div>
                            <div class="comments-area comments-reply-area">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h3 class="comment-reply-title">Leave a Reply</h3>
                                        <form action="#" class="comment-form-area">
                                            <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p>
                                            <p class="comment-form-comment">
                                                <label>Comment</label> 
                                                <textarea class="comment-notes" required="required"></textarea>
                                            </p>
                                            <div class="comment-input">
                                                <p class="comment-form-author">
                                                    <label>Name <span class="required">*</span></label> 
                                                    <input type="text" required="required" name="Name">
                                                </p>
                                                <p class="comment-form-email">
                                                    <label>Email <span class="required">*</span></label> 
                                                    <input type="text" required="required" name="email">
                                                </p>
                                                <p class="comment-form-url">
                                                    <label>Website</label>
                                                    <input type="text" name="url">
                                                </p>
                                            </div>
                                            <div class="comment-form-submit">
                                                <input type="submit" value="Post Comment" class="comment-submit">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- blog-details-wrapper end -->
                </div>
            </div>
        </div>
    </div>
    
    <?php get_footer(); ?>