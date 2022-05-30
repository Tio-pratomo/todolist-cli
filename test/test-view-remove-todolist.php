<?php
require_once("../model/todolist.php");
require_once("../bussiness-logic/add-todolist.php");
require_once("../bussiness-logic/show-todolist.php");
require_once("../view/view-remove-todolist.php");

addTodolist("makan");
addTodolist("minum");
addTodolist("mandi");


viewRemoveTodolist();

showTodolist();
