<?php
session_start();

$db['user_name'] = 'root';
$db['password'] = 'password';
$pdo = new PDO(
    'mysql:host=mysql; dbname=contact_form; charset=utf8',
    $db['user_name'],
    $db['password']
);

$title = $_SESSION['title']; //ユーザーから受け取った値を変数に入れる
$mail = $SESSION['main'];
$content = $SESSION['content'];

$stmt = $pdo->prepare('INSERT INTO name(uname) VALUES(:name)'); //登録準備
$stmt->bindValue(':name', $name, PDO::PARAM_STR); //登録する文字の型を固定
$stmt->execute(); //データベースの登録を実行
$pdo = null;

//データベース接続を解除
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>送信履歴</title>
</head>
<body>
    <h2>送信履歴</h2>
    <a href="index.php">戻る</a>
</body>
</html>
