<?php
$_fp = fopen("php://stdin", "r");

//get the input values.
$a = fgets($_fp);
$b = fgets($_fp);

//do the output.
echo sprintf("%d", sum($a, $b));

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
