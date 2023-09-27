<?php
$grades = [85, 92, 78, 88, 95];

function sortGradesDescending( $gradesArray ) {
    rsort( $gradesArray );
    return $gradesArray;
}

$sortedGrades = sortGradesDescending( $grades );

print_r( $sortedGrades );