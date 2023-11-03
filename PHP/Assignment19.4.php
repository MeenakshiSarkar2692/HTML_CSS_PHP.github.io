<!DOCTYPE html>
<html lang="en">
<head>
    <title>Factorial</title>
</head>
<body>
    <form method="POST">
        Enter a number:
        <input type="number" name="number">
        <input type="submit" value="Click me">
    </form>
</body>
</html>
<?php
    $f=1;
    $n=1;
    for($i=1;$i<=4;$i++){
        $n=$n*$i;
    }
    echo "Factorial of 4: $n";
    echo "<br />";
    if($_POST){
        $number =$_POST['number'];
        for($i=1;$i<=$number;$i++){
            $f=$f*$i;
        }
        echo "Factorial of $number: $f";
    }
?>
