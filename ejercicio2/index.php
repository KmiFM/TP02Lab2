<?php
   require_once('html/encabezado.html');
?>  
<header> <h1>Horarios</h1></header>
<main>
<?php 
$codigo= mt_rand (1,25);

if ($codigo <10){
   $codigo = 'P0'.$codigo;
}else{
   $codigo= 'P'.$codigo;
}
switch($codigo){
   //codigos que no existe
   case 'P01':
   case 'P02':
   case 'P04':
   case' P05':
   case 'P22':
   case 'P19':
   case 'P12':
     echo $codigo, ' - El código de la materia ingresado no existe';
      break;
      //codigos que son del primer cuatrimestre
   case 'P03':
   case' P08':   
   case 'P13': 
   case 'P10':    
   case 'P11':     
   case 'P17':   
   case' P18':   
   case 'P16':   
   case 'P15':   
      echo $codigo, ' - La materia se cursa en el primer cuatrimestre';
      break;
   case 'P06':  
     echo '<h3>'. $codigo . '- Programación</h3>
     <p>
     Jueves 18 a 20hs - Teoría
     <br>
     Viernes 16 a 19 - Practica
     </p>';
      break;
    case 'P07':  
      echo  '<h3>'. $codigo . '- Laboratorio II</h3>
      <p>
      Jueves 18 a 20hs - Teoría
      <br>
      Viernes 16 a 19 - Practica
      </p>';
      break;
   case 'P14':  
         echo '<h3>'. $codigo . '- Paradigmas de Programación</h3>
         <p>
         Jueves 18 a 20hs - Teoría
         <br>
         Viernes 16 a 19 - Practica
         </p>';
    break;
    case 'P09':  
      echo '<h3>'. $codigo . '- Conceptos de Bases de Datos I</h3>
      <p>
      Jueves 18 a 20hs - Teoría
      <br>
      Viernes 16 a 19 - Practica
      </p>';
    break;
    case 'P23':  
      echo '<h3>'. $codigo . '- Taller de Lenguajes II</h3>
      <p>
      Jueves 18 a 20hs - Teoría
      <br>
      Viernes 16 a 19 - Practica
      </p>';
    break;
    case 'P20':  
      echo '<h3>'. $codigo . '- Ingeniería de Software</h3>
      <p>
      Jueves 18 a 20hs - Teoría
      <br>
      Viernes 16 a 19 - Practica
      </p>';
   break;
   case 'P21':  
      echo '<h3>'. $codigo . '- Comunicaciones II</h3>
      <p>
      Jueves 18 a 20hs - Teoría
      <br>
      Viernes 16 a 19 - Practica
      </p>';
 break;
 case 'P25':  
   echo '<h3>'. $codigo . '- Sistemas Abiertos</h3>
   <p>
   Jueves 18 a 20hs - Teoría
   <br>
   Viernes 16 a 19 - Practica
   </p>';
 break;
 case 'P24':  
   echo '<h3>'. $codigo . '- Taller de Legislación y Organizaciones</h3>
   <p>
   Jueves 18 a 20hs - Teoría
   <br>
   Viernes 16 a 19 - Practica
   </p>';
break;
   }
?>
</main>

<?php
require_once('html/pie.html')
?>