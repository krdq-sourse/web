<?php

if (isset($_POST['email']) && $_POST['email'] && isset($_POST['pass']) && $_POST['pass']) {
    if (!($_POST['pass'] == $_POST['pass1'])) {
        echo json_encode(['success' => 1, 'data' => 'hui', 'value' => 'df']);
        return;
    }
    // do user authentication as per your requirements
    $mytext = $_POST['email'] . ' ' . $_POST['pass'] . PHP_EOL; // Исходная строка

    $handle = fopen("base.txt", "r"); //файл в режиме чтения
    while (!feof($handle)) {
        $buffer = fgets($handle, 4096);
        // echo "<br> $buffer || $mytext";
//    $a = explode($buffer," ");

        if ($buffer == $mytext) {
            //  ошибка, вы уже зарегистрирваны
            echo json_encode(['success' => 1, 'data' => 'hui']);
            // return;
            return;
        }
    }
    fclose($handle);

    $fp = fopen("base.txt", "a");
    $test = fwrite($fp, $mytext);
    if ($test) $r = 0;//echo 'vas ZAPISANO!!!';
    else {
        echo json_encode(array('success' => 1, 'data' => 'hui'));
        return;
    }
    fclose($fp); //Закрытие файла

    // based on successful authentication
    echo json_encode(array('success' => 1));
    return;
} else {

}
echo json_encode(array('success' => 0));

// Открываем файл в режиме записи

//$data = ['success' => false,   'message' => 'Тест', 'phone' => '380963039700'];
//header('Content-Type: application/json');
//echo json_encode($data);

//
