<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>入力内容確認</title>
</head>
<body>
  <h1>入力内容確認</h1>
  <?php
  //POSTデータを取得
  $name = $_POST["name"] ?? "";
  $phone = $_POST["phone"] ?? "";
  $age = $_POST["age"] ?? "";
  $email = $_POST["email"] ?? "";
  $address = $_POST["address"] ?? "";
  $question = $_POST["question"] ?? "";
  $gender = $_POST["gender"] ?? "";
  $errors = [];

  //バリデーション
  if($name === "" || !preg_match("/^[ぁ-んァ-ヶー一-龠a-zA-Z\s]+$/u", $name)){
    $errors[] = "ひらがな、カタカナ、漢字、英字のみ使用";
  }

  if($age === "" || !is_numeric($age) || $age < 0 || $age > 150) {
    $errors[] = "年齢は0から150の範囲で入力";
  }

  if($phone === "" || !preg_match("/^[0-9-]+$/", $phone)) {
    $errors[] = "電話番号は半角数字とハイフンのみ使用";
  }

  if($email === "" || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "メールアドレスの形式が正しくありません。";
  }

  if($address === "" || !preg_match("/^[ぁ-んァ-ヶー一-龠a-zA-Z0-9\-\s]+$/u", $address)) {
    $errors[] = "住所はひらがな、カタカナ、漢字、英字、半角数字、ハイフンのみ使用";
  }

  if($question === "" || !preg_match("/^[ぁ-んァ-ヶー一-龠a-zA-Z\s]+$/u", $question)) {
    $errors[] = "質問はひらがな、カタカナ、漢字、英字のみ使用";
  }

  $gender = $_POST["gender"] ?? "";

  $allowed_sex = ["男性","女性","回答しない"];
  if($gender === "" || !in_array($gender,$allowed_sex)) {
    $errors[] = "性別を正しく選択";
  }

  //エラーがある場合の処
  if(!empty($errors)) {
    echo "<div class='error-box'>";
    foreach($errors as $error) {
      echo "<p class='error-message'>".htmlspecialchars($error, ENT_QUOTES, 'UTF-8')."</p>";
    }
    echo "</div>";
    echo "<p><a href='form.php' class='back-link'>戻る</a></p>";
  }else {
    //エラーがない場合の処理
    echo "<p>名前: ".htmlspecialchars($name, ENT_QUOTES, 'UTF-8')."</p>";
    echo "<p>年齢: ".htmlspecialchars($age, ENT_QUOTES, 'UTF-8')."</p>";
    echo "<p>電話番号: ".htmlspecialchars($phone, ENT_QUOTES, 'UTF-8')."</p>";
    echo "<p>メールアドレス: ".htmlspecialchars($email, ENT_QUOTES, 'UTF-8')."</p>";
    echo "<p>住所: ".htmlspecialchars($address, ENT_QUOTES, 'UTF-8')."</p>";
    echo "<p>質問: ".htmlspecialchars($question, ENT_QUOTES, 'UTF-8')."</p>";
    echo "<p>性別: ".htmlspecialchars($gender, ENT_QUOTES, 'UTF-8')."</p>";
  }
  ?>

</body>
</html>
