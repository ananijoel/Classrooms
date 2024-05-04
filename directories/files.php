<?php
require '../functions/about_the_semester.php';
require '../functions/time_table.php';
require '../functions/get_path_to.php';
require '../data/informations.php';
require '../data/timetable.php';
$path = $_GET['files'];
$files = get_directory_items($path);
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
    <link rel="stylesheet" href="../css/extensions.css">
    <title><?= $title?$title: ''?> </title>
</head>
<html lang="fr">
    <body>
        <?php require '../elements/header.php'; ?>
        <div class="container">
            <?php
            foreach ($files as $file) {
                $relative_path = get_relative_path($file) ;
                $file_info = pathinfo($relative_path);
                $extension = $file_info['extension'];
                ?>
                <p><a  class="<?= isset($extension)? $extension : 'dir' ?>" href="<?= $relative_path ?>" download="<?= $file_info['basename'] ?>"><?= $file_info['basename'] ?>  </a></p>
                <?php
            }
            ?>
        </div>
        <?php require '../elements/footer.php'; ?>
    </body>
</html>
