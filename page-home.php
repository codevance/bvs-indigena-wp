<?php /* Template Name: Home */ ?>
<?php get_header(); ?>

<!-- theme -->
<section class="theme">
  <div class="container">
    <div class="theme-title">
      <h2 class="line-bottom">Temas</h2>
    </div>
    <div class="owl-carousel owl-theme">
        <a href="#" class="item" style="background-image: url(src/images/theme.png);">
          <span class="owl-title">Epidemiologia</span>
        </a>
        <a href="#" class="item" style="background-image: url(src/images/theme.png);">
          <span class="owl-title">Avaliação Nutricional</span>
        </a>
        <a href="#" class="item" style="background-image: url(src/images/theme.png);">
          <span class="owl-title">Medicina Tradicional</span>
        </a>
        <a href="#" class="item" style="background-image: url(src/images/theme.png);">
          <span class="owl-title">Serviços de saúde do indígena</span>
        </a>
        <a href="#" class="item" style="background-image: url(src/images/theme.png);">
          <span class="owl-title">Tuberculose</span>
        </a>
        <a href="#" class="item" style="background-image: url(src/images/theme.png);">
          <span class="owl-title">Epidemiologia</span>
        </a>
        <a href="#" class="item" style="background-image: url(src/images/theme.png);">
          <span class="owl-title">Avaliação Nutricional</span>
        </a>
        <a href="#" class="item" style="background-image: url(src/images/theme.png);">
          <span class="owl-title">Medicina Tradicional</span>
        </a>
        <a href="#" class="item" style="background-image: url(src/images/theme.png);">
          <span class="owl-title">Serviços de saúde do indígena</span>
        </a>
        <a href="#" class="item" style="background-image: url(src/images/theme.png);">
          <span class="owl-title">Tuberculose</span>
        </a>
    </div>
    <button type="button" class="btn btn-warning mt-5 mb-3">Ver todos</button>
  </div>
</section>

<!-- Section Map -->
<section class="section-map">
  <h2 class="sm-title line-bottom">Localização Geográfico</h2>
  <div class="map-container">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/map.svg" class="svg">
    <div class="sm-info">
      <div id="sul" class="regiao">
        <div class="pin"></div>
        <h3 class="info-title">Região Sul</h3>
        <p>Lorem ipsum dlem acta turis forexne dieutra m dlem acta turis forexne dieutra</p>
      </div>
      <div id="sudeste" class="regiao">
        <div class="pin"></div>
        <h3 class="info-title">Região Sudetes</h3>
        <p>Lorem ipsum dlem acta turis forexne dieutra m dlem acta turis forexne dieutra</p>
      </div>
      <div id="centro-oeste" class="regiao">
        <div class="pin"></div>
        <h3 class="info-title">Região Centro Oeste</h3>
        <p>Lorem ipsum dlem acta turis forexne dieutra m dlem acta turis forexne dieutra</p>
      </div>
      <div id="nordeste" class="regiao">
        <div class="pin"></div>
        <h3 class="info-title">Região Nordeste</h3>
        <p>Lorem ipsum dlem acta turis forexne dieutra m dlem acta turis forexne dieutra</p>
      </div>
      <div id="norte" class="regiao active">
        <div class="pin"></div>
        <h3 class="info-title">Região Norte</h3>
        <p>Lorem ipsum dlem acta turis forexne dieutra m dlem acta turis forexne dieutra</p>
        <ul class="info-list">
          <li>
            <a href="#">Amazonas
              <span>44 resultados</span>
            </a>
          </li>
          <li>
            <a href="#">Acre
              <span>44 resultados</span>
            </a>
          </li>
          <li>
            <a href="#">Rondônia
              <span>12 resultados</span>
            </a>
          </li>
          <li>
            <a href="#">Roraima
              <span>32 resultados</span>
            </a>
          </li>
          <li>
            <a href="#">Pará
              <span>11 resultados</span>
            </a>
          </li>
          <li>
            <a href="#">Amapá
              <span>23 resultados</span>
            </a>
          </li>
          <li>
            <a href="#">Tocantins
              <span>45 resultados</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- etnias -->
<section class="section-etnias">
  <div class="container">
    <h2 class="se-title line-bottom">Etnias</h2>
    <div class="owl-carousel owl-theme">
      <a href="#" class="item" style="background-color: #891812"><span class="owl-title">Xavante</span></a>
      <a href="#" class="item" style="background-color: #E59600"><span class="owl-title">Surui</span></a>
      <a href="#" class="item" style="background-color: #2D9FB4"><span class="owl-title">Guarani</span></a>
      <a href="#" class="item" style="background-color: #95B515"><span class="owl-title">Baniwa</span></a>
      <a href="#" class="item" style="background-color: #528912"><span class="owl-title">Kaingång</span></a>
      <a href="#" class="item" style="background-color: #891812"><span class="owl-title">Xavante</span></a>
      <a href="#" class="item" style="background-color: #E59600"><span class="owl-title">Surui</span></a>
      <a href="#" class="item" style="background-color: #2D9FB4"><span class="owl-title">Guarani</span></a>
      <a href="#" class="item" style="background-color: #95B515"><span class="owl-title">Baniwa</span></a>
      <a href="#" class="item" style="background-color: #528912"><span class="owl-title">Kaingång</span></a>
    </div>
    <button type="button" class="btn btn-warning m-5">Ver todos</button>
  </div>
</section>

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
                    <?php the_excerpt(); ?>
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
                  <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                  </h6>
                  <span class="published">Publicado em <?php echo get_the_date("d/m/Y") ?></span>
                  <p class="fc-text">
                    <?php the_excerpt(); ?>                    
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

<!-- Partners -->
<section class="partners">
  <div class="container">
    <div class="partners-title">
      <h2>Parceiros</h2>
    </div>
    <div class="row">
      <div class="col-6 col-sm-4 col-lg-2">
        <div class="partners-item"></div>
      </div>
      <div class="col-6 col-sm-4 col-lg-2">
        <div class="partners-item"></div>
      </div>
      <div class="col-6 col-sm-4 col-lg-2">
        <div class="partners-item"></div>
      </div>
      <div class="col-6 col-sm-4 col-lg-2">
        <div class="partners-item"></div>
      </div>
      <div class="col-6 col-sm-4 col-lg-2">
        <div class="partners-item"></div>
      </div>
      <div class="col-6 col-sm-4 col-lg-2">
        <div class="partners-item"></div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
