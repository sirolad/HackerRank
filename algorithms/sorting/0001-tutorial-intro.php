<?php
$_fp = fopen("php://stdin", "r");

//get the search value and the value.
$search_value = fgets($_fp);
$num_values = fgets($_fp);
$values = explode(' ', fgets($_fp));

//run through all values to search the value.
for ($i = 0; $i < count($values); $i++) {
    if (intval($values[$i]) === intval($search_value)) {
        echo sprintf("%d", $i);
        break;
    }
}

//close the handler.
fclose($_fp);
