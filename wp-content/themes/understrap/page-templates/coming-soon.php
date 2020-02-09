<?php
/**
 * Template Name: Coming soon
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


<div class="d-flex align-items-center text-center comingsoon">

<div class="container">
<h1 class="mb-5">coming soon</h1>
<p>La nostra campagna di Crowdfunding per stampare O.I. L’arte in una frattura e realizzare la mostra con le opere ancora non è iniziata, ma di certo non ti lasciamo all’oscuro di tutto! <br> Seguici sulla nostra pagina Facebook per avere tutti gli aggiornamenti, e aiutaci a realizzare questo sogno. Insieme è più bello!</p>
</div>
  
</div>
 
<hr>

<?php get_footer(); ?>
