<?php
function zipper($source, $destination)
{
    //shell_exec('sudo apt install php-zip');
    $zip = new ZipArchive();
    $zip->open($destination, ZipArchive::CREATE);
    $source = realpath($source);

    $iterator = new RecursiveDirectoryIterator($source, RecursiveDirectoryIterator::SKIP_DOTS);
    $files = new RecursiveIteratorIterator($iterator, RecursiveIteratorIterator::SELF_FIRST);
    foreach ($files as $file) {
        $file = realpath($file);
        if (is_dir($file)) {
            $zip->addEmptyDir(str_replace($source . DIRECTORY_SEPARATOR, '', $file . DIRECTORY_SEPARATOR));
        } else if (is_file($file)) {
            $zip->addFromString(str_replace($source . DIRECTORY_SEPARATOR, '', $file), file_get_contents($file));
        }
    }

    $zip->close();
}

$sourceDir = '/home/anani/gitlearning';  // Chemin absolu vers le dossier à compresser
$zipFile = '/media/anani/Code base/Classrooms/zips/aaa.zip';  // Fichier ZIP dans le même répertoire que le dossier
zipper($sourceDir, $zipFile);
$path =  pathinfo($sourceDir,PATHINFO_BASENAME);
var_dump($path);


