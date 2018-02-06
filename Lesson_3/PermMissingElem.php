<?php
function solution($A)
{
    $total = count($A);
    sort($A);

    $result = 1;

    for($i = 0; $i < $total; $i ++) {
        if ($result !== $A[$i]) {
            return $result;
        }
        $result ++;
    }

    return $result;
}