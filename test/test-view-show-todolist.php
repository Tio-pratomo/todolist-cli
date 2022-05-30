<?php
require_once("../view/view-show-todolist.php");
require_once("../view/view-add-todolist.php");
require_once("../view/view-remove-todolist.php");

require_once("../bussiness-logic/add-todolist.php");

addTodolist("makan");
addTodolist("minum");
addTodolist("mandi");

viewShowTodolist();
