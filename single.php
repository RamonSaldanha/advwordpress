<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

if ( have_posts() ) : 
	while ( have_posts() ) : the_post();
	
?>

<<<<<<< HEAD
<div class="container">
	<div class="row d-flex justify-content-center">
		<div class="col-md-9 p-0 shadow-sm border my-4">
			<div class="p-4">
				<div class="badges">
					<?php
						$categories = get_the_category();
						foreach($categories as $category) {
							echo '<span class="badge bg-secondary fw-normal">'.$category->name.'</span>';
						}
					?>
				</div>
				<h4 class="mt-3 fw-bold"><?php the_title(); ?></h4>
				<div class="author-date-content">
					<span class="author-avatar-name me-3">
						<?php echo get_avatar( get_the_author_meta( 'ID' ), 50 ); ?>
						<span>por <?php the_author(); ?></span>
					</span>
					<span>
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-event" viewBox="0 0 16 16"> <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/> <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/> </svg>
						<span><?php the_time('j \d\e F \d\e Y'); ?></span>
					</span>
				</div>
			</div>
			
			<?php if (get_the_post_thumbnail_url()){ ?>
				<div class="d-flex" style="height:30vh;background:url(<?php echo get_the_post_thumbnail_url(); ?>)  center / cover no-repeat;"></div>
			<?php } ?>

			<div class="p-4">
				<?php the_content(); ?>
			</div>
		</div><!-- /col -->
=======
                <h2><?php the_title(); ?></h2>
                
                <?php if (!get_theme_mod("singlepost_disable_date") OR !get_theme_mod("singlepost_disable_author")  ): ?>
                    <div class="post-meta" id="single-post-meta">
                        <p class="lead text-secondary">
                            
                            <?php if (!get_theme_mod("singlepost_disable_date") ): ?>
                                <span class="post-date"><?php the_date(); ?> </span>
                            <?php endif; ?>

                            <?php if (!get_theme_mod("singlepost_disable_author") ): ?>
                                <span class="text-secondary post-author"> <?php _e( 'por', 'picostrap' ) ?> <?php the_author(); ?></span>
                            <?php endif; ?>
                        </p>
                    </div> 
                <?php endif; ?>
>>>>>>> 4b0c2296fa0dfb6725bfc9cf47f3387ddec4e222

		<div class="">

		</div>
	</div>
</div>

<?php
	endwhile;
	else :
		_e( 'Sorry, no posts matched your criteria.', 'picostrap' );
	endif;
?>

<?php get_footer();
					