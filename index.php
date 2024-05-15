<?php
require 'functions/about_the_semester.php';
require 'functions/time_table.php';
require 'functions/get_path_to.php';
require 'data/informations.php';
require 'data/timetable.php';
require 'functions/metadata.php';
$path = get_semesters_list();
$title = 'acceuil';
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
    <title><?= $title?$title: ''?> </title>
</head>
<html lang="fr">
<body>
<?php require 'elements/header.php'; ?>
<div class="container">
    <div class="box">
        <?php show_folder_content($path,'directories/fileExplorer.php'); ?>
    </div>
</div>
<?php require 'elements/footer.php'; ?>
</body>
</html>
