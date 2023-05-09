<?php
/*
Descrizione
Dobbiamo creare una web-app che permetta di leggere e scrivere una lista di Todo.
Deve essere anche gestita la persistenza dei dati leggendoli da, e scrivendoli in un file JSON.

Stack
Html, CSS, VueJS (importato tramite CDN), axios, PHP

Consigli
Nello svolgere l’esercizio seguite un approccio graduale.

Prima assicuratevi che la vostra pagina index.php (il vostro front-end) riesca a comunicare correttamente con il vostro script PHP (le vostre “API”).

Lo step successivo è quello di “testare" l'invio di un nuovo task, sapendo che manca comunque la persistenza lato server (ancora non memorizzate i dati da nessuna parte).
Solo a questo punto sarà utile passare alla lettura della lista da un file JSON.

Bonus
Mostrare lo stato del task → se completato, barrare il testo
Permettere di segnare un task come completato facendo click sul testo
Permettere il toggle del task (completato/non completato)
Abilitare l’eliminazione di un task
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div id="app">

    <header class="border-bottom border-primary">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="title">
                <h1 class="text-primary">To Do List</h1>
            </div>
            <div>
                <div class="input-group">
                    <input type="text" class="form-control shadow-none border-bottom border-primary" name="task" placeholder="Inserisci una task...">
                    <button class="btn btn-outline-primary" @click="tasksListReader"><i class="fa-solid fa-plus"></i></button>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container py-5">
            <ul class="list-group" v-for="tasks,index in tasksList">
                <li class="list-group-item border-primary text-primary">{{tasks}}</li>
            </ul>
        </div>
    </main>

    <footer>

    </footer>
</div>


<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="./JS/script.js"></script>
</body>
</html>