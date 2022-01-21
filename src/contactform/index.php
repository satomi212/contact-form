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
    <form action="complete.php" method="post">

    <label for="title">タイトル（必須）</label>
    <input id="title" type="text" name="title" placeholder="タイトル">
    <br>
    <label for="email">Email（必須）</label>
    <input id="email" type="text" name="email" placeholder="Emailアドレス">
    <br>
    <label for="content">お問い合わせ内容（必須）</label>
    <textarea id="content" name="content" cols="30" rows="3" placeholder="お問い合わせ内容（1000文字まで）をお書きください"></textarea>
    <br>
    <button type="submit" name="submit">送信</button>

    </form>
</body>
</html>
