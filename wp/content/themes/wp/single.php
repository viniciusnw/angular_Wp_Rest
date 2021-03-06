<?php
/**
 *
 * Single Template
 *
 * @package Wordpress
 * @subpackage Baby Boomer
 */

// Header
get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-md-9">

      <?php
      // Loop
      if( have_posts() ):
        while( have_posts() ): the_post();

          // Conteúdo
          get_template_part('templates/content', 'single');

        endwhile;
      else:
        get_template_part( 'templates/content', '404' );
      endif; ?>

    </div><!-- /.col-md-9 -->
    <div class="col-md-3">

      <?php
      /**
       *
       * Sidebar
       *
       */
      get_sidebar(); ?>

    </div><!-- /.col-md-3 -->
  </div><!-- /.row -->
</div><!-- /.container -->

<?php
// Footer
get_footer(); ?>
