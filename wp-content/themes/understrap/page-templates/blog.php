<?php
/**
 * Template Name: Il blog
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

    <!-- <div class="row">
        <div class="col-12 col-sm-4 pt-8">
            <a href="#">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text pb-3">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </a>
        </div>
    </div> -->

    <?php if( have_rows('card_articolo') ): ?>

    <div class="row">

    <?php while( have_rows('card_articolo') ): the_row(); 

        // vars
        /* $image = get_sub_field('image');
        $content = get_sub_field('content');
        $link = get_sub_field('link'); */

        ?>

        <div class="col-12 col-lg-4 pt-8">
            <div class="card blog-card">
                <?php 
                $image = get_sub_field('copertina');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                <div class="hovercard d-flex justify-content-center">
                    <div class="avatar">
                    <?php 
                    $image = get_sub_field('autore');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                    </div>
                </div>
                <div class="card-body jsblack">
                    <h1 class="card-title jsblack"><?php the_sub_field('titolo_articolo'); ?></h1>
                    <?php the_sub_field('riassunto_articolo'); ?>

                    <?php 
                    $link = get_sub_field('card_link');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="btn btn-primary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-left">
                            <?php the_sub_field('firma'); ?>
                        </div>
                        <div class="col-12 col-sm-6 text-right">
                            <?php the_sub_field('data_pubblicazione'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php endwhile; ?>

    </div>

    <?php endif; ?>

    <div style="padding-bottom: 6rem"></div>
  
</div>
 
<hr>

<?php get_footer(); ?>
