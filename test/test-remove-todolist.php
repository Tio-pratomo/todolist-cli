<?php
require_once("../model/todolist.php");
require_once("../bussiness-logic/remove-todolist.php");
require_once("../bussiness-logic/add-todolist.php");
require_once("../bussiness-logic/show-todolist.php");

addTodolist("makan");
addTodolist("minum");
addTodolist("mandi");
addTodolist("goreng krupuk");

showTodolist();

removeTodolist(2);

showTodolist();

$success = removeTodolist(4);
var_dump($success);

showTodolist();
