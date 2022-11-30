<?php
header('Content-Type: application/json');
$dataJson = file_get_contents('./data.json');

$dataJsonEncode = json_encode($dataJson);

// var_dump($dataJsonEncode);

$newtodo = [
    [
        "text" => "React",
        "done" => "false",
    ]
];

$json_string = json_encode($newtodo);

// var_dump(json_decode($dataJsonEncode));


// file_put_contents('./data.json', $json_string);



echo json_decode($dataJsonEncode);
?>