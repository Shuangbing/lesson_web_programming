<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array Echo</title>
</head>
<body>
<?php
$price['apple'] = 150;
$price['orange'] = 120;
$price['pinapple'] = 300;
foreach ($price as $item) {
    echo $item."\n";
}
?>
</body>
</html>