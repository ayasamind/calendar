<?php

require_once(__DIR__ . '/../config/config.php');


// $app = new MyApp\Controller\Login();
//
// $app->run();


//echo "login screen";
//exit;

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
   <form action="" method="post">
    <p>
      <input type="text" name="email" placeholder="email">
    </p>
    <p>
      <input type="password" name="password" placeholder="password">
    </p>
  <div class="btn">Log In</div>
  <p class="fs12"><a href="/hello/calendar/views/signup.php">Sign Up</a></p>
</form>
</div>
</body>
</html>
