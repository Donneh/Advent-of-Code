<?php
$input = file("input.txt");

function doubleLetter($string) {
    if(preg_match('/(.)\\1/', $string)) {
        return true;
    }
    return false;
}

function doublePair($string) {
    $foo = preg_match('/(.)\\1/', $string);
    var_dump($foo);
    if(preg_match('/((.)\\1)\\2/', $string)) {
        return true;
    }
    return false;
}

function amountOfVowels($string) {
    return preg_match_all('/[aeiou]/i', $string, $matches);
}

function containsNaughty($string) {
    if(preg_match('/(ab)|(cd)|(pq)|(xy)/i', $string)) {
        return true;
    }

    return false;
}

function amountOfNiceString($input) {
    $nice = 0;
    foreach($input as $string) {
        if(doubleLetter($string)) {
            if(amountOfVowels($string) >= 3) {
                if(!containsNaughty($string)) {
                    $nice++;
                }
            }
        }
    }
    return $nice;
}

//echo amountOfNiceString($input);
//echo doubleLetter('rvlwikuqdbpjuvoo') . PHP_EOL;
//echo amountOfVowels('rvlwikuqdbpjuvoo') . PHP_EOL;
//var_dump(containsNaughty('rvlwikuqdbpjuvoo'));
//var_dump(doublePair('xyyadsfxy'));