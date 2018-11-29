<?php

$arr1 = array_map('intval', explode(" ", readline()));
$arr2 = array_map('intval', explode(" ", readline()));

$biggestArr = [];
$smallestArr = [];
$total = [];
$checker = false;
if ($arr1 >= $arr2) {
    $biggestArr = $arr1;
    $smallestArr = $arr2;
    $checker = true;
} else {
    $biggestArr = $arr2;
    $smallestArr = $arr1;
}

$cutEl = array_splice($biggestArr, count($smallestArr), count($biggestArr) - count($smallestArr));

for ($i = 0; $i < count($biggestArr) - (count($biggestArr) - count($smallestArr));$i++){
    if ($checker) {
        array_push($total, $biggestArr[$i]);
        array_push($total, $smallestArr[$i]);
    } else {
        array_push($total, $smallestArr[$i]);
        array_push($total, $biggestArr[$i]);
    }

}

echo implode(" ", array_merge($total, $cutEl));