<?php
require '../functions/get_path_to.php';
require '../functions/metadata.php';

//$semesterList = get_semesters_list();
//var_dump($semesterList);
//$firstSemester = $semesterList[0];
//echo $firstSemester;
//$firstSemesterItems = get_directory_items($firstSemester);
//var_dump($firstSemesterItems);
//$firstSubject = $firstSemesterItems[0];
//echo $firstSubject;
//$firstSubjectItems = get_directory_items($firstSubject);
//var_dump($firstSubjectItems);
//$courses = $firstSubjectItems[0];
//echo $courses;
//$coursesItems = get_directory_items($courses);
//var_dump($coursesItems);
//$firstfile = $coursesItems[0];
//echo $firstfile;
//$currentFolderName = get_folder_title($firstfile);
//echo $currentFolderName;
//$firstfileRePath = get_relative_path($firstfile);
//echo $firstfileRePath;
//show_folder_content($courses,'');
//var_dump(pathinfo($courses));
/*
function backbutton($path)
{
    $path = pathinfo($path,PATHINFO_DIRNAME);
    echo $path;
}
backbutton($courses);*/
//$filename = pathinfo("/home/anani/pomvwamwvmwmvmvrarvvsvdsvssdsvvdvsvsd.md", PATHINFO_BASENAME);
//echo "\n".$filename;
//echo "\n ".file_size($firstfile);
//echo "\n ".creation_date($firstfile);
//echo  "\n".filename_limiter($filename);
//folder_items($firstSemester);
//echo file_exists("../upload"); 

/*
function get_projec_name()
{
    $path = dirname(dirname(__FILE__));
    $b = explode('/', $path);
    return $b[count($b) - 1];
}
echo get_projec_name();
*/
//phpinfo();

$path =  "/media/anani/Code base/Classrooms/zips";
fileDeleter($path);
