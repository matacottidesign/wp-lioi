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

        <div class="col-12 col-lg-3 pt-8">
          <svg id="logo" data-name="Livello 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 143.92 389.05"><title>logo-fabiano-lioi</title><path d="M-113.48-96.36h-39.11a24.87,24.87,0,0,0,3.18-12.19,25,25,0,0,0-25-25,25,25,0,0,0-25,25,24.77,24.77,0,0,0,3.19,12.19h-50.3V255.5H-102.6V-96.36Zm-.26,207.53c.23,3.37-.66,5.72-3.82,7.29-8.38,4.18-20.07,2.54-27-3.85-9.69-8.9-17.93-18.58-20.33-32.21-.75-4.29-3.25-8.27-5-12.39l.77-1.18c4.28,1.64,8.6,3.16,12.81,5,8.39,3.58,16.65,7.46,25.08,10.93,4.85,2,9.78,1.92,15.18-2.7.56,3.65,1.12,6.07,1.27,8.51C-114.35,97.4-114.22,104.3-113.74,111.17Zm-1.11,13.25v40.34c-10.9,2.82-20-2.66-27.62-9.78-5.88-5.45-10.18-12.63-15-19.14a7.12,7.12,0,0,1-1.62-4.5c.83-6.53,2.05-13,3.38-21C-144.57,122.57-132.41,130.42-114.85,124.42Zm-53.09,2.86c-.89-.34-1.75-.75-2.62-1.12,1.49-4.93,3-9.15,4-13.51.46-2.12-.34-4.5-.22-6.74a14.82,14.82,0,0,1,1.32-3.82c1.28.48,2.79.69,3.78,1.52a4.51,4.51,0,0,1,1.28,3.11,149.58,149.58,0,0,1-.26,16.41C-161.3,129.2-162.16,129.47-167.94,127.28Zm1.34,17q-4.53,18.81-9,37.64c-.89,3.72-3,4.53-11.47,3.47,3.34-15,6.4-29.49,9.92-43.9,1.17-4.77,5.31-3.41,8.73-2.66C-164.76,139.6-166,142-166.6,144.26Zm3.67-175.86a6,6,0,0,1,2.13,4.27c-.09,1.23-2.32,3.53-2.82,3.34-7.3-2.84-12.44.92-18.17,5,1.07-2.38,2.16-4.75,3.21-7.14,2.55-5.79,1.63-8.69-3.58-12.3a35.12,35.12,0,0,1-7.3-6.61c11.56,4.7,20.24.07,28-8l1.82,1.34c-1.22,3.06-1.83,6.61-3.81,9.07C-166.79-38.46-167.26-35.23-162.93-31.6ZM-178.5-4.25c-.33,1.5-1.88,2.72-3.56,4.87l-4.26-4.21c1.56-1.19,3-2.81,4.74-3.38C-180.85-7.2-178.34-5-178.5-4.25ZM-191-2c-1.3,1-2.68,2.85-3.88,2.74-1.51-.13-2.88-1.88-4.31-2.93.91-1.14,1.79-3.19,2.75-3.23,1.74-.06,3.54,1.07,5.31,1.7C-191.09-3.11-191-2.54-191-2Zm-4.74,24.1a138.73,138.73,0,0,1,14.83-1.06c4.23-.08,4.28.21,3.68,5.83-6.23,0-12.17.12-18.1-.09-1.28-.05-2.53-1.29-3.79-2C-198,23.9-197,22.29-195.74,22.14Zm16.56,23.32c-2.64,6,.49,11.83-4.57,16.92l-8.06-13.66Zm-4.46,27.38c6.68,6.19,8.83,14.55,11.11,22.77.27,1-1,2.74-2,3.65-10.13,9.28-21.46,16-35.6,17.26-6.26.54-12.44,2.07-18.67,3.07-1.93.31-3.91.35-6.52.57,0-8.25-.14-15.69.15-23.12,0-1,2-2.38,3.33-3,14.41-6.2,28.88-12.25,43.31-18.41A43.6,43.6,0,0,0-183.64,72.84Zm4.45-2.14c3-3,4.94-1.66,6.33,1.52,3,7,6,13.93,8.94,20.9l-.9,1.3c-1.5-.64-3.82-.88-4.38-2C-172.73,85.32-175.88,78-179.19,70.7ZM-120.3-81.93c3.49,0,4.18,2,4.15,4.81-.16,12.3-.55,24.61-.44,36.92.27,28.6.82,57.2,1.14,85.8.11,9.16,0,18.32-.38,27.47-.06,1.37-1.89,3.43-3.3,3.86a30.59,30.59,0,0,1-21.05-.76c-6.41-2.7-12.4-6.4-18.62-9.56-4.83-2.45-9.79-4.64-14.55-7.2-1.17-.63-2.55-2.24-2.55-3.4a41.48,41.48,0,0,1,1.2-9.32,6.74,6.74,0,0,1,2.52-3.78c11.67-7.63,14.17-14.78,10.17-28-2.64-8.71-1.28-17.12,3.31-25,10.18-17.55,16.38-36.31,16.78-56.73.09-4.76-.52-9.52-.85-15.08C-134.92-81.9-127.61-81.82-120.3-81.93Zm-69.11-26.62a15,15,0,0,1,15-15,15,15,0,0,1,15,15,15,15,0,0,1-6.29,12.19h-17.41A15,15,0,0,1-189.41-108.55Zm-38.68,84.12c1.33-13.86,6.86-18.92,21-18.57a8.39,8.39,0,0,1,9.42,5.42c1.76,4.42,2.45,9-.85,13.68C-202.66-18-207.14-13-214.6-11.74-221.44-10.57-228.76-17.49-228.09-24.43Zm-7.54-55c.7-.77,2-1.31,4.14-1.44l-4.14,7.54Zm0,57,1.31-.32c8.27,10.93,15.54,21.66,12.86,37.24-2,11.89,1.85,23.35,11.09,32.14a5.43,5.43,0,0,0,2.57,1.4c9.35,1.65,14.83,8.27,20.12,15.28,1.87,2.48,1.56,4.32-.88,5.77-4.27,2.55-8.44,5.52-13.05,7.19-10.89,4-22,7.27-34,11.15Zm.29,147.68c25.86,6.87,45-6.17,63.91-19.69l1.4,1.08c-1.36,4.28-2.56,8.63-4.17,12.82-.88,2.29-2.87,4.17-3.68,6.47-5.2,14.82-17.87,18.23-31.15,19.75-7.52.85-15.28-.19-22.91-.69-1.19-.08-3.18-1.79-3.25-2.84C-235.52,136.92-235.34,131.63-235.34,125.28Zm21.22,111.93c-5.58.74-11.2,1.29-16.82,1.48-1.05,0-3.1-2-3.11-3.15-.15-15.29.12-30.58,0-45.87-.08-9.45-.77-18.89-1-28.33-.28-12.26-.22-12.36,11.33-11.15,13.74,1.44,27.27,0,41-8.15-.48,4.83-.64,8.12-1.15,11.35C-188,179-192,204.66-203,228.58-205.46,233.83-208.85,236.51-214.12,237.21ZM-198.8,230c3.68-10,7.22-20.7,11.79-31,1.17-2.65,5.62-3.84,8.56-5.7l1.24.94c-1.3,12.23,1.78,23.61,7.09,34.37Zm81,8c-6.82-.06-13.7-.37-20.46.34-20.36,2.12-34.55-12.2-35.46-32.25A107.63,107.63,0,0,1-171.36,179c2.29-10.65,6.27-20.94,9.87-32.53,12.8,14.5,25.48,28,47.13,24.89.15,2.47.42,4.9.44,7.34.16,18.26.23,36.52.43,54.78C-113.45,236.65-114.46,238.06-117.76,238Z" transform="translate(246.52 133.55)"/></svg>
        </div>

        <div class="col-12 col-lg-3 pt-8">
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

        <div class="col-12 col-lg-3 pt-8">
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
    
        <div class="col-12 col-lg-3 pt-8">
          <h3>sostieni</h3>
          <a class="crwd" href="#">SCOPRI COME FARE</a>

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

    var test = document.getElementsByClassName("jsblack");
    var i;
    for (i = 0; i < test.length; i++) {
      test[i].style.color = "#000";
    }
    
  }

  function resizeText(multiplier) {
    if (document.body.style.fontSize == "") {
      document.body.style.fontSize = "1.313em";
    }
    document.body.style.fontSize = parseFloat(document.body.style.fontSize) + (multiplier * 0.2) + "em";
  }
</script>

<!--Flipbook-->
<script type="text/javascript">

	$(window).ready(function() {
		$('#magazine').turn({
							display: 'double',
							acceleration: true,
							gradients: !$.isTouch,
							elevation:50,
							when: {
								turned: function(e, page) {
									/*console.log('Current view: ', $(this).turn('view'));*/
								}
							}
						});
	});
	
	
	$(window).bind('keydown', function(e){
		
		if (e.keyCode==37)
			$('#magazine').turn('previous');
		else if (e.keyCode==39)
			$('#magazine').turn('next');
			
	});

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

