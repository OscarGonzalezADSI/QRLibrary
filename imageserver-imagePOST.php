<?php

header('content-type: image/png');

$chd = "Hello world";

$datos_post = http_build_query(
    array(
        'cht' => 'qr',
        'chs' => '300x300',
        'chl' => $chd
    )
);

$opciones = array(
    'http' => array(
        'method'  => 'POST',
        'header'  => 'Content-type: application/x-www-form-urlencoded',
        'content' => $datos_post
    )
);

$context = stream_context_create($opciones);
$url = 'https://chart.googleapis.com/chart';
$fp = fopen($url, 'r', false, $context);
fpassthru($fp);
fclose($fp);

?>
