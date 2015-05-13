<?php
$_fp = fopen("php://stdin", "r");

//get the number of test cases.
$test_cases = fgets($_fp);

//run through all test cases.
for ($i = 0; $i < $test_cases; $i++) {
    $input = preg_split('/[ ]/', fgets($_fp));

    //get the single values for sum.
    $a = (int) $input[0];
    $b = (int) $input[1];

    //do the output.
    echo sprintf("%d\n", sum($a, $b));
}

//close the handler.
fclose($_fp);

/**
 * Function to sum two values.
 * @param int $a The first integer for the sum.
 * @param int $b The second integer for the sum.
 * @return int The sum of the integer $a and $b.
 */
function sum($a, $b)
{
    return ($a + $b);
}
