<?php
/**
 *  CSS of all customizer settings.
 *
 * @package olevia
 * @since   1.0.0
 */

$theme_options = olevia_get_options();
?>
<!-- =================================
  THEME SETTINGS CSS START
================================== -->
<style id="olevia-css">
/*------------------------------------------------------------------------------
  Header
------------------------------------------------------------------------------*/
<?php if ( 30 !== $theme_options['header_b-site__header_padding'] ) : ?>
.b-site__header {
  padding: <?php echo esc_html( $theme_options['header_b-site__header_padding'] ); ?>px 0;
}
<?php endif; ?>

/*------------------------------------------------------------------------------
  Colors
------------------------------------------------------------------------------*/
<?php if ( $theme_options['color_theme'] ) : ?>
a,
.c-nav-primary__mobile-toggle.is-active,
.c-menu-primary-mobile li:hover > a,
.c-menu-primary-mobile li:active > a,
.c-menu-primary-mobile li.is-active > a,
.c-menu-primary a:hover,
.c-menu-primary a:active,
.c-menu-footer a:hover,
.c-menu-footer a:active,
.c-post.sticky:before,
.c-post__meta a:hover,
.c-post__meta a:active,
.c-post__meta a:focus,
.c-post__read-more a:hover,
.c-post__read-more a:active,
.c-post__pages a .c-post__page:hover,
.c-post__pages a .c-post__page:active,
.c-post-nav a:hover,
.c-post-nav a:active,
.c-comment__author-name a:hover,
.c-comment__author-name a:active,
.c-footer-info__copyright a:hover,
.c-footer-info__copyright a:active,
.widget_recent_entries a:hover,
.widget_recent_entries a:active,
.widget_recent_entries a:focus,
.widget_recent_comments a:hover,
.widget_recent_comments a:active,
.widget_recent_comments a:focus,
.widget_archive a:hover,
.widget_archive a:active,
.widget_archive a:focus,
.widget_categories a:hover,
.widget_categories a:active,
.widget_categories a:focus,
.widget_meta a:hover,
.widget_meta a:active,
.widget_meta a:focus,
.widget_pages a:hover,
.widget_pages a:active,
.widget_pages a:focus,
.widget_nav_menu a:hover,
.widget_nav_menu a:active,
.widget_nav_menu a:focus,
.widget_rss a:hover,
.widget_rss a:active,
.widget_rss a:focus,
.widget_calendar #prev a:hover,
.widget_calendar #prev a:active,
.widget_calendar #next a:hover,
.widget_calendar #next a:active {
  color: <?php echo $theme_options['color_theme']; ?>;
}


button:hover,
input[type="button"]:hover,
input[type="reset"]:hover,
input[type="submit"]:hover,
.o-btn:hover,
.c-nav-primary__search i:hover,
.c-nav-primary__search i:active,
.c-nav-primary__search i:focus,
.c-nav-footer-social a i:hover,
.c-nav-footer-social a i:active,
.c-posts-nav--paginated a:hover,
.c-posts-nav--paginated a:active,
.bypostauthor .c-comment__author-name,
.bypostauthor .c-comment__author-name a,
.c-comments-nav--paginated a:hover,
.c-comments-nav--paginated a:active,
.widget_tag_cloud a:hover,
.widget_tag_cloud a:active,
.widget_calendar tbody a,
.widget_calendar tbody a:hover,
.widget_calendar tbody a:active {
  background-color: <?php echo $theme_options['color_theme']; ?>;
}


blockquote {
  border-color: <?php echo $theme_options['color_theme']; ?>;
}
<?php endif; ?>
</style>
<!-- =================================
  THEME SETTINGS CSS END
================================== -->