<?php
/**
 * Template part for displaying the site's branding.
 *
 * @since   1.0.0
 * @package olevia
 */

?>


<div class="c-brand">

    <?php if ( get_header_image() ) : ?>

    <div class="c-brand__logo-image">
      <h1 class="screen-reader-text"><?php bloginfo( 'name' ); ?></h1>
      <span class="screen-reader-text"><?php bloginfo( 'description' ); ?></span>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
        <img src="<?php header_image(); ?>" alt="<?php bloginfo( 'name' ); ?>">
      </a>
    </div>

    <?php else : ?>

    <h1 class="c-brand__logo">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
        <span><?php bloginfo( 'name' ); ?></span>
      </a>
    </h1>
    <p class="c-brand__tagline screen-reader-text"><?php bloginfo( 'description' ); ?></p>

    <?php endif; ?>

</div><!-- .site-branding -->
