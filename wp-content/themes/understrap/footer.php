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


  <div class="fixed-bottom mb-3 mr-3 text-right bottom-btn">
    <button id="bottom-btn" type="button" class="btn btn-primary" onclick="hideButton()">SOSTIENI IL <br> NOSTRO PROGETTO</button>
  </div>


<footer class="pb-8 cite">
    <div class="container">
      <div class="row">

        <!-- <div class="col-12 col-sm-4 pt-8">

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

            

		      </ul>
		  
		    </div>
		
        <div class="col-12 col-sm-4 pt-8">
          <ul class="m-0 p-0">
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
        </div> -->

        <div class="col-12 col-sm-4 pt-8">
          <ul class="m-0 p-0">

            <li class="py-1">
              <a href="#"><b>IL LIBRO</b></a>
            </li>

            <li class="py-1">
              <a class="crwd" href="#"><b>IL CROWDFUNDING</b></a>
            </li>
            <li class="py-1">
              <a class="light" href="#">COME FUNZIONA</a>
            </li>
            <li class="py-1">
              <a class="crwd" class="light" href="#">SOSTIENI IL NOSTRO PROGETTO SU PRODUZIONI DAL BASSO</a>
            </li>
            <li class="py-1">
              <a class="light" href="#">LA PAGINA DEI RINGRAZIAMENTI</a>
            </li>
          </ul>
        </div>

        <div class="col-12 col-sm-4 pt-8">
          <ul class="m-0 p-0">

            <li class="py-1">
              <a href="#"><b>L'AUTORE</b></a>
            </li>
            <li class="py-1">
              <a class="light" href="#">SULLA CARTA</a>
            </li>
            <li class="py-1">
              <a class="light" href="#">SULLO SCHERMO</a>
            </li>

            <li class="py-1">
              <a href="#"><b>IL BLOG</b></a>
            </li>

            <li class="py-1">
              <a href="#"><b>CONTATTACI</b></a>
            </li>
          </ul>
        </div>
    
    <div class="col-12 col-sm-4 pt-8">
      <h3>Sostieni il nostro progetto</h3>
      <a class="crwd" href="#">SCOPRI COME FARE</a>

      <h3 class="pt-5">Contatti</h3>
      <a class="button" href="mailto:info@arteinunafrattura.it">info@arteinunafrattura.it</a>
      <a class="button" href="mailto:press@arteinunafrattura.it">press@arteinunafrattura.it</a>
      <a class="button" href="mailto:staff@arteinunafrattura.it">staff@arteinunafrattura.it</a>

      <h3 class="pt-5">Social</h3>
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

<!--Accessibility-->
<script type="text/javascript">
function default_bg() {
  document.body.style.backgroundColor = "#f8f9fa";
  document.body.style.color = "#343a40";

  var h1 = document.getElementsByTagName("H1");
  var i;
  for (i = 0; i < h1.length; i++) {
    h1[i].style.color = "#343a40";
  }

  var h2 = document.getElementsByTagName("H2");
  var i;
  for (i = 0; i < h2.length; i++) {
    h2[i].style.color = "#343a40";
  }

  var h3 = document.getElementsByTagName("H3");
  var i;
  for (i = 0; i < h3.length; i++) {
    h3[i].style.color = "#343a40";
  }

  var a = document.getElementsByTagName("A");
  var i;
  for (i = 0; i < a.length; i++) {
    a[i].style.color = "#343a40";
  }

  var footer = document.getElementsByTagName("FOOTER");
  var i;
  for (i = 0; i < footer.length; i++) {
    footer[i].style.backgroundColor = "#f8f9fa";
  }

}

function dark_bg() {
  document.body.style.backgroundColor = "#343a40";
  document.body.style.color = "#fff";
  
  var h1 = document.getElementsByTagName("H1");
  var i;
  for (i = 0; i < h1.length; i++) {
    h1[i].style.color = "#fff";
  }

  var h2 = document.getElementsByTagName("H2");
  var i;
  for (i = 0; i < h2.length; i++) {
    h2[i].style.color = "#fff";
  }

  var h3 = document.getElementsByTagName("H3");
  var i;
  for (i = 0; i < h3.length; i++) {
    h3[i].style.color = "#fff";
  }

  var a = document.getElementsByTagName("A");
  var i;
  for (i = 0; i < a.length; i++) {
    a[i].style.color = "#fff";
  }

  var footer = document.getElementsByTagName("FOOTER");
  var i;
  for (i = 0; i < footer.length; i++) {
    footer[i].style.backgroundColor = "#343a40";
  }
  
}

function resizeText(multiplier) {
  if (document.body.style.fontSize == "") {
    document.body.style.fontSize = "1.313em";
  }
  document.body.style.fontSize = parseFloat(document.body.style.fontSize) + (multiplier * 0.2) + "em";
}
</script>


<!--Hide menu-->
<script type="text/javascript">

var prevScrollpos = window.pageYOffset;
window.onscroll = function(){

  var currentScrollpos = window.pageYOffset;

  if(prevScrollpos > currentScrollpos){
    document.getElementById('menu').style.top = '0';
    document.getElementById('bottom-btn').style.opacity = '1';
  } else {
    document.getElementById('menu').style.top = '-100px';
    document.getElementById('bottom-btn').style.opacity = '0';
  }

  prevScrollpos = currentScrollpos;
}

</script>

</body>

</html>

