<?php
//0. SESSION開始！！
session_start();

//１．関数群の読み込み
include("funcs.php");  //funcs.phpを読み込む（関数群）

//LOGINチェック → funcs.phpへ関数化しましょう！
sschk();
// echo $_SESSION["chk_ssid"];

//２．データ登録SQL作成
$pdo = db_conn();      //DB接続関数
$stmt   = $pdo->prepare("SELECT * FROM bookmark_favorite_book"); //SQLをセット
$status = $stmt->execute(); //SQLを実行→エラーの場合falseを$statusに代入

//３．データ表示
$view=""; //HTML文字列作り、入れる変数
if($status==false) {
  //SQLエラーの場合
  sql_error($stmt);
}else{
  //SQL成功の場合
  while( $r = $stmt->fetch(PDO::FETCH_ASSOC)){ //データ取得数分繰り返す
    //以下でリンクの文字列を作成, $r["id"]でidをdetail.phpに渡しています
    $view .= '<p>';
    $view .= '<a href="detail.php?id='.h($r["id"]).'">';
    $view .= h($r["id"])."|".h($r["name"])."|".h($r["selected"]);
    $view .= '</a>';
    $view .= "　";
    // $view .= '<a class="btn btn-danger" href="delete.php?id='.$r["id"].'">';
    // $view .= '[<i class="glyphicon glyphicon-remove"></i>削除]';
    // $view .= '</a>';
    $view .= '</p>';
  }
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>お気に入りブックマーク一覧</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.php">お気に入りブックマーク一覧</a>
      <a class="navbar-brand" href="login.php">ログイン</a>
      <a class="navbar-brand" href="logout.php">ログアウト</a>
    </div>
  </nav>
</header>
<!-- Head[End] -->
<!-- Main[Start] -->
<div>
    <div class="container jumbotron"><?=$view?></div>
</div>
<!-- Main[End] -->

</body>
</html>
