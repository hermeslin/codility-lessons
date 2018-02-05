<?php
function  solution($A)
{
    $uBound = count($A) - 1;

    if (1 == $uBound) {
        return abs($A[0] - $A[1]);
    }

    $groupA = $A[0];
    $groupB = array_sum($A);

    // initial minimum
    $minimum = abs($groupA - ($groupB - $groupA));

    // reset $groupA
    $groupA = 0;

    for ($i = 0; $i < $uBound; $i ++) {

        $groupA += $A[$i];
        $groupB -= $A[$i];
        $result = abs($groupA - $groupB);
        $minimum = min($minimum, $result);
    }

    return $minimum;
}