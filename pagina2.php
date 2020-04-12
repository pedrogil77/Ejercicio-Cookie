<?php
$mi_nombre = $_REQUEST['name'];

setcookie('save_name',$mi_nombre, time() + 60 * 60 * 24 * 365,'/');

echo $mi_nombre;

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se guarda la Cookie</title>
</head>
<body>
    <a href="pagina.php">Volver a pagina principal</a>
</body>
</html>