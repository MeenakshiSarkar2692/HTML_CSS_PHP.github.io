<?php
    $age = 20;
    if($age<9)
    {
        echo "Red House";
    }
    else if($age>=9 && $age<=11)
    {
        echo "Green House";
    }
    else if($age>=12 && $age<=14)
    {
        echo "Orange House";
    }
    else if($age>=15 && $age<=17)
    {
        echo "White House";
    }
    else{
        echo "Age beyond limit";
    }
?>