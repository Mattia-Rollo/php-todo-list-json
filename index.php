<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- vue.js  -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- axios  -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- style.css -->
    <link rel="stylesheet" href="./styles/style.css">
    <!-- titolo -->
    <title>ToDoList-Php</title>
</head>

<body>
    <div id="app">
        <div @click="getToDo">{{message}}</div>
    </div>

    <script src="./script/script.js"></script>
</body>

</html>