<?php
/**
 * Customizer site home settings.
 *
 * @package olevia
 * @since   1.0.0
 */


if ( ! function_exists( 'olevia_customizer_register_home' ) ) :
/**
 * Register home settings.
 *
 * @since 1.0.0
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function olevia_customizer_register_home( $wp_customize ) {

  // Section
  $wp_customize->add_section(
    'olevia_home',
    array(
      // 'priority'    => 10,
      'title'       => __( 'Home Page', 'olevia' ),
      'description' => __( 'Home Page options.', 'olevia' ),
      // 'panel'       => ''
    )
  );

  // Custom settings and controls
  $wp_customize->add_setting(
    'olevia_options[home_projects_num]',
    array(
      'default'           => 9,
      'sanitize_callback' => 'olevia_sanitize_number_absint',
    )
  );
  $wp_customize->add_control(
    'olevia_options[home_projects_num]',
    array(
      'label'       => __( 'Number of Projects to Display.', 'olevia' ),
      'description' => __( 'Enter a number.', 'olevia' ),
      'section'     => 'olevia_home',
      'type'        => 'text',
    )
  );


  $wp_customize->add_setting(
    'olevia_options[home_display_c-portfolio-view-all]',
    array(
      'default'           => 1,
      'transport'         => 'postMessage',
      'sanitize_callback' => 'olevia_sanitize_checkbox'
    )
  );
  $wp_customize->add_control(
    'olevia_options[home_display_c-portfolio-view-all]',
    array(
      'label'       => __( 'Display View All Button', 'olevia' ),
      'description' => __( 'Check to display view all portfolio items button.', 'olevia' ),
      'section'     => 'olevia_home',
      'type'        => 'checkbox',
    )
  );


  $wp_customize->add_setting(
    'olevia_options[home_c-portfolio-view-all_text]',
    array(
      'default'           => __( 'View All', 'olevia' ),
      'transport'         => 'postMessage',
      'sanitize_callback' => 'olevia_sanitize_nohtml'
    )
  );
  $wp_customize->add_control(
    'olevia_options[home_c-portfolio-view-all_text]',
    array(
      'label'       => __( 'View All Button Text.', 'olevia' ),
      'description' => __( 'Text to display on the view all button.', 'olevia' ),
      'section'     => 'olevia_home',
      'type'        => 'text',
    )
  );


  $wp_customize->add_setting(
    'olevia_options[home_c-portfolio-view-all_url]',
    array(
      'default'           => 'http://yoursite.com/yourportfoliopage',
      'sanitize_callback' => 'olevia_sanitize_url'
    )
  );
  $wp_customize->add_control(
    'olevia_options[home_c-portfolio-view-all_url]',
    array(
      'label'       => __( 'View All Button URL.', 'olevia' ),
      'description' => __( 'URL to your portfolio page (portfolio page template).', 'olevia' ),
      'section'     => 'olevia_home',
      'type'        => 'text',
    )
  );
}
add_action( 'olevia_register_customizer_settings', 'olevia_customizer_register_home' );
endif;


if ( ! function_exists( 'olevia_set_home_settings_defaults' ) ) :
/**
 * Set default values.
 *
 * @since 1.0.0
 */
function olevia_set_home_settings_defaults( $defaults ) {
  $defaults = array_merge( $defaults, array(
    'home_projects_num'                 => 9,
    'home_display_c-portfolio-view-all' => 1,
    'home_c-portfolio-view-all_text'    => __( 'View All', 'olevia' ),
    'home_c-portfolio-view-all_url'     => 'http://yoursite.com/yourportfoliopage'
  ) );

  return $defaults;
}
add_filter( 'olevia_option_defaults', 'olevia_set_home_settings_defaults' );
endif;
