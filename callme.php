<?php
    $data = array('name' => 'callme', 'content' => 'hello wold', 'money' => '100', 'x' => $_GET['x'], 'y' => $_GET['y']);
    echo json_encode($data);
?>
