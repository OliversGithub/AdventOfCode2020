<?php

namespace AdventOfCode\Day02;

$inputfile = fopen("input.txt", "r");
$validpasswords= 0;
while (! feof($inputfile) ) {
    $inputline = fgets($inputfile);
    $inputlinearray = explode(" ", $inputline);
    $positions = explode("-",$inputlinearray[0]);
    $character = $inputlinearray[1][0];

    if ( ($inputlinearray[2][$positions[0]-1] ==  $character and $inputlinearray[2][$positions[1]-1] != $character)
        or ($inputlinearray[2][$positions[0]-1] !=  $character and $inputlinearray[2][$positions[1]-1] == $character)) {
        $validpasswords++;
    }


    print($validpasswords);
    print("\n");
}