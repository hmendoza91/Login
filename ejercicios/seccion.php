<?php
 session_start();
 $correo_electrónico = $_REQUEST [ 'correo_electrónico' ];
 $contraseña = $_REQUEST [ 'contraseña'];

 if ( $correo_electrónico === 'a@a.co' && $contraseña === '1234'){
     // SESIÓN CREAMOS
     $_SESSION [ 'correo electrónico' ] = $correo_electrónico ;
     $_SESSION [ 'id' ] = random_int( 1 , 1000 );
      var_dump ( $_SESSION );
 

    }
  
 else{  
     $msg = "Las credenciales ingresadas no coinciden";
     $aPathOrigin = explotare ( '?' , $_SERVER [ 'HTTP_REFERER' ]);
     $pathOrigin = $aPathOrigin [ 0 ];

     header ( "Ubicación: $pathOrigin ?msg = $msg" );
    }
 
?>

<!DOCTYPE html>
<html  lang = " en " >
<cabeza >
  <meta  charset = " UTF-8 " >
  <meta  http-equiv = " X-UA-Compatible " content = " IE = edge " >
  <meta  name = " viewport " content = " width = device-width, initial-scale = 1.0 " >
  <título > Inicio </título >
</cabeza >
<cuerpo >
  <h1 > Sesión iniciada</h1>
</cuerpo >
</html 