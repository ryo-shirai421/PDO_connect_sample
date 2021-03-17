<?php
    require 'connect_sample.php';

    $sql = "SELECT * FROM sample";
    $res = $dbh->query($sql);
    foreach( $res as $value ) {
		  echo "$value[id]"." "."$value[name]<br>";
	  }

    $dbh = null;
?>