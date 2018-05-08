<?php
class BVS_Theme {

  public function __construct(){
    add_action( 'wp_enqueue_scripts', array($this, 'enqueue_assets') );
  }

  public function enqueue_assets() {
    /* Styles */
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css');

    /* Scripts */
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js');
  }
}
$BVS_THEME = new BVS_THEME;
?>
