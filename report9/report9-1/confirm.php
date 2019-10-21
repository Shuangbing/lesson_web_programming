<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>なんちゃって掲示板システム</title>
</head>
<?php
$title = $_POST['title'];
$content = $_POST['content'];
?>

<body>
    <form method="post" action="index.php">
        <table border="1" style="width: 90%;">
            <tr>
                <th>タイトル</th>
                <td>
                    <p><?php echo $title; ?></p>
                </td>
            </tr>
            <tr>
                <th>内容</th>
                <td>
                    <p><?php echo $content; ?></p>
                </td>
            </tr>
        </table>
        <p>この内容を投稿してよろしいでしょうか</p>
        <?php
            echo '<input hidden name="title" value="'.$title.'">';
            echo '<input hidden name="content" value="'.$content.'">';
        ?>
        <button type="submit" style="widht: 120px; height: 50px; margin-top: 10px; font-size: 15px;">はい</button>
    </form>
    <button onclick="history.back()" style="widht: 120px; height: 50px; margin-top: 10px; font-size: 15px;">修正</button>
</body>

</html>