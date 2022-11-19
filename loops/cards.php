<?php 
/*
This loop is used in the Archive and in the Home [.php] templates.
*/
?>
<div class="col">
  <div class="card card-home mb-3">
    <div class="row g-0">
      <div class="col-md-4">
        <?php the_post_thumbnail('thumbnail', ['class' => 'w-100']);    ?>
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title"><a class="text-uppercase text-decoration-none fw-bold" href="<?php the_permalink() ?>"><?php the_title() ?></a></h5>
          <?php if (!get_theme_mod("singlepost_disable_date") ): ?>
            <small class="text-muted"><?php the_date() ?></small>
          <?php endif; ?>
          <?php the_excerpt(); ?>
        </div>
      </div>
    </div>
  </div>
</div>