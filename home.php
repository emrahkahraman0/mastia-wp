<?php get_header(); ?>

<div id="page_banner">

    <div class="container">
    
        <div class="page_banner">
        
            <div class="page_banner_title"><a href="<?php bloginfo('home'); ?>/blog">blog</a></div>
            <div class="page_banner_href">
                <a href="<?php bloginfo('url'); ?>">Home</a> <span>></span> <span><?php the_title(); ?></span>
            </div>
        
        </div>
        <!-- page_banner -->

    </div>
    <!-- container -->

</div>
<!-- page_banner# -->

<div id="blog">

    <div class="container">

        <div class="row">

            <div class="blog-post col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">

            <?php while ( have_posts() ) : the_post(); ?>
            
                <div class="post">

                    <?php if(has_post_thumbnail()): ?>
                        <img src="<?php the_post_thumbnail_url('large'); ?>" class="img-fluid">
                    <?php endif; ?>

                    <div class="category"><a href="#"><?php the_category(', ') ?></a></div>
                    <h6><a href="<?php the_permalink(''); ?>"><?php the_title(); ?></a></h6>
                    <p><?php the_excerpt(); ?></p>
                    <button><a href="<?php the_permalink(''); ?>">read more</a></button>

                </div>
                <!-- post -->
  
            <?php endwhile;?>

            </div>
            <!-- blog-post -->

            <?php get_sidebar(); ?>

        </div>
        <!-- row -->

        <ul class="page">
            <?php sayfalama(); ?>
        </ul>
        <!-- page -->

    </div>
    <!-- container -->

</div>
<!-- blog# -->

<?php get_footer(); ?>