<?php
require '../Functions/upload_functions.php';
require '../Functions/explorer.php';
require '../Functions/metadata.php';
require '../Functions/download_functions.php';
require '../Functions/agenda.php';
$path = dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'Upload';
$title = 'Historique des uploads';
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
    <link rel="stylesheet" href="../Css/upload.css">
    <script src="../Js/header.js" defer ></script>
    <title><?= $title?$title: ''?> </title>
</head>
<html lang="fr">
<body>
<?php require '../HTML-elemets/header.php'; ?>
<div class="container">
    <div class="box">
    <?php show_folder_content($path,''); ?>
    </div>
</div>
<?php require '../HTML-elemets/footer.php'; ?>
</body>
</html>