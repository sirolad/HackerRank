<?php
$_fp = fopen("php://stdin", "r");

//get the number of test cases.
$test_cases = fgets($_fp);

//run through all test cases.
for ($i = 0; $i < $test_cases; $i++) {
    $student_info = explode(' ', fgets($_fp));
    $times = explode(' ', fgets($_fp));

    //get the min number of students to teach.
    $min_number = intval($student_info[1]);

    //run through all student times and reduce the student on time.
    for ($j = 0; $j < count($times); $j++) {
        $min_number -= ($times[$j] <= 0) ? 1 : 0;
    }

    //do the output.
    echo sprintf("%s\n", (($min_number <= 0) ? "NO" : "YES"));
}

//close the handler.
fclose($_fp);
