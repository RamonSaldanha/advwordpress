<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

if ( have_posts() ) : 
	while ( have_posts() ) : the_post();
	
?>

<?php if (get_the_post_thumbnail_url()){ ?>
	<div class="d-flex container-fluid" style="height:50vh;background:url(<?php echo get_the_post_thumbnail_url(); ?>)  center / cover no-repeat;"></div>
<?php } else { ?>
	<div class="d-flex container-fluid" style="height:20vh;"></div>
<?php } ?>

<div class="container text-reading p-5 bg-light" style="margin-top:-100px">
  <div class="row text-center">
    <div class="col-md-12">

      <?php if (!get_theme_mod("singlepost_disable_entry_cats") &&  has_category() ) { ?>
				<div class="entry-categories">
					<span class="screen-reader-text"><?php _e( 'Categories', 'picostrap' ); ?></span>
					<div class="entry-categories-inner">
						<?php the_category( ' ' ); ?>
					</div><!-- .entry-categories-inner -->
				</div><!-- .entry-categories -->
      <?php	}	?>

      <h1 class="display-4"><?php the_title(); ?></h1>

      <?php if (!get_theme_mod("singlepost_disable_date") OR !get_theme_mod("singlepost_disable_author")  ): ?>
				<div class="post-meta" id="single-post-meta">
					<p class="lead text-secondary">
						<?php if (!get_theme_mod("singlepost_disable_date") ): ?>
							<span class="post-date"><?php the_date(); ?> </span>
						<?php endif; ?>
						<?php if (!get_theme_mod("singlepost_disable_author") ): ?>
							<span class="text-secondary post-author"> <?php _e( 'by', 'picostrap' ) ?> <?php the_author(); ?></span>
						<?php endif; ?>
					</p>
				</div>
      <?php endif; ?>

    </div><!-- /col -->
  </div>

  <div class="row">
    <div class="col-md-9 offset-md-1">
      <?php 
				the_content();
				if( get_theme_mod("enable_sharing_buttons")) picostrap_the_sharing_buttons();
				edit_post_link( __( 'Edit this post', 'picostrap' ), '<p class="text-end">', '</p>' );
			?>

      <div class="row mb-5">
        <div class="col-md-6">
          <a href="https://wa.me/5584987329303" target="_blank" class="btn btn-lg text-uppercase fw-bold btn-outline-primary d-flex py-3" type="button">
            <span style="line-height:0px;">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#00E107" class="bi bi-whatsapp" viewBox="0 0 16 16">
                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"></path>
              </svg>
            </span>
            <span class="ms-4 fs-6">
              Entre em contato via whatsapp
            </span>
          </a>
        </div>
        <div class="col-md-6">
          <a href="<?php echo esc_url( home_url( 'agende-um-atendimento/' ) ); ?>" class="btn btn-lg text-uppercase fw-bold btn-outline-primary d-flex py-3" type="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
              <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
              <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
            </svg>
            </span>
            <span class="ms-4 fs-6">
              Agende um atendimento preliminar
            </span>
          </a>
        </div>
      </div>

      <?php
				// If comments are open or we have at least one comment, load up the comment template.
				if (!get_theme_mod("singlepost_disable_comments")) if ( comments_open() || get_comments_number() ) {
					comments_template();
				}			
			?>

    </div><!-- /col -->
  </div>
</div>

<?php
	endwhile;
	else :
		_e( 'Sorry, no posts matched your criteria.', 'picostrap' );
	endif;
?>

<?php get_footer();
					