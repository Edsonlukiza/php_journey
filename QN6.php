<?php
// Declare the string variable
$text = "Learning PHP is fun!";

// Display the length of the string using strlen()
echo "Length of the string: " . strlen($text) . "\n";

// Convert the string to uppercase using strtoupper()
$upper_text = strtoupper($text);
echo "Uppercase string: " . $upper_text . "\n";

// Extract and display the word "PHP" using substr()
$php_word = substr($text, 9, 3);  // "PHP" starts at position 9 and is 3 characters long
echo "Extracted word: " . $php_word . "\n";

// Replace "fun" with "challenging" and display the updated string
$updated_text = str_replace("fun", "challenging", $text);
echo "Updated string: " . $updated_text . "\n";
?>
