<?php
function extractNumber($string) {
    preg_match_all('/([0-9])([0-9]*)/', $string, $result);
    return [
        "x1" => (int)$result[0][0],
        "y1" => (int)$result[0][1],
        "x2" => (int)$result[0][2],
        "y2" => (int)$result[0][3]
    ];
}

$file = file("input.txt");

$array = [];
for($i = 0; $i < 1000; $i++) {
    $array[$i] = str_repeat('0,', 1000);
}

foreach($file as $line) {

    $pos = extractNumber($line);

    for($i = $pos['y1']; $i <= $pos['y2']; $i++) {
        for($j = $pos['x1']; $j <= $pos['x2']; $j++) {
            if(strpos($line, 'toggle') !== false) {
                if($array[$i][$j] == '0') {
                    $array[$i][$j] = '1,';
                } else {
                    $array[$i][$j] = '0,';
                }
            }

            if(strpos($line, 'on') !== false) {
                $array[$i][$j] = '1,';
            }

            if(strpos($line, 'off') !== false) {
                $array[$i][$j] = '0,';
            }
        }
    }
}
echo json_encode($array);
//echo substr_count(json_encode($array), 1);