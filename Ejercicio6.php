<?php
session_start();

if (!isset($_SESSION['page_load_count'])) {
    $_SESSION['page_load_count'] = 0;
}

$_SESSION['page_load_count']++;

$pageLoadCount = $_SESSION['page_load_count'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de paginas guardadas</title>
</head>
<body>
    <h1>Pagina Guardada!</h1>
    <p>Has visitado esta pagina: <?php echo $pageLoadCount; ?> Veces.</p>
</body>
</html>



