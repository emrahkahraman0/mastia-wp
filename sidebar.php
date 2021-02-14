<div class="blog-sidebar col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">

<div class="sidebar">
    <div class="search">
        <form action="<?php echo get_option('home'); ?>" method="get">
            <input type="text" name="s" id="s" placeholder="Search"">
        </form>
        <i class="fas fa-search"></i>
    </div>
    <!-- search -->
</div>
<!-- sidebar -->
<div class="sidebar">
    <div class="recent-posts">
        <h5>Recent Posts</h5>

        <?php query_posts('showposts=3'); ?> 
        <?php while (have_posts()) : the_post(); ?> 
        <div class="recent-post">
            <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
            <p><?php the_excerpt(); ?></p>
        </div>
        <!-- recent-post -->
        <?php endwhile;?> 

    </div>
    <!-- recent-posts -->
</div>
<!-- sidebar -->
<div class="sidebar">
    <div class="blog-categories">
        <h5>Categories</h5>
        <ul>
            <?php wp_list_categories('show_count=0&title_li='); ?>
        </ul>
    </div>
    <!-- blog-categories -->
</div>
<!-- sidebar -->

</div>
<!-- blog-sidebar -->