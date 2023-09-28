<?php
$currentMonth = date('n');

$messages = [
    1 => "Buen Invierno!",
    2 => "Buen Invierno!",
    3 => "Buen Invierno!",
    4 => "Buen Invierno!",
    5 => "Buen Invierno!",
    6 => "Buen Verano!",
    7 => "Buen Verano!",
    8 => "Buen Verano!",
    9 => "Buen Otoño!",
    10 => "Buen Otoño!",
    11 => "Buen Otoño!",
    12 => "Buen Invierno!"
];

$message = $messages[$currentMonth];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seasonal Greeting</title>
</head>
<body>
    <h1><?php echo $message; ?></h1>
</body>
</html>

