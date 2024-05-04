<?php

/**
* @param integer $startDate timestamp of the first day of the semester
* @return array [days,weeks]
*/
function counter_after_school_started($startDate)
{
$seconds = time() - $startDate;
$days = ceil($seconds / 86400);
$weeks = ceil($days / 7);
return [$days, $weeks];

}

/**
* @param integer $endDate timestamp of the last day of the semester or a holiday
* @return array [days,weeks]
*/
function counter_before_holidays($endDate)
{
$seconds = $endDate - time();
$days =  ceil($seconds / 86400);
$weeks = ceil($days / 7);
return [$days, $weeks];
}