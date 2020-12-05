
<?php
// ----------------------------------------------------------
// creacion de un contexto
// ----------------------------------------------------------

$url = "http://www.example.com";

$options = array(
    'http'=>array(
        'method'=>"GET",
        'header'=>"Accept-language: en\r\n" .
        "Cookie: foo=bar\r\n"
    )
);

$context = stream_context_create($options);
$qr = fopen($url, 'r', false, $context);
fpassthru($qr);
fclose($qr);

?>
