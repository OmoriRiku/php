<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>生年月日を入力するフォームを作ろう</h1>
    <label for="month">西暦</label>

    <select name="month" id="year">
      <?php
      $now = date("Y");
      for ($i = 1950; $i <= $now; $i++) { ?>
      <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
      <?php } ?>
    </select>年
    <br />

    <select name="month">
      <?php for($i = 1; $i <= 12; $i++) { ?>
      <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
      <?php } ?>
    </select>月
    <br />

    <select name="day">
      <?php for ($i = 1; $i <= 31; $i++) { ?>
      <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
      <?php } ?>
    </select>日
  </body>
</html>