<?php
$content = file_get_contents("input.txt");

$x = 0;
$y = 0;
$rx = 0;
$ry = 0;

$map = [];
/**
 * ^ = y + 1;
 * v = y -1;
 * < = x -1;
 * > = x +1;
 */

for($i = 0; $i < strlen($content); $i++) {
    if($content[$i] == '^') {
        $i % 2 ? $y++ : $ry++;
    }
    if($content[$i] == 'v') {
        $i % 2 ? $y-- : $ry--;
    }
    if($content[$i] == '>') {
        $i % 2 ? $x-- : $rx--;
    }
    if($content[$i] == '<') {
        $i % 2 ? $x++ : $rx++;
    }

    if(!in_array([$x, $y], $map)) {
        $map[$i] = [$x, $y];
    } elseif(!in_array([$rx, $ry], $map)) {
        $map[$i] = [$rx, $ry];
    }
}
echo count($map)." children receive atleast one present." . PHP_EOL;