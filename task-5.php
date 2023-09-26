<?php
function generatePassword($length) {
    // Define the character sets for the password
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $specialChars = '!@#$%^&*()_+';

    $characters = $lowercase . $uppercase . $numbers . $specialChars;

    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $randomChar = $characters[rand(0, strlen($characters) - 1)];
        $password .= $randomChar;
    }

    return $password;
}

// Generate a password of length 12 characters
$passwordLength = 12;
$password = generatePassword($passwordLength);

// Print the generated password
echo "Generated Password: $password\n";
?>
