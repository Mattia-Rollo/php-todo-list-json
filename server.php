<?php
$dataJson = file_get_contents('./data.json');

// var_dump(json_decode($dataJson));

$dataJsonEncode = json_decode($dataJson);


echo json_encode($dataJsonEncode);

// $newtodo = [
//     [
//         "text" => "React",
//         "done" => "false",
//     ]
// ];

// $json_string = json_encode($newtodo);

// var_dump(json_decode($dataJsonEncode));


// file_put_contents('./data.json', $json_string);

header('Content-Type: application/json');


// echo $dataJsonEncode;
?>