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
		<p>Compila il modulo per ordinare <i>O.I. L'arte in una frattura</i> o se sei un'azienda per collaborazioni lavorative. Cosa sei?</p>
		<div class="d-flex justify-content-between">
		<a href="#">Privato</a>
		<a href="#">Azienda</a>
		</div>
		<hr class="my-3">
	</div>

<?php endif; ?>
<?php dynamic_sidebar( 'right-sidebar' ); ?>

</div><!-- #right-sidebar -->
