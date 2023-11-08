<?php
// util.php
function displayHours($hours) {
    $output = "<div class='office-hours'>";
    foreach ($hours as $day => $time) {
        $output .= "<p><strong>$day:</strong> $time</p>";
    }
    $output .= "</div>";
    return $output;
}
?>







