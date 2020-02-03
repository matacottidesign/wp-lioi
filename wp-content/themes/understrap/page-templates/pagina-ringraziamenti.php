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

    // [CONNESSIONE AL DATABASE]
    $DBconnect = mysqli_connect('localhost', 'root', 'root', 'sito_lioi');

    if(!$DBconnect){
    die('Impossibile connettersi al database');
    }



    // [CHECK FORM]
    if(isset($_POST["submit"])){
    
        global $DBconnect;
        $nome = $_POST["firstname"];
        $cognome = $_POST["lastname"];
        $mail = $_POST["email"];
        $donazione = $_POST["amount"];
    
        $test = mysqli_query($DBconnect, "INSERT INTO xyz_donatori(nome, cognome, mail, donazione) VALUES('$nome','$cognome', '$mail', '$donazione')");

        if(!$test){
        echo 'Messaggio di errore' . mysqli_error('$DBconnect');
        }

        mysqli_close($DBconnect);
    
    }

    $br = '<br>';
    $test2 = mysqli_query($DBconnect, "SELECT*FROM xyz_donatori");

    if(!$test2){
    echo 'Messaggio di errore' . mysqli_error('$DBconnect');
    }

    $general_list = [];
    $general_list2 = [];
    $amount_array = [];
    
    while($rowDatas = mysqli_fetch_assoc($test2)){
     
        array_push($general_list, $rowDatas["nome"] . ' ' . $rowDatas["cognome"]);
        array_push($general_list2, $rowDatas["nome"] . ' ' . $rowDatas["cognome"]);
        array_push($amount_array, $rowDatas["donazione"]);

    }

    $prova = array_combine($general_list2, $amount_array);
    arsort($prova);

    //Stampa lista generale ordinate in $value decrescente
    echo '<pre>';
    print_r($prova);
    echo '</pre>';
    echo '<hr>';
 
    $counted_general_list = array_count_values($general_list);
    arsort($counted_general_list);

    //Stampa lista donatori per numero di volte che hanno donato
    echo '<pre>';
    print_r($counted_general_list);
    echo '</pre>';
    echo '<hr>';

    $naming_list = [];
    foreach($counted_general_list as $k => $v){
        array_push($naming_list, $k);
    }
    sort($naming_list);

    //Stampa lista donatori in ordine alfabetico
    echo '<pre>';
    print_r($naming_list);
    echo '</pre>';
    echo '<hr>';
    $lenght_naming_list = count($naming_list);
    echo $lenght_naming_list;
    echo '<hr>'; 

    //================================
    $start = 0;

    /* while($start <= $lenght_naming_list){

    $output = array_slice($naming_list, $start, 10, true);

        foreach($output as $chiave => $valore){
        
            echo '<pre>';
            print_r($valore);
            echo '</pre>';

        }

    echo '===============';

    $start += 10;

    } */
    //================================

    $even = [];
    $odd = [];
    foreach($naming_list as $number => $name){

        if($number%2 === 0){
            array_push($even, $name);
        }else{
            array_push($odd, $name);
        }

    }
    ?>

    





<div class="banner-top-page"></div>
<div class="container">

  <div class="py-8">
    <?php the_field('descrizione'); ?>
  </div>

  <div class="pb-8">
    <div class="row">
        <div id=magazine class="card w-100">
        <?php
        while($start <= $lenght_naming_list){

        $output = array_slice($naming_list, $start, 10, true);
        echo '<div>';
    
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

  <!--LIBRO-->
    <h1 class="text-center pb-5">grazie</h1>
    <div class="pb-8">
        <div class="card px-5 py-2 book">
        <div class="row">
            <!--PAGINA SINISTRA-->
            <div class="col-12 col-sm-6 card book-page py-3">
                <p class="jsblack"><?php 
                    foreach($even as $index => $string){
                        print_r ($string . ' - ');   
                    }
                ?></p>
            </div>

            <!--PAGINA DESTRA-->
            <div class="col-12 col-sm-6 card book-page py-3">
                <p class="jsblack"><?php 
                    foreach($odd as $ind => $str){
                        print_r ($str . ' - ');   
                }
                ?></p>
            </div>
        </div>
    </div>

</div>
    

    <?php
    mysqli_close($DBconnect);
    ?>

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
 
<hr>

<?php get_footer(); ?>
