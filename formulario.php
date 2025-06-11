<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Traductor de Letras al Chino</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="formulario">
    <h1>Traductor Español ➜ Chino</h1>

    <form action="traducir.php" method="POST">
        <div id="letras">
            <label for="letra">Ingresá una letra (a-z):</label>
            <input type="text" name="letra" id="letra" maxlength="1" required>
        </div>
    </form>
<div id="boton">
    <button type="submit"><a href="traducir.php">Traducir</a></button>
</div> 
</div>

</body>
</html>
