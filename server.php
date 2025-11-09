<?php
/**
 * server.php
 * * Este archivo es una plantilla básica de controlador o punto de entrada para el servidor.
 * La web de TecnoGuel es estática (HTML/CSS/JS) y no requiere PHP para funcionar,
 * pero esta plantilla se incluye por si se añade funcionalidad dinámica (formularios, DB) en el futuro.
 */

// ----------------------------------------------------
// 1. Configuración y manejo de errores (opcional)
// ----------------------------------------------------

// Define el nivel de reporte de errores (desactivar en producción)
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

// ----------------------------------------------------
// 2. Lógica para Servir Archivos (Mayormente innecesaria con Hosting Estático)
// ----------------------------------------------------

$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Si la URL solicitada es la raíz, redirige o incluye el archivo principal.
if ($request_uri === '/' || $request_uri === '/index.html') {
    // Incluir directamente el contenido HTML
    include 'index.html';
} 
/*
// Si la web fuera dinámica, aquí irían las rutas:
elseif ($request_uri === '/servicios') {
    // Aquí iría el código para cargar una plantilla dinámica
}
*/
else {
    // ----------------------------------------------------
    // 3. Manejo de Errores 404
    // ----------------------------------------------------
    http_response_code(404);
    echo '<!DOCTYPE html><html lang="es"><head><meta charset="UTF-8"><title>Error 404 | TecnoGuel</title>';
    echo '<style>body { font-family: sans-serif; text-align: center; margin-top: 50px; background-color: #0f0c29; color: #ff00cc; }</style></head><body>';
    echo '<h1>🤖 ERROR 404 - Archivo no Encontrado 🤖</h1>';
    echo '<p>El sistema detecta una anomalía en la ruta: ' . htmlspecialchars($request_uri) . '</p>';
    echo '<p>Vuelva a la <a href="/">Página Principal</a> de TecnoGuel.</p>';
    echo '</body></html>';
}

?>
