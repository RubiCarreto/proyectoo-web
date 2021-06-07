<?php
$inc = include("con_db.php");
if ($inc) {
	$consulta = "SELECT * FROM datos";
	$resultado = mysqli_query($conex,$consulta);
	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
	    $name = $row['nombres'];
	    $Apellidos = $row['Apellidos'];
	    $edad = $row['edad'];
	    $correo = $row['correo'];
        $contraseña = $row['contraseña'];
	    ?>
        <div>
        	<h2><?php echo $name; ?></h2>
        	<div>
        		<p>
        		    <b>Apellidos: </b> <?php echo $Apellidos; ?><br>
        		    <b>edad:</b><?php echo $edad; ?><br>
        		    <b>correo: </b> <?php echo $correo; ?><br>
                    <b>contraseña:</b><?php echo $contraseña; ?><br>
        		</p>
        	</div>
        </div>
	    <?php
	    }
	}
}
?>