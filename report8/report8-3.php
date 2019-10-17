<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <title>小遣い帳 - リスト</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>
                ID
            </th>
            <th>
                タイトル
            </th>
            <th>
                金額
            </th>
        </tr>
    
    <?php
    $hostname = 'localhost';
    $username = 'root';
    $password = 'dbpass';

    $link = mysqli_connect($hostname, $username, $password);
    if (!$link) {
        exit("データベースに接続できません!");
    }
    $dbname = 'passbook_db';
    $tablename = 'passbook';
    $result = mysqli_query($link, "USE $dbname");
    $result = mysqli_query($link, "select * from $tablename");
    while($row = mysqli_fetch_row($result))
    {
        echo "<tr>";
        foreach($row as $key => $value)
        {
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }
    mysqli_close($link);

    ?>
    </table>
</body>

</html>