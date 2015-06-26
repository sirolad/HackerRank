<?php
$_fp = fopen("php://stdin", "r");

//get the number of test cases.
$test_cases = fgets($_fp);

//run through all test cases.
for ($i = 0; $i < $test_cases; $i++) {
    $tree_size = 1;
    $cycles = fgets($_fp);

    //run through the cycles.
    for ($j = 1; $j <= $cycles; $j++) {
        $mod = ($j % 2);

        //check if the tree will be growth one meter.
        $tree_size = ($mod === 0) ? $tree_size + 1 : $tree_size * 2;
    }

    //do the output.
    echo sprintf("%d\n", $tree_size);
}

//close the handler.
fclose($_fp);
