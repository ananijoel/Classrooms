<?php
require 'functions/about_the_semester.php';
require 'functions/time_table.php';
require 'functions/get_path_to.php';
require 'data/informations.php';
require 'data/timetable.php';
global $time_table;
global $days_name;
$title = ' Emploi du temps';
?>

<!doctype html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/container.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/extensions.css">
    <script src="js/header.js" defer ></script>
    <link rel="stylesheet" href="css/week_timetable.css">
    <title><?= $title?$title: ''?> </title>
</head>
<html lang="fr">
    <?php require 'elements/header.php'; ?>
    <body>
        <div class="container">
           <div class="box">
               <?php week_timetable($time_table, $days_name); ?>
           </div>
        </div>
    </body>
    <?php require 'elements/footer.php'; ?>
</html>
