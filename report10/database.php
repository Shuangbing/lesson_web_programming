<?php
$hostname='localhost';
$username='root';
$password='dbpass';
$dbname = 'bbs_db';

$db_link = mysqli_connect($hostname, $username, $password);
if (!$db_link) {
    exit("データベースに接続できません!");
}

$result = mysqli_query($db_link, "USE $dbname");
if(!$result) {
    // データベース存在しないため作成する
    $result=mysqli_query($db_link,"CREATE DATABASE $dbname CHARACTER SET utf8");
    if(!$result) { echo "データベースの作成ができません!\n"; }
    mysqli_query($db_link,"USE $dbname");
    mysqli_query($db_link,"CREATE TABLE bbs_posts (id INT NOT NULL AUTO_INCREMENT, title VARCHAR(32) BINARY, content VARCHAR(128) BINARY, create_time DATETIME, PRIMARY KEY(id)) CHARACTER SET utf8;");
} else {
    // データベースが存在する場合
    mysqli_query($db_link,"USE $dbname");
}