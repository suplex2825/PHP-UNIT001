<?php

// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array
$quotes = array(
array("quotes" => "It is during our darkest moments that we must focus to see the light.", 
      "source" => "Aristotle"),
array("quotes" => "Believe you can and you're halfway there.",
      "source" => "Theodore Roosevelt"),
array("quotes" => "Keep your face always toward the sunshine - and shadows will fall behind you.",
      "source" => "Walt Whitman"),
array("quotes" => "I have not failed. I've just found 10,000 ways that won't work.",
      "source" => "Thomas A. Edison"),
array("quotes" => "I have no special talent. I am only passionately curious.",
      "source" => "Albert Einstein"));


// Create the getRandomQuuote function and name it getRandomQuote
function getRandomQuotes($arr) {
      $random = array_rand($arr,1);
      $result = $arr[$random];
      return $result;
}


// Create the printQuote funtion and name it printQuote

function printQuotes($arr2) {
     $result2 = getRandomQuotes($arr2);
     $quotes1 = $result2["quotes"];
     $source = $result2["source"];

     $fullHtml;
     if($source == "Albert Einstein") {
        $fullHtml = "<p class='quote'>$quotes1</p>
                  <p class='source'>$source
                  <span class='citation'>Brainy Quotes</span>
                  <span class='year'>1923</span></p>";
     }
     if($source == "Thomas A. Edison") {
       $fullHtml = "<p class='quote'>$quotes1</p>
                  <p class='source'>$source
                  <span class='citation'>Brainy Quotes</span>
                  <span class='year'>1919</span></p>";
     }
     if($source == "Walt Whitman") {
       $fullHtml = "<p class='quote'>$quotes1</p>
                  <p class='source'>$source
                  <span class='citation'>Brainy Quotes</span>
                  <span class='year'>1853</span></p>";
     }
     if($source == "Theodore Roosevelt") {
       $fullHtml = "<p class='quote'>$quotes1</p>
                  <p class='source'>$source
                  <span class='citation'>Brainy Quotes</span>
                  <span class='year'>1888</span></p>";
     }
     if($source == "Aristotle") {
       $fullHtml = "<p class='quote'>$quotes1</p>
                  <p class='source'>$source
                  <span class='citation'>Brainy Quotes</span>
                  <span class='year'>364 BC</span></p>";
     }
     return $fullHtml;
}

$words = printQuotes($quotes);
echo $words;
?>
