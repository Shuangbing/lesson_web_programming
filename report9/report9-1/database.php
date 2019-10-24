<?php
$hostname='www.db4free.net';
$username='bbs_db_123sfw';
$password='1z2x3c4v';
$dbname = 'bbs_db_123sfw';

$dbLink = mysqli_connect($hostname, $username, $password);
if (!$dbLink) {
    exit("データベースに接続できません!");
}

$result = mysqli_query($dbLink, "USE $dbname");
if(!$result) {
    // データベース存在しないため作成する
    $result=mysqli_query($dbLink,"CREATE DATABASE $dbname CHARACTER SET utf8");
    if(!$result) { echo "データベースの作成ができません!\n"; }
    mysqli_query($dbLink,"USE $dbname");
    mysqli_query($dbLink,"CREATE TABLE bbs_posts (id INT NOT NULL AUTO_INCREMENT, title VARCHAR(32) BINARY, content VARCHAR(128) BINARY, create_time DATETIME, PRIMARY KEY(id)) CHARACTER SET utf8;");
} else {
    // データベースが存在する場合
    mysqli_query($dbLink,"USE $dbname");
}