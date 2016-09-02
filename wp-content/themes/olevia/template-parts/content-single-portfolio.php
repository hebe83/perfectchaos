<?php
/**
 * Template part for displaying Portfolio Projects.
 *
 * @since   1.0.0
 * @package olevia
 */

// Default classes
$project_classes  = 'c-portfolio-item';
$featured_classes = 'c-featured';
$image_size       = 'olevia-featured-full-width';
?>

<article id="project-<?php the_ID(); ?>" <?php post_class( $project_classes ); ?>>

  <?php olevia_print_post_thumbnail( $image_size, $featured_classes ); ?>
  <!--<img src="http://www.perfectchaos.se/wp-content/uploads/2016/01/dan-tobin-smith4-500x333.png" 
                  onmouseover="this.src='http://www.perfectchaos.se/wp-content/uploads/2016/01/dan-tobin-smith5-500x334.jpg'"
                  onmouseout="this.src='http://www.perfectchaos.se/wp-content/uploads/2016/01/dan-tobin-smith4-500x333.png'" />-->

  <header class="c-portfolio-item__header">
    <div class="">
      <?php if ( get_post_meta( get_the_ID(), 'm4wp_portfolio_item_details_client', true ) ) : ?>
        <h3 class="c-portfolio-item__client"><?php echo get_post_meta( get_the_ID(), 'm4wp_portfolio_item_details_client', true ); ?></h3>

        <hr class="o-sep o-sep--project-client o-sep--project-client--home">
      <?php endif; ?>

      <?php the_title( '<h2 class="c-portfolio-item__title">', '</h2>' ); ?>

      <?php if ( get_the_term_list( $post->ID, 'portfolio_category') ) : ?>
        <span class="c-portfolio-item__category"><?php echo strip_tags( get_the_term_list( $post->ID, 'portfolio_category', '', ', ', '' )); ?></span>
      <?php endif; ?>
    </div>
  </header><!-- .c-portfolio-item__header -->


  <div class="c-portfolio-item__content">
    <?php olevia_print_the_content(); ?>
  </div><!-- .c-post__content -->
</article><!-- #project-<?php the_ID(); ?> -->
