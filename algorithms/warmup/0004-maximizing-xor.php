<?php
$_fp = fopen("php://stdin", "r");

//get the input values.
$l = (int) fgets($_fp);
$r = (int) fgets($_fp);

//do the output.
echo sprintf("%d\n", maxXOR($l, $r));

//close the handler.
fclose($_fp);

/**
 * Function to get the max XOR value of the values $l and $r.
 * @param int $l The left value to get the max XOR.
 * @param int $r The right value to get the max XOR.
 * @return int The max XOR value of $l and $r.
 */
function maxXOR($l, $r)
{
    //the max xor.
    $max_xor = 0;

    //run through the range between $l and $r.
    for ($i = $l; $i <= $r; $i++) {
        for ($j = $l; $j <= $r; $j++) {
            if ($j >= $i) {
                $xor = $i ^ $j;

                //set the max value.
                $max_xor = ($xor > $max_xor) ? $xor : $max_xor;
            }
        }
    }

    //return the max xor.
    return $max_xor;
}
