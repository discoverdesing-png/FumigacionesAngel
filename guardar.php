<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

// Recibir datos JSON
$datos = file_get_contents('php://input');

// Validar que sea JSON válido
$data = json_decode($datos);
if ($data === null) {
    echo '{"ok": false, "error": "JSON inválido"}';
    exit;
}

// Guardar en archivo
if (file_put_contents('datos.json', $datos)) {
    echo '{"ok": true}';
} else {
    echo '{"ok": false, "error": "No se pudo guardar"}';
}
?>