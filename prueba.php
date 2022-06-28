<?php
  session_start();
  require_once ("conexion.php");

 
		$sql ="SELECT * FROM estudiantes";
		$result= $mysqli->query($sql);
		$row= $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USUARIO</title>
</head>
<body>
<script>
       <?php echo 'Administrador:  '.utf8_decode ($row['nombres']); ?>

    </script>
     <a id="Inicio" target="blank" href="inicio.html">Inicio</a>
</body>
</html>