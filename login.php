<?php
if (isset($_POST['email']) && $_POST['email'] && isset($_POST['pass']) && $_POST['pass']) {
    $text = $_POST['login'] . ' ' . $_POST['password'] . PHP_EOL; // Исходная строка
    $handle = fopen("base.txt", "r"); //файл в режиме чтения
    while (!feof($handle)) {
        $buffer = fgets($handle, 4096);

//    $a = explode($buffer," ");

        if ($buffer == $text) {

            echo json_encode(array('success' => 1, 'data' => 'content'));
            return;
        }
    }
    echo json_encode(array('success' => 1));
    fclose($handle);

} else
    echo json_encode(array('success' => 0));