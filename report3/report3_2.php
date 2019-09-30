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
        for ($x = 0; $x <= 9; $x++) {
            echo "<tr>\n";
            for ($y = 0; $y <= 9; $y++) {
                if ($x == 0) {
                    if ($y == 0) {
                        echo "<th bgcolor=\"#C0C0C0\">x</th>\n";
                    } else {
                        echo "<th bgcolor=\"#C0C0C0\">" . $y . "</th>\n";
                    }
                } elseif ($y == 0) {
                    echo "<th bgcolor=\"#C0C0C0\">" . $x . "</th>\n";
                } else {
                    echo "<th>" . $x * $y . "</th>\n";
                }
            }
            echo "</tr>\n";
        }
        ?>
    </table>
</body>

</html>