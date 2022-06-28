<!DOCTYPE html>
<html>
<head>
<title>CUARTO</title>
  <link rel="stylesheet" href="estilos.css">
  </head>
<body>
<header>
        <nav class="navegacion">
            <ul class="menu">
                <li><a href="primero.php">primero</a></li>
                <li><a href="segundo.php">segundo</a></li>
                <li><a href="tercero.php">tercero</a></li> 
                <li><a href="quinto.php">quinto</a></li>
                <li><a href="sexto.php">sexto</a></li>
            </ul>
        </nav>
   </header>
   <h1>ESTAS EN EL EJERCICIO 04</h1>
   <section class="php">
<?php 
$x = 1;

do {
  echo "El numero es: $x <br>";
  $x++;
} while ($x <= 5);
?>
</section>
</body>
</html>
