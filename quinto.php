<!DOCTYPE html>
<html>
<head>
<title>QUINTO</title>
  <link rel="stylesheet" href="estilos.css">
  </head>
<body>
<header>
        <nav class="navegacion">
            <ul class="menu">
                <li><a href="primero.php">primero</a></li>
                <li><a href="segundo.php">segundo</a></li>
                <li><a href="tercero.php">tercero</a></li>
                <li><a href="cuarto.php">cuarto</a></li>
                <li><a href="sexto.php">sexto</a></li>
            </ul>
        </nav>
   </header>
   <h1>ESTAS EN EL EJERCICIO 05</h1>
   <section class="php">
<?php  
for ($x = 0; $x <= 10; $x++) {
  echo "El numero es: $x <br>";
}
?>  
</section>
</body>
</html>