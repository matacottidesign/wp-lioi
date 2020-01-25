<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

<?php while ( have_posts() ) : the_post(); ?>

    <!--Jumbotron-->
    <div class="jumbotron banner-top d-flex align-items-center">
        <div class="container text-center hero-text">
            <h1 class="whitetxt"><?php the_field('titolo_pagina'); ?></h1>
            <h2 style="font-family: 'Cutive Mono', monospace !important;" class="whitetxt mt-5"><?php the_field('sottotitolo_pagina'); ?></h2>
        </div>
    </div>
         
    <!--Double call to action-->
    <div class="container">

        <!-- Top call to action -->
        <div class="row text-center">
        <div class="col-12 col-lg-6">
            <?php 
            $link = get_field('link_1_top');
            if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <a class="my-5 btn-top btn-crwd nav-link py-2" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>
        </div>
        <div class="col-12 col-lg-6">
            <?php 
            $link = get_field('link_2_top');
            if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <a class="my-5 btn-top nav-link py-2" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>
        </div>
        </div>

    </div>

    <hr>

    <!--Quote banner-->
    <div class="container text-center">

        <!-- Quote -->
        <div class="py-8">
        <i class="cite-top"><?php the_field('citazione_home'); ?></i>
        <i><?php the_field('autore_citazione'); ?></i>
        </div>
        
    </div> 

    <!-- Video box + video text -->
    <div class="box-video text-center d-flex justify-content-center align-items-center" style="height: 700px;">
      <div class="container">
        <?php the_field('video_embedded'); ?>
        <!-- <p class="w-100 d-flex align-items-center justify-content-center" style="background-color: #fff; height: 300px;">BOX VIDEO</p> -->
      </div>
    </div>
    <div class="py-8">
        <div class="container">
            <?php the_field('testo_video_embedded'); ?>
        </div>
    </div>

    <!--Carousel-->
    <div class="pb-8">
        <div class="container">
                
                <?php
                // check if the repeater field has rows of data
                if( have_rows('ripetitore_carosello') ):
                // loop through the rows of data
                while ( have_rows('ripetitore_carosello') ) : the_row();
                    $Id = rand();
                    $images = get_sub_field('galleria');

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
            </div>
        </div>
    </div>

    <hr>

    <!--What banner-->
    <div class="what py-8">
        <div class="container">
            <h1><?php the_field('titolo_paragrafo_1'); ?></h1>
            <?php the_field('descrizione_paragrafo_1'); ?>
            <div class="mt-5 row text-center">
                <div class="col-12 col-lg-6">
                    <?php 
                    $link = get_field('link_paragrafo_1');
                    if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="btn-top nav-link py-2" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <!--Why banner-->
    <div class="why py-8">
        <div class="container">
            <h1><?php the_field('titolo_paragrafo_2'); ?></h1>
            <?php the_field('descrizione_paragrafo_2'); ?>
            <div class="mt-5 row text-center">
                <div class="col-12 col-lg-6">
                    <?php 
                    $link = get_field('link_paragrafo_2');
                    if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="btn-top nav-link py-2" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <!--Bottom banner-->
    <div class="banner-bottom d-flex align-items-center">
        <div class="container">
            <h2><?php the_field('descrizione_banner_bottom'); ?></h2>
            <div class="row text-center">
                <div class="col-12 col-lg-6">
                    <?php 
                    $link = get_field('link_banner_bottom');
                    if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="btn-crwd btn-top nav-link mt-5" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    

<?php endwhile; ?>

<?php get_footer(); ?>
