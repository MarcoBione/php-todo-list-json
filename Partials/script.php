<?php

$tasks = file_get_contents('./tasks.json');

$phparray=json_decode($tasks, true);

if(isset($_POST['task'])){
   $template = [
        "task"=> $_POST['task'],
        "compleated" => false
    ];
    array_push($phparray, $template);

    file_put_contents('./tasks.json', json_encode($phparray));
};

header('Content-Type : application/json');

echo json_encode($tasks);
