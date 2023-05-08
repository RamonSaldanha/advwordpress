<?php 
/*
This loop is used in the Archive and in the Home [.php] templates.
*/
?>
<div class="col-md-4">
  <div class="card">
    <?php the_post_thumbnail('thumbnail', ['class' => 'w-100']);    ?>
    <h5 class="card-title text-white"><a class="text-uppercase text-decoration-none fw-bold" href="<?php the_permalink() ?>"><?php the_title() ?></a></h5>
    <div class="card-body">
    <?php if (!get_theme_mod("singlepost_disable_date") ): ?>
        <p class="card-text"><?php the_date() ?></p>
      <?php endif; ?>
      <?php the_excerpt(); ?>
    </div>
  </div>

  
</div>