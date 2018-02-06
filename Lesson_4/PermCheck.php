<?php
function solution($A)
{
    if (!is_array($A)) {
        return 0;
    }

    sort($A);
    $result = 1;
    $total = count($A);

    for ($i = 0; $i < $total; $i++) {
        if ($A[$i] !== $result) {
            return 0;
        }
        $result ++;
    }

    return 1;
}