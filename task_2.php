<?php
$numbers = range( 1, 10 );

function isOdd( $number ) {
    return $number % 2 != 0;
}

$filteredNumbers = array_filter( $numbers, 'isOdd' );

print_r( $filteredNumbers );