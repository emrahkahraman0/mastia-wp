<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php
    bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon.png" type="image/x-icon" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
    <?php
        global $page, $paged;
        wp_title( '|', true, 'right' );
        bloginfo( 'name' );
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
        echo " | $site_description";
        if ( $paged >= 2 || $page >= 2 )
        echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );
    ?>
    </title>

    <?php wp_head(); ?>

    <!-- Styles -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/dist/css/reset.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/dist/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/dist/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/dist/css/lightbox.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/dist/css/mastia.css">

</head>
<body>

<div id="top_header">

    <div class="container">

        <div class="top_header">

            <div class="top_header_social">
                <ul>
                    <li>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </li>
                </ul>
            </div>
            <!-- top_header_social -->
            <div class="top_header_text">
                <div class="icon-item">
                    <i class="fal fa-clock"></i>
                    <h6>Mon - Sat: 7:00 - 17:00</h6>
                </div>
                <!-- icon-item -->
                <div class="icon-item">
                    <i class="fal fa-phone-alt"></i>
                    <h6>+ 386 40 111 5555</h6>
                </div>
                <!-- icon-item -->
                <div class="icon-item">
                    <i class="fal fa-envelope"></i>
                    <h6>info@yourdomain.com</h6>
                </div>
                <!-- icon-item -->
            </div>
            <!-- top_header_text -->

        </div>
        <!-- top_header -->

    </div>
    <!-- container -->

</div>
<!-- top_header# -->

<div id="header">

    <div class="container">
    
        <div class="header-wrapper">
    
            <div class="logo">
                <?php the_custom_logo(); ?>
            </div>
            <!-- logo -->

            <?php 
            
                wp_nav_menu( array(
                    'theme_location'   => 'primary',
                    'menu_class'       => 'menu',
                ))
                    
            ?>
            <!-- menu -->
    
            <div class="hamburger">
                <i class="fas fa-bars toggle"></i>
                <i class="fas fa-times toggle"></i>
            </div>
            <!-- hamburger -->
    
        </div>
        <!-- header-wrapper -->
    
    </div>
    <!-- container -->
    
</div>
<!-- header# -->