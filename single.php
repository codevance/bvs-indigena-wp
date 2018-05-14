<?php get_header(); ?>
<div class="container">
  <article class="post">
			<?php
			while ( have_posts() ) :
				the_post();
        the_post_thumbnail('large', array('class' => 'img-fluid'));
        the_content();
      endwhile;
      ?>
  </article>
</div>
<?php require_once('content-highlights.php') ?>
<?php get_footer(); ?>
