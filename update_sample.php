<?php
    require 'connect_sample.php';

    /* 1. データを修正するUPDATE文を変数に格納する（更新する値を格納するSETと条件を指定するWHEREの部分は後から値を入れる） */
    /* 2. :nameや:idはプレースホルダと呼ばれ、値を入れるための単なる空箱。SQL実行時に値を入れるため、このSQL文は何度も使い回しができ、パフォーマンス的にも優れる。 */
    $sql = "UPDATE sample SET name = :name WHERE id = :id";
    /* 3. 値が空のままのSQL文をprepare()にセットし、SQL実行のための準備を行う */
    $stmt = $dbh->prepare($sql);
    /* 4. 実際に更新する値と更新するIDを配列に格納 */
    $params = array(':name' => $_POST['name'], ':id' => $_POST['number']);
    /* 5. そしてexecute()に値が入った配列をセットしてSQLを実行し、データベースにデータを挿入する */
    $stmt->execute($params);

    $dbh = null;
?>

<br>
<a href="select_sample.php">データ表示へ</a>