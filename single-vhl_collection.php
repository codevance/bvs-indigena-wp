<?php get_header(); ?>
<?php
$args = array('post_parent' => get_the_id(), 'post_type' => 'vhl_collection', 'post_status' => 'publish', 'orderby' => 'title', 'order' => 'ASC');
$children = get_children($args);

if ( empty($children) ):
  require_once('single.php');
else: ?>
<div class="container">
  <div class="theme-content">
    <div class="theme-header">
      <div class="row">
        <div class="col-12 col-lg-4 col-xl-2 pl-2">
        <h2 class="theme-title line-bottom"><?php the_title(); ?></h2>
        </div>
        <div class="col-12 col-lg-8 col-xl-10 pt-2">
          <nav>
            <ul class="pagination a-z">
              <li class="page-item"><a class="page-link" href="#anchor-a">A</a></li>
              <li class="page-item"><a class="page-link" href="#anchor-b">B</a></li>
              <li class="page-item"><a class="page-link" href="#anchor-c">C</a></li>
              <li class="page-item"><a class="page-link" href="#anchor-d">D</a></li>
              <li class="page-item"><a class="page-link" href="#anchor-e">E</a></li>
              <li class="page-item"><a class="page-link" href="#anchor-f">F</a></li>
              <li class="page-item"><a class="page-link" href="#anchor-g">G</a></li>
              <li class="page-item"><a class="page-link" href="#anchor-h">H</a></li>
              <li class="page-item"><a class="page-link" href="#anchor-i">I</a></li>
              <li class="page-item"><a class="page-link" href="#anchor-j">J</a></li>
              <li class="page-item"><a class="page-link" href="#anchor-k">K</a></li>
              <li class="page-item"><a class="page-link" href="#anchor-l">L</a></li>
              <li class="page-item"><a class="page-link" href="#anchor-m">M</a></li>
              <li class="page-item"><a class="page-link" href="#anchor-n">N</a></li>
              <li class="page-item"><a class="page-link" href="#anchor-o">O</a></li>
              <li class="page-item"><a class="page-link" href="#anchor-p">P</a></li>
              <li class="page-item"><a class="page-link" href="#anchor-q">Q</a></li>
              <li class="page-item"><a class="page-link" href="#anchor-r">R</a></li>
              <li class="page-item"><a class="page-link" href="#anchor-s">S</a></li>
              <li class="page-item"><a class="page-link" href="#anchor-t">T</a></li>
              <li class="page-item"><a class="page-link" href="#anchor-u">U</a></li>
              <li class="page-item"><a class="page-link" href="#anchor-v">V</a></li>
              <li class="page-item"><a class="page-link" href="#anchor-w">W</a></li>
              <li class="page-item"><a class="page-link" href="#anchor-x">X</a></li>
              <li class="page-item"><a class="page-link" href="#anchor-y">Y</a></li>
              <li class="page-item"><a class="page-link" href="#anchor-z">Z</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>

    <?php
    $anchor = '';
    foreach ($children as $child) {
      $child = get_post($child);
      $show_anchor = ($anchor !== strtolower($child->post_title[0]) ) ? true : false;
      $anchor = strtolower($child->post_title[0]);
    ?>    
    <div class="searchable">
      <a href="<?php echo get_permalink($child->ID) ?>" target="<?php echo get_post_meta($child->ID, '_links_to_target', true) ?>" <?php if ($show_anchor) { echo "id=\"anchor-{$anchor}\""; } ?>>
        <h3>
            <?php echo $child->post_title ?>
        </h3>
      </a>
      <p>
        <p></p>
        <?php echo $child->post_content; ?>
        <p></p>
      </p>
    </div>
    <?php } ?>

  </div>
</div>
<?php endif; ?>
<?php get_footer(); ?>
