<?php
//variable yourName
$yourName = "Rob Dunavan";
//variable number1
$number1 = 12;
//variable number2
$number2 = 8;
//variable total
$total = $number1 + $number2
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>
3-1: PHP Basics  
</h1>

<h2> 
<?php 
//output yourName
echo $yourName; 
?>
</h2>
<h2> <?php
//output number1
echo $number1; ?></h2>
<h2> <?php 
//number2
echo $number2; ?></h2>
<h2> <?php 
//output number2
echo $total; ?></h2>

<h1>
<?php
//array php
$PHP = array( 'PHP', 'HTML','Javascript');
//foreach loop only for array
foreach ($PHP as $value) {
  echo $value;
}
?>
</h1>
<h1>
<?php
//javascript array
$Javascript = array( 'PHP', 'HTML','Javascript');

foreach ($Javascript as $value) {
  echo $value;
}
?>
</h1>
<p id="demo"></p>

<script>
    //javascript array
const JavaScript= ["html", "php", "javaScript"];
document.getElementById("demo").innerHTML = JavaScript;
</script>
</body>
</html>