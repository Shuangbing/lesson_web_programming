<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Report3-2</title>
</head>
<body>
<table border="2">
<?php
    for ($x = 1; $x <= 9; $x++) {
        echo '<tr>';
        for ($y = 1; $y <= 9; $y++) {
            echo '<th>'.$x * $y.'</th>';
        }
    }
?>
</table>
</body>
</html>