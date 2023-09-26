<?php
$text = "The quick brown fox jumps over the lazy dog.";

function modifyText($inputText) {
    // Convert the lowercase
    $lowercaseText = strtolower($inputText);

    // Replace "brown" with "red"
    $modifiedText = str_replace('brown', 'red', $lowercaseText);

    return $modifiedText;
}

$modifiedText = modifyText($text);
echo $modifiedText;
?>
