<?php
$_fp = fopen("php://stdin", "r");

//get the number of segements and test cases.
$height = fgets($_fp);

//run thorugh the height.
for ($i = 1; $i <= $height; $i++) {
    echo str_repeat(' ', $height - $i).str_repeat('#', $i)."\n";
}

//close the handler.
fclose($_fp);
