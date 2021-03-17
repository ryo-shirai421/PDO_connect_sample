<?php
    require 'connect_sample.php';
    
    $stmt = $dbh->query("INSERT INTO sample VALUES(1,'名無し1')");
    $stmt = $dbh->query("INSERT INTO sample VALUES(2,'名無し2')");
    $stmt = $dbh->query("INSERT INTO sample VALUES(3,'名無し3')");

    $dbh = null;
?>

<br>
<a href="select_sample.php">データ表示へ</a>