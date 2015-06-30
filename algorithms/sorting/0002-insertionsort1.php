<?php
$_fp = fopen("php://stdin", "r");

//get the length of the array.
$count = fgets($_fp);

//get the string and convert to array.
$array = explode(' ', fgets($_fp));

//get the inserted value from the array.
$insert_value = $array[$count - 1];

//run through the array and sort.
for ($i = ($count - 1); $i >= 0; $i--) {
    if ($i == 0) {
        $array[$i] = $insert_value;
        echo implode(' ', $array)."\n";
        break;
    }

    //check if the value is greater than insert value.
    if ($array[$i - 1] > $insert_value) {
        $array[$i] = $array[$i - 1];
        echo implode(' ', $array)."\n";
    } else {
        $array[$i] = $insert_value;
        echo implode(' ', $array)."\n";
        break;
    }
}

//close the handler.
fclose($_fp);
