<?php
$subjects = [0 => "infographie", 1 => "Environnement des telecommunications", 2 => "Fondamentaux de base de donnees", 3 => "Outils et techniues de conception", 4 => "CCNA", 5 => "Notion de base sur la commutation et le routage", 6 => "Pause", 7 => "Statistiques", 8 => "heure d'étude"];

$lundi = [
    [$subjects[8], "700", "1000", "Pas de professeur"],
    ["Pause", "1000", "1030", "Pas de professeur"],
    [$subjects[0], "1030", "1230", ""],
    ["Pause", "1300", "1400", "Pas de professeur"],
    [$subjects[1], "1400", "1600", "Pas de professeur"],
    [$subjects[1], "1600", "1800", "Pas de professeur"]
];

$mardi = [
    [$subjects[8], "730", "1030", "Dr PINDRA"],
    ["Pause", "1030", "1100", "Pas de professeur"],
    [$subjects[2], "1100", "1300", "Mr. ATADEGNON"],
    ["Pause", "1300", "1400", "Pas de professeur"],
    [$subjects[3], "1400", "1600", "Dr NATA"],
    [$subjects[3], "1600", "1800", "Dr NATA"]
];

$mercredi = [
    [$subjects[4], "730", "1030", "Mr. AMUZUN"],
    ["Pause", "1030", "1100", "Pas de professeur"],
    [$subjects[8], "1100", "1300", "Dr. MALDJA"],
    ["Pause", "1300", "1400", "Pas de professeur"],
    [$subjects[5], "1400", "1600", "Dr. NATA"],
    [$subjects[3], "1600", "1800", "Pas de professeur"]
];

$jeudi = [
    [$subjects[4], "730", "1030", "Mr. Amevor"],
    ["Pause", "1030", "1100", "Pas de professeur"],
    [$subjects[2], "1100", "1300", "Mr. AMUZUN"],
    ["Pause", "1300", "1400", "Pas de professeur"],
    [$subjects[2], "1400", "1600", "Mr. ATADEGNON"],
    [$subjects[8], "1600", "1800", "Pas de professeur"]
];

$vendredi = [
    [$subjects[7], "730", "1030", "Dr. PINDRA"],
    ["Pause", "1030", "1100", "Pas de professeur"],
    [$subjects[7], "1100", "1300", "Mr. ATADEGNON"],
    ["Pause", "1300", "1400", "Pas de professeur"],
    [$subjects[8], "1400", "1600", "Dr. PINDRA"],
    [$subjects[8], "1600", "1800", "Dr. PINDRA"]
];

$time_table = ['Mon' => $lundi, 'Tue' => $mardi, 'Wed' => $mercredi, 'Thu' => $jeudi, 'Fri' => $vendredi];
$days_name = ['Mon' => "Lundi", 'Tue' => "Mardi", 'Wed' => "Mercredi", 'Thu' => "Jeudi", 'Fri' => "Vendredi", 'Sat' => "Samedi", 'Sun' => "Dimanche"];