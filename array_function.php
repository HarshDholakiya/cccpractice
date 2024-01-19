<?php
                    //1. Array Creation and Initialization:

//1.The array() function is used to create an array.

// In PHP, there are three types of arrays:
// Indexed arrays - Arrays with numeric index
// Associative arrays - Arrays with named keys
// Multidimensional arrays - Arrays containing one or more arrays

// Syntax for indexed arrays:
//     array(value1, value2, value3, etc.)

// Syntax for associative arrays:   
//     array(key=>value,key=>value,key=>value,etc.)

//example of associative array:
    //   $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
    //         echo "Peter is " . $age['Peter'] . " years old.";
            //output: Peter is 35 years old.
//another example with foreach loop:
        // $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
        // foreach($age as $x=>$x_value)
        //           {
        //             echo "Key=" . $x . ", Value=" . $x_value;
        //             echo "<br>";
        //           }
            //output:Key=Peter, Value=35
                  //  Key=Ben, Value=37
                   // Key=Joe, Value=43

//Multidimensional arrays:
//syntax:
// $cars=array
// (
// array("Volvo",100,96),
// array("BMW",60,59),
// array("Toyota",110,100)
// );

// 2. array_merge($array1, $array2):
// - Merges two or more arrays.
// $a1=array("red","green");
// $a2=array("blue","yellow");
// print_r(array_merge($a1,$a2));

// 3. array_combine($keys, $values):
// - Creates an array by using one array for keys and another for its values.
// Both arrays must have equal number of elements!

// $fname=array("Peter","Ben","Joe");
// $age=array("35","37","43");
// $c=array_combine($fname,$age);
// print_r($c);

// 4. range($start, $end, $step):
// - Creates an array containing a range of elements.
// $number = range(0,5);
// print_r ($number);

                             //2. Array Modification:

// 5. array_push($array, $element) or $array[] = $element:
//            - Adds one or more elements to the end of an array.
        //    $a=array("red","green");
        //    array_push($a,"blue","yellow");
        //    print_r($a);
//IMP NOTE :  Even if your array has string keys, your added elements will always have numeric keys (See example below
//EXAMPLE OF ABOVE NOTE:
// $a=array("a"=>"red","b"=>"green");
// array_push($a,"blue","yellow");
// print_r($a); //OUTPUT:Array ( [a] => red [b] => green [0] => blue [1] => yellow )

// 6. array_pop($array):
//            - Removes the last element from an array.
 //EXAMPLE:
        //   $hd = array("a","b","c","d");
        //   array_pop($hd);
        //   print_r($hd);

// 7. array_unshift($array, $element):
//          - Adds one or more elements to the beginning of an array.
// $fruits = ["orange", "banana", "apple"];
// array_unshift($fruits, "grape", "kiwi");
// print_r($fruits);

// 8. array_shift($array):
//            - Removes the first element from an array.

// $fruits = array("apple","kiwi","mango");
// array_shift($fruits);
// print_r($fruits);

// 9. array_splice($array, $start, $length, $replacement):
//            - Removes a portion of the array and replaces it with something else.
// $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
// $a2=array("a"=>"purple","b"=>"orange");
// array_splice($a1,0,2,$a2);
// print_r($a1);
//output:Array ( [0] => purple [1] => orange [c] => blue [d] => yellow )

                                 //3 Array Access:

//  10. count($array):
//     -Counts the number of elements in an array.
//         $cars=array("Volvo","BMW","Toyota");
//          echo count($cars);

 // 11. sizeof($array):- Alias of count().
        //  The sizeof() function returns the number of elements in an array.
        //  The sizeof() function is an alias of the count() function.

// 12. array_key_exists($key, $array):
        //     - Checks if the given key or index exists in the array.
        //example:
        // $a=array("Volvo"=>"XC90","BMW"=>"X5");
        // if (array_key_exists("Toyota",$a))
        //   {
        //   echo "Key exists!";
        //   }
        // else
        //   {
        //   echo "Key does not exist!";
        //   }
// The array_key_exists() function checks an array for a specified key, and returns true if the key exists and false if the key does not exist.
//Tip: Remember that if you skip the key when you specify an array, an integer key is generated, starting at 0 and increases by 1 for each value
     
// 13. array_keys($array):
     //     - Returns all the keys or a subset of the keys of an array.
     // $a=array("Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander");
    //print_r(array_keys($a));
    //other format : array_keys(array, value, strict):
    //in this array	Required. Specifies an array
// value	Optional. You can specify a value, then only the keys with this value are returned
// strict	Optional. Used with the value parameter. Possible values:
// true - Returns the keys with the specified value, depending on type: the number 5 is not the same as the string "5".
// false - Default value. Not depending on type, the number 5 is the same as the string "5".
//example:$a=array("Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander");
              //print_r(array_keys($a,"Highlander"));        
            //output:Array ( [0] => Toyota )

