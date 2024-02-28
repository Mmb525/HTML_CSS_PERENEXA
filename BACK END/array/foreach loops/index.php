<pre>
<?php


// Question 01: 



// $number = array(
//     1,
//     2,
//     3,
//     4,
//     4.4,
//     5,
//     6,
//     6,
//     7,
//     8
// );



// foreach ($number as $key => $value) {
//     echo "$value <br>";

// }
// ;
// echo "<hr>";
// // Question 02: 
// $colors = array("red", "green", "blue", "yellow");

// foreach ($colors as $x) {
//     echo "$x <br>";
// }

// echo "<hr>";
// // Question 03:



// $earth = array(
//     $Asis = array(
//         $country = array(
//             "India", 
//             "China",
//             "Pakistan", 
//             "Nepal",
//             "Sri Lanka"
//             )
//     )
// );


// foreach ($earth as $name => $key)
//          {
//     // print_r($earth);
//     // print_r($key);
//              foreach ($key as $value => $arr) 
//              {
//              // print_r($arr);
//                 foreach ($arr as $a) 
//                 {
//                  echo "$a <br>";
//                 }
//              }
//         }





// $marks = array(5,10,15,20);
// $total=0;
// foreach ($marks as  $value) {
//     // echo $value . "<br>";
//     $total += $value;
// }
// echo"$total";


// $max=0;
// $marks =array(5,10,15,20,5,100,6);

//     foreach ($marks as $value) {
//         $max = ($max < $value)? $value:$max; 
//     }
//     echo $max;



$arr = array("hello",100,5,5.015,"Welcome",true,null,12,"hey",0);

$totalint =0; 
$totalstr =0; 
$totalfloat =0; 
$totalboolen =0; 
foreach($arr as $value)
{
    if(is_int($value) )
    {
        $totalint ++;
    }
    if(is_float($value) )
    {
        $totalfloat ++;
    }
    if(is_string($value) )
    {
        $totalstr ++;
    }
    if(is_bool($value) )
    {
        $totalboolen ++;
    }
}
echo "total integes is $totalint <br>";
echo "total float  is $totalfloat <br>";
echo "total str  is $totalstr <br>";
echo "total boolen  is $totalboolen <br>";
?>