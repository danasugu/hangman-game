<?php

// $words =  ["papaya", "mango", "apricot", "banana"];
$words = file("words.txt");

$word = $words[array_rand($words)];

$wordLength = strlen($word);

for($i=1; $i<=$wordLength; $i++){
    echo "_ ";
}