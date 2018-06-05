<?php get_header(); ?>
<div class="container">
  <div class="theme-content">
    <div class="theme-header">
      <div class="row">
        <div class="col-12 col-lg-4 col-xl-2 pl-2">
        <h2 class="theme-title line-bottom">Posts</h2>
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
    $args = array(
      'posts_per_page' => -1,
      'post_type' => 'post',
      'post_status' => 'publish',
      'orderby' => 'title',
      'order' => 'ASC'
    );
    $loop = new WP_Query( $args );
    $anchor = '';
    if ( $loop->have_posts() ):
      while ( $loop->have_posts() ):
        $loop->the_post();
        $show_anchor = ($anchor !== strtolower(get_the_title()[0]) ) ? true : false;
        $anchor = strtolower(get_the_title()[0]);
    ?>    
    <div class="searchable">
      <a href="<?php the_permalink() ?>" <?php if ($show_anchor) { echo "id=\"anchor-{$anchor}\""; } ?>>
        <h3>
            <?php the_title(); ?>
            <span class="badge badge-sm badge-success"><?php if (get_post_meta($post->ID, 'bvs_highlight', true) !== ''){echo 'Destaque';} ?></span>
        </h3>
      </a>
      <p>
        <p></p>
        <?php the_excerpt(); ?>
        <p></p>
      </p>
    </div>
    <?php endwhile; endif; ?>

  </div>
</div>
<?php get_footer(); ?>
