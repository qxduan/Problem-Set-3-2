<?php
// Check if 'n' is provided in the query string and is a number
if (isset($_GET['n']) && ctype_digit($_GET['n'])) {
    $n = (int)$_GET['n'];
    $fibSequence = [0, 1]; // Starting values for the Fibonacci sequence


    for ($i = 2; $i < $n; $i++) {
        $fibSequence[] = $fibSequence[$i - 1] + $fibSequence[$i - 2];
    }

 
    $fibSequence = array_slice($fibSequence, 0, $n);
    $result = [
        'length' => $n,
        'fibSequence' => $fibSequence
    ];

    header('Content-Type: application/json');


    echo json_encode($result);
} else {

    echo json_encode(['error' => 'Invalid input. Please provide a numeric value for "n".']);
}
?>
