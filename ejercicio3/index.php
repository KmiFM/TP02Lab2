<!-- Realice una página web que genere de forma aleatoria las PATENTES de automotores (como se muestra en la figura) de acuerdo a la siguiente regla: 
• Comienzan con AE (use constantes) 
• Espacio en blanco 
• Número aleatorio entre 1 y 999 (el número debe estar compuesto por 3 caracteres, por lo tanto, para números menores a 3 cifras deberá rellenar con ceros) 
• Espacio en blanco 
2 caracteres aleatorios en mayúsculas desde la F a la Z  -->

<?php
// require
//el require_once lo pide una vez al html
require_once('html/encabezado.html');
$espacio=' ';
$num = mt_rand(1,999);
if ($num <10){
  $num = '00'.$num;
}else{ if($num<100){
  $num= '0'.$num;
}
}
$letraAleatoria1=chr(mt_rand(70,90));
$letraAleatoria2=chr(mt_rand(70,90));
?>
<header><h1>Registro Automotor de la Provincia de Tucumán</h1></header>
<main>
<h3>Patente Generada:</h3>
 <?php  echo'<p>AE' . $espacio, $num ,$espacio,$letraAleatoria1,$letraAleatoria2 . '</p>' ?>
</main>

<?php
   
require_once('html/pie.html')
?>