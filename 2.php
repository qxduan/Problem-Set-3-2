<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .office-hours {
            font-family: Arial, sans-serif;
            margin-left: 20px;
        }

        .day {
            font-weight: bold;
        }

        .hours {
            margin-left: 10px;
        }
    </style>
    <title>Office Hours</title>
</head>
<body>
    <div class="office-hours">
        <?php
        $office_hours = [
            'Monday' => '9am - 4pm',
            'Tuesday' => '9am - 4pm',
            'Wednesday' => '9am - 4pm',
            'Thursday' => '9am - 4pm',
            'Friday' => '9am - 4pm',
            'Saturday' => 'Closed',
            'Sunday' => 'Closed'
        ];

        function display_office_hours($hours_array) {
            $output = "";
            foreach ($hours_array as $day => $hours) {
                $output .= "<div class='day'>$day:</div><div class='hours'>$hours</div>";
            }
            return $output;
        }

        echo display_office_hours($office_hours);

        
        ?>
    </div>
</body>
</html>
