<?php
function day_timetable($today,$day_key){
    foreach ($today as $k => $day){
        $active_hour = ((int)date('Gi') >= (int)$day[1]  and (int)date('Gi') < (int)$day[2]  and ( $day_key == '' or $day_key == date('D')))? ' active_hour':'';
        echo '<div class="subject'.$active_hour.'">'.$day[0].'</div>';
    }
}

function day_timetable_nav($today,$day_key){
    foreach ($today as $k => $day){
        $active_hour = ((int)date('Gi') >= (int)$day[1]  and (int)date('Gi') < (int)$day[2]  and ( $day_key == '' or $day_key == date('D')))? ' active_hour':'';
        echo '<li><p class="subject'.$active_hour.'">'.$day[0].'</p></li>';
        $hr = $k<(count($today)-1)?'<li><hr class="dropdown-divider"></li>':'';
        echo $hr;
    }
}


function week_timetable($timetable,$dayname){
    foreach ($timetable as $k => $days) {
        $active_day =($k == date('D'))? ' active_day ':'';
        ?>
        <div class="days<?= $active_day ?> " >
            <div class="dayname"><?= $dayname[$k] ?></div>
            <?php day_timetable($days,$k) ?>
        </div>
        <?php
    }
}

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

