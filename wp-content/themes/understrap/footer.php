<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<footer class="py-5 cite">
    <div class="container">
      <div class="row">

        <div class="col-12 col-sm-6">

		  <h3>Menù</h3>		  
          <ul class="m-0 p-0">
            <li class="py-1">
              <a href="#">IL LIBRO</a>
            </li>

            <li class="py-1">
              <a class="crwd" href="#">IL CROWDFUNDING</a>
              <ul>
                <li>
				  <hr>
                  <a href="#">COME FUNZIONA</a>
                  <hr>
                </li>
                <li>
                  <a class="crwd" href="#">SOSTIENI IL NOSTRO PROGETTO SU PRODUZIONI DAL BASSO</a>
                  <hr>
                </li>
                <li>
                  <a href="#">LA PAGINA DEI RINGRAZIAMENTI</a>
                  <hr>
                </li>
              </ul>
            </li>

            <li class="py-1">
              <a href="#">L'AUTORE</a>
              <ul>
                <li>
				<hr>
                  <a href="#">SULLA CARTA</a>
                  <hr>
                </li>
                <li>
                  <a href="#">SULLO SCHERMO</a>
                  <hr>
                </li>
              </ul>
            </li>

            <li class="py-1">
              <a href="#">BLOG</a>
            </li>

            <li class="py-1">
              <a href="#">CONTATTI</a>
              <ul>
                <li>
				<hr>
                  <a href="#">PER I CURIOSI</a>
                  <hr>
                </li>
                <li>
                  <a href="#">PER LA STAMPA</a>
                  <hr>
                </li>
              </ul>
            </li>

		  </ul>
		  
		</div>
		
        <div class="col-12 col-sm-6">

		<h3>Sostieni il nostro progetto</h3>
		<?php 
		$link = get_field('link_crowdfunding');
		if( $link ): 
		$link_url = $link['url'];
		$link_title = $link['title'];
		$link_target = $link['target'] ? $link['target'] : '_self';
		?>
		<a class="crwd" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
		<?php endif; ?>

		<h3 class="mt-5">Mailing list</h3>
		<?php
		// check if the repeater field has rows of data
		if( have_rows('mailing_list') ):
			// loop through the rows of data
			while ( have_rows('mailing_list') ) : the_row();
				// display a sub field value
				?>

				<?php 
				$link = get_sub_field('mail');
				if( $link ): 
					$link_url = $link['url'];
					$link_title = $link['title'];
					$link_target = $link['target'] ? $link['target'] : '_self';
					?>
					<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
					<?php echo '<br>'; ?>
			
				<?php endif; ?>

				<?php
			endwhile;
		else :
			// no rows found
		endif;
		?>

		<h3 class="mt-5">Social</h3>
		<ul class="p-0 m-0 list-inline">
			<li class="list-inline-item">
			<a href="https://www.facebook.com/Fabianolioi/" target="_blank"><i class="fab fa-facebook-f"></i></a>
			</li>
			<li class="list-inline-item">
			<a href="https://twitter.com/FabianoLioi" target="_blank"><i class="fab fa-twitter"></i></a>
			</li>
			<li class="list-inline-item">
			<a href="https://www.instagram.com/fabianolioi/" target="_blank"><i class="fab fa-instagram"></i></a>
			</li>
			<li class="list-inline-item">
			<a href="https://vimeo.com/fabianolioi" target="_blank"><i class="fab fa-vimeo"></i></a>
			</li>
			<li class="list-inline-item">
			<a href="https://www.youtube.com/user/MrFabianoLioi" target="_blank"><i class="fab fa-youtube"></i></a>
			</li>
		</ul>
		</div>
		
      </div>
    </div>
  </footer>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

