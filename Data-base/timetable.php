<?php
$subjects = [0 => "infographie", 1 => "Environnement des telecommunications", 2 => "Fondamentaux de base de donnees", 3 => "Outils et techniues de conception", 4 => "CCNA", 5 => "Notion de base sur la commutation et le routage", 6 => "Pause", 7 => "Statistiques", 8 => "heure d'étude"];

$lundi = [
    [$subjects[8], "700", "1000", "Pas de professeur"],
    ["Pause", "1000", "1030", "Pas de professeur"],
    [$subjects[0], "1030", "1230", ""],
    ["Pause", "1230", "1330", "Pas de professeur"],
    [$subjects[1], "1330", "1530", "Dr BOYODI"],
    ["Pause", "1530", "1600", "Pas de professeur"],
    [$subjects[1], "1600", "1800", "Dr BOYODI"]
];

$mardi = [
    [$subjects[8], "700", "1000", "Pas de professeur"],
    ["Pause", "1000", "1030", "Pas de professeur"],
    [$subjects[2], "1030", "1230", "Mr. ATADEGNON"],
    ["Pause", "1230", "1330", "Pas de professeur"],
    [$subjects[3], "1330", "1530", "Mr SEWAVI"],
    ["Pause", "1530", "1600", "Pas de professeur"],
    [$subjects[3], "1600", "1800", "Mr SEWAVI"]
];

$mercredi = [
    [$subjects[4], "700", "1000", "Mr AMUZUN"],
    ["Pause", "1000", "1030", "Pas de professeur"],
    [$subjects[8], "1030", "1200", "Pas de professeur"],
    [$subjects[5], "1200", "1500", "Mr ADJONYO"],
    ["Pause", "1530", "1600", "Pas de professeur"],
    [$subjects[3], "1600", "1800", "Mr SEWAVI"],
];

$jeudi = [
    [$subjects[4], "700", "1000", "Mr AMUZUN"],
    ["Pause", "1030", "1100", "Pas de professeur"],
    [$subjects[2], "1030", "1230", "Mr ATADEGNON"],
    ["Pause", "1230", "1330", "Pas de professeur"],
    [$subjects[2], "1330", "1530", "Mr. ATADEGNON"],
    ["Pause", "1530", "1600", "Pas de professeur"],
    [$subjects[8], "1600", "1800", "Pas de professeur"]
];

$vendredi = [
    [$subjects[7], "700", "1000", "Dr. PINDRA"],
    ["Pause", "1000", "1030", "Pas de professeur"],
    [$subjects[7], "1030", "1200", "Dr. PINDRA"],
    ["Pause", "1230", "1330", "Pas de professeur"],
    [$subjects[8], "1400", "1600", "Pas de professeur"],
    [$subjects[8], "1600", "1800", "Pas de professeur"]
];

$time_table = ['Mon' => $lundi, 'Tue' => $mardi, 'Wed' => $mercredi, 'Thu' => $jeudi, 'Fri' => $vendredi];
$days_name = ['Mon' => "Lundi", 'Tue' => "Mardi", 'Wed' => "Mercredi", 'Thu' => "Jeudi", 'Fri' => "Vendredi", 'Sat' => "Samedi", 'Sun' => "Dimanche"];