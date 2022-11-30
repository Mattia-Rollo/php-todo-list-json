<?php
$comics = file_get_contents('data.json');
$comics = json_decode($comics, true);
header('Content-Type: application/json');

echo json_encode($comics, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);