<?php
//１．PHP
//select.phpの[PHPコードだけ！]をマルっとコピーしてきます。
//※SQLとデータ取得の箇所を修正します。
$id = $_GET["id"];

include("funcs.php");  //funcs.phpを読み込む（関数群）
$pdo = db_conn();      //DB接続関数

$stmt   = $pdo->prepare("SELECT * FROM bookmark_favorite_book WHERE id=:id"); //SQLをセット
$stmt->bindValue(':id', $id, PDO::PARAM_INT); 
$status = $stmt->execute(); //SQLを実行→エラーの場合falseを$statusに代入

if($status==false) {
  //SQLエラーの場合
  sql_error($stmt);
}else{
  //SQL成功の場合
  $row = $stmt->fetch(); //1レコードだけ取得する方法
}

// var_dump($row["name"]) //配列表示
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ブックマークデータ更新</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">お気に入りブックマーク一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="POST" action="update.php">
  <div class="jumbotron">
   <fieldset>
    <legend>お気に入り本　登録画面</legend>
     <label>書籍名　　　　：<input type="text" name="name" value="<?=$row["name"]?>"></label><br>
     <label>書籍URL　　　：<input type="text" name="url" value="<?=$row["url"]?>"></label><br>
     <label>読んだ日　　　：<input type="date" name="date" value="<?=$row["date"]?>"></label><br>
     <label>読んだきっかけ：<input type="text" name="impetus" value="<?=$row["impetus"]?>"></label><br>
     <span>評価　　　　　：</span><select name="selected" id="selected" value="<?=$row["selected"]?>">
     <!-- <option value="-">-</option> -->
      <option value="1">★</option>
      <option value="2">★★</option>
      <option value="3">★★★</option>
      <option value="4">★★★★</option>
      <option value="5">★★★★★</option>
     </select><br>
     <label>感想　　　　　：<textArea name="comment" rows="4" cols="40"><?=$row["comment"]?></textArea></label><br>
     <!-- idを隠して送信 -->
     <input type="hidden" name="id" value="<?=$id?>">
     <!-- idを隠して送信 -->
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>