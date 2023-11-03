<?php
function getTodayWeekday() {
    $weekdays = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
    $todayWeekday = date("w"); // w returns the numeric representation of the day (0 = Sunday, 1 = Monday, etc.)
    
    return $weekdays[$todayWeekday];
}

$today = getTodayWeekday();
echo "Today is $today.";
?>
