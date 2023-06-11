<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>
<body class="container">
    <nav class="navbar">
        <ol class="navbar-nav">
            <li class="nav-item">
                <a href="http://localhost/1_занятие/reg/reg.php">Регистрация</a>
            </li>
            <li class="nav-item">
                <a href="http://localhost/1_занятие/login/login.php">Авторизация</a>
            </li>
            <li class="nav-item">
                <a href="http://localhost/1_занятие/tasks/task.php">Список дел</a>
            </li>
            <li class="nav-item">
                <a href="http://localhost/1_занятие/tasks/task_async.php">Список дел (асин)</a>
            </li>
            <li class="nav-item">
                <a href="http://localhost/1_занятие/login/logout.php">Выход</a>
            </li>
        </ol>
    </nav>
   <h1><?= $page_title ?></h1> 
   <main>
    <?= $content ?>
   </main>
</body>
</html>