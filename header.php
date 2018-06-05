<!doctype html>
<html lang="pt-br">
  <head>
    <title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Montserrat:400,700">

    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.0.10/css/all.css"
      integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg"
      crossorigin="anonymous">

    <?php wp_head(); ?>

  </head>
  <body <?php body_class(); ?>>
    <nav class="navbar fixed-top main-menu navbar-expand-lg">
      <div class="container">
        <button
          type="button"
          class="navbar-toggler"
          data-toggle="collapse"
          data-target="#navbarSupportedContent">
          <i class="fas fa-bars"></i>
        </button>
        <button id="toggle-search" type="button" class="navbar-toggler">
          <i class="fas fa-search"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <?php wp_nav_menu(
            array(
                'menu' => 'top',
                'theme_location' => 'top',
                'menu_class' => 'navbar-nav ml-auto',
                'container_class' => 'collapse navbar-collapse',
                'container_id' => 'navbarSupportedContent'
              )
            ); 
          ?>
        </div>
      </div>
    </nav>
    
    <!-- hero -->
    <div class="hero" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/hero.png)">
      <div class="container">
        <div class="brand">
          <a href="<?php echo get_site_url(); ?>">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo-bvs.png" alt="">
            <h1 class="hero-title">Saúde dos povos indígenas</h1>
          </a>
        </div>
        <div class="content-wrapper">
          <div class="search-filter">
            <a href="<?php echo (is_home()) ? '#themes' : get_site_url() . '#theme' ?>"><span>busca</span> por temas</a>
            <a href="<?php echo (is_home()) ? '#etnias' : get_site_url() . '#etnias' ?>"><span>busca</span> por etnias</a>
            <a href="<?php echo (is_home()) ? '#map' : get_site_url() . '#map' ?>"><span>busca</span> por regiões</a>
          </div>
          <?php if ( (is_single() && (get_post_type() !== 'vhl_collection') || get_post_type() == 'vhl_collection' && empty(get_children(array('post_parent' => get_the_id(), 'post_type' => 'vhl_collection', 'post_status' => 'publish'))) ) || (is_page() && get_the_title() !== 'Home') ) { ?>
            <div class="hero-info">
              <h1 class="hi-title"><?php the_title(); ?></h1>
            </div>
          <?php } elseif ( (is_single() && get_post_type() == 'vhl_collection') || is_home() ) { ?>
            <div class="hero-info">
              <div class="row">
                <div class="form-group col-12 col-md-9 col-xl">
                  <input type="text" class="form-control" id="collectionSearchInput" placeholder="Digite o que deseja pesquisar...">
                </div>
                <div class="hero-btn col-12 col-md-3 col-xl-2">
                  <button type="button" class="btn btn-success btn-block">Pesquisar</button>
                </div>
              </div>
            </div>
          <?php } else { ?>
            <div class="search">
              <form action="http://pesquisa.bvsalud.org/enfermeria/" method="get" target="_blank" class="row">
                <input type="hidden" name="output" value="site" />
                <input type="hidden" name="lang" value="pt" />
                <input type="hidden" name="from" value="0" />
                <input type="hidden" name="sort" value="" />
                <input type="hidden" name="format" value="summary" />
                <input type="hidden" name="count" value="20" />
                <input type="hidden" name="fb" value="" />
                <input type="hidden" name="page" value="1" />
                <input type="hidden" name="search_form_submit" value="Pesquisar" />
                
                <div class="form-group col-12 col-md-12 col-xl">
                  <input type="text" name="q" class="form-control" id="formGroupExampleInput" placeholder="Digite aqui...">
                </div>
                <div class="form-group col-12 col-md-8 col-xl-4">
                  <select id="inputState" class="form-control" name="index">
                    <option selected value="tw">Todos os tipos de materiais...</option>
                    <option value="ti">Título</option>
                    <option value="au">Autor</option>
                    <option value="mh">Descritor de assunto</option>
                    <option value="ab">Resumo</option>
                  </select>
                </div>
                <div class="col-12 col-md-4 col-xl-2">
                  <button type="submit" class="btn btn-success btn-block">Pesquisar</button>
                </div>
              </form>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
