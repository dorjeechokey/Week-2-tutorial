<?php
function findSingleNumber($arr) {
    // Initialize an empty associative array to store occurrences of each number
    $occurrences = array();

    // Iterate through the array and count occurrences of each number
    foreach ($arr as $num) {
        if (array_key_exists($num, $occurrences)) {
            // If number exists, increment its count
            $occurrences[$num]++;
        } else {
            // If number doesn't exist, initialize its count to 1
            $occurrences[$num] = 1;
        }
    }

    // Iterate through the occurrences array to find the number that occurs only once
    foreach ($occurrences as $num => $count) {
        if ($count == 1) {
            return $num; // Return the number that occurs only once
        }
    }

    return null; // Return null if no such number is found (though as per problem statement, there should always be one)
}

// Example usage:
$arr = array(5, 3, 4, 3, 4);
$singleNumber = findSingleNumber($arr);
echo "The single number that doesn't occur twice is: " . $singleNumber . "\n";
?>
