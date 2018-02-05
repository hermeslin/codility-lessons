<?php
function solution($A)
{
    $total = count($A);
    $result = 0;

    for ($i = 0; $i < $total; $i++) {
        $result ^= $A[$i];
    }
    return $result;
}