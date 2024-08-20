<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Archivos PDF</title>
</head>
<body>
    <h1>Buscar Archivos PDF</h1>
    <form action="mostrar_pdf.php" method="GET">
        <label for="query">Palabra clave:</label>
        <input type="text" id="query" name="query" required>
        <button type="submit">Buscar</button>
    </form>
</body>
</html>