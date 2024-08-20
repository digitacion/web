<?php
// Configuración
$carpeta_pdf = 'C:/xampp/htdocs/PROYEC_PDF/PDFS'; // Carpeta donde están almacenados los PDF

// Obtener la consulta de búsqueda
$query = isset($_GET['query']) ? trim($_GET['query']) : '';

if ($query !== '') {
    // Escanear la carpeta de PDF
    $archivos = scandir($carpeta_pdf);
    $resultados = [];

    // Buscar archivos que coincidan con la consulta
    foreach ($archivos as $archivo) {
        if (strpos(strtolower($archivo), strtolower($query)) !== false && pathinfo($archivo, PATHINFO_EXTENSION) === 'pdf') {
            $resultados[] = $archivo;
        }
    }

    // Mostrar resultados
    if (count($resultados) > 0) {
        echo "<h2>Resultados de búsqueda para: '" . htmlspecialchars($query, ENT_QUOTES, 'UTF-8') . "'</h2>";
        echo "<ul>";
        foreach ($resultados as $resultado) {
            echo "<li><a href='" . str_replace('C:/xampp/htdocs', '', $carpeta_pdf) . "/" . urlencode($resultado) . "' target='_blank'>" . htmlspecialchars($resultado, ENT_QUOTES, 'UTF-8') . "</a></li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No se encontraron archivos PDF que coincidan con la búsqueda.</p>";
    }
} else {
    echo "<p>No se ingresó ninguna palabra clave.</p>";
}
?>