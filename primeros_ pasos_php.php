<!doctype html>
<html>
<head>
<title>php_es_mu_difisil</title>
<style type="text/css">
html,body{
margin:0px;
padding:0px;
width:100%;
height:100%;
background-color: orange;
font-family: Arial
}
</style>
</head>
<body>

<?php

/*cosolelog-------------------------------------------------------------------------------*/
$a = "<script>console.log('PHP:";
$b = "');</script>";
/*-------------------------------------------------------------------------------------------*/

$nombre = "nombre_X";
$apellido = "apellido_X";
$edad = 1;
$verdad = true;
$mentira = false;
$promedio = (8 + 9.5 + 9 + 10 + 8) / 5;
$nombre_completo = $nombre . " " .$apellido;
$presento_examen = (bool) 1;
$numero_preguntas = 5 + "5";
$numero_respuestas = "5" + 5;
$promedio_maximo = $numero_respuestas / 1.0;
$nargles = 3 . "5 nargles";
$nulo = null;

?>
<p><?php echo $nombre.$a.$nombre.$b ?></p>
<hr></hr>
<p><?php echo $apellido.$a.$apellido.$b ?></p>
<hr></hr>
<p><?php echo $edad.$a.$edad.$b ?></p>
<hr></hr>
<p><?php echo $verdad.$a.$verdad.$b ?></p>
<hr></hr>
<p><?php echo $mentira.$a.$mentira.$b ?></p>
<hr></hr>
<p><?php echo $promedio.$a.$promedio.$b ?></p>
<hr></hr>
<p><?php echo $nombre_completo.$a.$nombre_completo.$b ?></p>
<hr></hr>
<p><?php echo $presento_examen.$a.$presento_examen.$b ?></p>
<hr></hr>
<p><?php echo $numero_preguntas.$a.$numero_preguntas.$b ?></p>
<hr></hr>
<p><?php echo $numero_respuestas.$a.$numero_respuestas.$b ?></p>
<hr></hr>
<p><?php echo $promedio_maximo.$a.$promedio_maximo.$b ?></p>
<hr></hr>
<p><?php echo $nargles.$a.$nargles.$b ?></p>
<hr></hr>
<p>verdad es <?php var_dump($verdad); ?></p><?php echo $a.$verdad.$b ?>
<hr></hr>
<p>mentira es <?php var_dump($mentira); ?></p><?php echo $a.$mentira.$b ?>
<hr></hr>
<p>nulo es <?php var_dump($nulo); ?></p><?php echo $a.$nulo.$b ?>
<hr></hr>


<?php
$es_un_michi_grande = true;
$le_gusta_comer = true;
$sabe_volar = false;
$tiene_2_patas = false;
?>

<p>$es_un_michi_grande && $le_gusta_comer = <?php var_dump( $es_un_michi_grande && $le_gusta_comer ); ?></p>
<hr></hr>
<p>$es_un_michi_grande || $sabe_volar = <?php var_dump( $es_un_michi_grande || $sabe_volar ); ?></p>
<hr></hr>
<p>$sabe_volar || $tiene_2_patas = <?php var_dump( $sabe_volar || $tiene_2_patas ); ?></p>
<hr></hr>
<p>!$le_gusta_comer = <?php var_dump( $le_gusta_comer ); ?></p>
<hr></hr>
<p>!$le_gusta_comer || $es_un_michi_grande!$le_gusta_comer || $es_un_michi_grande = <?php var_dump( !$le_gusta_comer || $es_un_michi_grande ); ?></p>
<hr></hr>

<?php
$texto = "texto";
$texo_en_mayusculas = strtoupper($texto);
$bichus = "papallona, escarbat, penerola, formiga, mantis, abella, mosquit, espiadimonis, mosca, cuc";
$bichus_en_satanico = strrev($bichus);
$x = "gato";
$numeroA = 1;
$numeroB = 2;
$numeroC = $numeroA + $numeroB;

$numero0 = 0;
$numero1 = 1;
?>

