<?php
$name = "John";
//1. Pad the string with underscores (`_`) on the left side to make its total length 10 characters
 $string1 = str_pad($name,10,"_",STR_PAD_LEFT);
//2. Pad the string with asterisks (`*`) on the right side to make its total length 8 characters.
 $string2 = str_pad($name,8,"*");//default is right side if nothing is mentioned
//3.Print the resulting strings.
echo $string1,"<br>";
echo $string2;
?>