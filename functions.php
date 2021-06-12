<?php
//get the time ago format from stackoverflow
function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}
//get the Top news -- CNN
// key a8a0c942c4f4429a82c55ba0eafc6b47
$urlforHeadlines = 'https://newsapi.org/v2/top-headlines?country=us&pageSize=6&apiKey=a8a0c942c4f4429a82c55ba0eafc6b47';
$responseforHeadlines = file_get_contents($urlforHeadlines);
$dataforHeadlines = json_decode($responseforHeadlines);


//get all the news   
$urlAll = 'https://newsapi.org/v2/everything?q=news&apiKey=a8a0c942c4f4429a82c55ba0eafc6b47&page=1';
$responseAll = file_get_contents($urlAll);
$dataAll = json_decode($responseAll);

//get the first two elements
$featureURL = 'https://newsapi.org/v2/everything?q=world&from=2021-06-11&to=2021-06-12&sortBy=popularity&apiKey=a8a0c942c4f4429a82c55ba0eafc6b47&pageSize=2';
$feature = file_get_contents($featureURL);
$featuredata = json_decode($feature);



//get the weather

$WeatherURL = 'https://goweather.herokuapp.com/weather/Nairobi';
$weatherResponse = file_get_contents($WeatherURL);
$Weatherdata = json_decode($weatherResponse);
