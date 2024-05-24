<?php
$subjects = [0 => "POO", 1 => "Equation differentielle", 2 => "Programation web", 3 => "Algebre", 4 => "CCNA", 5 => "anglais", 6 => "Pause", 7 => "Calcul integrale", 8 => "heure d'étude"];

$lundi = [
    [$subjects[0], "730", "1030", "Mr. AMEVOR"],
    ["Pause", "1030", "1100", "Pas de professeur"],
    [$subjects[0], "1100", "1300", "MR. AMEVOR"],
    ["Pause", "1300", "1400", "Pas de professeur"],
    [$subjects[8], "1400", "1600", "Pas de professeur"],
    [$subjects[8], "1600", "1800", "Pas de professeur"]
];

$mardi = [
    [$subjects[1], "730", "1030", "Dr PINDRA"],
    ["Pause", "1030", "1100", "Pas de professeur"],
    [$subjects[2], "1100", "1300", "Mr. ATADEGNON"],
    ["Pause", "1300", "1400", "Pas de professeur"],
    [$subjects[3], "1400", "1600", "Dr NATA"],
    [$subjects[3], "1600", "1800", "Dr NATA"]
];

$mercredi = [
    [$subjects[4], "730", "1030", "Mr. AMUZUN"],
    ["Pause", "1030", "1100", "Pas de professeur"],
    [$subjects[5], "1100", "1300", "Dr. MALDJA"],
    ["Pause", "1300", "1400", "Pas de professeur"],
    [$subjects[3], "1400", "1600", "Dr. NATA"],
    [$subjects[8], "1600", "1800", "Pas de professeur"]
];

$jeudi = [
    [$subjects[0], "730", "1030", "Mr. Amevor"],
    ["Pause", "1030", "1100", "Pas de professeur"],
    [$subjects[4], "1100", "1300", "Mr. AMUZUN"],
    ["Pause", "1300", "1400", "Pas de professeur"],
    [$subjects[2], "1400", "1600", "Mr. ATADEGNON"],
    [$subjects[8], "1600", "1800", "Pas de professeur"]
];

$vendredi = [
    [$subjects[7], "730", "1030", "Dr. PINDRA"],
    ["Pause", "1030", "1100", "Pas de professeur"],
    [$subjects[2], "1100", "1300", "Mr. ATADEGNON"],
    ["Pause", "1300", "1400", "Pas de professeur"],
    [$subjects[7], "1400", "1600", "Dr. PINDRA"],
    [$subjects[7], "1600", "1800", "Dr. PINDRA"]
];

$time_table = ['Mon' => $lundi, 'Tue' => $mardi, 'Wed' => $mercredi, 'Thu' => $jeudi, 'Fri' => $vendredi];
$days_name = ['Mon' => "Lundi", 'Tue' => "Mardi", 'Wed' => "Mercredi", 'Thu' => "Jeudi", 'Fri' => "Vendredi", 'Sat' => "Samedi", 'Sun' => "Dimanche"];