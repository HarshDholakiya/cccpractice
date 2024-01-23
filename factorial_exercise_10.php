<?php
function factorial($num) {
    if ($num < 0) {
       
        return "Undefined";
    } elseif ($num == 0 || $num == 1) {

        return 1;
    } else {
       
        $result = 1;
        for ($i = 2; $i <= $num; $i++) {
            $result *= $i;
        }
        return $result;
    }
}
$result = factorial(5);

echo "Factorial of 5 is: " . $result;

?>