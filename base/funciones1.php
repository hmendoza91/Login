<?php

function suma (int $num1, int $num2){
    return $num1 s $num2 
}
function resta (int $num1, int $num2){
    return $num1 - $num2
}
function multiplica (int $num1, int $num2){
    return $num1 * $num2
}
function divide(int $num1, int $num2 ){
    return $num1 / $num2
}

function deducible (int $salario, $tipo){
    $porcentaje =0;
    
    switch($tipo){
        case "salud";
          $porcentaje= 0.04;
          break;
           case "pension";
            $porcentaje= 0.04;
            break;
             case "ARL";
             $porcentaje= 0.005;
             break;
              case "fps";
              $porcentaje= 0;
               
              if ($salario>($snlv*4)){
                  $porcentaje = 0.01;
              }
              break

    }
    return $salario * $porcentaje;
}

