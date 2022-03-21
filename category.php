<?php get_header(); ?>

<div id="page_category">

    <div class="container">

        <div class="page_category">

            <div class="page_category_title">
                <?php printf( __( '%s', 'solopine' ), single_cat_title( '', false ) ); ?>
            </div>
            <!-- page_category_title -->
            <div class="page_category_link">
                <ul>
                    <li><a href="<?php bloginfo('url'); ?>">Home</a></li>
                    <li><span>></span></li>
                    <li><a href="<?php bloginfo('home'); ?>/blog">Blog</a></li>
                </ul>
            </div>
            <!-- page_category_link -->

        </div>
        <!-- page_category -->

    </div>
    <!-- container -->

</div>
<!-- page_category# -->

<div id="our_blog">

    <div class="container">

        <div class="our_blog row">

            <div class="our_blog_article col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">

                <?php while ( have_posts() ) : the_post(); ?>

                    <div class="post">

                        <?php if(has_post_thumbnail()): ?>
                            <img src="<?php the_post_thumbnail_url('large'); ?>" class="img-fluid">
                        <?php endif; ?>

                        <div class="category"><a href="#"><?php the_category(', ') ?></a></div>
                        <h6><a href="<?php the_permalink(''); ?>"><?php the_title(); ?></a></h6>
                        <div class="blog_desc">
                            <div class="date">
                                <i class="icon-calendar"></i><span><?php the_time("F j Y"); ?> </span>
                            </div>
                            <div class="author">
                                <i class="icon-user"></i><span><?php the_author(''); ?></span>
                            </div>
                        </div>
                        <!-- blog_desc -->
                        <p><?php the_excerpt(); ?></p>
                        <button><a href="<?php the_permalink(''); ?>">read more</a></button>

                    </div>
                    <!-- post -->

                <?php endwhile;?>

            </div>
            <!-- our_blog_article -->

            <?php get_sidebar(); ?>

        </div>
        <!-- our_blog -->

        <ul class="page">
            <?php sayfalama(); ?>
        </ul>
        <!-- page -->

    </div>
    <!-- container -->

</div>
<!-- our_blog# -->

<?php get_template_part( 'templates/info', 'page' ); ?>

<?php get_footer(); ?>