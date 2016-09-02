<?php
/**
 * Admin related functions.
 *
 * @since   1.0.0
 * @package olevia
 */


function olevia_add_theme_docs_page() {
  add_theme_page( 'Theme Documentation', 'Theme Documentation', 'edit_theme_options', 'theme-docs', 'olevia_print_theme_docs_page' );
}
add_action( 'admin_menu', 'olevia_add_theme_docs_page' );

function olevia_print_theme_docs_page() {
  ?>
  <h2><?php esc_html_e( 'Theme Documetantion', 'olevia' ); ?></h2>
  <div class="card">
    <h3><?php esc_html_e( 'Table of Contents', 'olevia' ); ?></h3>
    <p>
      <a href="http://docs.made4wp.com/wordpress-basics/" target="_blank"><?php esc_html_e( 'WordPress Basics', 'olevia' ); ?></a><br>
      <a href="http://docs.made4wp.com/olevia/#setup" target="_blank"><?php esc_html_e( 'Setup', 'olevia' ); ?></a><br>
      <a href="http://docs.made4wp.com/olevia/#menu-locations" target="_blank"><?php esc_html_e( 'Menu Locations', 'olevia' ); ?></a><br>
      <a href="http://docs.made4wp.com/olevia/#custom-page-templates" target="_blank"><?php esc_html_e( 'Custom Page Templates', 'olevia' ); ?></a><br>
      <a href="http://docs.made4wp.com/olevia/#widget-areas" target="_blank"><?php esc_html_e( 'Widget Areas', 'olevia' ); ?></a><br>
      <a href="http://docs.made4wp.com/olevia/#theme-options" target="_blank"><?php esc_html_e( 'Theme Options', 'olevia' ); ?></a>
      <a href="http://docs.made4wp.com/olevia/#portfolio" target="_blank"><?php esc_html_e( 'Portfolio Setup', 'olevia' ); ?></a><br>
      <a href="http://docs.made4wp.com/olevia/#blog" target="_blank"><?php esc_html_e( 'Blog Setup', 'olevia' ); ?></a><br>
    </p>
  </div>
  <?php
}


/**
 * Loads required plugins Plugin Class.
 *
 * @since  1.0.0
 */
require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'olevia_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register two plugins - one included with the TGMPA library
 * and one from the .org repo.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
function olevia_register_required_plugins() {
  /**
   * Array of plugin arrays. Required keys are name and slug.
   * If the source is NOT from the .org repo, then source is also required.
   */
  $plugins = array(
    array(
      'name'         => 'M4WP Portfolio',
      'slug'         => 'm4wp-portfolio',
      'source'       => '',
      'external_url' => '',
      // 'required'     => true
    )
  );

  $theme_text_domain = 'olevia';

  /**
   * Config settings
   */
  $config = array(
    'domain'           => 'olevia',                    // Text domain - likely want to be the same as your theme.
    'default_path'     => '',                          // Default absolute path to pre-packaged plugins
    'parent_slug' => 'themes.php',                // Default parent menu slug
    'menu'             => 'install-required-plugins',  // Menu slug
    'has_notices'      => true,                        // Show admin notices or not
    'is_automatic'     => false,                       // Automatically activate plugins after installation or not
    'message'          => '',                          // Message to output right before the plugins table
    'strings'          => array(
      'page_title'                     => __( 'Install Required Plugins', 'olevia' ),
      'menu_title'                     => __( 'Install Plugins', 'olevia' ),
      'installing'                     => __( 'Installing Plugin: %s', 'olevia' ), // %1$s = plugin name
      'oops'                           => __( 'Something went wrong with the plugin API.', 'olevia' ),
      'notice_can_install_required'    => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'olevia' ),
      'notice_can_install_recommended' => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'olevia' ),
      'notice_cannot_install'          => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'olevia' ),
      'notice_can_activate_required'   => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'olevia' ),
      'notice_can_activate_recommended'=> _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'olevia' ),
      'notice_cannot_activate'         => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'olevia' ),
      'notice_ask_to_update'           => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'olevia' ),
      'notice_cannot_update'           => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'olevia' ),
      'install_link'                   => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'olevia' ),
      'activate_link'                  => _n_noop( 'Activate installed plugin', 'Activate installed plugins', 'olevia' ),
      'return'                         => __( 'Return to Required Plugins Installer', 'olevia' ),
      'plugin_activated'               => __( 'Plugin activated successfully.', 'olevia' ),
      'complete'                       => __( 'All plugins installed and activated successfully. %s', 'olevia' ), // %s = dashboard link
      'nag_type'                       => 'updated' // Determines admin notice type - can only be 'updated' or 'error'
    )
  );

  tgmpa( $plugins, $config );

}