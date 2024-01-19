<?php
//                             ** Data types: **

// 1. Integer
//    - Represents whole numbers without a decimal point.
//    	$integerVar = 8;  
//example:
// $integerVar = 8;  
// var_dump($integerVar);

// 2. Float 
//    - Represents numbers with a decimal point.
//    	$floatVar = 3.14;
// $floatVar = 3.14;
// var_dump($floatVar);

// 3. String
//    - Represents a sequence of characters.
// $stringVar = "Hello, PHP!";
// var_dump($stringVar);

// 4.Boolean
//     - Represents either `true` or `false`.
        // $boolVar = true;
        // var_dump($boolVar);

//  5. Array
//      - Represents an ordered map that can hold multiple values.
        // $arrayVar = array(1, 2, 3, "PHP");
        // var_dump($arrayVar); //output:array(4) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> string(3) "PHP" }
 //   6. NULL
    //     - Represents the absence of a value or a variable without a value.
            // $nullVar = null;  
            // var_dump($nullVar);  
            
//                          **Type Casting:**
// (string) - Converts to data type String
// (int) - Converts to data type Integer
// (float) - Converts to data type Float
// (bool) - Converts to data type Boolean
// (array) - Converts to data type Array
// (unset) - Converts to data type NULL
//Example:
// $a = 5;       // Integer
// $b = 5.34;    // Float
// $c = "hello"; // String
// $d = true;    // Boolean
// $e = NULL;    // NULL
// $f = array("harsh","5");  //array

// 1.Cast to String
// To cast to string, use the (string) statement:
// $a = (string) $a;
// $b = (string) $b;
// $c = (string) $c;
// $d = (string) $d;
// $e = (string) $e;
// $f = implode(" ",$f) ;  //to convert array to string we use implode function

//To verify the type of any object in PHP, use the var_dump() function:
// var_dump($a);
// var_dump($b);
// var_dump($c);
// var_dump($d);
// var_dump($e);
// var_dump($f);

// 2.Cast to Integer
//  To cast to integer, use the (int) statement:
// $a = (int) $a;
// $b = (int) $b;
// $c = (int) $c;
// $d = (int) $d;
// $e = (int) $e;
// $f = (int) $f;  
// var_dump($a);
// var_dump($b);
// var_dump($c);
// var_dump($d);
// var_dump($e);
// var_dump($f);

//3.Cast to Float
// To cast to float, use the (float) statement:
// $a = (float) $a;
// $b = (float) $b;
// $c = (float) $c;
// $d = (float) $d;
// $e = (float) $e;
// $f = (float) $f;  
// var_dump($a);
// var_dump($b);
// var_dump($c);
// var_dump($d);
// var_dump($e);
// var_dump($f);

//4. Cast to Boolean
// To cast to boolean, use the (bool) statement:
// $a = (bool) $a;
// $b = (bool) $b;
// $c = (bool) $c;
// $d = (bool) $d;
// $e = (bool) $e;
// $f = (bool) $f;  
// var_dump($a);
// var_dump($b);
// var_dump($c);
// var_dump($d);
// var_dump($e);
// // var_dump($f);

//5. Cast to Array
// To cast to array, use the (array) statement
// $a = (array) $a;
// $b = (array) $b;
// $c = (array) $c;
// $d = (array) $d;
// $e = (array) $e;
 
// var_dump($a);
// var_dump($b);
// var_dump($c);
// var_dump($d);
// var_dump($e);
// var_dump($f);
//output: array(1) { [0]=> int(5) } array(1) { [0]=> float(5.34) } array(1) { [0]=> string(5) "hello" } array(1) { [0]=> bool(true) } array(0) { } array(2) { [0]=> string(5) "harsh" [1]=> string(1) "5" }

//6.Cast to NULL
//To cast to NULL, use the (unset) statement:
// i am facing an error in my browser in unset
// $a = unset($a);
// $b = unset($b);
// $c = unset($c);
// $d = unset($d) ;
// $f = unset($f) ;  
// var_dump($a);
// var_dump($b);
// var_dump($c);
// var_dump($d);
// var_dump($e);
// var_dump($f);

//                             **Math Functions:**

                       //*Basic Arithmetic
// 1.abs($number): Returns the absolute value of a number.

// $number = -8;
// $number2 = 8;
// echo abs($number);
// echo abs($number2);

//2. ceil($number): Rounds a number up to the nearest integer.
//   $number = 5.3;
//   echo ceil($number);
//  Output: Rounded up value of 4.3 is: 6

//3. floor($number): Rounds a number down to the nearest integer.
// $number = 8.9;
// echo floor($number);

//4. round($number, $precision): Rounds a number to the nearest integer or specified number of decimal places.

// $number = 8.459;
// echo round($number, 2); // Round to 2 decimal places
//if echo round($number) //then output will be 8 and if value is 8.559 then output will be 9
// Output: Rounded value of 8.459 is: 8.46

                              //* Power Functions
