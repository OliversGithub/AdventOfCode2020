<?php

namespace AdventOfCode\Day02;

$inputfile = fopen("input.txt", "r");
$validpasswords= 0;
$i = 0;
$a = 0;
$b = 0;
$treecount = 0;
$right = $argv[1];
$down = $argv[2];

while (! feof($inputfile) ) {
    $inputline = fgets($inputfile);
    $map[$i] = str_split( $inputline);
    $i++;

}


    while( $a < 322){
    //        echo($b);
            if ( $b + $right > 30) {
                $a = $a + $down;
                $b =  ($b + $right) - 31;
            }
            else {
                $a = $a + $down;
                $b = ($b + $right);
            }
            if ($map[$a][$b] == "#"){
                $treecount++;
            }
    //        echo $map[$a][$b];
/*            echo $a;
            echo " ";
            echo $b;
            echo " ";
            echo $map[$a][$b];
            echo "\n";*/
    }
    echo $treecount;

