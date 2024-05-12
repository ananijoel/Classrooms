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
    $i = 0;
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
 * @param $path Array|string all the items you want to display
 * @param $target string the page you want to be redirected if the user clicked on an item
 * @return void display with html all the items
 */
function show_folder_content($path,$target)
{
    if(is_array($path)) {
        $paths = $path;
    }
    else{
        $paths = get_directory_items($path);
    }
    foreach ($paths as $item) {
        if (is_dir($item)) {
            $name = pathinfo($item,PATHINFO_BASENAME);
            echo '<a class="items" href="'.$target.'?target='.$item.'"> <p class="name">'.$name.' </p> <p class="filetype dir"> dossier </p> </a>';

        }
        if (is_file($item)){
            $itemRelativePath = get_relative_path($item) ;
            $file_info = pathinfo($itemRelativePath);
            $extension = $file_info['extension'];
            echo '<a  class="items" href="'. $itemRelativePath.'" download="'.$file_info['basename'].'"> <p class="name">'.$file_info['filename'].' </p> <p class="filetype '.$extension.' " > '.$extension.' </p>  </a>';

        }
    }
}

/**
 * @param $semesters String the semester of the file
 * @param $subject String the subject of the file
 * @param $category String the category of the file
 * @return void
 */
function upload($semesters,$subject,$category)
{

}
function backbutton($path)
{
    if(isset($path)){
        if(is_array($path)){
            $return = "#";
        }else{


            if($path !== "/media/anani/Code base/Defitech-IT/Semesters"){
                $path = pathinfo($path,PATHINFO_DIRNAME);
                $return = '../directories/fileExplorer.php?target='.$path;
            }
            else{
                $return = "#";
            }
        }
    }
    else{
        $return = '../index.php';
    }
   return $return;


}