<?php
//1.strlen
// echo strlen("ABCDE");  //Returns the length of a string.

//2. str_replace($search, $replace, $subject):

//This function is case-sensitive.->Replaces all occurrences of a substring with another substring in a given string.
//Use the str_ireplace() function to perform a case-insensitive search.
//example of string:
// echo str_replace("hard", "easy", "Replacing a string in PHP is hard." );
//example of array:
// $find = array("Hello","world");
// $replace = array("B");
// $arr = array("Hello","!");
// print_r(str_replace($find,$replace,$arr));

//3.strpos($haystack, $needle): Finds the position of the first occurrence of a substring in a string.

// echo strpos("I love php, I love php too!","php");
// echo strpos("my name is harsh","harsh");

//4.substr($string, $start, $length): Returns a part of a string starting from the specified position and with a specified length.

// echo substr("i am harsh dholakiya",3,7);

//5.strtolower($string):
echo strtolower("HELLO EVERYONE MY NAME IS HARSH");

?>
