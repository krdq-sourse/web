<?php

if (isset($_POST['dir_name']) && $_POST['dir_name']) {

    $n = 'temp/' . $_POST['dir_name'];
    mkdir($n);
    echo json_encode(array('success' => 1, 'data' => 'content'));
} else
    echo json_encode(array('success' => 0));




