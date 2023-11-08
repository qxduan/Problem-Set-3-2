<?php

session_start(); 


$officeHours = [
    'Monday'    => '9am - 4pm',
    'Tuesday'   => '9am - 4pm',
    'Wednesday' => '9am - 4pm',
    'Thursday'  => '9am - 4pm',
    'Friday'    => '9am - 4pm',
    'Saturday'  => 'Closed',
    'Sunday'    => 'Closed'
];

// Save the associative array into a session variable as a JSON string
$_SESSION['hours'] = json_encode($officeHours);

// Redirect to hours.php to display the hours
header('Location: hours.php');
exit();
?>
