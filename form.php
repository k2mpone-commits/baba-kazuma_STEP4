<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>フォーム入力</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>フォーム入力</h1>
    <div class="form-container">
    <form action="confirm.php" method="post">

      <div class="form-item">
        <label for="name">名前：</label>
        <input type="text" id="name" name="name" required><br><br>
      </div>

      <div class="form-item">
        <label for="age">年齢：</label>
        <input type="number" id="age" name="age" required><br><br>
      </div>

      <div class="form-item">
        <label for="phone">電話番号：</label>
        <input type="tel" id="phone" name="phone" required><br><br>
      </div>

      <div class="form-item">
        <label for="email">メールアドレス：</label>
        <input type="email" id="email" name="email" required><br><br>
      </div>

      <div class="form-item">
        <label for="address">住所：</label>
        <input type="text" id="address" name="address" required><br><br>
      </div>

      <div class="form-item">
        <label for="question">質問：</label>
        <input type="text" id="question" name="question"><br><br>
      </div>

      <div class="form-item">
        <label for="gender">性別：</label>
        <select id="gender" name="gender" required>
          <option value="">選択してください</option>
          <option value="男性">男性</option>
          <option value="女性">女性</option>
          <option value="回答しない">回答しない</option>
        </select><br><br>
      </div>

      <div class="submit-button">
        <input type="submit" value="送信">
      </div>

    </form>
  </div>
</body>
</html>
