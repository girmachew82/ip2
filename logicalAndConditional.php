<?php
$mark = 90;
if($mark >= 0 && $mark <= 39)
    $grade = "F";
elseif($mark >= 40 && $mark < 45)
    $grade = "D";
elseif($mark >= 45 && $mark < 50)
    $grade = "C-";
elseif($mark >= 50 && $mark < 60)
    $grade = "C";
elseif($mark >= 60 && $mark < 65)
    $grade = "C+";
elseif($mark >= 65 && $mark < 70)
    $grade = "B-";
elseif($mark >= 70 && $mark < 75)
    $grade = "B";
elseif($mark >= 75 && $mark < 80)
    $grade = "B+";
elseif($mark >= 80 && $mark < 85)
    $grade = "A-";
elseif($mark >= 85 && $mark < 90)
    $grade = "A";
elseif($mark >= 90 && $mark <= 100)
    $grade = "A+";
else
    echo "incorrect $mark";

echo "Grade ".$grade;
/*
$username = 'user1233';
$password = "65434m";
if($username ==='user123'  && $password ==='65434m'){
    echo"Welcome ".$username;
}
else{
    echo "Incorrect Username or Password";
}
    */