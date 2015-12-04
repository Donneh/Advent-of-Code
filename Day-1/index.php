<?php
function floorDirection($floor, $character) {
    if($character == '(') {
        return $floor + 1;
    }

    return $floor - 1;
}

function floorPosition($input, $floor) {
    $location = 1;

    for($i = 0; $i < strlen($input); $i++) {
        $location = floorDirection($location, $input[$i]);

        if($location == $floor) {
            return $location;
        }
    }
}

$content = file_get_contents("input.txt");

$result = substr_count($content, '(') - substr_count($content, ')');


echo floorPosition($content, '-1') . PHP_EOL;