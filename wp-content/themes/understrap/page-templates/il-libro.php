<?php
/**
 * Template Name: Il libro
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() ) : ?>
  <?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>


<div class="banner-top-page"></div>
<div class="container">
  <div class="py-8">
    <?php the_field('descrizione'); ?>
  <div class="row pt-5 text-center">
      <div class="col-12 col-lg-6">
          <?php 
          $link = get_field('link_banner_bottom');
          if( $link ): 
          $link_url = $link['url'];
          $link_title = $link['title'];
          $link_target = $link['target'] ? $link['target'] : '_self';
          ?>
          <a class="btn-crwd btn-top nav-link py-2" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
          <?php endif; ?>
      </div>
  </div>
  </div>
</div>
 
<hr>

<?php get_footer(); ?>
