<?php
//1. POSTデータ取得
//$name = filter_input( INPUT_GET, ","name" ); //こういうのもあるよ
//$email = filter_input( INPUT_POST, "email" ); //こういうのもあるよ
$name =$_POST['name'];
$url =$_POST['url'];
$date =$_POST['date'];
$impetus =$_POST['impetus'];
if (isset($_POST["selected"])) {
$selected = $_POST["selected"];
};
$comment =$_POST['comment'];

//2. DB接続します
try {
  //Password:MAMP='root',XAMPP=''
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');//ローカル
  // $pdo = new PDO('mysql:dbname=maroonocelot9_bookmark;charset=utf8;host=mysql57.maroonocelot9.sakura.ne.jp','root','');
} catch (PDOException $e) {
  exit('DB Connection Error:'.$e->getMessage());
}
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
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("SQL_ERROR:".$error[2]);
}else{
  //５．index.phpへリダイレクト
  header("Location: kadai_index.php");
  exit();

}
?>
