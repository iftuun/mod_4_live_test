<?php
# Write your PHP code from here

$stringA = trim(fgets(STDIN));


$stringB = trim(fgets(STDIN));


function areAnagrams($str1, $str2) {

    $str1 = strtolower(str_replace(' ', '', $str1));
    $str2 = strtolower(str_replace(' ', '', $str2));


    return (count_chars($str1, 1) == count_chars($str2, 1));
}


if (areAnagrams($stringA, $stringB)) {
    echo "YES\n";
} else {
    echo "NO\n";
}


?>