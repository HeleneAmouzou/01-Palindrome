<?php
$compt = 0;
$nbprecedentun = 1;
$nbprecedentdeux = 0;
$nbactuel = 1;

while ($nbactuel < 4000000) { //on considère que l’élément le plus grand est strictement inférieur à 4 millions.
    $nbactuel = $nbprecedentun + $nbprecedentdeux; //Chaque élément est constitué de la somme des deux éléments précédents

    if ($nbactuel % 2 === 0) { //Détermine si élement pair, les conserve et additionne
        $compt = $compt + $nbactuel;
        //echo $compt;
    }
    $nbprecedentdeux = $nbprecedentun;
    $nbprecedentun = $nbactuel;
}

echo '<p>Somme des éléments pairs = ' . $compt . '</p>'; //Affiche : Somme des éléments pairs = 4613732

