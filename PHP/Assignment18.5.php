<?php
    define("marks", 40);
    if(marks>=60){
        echo "First Division";
    }
    else if(marks<=59 && marks>=45){
        echo "Second Division";
    }
    else if(marks<=44 && marks>=33){
        echo "Second Division";
    }
    else if(marks<33){
        echo "Fail";
    }
    else{
        echo "Invalid Marks";
    }
?>