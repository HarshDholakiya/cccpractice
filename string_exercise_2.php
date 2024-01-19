<?php
$text = "Hello, World! How are you doing?";
//1. Find the length of the string.
echo strlen($text),"<br>";
//2. Convert the entire string to lowercase.
echo strtolower($text),"<br>";
//3. Convert the entire string to uppercase.
echo strtoupper($text),"<br>";
//4. Replace "How are you doing?" with "Fine, thank you!".
echo str_replace("How are you doing?","Fine, thank you!",$text),"<br>";
//second way
//echo substr_replace($text,"Fine, thank you!",14);
//5. Extract and print the first 10 characters of the string.
echo substr($text,0,10),"<br>";
//6. Extract and print the substring starting from the 8th character to the end.
echo substr($text,7);
?>