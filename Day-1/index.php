<?php
$content = file_get_contents("input.txt");

$result = substr_count($content, '(') - substr_count($content, ')');

function floorPosition($input, $floor) {
    $character = 1;
    for($i = 0; $i < strlen($input); $i++) {
        if($input[$i] == '(') {
            $character += 1;
        } else {
            $character -= 1;
        }

        if($character == $floor) {
            return $i;
        }
    }
}
echo floorPosition($content, '-1') . PHP_EOL;