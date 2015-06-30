<?php
$_fp = fopen("php://stdin", "r");

//get the actual and excepted date.
$input_act = fscanf($_fp, "%d %d %d");
$input_exp = fscanf($_fp, "%d %d %d");

//reset the hackos.
$hackos = 0;

//check if the fine for year is needed.
if ($input_act[2] > $input_exp[2]) {
    $hackos = 10000;
} elseif ($input_act[2] == $input_exp[2]) {
    if ($input_act[1] > $input_exp[1]) {
        $hackos = 500 * ($input_act[1] - $input_exp[1]);
    } elseif ($input_act[1] == $input_exp[1]) {
        if ($input_act[0] > $input_exp[0]) {
            $hackos = 15 * ($input_act[0] - $input_exp[0]);
        }
    }
}

//do the output.
echo $hackos;

//close the handler.
fclose($_fp);
