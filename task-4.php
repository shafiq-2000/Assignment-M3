<?php
$studentGrades = [
    ['Math' => 80, 'English' => 91, 'Science' => 89],
    ['Math' => 95, 'English' => 75, 'Science' => 88],
    ['Math' => 70, 'English' => 85, 'Science' => 52]
];

function AvgGrade($grades) {
    $averages = [];

    foreach ($grades as $student) {
        $total = array_sum($student);
        $count = count($student);
        $average = $total / $count;
        $averages[] = $average;
    }

    return $averages;
}

// Calculate and print the average grades for each student
$averageGrades = AvgGrade($studentGrades);

for ($i = 0; $i < count($studentGrades); $i++) {
    echo "Average grade for Student " . ($i + 1) . ": " . $averageGrades[$i] . "\n";
}
?>
