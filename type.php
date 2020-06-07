<?php

'Hello World';
"Hello World";

(string) 10; // "10"
(string) true; /// "1"
//echo var_dump((string)true);
// null 은 임시값

$aArray = [
    "Hello World1",
    "Hello world1",
    "Test"
];

$aArray2 = array("Hello World1", "Hello world1");

$aArray3 = array(
    0 => "Hello world",
    "Key" => "Value",
    "Bye"
);

/**
 *  Destructuring.
 */
list(, $message) = $aArray;
var_dump($message);

["Key" => $sValue] = $aArray3;
var_dump($sValue);

unset($aArray3[0]);
var_dump($aArray3);
