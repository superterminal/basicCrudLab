<?php

$array = array_map('intval', explode(" ", readline()));
$command = readline();

while ($command !== "end") {
    $explodeCm = explode(" ", $command);

    if ($explodeCm[0] === "Add") {
        array_push($array, intval($explodeCm[1]));
    } else if ($explodeCm[0] === "Remove") {
        array_splice($array, array_search(intval($explodeCm[1]), $array), 1);
    } else if ($explodeCm[0] === "RemoveAt") {
        array_splice($array, intval($explodeCm[1]), 1);
    } else if ($explodeCm[0] === "Insert") {
        array_splice($array, intval($explodeCm[2]), 0, intval($explodeCm[1]));
    } else if ($explodeCm[0] === "Contains") {
        if (in_array(intval($explodeCm[1]), $array)) {
            echo "Yes".PHP_EOL;
        } else  {
            echo "No such number".PHP_EOL;
        }
    } else if ($explodeCm[1] === "even") {
        foreach ($array as $item) {
            if ($item % 2 === 0) {
                echo $item. " ";
            }
        }
        echo PHP_EOL;
    } else if ($explodeCm[1] === "odd") {
        foreach ($array as $item) {
            if ($item % 2 !== 0) {
                echo $item. " ";
            }
        }
        echo PHP_EOL;
    } else if ($explodeCm[0] === "Filter") {
        switch ($explodeCm[1]) {
            case '<':
                foreach ($array as $item) {
                    if ($item < $explodeCm[2]) {
                        echo $item . " ";
                    }
                }
                echo PHP_EOL;
                break;
            case '>':
                foreach ($array as $item) {
                    if ($item > $explodeCm[2]) {
                        echo $item . " ";
                    }
                }
                echo PHP_EOL;
                break;
            case '<=':
                foreach ($array as $item) {
                    if ($item <= $explodeCm[2]) {
                        echo $item . " ";
                    }
                }
                echo PHP_EOL;
                break;
            case '>=':
                foreach ($array as $item) {
                    if ($item >= $explodeCm[2]) {
                        echo $item . " ";
                    }
                }
                echo PHP_EOL;
                break;
        }
    } else if ($explodeCm[1] === "sum") {
        echo array_sum($array).PHP_EOL;
    }

    $command = readline();
}
echo implode(" ", $array);