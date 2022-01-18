<?php
session_start();

if (isset($_POST['submit'])) {
    $_SESSION['title'] = $_POST['title'];
    $_SESSION['mail'] = $_POST['mail'];
    $_SESSION['content'] = $_POST['content'];

    header('Location:history.php');
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
    <h2>送信完了！！！</h2>
    <a href="index.php">送信画面へ</a>
    <br><br>
    <a href="history.php">送信履歴を見る</a>
</body>
</html>
