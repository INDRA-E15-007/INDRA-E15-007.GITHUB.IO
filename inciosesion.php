<?php 
$con = mysqli_connect("localhost","root","");
$bas = mysqli_select_db($con, 'telcelpalcialb');
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$sql = "SELECT * FROM usuarios";
$eje = mysqli_query($con, $sql);
$ban = 0;
while ($res = mysqli_fetch_row($eje)) {
	if ($res[0] == $usuario) {
		echo "Usuario encontrado<br>";
		$ban = 1;
		if ($res[1] == $clave) {
			echo "Acceso utilizado";
		}else{
			echo "Clave incorrecta";
		}
		break;
	}
}
if ($ban == 0) {
	echo "Usuario no encontrado";
}
?>