<?php
session_start();

$game = @include 'round.php';
if (!is_array($game) || !isset($game['categories'], $game['pointScale'])) {
    error_log("Game data file 'round.php' is invalid or missing required keys.", 0);
    $game = ['categories' => [], 'pointScale' => 100]; // Default fallback
}

include 'template.php';