// 1.`pow($base, $exponent)`: 
// Returns the value of a base raised to the power of an exponent.
//example: 
// echo pow(3, 2),"<br>";
// echo pow(2,5);
//2.`sqrt($number)`: Returns the square root of a number.
//echo sqrt(25); //Output : 5 
//echo sqrt(-25); //Output : NaN

                               // *Random Number Generation
// -`rand($min, $max)`: 
// Generates a random integer between the specified minimum and maximum
// $min = 5;
// $max=85;
// echo rand($min, $max);

                                //  *. Number Formatting
// - `number_format($number, $decimals, $decimal_point, $thousands_separator)`: 
// Formats a number with grouped thousands and a specified number of decimals.
//example:
// $number = 1234567.89;
// $formattedNumber = number_format($number, 2, '.', ',');
// echo $formattedNumber;
// $number: The number you want to format .
// 2: The number of decimal places you want to display.
// '.': The decimal point separator.
// ',': The thousands separator.
// Output: 1,234,567.89

                                   //**PHP Operators **
// $a = 10;
// $b = 3;                                
// 1. Arithmetic Operators:

// 1. Addition
// $additionResult = $a + $b;
// echo "Addition: $a + $b = $additionResult<br>";
// 2. Subtraction
// $subtractionResult = $a - $b;
// echo "Subtraction: $a - $b = $subtractionResult<br>";
// 3. Multiplication
// $multiplicationResult = $a * $b;
// echo "Multiplication: $a * $b = $multiplicationResult<br>";
// 4. Division
// $divisionResult = $a / $b;
// echo "Division: $a / $b = $divisionResult<br>";
// 5. Modulus (Remainder)
// $modulusResult = $a % $b;
// echo "Modulus (Remainder): $a % $b = $modulusResult<br>";
// 6. Exponentiation (PHP 5.6 and later)
// $exponentiationResult = $a ** $b;
// echo "Exponentiation: $a ** $b = $exponentiationResult<br>";

                     //2. Assignment Operators:
// 7. Assignment
// $assignmentResult = $a = $b;
// echo "Assignment:  $assignmentResult<br>";

// 8. Addition Assignment
// $a = 10;
// $a += $b;
// echo "Addition Assignment:$a<br>";

//  9. Subtraction Assignment
// $a = 10;
// $a -= $b;
// echo "Subtraction Assignment: $a<br>";

//  10. Multiplication Assignment
// $a = 10;
// $a *= $b;
// echo "Multiplication Assignment: $a<br>";

// 11. Division Assignment
// $a = 10;
// $a /= $b;
// echo "Division Assignment: $a<br>";

// 12. Modulus Assignment
// $a = 10;
// $a %= $b;
// echo "Modulus Assignment:  $a<br>";
                                //3. Comparison Operators:
// 13. Equal
// if ($a == $b) {
//     echo "$a is equal to $b<br>";
// } else {
//     echo "$a is not equal to $b<br>";
// }

// // 14. Identical
// if ($a === $b) {
//     echo "$a is identical to $b<br>";
// } else {
//     echo "$a is not identical to $b<br>";
// }

// // 15. Not Equal
// if ($a != $b) {
//     echo "$a is not equal to $b<br>";
// } else {
//     echo "$a is equal to $b<br>";
// }

// // Alternate syntax for Not Equal
// if ($a <> $b) {
//     echo "$a is not equal to $b <br>";
// } else {
//     echo "$a is equal to $b <br>";
// }

// // 16. Not Identical
// if ($a !== $b) {
//     echo "$a is not identical to $b<br>";
// } else {
//     echo "$a is identical to $b<br>";
// }

// // 17. Greater Than
// if ($a > $b) {
//     echo "$a is greater than $b<br>";
// } else {
//     echo "$a is not greater than $b<br>";
// }

// // 18. Less Than
// if ($a < $b) {
//     echo "$a is less than $b<br>";
// } else {
//     echo "$a is not less than $b<br>";
// }

// // 19. Greater Than or Equal To
// if ($a >= $b) {
//     echo "$a is greater than or equal to $b<br>";
// } else {
//     echo "$a is not greater than or equal to $b<br>";
// }

// // 20. Less Than or Equal To
// if ($a <= $b) {
//     echo "$a is less than or equal to $b<br>";
// } else {
//     echo "$a is not less than or equal to $b<br>";
// }

                        //4. Logical Operators:
// $a = true;
// $b = false;

// 21. Logical AND
// if ($a && $b) {
//     echo "$a AND $b is true<br>";
// } else {
//     echo "$a AND $b is false<br>";
// }

//  22. Logical OR
// if ($a || $b) {
//     echo "$a OR $b is true<br>";
// } else {
//     echo "$a OR $b is false<br>";
// }

