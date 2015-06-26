<?php
$_fp = fopen("php://stdin", "r");

//get the number of test cases.
$test_cases = (int) fgets($_fp);

//run through all test cases.
for ($i = 0; $i < $test_cases; $i++) {
    fscanf($_fp, "%s", $word);

    //check if the word is valid.
    if ((preg_match('/[^a-z]/', $word) === 0) && (strlen($word) > 0)) {
        echo sprintf("%d\n", getRoundsToPalindrom($word));
    }
}

//close the handler.
fclose($_fp);

/**
 * Function to get the number of round for creating a palindrom.
 * @param string $word The word which will be converted to a palindrom.
 * @return int The number of rounds to get a palindrom.
 */
function getRoundsToPalindrom($word)
{
    //get the char array of the word.
    $str_array = str_split($word);

    //get the length and max position of the string.
    $str_len = count($str_array);
    $max_pos = round($str_len / 2);

    //reset the counter.
    $counter = 0;

    //run through all positions of the string.
    for ($pos = 0; $pos < $max_pos; $pos++) {
        if ($str_array[$pos] === $str_array[($str_len - 1) - $pos]) {
            continue;
        }

        //run until the chars are equals.
        while ($str_array[$pos] !== $str_array[($str_len - 1) - $pos]) {
            $counter++;

            //get the position on the ascii table.
            $pos_letters_ahead = ord($str_array[$pos]);
            $pos_letters_behind = ord($str_array[($str_len - 1) - $pos]);

            //check which side will be changed.
            if ($pos_letters_ahead > $pos_letters_behind) {
                $str_array[$pos] = chr($pos_letters_ahead - 1);
            } else {
                $str_array[($str_len - 1) - $pos] = chr($pos_letters_behind - 1);
            }
        }
    }

    //return the number of rounds.
    return $counter;
}
