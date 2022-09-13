<?php


//date_default_timezone_set('Australia/Brisbane');

$christmasDay = strtotime('December 25');
$time= $_GET["time"];
//$time = time();
//echo $time;
//echo "hello";
$seconds1 = $christmasDay - $time;
$minutes1 = floor($seconds1 / 60);
$seconds = $seconds1-$minutes1*60;
$hours1 = floor($minutes1 / 60);
$minutes = $minutes1-$hours1*60;
$days = floor($hours1 / 24);
$hours=$hours1-24*$days;

$results= [
    "time" => $time,
    "days" => floor($days),
    "hours" => floor($hours),
    "minutes" => floor($minutes),
    "seconds" => floor($seconds)
];
echo json_encode($results);
?>