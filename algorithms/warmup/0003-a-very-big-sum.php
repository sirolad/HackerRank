<?php
$_fp = fopen("php://stdin", "r");

//get the input values.
$a = fgets($_fp);
$b = fgets($_fp);

//get the values of the last input value.
$c = explode(' ', $b);

//do the output.
echo sprintf("%d", array_sum($c));

//close the handler.
fclose($_fp);
