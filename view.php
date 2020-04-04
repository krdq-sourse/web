<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

    <script type="text/javascript" src="https://unpkg.com/popper.js"></script>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная</title>
    <style>
        .thumb img {
            -webkit-filter: grayscale(0);
            filter: none;
            border-radius: 5px;
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 5px;
        }

        .thumb img:hover {
            -webkit-filter: grayscale(1);
            filter: grayscale(1);
        }

        .thumb {
            padding: 5px;
        }
    </style>
</head>
<body>

<?php


if ($_COOKIE['ver']):
$topic = $_GET['r'];
?>

<div class="container" align="center">
    <ul class="nav nav-pills">
        <?php
        $dir = 'temp';
        $files = scandir($dir, 1);
        foreach ($files as $value) {
            if (!($value == '.' || $value == '..')) {
                if ($value == $topic) echo "<li role='presentation' class='active'><a > $value &nbsp;</a></li>";
                else  echo "<li role='presentation' class='action'><a href='http://web/view.php/?r=$value'> $value &nbsp;</a></li>";
            }
        }
        if ($_COOKIE['email'] == 'admin@gmail.com')
            echo "<li role='presentation' class='action'><a href='admin.php'> Для Админа &nbsp;</a></li>";
        $e = $_COOKIE['email'];
        echo "<li role='presentation'  class='action'><a href='http://web/logout.php'> Log out ($e) &nbsp;</a></li>";
        ?>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="row">
            <?php
            $dir = "temp/$topic";
            $files = scandir($dir, 1);
            $count = sizeof($files) - 1;
            $i = 1;

            echo '  <div class="col-lg-3 col-md-4 col-6 thumb">';
            foreach ($files as $value) {
                if (!($value == '.' || $value == '..')) {

                    echo "<a data-fancybox=\"gallery\" href=\"http://web/temp/$topic/$value\">
    <img class=\"img-fluid\" src=\"http://web/temp/$topic/$value\" style='width: 100%; height: 100%' alt=\"$topic\"></a>";
                    if (($i % ((float)$count / 4.0)) == 0) {
                        echo '</div> <div class="col-lg-3 col-md-4 col-6 thumb">';
                    }
                    $i++;
                }

            }
            ?>
        </div>
        <?php endif; ?>
