<?php
function unique_names($names1, $names2) {
    // Combine the two input arrays into a single array
    $merged_array = array_merge($names1, $names2);
    // Remove duplicates from the merged array
    $unique_array = array_unique($merged_array);
    // Return the resulting array
    return $unique_array;
}

$names1 = array('Ava', 'Emma', 'Olivia');
$names2 = array('Olivia', 'Sophia', 'Emma');

$result = unique_names($names1, $names2);
print_r($result);  
 // Output: Array ( [0] => Ava [1] => Emma [2] => Olivia [4] => Sophia [5] => Olivia )
?>