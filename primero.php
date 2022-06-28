<!DOCTYPE html>
<html>
  <head>
  <title>PROMERO</title>
  <link rel="stylesheet" href="estilos.css">
  </head>
<body>
<header>
        <nav class="navegacion">
            <ul class="menu">
                <li><a href="segundo.php">segundo</a></li>
                <li><a href="tercero.php">tercero</a></li>
                <li><a href="cuarto.php">cuarto</a></li>
                <li><a href="quinto.php">quinto</a></li>
                <li><a href="sexto.php">sexto</a></li>
            </ul>
        </nav>
   </header>
   <h1>ESTAS EN EL EJERCICIO 01</h1>
   <section class="php">
<?php
$favcolor = "azul";

switch ($favcolor) {
  case "rojo":
    echo "Tu color faborito es el rojo!";
    break;
  case "azul":
    echo "Tu color faborito es el azul!";
    break;
  case "verde":
    echo "Tu color faborito es el verde!";
    break;
  default:
    echo "Tu color faborito no es ni rojo, azul, ni verde!";
}
?>
 </section>
</body>
</html>