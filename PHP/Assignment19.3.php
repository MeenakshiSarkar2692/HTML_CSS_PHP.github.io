<!DOCTYPE html>
<html lang="en">
<head>
    <title>Table</title>
</head>
<body>
    <table border="2">
        <?php

            for($i=1;$i<=4;$i++){
                echo "<tr>";
                for($j=1;$j<=5;$j++){
                    $sum=$i+$j;
                    echo "<td>$i + $j = ".$sum."</td>";
                }
                echo "</tr>";
            }
            ?>
    </table>
</body>
</html>