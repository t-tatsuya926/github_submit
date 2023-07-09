<?php
ini_set('display_errors', 'On'); // エラーを表示させるようにしてください
error_reporting(E_ALL); // 全てのレベルのエラーを表示してください
?>
<?php
function h($value){
    return htmlspecialchars($value,ENT_QUOTES);
}
$name1 = $_POST["名前"];//送信元はpost_kadai.php
$name2 = $_POST["部署名"];
$mail = $_POST["mail"];
// $content1 = $_POST["content1"];
// $content2 = $_POST["content2"];
// $content3 = $_POST["content3"];
$name3 = $_POST["連絡先"];

//文字作成
$str = date("Y-m-d H:i:s").",".$name1.",".$name2.",".$mail.",".$name3;
//File書き込み
$file = fopen("data/data_kadai.txt","a");	// ファイル読み込み
fwrite($file, $str."\n"); //データの中身に追記
fclose($file);
?>
<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>

<h1>書き込みしました。</h1>
<h2>./data/data_kadai.txt を確認しましょう！</h2>

<ul>
<li><a href="input.php">戻る</a></li>
</ul>
</body>
</html>