<?php
require_once('../boot.php');
$title = "Список задач";
$page_title = "Список задач (скрытая страница)";
$content=file_get_contents("task_async_content.php");
include("../components/layout.php");
?>