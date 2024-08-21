<?php
require 'nav.php';
$x  = 8;
$y = 12;
$operator = "*";
if($operator === "+" )
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
$operator = 1;
switch($operator){
    case 1:
       echo "<p> ".$x. " + ".$y. " = ".($x + $y)."</p>";
    break;
    case 2:
        echo "<p> ".$x. " - ".$y. " = ".($x - $y)."</p>";
    case 3:
        echo "<p> ".$x. " * ".$y. " = ".($x * $y)."</p>";
    break;
        echo "<p> ".$x. " * ".$y. " = ".($x * $y)."</p>";
    case 4:
    break;
        echo "<p> ".$x. " / ".$y. " = ".($x / $y)."</p>";
    case 5:
    break;
        echo "<p> ".$x. " % ".$y. " = ".($x % $y)."</p>";
    case 6:
    break;
        echo "<p> ".$x. " ** ".$y. " = ".number_format($x ** $y)."</p>";
    default:
        echo "incorrect operator";
}
echo "<hr>";