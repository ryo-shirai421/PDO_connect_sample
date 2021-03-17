<?php
    require 'connect_sample.php';

    $stmt = $dbh->query("CREATE TABLE sample (id INT,name NCHAR(20))");
    $dbh = null;
?>