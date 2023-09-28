<?php
$text = "";
$color = "black"; // Default color
$font = "Arial, sans-serif"; // Default font
$size = "16px"; // Default font size

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input
    $text = $_POST["text"];
    $color = $_POST["color"];
    $font = $_POST["font"];
    $size = $_POST["size"];

    if (isset($_POST["save_preference"]) && $_POST["save_preference"] == "yes") {
        // Create cookies to store preferences
        setcookie("user_text", $text, time() + (86400 * 30), "/"); // 30 days
        setcookie("user_color", $color, time() + (86400 * 30), "/");
        setcookie("user_font", $font, time() + (86400 * 30), "/");
        setcookie("user_size", $size, time() + (86400 * 30), "/");
    }
} else {
    // Check if preferences are stored in cookies
    if (isset($_COOKIE["user_text"])) {
        $text = $_COOKIE["user_text"];
    }
    if (isset($_COOKIE["user_color"])) {
        $color = $_COOKIE["user_color"];
    }
    if (isset($_COOKIE["user_font"])) {
        $font = $_COOKIE["user_font"];
    }
    if (isset($_COOKIE["user_size"])) {
        $size = $_COOKIE["user_size"];
    }
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
        <label for="text">Enter your text:</label><br>
        <textarea id="text" name="text" rows="4" cols="50"><?php echo $text; ?></textarea><br>

        <label for="color">Color del texto:</label>
        <input type="color" id="color" name="color" value="<?php echo $color; ?>"><br>

        <label for="font">Letra:</label>
        <select id="font" name="font">
            <option value="Arial, sans-serif" <?php if ($font == "Arial, sans-serif") echo "selected"; ?>>Arial</option>
            <option value="Times New Roman, serif" <?php if ($font == "Times New Roman, serif") echo "selected"; ?>>Times New Roman</option>
            <option value="Verdana, sans-serif" <?php if ($font == "Verdana, sans-serif") echo "selected"; ?>>Verdana</option>
        </select><br>

        <label for="size">Tamaño de la letra:</label>
        <input type="number" id="size" name="size" value="<?php echo $size; ?>"> px<br>

        <label for="save_preference">Guardar?</label>
        <input type="radio" id="yes" name="save_preference" value="yes" <?php if (isset($_POST["save_preference"]) && $_POST["save_preference"] == "yes") echo "checked"; ?>>
        <label for="yes">Yes</label>
        <input type="radio" id="no" name="save_preference" value="no" <?php if (!isset($_POST["save_preference"]) || $_POST["save_preference"] == "no") echo "checked"; ?>>
        <label for="no">No</label><br>

        <input type="submit" value="Enviar">
    </form>

    <div style="color: <?php echo $color; ?>; font-family: <?php echo $font; ?>; font-size: <?php echo $size; ?>;">
        <?php echo $text; ?>
    </div>
</body>
</html>


