<?php

$array[0] = "Yellow";
$array[1] = "Green";
$array[2] = "Yellow";
$array[3] = "Blue";
$array[4] = "Yellow";

$array = array_keys(array_flip($array));

//$array will output Yellow Green Blue

?>