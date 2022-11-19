<?php 
/*
This loop is used in the Archive and in the Home [.php] templates.
*/
?>
<div class="col">
  <div class="card mb-3">
    <div class="row g-0">
      <div class="col-md-4">
        <?php the_post_thumbnail('thumbnail', ['class' => 'w-100']);    ?>
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h5>
          <?php if (!get_theme_mod("singlepost_disable_date") ): ?>
            <small class="text-muted"><?php the_date() ?></small>
          <?php endif; ?>
          <p class="card-text"><?php the_excerpt('150'); ?></p>
        </div>
      </div>
    </div>
  </div>
</div>