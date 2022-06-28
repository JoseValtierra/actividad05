<!DOCTYPE html>
<html>
<head>
<title>SEGUNDO</title>
  <link rel="stylesheet" href="estilos.css">
  </head>
<body>
<header>
        <nav class="navegacion">
            <ul class="menu">
                <li><a href="primero.php">primero</a></li>
                <li><a href="tercero.php">tercero</a></li>
                <li><a href="cuarto.php">cuarto</a></li>
                <li><a href="quinto.php">quinto</a></li>
                <li><a href="sexto.php">sexto</a></li>
            </ul>
        </nav>
   </header>
   <h1>ESTAS EN EL EJERCICIO 02</h1>
   <section class="php">
<?php
$t = date("H");

if ($t < "20") {
  echo "Ten un buen dia!";
}
?>
</section>
 
</body>
</html>