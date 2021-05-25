<?php
$inc = include("con_db.php");
if ($inc) {
	$consulta = "SELECT * FROM datos";
	$resultado = mysqli_query($conex,$consulta);
	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
	    $id = $row['id'];
	    $name = $row['nombre'];
	    $Apellido_paterno = $row['Apellido_paterno'];
	    $Apellido_materno = $row['Apellido_materno'];
	    ?>
        <div>
        	<h2><?php echo $name; ?></h2>
        	<div>
        		<p>
        			<b>ID: </b> <?php echo $id ?><br>
        		    <b>Apellido paterno: </b> <?php echo $Apellido_paterno; ?><br>
        		    <b>Apellido materno: </b> <?php echo $Apellido_materno; ?><br>
        		</p>
        	</div>
        </div>
	    <?php
	    }
	}
}
?>
