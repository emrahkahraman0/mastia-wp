<?php get_header(); ?>

<div id="blog">

    <div class="container">

        <div class="row">

            <div class="blog-single col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">

            <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

                <div class="single-post">

                <?php if(has_post_thumbnail()): ?>
                    <img src="<?php the_post_thumbnail_url('large'); ?>" class="img-fluid">
                <?php endif; ?>

                <div class="category"><a href="#"><?php the_category(', ') ?></a></div>
                <h6><?php the_title(); ?></h6>
                <div class="date"><?php the_time('j F Y') ?></div>
                <p><?php the_content('', ''); ?></p>

                </div>
                <!-- single-post -->
 
                <?php endwhile; endif; ?>

            </div>
            <!-- blog-single -->

            <?php get_sidebar(); ?>

        </div>
        <!-- row -->

    </div>
    <!-- container -->

</div>
<!-- blog# -->

<?php get_footer(); ?>