//  23. Logical NOT
// if (!$a) {
//     echo "NOT $a is true<br>";
// } else {
//     echo "NOT $a is false<br>";
// }

// 5. Increment and Decrement Operators:
// Post incrementing	$a++;	Returns the value of $a and then adds 1 to the value
// Post decrementing	$a--; 	Returns the value of $a and then subtract 1 from the value
// Pre incrementing	++$a;	Adds 1 to the value of $a and then returns the new value
// Pre decrementing	--$a; 	Subtract 1 from the value of $a and returns the new value

//example:
// Post Incrementing Operator
// $a = 8;
// $b = $a++;
// echo $b; //Returns the value 8.
// echo $a; //Returns the value 9.

// Post Decrementing Operator
// $a = 10;
// $b = $a--;
// echo $b; // Returns the value 10.
// echo $a; // Returns the value 9.

// Pre Incrementing Operator
// $a = 8;
// $b = ++$a;
// echo $b; // Returns the value 9.
// echo $a; // Returns the value 9.

// Pre Decrementing Operator
// $a = 10;
// $b = --$a;
// echo $b; // Returns the value 9.
// echo $a; // returns the value 9.


                          //6. String Operators:
// 26. Concatenation:
//  - `$a . $b`

// First String 
// $a = 'Harsh';  
// // Second String 
// $b = 'Dholakiya!'; 
// // Concatenation Of String 
// $c = $a.$b; 
// // print Concatenate String 
// echo " $c \n";

// 27. Concatenation Assignment:
//   - `$a .= $b`
//example:
// $a = 123;
// $b = "456";
// $a .= $b;
// echo $a;

                    //7. Conditional (Ternary) Operator:
// 28.. Ternary:
//     - `$a ? $b : $c
           //$variable = $condition ? $value_if_true : $value_if_false;
//example:
// $age = 25;
// $result = ($age >= 18) ? "Adult" : "Minor";

// echo "The person is a " . $result . "\n";   //output:The person is a Adult    


                                      // Statements :	
//1.If Statement:
//The `if` statement is used to execute a block of code if a specified condition is true.
//example:
// $temperature = 25;
// if ($temperature > 30) {
//     echo "It's a hot day!"; // This block will be executed if the condition is true.
// } 

//2.If-Else Statement:
// The `if-else` statement allows you to execute one block of code if a condition is true and another block if the condition is false.
//example:
// $temperature = 2;
// // Example if-else statement
// if ($temperature > 20) {
//     echo "It's a hot day!"; // This block will be executed if the condition is true.
// } else {
//     echo "It's not too hot today."; // This block will be executed if the condition is false.
// }

//3.If-Elseif-Else Statement:
// The `if-elseif-else` statement allows you to check multiple conditions in sequence.
// $grade = 85;
// // Example if-elseif-else statement
// if ($grade >= 90) {
//     echo "Excellent! You got an A.";
// } elseif ($grade >= 80) {
//     echo "Good job! You got a B.";
// } elseif ($grade >= 70) {
//     echo "Well done! You got a C.";
// } else {
//     echo "Sorry, you failed. You got an F.";
// }

// 4.Nested If Statements:
// You can also nest `if` statements inside each other to create more complex conditional logic.
// $age = 23;  
// $nationality = "Indian";  
// //applying conditions on nationality and age  
// if ($nationality == "Indian")  
// {  
//     if ($age >= 18) {  
//         echo "Eligible to give vote";  
//     }  
//     else {    
//         echo "Not eligible to give vote";  
//     }  
// }  

//5.Switch Case :
//Certainly! The `switch` statement in PHP is used for efficient conditional operations where you have a single expression that you want to compare to multiple possible values. Here's an example of how to use the `switch` statement for training:
    // $favcolor = "red";

    // switch ($favcolor) {
    //   case "red":
    //     echo "Your favorite color is red!";
    //     break;
    //   case "blue":
    //     "Your favorite color is blue!";
    //     break;
    //   case "green":
    //     echo "Your favorite color is green!";
    //     break;
    //   default:
    //     echo "Your favorite color is neither red, blue, nor green!";
    // }

                                        //**LOOPS:**
    
// 1. For Loop:
// The `for` loop is used when you know in advance how many times the loop should run.  
//example:
// for ($x = 0; $x <= 10; $x++) {
//     echo "The number is: $x <br>";
//  }

//2. While Loop:
//The `while` loop is used when you don't know in advance how many times the loop should run, and it continues as long as a specified condition is true.
//example:
// $i = 1;
// while ($i < 6) {
//   echo $i;
//   $i++;
// }

//3.Foreach Loop:
//The `foreach` loop is specifically designed for iterating over arrays.
//example.
// $colors = array("red", "green", "blue", "yellow");

// foreach ($colors as $x) {
//   echo "$x <br>";
// }

?>