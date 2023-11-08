
<style>
.office-hours p {
    margin: 0;
    padding: 5px;
    background-color: #f0f0f0;
    border: 1px solid #ddd;
}
.office-hours p strong {
    display: inline-block;
    width: 80px;
}
</style>


<?php
// hours.php
session_start(); // Continue the session

include_once("utils.php"); 
// Read the hours data from the session variable
$hoursJson = $_SESSION['hours'] ?? '';
$hoursArray = json_decode($hoursJson, true); 

// Use the function to display the hours
echo displayHours($hoursArray);
?>
