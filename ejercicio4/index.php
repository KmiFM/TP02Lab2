<?php
// require
//el require_once lo pide una vez al html
require_once('html/encabezado.html');

$naipe1=mt_rand(1,13);

$naipe2=mt_rand(1,13);

$naipe3=mt_rand(1,13);


 $puntosObtenidos = $naipe1 + $naipe2 + $naipe3 ; 

 if ($naipe1==1 ){
   $naipe1='A (as)';
 }else{
   $naipe1==$naipe1;
 }
 if ($naipe1==11 ){
   $naipe1='J (Sota)';
 }else{
   $naipe1==$naipe1;
 }
 if ($naipe1==12 ){
   $naipe1='Q (Reina)';
 }else{
   $naipe1==$naipe1;
 }
 if ($naipe1==13 ){
   $naipe1='K (Rey)';
 }else{
   $naipe1==$naipe1;
 }
 if ($naipe2==1 ){
   $naipe2='A (as)';
 }else{
   $naipe2==$naipe2;
 }
 if ($naipe2==11 ){
   $naipe2='J (Sota)';
 }else{
   $naipe2==$naipe2;
 }
 if ($naipe2==12 ){
   $naipe2='Q (Reina)';
 }else{
   $naipe2==$naipe2;
 }
 if ($naipe2==13 ){
   $naipe2='K (Rey)';
 }else{
   $naipe2==$naipe2;
 }
 if ($naipe3==1 ){
   $naipe3='A (as)';
 }else{
   $naipe3==$naipe3;
 }
 if ($naipe3==11 ){
   $naipe3='J (Sota)';
 }else{
   $naipe3==$naipe3;
 }
 if ($naipe3==12 ){
   $naipe3='Q (Reina)';
 }else{
   $naipe3==$naipe3;
 }
 if ($naipe3==13 ){
   $naipe3='K (Rey)';
 }else{
   $naipe3==$naipe3;
 }
?>
<header><h1>Black Jack</h1></header>
<main>
<?php echo '<h4>Naipe 1:</h4><p>'. $naipe1, '</p>';?>
<?php echo '<h4>Naipe 2:</h4><p>'. $naipe2, '</p>';?>
<?php echo '<h4>Naipe 3:</h4><p>'. $naipe3, '</p>';?>
<?php 
if($puntosObtenidos == 21){
   echo '<h2>GANADOR!!!</h2>';
}else{
echo '<h4> Puntos Obtenidos: </h4><p>'. $puntosObtenidos,'</p>' ;
}
?>
</main>
<?php
require_once('html/pie.html')
?>