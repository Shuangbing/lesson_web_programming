<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="Content-Style-Type" content="text/css">
        <title>小遣い帳</title>
    </head>
    <body>
        
<?php
$hostname='localhost';
$username='root';
$password='dbpass';

$link = mysqli_connect($hostname,$username,$password);
if(! $link){ exit("データベースに接続できません!"); }

$dbname = 'passbook_db';
$result=mysqli_query($link,"CREATE DATABASE $dbname CHARACTER SET utf8");
if(!$result) { echo "データベースの作成ができません!\n"; }
$result=mysqli_query($link,"USE $dbname");
$result=mysqli_query($link,"CREATE TABLE passbook (id INT NOT NULL AUTO_INCREMENT, title VARCHAR(32) BINARY, price INT, PRIMARY KEY(id)) CHARACTER SET utf8;");
$result=mysqli_query($link,"INSERT INTO passbook (title,price) VALUES('交通費',-1000),('給料',400000),('食事代',50000)");
if($result) { echo "作成完了です!\n"; }
mysqli_close($link);
?>
        <br>
    </body>
</html>