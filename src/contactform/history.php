
<?php try {
    // DB接続
    $dsn = 'mysql:dbname=contact_form;host=mysql;charset=utf8';
    $user = 'root';
    $password = 'password';
    $dbh = new PDO($dsn, $user, $password);

    // SQL
    $sql = 'SELECT * FROM contacts';

    // prepareでSQLを確定
    $stmt = $dbh->prepare($sql);

    // executeでSQLを実行
    $stmt->execute();

    // 結果の取得
    $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo 'データベースに接続できませんでした。' . $e->getMessage();
    exit();
} ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>送信履歴</title>
</head>

<body>
    <div class="container">
        <h2>送信履歴</h2>

        <?php foreach ($contacts as $contact): ?>
            <h3><?php echo $contact['title']; ?></h3>
            <p><?php echo $contact['content']; ?></p>
        <?php endforeach; ?>

        <a href="index.php">戻る</a>
    </div>
</body>

</html>
