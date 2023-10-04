<?php
$inputString = trim(fgets(STDIN));


$result = '';


$seen = array();


for ($i = 0; $i < strlen($inputString); $i++) {
    $char = $inputString[$i];


    if (!in_array($char, $seen)) {

        $result .= $char;


        $seen[] = $char;
    }
}


echo "$result";
?>