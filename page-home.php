<?php /* Template Name: Home */ ?>
<?php get_header(); ?>

<!-- theme -->
<section class="theme" id="theme">
  <div class="container">
    <div class="theme-title">
      <h2 class="line-bottom">Temas</h2>
    </div>
    <div class="owl-carousel owl-theme">
      <?php
      $subjects = get_page_by_title('Temas', 'OBJECT', 'vhl_collection'); 
      if ( !empty($subjects) ) {
      $subjects = $subjects->ID;
      $args = array('post_parent' => $subjects, 'post_type' => 'vhl_collection', 'post_status' => 'publish');
      $subjects = get_children($args);
      foreach ($subjects as $subject) {
        $subject= get_post($subject);
      ?>
        <a href="<?php echo get_permalink($subject->ID) ?>" target="<?php echo get_post_meta($subject->ID, '_links_to_target', true) ?>" class="item" style="background-color: #891812; background-image: url('<?php echo get_the_post_thumbnail_url($subject->ID, 'thumbnail'); ?>')"><span class="owl-title"><?php echo $subject->post_title; ?></span></a>
      <?php } } ?>
    </div>
    <button type="button" class="btn btn-warning mt-5 mb-3">Ver todos</button>
  </div>
</section>

<!-- Section Map -->
<section class="section-map" id="map">
  <h2 class="sm-title line-bottom">Localização Geográfico</h2>
  <div class="map-container">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/map.svg" class="svg">
    <div class="sm-info">
      <div id="sul" class="regiao">
        <div class="pin"></div>
        <h3 class="info-title">Região Sul</h3>
        <ul class="info-list">
          <?php
          $states = get_page_by_title('Região Sul', 'OBJECT', 'vhl_collection');
          if ( !empty($states) ) {
          $states = $states->ID;
          $args = array('post_parent' => $states, 'post_type' => 'vhl_collection', 'post_status' => 'publish');
          $states = get_children($args);
          foreach ($states as $state) {
            $state= get_post($state);
          ?>
            <li><a href="<?php echo get_permalink($state->ID) ?>" target="<?php echo get_post_meta($state->ID, '_links_to_target', true) ?>"><?php echo $state->post_title; ?></a></li>
          <?php } } ?>
        </ul>
      </div>
      <div id="sudeste" class="regiao">
        <div class="pin"></div>
        <h3 class="info-title">Região Sudeste</h3>
        <ul class="info-list">
          <?php
          $states = get_page_by_title('Região Sudeste', 'OBJECT', 'vhl_collection'); 
          if ( !empty($states) ) {
          $states = $states->ID;
          $args = array('post_parent' => $states, 'post_type' => 'vhl_collection', 'post_status' => 'publish');
          $states = get_children($args);
          foreach ($states as $state) {
            $state= get_post($state);
          ?>
            <li><a href="<?php echo get_permalink($state->ID) ?>" target="<?php echo get_post_meta($state->ID, '_links_to_target', true) ?>"><?php echo $state->post_title; ?></a></li>
          <?php } } ?>
        </ul>
      </div>
      <div id="centro-oeste" class="regiao">
        <div class="pin"></div>
        <h3 class="info-title">Região Centro Oeste</h3>
        <ul class="info-list">
          <?php
          $states = get_page_by_title('Região Centro Oeste', 'OBJECT', 'vhl_collection'); 
          if ( !empty($states) ) {
          $states = $states->ID;
          $args = array('post_parent' => $states, 'post_type' => 'vhl_collection', 'post_status' => 'publish');
          $states = get_children($args);
          foreach ($states as $state) {
            $state= get_post($state);
          ?>
            <li><a href="<?php echo get_permalink($state->ID) ?>" target="<?php echo get_post_meta($state->ID, '_links_to_target', true) ?>"><?php echo $state->post_title; ?></a></li>
          <?php } } ?>
        </ul>
      </div>
      <div id="nordeste" class="regiao">
        <div class="pin"></div>
        <h3 class="info-title">Região Nordeste</h3>
        <ul class="info-list">
          <?php
          $states = get_page_by_title('Região Nordeste', 'OBJECT', 'vhl_collection'); 
          if ( !empty($states) ) {
          $states = $states->ID;
          $args = array('post_parent' => $states, 'post_type' => 'vhl_collection', 'post_status' => 'publish');
          $states = get_children($args);
          foreach ($states as $state) {
            $state= get_post($state);
          ?>
            <li><a href="<?php echo get_permalink($state->ID) ?>" target="<?php echo get_post_meta($state->ID, '_links_to_target', true) ?>"><?php echo $state->post_title; ?></a></li>
          <?php } } ?>
        </ul>
      </div>
      <div id="norte" class="regiao active">
        <div class="pin"></div>
        <h3 class="info-title">Região Norte</h3>
        <ul class="info-list">
          <?php
          $states = get_page_by_title('Região Norte', 'OBJECT', 'vhl_collection'); 
          if ( !empty($states) ) {
          $states = $states->ID;
          $args = array('post_parent' => $states, 'post_type' => 'vhl_collection', 'post_status' => 'publish');
          $states = get_children($args);
          foreach ($states as $state) {
            $state= get_post($state);
          ?>
            <li><a href="<?php echo get_permalink($state->ID) ?>" target="<?php echo get_post_meta($state->ID, '_links_to_target', true) ?>"><?php echo $state->post_title; ?></a></li>
          <?php } } ?>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- etnias -->
<section class="section-etnias" id="etnias">
  <div class="container">
    <h2 class="se-title line-bottom">Etnias</h2>
    <div class="owl-carousel owl-theme">
      <?php
      $etnias = get_page_by_title('Etnias', 'OBJECT', 'vhl_collection'); 
      if ( !empty($etnias) ) {
      $etnias = $etnias->ID;
      $args = array('post_parent' => $etnias, 'post_type' => 'vhl_collection', 'post_status' => 'publish');
      $etnias = get_children($args);
      foreach ($etnias as $etnia) {
        $etnia = get_post($etnia);
      ?>
        <a href="<?php echo get_permalink($etnia->ID) ?>" target="<?php echo get_post_meta($etnia->ID, '_links_to_target', true) ?>" class="item" style="background-color: #891812; background-image: url('<?php echo get_the_post_thumbnail_url($etnia->ID, 'thumbnail'); ?>')"><span class="owl-title"><?php echo $etnia->post_title; ?></span></a>
      <?php } } ?>
    </div>
    <button type="button" class="btn btn-warning m-5">Ver todos</button>
  </div>
</section>

<?php require_once('content-highlights.php') ?>

<!-- Partners -->
<section class="partners">
  <div class="container">
    <div class="partners-title">
      <h2>Parceiros</h2>
    </div>
    <div class="row">
      <?php
      $args = array(
        'posts_per_page' => 6,
        'post_type' => 'bvs_partners',
      );
      $partners = new WP_Query( $args );
      if ( $partners->have_posts() ) {
        while ( $partners->have_posts() ) {
          $partners->the_post();
      ?>    
        <div class="col-6 col-sm-4 col-lg-2">
          <a href="<?php echo get_post_meta($post->ID, 'bvs_partner_url', true); ?>" target="_blank">
            <?php the_post_thumbnail('thumbnail'); ?>  
          </a>
        </div>
      <?php
        }
        wp_reset_postdata();
      }
      ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
