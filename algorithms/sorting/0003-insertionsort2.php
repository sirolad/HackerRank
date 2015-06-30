<?php
$_fp = fopen("php://stdin", "r");

//get the length of the array.
$count = fgets($_fp);

//get the string and convert to array.
$array = explode(' ', fgets($_fp));

//run through the array to get the single values.
for ($l = 1; $l < $count; $l++) {
    $insert_value = $array[$l];

    //run through the array and sort.
    for ($i = $l; $i >= 0; $i--) {
        if ($i == 0) {
            $array[$i] = $insert_value;
            echo implode(' ', $array)."\n";
            break;
        }

        //check if the value is greater than insert value.
        if ($array[$i - 1] > $insert_value) {
            $array[$i] = $array[$i - 1];
        } else {
            $array[$i] = $insert_value;
            echo implode(' ', $array)."\n";
            break;
        }
    }
}

//close the handler.
fclose($_fp);
