<?php
$file = file('input.txt');

function wrappingPaper($length, $width, $height) {
    $lowest = min([$length*$width, $width*$height, $height*$length]);
    return 2*$length*$width +  2*$width*$height + 2*$height*$length + $lowest;
}

function ribbonLength($length, $width, $height) {
    $array = [$length, $width, $height];
    sort($array, SORT_NUMERIC);

    $ribbon = ($array[0] + $array[0]) + ($array[1] + $array[1]);
    return ($length * $width * $height) + $ribbon;
}

function total($input) {
    $paper = 0;
    $ribbon = 0;
    foreach($input as $present) {
        $sides = explode('x', $present);
        $paper += wrappingPaper($sides[0], $sides[1], $sides[2]);
        $ribbon += ribbonLength($sides[0], $sides[1], $sides[2]);
    }
    return [$paper, $ribbon];
}

echo $part_1 = total($file)[0] . PHP_EOL;

echo $part_2 = total($file)[1] . PHP_EOL;