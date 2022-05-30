<?php
// menambah todolist
function addTodolist(string $todo)
{
    global $todolist;
    $isLength = sizeof($todolist) + 1;

    $todolist[$isLength] = $todo;
}
