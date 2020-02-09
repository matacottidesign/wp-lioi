<?php
/**
 * Template Name: Il crowdfunding - la pagina dei ringraziamenti
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




    <?php

    // [CHECK FORM]
    if(isset($_POST["submit"])){
    
        //global $DBconnect;
        global $wpdb;
        $nome = $_POST["firstname"];
        $cognome = $_POST["lastname"];
        $mail = $_POST["email"];
        $donazione = $_POST["amount"];

        $wpdb->insert( 
            'xyz_donatori', 
            array(
                'nome' => $nome,
                'cognome' => $cognome,
                'mail' => $mail,
                'donazione' => $donazione
            )
        );

        if(!$wpdb){
        echo 'Messaggio di errore' . mysqli_error('$DBconnect');
        }

        mysqli_close($DBconnect);
    
    }

    $br = '<br>';
    
    $dati = $wpdb->get_results( 
        "
        SELECT *
        FROM xyz_donatori
        "
    );

    $num = 0;
    $conteggio = count($dati);

    $lista_generale = [];
    $lista_generale2 = [];
    $somma_array = [];

    while($num <= $conteggio){

        $properties = get_object_vars($dati[$num]);
        //echo '<pre>';
        //print_r($properties);
        //echo '</pre>';
        
        array_push($lista_generale, $properties["nome"] . ' ' . $properties["cognome"]);
        array_push($lista_generale2, $properties["nome"] . ' ' . $properties["cognome"]);
        array_push($somma_array, $properties["donazione"]);
        //echo $properties["nome"] . ' ' . $properties["cognome"];
        //echo '<hr>';
        $num++;
    } 

    $nomiEsomma = array_combine($lista_generale2, $somma_array);
    arsort($nomiEsomma);

    //Stampa lista generale ordinate in $value decrescente
    //echo '<pre>';
    //print_r($nomiEsomma);
    //echo '</pre>';
    //echo '<hr>';

    $numeroVolteDonazione = array_count_values($lista_generale);
    arsort($lista_generale);
    
    //Stampa lista donatori per numero di volte che hanno donato
    //echo '<pre>';
    //print_r($numeroVolteDonazione);
    //echo '</pre>';
    //echo '<hr>';

    $lista_solo_nomi = [];
    foreach($numeroVolteDonazione as $k => $v){
        array_push($lista_solo_nomi, $k);
    }
    sort($lista_solo_nomi);
    //Stampa lista donatori senza ripetizioni ed in ordine alfabetico
    //echo '<pre>';
    //print_r($lista_solo_nomi);
    //echo '</pre>';
    //echo '<hr>';

    foreach($lista_solo_nomi as $indice => $nome){
        //echo $nome . '<br>';
    }

    $numero_donatori = count($lista_solo_nomi);
    //echo $numero_donatori - 1; // -1 perchè si comincia dal valore 1 mentre 0 è vuoto.

    $start = 0;

?>



<div class="banner-ringraziamenti"></div>
<div class="container">

  <div class="py-8">
    <?php the_field('descrizione'); ?>
  </div>

  <h1 class="text-center pb-5">grazie</h1>

    <div class="card copertina mb-5">
        <div id="magazine" class="card w-100">
            <?php
            while($start <= $numero_donatori){ 

            $output = array_slice($lista_solo_nomi, $start, 10, true);
            echo '<div class="text-center">';

                foreach($output as $chiave => $valore){
                
                    echo '<pre>';
                    print_r($valore);
                    echo '</pre>';
                    
                }

            echo '</div>';    
            $start += 10;

            }
            ?>
        </div>
    </div>

</div>
    

    <?php
    mysqli_close($DBconnect);
    ?>

    <div class="container">
        <div class="row pb-8 text-center">
            <div class="col-12 col-lg-6">
                <?php 
                $link = get_field('link');
                if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="btn-crwd btn-top nav-link py-2" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>


</div>
 
<hr>

<?php get_footer(); ?>
