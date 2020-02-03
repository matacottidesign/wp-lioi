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


<div class="banner-libro"></div>
<div class="container">
    
    <div class="pt-8">
      <?php the_field('descrizione1'); ?>
    </div>

    <!--Carousel 1-->
    <div class="pt-8">     
      <?php
      // check if the repeater field has rows of data
      if( have_rows('ripetitore_carosello1') ):
      // loop through the rows of data
      while ( have_rows('ripetitore_carosello1') ) : the_row();
          $Id = rand();
          $images = get_sub_field('galleria1');

      if( $images ): ?>

              <div id="<?php echo 'carousel' . $Id ?>" class="carousel slide carousel-fade">
                  <div class="carousel-inner">

                      <?php $i = 0; foreach( $images as $image ): ?>

                          <div class="carousel-item <?php echo ($i == 0) ? 'active' : ''; ?>">
                              <img class="d-block w-100" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                          </div>
                          <div class="pulsanti-slide">
                              <a class="car-control pr-5 carousel-control-prev" href="<?php echo '#' . 'carousel' . $Id ?>" role="button" data-slide="prev">
                                  <i class="fas fa-chevron-left"></i>            
                              </a>
                              <a class="car-control pl-5 carousel-control-next" href="<?php echo '#' . 'carousel' . $Id ?>" role="button" data-slide="next">
                                  <i class="fas fa-chevron-right"></i>
                              </a>
                          </div>
                          
                      <?php $i++; endforeach; ?>
                      
                  </div>
              </div>
                  
      <?php endif;                              
      endwhile;
      else :
          // no rows found
      endif;
      ?>      
    </div>

    <div class="pt-8">
      <h1><?php the_field('titolo2'); ?></h1>
      <?php the_field('descrizione2'); ?>
    </div>

    <!--Carousel 2-->
    <div class="pt-8">     
      <?php
      // check if the repeater field has rows of data
      if( have_rows('ripetitore_carosello2') ):
      // loop through the rows of data
      while ( have_rows('ripetitore_carosello2') ) : the_row();
          $Id = rand();
          $images = get_sub_field('galleria2');

      if( $images ): ?>

              <div id="<?php echo 'carousel' . $Id ?>" class="carousel slide carousel-fade">
                  <div class="carousel-inner">

                      <?php $i = 0; foreach( $images as $image ): ?>

                          <div class="carousel-item <?php echo ($i == 0) ? 'active' : ''; ?>">
                              <img class="d-block w-100" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                          </div>
                          <div class="pulsanti-slide">
                              <a class="car-control pr-5 carousel-control-prev" href="<?php echo '#' . 'carousel' . $Id ?>" role="button" data-slide="prev">
                                  <i class="fas fa-chevron-left"></i>            
                              </a>
                              <a class="car-control pl-5 carousel-control-next" href="<?php echo '#' . 'carousel' . $Id ?>" role="button" data-slide="next">
                                  <i class="fas fa-chevron-right"></i>
                              </a>
                          </div>
                          
                      <?php $i++; endforeach; ?>
                      
                  </div>
              </div>
                  
      <?php endif;                              
      endwhile;
      else :
          // no rows found
      endif;
      ?>      
    </div>

    <div class="pt-8">
      <h1><?php the_field('titolo3'); ?></h1>
      <?php the_field('descrizione3'); ?>
    </div>

  <div class="row py-8 text-center">
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
 
<hr>

<?php get_footer(); ?>
