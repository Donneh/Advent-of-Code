<?php
$input = file_get_contents("input.txt");
var_dump($input);
$result = substlr_count($input, '(') - substr_count($input, ')');

echo $result . PHP_EOL;