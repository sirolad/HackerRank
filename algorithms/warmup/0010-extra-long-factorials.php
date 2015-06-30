<?php
$_fp = fopen("php://stdin", "r");

//get the factorial.
$factorial = fgets($_fp);

//check if the input is valid.
if ($factorial >= 1 && $factorial <= 100) {
    $sum = "1";

    //run through all rounds to get the sum.
    for ($i = $factorial; $i > 0; $i--) {
        $sum = bcmul($sum, $i);
    }

    //do the output.
    echo $sum;
}

//close the handler.
fclose($_fp);
