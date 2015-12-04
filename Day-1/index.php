<?php
$input = file_get_contents("input.txt");

echo substr_count($input, '(') - substr_count($input, ')');

echo $result . PHP_EOL;