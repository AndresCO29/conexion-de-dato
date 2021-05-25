<?php
include("con_db.php");
if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['ap1']) >= 1 && strlen($_POST['ap2']) >= 1) {
	    $name = trim($_POST['name']);
	    $ap1 = trim($_POST['ap1']);
		 $ap2 = trim($_POST['ap2']);
	    $consulta = "INSERT INTO datos(nombre, Apellido_paterno, Apellido_materno) VALUES ('$name','$ap1','$ap2')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?>
	    	<h3 class="ok">¡Se han guardado los datos correctamente!</h3>
           <?php
	    } else {
	    	?>
	    	<h3 class="bad">¡Lo siento, ha ocurrido un problema!</h3>
           <?php
	    }
    }   else {
	    	?>
	    	<h3 class="bad">¡Completa los campos para continuar!</h3>
           <?php
    }
}

?>
