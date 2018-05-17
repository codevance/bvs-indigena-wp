<?php
class BVS_Theme {

  public function __construct(){
    add_action( 'init', array($this, 'partners_post_type') );
    add_action( 'init', array($this, 'image_sizes') );
    add_action( 'after_setup_theme', array($this, 'register_menus') );
    add_action( 'wp_enqueue_scripts', array($this, 'enqueue_assets') );
    add_action( 'add_meta_boxes', array($this, 'theme_metaboxes') );
    add_action( 'save_post', array($this, 'post_highlight_save'), 10, 2 );
    add_action( 'save_post', array($this, 'partner_url_save'), 10, 2 );
    add_filter( 'nav_menu_css_class', array($this, 'nav_class'), 10, 2 );
    add_filter( 'wp_nav_menu', array($this, 'nav_link_class') );
    add_filter( 'excerpt_length', array($this, 'custom_excerpt_length'), 999 );
  }

  public function image_sizes(){
    add_image_size('small_highlight', 200, 160);
  }

  public function custom_excerpt_length( $length ) {
    return 10;
  }

  public function nav_class( $classes, $item ) {
    $classes[] = 'nav-item';
    return $classes;
  }

  public function nav_link_class( $ulclass ) {
    return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
  }

  public function register_menus() {
    register_nav_menu('top', 'Topo');
    register_nav_menu('bottom', 'Rodapé');
  }

  public function enqueue_assets() {
    /* Styles */
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css');

    /* Scripts */
    wp_enqueue_script( 'jquery', null, null, null, true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', null, null, true);
  }

  /*
   * Post meta stuff
   */
  public function theme_metaboxes() {
    add_meta_box('bvsPostHighlight', 'Destacar Post', array($this, 'post_highlight_metabox'), 'post', 'side', 'low');
    add_meta_box('bvsPartnersURL', 'URL do parceiro', array($this, 'partner_url_metabox'), 'bvs_partners', 'side', 'low');
  }

  /*
   * Post highlights stuff
   */
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

  /*
   * Partners stuff
   */
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
  
  public function partner_url_metabox() {
    global $post;
    $partner_url = get_post_meta($post->ID, 'bvs_partner_url', true);
    require_once get_template_directory() . '/metaboxes/partner_url_metabox.php';
  }

  public function partner_url_save() {
    global $post, $post_type;
    if ($post_type == 'bvs_partners') {
      $args = $_POST;
      update_post_meta( $post->ID, 'bvs_partner_url', $args['bvs_partner_url'] );
    }
  }

}
$BVS_THEME = new BVS_THEME;
?>
