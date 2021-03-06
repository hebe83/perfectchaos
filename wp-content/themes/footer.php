<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @since   1.0.0
 * @package olevia
 */
$theme_options = olevia_get_options();

?>
  </div><!-- .b-site-content -->


  <footer id="colophon" class="b-site__footer" role="contentinfo">

    <?php if ( $theme_options['footer_c-footer-about__title'] || $theme_options['footer_c-footer-about__desc'] ) : ?>
    <div class="c-footer-about">
      <?php if ( $theme_options['footer_c-footer-about__title'] ) : ?>
      <h3 class="c-footer-about__title"><?php echo $theme_options['footer_c-footer-about__title']; ?></h3>
      <?php endif; ?>

      <?php if ( $theme_options['footer_c-footer-about__desc'] ) : ?>
      <p class="c-footer-about__desc">
        <?php echo wp_filter_post_kses( $theme_options['footer_c-footer-about__desc'] ); ?>
      </p>
      <?php endif; ?>
    </div><!-- .c-footer-about -->
    <?php endif; ?>


    <?php get_sidebar( 'footer' ); ?>


     <div class="film">
      <video src="https://09-lvl3-pdl.vimeocdn.com/01/2857/2/64288638/159289216.mp4?expires=1452506736&token=0121341588499ec64e217" autoplay loop>Your browser doesn't support embedded videos.</video>
    </div>


    <div class="c-footer-info">

      <div class="o-container">
        <h3 class="c-footer-info__brand">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <span><?php esc_url( bloginfo( 'name' ) ); ?></span>
          </a>
        </h3>

        <?php
          // Social media icons nav
          get_template_part( 'template-parts/nav', 'footer-social' );
        ?>

        <div class="c-footer-info__copyright">
          <?php echo wp_filter_post_kses( $theme_options['footer_c-footer-info__copyright'] ); ?>
        </div><!-- .c-footer-info__copyright -->

        <?php
          // Footer nav
          get_template_part( 'template-parts/nav', 'footer' );
        ?>
      </div><!-- .o-container -->
    </div><!-- .c-copyright -->

  </footer><!-- b-site-footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
