<?php
$conexion =@mysqli_connect("localhost","root", "");
$base =@mysqli_select_db($conexion,"telcelpalcialb");
$curp = $_POST['curptx'];
$nombre = $_POST['nombretx'];
$apPA = $_POST['apPAtx'];
$apMA = $_POST['apMAtx'];
$sexo = $_POST['sexotx'];
$fecha = $_POST['nacitx'];
$calle = $_POST['calletx'];
$numero = $_POST['numerotx'];
$colonia = $_POST['coloniatx'];
$municipio = $_POST['municipiotx'];
$estado = $_POST['estadotx'];
$codpost = $_POST['codposttx'];
$iddireccion = mt_rand(100,999);
$sql = "INSERT INTO direccion VALUES ('$iddireccion','$calle','$numero','$colonia',
'$municipio','$estado','$codpost')";
mysqli_query($conexion, $sql);
$sql = "INSERT INTO persona VALUES ('$curp','$nombre','$apPA','$apMA',
'$sexo','$fecha', '$iddireccion')";
mysqli_query($conexion, $sql);
?>