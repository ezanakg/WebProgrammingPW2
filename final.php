<?php
	$game = @include('round-final.php');
	if (!is_array($game) || (count($game) != 4) ||
		!isset($game['category'], $game['question'],
			   $game['answer'], $game['thanks'])) {
		error_log("Final JeoPHPardy questions file is invalid. " .
				  "Must contain 'category', 'question', 'answer', " .
				  "and 'thanks' sections.", 0);
		$game = []; // Ensure $game is an empty array to avoid further errors
	}
?><!doctype html>
<html>
<head>
    <title>HTTP Jeoparody</title>
    <style>
        html, body, table {margin: 0; padding: 0; background-color: #0000ff;}
        table {width: 100vw; height: 100vh; border: 0;}
        td, th {width: 100%; height: 100%; padding-top: 30vh; text-align: center; vertical-align: middle; background-color: #0000ff; color: #ffffee;}
    </style>
</head>
<body>
    <!-- Final Jeopardy functionality removed -->
</body>
</html>
