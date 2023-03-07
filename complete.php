<?php
  $user_name = $_POST['user_name'];
  $hobby = $_POST['hobby'];
  var_dump($user_name);
  var_dump($hobby);
?>

<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>登録ページ</h1>
    <p>こんにちは<?php echo $user_name; ?>さん</p>
    <p>趣味は<?php echo $hobby; ?>です</p>
    <p>登録完了しました</p>
  </body>
</html>