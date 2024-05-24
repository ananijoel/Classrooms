<?php
require 'functions/about_the_semester.php';
require 'functions/time_table.php';
require 'functions/get_path_to.php';
require 'data/informations.php';
require 'data/timetable.php';
    $counter_after_school_started =  counter_after_school_started(1708902000);
    $counter_before_holidays = counter_before_holidays(1716587999);
    $title = 'Informations sur la classe et le semestre'
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
    <link rel="stylesheet" href="css/about_the_class.css">
    <title><?= $title?$title: ''?> </title>
</head>
<html lang="fr">
    <?php require 'elements/header.php'; ?>
    <body>
        <div class="container">
            <div class="box">
                <p class="days SchoolStarted">
                    Jours ecoulés depuis la rentree de ce semestre : <?= $counter_after_school_started[0]?>
                </p>
                <p class="weeks SchoolStarted">
                    Semaines ecoulées depuis la rentree de ce semestre : <?= $counter_after_school_started[1]?>
                </p>
                <p class="days SchoolEnd">
                    Jours restants avant la fin du semestre : <?= $counter_before_holidays[0] ?>
                </p>
                <p class="weeks SchoolEnd">
                    Semaines restantes avant la fin du semestre : <?= $counter_before_holidays[1] ?>
                </p>
            </div>
        </div>
        <?php require 'elements/footer.php'; ?>
    </body>
</html>
