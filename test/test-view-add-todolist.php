<?php

require_once("../view/view-add-todolist.php");
require_once("../bussiness-logic/add-todolist.php");
require_once("../bussiness-logic/show-todolist.php");

addTodolist("makan");
addTodolist("minum");
addTodolist("sikat gigi");
addTodolist("mandi");


viewAddTodolist();

showTodolist();
