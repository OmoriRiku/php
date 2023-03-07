<!doctype>
<html>
<head>
  <meta charset="utf-8">
</head>
  <body>
    <?php
    $sum = 0;
    for ($i = 1; $sum += $i, $i < 10; $i++) {
    } ?>
    <p><?php echo $sum; ?></p>

    <?php for ($i = 1; $i <= 10; $i++) { ?>
      <p><?php echo $i.'行目です。'; ?></p>
    <?php } ?> 
  </body>
</html>