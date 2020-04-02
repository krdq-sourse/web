<!doctype html>
<html lang="ru">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
</head>
<body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
<br>
<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>

<style>
    input[type="button"]:not(.default), input[type="submit"]:not(.default) {
        -webkit-border-radius: 3px;
        -webkit-background-clip: padding-box;
        -moz-border-radius: 3px;
        -moz-background-clip: padding;
        border-radius: 3px;
        background-clip: padding-box;
        -webkit-transition: color 0.2s ease, border 0.2s ease, background 0.2s ease, -webkit-box-shadow 0.2s ease;
        -moz-transition: color 0.2s ease, border 0.2s ease, background 0.2s ease, -moz-box-shadow 0.2s ease;
        -o-transition: color 0.2s ease, border 0.2s ease, background 0.2s ease, box-shadow 0.2s ease;
        transition: color 0.2s ease, border 0.2s ease, background 0.2s ease, box-shadow 0.2s ease;
        position: relative;
        margin: 0 7px;
        display: inline-block;
        min-width: 144px;
        max-width: 100%;
        padding: 15px 25px;
        font-family: "Arial", "Helvetica Neue", Arial, Helvetica, sans-serif;
        font-size: 14px;
        font-weight: 600;
        text-transform: uppercase;
        line-height: 1;
        border-width: 1px;
        border-style: solid;
        background-color: steelblue;
        color: #ddd;
    }
    .form {
        zoom: 1;
        display: block;
        width: auto;
        padding: 25px 0 0;
    }
    .form:before,
    .form:after {
        content: "";
        display: table;
    }
    .form:after {
        clear: both;
    }
    .form .form-group {
        zoom: 1;
        position: relative;
        margin-bottom: 25px;
    }
    .form .form-group:before,
    .form .form-group:after {
        content: "";
        display: table;
    }
    .form .form-group:after {
        clear: both;
    }
    .form .form-group:after {
        content: '';
        display: block;
        clear: both;
    }
    .form .form-group[class*="col-"] input[type=text],
    .form .form-group[class*="col-"] input[type=email],
    .form .form-group[class*="col-"] input[type=password] {
        display: inline-block;
        width: 100%;
        min-width: 0;
        max-width: 100%;
    }
    .form .form-control {
        -webkit-border-radius: 0;
        -webkit-background-clip: padding-box;
        -moz-border-radius: 0;
        -moz-background-clip: padding;
        border-radius: 0;
        background-clip: padding-box;
        -webkit-box-shadow: none;
        -moz-box-shadow: none;
        box-shadow: none;
        height: auto;
        font-size: 17px;
        font-weight: 300;
        background-color: #ffffff;
        border-style: solid;
        border-width: 1px 1px 1px 3px;
        border-top-color: #d7d7d7;
        border-right-color: #d7d7d7;
        border-bottom-color: #d7d7d7;
    }
    input[type=text],
    input[type=email],
    input[type=password] {
        -webkit-transition: color 0.2s ease, background 0.3s ease;
        -moz-transition: color 0.2s ease, background 0.3s ease;
        -o-transition: color 0.2s ease, background 0.3s ease;
        transition: color 0.2s ease, background 0.3s ease;
        -webkit-border-radius: 0;
        -webkit-background-clip: padding-box;
        -moz-border-radius: 0;
        -moz-background-clip: padding;
        border-radius: 0;
        background-clip: padding-box;
        -webkit-box-shadow: none;
        -moz-box-shadow: none;
        box-shadow: none;
        margin: 0;
        vertical-align: top;
        display: inline-block;
        width: 100%;
        font-size: 17px;
        color: #8d8d8d;
        background-color: #ffffff;
        border-style: solid;
        border-width: 1px 1px 1px 3px;
        border-top-color: #d7d7d7;
        border-right-color: #d7d7d7;
        border-bottom-color: #d7d7d7;
        outline: none;
    }
    input[type=text]:hover,
    input[type=email]:hover,
    input[type=password]:hover {
        color: #000000;
    }
    input[type=text]:focus,
    input[type=email]:focus,
    input[type=password]:focus {
        outline: none;
        border-left-color: steelblue;
    }
    .well h3 {
        text-shadow: -1px -1px #FFF, -2px -2px #FFF, -1px 1px #FFF, -2px 2px #FFF, 1px 1px #FFF, 2px 2px #FFF, 1px -1px #FFF, 2px -2px #FFF, -3px -3px 2px #BBB, -3px 3px 2px #BBB, 3px 3px 2px #BBB, 3px -3px 2px #BBB;
        color: steelblue;
        transition: all 1s;
    }
</style>

<br>
<br>
<br>
<br>
<br>
<div class="container">
    <div class="row">

        <div class="col-md-6 col-md-offset-3 well">
            <h1 align="center">Регистрация</h1>
            <!--            <h3 class="text-center">Регистрация</h3>-->

            <form class="form" action="action.php" method="post">
                <div class="col-xs-12">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Введите Имя"/>
                    </div>

                </div>
                <div class="col-xs-12">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Ваш E-mail" name="email"/>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="form-group">
                        <input type="password" class="form-control" value="samplepass" name="pass"/>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="form-group">
                        <input type="password" class="form-control" value="sampleass" name="pass1"/>
                    </div>
                </div>
                <div class="text-center col-xs-12">
                    <div><a href="index.php" style="text-decoration: none">< назад </a>> <input id="go" type="submit"
                                                                                                class="btn btn-primary"
                                                                                                value="Submit"/></div>
                </div>

            </form>

        </div>
    </div>
    <script>

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
                        a = true;
                        if (jsonData.value != undefined) {
                            alert('Пароли не совпадают!');
                            return;
                        }

                        if (jsonData.data != undefined) {
                            alert('Аккаунт с таким именем уже зарегистрирован! \n регистрация не была завершина!')
                        } else {
                            alert('Регистрация прошла успешно!');
                            location.href = 'index.php';
                        }


                    },

                })

            })


        });

        // $.ajax({
        //     type: 'post',
        //     url: '/action.php'. // без http:// и домена
        //         dataType: 'json',
        //     data: {id: 5555, phone: 4444},
        // success: function(data) {
        //     if (!data.success) {
        //         $("#error").html(data.message);
        //         console.log(data.phone); // 4444
        //     }
        // }
        // });

    </script>
</body>
</html>

<?php
