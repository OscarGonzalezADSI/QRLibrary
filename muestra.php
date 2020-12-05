
<?php
include "librerias/qrlibrary/qrlibrary.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<img width='300' height='300' src='imageserver-imageGET.php'>
<img width='300' height='300' src='imageserver-imagePOST.php'>
<img src="<?php stephan001("http://create.stephan-brumme.com"); ?>" />
<img src="<?php stephan002L("http://create.stephan-brumme.com"); ?>" />
<img src="<?php stephan002M("http://create.stephan-brumme.com"); ?>" />
<img src="<?php stephan002Q("http://create.stephan-brumme.com"); ?>" />
<img src="<?php stephan002H("http://create.stephan-brumme.com"); ?>" />
<img src="<?php stephan002HB1("http://create.stephan-brumme.com"); ?>" />
<img src="<?php stephan002HB2("http://create.stephan-brumme.com"); ?>" />
<img src="<?php stephan002HB3("http://create.stephan-brumme.com"); ?>" />
<img src="<?php stephan002HB4("http://create.stephan-brumme.com"); ?>" />
<img <?php stephan004("http://create.stephan-brumme.com"); ?> />
<img src="<?php stephan004HB4("http://create.stephan-brumme.com"); ?>" />
<img src="<?php QrPost("Hola mundo."); ?>" alt="revisar">
<img src="<?php QrPost2("Hola mundo."); ?>" alt="revisar">
</body>
</html>
