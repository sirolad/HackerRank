<?php
$_fp = fopen("php://stdin", "r");

//get the number of chars.
$char_count = (int) fgets($_fp);

//get the string and cipher.
$string = fgets($_fp);
$cipher = (int) fgets($_fp);

//get all chars of the string.
$chars = str_split($string);

//check if the parameters are valid.
if ((($char_count >= 1) && ($char_count <= 100)) && (($cipher >= 0) && ($cipher <= 100))) {
    for ($i = 0; $i < $char_count; $i++) {
        if (preg_match('/[a-zA-Z]/i', $chars[$i]) === 1) {
            $char_ord = ord($chars[$i]);
            $cipher %= 26;

            //check for little letters.
            if ($char_ord >= 97 && $char_ord <= 122) {
                $char_ord += $cipher;

                //handle the overflow.
                if ($char_ord > 122) {
                    $char_ord = ($char_ord - 122) + 96;
                }
            }

            //check for big letters.
            if ($char_ord >= 65 && $char_ord <= 90) {
                $char_ord += $cipher;

                //handle the overflow.
                if ($char_ord > 90) {
                    $char_ord = ($char_ord - 90) + 64;
                }
            }

            //set the new char.
            $chars[$i] = chr($char_ord);
        }
    }

    //do the output.
    echo implode($chars);
}

//close the handler.
fclose($_fp);
