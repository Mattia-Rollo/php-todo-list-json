<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
        <h1 class="py-1">To Do List</h1>
        <div class="input-group mb-3 w-25">
            <input type="text" class="form-control" placeholder="Aggiungi To Do">
            <button class="btn btn-outline-primary" type="button">Aggiungi</button>
        </div>
        <ul>
            <li v-for="(item,index) in todolist" :key="index" :class="item.done ? 'done' : ''">{{item.text}}</li>
        </ul>


    </div>

    <script src="./script/script.js"></script>
</body>

</html>