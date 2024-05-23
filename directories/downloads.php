<?php
require '../functions/get_path_to.php';
$path = $_GET['target'];
$title = get_folder_title($path);
$sourceDir = $path;
$subpath = dirname(__DIR__).DIRECTORY_SEPARATOR.'zips';
$zipFile = $subpath.DIRECTORY_SEPARATOR.pathinfo($path,PATHINFO_BASENAME).'.zip';
zipper($sourceDir, $zipFile);
header('Content-Type: application/zip');
header('Content-Disposition: attachment; filename="' . basename($zipFile) . '"');
header('Content-Length: ' . filesize($zipFile));
readfile($zipFile);
?>