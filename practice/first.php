<?php




$num1 = 50;
$num2 = 10;

// $str = "adisdadaasdadada";

// var_dump($str);


// var_dump($num1)


//   if($num1 >= $num2){
//     echo "Num 1 is Equal to Num 2";
//   }else{
//     echo "Num 1 is Not Equal to Num 2";
//   }


//   if($num1 == $num2):
//     echo "Num 1 is Equal to Num 2";
//   endif;


//  echo 5 == 6 && 5 == 5




function PrintNames($name){
    echo "Hello $name <br>";
}


PrintNames( "Adil");
PrintNames( "Ali");
PrintNames( "Hamza");


$name_list = array("adil", "ali", "hamza","huzaifa",40);

function DisplayNames($list)
{

    foreach ($list as  $names) {




        echo "$names  <br>";
    }
}


DisplayNames($name_list);





// $cars = ["adil", "ali", "hamza", 40];


// foreach ($cars as $singleValue) {
//     echo "$singleValue  <br>";
// }
