<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap solo css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        <div class="container p-3">
            <h1 class="py-2 text-center">To Do List</h1>
            <div class="input-group mb-3    ">
                <input type="text" class="form-control" placeholder="Aggiungi To Do" v-model="newToDoText">
                <button class="btn btn-outline-primary" type="button" @click="addToDo">Aggiungi</button>
            </div>
            <ul>
                <li v-for="(item,index) in todolist" :key="index" :class="item.done ? 'done' : ''">
                    <div class="d-flex justify-content-between">
                        <span>{{item.text}}</span>
                        <span class=""><i class="fa-solid fa-trash"></i></span>
                    </div>
                </li>
            </ul>
        </div>

    </div>

    <script src="./script/script.js"></script>
</body>

</html>