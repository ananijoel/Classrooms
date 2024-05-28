<?php
$title = 'upload';
require '../Functions/upload_functions.php';
require '../Functions/explorer.php';
$message = uploader();
?>
<!doctype html>
<html lang="en">
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
    <title><?= $title ?></title>
</head>
<body>
    <?php require '../HTML-elemets/header.php'; ?>
    <div class="container">
        <?=  $message ?>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file">
            <input type="submit" name="submit" value="Upload">
        </form>
    </div>
    <?php require '../HTML-elemets/footer.php'; ?>
</body>
</html>