<p><?php echo $texo_en_mayusculas ?></p>
<hr></hr>
<p>la longitud de $texto es <?php echo strlen ($texto); ?></p>
<hr></hr>
<p><?php echo "hay ".str_word_count($bichus). " de bichos en la variable bichus"; ?></p>
<hr></hr>
<p>$bichus_en_satanico = <?php echo $bichus_en_satanico ?></p>
<hr></hr>
<p><?php $x = "michi"; echo $x ?></p>
<hr></hr>
<p><?php echo $numeroA ?></p>
<hr></hr>
<p><?php echo $numeroB ?></p>
<hr></hr>
<p><?php echo $numeroA; echo " + "; echo $numeroB; echo " = ";echo $numeroC;?></p>
<hr></hr>
<p><?php echo $numero0 ?></p><?php echo $a.$numero0.$b ?>
<hr></hr>
<p><?php echo $numero1 ?></p><?php echo $a.$numero1.$b ?>
<hr></hr>
<p><?php $numero0 = false; echo $numero0; ?></p><?php echo $a.$numero0.$b ?>
<hr></hr>
<p><?php $numero0 = true; echo $numero1; ?></p><?php echo $a.$numero1.$b ?></p>
<hr></hr>
<p>
<?php
function funsion($p1, $p2, $p3, $p4){

    $resultao = $p1 + $p2; echo $resultao.$p3.$resultao.$p4;
    }
    funsion($numeroA, $numeroC, $a, $b);
    
?></p>
<hr></hr>
<p><?php

function funsion2($cosita) {

    if ($cosita%2==0) {
      echo "par";

    } else {
     echo "impar";
    }

}funsion2($numeroC);?></p>
<hr></hr>
<?php 

$array_de_numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
?>
<p><?php echo "array_de_numeros"; echo " = "; echo count($array_de_numeros); echo $a; echo count($array_de_numeros); echo $b; ?></p>
<hr></hr>
<p><?php array_push($array_de_numeros, "patidifusa"); echo "array_de_numeros"; echo " = "; echo count($array_de_numeros); echo $a; echo count($array_de_numeros); echo $b; ?></p>
<hr></hr>
<?php

array_push($array_de_numeros, "cavallo", "gallina"); 
$array_dulzon = ["pastelito","pastelon", "pastelius"];


?>
<p><?php  print_r( $array_de_numeros+$array_dulzon); ?></p>
<hr></hr>
<p>
<?php


function funsion3(){

$kungfusion = array("azabache","praline","caramelo");
list($cosa1, $cosa2, $cosa3) = $kungfusion;
$tomatefrito = " ";

echo $cosa1; echo $tomatefrito;
echo $cosa2; echo $tomatefrito;
echo $cosa3; echo $tomatefrito;

}
funsion3();
?>
</p>
<hr></hr>
<hr></hr>
<hr></hr>
<hr></hr>
<hr></hr>
<hr></hr>
<p>
<?php

function funsionfusionada(){
  
  $picajoso = array();
  for($pincho=1;$pincho<=10;$pincho++){
  array_push($picajoso, $pincho);
  }

  $picajosin = array();
  foreach ($picajoso as &$pinchete){
  if($pinchete % 2 == 0){}
  else {
  array_push($picajosin, $pinchete);
  }
  }

  $picajoso = $picajosin;
  print_r($picajoso);
  echo "<br>el mas grande ";
  echo max($picajoso);
  echo "<br>el mas pequeño ";
  echo min($picajoso);

  $colorines = "VIOLETA LA VIOLENTA";
  echo "<br>".$colorines;
  $colorines = strtolower($colorines); /*minuscula*/
  echo "<br>".$colorines;
  $colorines = strtoupper($colorines); /*mayuscula*/
  echo "<br>".$colorines;
  $colorines = strtolower($colorines); /*minuscula*/
  echo "<br>".$colorines;
  $colorines = ucfirst($colorines); /*primera letra mayuscula*/
  echo "<br>".$colorines;

}

funsionfusionada();

?>
</p>

<hr></hr>
<hr></hr>
<hr></hr>
<hr></hr>
<hr></hr>
<hr></hr>

<p>
<?php

function objeto_de_la_gracia_de_dios(){

class coche{

  public int $numero_de_puertas;
  public ?string $marca;

  public function __construct(int $numero_de_puertas, ?string $marca){
        
  $this->numero_de_puertas = $numero_de_puertas;
  $this->marca = $marca;
  }

}

$coche = new coche(1234, true);

var_dump($coche->numero_de_puertas);
var_dump($coche->marca);


}

objeto_de_la_gracia_de_dios();

?>
</p>
<hr></hr>

</body>
</html>