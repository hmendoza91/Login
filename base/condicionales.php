<?php
$x = 10;
$y ="10";
if ($x==$y){
    echo "son iguales";
}

if ($x===$y){
    echo "son identicos";
} else {
    echo "NO son identicos";
    }
     echo "<br>"; 

if ($x !== $y){
    echo "Si son diferentes de identicos";
}

echo PHP_EOL;

if($x > $y){
    echo "$x es mayor que $y";
}else if ($x < $y){
    echo "$x es menor que $y";
}else if ($x == $y){
    echo "$x es igual que $y";
}else {
    echo "ninguna de las anteriores";
}

echo PHP_EOL;

if( ($x == $y) && ($x === 0) ) {
    echo "$x es igual a $y y $x es mayor que 0";
}
echo PHP_EOL;

if( ($x == $y) || ($x > 0) ) {
    echo "$x es igual a $y o $x es identico que 0";
}


