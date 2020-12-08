<?php
namespace  AdventOfCode\Day01;


    $inputfile = fopen("input.txt", "r");
    while(! feof($inputfile)) {

        $outer = fgets($inputfile);

        $inputfile2 = fopen("input.txt", "r");
        while(! feof($inputfile2)){
            $inner = fgets($inputfile2);
            $inputfile3 = fopen("input.txt", "r");
            while(! feof($inputfile3)){
                $innerer = fgets($inputfile3);
                if ((int)$outer + (int)$inner + (int) $innerer == 2020){
                    Print((int)$inner * (int)$outer * (int) $innerer);
                    echo "\n";
                    exit();
                }
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