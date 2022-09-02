<?php

//nivel 
$nivel= mt_rand(65,67);
require_once('html/encabezado.html');

?>
<header><h1>SISTEMA DE FACTURACION</h1></header>
<section>

<aside>
  <p>Nivel</p> <?php echo chr($nivel); ?>
      <nav>
         <ul>
<?php
$nivel = chr ($nivel);
switch($nivel){
   case 'A': 
      echo '<li><a href="#">Listado de productos</a></li>';
      echo'<li> <a href="#">informes</a> </li>';
      break;
   case 'B':
      echo '<li><a href="#">CRUD productos</a></li>';
      echo'<li><a href="#">CRUD categorias</a></li>';
      echo '<li><a href="#">Informes</a></li>';
   break;
   default:
   echo '<li><a href="#">CRUD productos</a></li>';
      echo'<li><a href="#">CRUD categorias</a></li>';
      echo'<li><a href="#">Informes</a></li>';
      echo' <li><a href="#">CRUD usuarios</a></li>';
      echo '<li><a href="#">Balances</a></li>';
   
}
?>
</ul>
      </nav>
   </aside>
   <main>
   <p>Página principal</p>
</main>
   </section>
<?php require_once('html/pie.html');?>