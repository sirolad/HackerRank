<?php
$_fp = fopen("php://stdin", "r");

//get the number of test cases.
$test_cases = fgets($_fp);

//run through all test cases.
for ($i = 0; $i < $test_cases; $i++) {
    fscanf($_fp, "%s", $number);
    $numbers = str_split($number);
    $num_count = 0;

    //run through all single numbers.
    for ($j = 0; $j < count($numbers); $j++) {
        $num_count += (($numbers[$j] <> 0) && (($number % $numbers[$j]) === 0)) ? 1 : 0;
    }

    //do the output.
    echo sprintf("%d\n", $num_count);
}

//close the handler.
fclose($_fp);
