<?php
require '../functions/get_path_to.php';

$semesterList = get_semesters_list();
//var_dump($semesterList);
$firstSemester = $semesterList[0];
//echo $firstSemester;
$firstSemesterItems = get_directory_items($firstSemester);
//var_dump($firstSemesterItems);
$firstSubject = $firstSemesterItems[0];
//echo $firstSubject;
$firstSubjectItems = get_directory_items($firstSubject);
//var_dump($firstSubjectItems);
$courses = $firstSubjectItems[0];
//echo $courses;
$coursesItems = get_directory_items($courses);
//var_dump($coursesItems);
$firstfile = $coursesItems[0];
//echo $firstfile;
$currentFolderName = get_folder_title($firstfile);
//echo $currentFolderName;
$firstfileRePath = get_relative_path($firstfile);
//echo $firstfileRePath;

function show_folder_contents($path,$target)
{
    $paths = get_directory_items($path);
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

show_folder_contents($courses,'');
