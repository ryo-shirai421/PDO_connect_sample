<?php
    require 'connect_sample.php';

    $sql = "SELECT * FROM sample";
    $res = $dbh->query($sql);
    foreach( $res as $value ) {
		  echo "$value[id]"." "."$value[name]<br>";
	  }

    $dbh = null;
?>

<br>
<a href="insert_sample.php">データ挿入へ</a><br>
<br>
<form action="update_sample.php" method="post">
      番号：<input type="number" name="number"><br>
      名前：<input type="text" name="name"><br>
      <input type="submit" value="データ更新へ">
</form>

<form action="delete_sample.php" method="post">
      番号：<input type="number" name="delete_number"><br>
      <input type="submit" value="データ削除へ">
</form>
