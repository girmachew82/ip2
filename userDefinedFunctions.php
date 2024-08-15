<?php
declare(strict_types=1);
?>
<p>Why do  we use function?</p>
<ol>
    <li>To write modularized code</li>
    <li>To reuse a code</li>
    <li>To write mantanable code</li>
</ol>
<?php
///function defination
function sum(int $x, int $y): int{
    //any valid syntax operation/expression is allowed here 
    return $x + $y;
}
//function call/invoking
echo sum(4,5);//argument
echo "<br>";
echo sum(40,50);//argument
echo "<br>";
echo sum(5, 5);//argument
$sum  = sum(100, 100);
echo "<br>".$sum."<br>";
//anonymous function
$greet = function($name) {
    printf("Hello %s\r\n <br>", $name);
};

$greet('World');
$greet('PHP');
//Arrow function
$y = 9;
$fn1 = fn($x) => $x + $y;
echo "<br>" .$fn1(2)."<br>";