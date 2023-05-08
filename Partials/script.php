<?php

if(isset($_POST['task'])){
    $newtask=$_POST['task'];
    echo $newtask;
}

$tasks = file_get_contents('tasks.json');
echo $tasks;
