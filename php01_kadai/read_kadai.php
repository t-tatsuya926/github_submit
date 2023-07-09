<!DOCTYPE html>
<html lang="jan">
<head>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style_php.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$file = fopen('data/data_kadai.txt', 'r');   // ファイルを開く
?>
<table>
    <tr id="t">
        <td>送信日時</td>
        <td>1.氏名</td>
        <td>2.部署名</td>
        <td>3.メールアドレス</td>
        <td>4.緊急連絡先</td>
    </tr>
    <?php
    while (!feof($file)) {
        $csv = fgets($file);
        $str = explode(",",$csv);
    ?>
    <tr>
        <td> <?php echo $str[0]; ?> </td>
        <td> <?php echo $str[1]; ?> </td>
        <td> <?php echo $str[2]; ?> </td>
        <td> <?php echo $str[3]; ?> </td> 
        <td> <?php echo $str[4]; ?> </td> 

    </tr>
<?php
    };
    fclose($file); // ファイルを閉じる
?>

</table>

</body>
</html>
    


