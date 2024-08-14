<?php
/**
 * Functions
 */
?>
<?php

function jacobaddis_register_styles() {

  $version = wp_get_theme()->get( 'Version' );

  wp_enqueue_style('jacbaddis-style', get_template_directory_uri() . "/style.css", array(), $version, 'all');

}
  
  add_action('wp_enqueue_scripts', 'jacobaddis_register_styles');

?>