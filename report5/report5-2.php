<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array Echo</title>
</head>

<body>
    <div>
        <table border="1">
            <tr>
                <th>Date</th>
                <th>Temperature</th>
                <th>Pressure</th>
                <th>Humidity</th>
            </tr>
            <?php

            $a[0]['date'] = '2010/4/1';
            $a[0]['temperature'] = 20.3;
            $a[0]['pressure'] = 980;
            $a[0]['humidity'] = 60;

            $a[1]['date'] = '2010/4/2';
            $a[1]['temperature'] = 22.3;
            $a[1]['pressure'] = 970;
            $a[1]['humidity'] = 50;

            $a[2]['date'] = '2010/4/4';
            $a[2]['temperature'] = 18.3;
            $a[2]['pressure'] = 950;
            $a[2]['humidity'] = 70;

            
            for($i = 0; $i < count($a); $i++) {
                echo '<tr>';
                echo "<th>".$a[$i]['date']."</th>";
                echo "<th>".$a[$i]['temperature']."</th>";
                echo "<th>".$a[$i]['pressure']."</th>";
                echo "<th>".$a[$i]['humidity']."</th>";
                echo '</tr>';
            }
            
            ?>
        </table>
    </div>

</body>

</html>