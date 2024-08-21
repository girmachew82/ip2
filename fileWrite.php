<?php
/*

Modes	 Description
r	     Open a file for read only. File pointer starts at the beginning of the file
w	     Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a	     Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x	     Creates a new file for write only. Returns FALSE and an error if file already exists
r+	     Open a file for read/write. File pointer starts at the beginning of the file
w+	     Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a+	     Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x+	     Creates a new file for read/write. Returns FALSE and an error if file already exists
*/
$hello  = "Hello ";
$name = "Yared";
/*
echo "<pre>";
var_dump($_SERVER);
echo "</pre>";
*/
$email  = $_POST['email'];
$fname  = $_POST['fname'];
$fathername  = $_POST['fathername'];
$gender  = $_POST['gender'];
$department  = $_POST['department'];
$remark  = $_POST['remark'];
$data  = "Email ".$email."<br>"."First Name ".$fname."<br>"."Father Name ".$fathername."<br>". "Gender ".$gender."<br>"."Department ".$department."<br>"."Remark ".$remark;
//var_dump($email);
$fl = fopen('hello.txt','a+');//open or create or update
$write  = fwrite($fl,$data);// store
fclose($fl); //close
header('location:fileRead.php');