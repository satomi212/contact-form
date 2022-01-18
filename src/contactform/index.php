<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>トップページ</title>
</head>

<body>
    <h2>お問い合わせフォーム</h2>
    <p>以下のフォームからお問い合わせください。</p>
    <form action="" method="post"></form>

    <label for="title">タイトル（必須）</label>
    <input id="title" type="text" name="title" placeholder="タイトル">
    <br>
    <label for="mail">Email（必須）</label>
    <input id="mail" type="text" name="mail" placeholder="Emailアドレス">
    <br>
    <label for="content">お問い合わせ内容（必須）</label>
    <textarea id="content" name="content" cols="30" rows="3" placeholder="お問い合わせ内容（1000文字まで）をお書きください"></textarea>
    <br>
    <button onclick="location.href='./complete.php'" name ="submit">送信</button>

</body>
</html>
