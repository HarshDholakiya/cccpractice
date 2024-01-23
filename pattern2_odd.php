<?php
for($i=1;$i<=6;$i++)
{
    for($j=1;$j<=12-$i;$j++)
    {
        if($j<$i)
        {
            echo "-" . " ";
        }
        else
        echo $j . " ";
    }
    for($k=9;$k>10-$i;$k--)
    {
        echo "-" . " ";
    }
    echo "<br>";
}

for($i=5;$i>=1;$i--)
{
    for($j=1;$j<=12-$i;$j++)
    {
        if($j<$i)
        {
            echo "-" . " ";
        }
        else
        echo $j . " ";
    }
    for($k=9;$k>10-$i;$k--)
    {
        echo "-" . " ";
    }
    echo "<br>";
}   
?>