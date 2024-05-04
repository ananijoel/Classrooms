<?php
function get_semesters_list()
{
    return glob(dirname(__DIR__) . DIRECTORY_SEPARATOR . "Semesters" . DIRECTORY_SEPARATOR . "*");
}

/**
 * @param $path
 * @return array|false all the directory content
 */
function get_directory_items($path)
{

    return glob($path . DIRECTORY_SEPARATOR . "*");
}


function get_project_name($absolute_path)
{
    $a = explode('/Semesters', $absolute_path);
    $b = explode('/', $a[0]);
    return $b[count($b) - 1];
}

function show_folder_content($path,$target)
{
    foreach ($path as $item) {
        $itemName = explode('/',$item);
        $itemName = $itemName[count($itemName) - 1];
        echo '<a class="items" href="'.$target.'?target='.$item.'">'.$itemName.'</a>';
    }
}

/**
 * @param $absolute_path
 * @return mixed|string
 */
function get_relative_path($absolute_path){
    $project_name = get_project_name($absolute_path);
    return explode("$project_name", $absolute_path)[1];
}
function get_folder_title($absolute_path)
{

    $a = explode('/',$absolute_path);
    return $a[count($a) - 1];
}