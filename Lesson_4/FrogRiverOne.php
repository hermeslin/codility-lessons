<?php
function solution($X, $A)
{
    $total = count($A);
    $tmp = [];
    $counter = 1;

    for($i = 0; $i < $total; $i ++) {
        $step = $A[$i];

        $tmp[$step] = true;

        if (count($tmp) == $X) {
            return $i;
        }
    }
    return -1;
}