<?php
require 'functions/about_the_semester.php';
require 'functions/time_table.php';
require 'functions/get_path_to.php';
require 'data/informations.php';
require 'data/timetable.php';
$path = get_semesters_list();
global $time_table ;
$today = $time_table[date('D')];
$title = 'acceuil';

global $timeTable ;
$today = $timeTable[date('D')];
$currentSemesterAbsolutePath = $path[1];
$currentSemesterRelativePath = explode("/",$currentSemesterAbsolutePath);
$currentSemesterRelativePath = $currentSemesterRelativePath[count($currentSemesterRelativePath)-1];
$pastSemesterAbsolutePath = $path[0];
$pastSemesterRelativePath = explode("/",$pastSemesterAbsolutePath);
$pastSemesterRelativePath = $pastSemesterRelativePath[count($pastSemesterRelativePath)-1];
?>
<!doctype html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/index.css">
    <title><?= $title?$title: ''?> </title>
</head>
<html lang="fr">
<body>
<?php require 'elements/header.php'; ?>

<div class="semesters">
    <a class="semester"  href="directories/semester.php?semester=<?=$pastSemesterAbsolutePath?>">
    <?= $pastSemesterRelativePath ?>
    </a>
    <a class="semester"  href="directories/semester.php?semester=<?=$currentSemesterAbsolutePath?>">
        <?= $currentSemesterRelativePath ?>
    </a>
</div>
<?php require 'elements/footer.php'; ?>
</body>
</html>
