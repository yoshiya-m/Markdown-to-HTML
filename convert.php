<?php

require 'vendor/autoload.php';

$Parsedown = new Parsedown();
$Parsedown->setSafeMode(true);



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inputValue = $_POST['inputValue'] ?? '';
    echo $Parsedown->text($inputValue);
}


