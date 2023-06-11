<?php
require_once('../boot.php');
$title = "Список задач";
$page_title = "Список задач (скрытая страница)";
if (isset($_SESSION['login'])){
    $content = "
    <form action = 'add_task.php' method='post'>
    <textarea cols=50 rows=10 name='task'>
    </textarea><br>
    <input type='submit' value='Отправить'>
    <form>";

    $sql = "SELECT * FROM tasks";
    $stmt = get_mysqli()->query($sql);
    $content = $content."<table class='table'>";
    while ($row = $stmt->fetch_row()) 
    {
        $html_row = "";
        $html_row = $html_row . '<tr>';
        $html_row = $html_row . '<td>' . $row[1] . '</td><td>' . $row[2] . '</td>';
        $html_row = $html_row . '</tr>';

        $content = $content.$html_row;
    }
    $content = $content."</table>"; 
}
else
{
    $content = "Данные доступны только после авторизации";
    //header("Location: ../login/login.php");
}

include("../components/layout.php");
?>