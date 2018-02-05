<?php
function solution($N)
{
    // convert to binary and trim '0'
    $string = trim(decbin($N), 0);

    // split by zero
    preg_match_all('/0+/', $string, $match);

    if (0 >= count($match[0])) {
        return 0;
    }

    // counting string length
    $result = array_map(function ($value) {
        return strlen($value);
    }, $match[0]);

    return max($result);
}
