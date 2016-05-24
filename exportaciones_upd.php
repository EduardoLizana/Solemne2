<?php include('valida_acceso.php')?>
<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/styles.css">
   <script src="js/jquery-latest.min.js" type="text/javascript"></script>
   <title>Seleccionar</title>
</head>
<body>
<?php 
include('menu.php');
?>
    <form method="post" action="accform/accActualizar.php">
    <br>
    <br>
    Nombre:<input type="text" name="snombre" id="snombre"><br><br>
    Total USD:<input type="Integer" name="ntotalusd" id="ntotalusd"><br><br>
    Año:<input type="Integer" name="nano" id="nano"><br><br>
    
    <input type="submit" value="Actualizar">
</form>


</body>
</html>

