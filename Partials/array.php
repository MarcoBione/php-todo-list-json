<?php

$tasks = [
    [
        'task'=> 'allenamento'
    ],
    [
        'task'=> 'studio'
    ],
];

header('Content-Type: application/json');

echo json_encode($tasks);