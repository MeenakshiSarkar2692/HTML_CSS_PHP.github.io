<?php
    $str = "India is my country";
    if(preg_match("/is/",$str))
    {
        echo "'is' is Found";
    }
    else{
        echo "'is' is Not Found";
    }
?>
