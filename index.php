<?php
// $words =  ["papaya", "mango", "apricot", "banana"];

$words = file("words.txt");

$word = rtrim($words[array_rand($words)]);
echo $word;
echo "<br>";
$wordLength = strlen($word);
echo $wordLength;
echo "<br>";
for($i=1; $i<=$wordLength; $i++){
    echo "_ ";
}