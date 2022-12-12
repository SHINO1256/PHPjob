<?php
// DBの接続情報を記述したファイルを読み込む
require_once('pdo.php');
// ユーザ情報、記事情報のファイルを読み込む
require_once('getData.php');

//先生からのご指摘「ユーザ情報、記事情報は、getDataクラスをインスタンス化して取得してください。」
//getDataクラスをインスタンス化
$data = new getData();
// 関数getUserData()からusers_dataを取得する
$users_data = $data -> getUserData();


// 関数getPostData()からpost_dataを取得する
$post_data = $data -> getPostData();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1.0">
        <link rel="stylesheet" href="./style.css" />
        <link rel="stylesheet" href="./SmartStyle.css" />
        <title>Document</title>
    </head>
    <body>
        <div class="header">
            <img src="1599315827_logo.png" class="logobox">
            <div class="container">
                <div class="bar1">
                    <?php
                        $row = $users_data;
                        echo 'ようこそ ' . $row['last_name'] .$row['first_name']." さん<br>";
                    ?>
                </div>
                <div class="bar2">
                    <?php
                        $row = $users_data;
                        echo '最終ログイン日：' . $row['last_login'];
                    ?>
                </div>
            </div>
        </div>
        <div class="main">
            <div class="DB_table">
                    <table class="table"><tbody>
                        <tr><th>記事ID</th><th>タイトル</th><th>カテゴリ</th><th>本文</th><th>投稿日</th></tr>
                    <?php
                        while ($row = $post_data->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                            <!--category_noを、条件で変えて表示する方法が分かりませんでした-->
                            <tr>
                                <td><?=htmlspecialchars($row['id'])?></td>
                                <td><?=htmlspecialchars($row['title'])?></td>
                                <td><?=htmlspecialchars($row['category_no'])?></td>
                                <td><?=htmlspecialchars($row['comment'])?></td>
                                <td><?=htmlspecialchars($row['created'])?></td> 
                            </tr>
                    <?php
                        }
                        $post_data = null;
                    ?>
                    </tbody></table>
            </div>
        </div>
        </div>
        <div class="footer">
            <p><b>Y&I group.Inc</b></p>
        </div>
    </body>
</html>