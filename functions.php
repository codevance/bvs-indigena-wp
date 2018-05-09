<?php
class BVS_Theme {

  public function __construct(){
    add_action( 'wp_enqueue_scripts', array($this, 'enqueue_assets') );
    add_action( 'save_post', array($this, 'post_highlight_save'), 10, 2 );
    add_action( 'add_meta_boxes', array($this, 'theme_metaboxes') );
    add_action('init', array($this, 'partners_post_type'));
  }

  public function enqueue_assets() {
    /* Styles */
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css');

    /* Scripts */
    wp_enqueue_script( 'jquery', null, null, null, true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', null, null, true);
  }

  public function theme_metaboxes() {
    add_meta_box('bvsPostHighlight', 'Destacar Post', array($this, 'post_highlight_metabox'), 'post', 'side', 'low');
  }

  public function post_highlight_metabox() {
    global $post;
    $bvs_highlight = get_post_meta($post->ID, 'bvs_highlight', true);
    require_once get_template_directory() . '/metaboxes/post_highlight_metabox.php';
  }

  public function post_highlight_save() {
    global $post, $post_type, $wpdb;
    if ($post_type == 'post') {
      $args = $_POST;

      if ( !empty($args['bvs_highlight']) && $args['bvs_highlight'] == 'big' ) {
        if ($wpdb->delete( $wpdb->prefix . 'postmeta', array('meta_key' => 'bvs_highlight', 'meta_value' => 'big', 'post_id' => "IS NOT {$post->ID}") ) !== false)
          update_post_meta( $post->ID, 'bvs_highlight', 'big' );
      } elseif ( !empty($args['bvs_highlight']) && $args['bvs_highlight'] == 'small') {
        update_post_meta( $post->ID, 'bvs_highlight', 'small' );
      } else {
        delete_post_meta( $post->ID, 'bvs_highlight' );
      }

    }
  }

  public function partners_post_type() {
    register_post_type(
      'bvs_partners',
      array(
        'public' => false,
        'labels' => array(
          'name' => 'Parceiros',
          'singular_name' => 'Parceiro',
          'add_new' => 'Novo',
          'add_new_item' => 'Novo parceiro',
          'edit' => 'Editar',
          'edit_item' => 'Editar parceiro',
          'new_item' => 'Novo parceiro',
          'view' => 'Visualizar',
          'view_item' => 'Visualizar parceiro',
          'search_items' => 'Pesquisar parceiro',
          'not_found' => 'Nenhum parceiro',
          'not_found_in_trash' => 'Lixeira vazia',
          'menu_name' => 'Parceiros',
          'all_items' => 'Listar parceiros'
        ),
        'show_ui' => true,
        'supports' => array('title', 'thumbnail'),
        'menu_icon' => 'dashicons-universal-access-alt'
      )
    );
  }

}
$BVS_THEME = new BVS_THEME;
?>
