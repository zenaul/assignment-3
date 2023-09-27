<?php
$studentGrades = [
    ['Math' => 85, 'English' => 92, 'Science' => 78],
    ['Math' => 88, 'English' => 95, 'Science' => 90],
    ['Math' => 75, 'English' => 86, 'Science' => 82],
];

function calculateAverageGrades( $gradesArray ) {
    foreach ( $gradesArray as $studentIndex => $grades ) {
        $total = array_sum( $grades );
        $count = count( $grades );
        $average = $total / $count;

        echo "Student " . ( $studentIndex + 1 ) . " - Average Grade: " . $average . "\n";
    }
}

calculateAverageGrades( $studentGrades );