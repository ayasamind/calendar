<?php

require_once(__DIR__ . '/../config/config.php');
require_once 'password.php';
$app = new MyApp\Controller\Signup();
$app->run();


?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>Log In</title>
  <link rel="stylesheet" href="lstyle.css">
</head>
<body>
  <div id="container">
   <form action="" method="post" id="signup" >
	<p>
	<select name="club" placeholder="club"><option>合気道部</option>
                        <option>アイスホッケー部</option>
						<option>芦原空手部</option>
						<option>アメリカンフットボール部</option>
					    <option>応援団</option>
						<option>空手道部</option>
						<option>弓道部</option>
						<option>剣道部</option>	
						<option>航空部</option>
						<option>硬式ソフトボール部</option>
						<option>硬式庭球部</option>
						<option>硬式野球部</option>
						<option>ゴルフ部</option>
						<option>サッカー部</option>
						<option>山岳部</option>
						<option>少林寺拳法部</option>
						<option>自動車部</option>
						<option>柔道部</option>
						<option>準硬式野球部</option>
						<option>水泳部</option>
						<option>スキー部</option>
						<option>ソフトテニス部</option>
						<option>体操部</option>
						<option>卓球部</option>
						<option>テコンドー部</option>
						<option>軟式野球部</option>
						<option>ハンドボール部</option>
						<option>馬術部</option>
						<option>男子バスケットボール部</option>
						<option>女子バスケットボール部</option>
						<option>バドミントン部</option>
						<option>男子バレーボール部</option>
						<option>女子バレーボール部</option>
						<option>フェンシング部</option>
						<option>漕艇部</option>
						<option>洋弓部</option>
						<option>ヨット部</option>
						<option>男子ラクロス部</option>
						<option>女子ラクロス部</option>
						<option>ラグビー部</option>
						<option>陸上競技部</option>
						<option>錬心舘空手部</option>
						<option>ワンダーフォーゲル部</option>
						<option>サイクリング同好会</option>
						<option>トライアスロン部</option>
						<option>ハンググライダー愛好会</option>
						<option>ウィンドサーフィン愛好会</option>
						<option>ラケットボール愛好会</option>
						<option>体育総務委員会</option>
						<option>水球同好会</option>
						<option>チアリーディング愛好会</option>
						<option>ツーリング愛好会</option></select>
</p>
	<input type="text" name="email" placeholder="email" value="<?= isset($app->getValues()->email) ? h($app->getValues()->email) : ''; ?>">
	</p>
    <p class="err"><?= h($app->getErrors('email')); ?></p>
    <p>
      <input type="password" name="password" placeholder="password">
	</p>
    <p class="err"><?= h($app->getErrors('password')); ?></p>
  <div class="btn" onclick="document.getElementById('signup').submit();" >Sign Up</div>
  <p class="fs12"><a href='login.php'>Log In</a></p>
  <input type="hidden" name="token" value="<?= h($_SESSION['token']); ?>">

</form>
</div>
</body>
</html>

