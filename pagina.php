

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de Cookie</title>
</head>
<body>

<form action="pagina2.php" method="post">
    Nombre: <input type="text"  id ="name" placeholder="Nombre" name="name" 
    value="<?php if (isset($_COOKIE['save_name'])) echo $_COOKIE['save_name']?>"><br>
    Apellido: <input type="text" placeholder="Apellido"><br>
    <input type="submit" value="Enviar Cookie">
</form>

</body>
</html> 