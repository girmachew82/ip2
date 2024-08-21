<?php
require 'nav.php';
 $fp = fopen('hello.txt','a+');
 if(!$fp)
     echo "No file please try again later";
     // feof(): function checks if the "end-of-file" (EOF) has been reached
     // fgets() function is used to read a single line from a file.
 while(!feof($fp)){ 
     $order = fgets($fp,400);
     echo $order."<br/>";
     echo "-----------------------------------------------------------------------------------------------<br/>";
 }
 fclose($fp);
 ?>