<!DOCTYPE html>
<html>
<head>
<title>SEXTO</title>
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
                <li><a href="quinto.php">quinto</a></li> 
            </ul>
        </nav>
   </header>
   <h1>ESTAS EN EL EJERCICIO 06</h1>
   <section class="php">
<?php  
$colors = array("rojo", "verde", "azul", "amarillo"); 

foreach ($colors as $value) {
  echo "$value <br>";
}
?>  
</section>
</body>
</html>
