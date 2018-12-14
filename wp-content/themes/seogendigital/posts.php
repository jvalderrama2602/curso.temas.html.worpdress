   <!-- Latest News Area Start -->
   <div class="latest-news-area section-pt section-pb-80  bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- section-title Start -->
                    <div class="section-title">
                        <h4>ULTIMOS ARTICULOS</h4>
                        <h3>What We <span>Have</span></h3>
                    </div>
                    <!--// section-title End -->
                </div>
            </div>
            <div class="row latest-blog-active">
<?php if(have_posts()):
    while(have_posts()): the_post(); ?>
                <div class="col-lg-4">
                    <!-- single-latest-blog Start -->
                    <div class="single-latest-blog mb--30 mt--30">
                        <div class="latest-blog-image">
                            <a href="<?php the_permalink() ?>"><img src="<?php echo get_bloginfo('wpurl'); ?>/wp-content/themes/seogendigital/assets/images/blog/blog-01.jpg" alt=""></a>
                        </div>
                        <div class="latest-blog-cont">
                            <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </div><!--// single-latest-blog End -->
                </div>
<?php endwhile; else: ?>
            <div class="row latest-blog-active">
                <div class="col-lg-4">
                    <!-- single-latest-blog Start -->
                    <div class="single-latest-blog mb--30 mt--30">
                        <div class="latest-blog-image">
                            <a href="blog-details-left-sidebar.html"><img src="<?php echo get_bloginfo('wpurl'); ?>/wp-content/themes/seogendigital/assets/images/blog/blog-01.jpg" alt=""></a>
                        </div>
                        <div class="latest-blog-cont">
                            <h3><a href="blog-details-left-sidebar.html">No hay posts publicados</a></h3>
                            <p>Animate a escribir</p>
                        </div>
                    </div><!--// single-latest-blog End -->
                </div>
                </div>
<?php endif; ?>
               
            </div>
        </div>
    </div>
    <!-- Latest News Area End -->