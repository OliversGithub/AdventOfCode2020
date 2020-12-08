<?php
namespace  AdventOfCode\Day01;


$inputfile = fopen("input.txt", "r");
while(! feof($inputfile)) {

    $outer = fgets($inputfile);

    $inputfile2 = fopen("input.txt", "r");
    while(! feof($inputfile2)){
        $inner = fgets($inputfile2);
        if ((int)$outer + (int)$inner== 2020){
            Print((int)$inner * (int)$outer);
            echo "\n";
            exit();
        }
    }
}
//    for($i = 0; $i < sizeof($input); $i++){
//        $record = $input[$i];
//        print( sizeof($input));
//
//        print( $record);
//        for ($b = 0; $b < sizeof($input); $b++){
//            if ($record + $input[$b] = 2020){
//
//            }
//        }
//
//    }



?>