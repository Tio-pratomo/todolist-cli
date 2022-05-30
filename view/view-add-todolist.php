<?php
require_once(__DIR__ . "/../model/todolist.php");
require_once(__DIR__ . "/../bussiness-logic/add-todolist.php");
require_once(__DIR__ . "/../helper/input.php");

echo __DIR__ . PHP_EOL;

// menampilkan halaman untuk semua todolist
function viewAddTodolist()
{
    echo "Tambahkan Kegiatan" . PHP_EOL;
    $todo = input("Kegiatan (tekan \"x\" untuk batal) ");

    if ($todo == "x") {
        echo "batal menambah kegiatan" . PHP_EOL;
    } else {
        addTodolist($todo);
    }
}
