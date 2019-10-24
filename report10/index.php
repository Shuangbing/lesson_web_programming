<?php

if ($_POST['transition'] == "index" || !$_POST['transition']) {
    echo_page_list();
}

if ($_POST['transition'] == "add") {
    echo_page_add();
}

if ($_POST['transition'] == "addConfirm") {
    $title = $_POST['title'];
    $content = $_POST['content'];
    if (!$title || !$content) exit('タイトルと内容を入力してください');
    echo_page_confirm($title, $content);
}

if ($_POST['transition'] == "addPost") {
    $title = $_POST['title'];
    $content = $_POST['content'];
    if (!$title || !$content) exit('タイトルと内容を入力してください');
    echo_page_post($title, $content);
    echo_page_list();
}

/////////////////////////////////////////////////////////////

function echo_page_list()
{
    include './database.php';
    echo '<!DOCTYPE html>
    <html lang="jp">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>なんちゃって掲示板システム</title>
    </head>
    
    <body>
        <table border="1" style="width: 90%">
            <tr>
                <th style="width: 10%">ID</th>
                <th>タイトル</th>
                <th>内容</th>
                <th>投稿時間</th>
            </tr>';
    $query = mysqli_query($db_link, "select * from bbs_posts;");
    while ($row = mysqli_fetch_row($query)) {
        echo "<tr>";
        foreach ($row as $key => $value) {
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }
    mysqli_close($db_link);

    echo '</table>
    <form method="post">
    <button style="widht: 120px; height: 50px; margin-top: 10px; font-size: 15px;" name="transition" value="add">新規投稿</button>
    </form>
    </body>
    </html>';
}

function echo_page_add()
{
    echo '<!DOCTYPE html>
    <html lang="jp">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>なんちゃって掲示板システム</title>
    </head>
    <body>
        <form method="post">
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
            <button type="submit" style="widht: 120px; height: 50px; margin-top: 10px; font-size: 15px;" name="transition" value="addConfirm">投稿</button>
        </form>
    </body>
    
    </html>';
}

function echo_page_confirm($title, $content)
{
    echo '
    <form method="post">
        <table border="1" style="width: 90%;">
            <tr>
                <th>タイトル</th>
                <td>
                    <p>';
    echo $title;
    echo '</p>
                </td>
            </tr>
            <tr>
                <th>内容</th>
                <td>
                    <p>';
    echo $content;
    echo '</p>
                </td>
            </tr>
        </table>
        <p>この内容を投稿してよろしいでしょうか</p>';
    echo '<input hidden name="title" value="' . $title . '">';
    echo '<input hidden name="content" value="' . $content . '">';
    echo '<button type="submit" style="widht: 120px; height: 50px; margin-top: 10px; font-size: 15px;" name="transition" value="addPost">はい</button>
    </form>
    <button onclick="history.back()" style="widht: 120px; height: 50px; margin-top: 10px; font-size: 15px;">修正</button>';
}

function echo_page_post($title, $content)
{
    include './database.php';
    $datetime = date("Y-m-d H:i:s");
    $result = mysqli_query($db_link, "INSERT INTO bbs_posts (title,content,create_time) VALUES('$title','$content','$datetime')");
    if ($result) {
        echo "作成完了です!\n";
    } else {
        echo "作成できませんでしたです!\n";
    }
}
