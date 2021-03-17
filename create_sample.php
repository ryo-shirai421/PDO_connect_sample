<?php
    require 'connect_sample.php';

    $stmt = $dbh->query("CREATE TABLE sample (id INT,name NCHAR(20))");
    $dbh = null;
?>

<br>
<a href="insert_sample.php">データ挿入へ</a>