<?php
require 'functions/about_the_semester.php';
require 'functions/time_table.php';
require 'functions/get_path_to.php';
require 'data/informations.php';
require 'data/timetable.php';
require 'functions/metadata.php';
//$path = get_semesters_list();
$title = 'upload';

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifie si le fichier a été uploadé sans erreur.
    if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
        $filename = $_FILES["file"]["name"];
        $filetype = $_FILES["file"]["type"];
        $filesize = $_FILES["file"]["size"];
        // Vérifie si le fichier existe avant de le télécharger.
        if(file_exists("upload/")){
            if (file_exists("upload/" . $_FILES["file"]["name"])) {
                echo '<div class="uploadstate halfFail">'.$_FILES["file"]["name"].' existe deja</div>';
            } else {
                move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
                echo '<div class="uploadstate succes">Votre fichier a été téléchargé avec succès.</div>';
            }
        }else{
            echo '<div class="uploadstate succes">le dossier de telechargement n\'existe pas.</div>';
            mkdir("upload/",777);

        }
    }

}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/container.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/upload.css">
    <script src="js/header.js" defer ></script>
    <title><?= $title ?></title>
</head>
<body>
    <?php require 'elements/header.php'; ?>
    <div class="container">
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file">
            <input type="submit" name="submit" value="Upload">
        </form>
    </div>
    <?php require 'elements/footer.php'; ?>
</body>
</html>
