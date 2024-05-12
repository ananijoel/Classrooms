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
show_folder_content($coursesItems,'');
