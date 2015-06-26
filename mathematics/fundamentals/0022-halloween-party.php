<?php
$_fp = fopen("php://stdin", "r");

//get the number of test cases.
$test_cases = fgets($_fp);

//run through all test cases.
for ($i = 0; $i < $test_cases; $i++) {
    fscanf($_fp, "%s", $cuts);

    //get the half with round down and the pad.
    $half = round(($cuts / 2), 0, PHP_ROUND_HALF_DOWN);
    $pad = ($cuts % 2);

    //do the output.
    echo sprintf("%d\n", ($half * ($half + $pad)));
}

//close the handler.
fclose($_fp);
