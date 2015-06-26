<?php
$_fp = fopen("php://stdin", "r");

//get the number of rows and columns.
$a = (int) fgets($_fp);

//get the rows and columns.
$input = array();

//run through all rows and get the columns.
for ($i = 0; $i < $a; $i++) {
    $input[] = fscanf($_fp, trim(str_pad("", $a * 3, "%s ")));
}

//reset and get the two sum of the input.
$sum1 = $sum2 = 0;

//get the diagonal sum.
for ($j = 0; $j < $a; $j++) {
    $sum1 += (int) $input[$j][$j];
    $sum2 += (int) $input[$j][$a - ($j + 1)];
}

//get the difference of the diagonal sum.
$diff = $sum1 - $sum2;

//do the output.
echo sprintf("%d", ($diff < 0) ? $diff * -1 : $diff);

//close the handler.
fclose($_fp);
