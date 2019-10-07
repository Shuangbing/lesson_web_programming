<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fruit Shop</title>
    <style>
        table {
            margin-bottom: 10px;
            table-layout: fixed;
        }

        th {
            width: 100px;
        }

        a {
            margin: 5px 5px 5px 5px;
        }
    </style>
</head>

<body>
    <table border="1">
        <tr>
            <th>商品</th>
            <th>個数</th>
            <th>単価</th>
            <th>操作</th>
        </tr>
        <?php
        $items = array('apple' => 'リンゴ', 'banana' => 'バナナ', 'pineapple' => 'パイナップル');
        $price = array('apple' => 100, 'banana' => 60, 'pineapple' => 200);
        $fruits['apple'] = 1;
        $fruits['banana'] = 1;
        $fruits['pineapple'] = 1;
        $sum = 0;

        if (is_array($_GET) && count($_GET) > 0) {
            foreach ($items as $item => $name) {
                $fruits[$item] = $_GET[$item];
            }
            if (isset($_GET['action']) && isset($_GET['item'])) {
                if ($_GET['action'] == 'add') {
                    $fruits[$_GET['item']]++;
                } elseif ($_GET['action'] == 'del') {
                    $fruits[$_GET['item']]--;
                }
            }
        }
        $data = 'apple=' . $fruits['apple'] . '&banana=' . $fruits['banana'] . '&pineapple=' . $fruits['pineapple'];
        foreach ($items as $item => $name) {
            if ($fruits[$item] > 0) {
                $sum = $sum + $fruits[$item] * $price[$item];
                echo '<tr>
                <td>' . $name . '</td>
                <td>' . $fruits[$item] . '</td>
                <td>' . $price[$item] . '</td>
                <td><a href="?action=add&item=' . $item . '&' . $data . '">+</a> <a href="?action=del&item=' . $item . '&' . $data . '">-</a></td>
                </tr>';
            }
        }
        ?>
        <tr>
            <th colspan="4">合計 <?php echo $sum; ?> 円</th>
        </tr>
    </table>
    <div id="action">
        <?php
        foreach ($items as $item => $name) {
            echo '<a href="?action=add&item=' . $item . '&' . $data . '">'.$name.'を1個追加</a>';
        }
        ?>
    </div>
</body>

</html>