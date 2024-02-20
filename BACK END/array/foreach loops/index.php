<pre>
<?php


// Question 01: 



$number = array(
    1,
    2,
    3,
    4,
    4.4,
    5,
    6,
    6,
    7,
    8
);



foreach ($number as $key => $value) {
    echo "$value <br>";

}
;
echo "<hr>";
// Question 02: 
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
    echo "$x <br>";
}

echo "<hr>";
// Question 03:



$earth = array(
    $Asis = array(
        $country = array(
            "India", 
            "China",
            "Pakistan", 
            "Nepal",
            "Sri Lanka"
            )
    )
);


foreach ($earth as $name => $key)
         {
    // print_r($earth);
    // print_r($key);
             foreach ($key as $value => $arr) 
             {
             // print_r($arr);
                foreach ($arr as $a) 
                {
                 echo "$a <br>";
                }
             }
        }


?>