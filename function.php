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
// $arr = array("Hello","!","world");
// print_r(str_replace($find,$replace,$arr));

//3.strpos($haystack, $needle): Finds the position of the first occurrence of a substring in a string.

// echo strpos("I love php, I love php too!","php");
// echo strpos("my name is harsh","harsh");

//4.substr($string, $start, $length): Returns a part of a string starting from the specified position and with a specified length.

// echo substr("i am harsh dholakiya",3,7);

//5.strtolower($string):
// echo strtolower("HELLO EVERYONE MY NAME IS HARSH");

// 6.strtoupperstrtoupper($string): Converts a string to uppercase.
// echo strtoupper("hello everyone");

//7.trim($string): Removes whitespace or other predefined characters from the beginning and end of a string.
// PHP program using trim() 
// If omitted, all of the following characters are removed:
// "\0" - NULL
// "\t" - tab
// "\n" - new line
// " " - ordinary white space
  
// $str = "  Hire freelance developer ";
//  leading and trailing whitespaces are removed
// echo $str;

// removing the predefined character using trim
// $str = "Hire freelance developer";
// echo trim($str, "Hir");

//8.implode($glue, $pieces) Function : Join array elements with a string
// $arr = array('Hello','World!','Beautiful','Day!');
// echo implode(" ",$arr);

//9.explode() : Splits a string into an array by a specified delimiter.

// print_r(explode(" ", "Geeks for Geeks"));

// $OriginalString = "Hello, How can we help you?";
 
// Without optional parameter NoOfElements
//print_r(explode(" ", $OriginalString));
 
// With positive NoOfElements
//print_r(explode(" ", $OriginalString, 5)); // first N-1 elements remain the same and the last element is the whole remaining string.
 
// With negative NoOfElements
//print_r(explode(" ", $OriginalString, -1)); //If the negative value is passed as a parameter then the last N element of the array will be trimmed out and the remaining part of the array shall be returned as a single array.
 
//10.htmlentities($string): Convert the predefined characters "<" (less than) and ">" (greater than) to HTML entities:
// $str = "This is some <b>bold</b> text.";
// echo htmlspecialchars($str);
//& (ampersand) becomes &amp;
// " (double quote) becomes &quot;
// ' (single quote) becomes &#039;
// < (less than) becomes &lt;
// > (greater than) becomes &gt;

//11.str_repeat($string, $multiplier):Repeats a string a specified number of times.
//echo str_repeat("harsh",13);

//12.strrev($string):Reverses a string.
//echo strrev("Harsh Dholakiya!");

//13.str_shuffle($string):Randomly shuffles all characters in a string.
//echo str_shuffle("Harsh Dholakiya");

//14.str_split(string,length): Converts a string to an array, breaking it into smaller chunks
//string	Required. Specifies the string to split
//length	Optional. Specifies the length of each array element. Default is 1
// print_r(str_split("Harsh",3));
// print_r(str_split("Hello"));

//15.str_word_count($string): Returns the number of words in a string.

//echo str_word_count("harsh dholakiya!");

?>
