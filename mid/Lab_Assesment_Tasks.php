<?php

$length = 22;
$width = 24;

"<!-------------------------- Asessment task 1 -------------------------->";

$perimeter = 2*($length+$width);
$area = $length*$width;

echo "The area of the rectangle: ".$area."<br/>";
echo "The perimeter of the rectangle: ".$perimeter."<br/>";

"<!-------------------------- Asessment task 2 -------------------------->";

$amount= 500;

echo "15% VAT of ".$amount." BDT is: ".(0.15*$amount)."<br/>";

"<!-------------------------- Asessment task 3 -------------------------->";

$number = 31;

if(($number%2)==0){
    echo $number." is an even number. <br/>";
}
else {
    echo $number." is an odd number. <br/>";
}

"<!-------------------------- Asessment task 4 -------------------------->";
$n1= 60;
$n2= 77;
$n3= 85;

if($n1>$n2){
    if($n1>$n3){
        echo $n1." is an the largest number. <br/>";
    }else{
        echo $n3." is an the largest number. <br/>";
    }
}
else if($n2>$n3){
    if($n2>$n1){
        echo $n2." is an the largest number. <br/>";
    }else{
        echo $n1." is an the largest number. <br/>";
    }
}
else if($n3>$n1){
    if($n3>$n2){
        echo $n3." is an the largest number. <br/>";
    }else{
        echo $n2." is an the largest number. <br/>";
    }
}

"<!-------------------------- Asessment task 5 -------------------------->";
//$j= 0;
echo "The odd numbers between 10 and 100: ";

for($i=10; $i<=100; $i++){
    if(($i%2)!=0){
            echo $i." ";
    }
}
echo "<br/>";

"<!-------------------------- Asessment task 6 -------------------------->";
echo "Searching an element from array: <br/> ";

$num_array = [20, 30, 45, 27, 90, 78, 47];
$key= 45;
$flag= 0; 
for($i=0; $i<7; $i++){
    if($num_array[$i]==$key){
            echo $key." is found at index ".$i;
            $flag=1;
    }
}
if($flag==0){
    echo $key." is not present in the array.";
}

echo "<br/>";

"<!-------------------------- Asessment task 7 -------------------------->";
echo "<p>";
for($i=0; $i<3; $i++){
    $x=1;
    for($j=0; $j<=$i; $j++){
        echo $x++." ";
    }
    echo "<br/>";
}

echo "<br/>";

for($i=3; $i>0; $i--){
    for($j=$i; $j>0; $j--){
        echo "* ";
    }
    echo "<br/>";
}
echo "</p>";

"<!-------------------------- Asessment task 8 -------------------------->";
$MyArray = [ [1, 2, 3, 'A'], 
             [1, 2, 'B', 'C'],
             [1, 'D', 'E', 'F']
            ];

            for($i=0; $i<3; $i++){
                for($j=0; $j<3-$i; $j++){
                    echo $MyArray[$i][$j]." ";
                }
                echo "<br/>";
            }

            echo "<br/>";

            for($i=0; $i<3; $i++){
                for($j=3-$i; $j<=3; $j++){
                    echo $MyArray[$i][$j]." ";
                }
                echo "<br/>";
            }




?>