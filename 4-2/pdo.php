<?php
//データベース接続
define('DB_DATABASE', 'checktest4');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'password');
define('PDO_DSN', 'mysql:host=localhost;charset=utf8;dbname='.DB_DATABASE);


/* 先生からのご指摘「1.要件に「DB接続用に、connect関数を作成してください。」とありますので、
try-chatchブロックを関数として記述してください。」
⇒13行目を付け足しました*/
function connect(){
try {
    $pdo = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
    // エラー処理方法の設定
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
} catch (PDOException $e) {
    echo 'Error:' . $e->getMessage();
    die();
}
}
?>