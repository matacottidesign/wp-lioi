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

  <div class="row py-8">
      <div class="col-12 col-md-6 modulo-contatti">
            <?php the_field('editor_di_testo_2'); ?>
      </div>
      <div class="col-12 col-md-6">
            <?php the_field('testo_form_2'); ?>
      </div>
  </div>

</div>
 
<hr>

<?php get_footer(); ?>
