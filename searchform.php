<?php
/* Custom search form */
?>
<form role="search" method="get" id="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="input-group">
  <input type="search" class="form-control form-control-search" placeholder="Faça uma busca..." aria-label="search nico" name="s" id="search-input" value="<?php echo esc_attr( get_search_query() ); ?>">
</form>