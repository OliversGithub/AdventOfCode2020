<?php

namespace AdventOfCode\Day02;

$inputfile = fopen("input.txt", "r");
$validpasswords= 0;
while (! feof($inputfile) ) {
    $inputline = fgets($inputfile);
    $inputlinearray = explode(" ", $inputline);
    $bounds = explode("-",$inputlinearray[0]);
    $character = $inputlinearray[1][0];

    if ( substr_count($inputlinearray[2], $character) >= $bounds[0] and substr_count($inputlinearray[2], $character) <= $bounds[1]) {
        $validpasswords++;
        }
    print($validpasswords);
    print("\n");
}