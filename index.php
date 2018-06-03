<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



<form action="" method="post">
	<input type="checkbox" name="seleccion[]" value="hoy">
	<input type="checkbox" name="seleccion[]" value="mañana">
	<input type="checkbox" name="seleccion[]" value="ayer">
	<input type="submit" name="btnbus" value="Guardar">

</form>




<?php 
foreach ($_POST['seleccion'] as $key) {
	echo $key;
}
exit();
 ?>
</body>
</html>