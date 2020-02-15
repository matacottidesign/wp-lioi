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


  <div class="cta-bottom fixed-bottom mb-3 mr-3 text-right bottom-btn">
    <button id="bottom-btn" type="button" class="btn btn-primary" onclick="hideButton()"><a href="http://localhost:8888/wp-lioi/coming-soon/">SOSTIENI IL <br> NOSTRO PROGETTO</a></button>
  </div>


<footer class="pb-8 cite">
    <div class="container">
      <div class="row">

        <div class="col-12 col-lg-3 pt-8">
          <div id="logo"></div>
        </div>

        <div class="col-12 col-lg-3 pt-8">
          <ul class="m-0 p-0">

            <li class="py-1">
              <a href="http://localhost:8888/wp-lioi/libro/"><b>IL LIBRO</b></a>
            </li>

            <li class="py-1">
              <a class="crwd" href="#"><b>IL CROWDFUNDING</b></a>
            </li>
            <li class="py-1">
              <a class="light" href="http://localhost:8888/wp-lioi/come-funziona/">COME FUNZIONA</a>
            </li>
            <li class="py-1">
              <a class="crwd" class="light" href="#">SOSTIENI IL NOSTRO PROGETTO SU PRODUZIONI DAL BASSO</a>
            </li>
            <li class="py-1">
              <a class="light" href="#">LA PAGINA DEI RINGRAZIAMENTI</a>
            </li>
          </ul>
        </div>

        <div class="col-12 col-lg-3 pt-8">
          <ul class="m-0 p-0">

            <li class="py-1">
              <a href="#"><b>L'AUTORE</b></a>
            </li>
            <li class="py-1">
              <a class="light" href="http://localhost:8888/wp-lioi/sulla-carta/">SULLA CARTA</a>
            </li>
            <li class="py-1">
              <a class="light" href="http://localhost:8888/wp-lioi/sullo-schermo/">SULLO SCHERMO</a>
            </li>

            <li class="py-1">
              <a href="http://localhost:8888/wp-lioi/blog/"><b>IL BLOG</b></a>
            </li>

            <li class="py-1">
              <a href="http://localhost:8888/wp-lioi/contattaci/"><b>CONTATTACI</b></a>
            </li>
          </ul>
        </div>
    
        <div class="col-12 col-lg-3 pt-8">
          <h3>sostieni</h3>
          <a class="crwd" href="http://localhost:8888/wp-lioi/coming-soon/">SCOPRI COME FARE</a>

          <h3 class="pt-5">contatti</h3>
          <a class="button" href="mailto:info@arteinunafrattura.it">info@arteinunafrattura.it</a><br>
          <a class="button" href="mailto:press@arteinunafrattura.it">press@arteinunafrattura.it</a><br>
          <a class="button" href="mailto:staff@arteinunafrattura.it">staff@arteinunafrattura.it</a><br>

          <h3 class="pt-5">social</h3>
          <ul class="p-0 m-0 list-inline">
            <li class="list-inline-item">
            <a href="https://www.facebook.com/Fabianolioi/" target="_blank"><i class="fab fa-facebook-f"></i></a>
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

