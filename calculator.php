<?php




    // $_SERVER , $_GET , $_POST  ->  assoc array   - global variables



    $rezultatSabiranja = $_GET["Broj1"] + $_GET["Broj2"];
    $rezultatOduzimanja = $_GET["Broj1"] - $_GET["Broj2"];

    $vrstaRacunanja = $_GET["vrsta_racunanja"];


    if( $vrstaRacunanja == "sabiranje" ){
        echo $rezultatSabiranja;
    } else {
        echo $rezultatOduzimanja;
    }


?>