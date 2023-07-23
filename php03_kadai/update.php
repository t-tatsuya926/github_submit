<?php
//1. POSTデータ取得
$name     =$_POST['name'];
$url      =$_POST['url'];
$date     =$_POST['date'];
$impetus  =$_POST['impetus'];
if (isset($_POST["selected"])) {
$selected = $_POST["selected"];
};
$comment  =$_POST['comment'];
$id       = $_POST["id"];   //idを取得

//2. DB接続します
include("funcs.php");  //funcs.phpを読み込む（関数群）
$pdo = db_conn();      //DB接続関数


//３．データ登録SQL作成
$sql = "UPDATE bookmark_favorite_book SET name=:name, url=:url, date=:date, impetus=:impetus, selected=:selected, comment=:comment WHERE id =:id ";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name',     $name,     PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':url',      $url,      PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':date',     $date,     PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':impetus',  $impetus,  PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':selected', $selected, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':comment',  $comment,  PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':id',       $id,       PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute(); //実行


//４．データ登録処理後
if($status==false){
    sql_error($stmt);
}else{
    redirect("select.php");
}

?>
