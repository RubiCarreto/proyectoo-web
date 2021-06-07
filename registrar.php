<?php  
if (isset($_POST['nombres']) && isset($_POST['Apellidos']) && isset($_POST['edad']) && isset($_POST['correo'])  && isset($_POST['contraseña']) ) {
	include 'con_db.php';

	$nombres = $_POST['nombres'];
	$Apellidos = $_POST['Apellidos'];
	$edad = $_POST['edad'];
	$correo = $_POST['correo'];
	$contraseña = $_POST['contraseña'];

	if ( empty($contraseña) || empty($nombres) || empty($Apellidos) || empty($edad) || empty($correo) ) {
		echo "Rellena los campos";
	}else {

		$sql = "INSERT INTO datos(nombres, Apellidos, edad, correo, Contraseña) VALUES('$nombres', '$Apellidos' , '$edad', '$correo', '$contraseña' )";
		$res = mysqli_query($conex, $sql);

		if ($res) {
			header("location: index.html");
		}else {
			echo "Your message could not be sent!";
		}
	}

}else {
	header("Location: index.html");
}