<?php
$_fp = fopen("php://stdin", "r");

//get the number of segements and test cases.
$input = fscanf($_fp, "%d %d");
$segments = (int) $input[0];
$test_cases = (int) $input[1];

//get the structure of the service lane.
$service_lane = fscanf($_fp, trim(str_repeat("%d ", $segments)));

//run through all test cases.
for ($i = 0; $i < $test_cases; $i++) {
    $vehicle = 0;

    //get the area on the service lane.
    $area = fscanf($_fp, "%d %d");

    //check if the start and end is available and run through the lane.
    if (($area[0] < count($service_lane)) && ($area[1] < count($service_lane))) {
        for ($j = $area[0]; $j <= $area[1]; $j++) {
            if (($service_lane[$j] < $vehicle) || ($vehicle === 0)) {
                $vehicle = $service_lane[$j];
            }
        }
    }

    //do the output.
    echo sprintf("%d\n", $vehicle);
}

//close the handler.
fclose($_fp);
