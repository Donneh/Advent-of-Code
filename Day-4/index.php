<?php
/**
 * @author Donny van Walsem <donnehvw@gmail.com>
 */
//echo md5('abcdef609043') . PHP_EOL;
//
//$number = 00000;
//echo $number + 2 . PHP_EOL;
//echo md5('2yzbqklnj') . PHP_EOL;
$key = 0;
$string = 'yzbqklnj';

while(substr(md5($string.$key), 0, 6) !== '000000') {
    $key++;
}
echo $key . PHP_EOL;
echo md5($string.$key) . PHP_EOL;