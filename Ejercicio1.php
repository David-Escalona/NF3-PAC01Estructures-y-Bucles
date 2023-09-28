<?php
// Get the current date
$currentDate = new DateTime();

// Calculate two days ago
$twoDaysAgo = clone $currentDate;
$twoDaysAgo->modify('-2 days');

// Calculate the next month
$nextMonth = clone $currentDate;
$nextMonth->modify('+1 month');

// Calculate the number of days left in the next month
$daysLeftInNextMonth = $nextMonth->format('t') - $currentDate->format('j');

// Calculate the number of months left in the current year
$monthsLeftInYear = 12 - $currentDate->format('n');

// Fill in the placeholders
echo "Hace dos dias fue: " . $twoDaysAgo->format('l') . ".\n";
echo "El proximo mes es: " . $nextMonth->format('F') . ".\n";
echo "Faltan $daysLeftInNextMonth dias para terminar el mes.\n";
echo "Quedan $monthsLeftInYear meses para acabar el año.\n";
?>


