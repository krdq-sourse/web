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
if ($_COOKIE['email'] == 'admin@gmail.com'):
    ?>

    <div class="container" align="center">
        <ul class="nav nav-pills">
            <?php
            $dir = 'temp';
            $files = scandir($dir, 1);
            foreach ($files as $value) {
                if (!($value == '.' || $value == '..')) {

                    echo "<li role='presentation' class='action'><a href='http://web/view.php/?r=$value'> $value &nbsp;</a></li>";
                }
            }
            if ($_COOKIE['email'] == 'admin@gmail.com')
                echo "<li role='presentation' class='active'><a href=''> Для Админа &nbsp;</a></li>";
            $e = $_COOKIE['email'];
            echo "<li role='presentation'  class='action'><a href='http://web/logout.php'> Log out ($e) &nbsp;</a></li>";
            ?>
            <br>
            <br>
            <br>
            <br>
            <br>

    </div>

    <div class="container">
        <div class="radio">
            <label><input id="dir" type="radio" name="optradio" onclick="f()">Добавить папку</label>
        </div>
        <div class="radio">
            <label><input id="file" type="radio" onclick="g()" name="optradio">Добавить контента</label>
        </div>

        <div id="f">
        </div>
    </div>
    <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
    <script>
        function f() {
            instance = document.getElementById('f');
            instance.innerHTML = '<form class="navbar-form navbar-left" action="mkdir.php" method="post" role="search">\n' +
                '  <div class="form-group">\n' +
                '    <input type="text" class="form-control" name="dir_name" placeholder="Имя новой папки">\n' +
                '  </div>\n' +
                '  <button type="submit" class="btn btn-default">Создать</button>\n' +
                '</form>';

            $(document).ready(function () {
                $("form").submit(function (event
                ) {

                    event.preventDefault();
                    $.ajax({
                        type: $(this).attr('method'),
                        url: $(this).attr('action'),
                        data: new FormData(this),
                        contentType: false,
                        cache: false,
                        processData: false,


                        success: function (response) {
                            var jsonData = JSON.parse(response);


                            if (jsonData.data == undefined) {
                                alert('Ошибка, не удалось создать папку!')

                            } else {
                                alert('Папка успешно создана!');
                                location.href = location.href;
                            }


                        },

                    })

                })


            });

        }


        function g() {
            instance = document.getElementById('f');
            instance.innerHTML = '<form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\n' +
                '        <div class="form-group">\n' +
                '           <label for="sel1">Выберети папку</label>\n' +
                '  <select class="form-control" id="sel1">\n' +
                <?
                $dir = 'temp';
                $files = scandir($dir, 1);
                foreach ($files as $value) {
                    if (!($value == '.' || $value == '..')) {

                        echo " '    <option>$value</option>' +";
                    }
                }
                //            '    <option>1</option>\n' +
                //            '    <option>2</option>\n' +
                //            '    <option>3</option>\n' +
                //            '    <option>4</option>\n' +
                ?>
                '  </select>' +
                '        </div>\n' +
                '        <div class="form-group">\n' +
                '            <label for="file" class="col-sm-2 control-label">Файл</label>\n' +
                '            <div class="col-sm-8">\n' +
                '                <input type="file" name="file" id="file">\n' +
                '            </div>\n' +
                '        </div>\n' +
                '        <div class="form-group">\n' +
                '            <div class="col-sm-offset-2 col-sm-8">\n' +
                '                <button type="submit" id="submit" class="btn btn-primary">Отправить</button>\n' +
                '                <div></div>\n' +
                '            </div>\n' +
                '        </div> \n' +
                '    </form>';
        }


    </script>
    <script></script>

<?php endif;

?>
