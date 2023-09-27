<?php
function generatePassword( $length ) {
    $lowercaseChars = 'abcdefghijklmnopqrstuvwxyz';
    $uppercaseChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numberChars = '0123456789';
    $specialChars = '!@#$%^&*()_+';

    $allChars = $lowercaseChars . $uppercaseChars . $numberChars . $specialChars;
    $lowercharSetLength = strlen( $lowercaseChars );
    $uppercharSetLength = strlen( $uppercaseChars );
    $numberSetLength = strlen( $numberChars );
    $specialSetLength = strlen( $specialChars );
    $charSetLength = strlen( $allChars );

    $password = '';

    for ( $i = 0; $i < $length; $i++ ) {
        $select = '';
        if ( $i == 0 ) {
            $randomIndex = rand( 0, $lowercharSetLength - 1 );
            $select = $lowercaseChars[$randomIndex];
        } else if ( $i == 1 ) {
            $randomIndex = rand( 0, $uppercharSetLength - 1 );
            $select = $uppercaseChars[$randomIndex];
        } else if ( $i == 2 ) {
            $randomIndex = rand( 0, $numberSetLength - 1 );
            $select = $numberChars[$randomIndex];
        } else if ( $i == 3 ) {
            $randomIndex = rand( 0, $specialSetLength - 1 );
            $select = $specialChars[$randomIndex];
        } else {
            $randomIndex = rand( 0, $charSetLength - 1 );
            $select = $allChars[$randomIndex];
        }

        $password .= $select;
    }

    return $password;
}

$generatedPassword = generatePassword( 12 );
echo $generatedPassword;