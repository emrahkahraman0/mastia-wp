<?php get_header(); ?>

<div id="page_search">

    <div class="container">

        <div class="page_search">

            <div class="page_search_title">
                search
            </div>
            <!-- page_search_title -->
            <div class="page_search_link">
                <ul>
                    <li><a href="<?php bloginfo('url'); ?>">Home</a></li>
                    <li><span>></span></li>
                    <li><a href="<?php bloginfo('home'); ?>/blog">Blog</a></li>
                </ul>
            </div>
            <!-- page_search_link -->

        </div>
        <!-- page_search -->

    </div>
    <!-- container -->

</div>
<!-- page_search# -->

<div id="our_blog">

    <div class="container">

        <div class="our_blog row">

            <div class="our_blog_article col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">

                <?php
                global $query_string;
                $query_args = explode("&", $query_string);
                $search_query = array();

                foreach($query_args as $key => $string) {
                    $query_split = explode("=", $string);
                    $search_query[$query_split[0]] = urldecode($query_split[1]);
                } // foreach

                $the_query = new WP_Query($search_query);
                if ( $the_query->have_posts() ) :
                ?>
                <!-- the loop -->

                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

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
                <?php wp_reset_postdata(); ?>

                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>

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

<?php get_footer(); ?>