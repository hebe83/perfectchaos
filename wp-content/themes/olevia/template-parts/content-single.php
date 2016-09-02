<?php
/**
 * Template part for displaying single posts.
 *
 * @since   1.0.0
 * @package olevia
 */

// Default
$post_classes     = 'c-post';
$featured_classes = 'c-featured';
$image_size       = 'olevia-featured';
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( $post_classes ); ?>>

  <?php olevia_print_post_thumbnail( $image_size, $featured_classes ); ?>

  <div class="c-post__content">
    <?php olevia_print_the_content(); ?>
  </div><!-- .c-post__content -->

  <footer class="c-post__footer">
    <?php olevia_print_post_footer(); ?>
  </footer><!-- .c-post-footer -->
</article><!-- #post-## -->

