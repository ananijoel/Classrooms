<?php
require '../Functions/explorer.php';
require '../Functions/metadata.php';
require '../Functions/agenda.php';
require '../Data-base/timetable.php';
global $time_table;
global $days_name;
$counter_after_school_started =  counter_after_school_started(1708902000);
$counter_before_holidays = counter_before_holidays(1716587999);
$title = ' Emploi du temps';
?>

<!doctype html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../Css/header.css">
    <link rel="stylesheet" href="../Css/footer.css">
    <link rel="stylesheet" href="../Css/container.css">
    <link rel="stylesheet" href="../Css/extensions.css">
    <link rel="stylesheet" href="../Css/agenda.css">
    <script src="../Js/header.js" defer ></script>
    <title><?= $title?$title: ''?> </title>
</head>
<html lang="fr">
<?php require '../HTML-elemets/header.php'; ?>
    <body>
        <div class="container">
           <div class="box">
               <?php week_timetable($time_table, $days_name); ?>
           </div>
        </div>
    </body>
    <?php require '../HTML-elemets/footer.php'; ?>
</html>
