
<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $name = filter_var($_GET['name'], FILTER_SANITIZE_STRING | FILTER_FLAG_STRIP_HIGH);
    $output .= "Hello $name! How can I assist you today?\n";

    if ($_GET['topic'] === 'weather') {
        $output .= "The weather in your current location is ".file_get_contents('assets/api/weather.json')."\n";
    } else if ($_GET['topic'] === 'quotes') {
        $output .= "Quote of the day: ".file_get_contents('assets/api/quotes.json')."\n";
    } else if ($_GET['topic'] === 'greetings') {
        $output .= "Hello $name, it is a pleasure to help you today. If you have any questions or need any assistance, please let me know.\n";
    } else {
        $output .= "I apologize for any confusion. Please select an appropriate topic for me to assist you with.\n";
    }

    echo $output;
}