<?php
echo "<h1>This is about Operators in PHP</h1>";
$x = "Hello World";
$num = 1;
echo $x;
echo "<br>";
echo $num;
$isValid  = false;
echo "<br>";
echo $isValid;
$books = ["PHP","HTML","CSS"];
$total = null;
echo "<br>";
echo $total;
echo "1. Arithematic Operators <br>";
$x  = 8;
$y = 12;
echo "<p> ".$x. " + ".$y. " = ".($x + $y)."</p>";
echo "<p> ".$x. " - ".$y. " = ".($x - $y)."</p>";
echo "<p> ".$x. " * ".$y. " = ".($x * $y)."</p>";
echo "<p> ".$x. " / ".$y. " = ".($x / $y)."</p>";
echo "<p> ".$x. " % ".$y. " = ".($x % $y)."</p>";
echo "<p> ".$x. " ** ".$y. " = ".number_format($x ** $y)."</p>";
echo "<hr>";
echo "<p>2. Comparision/Relational operators</p>";
echo "<p> ".$x. " > ".$y. " = ".($x > $y)."</p>";
echo "<p> ".$x. " < ".$y. " = ".($x < $y)."</p>";
echo "<p> ".$x. " >= ".$y. " = ".($x >= $y)."</p>";
echo "<p> ".$x. " <= ".$y. " = ".($x <= $y)."</p>";
echo "<p> ".$x. " == ".$y. " = ".($x == $y)."</p>";
echo "<p> ".$x. " === ".$y. " = ".($x === $y)."</p>";
echo "<p> ".$x. " <> ".$y. " = ".($x <> $y)."</p>";
echo "<p> ".$x. " != ".$y. " = ".($x != $y)."</p>";

echo "<hr>";

echo "<p>3. Logical operators</p>";
$x_true =  true;
$x_false = false;// they may be the result of other operation

echo '<p> $x_false   && $x_true ='.($x_false && $x_true)."</p>";
echo '<p> $x_false || $x_true ='.($x_false || $x_true)."</p>";

echo '<p>  !$x_false = '.(!$x_false )."</p>";
echo "<hr>";
echo "<p>4. BitWise</p>";
$x =  2; // 10
$y = 3;// 11
/*
10
&
11
---
10
*/
/*
10
|
11
---
11
*/
/*
~10
01
*/
echo '<p> $x   & $y ='.($x & $y)."</p>";
echo '<p> $x | $y ='.($x | $y)."</p>";
echo '<p>  ~$x = '.(~$x )."</p>";
echo "<hr>";
echo "<p>5. Assignment operator</p>";
echo '$x = 90';
echo "<br>";
echo "<p>6. Terinary </p>";
$x = 90;
echo ($x >= 90)?" x >= 90 ":" x < 90";
echo "<br>";
echo "<p>Other roperators </p>";
?>
<ol>
    <li>.</li>
    <li>{}</li>
    <li>;</li>
    <li>()</li>
</lo>
    <p>Read More</p>
   https://www.php.net/manual/en/language.operators.arithmetic.php
    <br>
