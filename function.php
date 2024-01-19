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
//output: Array ( [0] => B [1] => ! [2] => )//because in replace array only one element is there

//3.strpos($haystack, $needle): Finds the position of the first occurrence of a substring in a string.

// echo strpos("I love php, I love php too!","php");
// echo strpos("my name is harsh","harsh");

//4.substr($string, $start, $length): Returns a part of a string starting from the specified position and with a specified length.

// echo substr("i am harsh dholakiya",3,7);

//5.strtolower($string):
// echo strtolower("HELLO EVERYONE MY NAME IS HARSH");

// 6.strtoupper($string): Converts a string to uppercase.
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
// echo trim($str);

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
// print_r(explode(" ", $OriginalString, 5)); // first N-1 elements remain the same and the last element is the whole remaining string.
 //output:Array ( [0] => Hello, [1] => How [2] => can [3] => we [4] => help you? )
// With negative NoOfElements
// print_r(explode(" ", $OriginalString, -1)); //If the negative value is passed as a parameter then the last N element of the array will be trimmed out means remove that word from string and the remaining part of the array shall be returned as a single array.
 //output:Array ( [0] => Hello, [1] => How [2] => can [3] => we [4] => help )
//with zero 
//print_r(explode(" ",$originalstring,0)); //consider a single entity which means at 0th index whole string is available.


//10.htmlspecialchars($string):
//onverts special characters to HTML entities.
//Convert the predefined characters "<" (less than) and ">" (greater than) to HTML entities:
//example :
// $str = "This is some <b>bold</b> text.";
// echo htmlspecialchars($str);   //output: This is some &lt;b&gt;bold&lt;/b&gt; text. in view page source

//& (ampersand) becomes &amp;
// " (double quote) becomes &quot;
// ' (single quote) becomes &#039;
// < (less than) becomes &lt;
// > (greater than) becomes &gt;

//11.htmlentities($string):
//The htmlentities() function converts characters to HTML entities
//To convert HTML entities back to characters, use the html_entity_decode() function.
//example:
// $str = '<a href="https://www.w3schools.com">Go to w3schools.com</a>';
// echo htmlentities($str); //output be like :&lt;a href=&quot;https://www.w3schools.com&quot;&gt;Go to w3schools.com&lt;/a&gt;


//12.str_repeat($string, $multiplier):Repeats a string a specified number of times.
//echo str_repeat("harsh",13);

//13.strrev($string):Reverses a string.
//echo strrev("Harsh Dholakiya!");

//14.str_shuffle($string):Randomly shuffles all characters in a string.
//echo str_shuffle("Harsh Dholakiya");

//15.str_split(string,length): Converts a string to an array, breaking it into smaller chunks
//string Required. Specifies the string to split
//length Optional. Specifies the length of each array element. Default is 1
// print_r(str_split("Harsh",3));
// print_r(str_split("Hello"));

//16.str_word_count($string): Returns the number of words in a string.

//echo str_word_count("harsh dholakiya!");
// other format of this function:
    //str_word_count(string,return,char)
    // here string	Required. Specifies the string to check
    // return	Optional. Possible values: 
    // 0 - Default. Returns the number of words found
    // 1 - Returns an array with the words from the string
    // 2 - Returns an array where the key is the position of the word in the string, and value is the actual word
    // char	Optional. Specifies special characters to be considered as words.
    
// $str = "Hello world! This is a sample string.";
// $wordPositionArray = str_word_count($str, 1);
// print_r($wordPositionArray);

//17.substr_replace($string, $replacement, $start, $length): 

//Replaces a portion of a string with another string.

// in here string , replacement and start is required field and lenth is optional
// different cases:

//  echo substr_replace("Hello world hello","earth",4);
 //output:Hellearth //because not specified lenth
//  echo substr_replace("Hello world hello","earth",4,1);
 //output:Hellearth world hello //only one char is replace
//  echo substr_replace("Hello world hello","earth",-4);
 //output:Hello world hearth //last index thi count
//  echo substr_replace("Hello world hello","earth",0);
 //output:earth
//  echo substr_replace("Hello world hello","earth",0,0);
 //output:earthHello world hello
//  echo substr_replace("Hello world hello","earth",4,-3);
 //output:Hellearthllo  //because minus length will do cut alphabet at that length from right and then add it to final output
//  echo substr_replace("Hello world hello","earth",-4,-4);
 //output:Hello world hearthello

//18.str_pad(string,length,pad_string,pad_type) : The str_pad() function pads a string to a new length.
// string	Required. Specifies the string to pad
// length	Required. Specifies the new string length. If this value is less than the original length of the string, nothing will be done
// pad_string	Optional. Specifies the string to use for padding. Default is whitespace
// pad_type	Optional. Specifies what side to pad the string.
// Possible values:

// STR_PAD_BOTH - Pad to both sides of the string. If not an even number, the right side gets the extra padding
// STR_PAD_LEFT - Pad to the left side of the string
// STR_PAD_RIGHT - Pad to the right side of the string. This is default

//example:--
// $str = "Harsh Dholakiya";
// echo str_pad($str,20,".",STR_PAD_LEFT);

//19.strcoll($string1, $string2):

//strcoll() is an inbuilt string function of PHP, which is used to compare two strings. It is a locale based string comparison.
//It is important to notice that the comparison done by strcoll() function is case-sensitive as strcmp()
// Return 0 - It returns 0 if both strings are equal, i.e., $str1 = $str2
// Return < 0 - It returns negative value (<0), if first string is lesser than second string, i.e., $str1 < $str2
// Return > 0 - It will return positive value (>0), if first string is greater than second string, i.e., $str1 > $str2
//Example : 
// $str1 = "hello php";  
    // $str2 = "hello php";  
    // echo strcoll($str1, $str2). " because both strings are equal. ";  
    // echo strcoll("Hello PHP", "Hello"). " because the first string is greater than the second string.";  

//20.strcspn(string,char,start,length):
// string	Required. Specifies the string to search
// char	Required. Specifies the characters to search for
// start	Optional. Specifies where in string to start
// length	Optional. Specifies the length of the string (how much of the string to search)

//Example:
//echo strcspn("Harsh Dholakiya","h"); //output:4 count untill first h is found in the string
//echo strcspn("Harsh Dholakiya","h",2); //output:2 begin with after 2 alpha
//echo strcspn("Harsh Dholakiya","h",2,1); //output:1 because we mentioned at last length of the string which is 1 so.

//21.stristr(string,search,before_search)
//Case-insensitive search for the first occurrence of a string.
//For a case-sensitive search, use strstr() function.
// string Required. Specifies the string to search
// search Required. Specifies the string to search for. If this parameter is a number, it will search for the character matching the ASCII value of the number
// before_search Optional. A boolean value whose default is "false".
// If set to "true", it returns the part of the string before the first occurrence of the search parameter.

//example:

// echo stristr("Hello sworld!","WORLD",true); //output:Hello s because of true default value is false
// echo stristr("Hello sworld!s","WORLD");  //output:world!s

//22.ucfirst($string):
//Converts the first character of a string to uppercase.
//likewise lcfirst() is also there
//example
//echo ucfirst("harsh dholakiya!");

//23. ucwords($string):
//Converts the first character of each word in a string to uppercase.

//example:
//echo ucwords("harsh dholakiya"); //output: Harsh Dholakiya


?>
