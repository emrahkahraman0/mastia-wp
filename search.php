<?php get_header(); ?>

<div id="blog">

    <div class="container">

        <div class="row">

            <div class="blog-post col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">

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
                        <img src="<?php the_post_thumbnail_url(''); ?>" class="img-fluid">
                    <?php endif; ?>

                    <h6><a href="<?php the_permalink(''); ?>"><?php the_title(); ?></a></h6>
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