<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>なんちゃって掲示板システム</title>
</head>
<body>
    <form method="post" action="confirm.php">
        <table border="1" style="width: 90%;">
            <tr>
                <th>タイトル</th>
                <td>
                    <input style="width: 95%;" name="title" type="text"/>
                </td>
            </tr>
            <tr>
                <th>内容</th>
                <td>
                <textarea style="width: 95%; height: 60px;" name="content"></textarea>
                </td>
            </tr>
        </table>
        <button type="submit" style="widht: 120px; height: 50px; margin-top: 10px; font-size: 15px;">投稿</button>
</body>

</html>