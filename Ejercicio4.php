<?php
$text = "";
$color = "black";
$font = "Arial, sans-serif";
$size = "16px";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $text = $_POST["text"];
    $color = $_POST["color"];
    $font = $_POST["font"];
    $size = $_POST["size"];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formato de texto</title>
</head>
<body>
    <h1>Formato de texto</h1>
    <form method="post">
        <label for="text">Escribe un texto: </label><br>
        <textarea id="text" name="text" rows="4" cols="50"><?php echo $text; ?></textarea><br>

        <label for="color">Elige el color: </label>
        <input type="color" id="color" name="color" value="<?php echo $color; ?>"><br>

        <label for="font">Letra: </label>
        <select id="font" name="font">
            <option value="Arial, sans-serif" <?php if ($font === "Arial, sans-serif") echo "selected"; ?>>Arial</option>
            <option value="Times New Roman, serif" <?php if ($font === "Times New Roman, serif") echo "selected"; ?>>Times New Roman</option>
            <option value="Verdana, sans-serif" <?php if ($font === "Verdana, sans-serif") echo "selected"; ?>>Verdana</option>
        </select><br>

        <label for="size">Tamaño de letra: </label>
        <input type="number" id="size" name="size" value="<?php echo $size; ?>"><br>

        <input type="submit" value="Enviar">
    </form>

    <div style="color: <?php echo $color; ?>; font-family: <?php echo $font; ?>; font-size: <?php echo $size; ?>;">
        <?php echo $text; ?>
    </div>
</body>
</html>

