<?php
$numbers = range(1, 10); // Creates an array with numbers 1 to 10

function removeEvenNumbers($arr) {
    
    $result = array_filter($arr, function($num) {
        return $num % 2 !== 0;
    });

    return $result;
}
echo "Original array: " . implode(', ', $numbers) . "\n";

// Remove even numbers
$oddNumbers = removeEvenNumbers($numbers);

// Print the resulting array
echo "Even numbers removed: " . implode(', ', $oddNumbers);
?>
