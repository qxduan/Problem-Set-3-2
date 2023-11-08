<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Times Table</title>
</head>
<body>

<h2>Times Table</h2>
<h3>To display Times Table, use "?n=*" at the suffix of the URL address</h3>
<?php
// Check if 'n' is set in the query string and if it's a number
if (isset($_GET['n']) && is_numeric($_GET['n'])) {
    $n = intval($_GET['n']); // Convert 'n' to an integer

    // Generate and display the times table for 'n'
    for ($i = 1; $i <= 12; $i++) {
        echo "$i x $n = " . ($i * $n) . "<br>";
    }
} else {
    // If 'n' is not set or not a number, display a message
    echo "Please provide a number for 'n' in the query string.";
}
?>

</body>
</html>
