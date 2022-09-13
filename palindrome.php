<?php

$string= $_GET["string"];

$reversed=strrev($string);

$palind = ($reversed==$string);
$results=[
    "string" => $string,
    "palind" => ($palind)
];
echo json_encode($results);
?>

