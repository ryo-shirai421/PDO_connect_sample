<?php
    require 'connect_sample.php';

    // DELETE文を変数に格納
    $sql = "DELETE FROM sample WHERE id = :id";
 
    // 削除するレコードのIDは空のまま、SQL実行の準備をする
    $stmt = $dbh->prepare($sql);
 
    // 削除するレコードのIDを配列に格納する
    $params = array(':id'=> $_POST['delete_number']);
 
    // 削除するレコードのIDが入った変数をexecuteにセットしてSQLを実行
    $stmt->execute($params);
 
    // 削除完了のメッセージ
    echo '削除完了しました'; 

    $dbh = null;
?>

<br>
<a href="select_sample.php">データ表示へ</a>