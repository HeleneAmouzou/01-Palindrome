<?php
$compt=0;
$nbprecedentun=0;
$nbprecedentdeux=0;
$nbactuel=1;

while ($nbactuel<100){
    $nbactuel=$nbprecedentun+$nbprecedentdeux;
    if ($nbactuel%2==0){
        $compt=$compt+$nbactuel;
        echo $compt;
    }
    $nbprecedentdeux=$nbprecedentun;
    $nbprecedentun=$nbactuel;

}

echo '<p>Somme des éléments pairs = ' . $compt . '</p>';


?>