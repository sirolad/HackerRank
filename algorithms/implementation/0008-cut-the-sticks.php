<?php
$_fp = fopen("php://stdin", "r");

//get the number abd the size of the of the sticks.
$num_sticks = fscanf($_fp, "%d");
$sticks_sizes = explode(' ', fgets($_fp));

//run through all sticks and do the cut.
while (count($sticks_sizes) <> 0) {
    echo sprintf("%d\n", count($sticks_sizes));

    //sort the sticks (lowest size first).
    sort($sticks_sizes, SORT_NUMERIC);

    //get the size (size of the cut is the lowest stick).
    $cut_size = $sticks_sizes[0];

    //cut the sticks with the length of the lowest.
    for ($i = 0; $i < count($sticks_sizes); $i++) {
        $sticks_sizes[$i] -= $cut_size;

        //if the stick is away then remove.
        if ($sticks_sizes[$i] === 0) {
            array_shift($sticks_sizes);
            $i--;
        }
    }
}

//close the handler.
fclose($_fp);
