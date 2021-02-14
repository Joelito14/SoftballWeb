<?php 
include("conecxion.php");
$LIGA = "SELECT * FROM liga ORDER BY idLiga";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIGAS</title>
         <!-- FONT AWESOME -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
        <!-- FONT OSWALD-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
        <!-- CSS-->
        <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="standings">
      <div class="standing-encabezado"><H1>LIGAS</H1></div>
      <div class="standing-titulos"><H2>NOMBRE</H2></div>
      <div class="standing-titulos"><H2>PRESIDENTE</H2></div>
      <div class="standing-titulos"><H2>VICEPRESIDENTE</H2></div>
      <div class="standing-titulos"><H2>TELEFONO</H2></div>   
      <?php 
        $resultado = mysqli_query($conexion, $LIGA);
        while ($row = mysqli_fetch_assoc($resultado)) { ?>
            <div class="standing-item"><h3><?php echo $row["nombre"]; ?></h3></div>
            <div class="standing-item"><h3><?php echo $row["presidente"]; ?></h3></div>       
            <div class="standing-item"><h3><?php echo $row["vicepresidente"]; ?></h3></div>   
            <div class="standing-item"><h3><?php echo $row["telefono"]; ?></h3></div>   
      <?php } mysqli_free_result($resultado);?>
</body>
</html>