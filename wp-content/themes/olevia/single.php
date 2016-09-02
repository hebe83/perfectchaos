<?php
/**
 * The template for displaying all single posts.
 *
 * @since   1.0.0
 * @package olevia
 */

get_header(); ?>

  <div class="o-container">

    <div id="primary" class="b-content-area">
      <main id="main" class="b-site-main" role="main">

        <?php while ( have_posts() ) : the_post(); ?>

          <hr class="o-sep">

          <?php get_template_part( 'template-parts/content', 'single' ); ?>

          

        <?php endwhile; // End of the loop. ?>

      </main><!-- .b-site-main -->
    </div><!-- .b-content-area -->

  </div><!-- .o-container -->

</div><!-- .b-site-content -->
</div><!-- #page -->
</body>
</html>
