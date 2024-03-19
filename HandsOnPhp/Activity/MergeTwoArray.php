<?php
// Given arrays


$array1 = array(array(77, 87), array(23, 45));
$array2 = array("w3resource", "com");

// Initialize an empty result array


$result = array();

// Merge arrays by index


for ($i = 0; $i < count($array1); $i++) {
    $merged = array_merge($array1[$i], array($array2[$i]));
    array_push($result, $merged);
}

// Print the merged result


print_r($result);
?>