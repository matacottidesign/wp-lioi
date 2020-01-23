<?php
/**
 * Template Name: Il crowdfunding - come funziona
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
    <h1><?php the_field('titolo1'); ?></h1>
    <?php the_field('descrizione1'); ?>
  </div>

  <div class="pb-8">
    <h1><?php the_field('titolo2'); ?></h1>
    <?php the_field('descrizione2.1'); ?>
  </div>

  <div class="pb-8">
    <?php 
    $image = get_field('immagine');
    if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>
  </div>

  <div class="pb-8">
    <?php the_field('descrizione2.1'); ?>
  </div>

  <div class="pb-8">
    <h1><?php the_field('titolo3'); ?></h1>
    <?php the_field('descrizione3'); ?>
  </div>

</div>
 
<hr>

<?php get_footer(); ?>
