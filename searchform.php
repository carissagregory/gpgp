<?php
/**
 * template for displaying search forms
 */
?>
<form class="search-form" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <input type="search" name="s" class="search-field" placeholder="Search..." value="<?php echo get_search_query(); ?>" />
  <button type="submit" class="search-submit" aria-label="Search">
    <span class="search-text">search</span>
    <span class="search-icon" aria-hidden="true">🔍</span>
  </button>
</form>