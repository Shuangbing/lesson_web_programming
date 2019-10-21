<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>なんちゃって掲示板システム</title>
</head>

<body>
    <form action="post.php">
        <table border="1" style="width: 90%">
            <tr>
                <th style="width: 10%">ID</th>
                <th>タイトル</th>
                <th>内容</th>
                <th>投稿時間</th>
            </tr>
            <?php
            include('./database.php');
            if ($_POST) {
                $title = $_POST['title'];
                $content = $_POST['content'];
                $datetime = date("Y-m-d H:i:s");
                $result = mysqli_query($db_link, "INSERT INTO bbs_posts (title,content,create_time) VALUES('$title','$content','$datetime')");
                if ($result) {
                    echo "作成完了です!\n";
                } else {
                    echo "作成できませんでしたです!\n";
                }
            }
            $query = mysqli_query($db_link, "select * from bbs_posts;");
            while ($row = mysqli_fetch_row($query)) {
                echo "<tr>";
                foreach ($row as $key => $value) {
                    echo "<td>$value</td>";
                }
                echo "</tr>";
            }
            mysqli_close($db_link);
            ?>
        </table>
        <button style="widht: 120px; height: 50px; margin-top: 10px; font-size: 15px;">新規投稿</button>
</body>

</html>