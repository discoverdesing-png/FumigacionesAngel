<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$archivo = 'datos.json';

if (file_exists($archivo)) {
    echo file_get_contents($archivo);
} else {
    // Si no existe, devolver datos vacíos
    echo '{"clientes":[],"inventario":[]}';
}
?>