<?php
/**
 * The right sidebar containing the main widget area.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! is_active_sidebar( 'right-sidebar' ) ) {
	return;
}

// when both sidebars turned on reduce col size to 3 from 4.
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<?php if ( 'both' === $sidebar_pos ) : ?>
	<div class="col-md-3 widget-area" id="right-sidebar" role="complementary">
<?php else : ?>
	<div class="col-md-4 widget-area" id="right-sidebar" role="complementary">

	<div class="right-widget-area">
		<h3 class="pr-color">Sostieni il nostro progetto</h3>
		<p>O.I. – L’arte in una frattura di Fabiano Lioi può essere stampato e può diventare una mostra solo perché tu lo vuoi. Ci stai?</p>
		<a href="#">Scopri come</a>
		<hr class="my-3">

		<h3 class="pr-color">Contattaci</h3>
		<p>Sei interessata/o al nostro progetto e vuoi saperne di più? Compila il form e inviaci un messaggio: saremo felici di ricontattarti via email!</p>
		<a href="http://localhost:8888/wp-lioi/contattaci/">Vai al form</a>
		<hr class="my-3">
	</div>

<?php endif; ?>
<?php dynamic_sidebar( 'right-sidebar' ); ?>

</div><!-- #right-sidebar -->
