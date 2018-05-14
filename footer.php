    <!-- Footer -->
    <div class="footer">
      <div class="container">
        <nav class="navbar navbar-footer navbar-expand-lg">
          <?php wp_nav_menu(
            array(
                'menu' => 'bottom',
                'theme_location' => 'bottom',
                'menu_class' => 'navbar-nav',
                'container_class' => 'nav m-auto'
              )
            ); 
          ?>
        </nav>
        <div class="footer-logo">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo-ensp.png" class="">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/fiocruz.png" class="">
        </div>
        <div class="footer-contact">
          <p>ENSP - Escola Nacional de Saúde Pública Sérgio Arouca - Fundação Oswaldo Cruz</p>
          <p class="address">
            Rua Leopoldo Bulhões, 1480 Manguinhos, Rio de Janeiro. <br>
            CEP: 21041-210
          </p>
          <p class="phone">
            Contato: Tel: (21) 2598-2525
          </p>
          <a href="#">www.ensp.fiocruz.br</a>
        </div>
      </div>
      <div class="copyright">
        <div class="container">
          Biblioteca Virtual de Saúde | Saúde dos porvos indígenas. Todos os direitos reservados. 2018.
        </div>
      </div>
    </div>

    <?php wp_footer(); ?>

  </body>
</html>
