<?php

// 値を取得
$title = filter_input(INPUT_POST, 'title');
$email = filter_input(INPUT_POST, 'email');
$content = filter_input(INPUT_POST, 'content');


// DB接続
$dsn = 'mysql:dbname=contact_form;host=mysql;charset=utf8';
$user = 'root';
$password = 'password';
$dbh = new PDO($dsn, $user, $password);

// SQL
$sql = "INSERT INTO contacts (title, email, content) VALUES (:title, :email, :content)";

// prepareでSQLを確定
$stmt = $dbh->prepare($sql);

// 値を受け取る（bindValueでSQLインジェクション防ぐ）
$stmt->bindValue(':title', $title, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':content', $content, PDO::PARAM_STR);

// executeでSQLを実行
$stmt->execute();


// 送信方法バリデーション
$errors = [];
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    $errors[] = "post送信になっていません";
}

// 入力内容バリデーション
if (empty($title)) {
    $errors[] = "「タイトル」を入力してください。";
}

if (empty($email)) {
    $errors[] = "「Email」を入力してください。";
}

if (empty($content)) {
    $errors[] = "「内容」を入力してください。";
}

// 中身
if (empty($errors)) {
    $message = '送信完了!!!';
    $links = '
    <a href="./index.php">
    <p>送信画面へ</p>
    </a>
    <a href="./history.php">
    <p>送信履歴を見る</p>
    </a>';
} else {
    $links = '
    <a href="./index.php">
    <p>送信画面へ</p>
    </a>';
}




?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>送信完了</title>
</head>

<body>
    <div class="container">
        <?php if (!empty($errors)) : ?>
            <?php foreach ($errors as $error) : ?>
                <p><?php echo $error . "\n"; ?></p>
            <?php endforeach; ?>
            <?php echo $links; ?>
        <?php endif; ?>

        <?php if (empty($errors)) : ?>
            <?php
                echo '<h2>' . $message . '</h2>';
                echo $links;
            ?>
        <?php endif; ?>
    </div>

</body>
</html>
