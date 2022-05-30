<?php
require_once(__DIR__ . "/../bussiness-logic/show-todolist.php");
require_once(__DIR__ . "/../view/view-show-todolist.php");
require_once(__DIR__ . "/../view/view-remove-todolist.php");
require_once(__DIR__ . "/../helper/input.php");


// menampilkan halaman untuk semua todolist
function viewShowTodolist()
{
    while (true) {
        showTodolist();

        echo "Menu" . PHP_EOL;
        echo "1. Tambah Kegiatan" . PHP_EOL;
        echo "2. Hapus Kegiatan" . PHP_EOL;
        echo "x. Keluar" . PHP_EOL;

        $userChoice = input("Pilih");
        if ($userChoice == "1") {
            viewAddTodolist();
        } elseif ($userChoice == "2") {
            viewRemoveTodolist();
        } elseif ($userChoice == "x") {
            break;
        } else {
            echo "Perintah salah" . PHP_EOL;
        }
    }

    echo "Sampai jumpa lagi" . PHP_EOL;
}
