<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
<div class="py-6 bg-light">
    <div class="container text-center">
        <h2><?php the_title(); ?></h2>
        
  </div>
</div>

<div class="container text-reading">
    <div class="row">
        <div class="col-md-10 offset-md-1 py-5">
            <?php 

            if ( have_posts() ) : 
                while ( have_posts() ) : the_post();
                    the_content();
                endwhile;
            else :
                _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
            endif;
            ?>
        </div>
    </div>
</div>


<?php get_footer();
