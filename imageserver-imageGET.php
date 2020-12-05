<?php
header('content-type: image/png');
$opciones = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n" .
              "Cookie: foo=bar\r\n"
  )
);

$context = stream_context_create($opciones);
$fp = fopen('https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl=Hello%20world', 'r', false, $context);
fpassthru($fp);
fclose($fp);
?>
