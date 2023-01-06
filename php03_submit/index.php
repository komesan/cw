<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>career_wiki データ登録</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">career_wiki データ登録</a></div>
            </div>
        </nav>
    </header>

    <!-- method, action, 各inputのnameを確認してください。  -->
    <form method="POST" action="insert.php">
        <div class="jumbotron">
            <fieldset>
                <legend>偉人情報を登録する</legend>
                <label>名前：<input type="text" name="name"></label><br>
                <label>キャリアパスのタイプ：<input type="text" name="type"></label><br>
                <label>現職の企業フェーズ：<select name="phase">
                    <option>シード</option>
                    <option>シリーズA</option>
                    <option>シリーズB</option>
                    <option>シリーズC</option>
                    <option>上場</option>
                </select></label><br>
                <label>現職の企業名：<input type="text" name="newCompanyName"></label><br>
                <label>過去の企業名：<input type="text" name="pastCompanyName"></label><br>
                <label><textarea name="comment" rows="4" cols="40"></textarea></label><br>
                <input type="submit" value="送信">
            </fieldset>
        </div>
    </form>
</body>

</html>
