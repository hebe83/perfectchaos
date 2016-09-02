<?php

/**
 * The Portfolio taxonomy Type data.
 *
 * @link       https://made4wp.com
 * @since      1.0.0
 * @package    M4WP Portfolio
 */

/**
 * The Portfolio taxonomy Type data.
 *
 * @package    M4WP Portfolio
 * @author     Made4WP <made4wp@gmail.com>
 */
class M4wp_Portfolio_Taxonomy_Type {

  /**
   * Return taxonomy default arguments.
   *
   * @since 1.0.0
   *
   * @return array Taxonomy default arguments.
   */
  public function default_args() {

    $labels = array(
      'name'                       => _x( 'Types', 'Taxonomy General Name', 'm4wp-portfolio' ),
      'singular_name'              => _x( 'Type', 'Taxonomy Singular Name', 'm4wp-portfolio' ),
      'menu_name'                  => __( 'Types', 'm4wp-portfolio' ),
      'all_items'                  => __( 'All Types', 'm4wp-portfolio' ),
      'parent_item'                => __( 'Parent Type', 'm4wp-portfolio' ),
      'parent_item_colon'          => __( 'Parent Type:', 'm4wp-portfolio' ),
      'new_item_name'              => __( 'New Type Name', 'm4wp-portfolio' ),
      'add_new_item'               => __( 'Add New Type', 'm4wp-portfolio' ),
      'edit_item'                  => __( 'Edit Type', 'm4wp-portfolio' ),
      'update_item'                => __( 'Update Type', 'm4wp-portfolio' ),
      'view_item'                  => __( 'View Type', 'm4wp-portfolio' ),
      'separate_items_with_commas' => __( 'Separate types with commas', 'm4wp-portfolio' ),
      'add_or_remove_items'        => __( 'Add or remove types', 'm4wp-portfolio' ),
      'choose_from_most_used'      => __( 'Choose from the most used', 'm4wp-portfolio' ),
      'popular_items'              => __( 'Popular Types', 'm4wp-portfolio' ),
      'search_items'               => __( 'Search Types', 'm4wp-portfolio' ),
      'not_found'                  => __( 'Type Not Found', 'm4wp-portfolio' ),
    );

    $args = array(
      'labels'            => $labels,
      'public'            => true,
      'show_in_nav_menus' => true,
      'show_ui'           => true,
      'show_tagcloud'     => true,
      'hierarchical'      => true,
      'rewrite'           => array( 'slug' => 'portfolio_type' ),
      'show_admin_column' => true,
      'query_var'         => true,
    );

    return apply_filters( 'm4wp_portfolio_taxanomy_type_args', $args );

  }

}