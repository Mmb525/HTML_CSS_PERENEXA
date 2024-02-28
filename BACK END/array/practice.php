<?php
$max = 0;
$value = array(1,2,3,4,12,5,6,7,8,9,10);
foreach ($value as  $va) {
    $max=($max<$va)?$va:$max;
    echo"1 <br>"; 
}
print_r($max);

?>