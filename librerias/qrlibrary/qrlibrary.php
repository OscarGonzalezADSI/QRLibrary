
<?php

function stephan001($ruta){
    $width = $height = 100;
    $url = urlencode($ruta);
    $imgsrc = "http://chart.googleapis.com/chart?chs={$width}x{$height}&cht=qr&chl={$url}";
    echo $imgsrc;
}

function stephan002L($ruta){
    $width = $height = 100;
    $error = "L"; 
    $url = urlencode($ruta);
    $imgsrc = "http://chart.googleapis.com/chart?chs={$width}x{$height}&cht=qr&chld={$error}&chl={$url}";
    echo $imgsrc;
}

function stephan002M($ruta){
    $width = $height = 100;
    $error = "M"; 
    $url = urlencode($ruta);
    $imgsrc = "http://chart.googleapis.com/chart?chs={$width}x{$height}&cht=qr&chld={$error}&chl={$url}";
    echo $imgsrc;
}

function stephan002Q($ruta){
    $width = $height = 100;
    $error = "Q"; 
    $url = urlencode($ruta);
    $imgsrc = "http://chart.googleapis.com/chart?chs={$width}x{$height}&cht=qr&chld={$error}&chl={$url}";
    echo $imgsrc;
}

function stephan002H($ruta){
    $width = $height = 100;
    $error = "H"; 
    $url = urlencode($ruta);
    $imgsrc = "http://chart.googleapis.com/chart?chs={$width}x{$height}&cht=qr&chld={$error}&chl={$url}";
    echo $imgsrc;
}

function stephan002HB1($ruta){
    $width = $height = 100;
    $error = "H";
    $border = 1;
    $url = urlencode($ruta);
    $imgsrc = "http://chart.googleapis.com/chart?chs={$width}x{$height}&cht=qr&chld={$error}|{$border}&chl={$url}";
    echo $imgsrc;
}

function stephan002HB2($ruta){
    $width = $height = 100;
    $error = "H";
    $border = 2;
    $url = urlencode($ruta);
    $imgsrc = "http://chart.googleapis.com/chart?chs={$width}x{$height}&cht=qr&chld={$error}|{$border}&chl={$url}";
    echo $imgsrc;
}

function stephan002HB3($ruta){
    $width = $height = 100;
    $error = "H";
    $border = 3;
    $url = urlencode($ruta);
    $imgsrc = "http://chart.googleapis.com/chart?chs={$width}x{$height}&cht=qr&chld={$error}|{$border}&chl={$url}";
    echo $imgsrc;
}

function stephan002HB4($ruta){
    $width = $height = 100;
    $error = "H";
    $border = 4;
    $url = urlencode($ruta);
    $imgsrc = "http://chart.googleapis.com/chart?chs={$width}x{$height}&cht=qr&chld={$error}|{$border}&chl={$url}";
    echo $imgsrc;
}

function stephan004($ruta){
    $width = $height = 100;
    $url = urlencode($ruta);
    $qr  = file_get_contents("http://chart.googleapis.com/chart?chs={$width}x{$height}&cht=qr&chl={$url}");
    $filename = "imagenes/";
    $filename .= str_replace(array("http://", "https://", ".com"), "", $ruta);
    $filename .= "b.png";
    if (!file_exists($filename)){
        file_put_contents($filename, $qr);
    }
    $imgParm  = "src=\"$filename\" ";
    $imgParm .= "width=\"$width\" ";
    $imgParm .= "height=\"$height\" ";
    $imgParm .= "alt=\"ScanMyQR!\"";    
    echo $imgParm;
}

function stephan004HB4($ruta){
    $width = $height = 100;
    $error = "H";
    $border = 4;
    $url = urlencode($ruta);
    $qr  = file_get_contents("http://chart.googleapis.com/chart?chs={$width}x{$height}&cht=qr&chld={$error}|{$border}&chl={$url}");
    $filename = "imagenes/";
    $filename .= str_replace(array("http://", "https://", ".com"), "", $ruta);
    $filename .= "a.png";
    if (!file_exists($filename)){
        file_put_contents($filename, $qr);
    }
    $imgParm  = "src=\"$filename\" ";
    $imgParm .= "width=\"$width\" ";
    $imgParm .= "height=\"$height\" ";
    $imgParm .= "alt=\"ScanMyQR!\"";    
    echo $filename;
}

function QrPost($contenido){
    
    $datos_post = http_build_query(
        array(
            'cht' => 'qr',
            'chs' => '300x300',
            'chl' => $contenido
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
    $qr = fopen($url, 'r', false, $context);

    $filename = "imagenes/";
    $filename .= "b.png";
    if (!file_exists($filename)){
        file_put_contents($filename, $qr);
    }

    echo $filename;
}

function QrPost2($contenido){
    
    $datos_post = http_build_query(
        array(
            'cht' => 'qr',
            'chs' => '300x300',
            'chl' => $contenido
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
    $qr = fopen($url, 'r', false, $context);

    $filename = "imagenes/";
    $filename .= "a.png";
    if (!file_exists($filename)){
        file_put_contents($filename, $qr);
    }

    echo $filename;
}


?>


