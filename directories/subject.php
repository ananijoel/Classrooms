<?php
require '../functions/about_the_semester.php';
require '../functions/time_table.php';
require '../functions/get_path_to.php';
require '../data/informations.php';
require '../data/timetable.php';
$path = $_GET['subject'];
$subjects  = get_directory_items($path);
$title = get_folder_title($path)
?>
<!doctype html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/index.css">
    <title><?= $title?$title: ''?> </title>
</head>
<html lang="fr">
    <body>
    <?php require '../elements/header.php'; ?>
        <div class="container">
            <?php foreach ($subjects as $subject): ?>
                <?php $foldername = explode('/',$subject);
                $foldername = $foldername[count($foldername)-1];
                ?>
                <p><a href="files.php?files=<?= $subject ?> "> <?= $foldername ?></a></p>
            <?php endforeach; ?>
        </div>
    <?php require '../elements/footer.php'; ?>
    </body>
</html>