<?php


$array = array_map("intval", explode(" ", readline()));

$storage = [];
$length = intval(count($array) / 2);
for ($i = 0; $i < $length;$i++){
    $firstEl = $array[$i];
    $secondEl = $array[count($array) - $i - 1];
    $storage[] = $firstEl + $secondEl;
}
if (count($array) % 2 !== 0) {
    $storage[] = $array[count($array) / 2];
}
echo implode(" ", $storage);