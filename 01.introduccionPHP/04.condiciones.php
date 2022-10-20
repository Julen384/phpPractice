<?php

//  TODO: CONDICIONES

$a = 5;
$b = 10;

if ($a > $b){

    echo "a es mayor que b";
}
else if($a == $b){
    echo "a es igual que b";
}

else{
    echo "a es menor que b";
}

echo "<br><br>";



//  TODO: SWITCHES

$dia = "Sábado";

switch($dia){

    case 'sabado':
        echo "Voy a estudiar PHP";
    break;

    case 'viernes':
        echo "¡Me voy de fiesta!";
    break;

    case 'domingo':
        echo "Voy a descansar zzZZZ";
    break;

    default: echo "voy a la universidad";

}

echo "<br><br>";



//  TODO: CICLO WHILE

$n = 1;

while($n < 5){
    echo $n;
    $n++;
}

echo "<br><br>";



//  TODO: CICLO DO WHILE

$p = 1;

do{
    echo $p;
    $p++;
}while($p <= 5);

echo "<br><br>";



//  TODO: CICLO FOR

for($i = 1; $i <= 5; $i++){
    echo $i;
}


?>