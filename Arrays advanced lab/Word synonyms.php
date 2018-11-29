<?php

$n = intval(readline());

$words = [];

for ($i = 0; $i < $n;$i++){
    $word = readline();
    if (!key_exists($word, $words)) {
        $words[$word] = [];
    }
    $synonym = readline();
    array_push($words[$word], $synonym);
}
uksort($words, function($key1, $key2) use ($words){
   $countSynonym1 = count($words[$key1]);
   $countSynonym2 = count($words[$key2]);

   if ($countSynonym1 === $countSynonym2) {
       return $key1 <=> $key2;
   }
   return $countSynonym2 <=> $countSynonym1;
});

//var_dump($words);

foreach ($words as $word => $synonym) {
    echo $word . " - " . implode(", ", $synonym) . PHP_EOL;
}