<?php
$grades = [85, 92, 78, 88, 95];

function sortDesending($arr) {
    
    rsort($arr);
    return $arr;
}

echo "Original grades: " . implode(', ', $grades) . "\n";

$sortedGrades = sortDesending($grades);

echo "Sorted grades (descending): " . implode(', ', $sortedGrades);
?>
