<?php
require_once(__DIR__ . "/../helper/input.php");
require_once(__DIR__ . "/../bussiness-logic/remove-todolist.php");


// menampilkan halaman untuk semua todolist
function viewRemoveTodolist()
{
    echo "Hapus kegiatan" . PHP_EOL;
    echo "tekan \"x\" untuk batal";

    $userChoice = input("masukkan id yang ingin dihapus ");



    if ($userChoice == "x") {
        echo "Batal menghapus" . PHP_EOL;
    } else {
        $success = removeTodolist($userChoice);

        if ($success) {
            echo "Sukses menghapus kegitan no. $userChoice" . PHP_EOL;
        } else {
            echo "Gagal menghapus kegiatan no. $userChoice" . PHP_EOL;
        }
    }
}
