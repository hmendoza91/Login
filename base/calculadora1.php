<?php
require_once("funciones.php");
$num1 =$_GET["n1"];
var_dump($num1);

function calculadora($n1, $n2,$opc){
    $res ="";
    switch($opc){
        case "s";
        $res = suma($n1,$n2);
        break;
        case "-";
        $res = resta($n1,$n2);
        break;
        case "*";
        $res = multiplica($n1,$n2);
        break;
        case "/";
        $res =divide($n1,$n2);
        break;
        default:
        $res = "No eligio una operacion valida";
        break;
    }
    return "$n1 $opc $n2 = $res";
}
echo calculadora($num1,$num2,$opc);
