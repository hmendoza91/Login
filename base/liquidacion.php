<?php

require_once ("funciones1.php");
$salario = $_GET["salario"] ?? "";
$cedula = $_GET["cedula"] ?? "";
$salud = $pension = $ARL = $fps = 0;
$errorsalario = "";

if ($salario && $cedula){
    $salud = deducible($salario,"salud");
    $pension = deducible($salario,"pension");
    $ARL = deducible($salario,"ARL");
    $fps = deducible($salario,"fps");
} 
if(!isset($_GET["salario"]) && $_GET ["salario"]){
    echo "entra";
    $errorsalario = "debe ingresar un salario";
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liquidacion</title>
</head>
<body>
    <form action="">
    <label>salario</label>
    <input type="number" name="salario">
    <br>
    <label>cedula</label>
    <input type="number" name="cedula">
    <br>
    <input type="submit"value="enviar">
    </form>

    <table border="1">
    <tr>
     <th>cedula</th>
     <th>salario</th>
     <th>salud (4%)</th>
     <th>pension (4%)</th>
     <th>ARL (0.5%)</th>
     <th>fondo pension solidario (1% > 4SMLV)</th>
    </tr>
    <tr>
     <td><?php echo $cedula; ?></td>
     <td><?php echo $salario; ?></td>
     <td><?php echo $salud; ?></td>
     <td><?php echo $ARL; ?></td>
     <td><?php echo $pension; ?></td>
     <td><?php echo $fondo; ?></td>
    </tr>
    </table>
</body>
</html>