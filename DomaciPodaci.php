
<?php




    $cena = $_GET["cena"];
    $vrstaRobe = $_GET["vrstaRobe"];
    $cenaHrane = $_GET["cena"] + 50 ;
    $cenaRacunarskeOpreme = $_GET["cena"] + 350 ;
    $porez = 0.1;


    if ( isset( $_GET["porez"] )) {
        if ( $vrstaRobe == "Hrana") {
            echo $cenaHrane + $cenaHrane * $porez ;
        } else {
            echo $cenaRacunarskeOpreme + $cenaRacunarskeOpreme * $porez ;
        }
    } else {
        if ( $vrstaRobe == "Hrana") {
            echo $cenaHrane ;
        } else {
            echo $cenaRacunarskeOpreme ;
        }
    }




?>