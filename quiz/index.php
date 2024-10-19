<?php

// 1.	Task: Ek variable ka value print karein.
$my_name = "Adil";
echo $my_name;


echo "<br>";
echo "<br>";
echo "<br>";

// 2.	Task: Ek array ka first element print karein.

// $names = array()
$names = ["adil","ali","hamza"];
echo $names[0];



echo "<br>";
echo "<br>";
echo "<br>";

// 3.	Task: foreach loop ka istemal karte hue array ke elements ko print karein.

foreach($names as $name){
    echo "$name  <br>";
}


echo "<br>";
echo "<br>";
echo "<br>";


// Task: Ek string ka length print karein.  

echo strlen("Learning");


echo "<br>";
echo "<br>";
echo "<br>";

// 5.	Task: Do numbers ka sum karke output batayein.

$num1 = 5;
$num2 = 10;
$sum = $num1 + $num2;
echo $sum;

echo "<br>";
echo "<br>";
echo "<br>";



// 6.	Task: Ek string ko uppercase mein convert karein.   X


$my_name = "adil";
echo strtoupper($my_name);


echo "<br>";
echo "<br>";
echo "<br>";


// 7.	Task: Associative array se ek value print karein.

$assoArray = array(
    "name" => "Adil",
    "age" => 50,
    "class" => 10
);

echo $assoArray["name"];



echo "<br>";
echo "<br>";
echo "<br>";

// 8.	Task: Ek array se last element ko print karein.


$Endnames = ["adil","ali","hamza","babar","carry"];
echo end($Endnames);


echo "<br>";
echo "<br>";
echo "<br>";


// 9.	Task: Ek string se specific character ko remove karein.  X
$hello = "Hello World";
echo str_replace("o","",$hello);


echo "<br>";
echo "<br>";
echo "<br>";



// 10.	Task: Ek array ka average calculate karein.  X

$student_numbers = [10,50,40,60,30,98];

echo array_sum($student_numbers) / count($student_numbers);

?>
