<?php
$passlist = array('user1' => 'password1', 'user2' => 'password2');

if (!isset($_POST['user'])) {
    echo_auth_page("ログイン");
    exit;
}
$user = $_POST['user'];
$pass = $_POST['pass'];

if ((!isset($passlist[$user])) || $passlist[$user] != $pass) {
    echo_auth_page("パスワードが違います");
    exit;
}

echo_content_page($user);


////////////////////////////////////////////////////////////////////////
function echo_auth_page($msg)
{
    echo <<<EOT
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="Content-Style-Type" content="text/css">
        <title>ページタイトル</title>
    </head>
    <body>
$msg
    <form method="POST">
        username <input type="text" name="user" value=""><br>
        password <input type="password" name="pass" value=""><br>
        <button type="submit" name="login" value="login">Login</button>
    </form>
    </body>
</html>
EOT;
}
////////////////////////////////////////////////////////////////////////
function echo_content_page($who)
{
    echo <<<EOT
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="Content-Style-Type" content="text/css">
        <title>ページタイトル</title>
    </head>
    <body>
こんにちは $who さん
<table border="1">
<tr>
<th style="width: 100px">タイトル</th>
<th style="width: 300px">内容</th>
</tr>
<tr>
<td>こんにちは</td>
<td>Hello World!</td>
</tr>
<tr>
<td>こんばんは</td>
<td>Hello World</td>
</tr>
</table>
<form method="post">
<button type="submit">ログアウト</button>
</form>
    </body>
</html>
EOT;
}
