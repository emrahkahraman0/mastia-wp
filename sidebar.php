<div class="our_blog_sidebar col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">

    <div class="sidebar">
        <div class="search">
            <form action="<?php echo get_option('home'); ?>" method="get">
                <input type="text" name="s" id="s" placeholder="Search"">
            </form>
            <i class="icon-search"></i>
        </div>
        <!-- search -->
    </div>
    <!-- sidebar -->
    <div class="sidebar">
        <div class="recent_posts">
            <h6>Recent Posts</h6>
            <div class="post_article">

                <?php query_posts('showposts=3'); ?>
                <?php while (have_posts()) : the_post(); ?>

                <div class="post_item">
                    <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                    <p><?php the_excerpt(); ?></p>
                </div>
                <!-- post_item -->

                <?php endwhile;?>

            </div>
            <!-- post_article -->
        </div>
        <!-- recent_posts -->
    </div>
    <!-- sidebar -->

    <div class="sidebar">
        <div class="categories">
            <h6>Blog Categories</h6>
            <ul>
                <?php wp_list_categories('show_count=0&title_li='); ?>
            </ul>
        </div>
        <!-- categories -->
    </div>
    <!-- sidebar -->

</div>
<!-- sidebar -->