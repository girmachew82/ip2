<?php
$tilte  ="we are practicing about PHP built-in methods";
echo strtoupper($tilte)."<br>";
$x  = 1;
if(is_int($x)){
    echo "It is an integer number";
}else{
    echo "It is not an integer number";
}
?>
<hr>
<?php
$numbers = [200,30,400,50];
if(is_array($numbers)){
    echo "It is an array";
}else{
    echo "It is not an array";
}
echo "<br>";
$s_numbers = rsort($numbers);
echo "Elements of an array ".sizeof($numbers)."<br>";

echo "Desceding order <br>";
foreach($numbers as $number)
    echo $number," ";
$s_numbers = sort($numbers);
echo "<br>Ascending  order <br>";
foreach($numbers as $number)
    echo $number," ";
?>
<hr>
<?php
$numbers = [20,30,40,50];
if(is_array($numbers)){
    echo "It is an array";
}else{
    echo "It is not an array";
}
?>
<hr>
<?php 
$helloWorld  = "Hello World";

echo "$helloWorld <br>";
echo "First character ".$helloWorld[0]." <br>";
echo "To upper case ".strtoupper($helloWorld)."<br>";
echo "To upper case ".strtolower($helloWorld)."<br>";
echo "Length  ".strlen($helloWorld)."<br>";
$helloWorld  = "     Hello   World            ";
echo "Length  ".strlen($helloWorld)."<br>";
echo "To upper case ".strtoupper($helloWorld)."<br>";
echo "To upper case ".trim($helloWorld)."<br>";
echo "Length  ".strlen(trim($helloWorld))."<br>";

$helloWorld  = "<h1>Hello world </h1>";
echo "$helloWorld <br>";
echo htmlentities($helloWorld)."<br>";
$helloWorld  = "Hello world";
echo lcfirst($helloWorld)."<br>";
echo ucfirst($helloWorld)."<br>";
$mystring = 'abc';
$findme   = 'c';
$pos = strpos($mystring, $findme);
echo "Position of c is = ".$pos."<br>";
?>
