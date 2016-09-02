<?php
/**
 * Template Name: Studieresa
 *
 * Custom Home page template.
 *
 * @since   1.0.0
 * @package olevia
 */


$theme_options = olevia_get_options();


// Custom query
$args  = array(
  'post_type'      => 'post',
  'posts_per_page' => $theme_options['home_projects_num']
);
$query = new WP_Query( $args );


get_header(); ?>

   <div class="film">
    <video src="wp-content/uploads/2016/01/344485019.mp4" autoplay loop>Your browser doesn't support embedded videos.</video>
  </div>

  <div class="o-container">

    <div id="primary" class="b-content-area b-content-area--full-width">
      <main id="main" class="b-site-main" role="main">

        <div class="c-page-content c-page-content--home">

          <?php if ( $query->have_posts() ) : ?>

            <div class="c-portfolio-items c-portfolio-items--home">

            <a class="c-portfolio-item--home c-featured--home c-featured c-portfolio-item" href="http://www.perfectchaos.se/portfolio/38/"><img src="http://www.perfectchaos.se/wp-content/uploads/2016/01/dan-tobin-smith4.png"
                  onmouseover="this.src='http://www.perfectchaos.se/wp-content/uploads/2016/01/dan-tobin-smith5.jpg'"
                  onmouseout="this.src='http://www.perfectchaos.se/wp-content/uploads/2016/01/dan-tobin-smith4.png'" /></A>

              <?php while ( $query->have_posts() ) : $query->the_post(); ?>

                <?php get_template_part( 'template-parts/content', 'portfolio-home' ); ?>



              <?php endwhile; ?>


               <a class="c-portfolio-item--home c-featured--home c-featured c-portfolio-item" href="http://www.perfectchaos.se/portfolio/perfect-chaos-15/"><img src="http://www.perfectchaos.se/wp-content/uploads/2016/01/dan-tobin-smith1.jpg"
                  onmouseover="this.src='http://www.perfectchaos.se/wp-content/uploads/2016/01/dan-tobin-smith2.png'"
                  onmouseout="this.src='http://www.perfectchaos.se/wp-content/uploads/2016/01/dan-tobin-smith1.jpg'" /></A>

            </div><!-- .c-portfolio-items -->

            <?php if ( $theme_options['home_display_c-portfolio-view-all'] ) : ?>
              <div class="c-portfolio-view-all">
                <a class="o-btn" href="<?php echo esc_url( $theme_options['home_c-portfolio-view-all_url'] ); ?>">
                  <?php echo esc_html( $theme_options['home_c-portfolio-view-all_text'] ); ?>
                </a>
              </div><!-- .c-portfolio-view-all -->
            <?php endif; ?>

          <?php else : ?>

            <?php get_template_part( 'template-parts/content', 'none' ); ?>

          <?php endif; wp_reset_postdata(); ?>

        </div><!-- .c-page-content -->

      </main><!-- .b-site-main -->
    </div><!-- .b-content-area -->

  </div><!-- .o-container -->

<?php get_footer(); ?>

<!--
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">
  $(function() {
    $("img")
        .mouseover(function() {
            var src = "http://www.perfectchaos.se/wp-content/uploads/2016/01/dan-tobin-smith5-500x334.jpg"
            $(this).attr("src", src);
        })
        .mouseout(function() {
            var src = "http://www.perfectchaos.se/wp-content/uploads/2016/01/dan-tobin-smith2-500x334.jpg"
            $(this).attr("src", src);
        });
});

  </script>
-->
