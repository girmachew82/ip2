<?php
/*
r 	Open a file for read only. File pointer starts at the beginning of the file
w 	Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a 	Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x 	Creates a new file for write only. Returns FALSE and an error if file already exists
r+ 	Open a file for read/write. File pointer starts at the beginning of the file
w+ 	Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a+ 	Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x+ 	Creates a new file for read/write. Returns FALSE and an error if file already exists
*/
define('TIREPRICE',100);
define('OILPRICE', 10);
define('SPARKPRICE', 4);
$tires = $_POST['tires'];
$oil = $_POST['oil'];
$spark = $_POST['spark'];
$howufind = $_POST['howufind'];

$totalqty = 0;
$totalamount = 0.00;
$totalqty = $tires + $oil + $spark;
echo "<h1> Order payment</h1>";
echo "Items ordered : ".$totalqty."<br/>";

$totalamount = $tires * TIREPRICE + 
               $oil * OILPRICE + 
               $spark * SPARKPRICE;
echo "<br/>";

if($howufind == 'a')
echo "<p>I'm regular customer</p>";
elseif($howufind == 'b')
echo "<p>TV adversiting</p>";
elseif($howufind == 'c')
echo "<p>Phone directory</p>";
elseif($howufind == 'd')
echo "<p>Word of mouth</p>";
/*
Discount 

> 10 == No discount
>=10 && <= 49 = 5%
>=50 && <= 99 = 10%
>=100 = 15%

*/
if( $tires < 10)
$discount = 0;
elseif(($tires >= 10) && ($tires <= 49))
$discount = 5;
elseif(($tires >= 50) && ($tires <= 99))
$discount = 10;
elseif($tires >= 100)
$discount = 15;
/*
$totalamount = 100%;
      $d = $discount;
$d = ($totalamount * $discount)/100;
*/
$d = number_format(($totalamount * $discount)/100,2);
echo "Subtotal: $".number_format($totalamount,2)."<br/>";

$taxrate = 0.10;
$totalamount = $totalamount * (1 + $taxrate) - $d;
$tax =$totalamount - (($totalamount * 10 )/100);
echo "Tax : $".$tax."<br/>";
echo "Discount : $".$d."<br/>";
echo "Total including tax : $".number_format($totalamount,2)."<br/>";
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
$fp = fopen("orders.txt",'x+');
$date = date('D,d/M/Y H:m:s');
$address = "AA";
$outputsting =  $date."\t".$tires." tires \t".$oil." oil\t"
.$spark." spark plugs\t\$".$totalamount
."\t". $address."\t".$howufind."\n";
fwrite($fp, $outputsting);
fclose($fp);
