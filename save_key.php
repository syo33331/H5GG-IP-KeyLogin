<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $content = json_decode(file_get_contents('php://input'), true);
    $key = $content['key'];
    $ip = $content['ip'];

    $file = 'key.txt';
    file_put_contents($file, $key . '=' . $ip . PHP_EOL, FILE_APPEND);
}
?>
