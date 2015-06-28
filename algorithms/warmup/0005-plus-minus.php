<?php
$_fp = fopen("php://stdin", "r");

//get the number of segements and test cases.
$input = fscanf($_fp, "%d");
$size = (int) $input[0];

//get the array items.
$numbers = fscanf($_fp, trim(str_repeat("%d ", $size)));

//reset the kind of number.
$positiv = 0;
$negativ = 0;
$neutral = 0;

//run through the array and count the different kinds.
for ($i = 0; $i < $size; $i++) {
    if ($numbers[$i] > 0) {
        $positiv++;
    } elseif ($numbers[$i] < 0) {
        $negativ++;
    } else {
        $neutral++;
    }
}

//do the output.
echo number_format($positiv / $size, 3)."\n";
echo number_format($negativ / $size, 3)."\n";
echo number_format($neutral / $size, 3);

//close the handler.
fclose($_fp);
