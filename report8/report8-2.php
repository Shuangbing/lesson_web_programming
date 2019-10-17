<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <title>小遣い帳 - 追加</title>
</head>

<body>

    <form method="post">
        <table border="1">
            <tr>
                <th>
                    タイトル
                </th>
                <th>
                    金額
                </th>
            </tr>
            <tr>
                <td>
                    <input type="text" name="title">
                </td>
                <td>
                    <input type="number" name="price">
                </td>
            </tr>
            <tr>
                <button type="submit">追加</button>
            </tr>
        </table>
    </form>

    <?php
    if ($_POST) {
        $hostname = 'localhost';
        $username = 'root';
        $password = 'dbpass';
        $title = $_POST['title'];
        $price = (int)$_POST['price'];

        $link = mysqli_connect($hostname, $username, $password);
        if (!$link) {
            exit("データベースに接続できません!");
        }

        $dbname = 'passbook_db';
        $result = mysqli_query($link, "USE $dbname");
        $result = mysqli_query($link, "INSERT INTO passbook (title,price) VALUES('$title','$price')");
        if ($result) {
            echo "作成完了です!\n";
        } else {
            echo "作成できませんでしたです!\n";
        }
        mysqli_close($link);
    }

    ?>
    <br>
</body>

</html>