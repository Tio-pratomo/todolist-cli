<?php
require_once(__DIR__ . "/model/todolist.php");

require_once(__DIR__ . "/bussiness-logic/show-todolist.php");
require_once(__DIR__ . "/bussiness-logic/add-todolist.php");
require_once(__DIR__ . "/bussiness-logic/remove-todolist.php");

require_once(__DIR__ . "/view/view-show-todolist.php");
require_once(__DIR__ . "/view/view-add-todolist.php");
require_once(__DIR__ . "/view/view-remove-todolist.php");


viewShowTodolist();