// 14. array_values($array):
        //     - Returns all the values of an array.
        // $a=array("Name"=>"Harsh","Age"=>"21","Country"=>"INDIA");
        // print_r(array_values($a));

                                 //4. Array Search:

// 15. in_array($needle, $haystack):
        //     - Checks if a value exists in an array.
            // $fruits = array("apple", "banana", "orange", "grape");
            // $needle = "banana";

            // if (in_array($needle, $fruits)) {
            //       echo "$needle exists in the array.";
            //      } else {
            // echo "$needle does not exist in the array.";
            //  }
//16. array_search($needle, $haystack):
        //- Searches an array for a given value and returns the corresponding key.
        // $a=array("a"=>"red","b"=>"green","c"=>"blue");
        // echo array_search("red",$a);  //OUTPUT:a

// 17. array_reverse($array):
//          - Returns an array with elements in reverse order.
//             $a=array("a"=>"Volvo","b"=>"BMW","c"=>"Toyota");
//              print_r(array_reverse($a));

                             //5. Array Sorting:

// 18. sort($array):
//     - Sorts an array.
//     $cars = array("Volvo", "BMW", "Toyota");
// sort($cars);

// foreach ($cars as $key => $val) {
//     echo "cars[" . $key . "] = " . $val . "<br>";
// }

// 19. rsort($array):
//     - Sorts an array in reverse order.
//     $numbers=array(4,6,2,22,11);
// rsort($numbers);

// $arrlength=count($numbers);
// for($x=0;$x<$arrlength;$x++)
//   {
//   echo $numbers[$x];
//   echo "<br>";
//   }
// 20. asort($array):
//     - Sorts an associative array by values.
// The asort() function sorts an associative array in ascending order, according to the value.

// $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
// asort($age);

// foreach($age as $x=>$x_value)
//    {
//    echo "Key=" . $x . ", Value=" . $x_value;
//    echo "<br>";
//    }

// 21. ksort($array):
//     - Sorts an associative array by keys.
// $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
// ksort($age);

// foreach($age as $x=>$x_value)
//    {
//    echo "Key=" . $x . ", Value=" . $x_value;
//    echo "<br>";
//    }
//output:  
// Key=Ben, Value=37
// Key=Joe, Value=43
// Key=Peter, Value=35

// 22. arsort($array):
//     - Sorts an associative array in reverse order by values.
       //same example as used in asort() but output we will get in the reverse order.
// 23. krsort($array):
//     - Sorts an associative array in reverse order by keys.
    //same example as used in ksort() but output will get in the reverse order.

                                      //6. Array Filtering:

// 24. array_filter($array, $callback):
//         - Filters elements of an array using a callback function.
// $numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
// Filter numbers greater than 5 using a callback function
// $filteredNumbers = array_filter($numbers, function($value) {
//     return $value > 5;
// });
// echo "Numbers greater than 5: " . implode(", ", $filteredNumbers);

// 25. array_map($callback, $array):
    //         - Applies a callback function to each element of an array.
    // $numbers = array(1, 2, 3, 4, 5);

// Double each number using a callback function
    // $doubledNumbers = array_map(function($value) {
    // return $value * 2;
    // }, $numbers);
    // print_r($doubledNumbers);

 // 26. array_reduce($array, $callback, $initial):
    //  - Iteratively reduces the array to a single value using a callback function.
    // function myfunction($v1, $v2) {
    //     return $v1 + $v2;
    // }
    
    // $a = array(10, 15, 20);
    
    // $result = array_reduce($a, "myfunction", 5);
    
    // print_r($result);
    //output:50

                                //7. Array Slicing:

    //27. array_slice($array, $offset, $length, $preserve_keys):
            // - Extracts a portion of the array.
    //    array	Required. Specifies an array
    //    start	Required. Numeric value. Specifies where the function will start the slice. 0 = the first element. If this value is set to a negative number, the function will start slicing that far from the last element. -2 means start at the second last element of the array.
    //    length	Optional. Numeric value. Specifies the length of the returned array. If this value is set to a negative number, the function will stop slicing that far from the last element. If this value is not set, the function will return all elements, starting from the position set by the start-parameter.
    //     preserve	Optional. Specifies if the function should preserve or reset the keys. Possible values:
    //                    true - Preserve keys
    //                    false - Default. Reset key
    //example:
    // $a=array("red","green","blue","yellow","brown");
    // print_r(array_slice($a,-2,1));
    //output:Array ( [0] => yellow )

    // 28. array_splice($array, $offset, $length, $replacement):
    //    - Removes a portion of the array and replaces it with something else.
    //If the function does not remove any elements (length=0), the replaced array will be inserted from the position of the start parameter 
            // $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
            // $a2=array("a"=>"purple","b"=>"orange");
            // array_splice($a1,0,2,$a2);
            // print_r($a1);
    //output:Array ( [0] => purple [1] => orange [c] => blue [d] => yellow )






        
     

       
?>