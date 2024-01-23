<?php
function fibo($num){
    $num1 = 0;
    $num2 = 1;
    $fibonacciSequence = array($num1, $num2);

    while ($num > 2){
        $num3 = $num1 + $num2;
        $num1 = $num2;
        $num2 = $num3;
        $fibonacciSequence[] = $num3;
        $num--;
    }

    echo implode(", ", $fibonacciSequence);
}

fibo(4);


?>