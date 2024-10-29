
<?php




    $cena = $_GET["cena"] ?? 0;
    $vrstaRobe = $_GET["vrstaRobe"] ?? 0;
    $cenaHrane = $cena + 50 ;
    $cenaRacunarskeOpreme = $cena + 350;
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