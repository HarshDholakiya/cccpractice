<?php
$sentence = "The quick brown fox jumps over the lazy dog";
//1. Find the position of the word "fox" in the sentence.
echo strpos($sentence,"fox"),"<br>";
//2. Check if the word "cat" is present in the sentence.
$check = strpos($sentence,"cat");
if($check>0){
    echo "cat is present","<br>";
}
else{
    echo "cat is not present in the given string","<br>";
}
//3. Extract and print the first 20 characters of the sentence.
echo substr($sentence,0,20);
?>