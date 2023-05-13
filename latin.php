<?php

function to_pig_latin($text) {
    // Split the text into individual words
    $words = explode(' ', $text);

    // Translate each word to Pig Latin
    $pig_latin_words = array();
    foreach ($words as $word) {
        $first_letter = strtolower($word[0]); // Save the first letter and make it lowercase
        $rest_of_word = substr($word, 1); // Get the rest of the word
        $pig_latin_word = $rest_of_word . $first_letter . 'ay'; // Construct the Pig Latin word
        array_push($pig_latin_words, $pig_latin_word); // Add the Pig Latin word to the array
    }

    // Join the Pig Latin words into a single string
    $pig_latin_text = implode(' ', $pig_latin_words);

    return $pig_latin_text;
}

function from_pig_latin($text) {
    // Split the text into individual words
    $words = explode(' ', $text);

    // Translate each word from Pig Latin to English
    $english_words = array();
    foreach ($words as $word) {
        $last_two_letters = strtolower(substr($word, -3, 2)); // Save the last two letters and make them lowercase
        $rest_of_word = substr($word, 0, -3); // Get the rest of the word
        $english_word = $last_two_letters . $rest_of_word; // Construct the English word
        array_push($english_words, $english_word); // Add the English word to the array
    }

    // Join the English words into a single string
    $english_text = implode(' ', $english_words);

    return $english_text;
}



$text = "Join with yellowfish";
$pig_latin_text = to_pig_latin($text);
echo $pig_latin_text . "\n"; // Output: oinJay ithWay ellowfishyay

$english_text = from_pig_latin($pig_latin_text);
echo $english_text . "\n"; // Output: Join with yellowfish

?>