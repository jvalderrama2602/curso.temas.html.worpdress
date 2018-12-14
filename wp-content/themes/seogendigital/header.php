<!doctype html>
<html class="no-js" <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?> ">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.ico">
    <!-- head de wordpress -->
    <?php wp_head(); ?>
</head>
<body>
<!-- Main Wrapper Start -->
<div class="main-wrapper">
       <!-- Header-area start -->
    <header class="header header-sticky">
        <div class="header-area inner-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <!-- logo Start -->
                        <div class="logo">
                            <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_bloginfo('wpurl'); ?>/wp-content/themes/seogendigital/assets/images/logo/logo.png" alt=""></a>
                        </div><!--// logo End -->
                    </div>
                    <div class="col-lg-8">
                        <!-- main-menu-area Start -->
                        <div class="main-menu">
                      <!--  <nav class="main-navigation">-->
                        <?php 
                                if(has_nav_menu('menu_ppal')):

                                wp_nav_menu(array( 'menu' => '11',
                                 'container' => 'nav', 
                                 'container_class' =>'main-navigation',
                                 'menu_class' => 'main-navigation', 
                                 'menu_id' => '',
                                 'echo' => true,
                                 'fallback_cb' => 'wp_page_menu',
                                 'before' => '', 
                                 'after' => '', 
                                 'link_before' => '', 
                                 'link_after' => '', 
                                 'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                 'item_spacing' => 'preserve',
                                 'depth' => 0, 
                                 'walker' => '',
                                 'theme_location' => 'menu_ppal'                 
                                    
                                ));
                            else:

                                wp_list_pages('title_li'); 
                                
                            endif;
                                ?>

                          


                         <!--       <ul>
                        

                                    <li class="active"><a href="index.html">HOME</a>
                                        <ul class="sub-menu">
                                            <li><a href="index.html">Home Page 1</a></li>
                                            <li><a href="index-2.html">Home Page 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html">ABOUT</a></li>
                                    <li><a href="service.html">SERVICE</a>
                                        <ul class="sub-menu">
                                            <li><a href="service-2.html">Service 2</a></li>
                                            <li><a href="service-3.html">Service 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index.html">PAGES</a>
                                        <ul class="sub-menu">
                                            <li><a href="errer-404.html">Error 404</a></li>
                                            <li><a href="case-studie.html">Case Study</a></li>
                                            <li><a href="project-details.html">Project Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog.html">BLOG</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-sidebar-left.html">Blog Left Sidebar</a></li>
                                            <li><a href="blog-sidebar-right.html">Blog Right Sidebar</a></li>
                                            <li><a href="blog-details-right-sidebar.html">Blog Details Right Sidebar</a></li>
                                            <li><a href="blog-details-left-sidebar.html">Blog Details Left Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">CONTACT</a></li>

                                 
                                </ul>-->
                            <!--</nav>-->
                        </div><!--// main-menu-area End -->
                    </div>
                    <div class="col">
                        <!-- mobile-menu start -->
                        <div class="mobile-menu d-block d-lg-none"></div>
                        <!-- mobile-menu end -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header-area end -->