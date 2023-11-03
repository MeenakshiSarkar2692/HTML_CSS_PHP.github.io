<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form method="POST">
        Enter the 1st No.:
        <input type="number" name="number1">
        Enter the 2nd No.:
        <input type="number" name="number2">
        Enter the operator:
        <input type="text" name="operator">
        <input type="submit" value="Submit">
</form>
</body>
</html>
<?php
    if($_POST){
        $num1 = $_POST["number1"];
        $num2 = $_POST["number2"];
        $op = $_POST["operator"];
        switch($op){
            case '+':echo "Sum:"." ".$num1+$num2;
                     break;
            case '-':echo "Diff:"." ".$num1-$num2;
                     break;
            case '*':echo "Mul:"." ".$num1*$num2;
                     break;
            case '/':echo "Quo:"." ".$num1/$num2;
                     break;
            case '%':echo "Rem:"." ".$num1%$num2;
                     break;
            default: echo "Wrong Input";
        }
    }
?>
