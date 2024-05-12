<?php
/**
 * @return array|false array of all the semesters
 */
function get_semesters_list()
{
    return glob(dirname(__DIR__) . DIRECTORY_SEPARATOR . "Semesters" . DIRECTORY_SEPARATOR . "*");
}

/**
 * @param $path  string path of the directory you want to get the items from
 * @return array|false array of all the given directory items
 */
function get_directory_items($path)
{

    return glob($path . DIRECTORY_SEPARATOR . "*");
}

/**
 * @param $path string path to the current project where you are
 * @return mixed|string the name of the project
 */
function get_project_name($path)
{
    $a = explode('/Semesters', $path);
    $b = explode('/', $a[0]);
    return $b[count($b) - 1];
}

/**
 * @param $path string the absolute path to the directory or file
 * @return mixed|string the relative pat(from the project )to the directory or file
 */
function get_relative_path($path){
    $project_name = get_project_name($path);
    return explode("$project_name", $path)[1];
}

/**
 * @param $path string of the folder you want to get the name
 * @return mixed|string the name of the folder
 */
function get_folder_title($path)
{
    $a = explode('/',$path);
    if(is_dir($path)){
        $i = 1;
    }
    if(is_file($path)){
        $i = 2;
    }
    return $a[count($a) - $i];
}

/**
 * @param $paths Array all the items you want to display
 * @param $target string the page you want to be redirected if the user clicked on an item
 * @return void display with html all the items
 */
function show_folder_content($paths,$target)
{
    foreach ($paths as $item) {
        if (is_dir($item)) {
            $itemName = explode('/',$item);
            $itemName = $itemName[count($itemName) - 1];
            echo '<a class="items" href="'.$target.'?target='.$item.'"> <p class="name">'.$itemName.' </p> <p class="filetype dir"> dossier </p> </a>';

        }
        if (is_file($item)){
            $relative_path = get_relative_path($item) ;
            $file_info = pathinfo($relative_path);
            $extension = $file_info['extension'];
            echo '<a  class="items" href="'. $relative_path.'" download="'.$file_info['basename'].'"> <p class="name">'.$file_info['filename'].' </p> <p class="filetype '.$extension.' " > '.$extension.' </p>  </a>';

        }
    }
}
