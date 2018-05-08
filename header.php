<!doctype html>
<html lang="pt-br">
  <head>
    <title><?php the_title(); ?></title>
    
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
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">tipos de documentos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">destaques</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">sobre a BVS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">grupos de pesquisa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">contato</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">como usar o site</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <!-- hero -->
    <div class="hero">
      <div class="container">
        <div class="brand">
          <img src="src/images/logo-bvs.png" alt="">
          <h1 class="hero-title">Saúde dos povos indígenas</h1>
        </div>
        <div class="content-wrapper">
          <div class="search-filter">
            <a href="#" class="active"><span>busca</span> por temas</a>
            <a href="#"><span>busca</span> por etnias</a>
            <a href="#"><span>busca</span> por regiões</a>
          </div>
          <div class="search">
            <div class="row">
              <div class="form-group col-12 col-md-12 col-xl">
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Digite aqui...">
              </div>
              <div class="form-group col-12 col-md-8 col-xl-4">
                <select id="inputState" class="form-control">
                  <option selected>Todos os tipos de materiais...</option>
                  <option>...</option>
                  <option>...</option>
                  <option>...</option>
                </select>
              </div>
              <div class="col-12 col-md-4 col-xl-2">
                <button type="button" class="btn btn-success btn-block">Pesquisar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
