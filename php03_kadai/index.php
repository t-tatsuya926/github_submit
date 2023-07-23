<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>BookMark_v2</title>
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
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>お気に入り本　登録画面</legend>
     <label>書籍名　　　　：<input type="text" name="name"></label><br>
     <label>書籍URL　　　：<input type="text" name="url"></label><br>
     <label>読んだ日　　　：<input type="date" name="date"></label><br>
     <label>読んだきっかけ：<input type="text" name="impetus"></label><br>
     <span>評価　　　　　：</span><select name="selected" id="selected">
     <!-- <option value="-">-</option> -->
      <option value="1">★</option>
      <option value="2">★★</option>
      <option value="3">★★★</option>
      <option value="4">★★★★</option>
      <option value="5">★★★★★</option>
     </select><br>
     <label>感想　　　　　：<textArea name="comment" rows="4" cols="40"></textArea></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
