<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная</title>

</head>
<body>

<?php
if ($_COOKIE['ver']): ?>
    <div class="container" align="center">
        <ul class="nav nav-pills">
            <?php
            $dir = 'temp';
            $files = scandir($dir, 1);
            foreach ($files as $value) {
                if (!($value == '.' || $value == '..'))
                    echo "<li role='presentation' class='action'><a href='view.php/?r=$value'> $value &nbsp;</a></li>";
            }
            if ($_COOKIE['email'] == 'admin@gmail.com')
                echo "<li role='presentation' class='action'><a href='admin.php'> Для Админа &nbsp;</a></li>";
            $e = $_COOKIE['email'];
            echo "<li role='presentation'  class='action'><a href='logout.php'> Log out ($e) &nbsp;</a></li>";
            ?>
        </ul>
        Задание веб-программированию Гаркавенка Дениса Константиновича, студкента группы К17.1, <b>самого лучшего
            клледжа в мире</b>
        <i>OOKT "Сервер"</i> ))<br>
        Сверху находиться динамическе меню, которое выводит названия папок, находяшхся на сервере в определенной
        деректории<br>
        При создании новой папки или при удалении существующей список папок будет переписан.<br>
        Добавлять или удалять папку можно прямо с ссайта, но только под аккаунтом админа.
        (<i>email: <b>admin@gmail.com</b> password: <b>admin</b></i> )<br>
        При авторизации под админом, в меню появиться елемент который ссылает на admin.php на котором будет форма, для
        манипуляции
        с данными на сервере.
    </div>
<?php endif; ?>
