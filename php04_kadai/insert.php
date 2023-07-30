<?php
//1. POSTデータ取得
$name =$_POST['name'];
$url =$_POST['url'];
$date =$_POST['date'];
$impetus =$_POST['impetus'];
if (isset($_POST["selected"])) {
$selected = $_POST["selected"];
};
$comment =$_POST['comment'];

//*** 外部ファイルを読み込む ***
include("funcs.php");
$pdo = db_conn();

//2. DB接続します

//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO bookmark_favorite_book(name,url,date,impetus,selected,comment,indate)VALUES(:name, :url, :date, :impetus, :selected,:comment, sysdate());");
$stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':url', $url, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':date', $date, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':impetus', $impetus, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':selected', $selected, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':comment', $comment, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
    //*** function化を使う！*****************
    sql_error($stmt);
}else{
    redirect("index.php");
}