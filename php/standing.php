<?php 
  include("conecxion.php");
  $usuarios = "SELECT * FROM standing";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STANDINGS</title>
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
      <div class="standing-encabezado"><H1>STANDINGS</H1></div>
      <div class="standing-titulos"><H2>EQUIPO</H2></div>
      <div class="standing-titulos"><H2>JJ</H2></div>
      <div class="standing-titulos"><H2>JG</H2></div>
      <div class="standing-titulos"><H2>JP</H2></div>
      <div class="standing-titulos"><H2>CA</H2></div>
      <div class="standing-titulos"><H2>CC</H2></div>
      <div class="standing-titulos"><H2>DIF</H2></div>
      <?php 
        $resultado = mysqli_query($conecxion, $usuarios);
        while ($row=mysqli_fetch_assoc($resultado))
         {  ?> 
            <div class="standing-item"><h3><?php echo $row["equipo"]; ?></h3></div>
            <div class="standing-item"><h3></h3></div>
            <div class="standing-item"><h3></h3></div>
            <div class="standing-item"><h3></h3></div>
            <div class="standing-item"><h3></h3></div>
            <div class="standing-item"><h3></h3></div>
            <div class="standing-item"><h3></h3></div>
        <?php }  mysqli_free_result($resultado); ?>
      
    </div>
</body>
</html>