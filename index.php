<?php

    $months = [
        "janvier",
        "fevrier",
        "mars",
        "avril",
        "mai",
        "juin",
        "juillet",
        "aout",
        "septembre",
        "octobre",
        "novemnre",
        "decembre"
    ];

    echo $months[2]."<br>";
    echo $months[5]."<br>";
    $months[7] = "août";
    echo $months[7]."<br>";

    $hautDeFrance = [
        "02" => "Aisne",
        "59" => "Nord",
        "60" => "Oise",
        "62" => "Pas-de-Calais",
        "80" => "Somme ",
    ];

    echo $hautDeFrance["59"]."<br>";

    foreach ($months as $i) echo $i."<br>";

    foreach ($hautDeFrance as $i) echo $i."<br>";

    foreach ($hautDeFrance as $key => $value) echo "Le département ".$value." a le numéro ".$key."<br>";
?>