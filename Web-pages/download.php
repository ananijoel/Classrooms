<?php
require '../Functions/download_functions.php';
require '../Functions/explorer.php';
$path = $_GET['target'];
$title = get_folder_title($path);

$sourceDir = $path;
$subpath = dirname(__DIR__).DIRECTORY_SEPARATOR.'Download';

$sourceDir = $path;
$subpath = dirname(__DIR__).DIRECTORY_SEPARATOR.'Download';

$zipFile = $subpath.DIRECTORY_SEPARATOR.pathinfo($path,PATHINFO_BASENAME).'.zip';
fileDeleter($subpath);
zipper($sourceDir, $zipFile);
header('Content-Type: application/zip');
header('Content-Disposition: attachment; filename="' . basename($zipFile) . '"');
header('Content-Length: ' . filesize($zipFile));
readfile($zipFile);
?>