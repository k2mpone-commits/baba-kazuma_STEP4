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
  <form action="confirm.php" method="post">
    <label for="name">名前:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="age">年齢:</label>
    <input type="number" id="age" name="age" required><br><br>

    <label for="tel">電話番号:</label><br>
    <input type="tel" id="tel" name="tel" required><br><br>

    <label for="email">メールアドレス:</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="address">住所:</label><br>
    <input type="text" id="address" name="address" required><br><br>

    <label for="message">質問:</label><br>
    <input type="text" id="message" name="message"><br><br>

    <label for="gender">性別:</label><br>
    <select id="gender" name="gender" required>
      <option value="">選択してください</option>
      <option value="male">男性</option>
      <option value="female">女性</option>
      <option value="no_answer">回答しない</option>
    </select><br><br>

    <input type="submit" value="送信">
  </form>
</body>
</html>
