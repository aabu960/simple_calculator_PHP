<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="#">

<input type="number" name="number1" placeholder="enter number1" />
<br /> <br />
<input type="number" name="number2" placeholder="enter number2" />
<br /> <br />
<input type="number" name="number3" placeholder="enter number3" />
<br /> <br />
<input type="submit" name="submit"  />
<br /> <br />
    </form>

<?php
if(isset($_GET['submit'])){
$n1 = $_GET['number1'];
$n2 = $_GET['number2'];
$n3 = $_GET['number3'];
$m = $n1* $n2;
$d = $m /$n3;

echo "<p> The first number is : " . $n1 ."</p>";
echo "<p> The second number is : " . $n2 ."</p>";
echo "<p> The third number is : " . $n3 ."</p>";

echo "<p> The product of the first and the third numbers is  : " . $m ."</p>";
echo "<p> The final answer is : " . $d ."</p>";


}else{
    echo"<p> you have to click the button to get a result </p>";

}


?>

</body>
</html>