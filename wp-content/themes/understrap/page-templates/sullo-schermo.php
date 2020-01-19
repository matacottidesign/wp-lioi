<?php
/**
 * Template Name: L'autore - sullo schermo
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
    <div class="row">
        <div class="col-12 col-sm-6">
        <h1><?php the_field('titolo_video_intervista'); ?></h1>
        <?php the_field('descrizione_video_intervista'); ?>
        </div>
        <div class="col-12 col-sm-6 embed-container">
        <?php the_field('video_intervista'); ?>
        </div>
    </div>
  </div>
  <div class="pb-8">
    <div class="row">
        <div class="col-12 col-sm-6">
        <h1><?php the_field('titolo_showreel'); ?></h1>
        <?php the_field('descrizione_showreel'); ?>
        </div>
        <div class="col-12 col-sm-6 embed-container">
        <?php the_field('showreel'); ?>
        </div>
    </div>
  </div>
  <div class="pb-8">
    <div class="row">
        <div class="col-12 col-sm-6">
        <h1><?php the_field('titolo_intervista_terzi'); ?></h1>
        <?php the_field('descrizione_intervista_terzi'); ?>
        </div>
        <div class="col-12 col-sm-6 embed-container">
        <?php the_field('intervista_terzi'); ?>
        </div>
    </div>
  </div>

</div>
 
<hr>

<?php get_footer(); ?>
