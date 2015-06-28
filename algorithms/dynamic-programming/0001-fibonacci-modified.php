<?php
$_fp = fopen("php://stdin", "r");

//get the integer.
$integers = fscanf($_fp, "%u %u %u");

//check if the first terms are valid.
if (($integers[0] >= 0 && $integers[0] <= 2) && ($integers[1] >= 0 && $integers[1] <= 2)) {
    if ($integers[2] >= 3 && $integers[2] <= 20) {
        $term1 = $integers[0];
        $term2 = $integers[1];

        //run through all rounds.
        for ($i = 3; $i <= $integers[2]; $i++) {
            $temp = bcadd(bcpow($term2, 2), $term1);
            $term1 = $term2;
            $term2 = $temp;
        }

        //do the output.
        echo $term2;
    }
}

//close the handler.
fclose($_fp);
