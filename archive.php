<?php get_header(); ?>
<div class="container">
  <div class="theme-content">
    <div class="theme-header">
      <div class="row">
        <div class="col-12 col-lg-12 col-xl-12 pl-12">
        <h2 class="theme-title line-bottom"><?php the_archive_title(); ?></h2>
        </div>
      </div>
    </div>

    <?php
    while ( have_posts() ) :
      the_post();
    ?>
      <div class="searchable">
        <a href="<?php the_permalink(); ?>">
          <h3>
              <?php the_title(); ?>
          </h3>
        </a>
        <p>
          <?php the_excerpt(); ?>
        </p>
      </div>
    <?php
    endwhile;
    ?>

  </div>
</div>
<?php get_footer(); ?>
