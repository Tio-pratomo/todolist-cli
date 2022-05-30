<?php
require_once("../model/todolist.php");
require_once("../bussiness-logic/add-todolist.php");

addTodolist("Makan");
addTodolist("Minum");
addTodolist("Mandi");

var_dump($todolist);
