<?php
$x = "5";
$z = "6";

$age = "22";
$AGE = "13";

echo "$age";
echo "$AGE";

echo "$x <br>";
echo "$z <br>";


echo "wellcome to php class";




$day = "tuesday";


echo "<br>";



switch ($day) {

    case "monday":
        echo "Tuesday Nh mila monday mil gaya";
        break;
    case "friday":
        echo "Tuesday Nh mila friday mil gaya";
        break;
    case "tuesday":
        echo "Tuesday mila gaya";
        break;
    default:
        echo "Invalid Day";
}
echo "<br>";
echo "<br>";




$cars = ["Audi","Bentli","Thar","Porche"];

// echo $cars[0];
// echo $cars[1];
// echo $cars[2];


$length = count($cars);

for( $i = 0; $i < $length; $i++ ) {
   echo  $i . " " . $cars[$i]."<br>";
}



$students = [
  [1,2,4,5],
  [1,2,4,5],
];


foreach($students as $student) {
  foreach($student as $item){
    echo $item."<br>";
  }
}















// if($day == "mondy"){
//   echo "Today Is Tuesday";
// }elseif(){

// }
