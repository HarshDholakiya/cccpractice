<?php
//If $a is 10% higher than $b then $b is how much lower than $a
$a = 110;
$b = 100;
$percent_difference = ($a - $b) / $a * 100;
echo "$b is " . number_format($percent_difference, 2) . "% lower than $a.";
?>  