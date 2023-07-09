<html>
<head>
<link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- JQuery -->
<meta charset="utf-8">
<title>23年7月度皇居ラン申し込みフォーム</title>
</head>
<body>
<header>
	<h1 class="title">23年7月度皇居ラン申し込みフォーム</h1>
	<h4 class="title">2023年7月19日(水)開催</h4>	
</header>

<form action="write_kadai.php" method="post">
<table class="formT">
    <tr>
      <th class="formI">1.氏名</th>
      <td class="formB">
        <input type="text" name="名前" class="formtext">
      </td>
    </tr>
    <tr>
      <th class="formI">2.部署名</th>
      <td class="formB">
        <input type="text" name="部署名" class="formtext">
      </td>
    </tr>
    <tr>
      <th class="formI">3.メールアドレス</th>
      <td class="formB">
        <input type="text" name ="mail" class="formtext">
      </td>
    </tr>

	<!-- <tr>
      <th class="formI">4.申し込み内容</th>
      <td class="formB">
        <label class="content">
          <input type="checkbox" content1="content1">
          <span class="contentT">皇居ラン(6時発)・懇親会(20時開始)に参加</span><br>
        </label> 
        <label class="content">
          <input type="checkbox" content2="content2">
          <span class="contentT">皇居ランのみ参加</span><br>
        </label> 
        <label class="content">
          <input type="checkbox" content3="content3">
          <span class="contentT">懇親会のみ参加</span>
        </label> 
      </td>
    </tr> -->
	<tr>
      <th class="formI">4.連絡先</th>
      <td class="formB">
        <input type="text" name="連絡先" class="formtext">
      </td>
    </tr>
  </table>
	<input type="submit" value="送信">
</form>
<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>