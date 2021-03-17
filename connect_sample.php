<?php

    // ドライバ呼び出しを使用して MySQL データベースに接続します
    $dsn = 'mysql:dbname=co_19_327_99sv_coco_com;host=localhost;charset=utf8';
    $user = 'co-19-327.99sv-c';
    $password = 'Pi6LaAHU';

    try {
        $dbh = new PDO($dsn, $user, $password,  array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        echo "接続成功\n";

    } catch (PDOException $e) {
        echo "接続失敗: " . $e->getMessage() . "\n";
        exit();
    }
?>
