<?php
//option one using array()
$numbers = array(7,8,9,4,5,6,1);//one-dimisional + indexed 
//The sum of the first two elements 
$sum = $numbers[0] + $numbers[1] + $numbers[2] + $numbers[3]+ $numbers[4] + $numbers[5] + $numbers[6];
echo "$numbers[0] + $numbers[1] = ". $numbers[0] + $numbers[1]."<br>";
echo "Sum  = $sum<br>";
/*
$number1 = 7;
$number2 = 8;
$number3 = 9;
$number4 = 4;
$number5 = 5;
$number6= 6;
$number7 =1 ;
*/
//option two using []
$students  = ["Abebe","Alemaz","Kebede"];
$x = 9;
echo "Value of x = ".$x;
echo"<br>";
$n = count($numbers);
echo "The first element = ".$numbers[0];
echo"<br>";
echo "The last  element = ".$numbers[$n - 1];
$sum = 0;
echo "<hr>";
for($i = 0; $i < count($numbers); $i++)
    $sum += $numbers[$i];

echo "<p>The result of <em>for</em> </p>";
echo "Sum = ".$sum."<br>";
//sum the first three elements only
$sum = 0;
echo "<hr>";
for($i = 0; $i < count($numbers); $i++){
        if($i < 3 )
          $sum += $numbers[$i];
        else
        break;
}
echo "<p>The result of <em>the first three elements</em> </p>";
echo "Sum = ".$sum."<br>";
echo "<hr>";
$sum = 0;
for($i = 0; $i < count($numbers); $i++){
    if($i === 3)
        continue;
    else
    $sum += $numbers[$i];
}
echo "<p>The sum of elements  <em>  execpt  the third one </em> </p>";
echo "Sum = ".$sum."<br>";
echo "<hr>";
$sum = 0;
foreach($numbers as $number)
$sum += $number;

echo "<p>The result of <em>foreach</em> </p>";
echo "Sum = ".$sum."<br>";
$sum = 0;
$i = 0;
while($i < count($numbers)){
    $sum += $numbers[$i];
    $i++;
}
echo"<hr>";
echo "<p>The result of <em>while</em> </p>";
echo "Sum = ".$sum."<br>";
$sum = 0;
$i = 0;
do{
    $sum += $numbers[$i];
    $i++;
}while($i < count($numbers));
echo"<hr>";
echo "<p>The result of <em>do -while</em> </p>";
echo "Sum = ".$sum."<br>";