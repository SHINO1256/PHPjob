<?php
// DBの接続情報を記述したファイルを読み込む
require_once('db_connect.php');
// 関数をまとめたファイルを読み込む
require_once('function.php');

$userError = '';
$passError = '';
$passwordError = '';
$db_error = '';

session_start();

if (!empty($_POST)) {
    
    if (empty($_POST["name"])) {
        $userError =  "ユーザー名が未入力です。";
    }
    if (empty($_POST["pass"])) {
        $passError =  "パスワードが未入力です。";
    }

    if (!empty($_POST["name"]) && !empty($_POST["pass"])) {
        $name = htmlspecialchars($_POST["name"],ENT_QUOTES);
        $pass = htmlspecialchars($_POST["pass"],ENT_QUOTES);

        $pdo = db_connect();

        try {
            //同じ名前の人でパスワードが違うと、ログインできませんでした・・・？
            $sql = "SELECT * FROM users WHERE name = :name";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->execute();
        } catch (PDOException $e) {
            echo 'Error : ' . $e->getMessage();
            die();
        }
        // 結果が1行取得できたら
        if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // ハッシュ化されたパスワードを判定する定形関数のpassword_verify
            // 入力された値と引っ張ってきた値が同じか判定しています。
            if (password_verify($pass, $row["password"])) {
                $_SESSION["user_id"] = $row["id"];
                $_SESSION["user_name"] = $row["name"];
                header("Location: main.php");
                exit;
            } else {
                // パスワードが違ってた時の処理
                $passwordError = "パスワードに誤りがあります。";
            }
        } else {
            //ログイン名がなかった時の処理
            $db_error = "ユーザー名かパスワードに誤りがあります。";
        }
        }
    }


?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css" />
    <title>ログイン画面</title>
</head>
<body>
    <div class="header">
        <h2>ログイン画面</h2>
        <button class="btn" onclick="location.href='register.php'">新規ユーザー登録</button>
    </div>
    <form action="" method="post"><br>
        <input placeholder="ユーザー名" type="text" name="name" id="name" style="width: 300px; height: 30px; margin-top: 0;"><br>
        <input placeholder="パスワード" type="password" name="pass" id="pass" style="width: 300px; height: 30px; margin-top: 15px; margin-bottom: 15px;"><br>
        <input class="button" type="submit" value="ログイン"><br>
        <font color="red"><?php echo htmlspecialchars($userError, ENT_QUOTES); ?></font><br>
        <font color="red"><?php echo htmlspecialchars($passError, ENT_QUOTES); ?></font><br>
        <font color="red"><?php echo htmlspecialchars($passwordError, ENT_QUOTES); ?></font><br>
        <font color="red"><?php echo htmlspecialchars($db_error, ENT_QUOTES); ?></font><br>
    </form>

</body>
</html>