<?php
require_once 'get_path_to.php';
function file_size($path)
{
    $unit = "";
    $bit = filesize($path);
    if ($bit>1024*1024*1024) {
        $bit  = $bit/(1024*1024*1024);
        $unit = "Gb";

    }elseif ($bit>1024*1024) {
        $bit  = $bit/(1024*1024);
        $unit = "Mb";
    }elseif ($bit>1024) {
        $bit  = $bit/1024;
        $unit = "Kb";
    }
    else{
        $unit = "B";
    }
    return round($bit, 2)."".$unit;


}
function creation_date($path)
{
    return date ("M d, Y.", filemtime($path));
}
function filename_limiter($filemane)
{
    $name = pathinfo($filemane, PATHINFO_FILENAME);
    $ext = pathinfo($filemane, PATHINFO_EXTENSION);
    $nameLenght = strlen($name);
    echo "\n";
    if ($nameLenght > 21) {
        $name = substr($name, 0, 22) . '(...)';
    }
    $ext = empty($ext)? "" : '.'.$ext ;
    return $name.$ext;
}
function folder_items($path)
{
    $taille = get_directory_items($path);
    return $taille = count($taille);

}