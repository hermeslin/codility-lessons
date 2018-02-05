<?php
function solution($A, $K)
{
    $total = count($A);
    if ($K == $total || 0 == $total) {
        return $A;
    }

    for ($i = 0; $i < $K; $i ++) {
        $lastElement = $A[$total - 1];
        array_pop($A);
        array_unshift($A, $lastElement);
   }
   return $A;
}