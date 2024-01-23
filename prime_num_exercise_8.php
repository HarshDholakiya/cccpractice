<?php
function check_prime($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= $number/2; $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

$number = 17;
if (check_prime($number)) {
    echo "$number is a prime number.";
} else {
    echo "$number is not a prime number.";
}
?>
