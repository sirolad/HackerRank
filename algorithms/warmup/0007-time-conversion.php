<?php
$_fp = fopen("php://stdin", "r");

//get the number of segements and test cases.
$ampmtime = fgets($_fp);

//get the format of the time.
$format = substr($ampmtime, 8, 2);
$time = explode(':', substr($ampmtime, 0, 8));

//check if the time is valid.
if (($time[0] >= 0) && ($time[0] <= 23)) {
    if (($time[1] >= 0) && ($time[1] <= 59)) {
        if (($time[2] >= 0) && ($time[2] <= 59)) {
            $hour = 0;

            //check the format.
            if ($format == 'AM') {
                $hour = $time[0] % 12;
            } elseif ($format == 'PM') {
                $hour = ($time[0] % 12) + 12;

                if ($hour == 24) {
                    $hour = 0;
                }
            }

            //do the output.
            echo str_pad((int) $hour, 2, '0', STR_PAD_LEFT).':'.$time[1].':'.$time[2];
        }
    }
}

//close the handler.
fclose($_fp);
