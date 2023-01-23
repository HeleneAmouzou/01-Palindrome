<?php

//Multiplication des entiers naturels strictement inférieurs à 999
for($nb1=1; $nb1<999; $nb1++) {
    for ($nb2=1; $nb2<999; $nb2++){
        $resultat=$nb1*$nb2;
    }
    //Convertir le résultat en chaine de caractères
    $resultatstring = strval($resultat);
    //var_dump($resultatstring);

    //Inversion de la chaine de caractères
    $resultatinverse = strrev($resultatstring);
    //var_dump($resultatinverse);

    //Vérification et affichage si palindrome
    if($resultatstring == $resultatinverse) {
        echo $resultatstring . ' est le plus grand palindrome obtenu'; //Affiche : 66866 est le plus grand palindrome obtenu
    }
}

?>
