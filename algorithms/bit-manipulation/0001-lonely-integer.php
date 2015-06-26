<?php
$_fp = fopen("php://stdin", "r");

//get the number of the integers.
$int_num = fgets($_fp);

//get the integer.
$integers = fscanf($_fp, trim(str_repeat("%d ", $int_num)));

//do the output.
echo sprintf("%d", lonelyInteger($integers));

//close the handler.
fclose($_fp);

/**
 * Function to get the lonely integer of the array.
 * @param array $integers An array with all integers.
 * @return mixed The lonely integer of the array.
 */
function lonelyInteger($integers)
{
    //get the number of items.
    $num_int = count($integers);

    //check if the constraint is valid.
    if (($num_int >= 1) && ($num_int <= 100) && (($num_int % 2) === 1)) {
        for ($i = 0; $i < $num_int; $i++) {
            $found = false;

            //run through all items again to get the other value.
            for ($j = 0; $j < $num_int; $j++) {
                if (($integers[$i] === $integers[$j]) && ($i !== $j)) {
                    $found = true;
                    break;
                }
            }

            //check if the value could be found.
            if ($found === false) {
                return $integers[$i];
            }
        }
    }

    //return the default.
    return -1;
}
