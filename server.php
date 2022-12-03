<?php
$file_text = file_get_contents('./data.json');

// var_dump(json_decode($dataJson));
$file_url = "./data.json";

$todo_list = json_decode($file_text);

if (isset($_POST['newToDoText'])) {
    // echo 'ricevuto il  messaggio';
    $newToDo = [
        "text" => $_POST['newToDoText'],
        "done" => false
    ];
    array_push($todo_list, $newToDo);
    print_r($todo_list);

    file_put_contents($file_url, json_encode($todo_list));
} else if (isset($_POST['deleteIndex'])) {

    array_splice($todo_list, $_POST['deleteIndex'], 1);
    print_r($todo_list);
    file_put_contents($file_url, json_encode($todo_list));

} else if (isset($_POST['toggleToDo'])) {

    print_r($_POST['toggleToDo']);
    if ($todo_list[$_POST['toggleToDo']]->done == false) {
        $todo_list[$_POST['toggleToDo']]->done = true;
        file_put_contents($file_url, json_encode($todo_list));
    } else {
        $todo_list[$_POST['toggleToDo']]->done = false;
        file_put_contents($file_url, json_encode($todo_list));
    }
} else {
    // echo 'il parametro non è arrivatio';
    header('Content-Type: application/json');

    echo json_encode($todo_list);
}


// $newtodo = [
//     [
//         "text" => "React",
//         "done" => "false",
//     ]
// ];

// $json_string = json_encode($newtodo);

// var_dump(json_decode($dataJsonEncode));


// file_put_contents('./data.json', $json_string);

// header('Content-Type: application/json');


// echo $dataJsonEncode;
?>