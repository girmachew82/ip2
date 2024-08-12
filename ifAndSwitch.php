<?php

$x  = 8;
$y = 12;
$operator = "*";
if($operator ==="+")
echo "<p> ".$x. " + ".$y. " = ".($x + $y)."</p>";
elseif($operator ==="-")
echo "<p> ".$x. " - ".$y. " = ".($x - $y)."</p>";
elseif($operator ==="*")
echo "<p> ".$x. " * ".$y. " = ".($x * $y)."</p>";
elseif($operator ==="/")
echo "<p> ".$x. " / ".$y. " = ".($x / $y)."</p>";
elseif($operator ==="%")
echo "<p> ".$x. " % ".$y. " = ".($x % $y)."</p>";
elseif($operator ==="**")
echo "<p> ".$x. " ** ".$y. " = ".number_format($x ** $y)."</p>";
else
echo "Incorrect operator";
echo "<hr>";
switch($operator){
    case "+":
echo "<p> ".$x. " + ".$y. " = ".($x + $y)."</p>";
break;
case "-":
echo "<p> ".$x. " - ".$y. " = ".($x - $y)."</p>";
case "*":
    echo "<p> ".$x. " * ".$y. " = ".($x * $y)."</p>";
    break;
echo "<p> ".$x. " * ".$y. " = ".($x * $y)."</p>";
case "/":
    break;
echo "<p> ".$x. " / ".$y. " = ".($x / $y)."</p>";
case "%":
    break;
echo "<p> ".$x. " % ".$y. " = ".($x % $y)."</p>";
case "**":
    break;
echo "<p> ".$x. " ** ".$y. " = ".number_format($x ** $y)."</p>";
default:
echo "incorrect operator";
}
echo "<hr>";