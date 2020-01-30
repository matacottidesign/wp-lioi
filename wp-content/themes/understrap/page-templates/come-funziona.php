<?php
/**
 * Template Name: Il crowdfunding - come funziona
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

  <div class="py-8">
    <?php the_field('incipit'); ?>
  </div>

  <div class="pb-8">
    <h1><?php the_field('titolo1'); ?></h1>
    <?php the_field('descrizione1'); ?>
  </div>

  <div class="pb-8">
    <h1><?php the_field('titolo2'); ?></h1>
    <?php the_field('descrizione2.1'); ?>
  </div>
  
  <!--Infographic-->
  <div class="pb-8">
    <div class="card infographic p-3">
    <h1 class="text-center pb-3">come sostenere la nostra campagna di crowdfunding</h1>
      <div class="row">

        <div class="col-12 col-lg-3">
          <div class="card text-center info-subcard mt-3">
            <div class="card-header text-center">
              <p class="head-num">1</p>
              <h2>clicca</h2>
              <p>sul pulsante in basso "Sostieni il nostro progetto"</p>
            </div>
            <div class="card-body">
              <i class="card-icon fas fa-hand-point-up"></i>
              <p class="card-text">Puoi accedere in modo rapido alla pagina del nostro progetto pubblicato su Produzioni dal Basso. <br> Leggi nello specifico cosa vogliamo realizzare e perchè abbiamo bisogno anche di te!</p>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-3">
          <div class="card text-center info-subcard mt-3">
            <div class="card-header text-center">
              <p class="head-num">2</p>
              <h2>scegli</h2>
              <p>la tua ricompensa su Produzioni dal Basso</p>
            </div>
            <div class="card-body">
              <i class="card-icon fas fa-gift"></i>
              <p class="card-text">Seleziona l'importo da donare: a ciascuno è collegata una ricompensa, che saremo felici di inviarti a campagna conclusa. <br> Anche un piccolo contributo fa la differenza: siamo una squadra!</p>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-3">
          <div class="card text-center info-subcard mt-3">
            <div class="card-header text-center">
              <p class="head-num">3</p>
              <h2>seleziona</h2>
              <p>il metodo di pagamento che reputi migliore</p>
            </div>
            <div class="card-body">
              <i class="card-icon fas fa-wallet"></i>
              <p class="card-text">Contribuisci al progetto in tutta sicurezza: scegli il metodo di pagamento e iscriviti alla piattaforma. <br> Basteranno pochi minuti per completare l'ordine: il tuo tempo e il tuo sostegno sono preziosi per noi!</p>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-3">
          <div class="card text-center info-subcard mt-3">
            <div class="card-header text-center">
              <p class="head-num">4</p>
              <h2>condividi</h2>
              <p>e sentiti parte del team di O.I. - L'arte in una frattura</p>
            </div>
            <div class="card-body">
              <i class="card-icon fas fa-comments"></i>
              <p class="card-text">Grazie! <br> Ora siamo più vicini alla meta: ma la strada da percorrere insieme è ancora lunga! Fai conoscere il progetto ad amici e parenti, e invitali ad entrare a far parte del team. <br> Contiamo su di te!</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="pb-8">
    <?php the_field('descrizione2.1'); ?>
  </div>

  <div class="pb-8">
    <h1><?php the_field('titolo3'); ?></h1>
    <?php the_field('descrizione3'); ?>
  </div>

</div>
 
<hr>

<?php get_footer(); ?>
