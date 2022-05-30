<?php
// menampilkan semua todolistnya
function showTodolist()
{
    global $todolist;

    echo "Aplikasi Todolist" . PHP_EOL;

    foreach ($todolist as $number => $value) {
        echo "{$number}. {$value}" . PHP_EOL;
    }
}
