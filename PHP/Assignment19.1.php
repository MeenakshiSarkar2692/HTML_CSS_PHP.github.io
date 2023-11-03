<?php
    $year = 2022;
    if($year%400==0 || (($year%100!=0) && ($year%4==0)))
    {
        echo "$year Leap Year";
    }
    else{
        echo "$year Not a Leap Year";
    }
?>