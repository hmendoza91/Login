<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PHP</title>
    <link rel="stylesheet" href="decoracion.css">

</head>
<body>
    <form action="validar.php" method="POST">
        <h1>LOGIN</h1>
        <p>Usuario <input type="text" placeholder="ingrese su correo/usuario"name="usuario"></p>
        <p>Contraseña <input type="password" placeholder="ingrese su contraseña"name="Contraseña"></p>
        <input type="submit" value="ingresar">
    </form>
</body>
</html>