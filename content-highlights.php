<!-- Destaques -->
<section class="destaques">
  <div class="container">
    <div class="destaques-title">
      <h2 class="line-bottom">Destaques</h2>
    </div>
    <div class="destaques-content">
      <div class="row">
        <?php
        $args = array(
          'posts_per_page' => 1,
          'post_type' => 'post',
          'meta_key' => 'bvs_highlight',
          'meta_value' => 'big'
        );
        $big_highlight = new WP_Query( $args );
        if ( $big_highlight->have_posts() ) {
          while ( $big_highlight->have_posts() ) {
            $big_highlight->the_post();
        ?>    
            <div class="col-12 col-lg-6">
              <div class="featured" style="background-image: url(<?php echo get_the_post_thumbnail_url(null, 'large'); ?>);">
                <div class="featured-content">
                  <span class="marking" style="background-color: #71B42D"><a href="<?php the_permalink(); ?>"><?php echo get_the_category()[0]->cat_name; ?></a></span>
                  <h6 class="fc-title">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </h6>
                  <span class="published">Publicado em <?php echo get_the_date("d/m/Y") ?></span>
                  <p class="fc-text">
                    <?php echo get_the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>">Ler mais</a>
                  </p>
                </div>
              </div>
            </div>
        <?php
          }
          wp_reset_postdata();
        }
        ?>
        <div class="col-12 col-lg-6">
          <?php
          $args = array(
            'posts_per_page' => 3,
            'post_type' => 'post',
            'meta_key' => 'bvs_highlight',
            'meta_value' => 'small'
          );
          $small_highlight = new WP_Query( $args );
          if ( $small_highlight->have_posts() ) {
            while ( $small_highlight->have_posts() ) {
              $small_highlight->the_post();
          ?>    
          <div class="destaque-post">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-6 col-xl-5">
                  <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('thumbnail') ?>
                  </a>
                </div>
                <div class="col-12 col-md-8 col-lg-6 col-xl-7">
                <div class="post-item">
                  <span class="marking" style="background-color: #95B515"><a href="<?php the_permalink(); ?>"><?php echo get_the_category()[0]->cat_name; ?></a></span>
                  <h6 class="fc-title">
                  <a href="<?php the_permalink() ?>"><?php echo wp_trim_words(get_the_title(), '12'); ?></a>
                  </h6>
                  <span class="published">Publicado em <?php echo get_the_date("d/m/Y") ?></span>
                  <p class="fc-text">
                    <?php echo get_the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>">Ler mais</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <?php
            }
            wp_reset_postdata();
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</section>
