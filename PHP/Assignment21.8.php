<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form method="POST">
        Username:
        <input type="text" name="name"><br />
        Select Color:<br />
        Red
        <input type="radio" name="checklist" value="Red"><br />
        Green
        <input type="radio" name="checklist" value="Green"><br />
        Yellow
        <input type="radio" name="checklist" value="Yellow"><br />
        Blue
        <input type="radio" name="checklist" value="Blue"><br /><br />
        <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php
    if($_POST){
        $name=$_POST["name"];
        $color=$_POST["checklist"];
        echo "<br />";
        echo "Name is:"." ".$name;
        echo "<br />";
        echo "Color is:"." ".$color;
    }
?>
