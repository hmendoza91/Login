<?php
session_start();
var_dump($_SESSION);

$msg = $_REQUEST [ 'msg'] ?? '';
?>

<!doctype html >
<html  lang = " en " >
  <cabeza >
    <meta  charset = " utf-8 " >
    <meta  name = " viewport " content = " width = device-width, initial-scale = 1, shrink-to-fit = no " >
    <meta  name = " description " content = "" >
    <meta  name = " autor " content = "" >

    <título > Plantilla de inicio de sesión para Bootstrap </ título >

    <link  rel = " canonical " href = " https://getbootstrap.com/docs/4.0/examples/sign-in/ " >

   

    <link  href = " https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css " rel = " stylesheet " >

    <estilo >
    
        </estilo >
  </cabeza >

  <body  class = " text-center ">
    <form  class = " form-signin " action = "seccion.php" method = " POST " >
      <img  class = " mb-4 " src = " https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg " alt = "" width = " 72 " height = " 72 ">
      <h1  class = " h3 mb-3 font-weight-normal " > Ingresar </h1>

      <label  for = " inputEmail " class = " sr-only " > Correo electrónico </label>
      <input  type = " email " id = " inputEmail " name = " email " class = " form-control " placeholder = " Ingrese su correo " requiere  enfoque automático>

      <label  for = " inputPassword " class = " sr-only " > Contraseña </label>
      <input  type = " password " id = " inputPassword " name = " password " class = " form-control " placeholder = " Ingrese su contraseña " obligatorio>

      <button  class = " btn btn-lg btn-primary btn-block " type = " enviar ">Entrar</butto>

      <p  class = " mt-5 mb-3 text-muted "><?php  echo  $msg ; ?> </p >
    </formulario >
  </cuerpo >
</html >