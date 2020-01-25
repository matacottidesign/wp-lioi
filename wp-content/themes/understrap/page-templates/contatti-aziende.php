<?php
/**
 * Template Name: Contatti - Aziende
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
    <?php the_field('incipit'); ?>
  </div>

  <div class="pb-8">
    <?php the_field('intervista'); ?>
  </div>

</div>
 
<hr>

<?php get_footer(); ?>
